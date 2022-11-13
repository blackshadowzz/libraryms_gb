<?php

namespace App\Http\Controllers;

use App\Models\Rack;
use Illuminate\Http\Request;

class RackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rack=Rack::all();
        return view('racks.index')->with('rack', $rack);
    }

    /**
     * Show the form for creating a new resource.
     *h-    
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
        $rack=new Rack();
        $rack->rack_name=$request->rack_name;
        $rack->description=$request->description;
        $rack->created_by=$request->created_by;
        if($rack->save()){
            return redirect('racks')->with('message','Rack record created successfully');
        }
        return back();
        
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rack  $rack
     * @return \Illuminate\Http\Response
     */
    public function show(Rack $rack)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rack  $rack
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rack=Rack::find($id)->first();
        return view('racks.update')->with('rack',$rack);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rack  $rack
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rack  $rack)
    {
    //    $ra=Rack::where('id',$rack->id);
        $ra=$request->except(['_token','_method','id']);
    //    $ra->rack_name=$request->rack_name;
    //    $ra->description=$request->description;
    //    $ra->created_by=$request->created_by;
    //    $ra->updated_by=$request->updated_by;
        if(Rack::where('id',$rack->id)->update($ra)){
            return redirect('racks')->with('message','Rack record updated successfully');
        }
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rack  $rack
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rack $rack)
    {
        if(Rack::where('id', $rack->id)->delete()){
            return redirect('racks')->with('message','Rack record deleted successfully!');
        }
        return back();
    }
}
