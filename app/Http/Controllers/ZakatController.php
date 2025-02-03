<?php

namespace App\Http\Controllers;

use App\Models\Donasi;
use App\Models\Donatur;
use Illuminate\Http\Request;
use App\Models\Zakat;


class ZakatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         // Contoh mengambil data dari tabel 'blogs'
         $blogs = Zakat::limit(6)->get();


         // Kirim data ke view 
         return view('index', compact('blogs'));
    }

    public function postingan(string $id)
    {
        $blogs = Zakat::find($id);
        $pesan = Donatur::where('blog_id', $id)->get(); 
        return view('blog', compact('blogs', 'pesan'));
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
    public function show()
    {
        $blogs = Zakat::all();
        return view('program', compact('blogs'));
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
