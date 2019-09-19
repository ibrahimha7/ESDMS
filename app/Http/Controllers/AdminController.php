<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Leave;
use App\Supervisor;


class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $supervisors = Supervisor::all();
        
        
        return view('admin.index')
                ->with('supervisors',$supervisors);
                
    }

    

    

    public function addSupervisor(Request $request) {
        $request->validate([
            'supervisor'    => 'required',
            'email'         => 'required|email',
            'password'      => 'required|min:6'
        ]);

        $newSupervisor = new \App\Supervisor;

        $newSupervisor->name = $request->supervisor;
        $newSupervisor->email = $request->email;
        $newSupervisor->password = \Hash::make($request->password);

        $newSupervisor->save();

        return redirect('/staff')->with('success','New Supervisor is Added');
    }

    public function deleteSupervisor($id) {
        \App\Supervisor::find($id)->delete();

        return redirect('/staff')->with('error','Supervisor is Deleted');
    }
}
