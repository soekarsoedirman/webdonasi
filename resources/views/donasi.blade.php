@extends('layouts.app')

@section('content')
        <form action="{{route('donasi.store', $blog)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <h2>Transfer Mandiri</h2>
            <h2>Donasi Program {{$blog->title}}</h2>
            <label for="blog_id">nama Program</label>
            <input type="text" name="blog_id" value="{{$blog->id}}" readonly style="display: none;">
            <input type="text" name="program" value="{{$blog->title}}" readonly>
            <label for="metode_pembayaran">metode pembayaran</label>
            <select name="metode_pembayaran" id="" required>
                <option value="">pilih 1</option>
                <option value="BANK">BANK</option>
                <option value="Dompet_Digital">Dompet Digital</option>
            </select>
            <label for="nominal">nominal</label>
            <input type="number" name="nominal" required>

            <label for="foto_bukti">bukti transfer</label>
            <input type="file" name="foto_bukti"  required>
            @error('foto_bukti')
                <div style="color: red;">{{ $message }}</div>
            @enderror

            <label for="nama_donatur">nama</label>
            <input type="text" name="nama_donatur" required>
            <label for="alamat">alamat</label>
            <input type="text" name="alamat" required>

            <label for="telpon">telpon</label>
            <input type='number' name="telpon" required>
            @error('telpon')
                <div style="color: red;">{{ $message }}</div>
            @enderror

            <label for="email">email</label>
            <input type="email" name="email" required>
            <label for="pesan">pesan kebaikan</label>
            <input type="text" name="pesan" required>
            <button type="submit">submit</button>
        </form>  
@endsection