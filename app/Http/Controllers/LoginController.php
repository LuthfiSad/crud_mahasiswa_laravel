<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function index(){
        return view('section.login');
    }

    public function authenticate(Request $request)
    {
        // dd('berhasil masuk');
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required',
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/');
        }
 
        return back()->with('error', 'Gagal Login, Silahkan Daftar');
    }

    public function logout(Request $request){
        Auth::logout();
 
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return to_route('login');
    }

    
}
