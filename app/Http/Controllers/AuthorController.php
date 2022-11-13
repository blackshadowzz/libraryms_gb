<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Author::paginate(6);
            return view('authors.index',compact('data'));
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
            'fullname'=>'required|max:100',
            'contact'=>'required|max:15',
            
        ]);
        $data=$re->except(['_token']);
       
        if(Author::create($data)){
            return redirect('authors')
                        ->with('message','One record has been created successfully');
        }
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function show(Author $author)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        if(!$id) return abort(404);
        $data=Author::where('id',$id)->first();
        if($data)
            return view("authors.update",compact('data'));
                    // ->with('message','Update record successfully');

    }

    /** 
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req,$id)
    {
        //
        $val=Validator($req->all(),[
            'fullname'=>'required|max:100',
            'contact'=>'required|max:15',

        ]);
        $data=$req->except(['_token','_method','id']);

        $r=Author::where('id',$id)->update($data);
        if($r){
            return redirect("authors")
            ->with('message','Done! the record has been updated.!!!');
        }
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Author::where('id',$id)->delete());
        return redirect('authors')
        ->with('message','One record has been delete!');
    }
}
