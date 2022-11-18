<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use App\Models\Supplier;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $re)
    {
        $book=Book::with('Supplier')->with('Category')->with('Author')->paginate(5);
        if($re->query('search')){
            $book=Book::where('book_title','LIKE','%'.$re->query('search').'%')
            ->orWhere('isbn','LIKE','%'.$re->query('search').'%')
            ->orWhere('language','LIKE','%'.$re->query('search').'%')
            ->with('Supplier')->with('Category')->with('Author')->paginate(5);
        }
        $cate=Category::with('Rack')->get();
        $auth=Author::get(['id','fullname']);
        $supp=Supplier::get(['id','supplier_name','company_name']);
        return view('books.index',compact('book','auth','supp','cate'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $re)
    {
        $this->validate($re,[
            'book_title'=>'required|max:200|min:3',
            'isbn'=>'required|max:30|min:5',
            'description'=>'required|max:500|min:5',
        ]);
        $data=$re->except(['_token','photo','updated_by']);
        $data['image_path']='';
        if($re->hasFile('photo') && $re->file('photo')->isValid()){
            $image=time().'.'.$re->file('photo')->getClientOriginalExtension();
            $re->file('photo')->storeAs('books/cover',$image,'public');
            $data['image_path']=$image;
        }
        if(Book::create($data)){
            return redirect('books')
                        ->with('message','One record has been created successfully!!!');
        }
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(!$id) return abort(404);
        $book=Book::where('id',$id)->with('Supplier')->with('Category')->with('Author')->first();
        return view('books.view',compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        //
    }
}
