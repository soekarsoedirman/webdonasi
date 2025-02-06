<?php

namespace App\Http\Controllers;

use App\Models\Zakat;
use Illuminate\Http\Request;
use App\Models\Donasi;

class DonasiController extends Controller
{
    /**
     * Display a listing of the resource.m
     */
    public function index($id)
    {
        $blog = Zakat::findOrFail($id);
        return view('donasi', compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $blog)
    {
        $request->validate([
            'foto_bukti' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'telpon' => 'required|digits_between:9,13',
        ]);
    
        // Simpan file ke dalam direktori public/donasi
        $file = $request->file('foto_bukti');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('donasi'), $filename);
    
        // Simpan data ke database
        Donasi::create([
            'blog_id' => $request->blog_id,
            'program' => $request->program,
            'metode_pembayaran' => $request->metode_pembayaran,
            'nominal' => $request->nominal,
            'foto_bukti' => 'donasi/' . $filename, // Simpan path foto
            'nama_donatur' => $request->nama_donatur,
            'alamat' => $request->alamat,
            'telpon' => $request->telpon,
            'email' => $request->email,
            'pesan' => $request->pesan,
        ]);
        return redirect()->route('home')->with('success', 'Donasi berhasil dikirim!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
