@extends('layouts.app')

@section('content')
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @vite(['resources/css/blog.css'])
        <title>Program</title>
    </head>
    <body>
        <div class="program">
            <h1>{{$blogs->title}}</h1>
            <img src="{{ asset($blogs->image) }}" width="300px" alt="Gambar Program">
            <p>{{$blogs->content}}</p>
            <a href="{{route('donasi', $blogs)}}">donasi sekarang</a>
        </div>
        <div class="daftar-pesan">
            <h4>Pesan kebaikan</h4>
            @foreach ($pesan as $pesans)
            <div class="pesan">
                <h5>{{$pesans->nama_donatur}}</h5>
                <p>{{$pesans->pesan}}</p>
                <p>{{$pesans->created_at}}</p>
            </div>
                
            @endforeach
        </div>
    </body>
@endsection



