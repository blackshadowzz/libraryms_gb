<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use App\Models\Supplier;
use Illuminate\Http\Request;

class BookController extends Controller
{

    public function index(Request $re)
    {
        $book=Book::with('Supplier')->with('Category')->with('Author')->paginate(5);
        if($re->query('search')){
            $book=Book::where('book_title','LIKE','%'.$re->query('search').'%')
            ->orWhere('isbn','LIKE','%'.$re->query('search').'%')
            ->orWhere('language','LIKE','%'.$re->query('search').'%')
            ->with('Supplier')->with('Category')->with('Author')->paginate(5);
        }
        $b_count=Book::all()->count();
        $cate=Category::with('Rack')->get();
        $auth=Author::get(['id','fullname']);
        $supp=Supplier::get(['id','supplier_name','company_name']);
        return view('books.index',compact('book','auth','supp','cate','b_count'));
    }


    public function create()
    {
        //
    }

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


    public function edit(Book $book)
    {
        $book=Book::where('id', $book->id)->with('Supplier')->with('Category')->with('Author')->first();
        $cate=Category::with('Rack')->get();
        $auth=Author::get(['id','fullname']);
        $supp=Supplier::get(['id','supplier_name','company_name']);
        return view('books.update',compact('book','cate','auth','supp'));
    }


    public function update(Request $re, Book $book)
    {
        $this->validate($re,[
            'book_title'=>'required|max:200|min:3',
            'isbn'=>'required|max:30|min:5',
            'description'=>'required|max:500|min:5',
        ]);
        $data=$re->except(['_token','photo','created_by','_method','id']);

        if($re->hasFile('photo') && $re->file('photo')->isValid()){
            $image=time().'.'.$re->file('photo')->getClientOriginalExtension();
            $re->file('photo')->storeAs('books/cover',$image,'public');
            $data['image_path']=$image;
        }
        if(Book::where('id',$book->id)->update($data)){
            return redirect('books')
                        ->with('message_danger','One record has been updated successfully!!!');
        }
        return back();
    }

    public function destroy(Book $book)
    {
        if(Book::where('id', $book->id)->delete()){
            return redirect('books')->with('message_danger', 'One record has been deleted successfully!');
        }
    }
}
