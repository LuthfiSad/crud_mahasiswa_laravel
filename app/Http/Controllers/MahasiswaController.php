<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use App\Models\ClassMahasiswa;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // dd(Mahasiswa::all());
        return view('section.mahasiswas', [
            "mahasiswas" => Mahasiswa::search(request(['search', 'kelas']))->paginate(10),
            "classes" => ClassMahasiswa::orderBy('kelas')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        // dd(ClassMahasiswa::orderBy('kelas')->get());
        return view('section.createmahasiswa', [
            "classes" => ClassMahasiswa::orderBy('kelas')->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // ddd($request);
        // return $request->file('image')->store('public/images');
        $validated = $request->validate([
            'nama' => 'required|max:255',
            'nim' => 'nullable|unique:mahasiswas|numeric|min_digits:10|max_digits:10',
            'image' => 'image|file|max:3072',
            'class_mahasiswa_id' => 'required',
            'tempat' => 'required|string',
            'lahir' => 'required|date',
        ]);
        if($request->file('image')){
            $validated['image'] = $request->file('image')->store('images');
        }
        // dd($validated);
        // dd($validated);
        Mahasiswa::create($validated);
        return redirect('/mahasiswa')->with('success', 'Berhasil Menambah Data');
    }

    /**
     * Display the specified resource.
     */
    public function show(Mahasiswa $mahasiswa)
    {
        //
        // dd($mahasiswa->nama);
        return view('section.mahasiswa', [
            "mahasiswa" => $mahasiswa
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        //
        return view('section.editmahasiswa', [
            'mahasiswa' => $mahasiswa,
            "classes" => ClassMahasiswa::orderBy('kelas')->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        //
        $validated = $request->validate([
            'nama' => 'required|max:255',
            'nim' => 'required|numeric|min_digits:10|max_digits:10|unique:mahasiswas,nim,' . $mahasiswa->id,
            'image' => 'image|file|max:3072',
            'class_mahasiswa_id' => 'required',
            'tempat' => 'required|string',
            'lahir' => 'required|date',
        ]);
        // dd($validated);
        if($request->file('image')){
            // dd($request);
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validated['image'] = $request->file('image')->store('images');
        }
        $mahasiswa->update($validated);
        return redirect('/mahasiswa')->with('success', 'Berhasil Mengupdate Data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        //
        if($mahasiswa->image){
            Storage::delete($mahasiswa->image);
        }
        Mahasiswa::destroy($mahasiswa->id);
        return redirect('/mahasiswa')->with('success', 'Berhasil Menghapus Data');
    }
}
