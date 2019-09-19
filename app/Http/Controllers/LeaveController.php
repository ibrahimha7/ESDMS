<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Leave;
use App\Supervisor;
use Illuminate\Support\Facades\Auth;






class LeaveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $supervisors = \App\Supervisor::all();
        $leaves = Leave::all();
        return view('staff.index')
                ->withSupervisors($supervisors)->with('leaves',$leaves);
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
        
        $leave =new Leave;
        //$this->middleware('auth:supervisor');
        
        $leave ->leave_by=$request->input('leave_by');

        
        $leave->save();

        return redirect('/supervisor')->with('success','Leave Application Sent');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        /*
        return DB::table('supervisors')
        ->join('_leave','_leave.id','supervisors.id')
        ->select('_leave.*')
        ->get();
        */
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $leave =Leave::find($id);
        $super = Supervisor::find($id);
        
        $leave ->status=$request->input('status');
        

        $leave->save();

        return redirect('/staff')->with('normal','The Leave Application updated');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $leave =Leave::find($id);
        $leave->delete();
        return redirect('/staff')->with('error','Leave Application Deleted');
    }
}
