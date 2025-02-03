<?php

namespace App\Http\Controllers;

use App\Models\Zakat;
use Illuminate\Http\Request;
use App\Models\Donasi;

class DonasiController extends Controller
{
    /**
     * Display a listing of the resource.
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
        Donasi::create($request->all());
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
