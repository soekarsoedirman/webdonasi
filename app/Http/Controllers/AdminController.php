<?php

namespace App\Http\Controllers;

use App\Models\Zakat;
use App\Models\Donasi;
use App\Models\Donatur;
use App\Models\Dokumentasi;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blog = Zakat::all();
        return view('admin.admin', compact('blog'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    public function buatProgram(){
        return view('admin.tambahProgram');
    }


    public function tambahProgram(Request $request)
    {
        $request->validate([
            'title'   => 'required|string|max:255',
            'image'   => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'content' => 'required|string',
        ]);
    
        // Simpan gambar ke folder public/program
        $file = $request->file('image');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('program'), $filename);
    
        // Simpan data ke database
        $data = $request->except('image'); // Ambil semua data kecuali image
        $data['image'] = 'program/' . $filename; // Simpan path gambar ke database
    
        Zakat::create($data);
        return redirect()->route('admin')->with('Program telah ditambahkan');
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function editProgram(string $id)
    {
        $blogs = Zakat::find($id);
        $pesan = Donasi::where('blog_id', $id)->get(); 
        return view('admin.editProgram', compact('blogs', 'pesan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateProgram(Request $request, string $id)
    {
        $blog = Zakat::find($id);
        $blog->update($request->all());
        return redirect()->route('admin');
    }

    public function destroyProgram(string $id)
    {
        $blog = Zakat::find($id);
        $blog->delete();
        Donatur::where('blog_id', $id)->delete();
        return redirect()->back()->with('success', 'Program berhasil dihapus');
    }

    public function hapusPesan($id)
    {
        $pesan = Donatur::find($id);
        $pesan->pesan = null;
        $pesan->blog_id = null;
        return redirect()->back()->with('success', 'Pesan berhasil dihapus');
    }

    /**
     * Remove the specified resource from storage.
     */
    

    public function cekdonasi()
    {
        $donasi = Donasi::all();
        return view('admin.cekDonasi', compact('donasi'));
    }

    public function destroyDonasi(string $id)
    {
        $donasi = Donasi::find($id);
        $donasi->delete();
        return redirect()->back()->with('success', 'Donatur berhasil dihapus');
    }

    public function tambahDonatur(Request $request, $blog)
    {
        Donatur::create($request->all());
        $donasi = Donasi::find($blog);
        $donasi->delete();
        return redirect()->back()->with('success', 'Donatur berhasil ditambah');
    }

    public function daftarDonatur()
    {
        $donatur = Donatur::all();
        return view('admin.daftarDonatur', compact('donatur'));
    }

    public function destroyDonatur(string $id)
    {
        $donasi = Donatur::find($id);
        $donasi->delete();
        return redirect()->back()->with('success', 'Donatur berhasil dihapus');
    }
}

