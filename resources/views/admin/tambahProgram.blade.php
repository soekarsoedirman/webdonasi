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
        <h1>Tambah Program</h1>
    </div>
    <div>
        <form action="{{route('program.tambahProgram')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="title">masukkan judul</label>
            <input type="text" name="title" required>
            <label for="image">tambahkan gambar</label>
            <input type='file' name="image" required>
            <label for="content">masukkan isi</label>
            <textarea name="content" id="" required></textarea>
            <button type="submit">simpan</button>
        </form>
    </div>
</body>


@endsection

