<?php

namespace App\Http\Controllers;

use App\Models\ClassMahasiswa;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index(){
        return view('section.index', [
            'mahasiswa' => Mahasiswa::count(),
            'kelas' => ClassMahasiswa::count()
        ]);
    }
}
