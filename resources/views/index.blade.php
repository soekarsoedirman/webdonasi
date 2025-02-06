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
        <!-- Headlline pokona nu jadi sorotan lah, tenyaho aing ngarana -->
        <div class="utama">
            <h1>Sorotan atau Program Utama</h1>
        </div>
        
        <br>
        <br>
    
        <!-- nampilken program max 6 -->
        <div class="tampil-Program">
            @foreach ($blogs as $blog)
            <div class="program">
                <img src="{{ asset($blog->image) }}" width="300px" alt="Gambar Program">
                <h3>
                    <a href="{{route('program.show', $blog)}}">{{$blog->title}}</a>
                </h3>
                <p>{{Str::limit($blog->content, 100)}}</p>
                <a href="{{route('donasi', $blog)}}">donasi sekarang</a>
            </div>
            @endforeach
        </div>
    </body>
@endsection



