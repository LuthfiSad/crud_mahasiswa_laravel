<?php

namespace App\Http\Controllers;

use App\Models\ClassMahasiswa;
use Illuminate\Http\Request;

class ClassMahasiswaController extends Controller
{
    //
    public function store(Request $request){
        // dd($request);
        $validated = $request->validate([
            'kelas' => 'required|unique:class_mahasiswas|max:2'
        ]);
        ClassMahasiswa::create($validated);
        return redirect('/mahasiswa')->with('success', 'Berhasil Menambah Kelas');
    } 
}
