<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Leave;
use App\Supervisor;
use Illuminate\Support\Facades\DB;






class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $supervisors = Supervisor::all();
        $leaves = Leave::all();
        return view('staff.index')
                ->withSupervisors($supervisors)->with('leaves',$leaves);
        
        //
        
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
        //
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
        /*
        $leave =Leave::find($id);
        $leave ->status=$request->input('title');
        
        $leave->save();

        return redirect('/staff')->with('success','The Leave Application was Accepteds');
        */
        
        $number = Supervisor::find($id)->balance;
        //$number - 1;
        //$bal = Supervisor::where('balance');
        
        //var_dump(Supervisor::find($id)->balance);
        if ($number>=1){
            DB::table('supervisors')
            ->where('id', $id)
            ->update(['balance' => $number-1]);
        }
        else{
            return redirect('/staff')->with('error','There is no balance'); 
        }
        
        
        
            //$number->save();

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
        //
    }
}
