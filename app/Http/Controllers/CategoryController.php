<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Rack;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $re)
    {
        $cate=Category::with('Rack')->get();
        if($re->query('search')){
            $cate=Category::where('category_name','LIKE','$'.$re->query('search').'%')
            ->with('Rack')->get();
        }
        $rack=Rack::get(['id','rack_name']);
        return view('racks.categories.index',compact('rack','cate'));

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

        $cate=new Category();
        $cate->category_name=$re->category_name;
        $cate->rack_id=$re->rack_id;
        $cate->description=$re->description;
        $cate->created_by=$re->created_by;
        if($cate->save()){
            return redirect('categories')->with('message','Category record created successfully!');
        }
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        if(!$category->id) return abort(404);
        $cate=Category::with('Rack')->where('id',$category->id)->first();
        return view('racks.categories.view',compact('cate'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        $cate=Category::with('Rack')->find($category->id)->first();
        $rack=Rack::get(['id','rack_name']);
        return view('racks.categories.update',['cate'=>$cate,'rack'=>$rack]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $cate=$request->except(['_token','_method','id','created_by']);
        // $cate=Category::find($category->id);
        // $cate->category_name=$request->category_name;
        // $cate->rack_id=$request->rack_id;
        // $cate->description=$request->description;
        // $cate->updated_by=$request->updated_by;
        $c=Category::where('id',$category->id)->update($cate);
        if($c){
            return redirect('categories')->with('message','Category record updated successfully!');
        }
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        if(Category::where('id', $category->id)->delete()){
            return redirect('categories')->with('message','Category record deleted successfully!');
        }
        return back();
    }
}
