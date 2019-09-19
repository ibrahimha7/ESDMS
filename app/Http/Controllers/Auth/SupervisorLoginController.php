<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SupervisorLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:supervisor');
    }

    public function showLoginForm()
    {
        return view('auth.supervisor.login');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email'     => 'required|email',
            'password'  => 'required|min:6'
        ]);


        if (\Auth::guard('supervisor')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            return redirect()->intended(route('supervisor.dashboard'));
        }

        return redirect()->back()->withInput($request->only(['email', 'remember']));
    }
}
