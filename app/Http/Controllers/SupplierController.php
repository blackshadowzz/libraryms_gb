<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $re)
    {
        $sup=Supplier::all();
        if($re->query('search')){
            $sup=Supplier::where('supplier_name',"LIKE","%".$re->query('search')."%")->get();
        }
        return view('suppliers.index',compact('sup'));
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
    public function store(Request $request)
    {
        $sup=$request->except(['_token','updated_by']);
        if(Supplier::create($sup)){
            return redirect('suppliers')->with('message','Supplier one record was created successfully!');
        }
        return back();
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function show(Supplier $supplier)
    {
        $sup=Supplier::find($supplier->id)->first();
        return view('suppliers.view',compact('sup'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function edit(Supplier $supplier)
    {
        $sup=Supplier::find($supplier->id)->first();
        return view('suppliers.update')->with('sup',$sup);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Supplier $supplier)
    {
        $sup=$request->except(['_token','_method','id','created_by']);
        if(Supplier::where('id',$supplier->id)->update($sup)){
            return redirect('suppliers')->with('message','Supplier one record was created successfully!');
        }
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supplier $supplier)
    {
        if(!$supplier->id) return abort(404);
        
        if(Supplier::where('id', $supplier->id)->delete()){
            return redirect('suppliers')->with('message_danger','Supplier one record was deleted successfully!');
        }
        return back();
    }
}
