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


        <!-- Hapus bae nu ie -->
        <div class="utama">
            <h1>ie kumpulan program t</h1>
        </div>
        
        <br>
        <br>
    
        
        <div class="tampil-Program">
            @foreach ($blogs as $blog)
            <div class="program">
                <img src="" alt="foto program">
                <h3>
                    <a href="{{route('program.show', $blog)}}">{{$blog->title}}</a>
                </h3>
                <p>{{Str::limit($blog->content, 100)}}</p>
                <a href="{{route('donasi', $blog)}}">donasi sekarang</a>
            </div>
            @endforeach
        </div>

        <!-- nah beda, hapus bae ie -->
        <div class="hapus">
            <h3>halo saya ikan</h3>
        </div>
    </body>
@endsection



