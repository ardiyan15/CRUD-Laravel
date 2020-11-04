<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('coba')->only('test');
    }

    public function index()
    {
        return view('auth.login');
    }

    public function loginprocess(Request $request)
    {
        $request->validate([
            'username' => 'required'
        ]);

        $validUsername = ['ardi', 'iyan', 'agus'];

        if (in_array($request->username, $validUsername)){
            session(['username' => $request->username]);
            return redirect('/');
        } else {
            return back()->withInput()->with('info', 'Username not valid');
        }

    }

    public function logout()
    {
        session()->forget('username');
        return redirect('login')->with('info', 'Successfull Logout');
    }
}
