@extends('layouts.app')

@section('content')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/index.css'])
    <title>Zakat alqud</title>
</head>

<body>
    <div>
        <h1>Edit Program</h1>
    </div>
    <div>
        <form action="{{route('program.updateProgram', $blogs)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="title">masukkan judul</label>
            <input type="text" name="title" value="{{$blogs->title}}" required>
            <label for="image">tambahkan gambar</label>
            <input type='file' name="image"  required>
            <label for="content">masukkan isi</label>
            <textarea name="content" id="" required>{{$blogs->content}}</textarea>
            
            <button type="submit">simpan</button>
        </form>
    </div>
    <div class="daftar-pesan">
        <h4>Hapus pesan</h4>
        @foreach ($pesan as $pesans)
        <div class="pesan">
            <h5>{{$pesans->nama_donatur}}</h5>
            <p>{{$pesans->pesan}}</p>
            <p>{{$pesans->created_at}}</p>
            <form action="{{route('hapus.pesan', $pesan)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">hapus pesan</button>
            </form>
        </div>
            
        @endforeach
    </div>
</body>


@endsection

