<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Leave;



class SupervisorController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:supervisor');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*
        $student = \Auth::user()->student()->first();
        
        
        return view('supervisor.dashboard')
            ->withStudent($student);
            
        */
        
        
        $leaves = Leave::all();
        
        
        return view('supervisor.dashboard')->with('leaves',$leaves);

            
            
    }
    

    
}
