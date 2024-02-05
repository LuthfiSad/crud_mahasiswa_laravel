<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    //
    public function index(){
        return view('section.registration');
    }

    public function store(Request $request)
    {
        // dd('berhasil masuk');
        $request['no_telp'] = "0" . ltrim($request['no_telp'], '0');
        $validated = $request->validate([
            'name' => 'required|max:255',
            'no_telp' => 'required|unique:users|numeric|min_digits:10|max_digits:13',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8'
        ]);
        $validated['password'] = bcrypt($validated['password']);
        // dd($validated);
        User::create($validated);
        return to_route('login')->with('success', 'Berhasil Registrasi');
    }
}
