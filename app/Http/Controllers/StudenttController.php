<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group;

class StudenttController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $groups = \App\Group::all();
        

        return view('studentt.index')->with('groups',$groups);
                
        //return view('studentt.index');
        //
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('studentt.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this ->validate($request,[
            'group_no' => 'required'
            
        ]);
        //create post
        $group =new Group;
        $group ->group_no=$request->input('group_no');
        
        $group->save();

        return redirect('/studentt')->with('success',$group ->group_no=$request->input('group_no'),'Added');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $group =Group::find($id);
        $group->delete();
        return redirect('/studentt')->with('error','Group Deleted');
    }
}
