@extends('layouts.app')

@section('content')
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
        <div>
            <h3>recap donasi</h3>
            <table>
                <tr>
                    <td>
                        <div>
                            <p>jumlah donatur</p>
                            <p>{{$donatur}}</p>
                        </div>
                    </td>
                    <td>
                        <div>
                            <p>nominal terkumpul</p>
                            <p>Rp. {{$jumlah}}</p>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
@endsection



