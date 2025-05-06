@extends('layouts.app')

@section('content')


        <!-- Hapus bae nu ie -->
        <div class="utama">
            <h1>ie kumpulan program t</h1>
        </div>
        
        <br>
        <br>
    
        
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

        <!-- nah beda, hapus bae ie -->
        <div class="hapus">
            <h3>halo saya ikan</h3>
        </div>
@endsection



