<?php

namespace App\Http\Controllers;

use App\Models\Position;
use App\Models\Staff;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $re)
    {
        $staff=Staff::with('Position')->get();
        if($re->query('search')){
            $staff=Staff::where('first_name','LIKE','%'.$re->query('search').'%')
            ->orWhere('last_name','LIKE','%'.$re->query('search').'%')
            ->orWhere('email','LIKE','%'.$re->query('search').'%')->with('Position')->get();
        }
        // $sta=Staff::with('Position')->find($staff->id)->first();
        $pos=Position::get(['id','position_name']);
        return view('staffs.index',['staff'=>$staff,'pos'=>$pos]);   

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
        $staff=$re->except(['_token','photo']);
        $staff['image_path']='';
        if($re->hasFile('photo') && $re->file('photo')->isValid()){
            $image=time().'.'.$re->file('photo')->getClientOriginalExtension();
            $re->file('photo')->storeAs('staffs/profile',$image,'public');
            $staff['image_path']=$image;
        }
        if(Staff::create($staff)){
            return redirect('staffs')->with('message','Staff one record was created successfully.!');
        }
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sta=Staff::with('Position')->where('id',$id)->first();
        if($sta){
            return view('staffs.view')->with('sta',$sta);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function edit(Staff $staff)
    {
        $sta=Staff::with('Position')->where('id',$staff->id)->first();
        $pos=Position::get(['id','position_name']);
        return view('staffs.update',['sta'=>$sta,'pos'=>$pos]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function update(Request $re, Staff $staff)
    {
        
        $sta=$re->except(['_token','id','_method','photo']);

        if($re->hasFile('photo') && $re->file('photo')->isValid()){
            $image=time().'.'.$re->file('photo')->getClientOriginalExtension();
            $re->file('photo')->storeAs('staffs/profile',$image,'public');
            $sta['image_path']=$image;
        }
        $s=Staff::where('id',$staff->id)->update($sta);
        if($s){
            return redirect('staffs')->with('message','Staff one record was updated successfully.!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function destroy(Staff $staff)
    {
        if(Staff::where('id', $staff->id)->delete()){
            return redirect('staffs')->with('message','Staff record deleted successfully!');
        }
        return back();
    }
}
