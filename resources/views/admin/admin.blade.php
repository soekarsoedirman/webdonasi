@extends('layouts.app')

@section('content') 
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Zakat alqud</title>
    </head>
    <body>
        <!-- Headlline pokona nu jadi sorotan lah, tenyaho aing ngarana -->
        <div class="utama">
            <h1>Halaman admin</h1>
        </div>

        <div>
            <a href="{{route('program.buatProgram')}}">
                <button>tambah program</button>
            </a>
            <a href="{{route('cekdonasi')}}">
                <button>cek donasi</button>
            </a>
            <a href="{{route('daftar.donatur')}}">
                <button>daftar donatur</button>
            </a>
        </div>
        
        <br>
        <br>
    
        <!-- nampilken program max 6 -->
        <div class="tampil-Program">
            @foreach ($blog as $blog)
            <div class="program">
                <img src="{{ asset($blog->image) }}" width="300px" alt="Gambar Program">
                <h3>
                    <a href="{{route('program.show', $blog)}}">{{$blog->title}}</a>
                </h3>
                <p>{{Str::limit($blog->content, 100)}}</p>
                <a href="{{route('program.editProgram', $blog)}}"><button>edit</button></a>
                <form action="{{route('program.hapusprogram', $blog)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button  type="submit" onclick="return confirm('Yakin ingin menghapus?')"> hapus </button>
                </form>
                
            </div>
            @endforeach
        </div>
    </body>
@endsection



