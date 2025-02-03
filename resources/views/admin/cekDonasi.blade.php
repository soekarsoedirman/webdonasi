@extends('layouts.app')

@section('content')

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Zakat alqud</title>
    </head>
    <body>
        <div>
            <h1>daftar donasi / belum di cek</h1>
        </div>
        <div>

        </div>
        <div>
           
            <table>
                <tr>
                    <th>program</th>
                    <th>nama donatur</th>
                    <th>alamat</th>
                    <th>telpon</th>
                    <th>email</th>
                    <th>nominal</th>
                    <th>metode pembayaran</th>
                    <th>bukti transfer</th>
                    <th>verifikasi</th>
                    <th>hapus</th>
                </tr>
                @foreach ($donasi as $donasi)
                
                    <tr>
                        <form action="{{route('tambah.donatur', $donasi)}}" method="POST">
                            @csrf
                            <td><input type="text" name="program" value="{{$donasi->program}}" ></td>
                            <td><input type="text" name="nama_donatur" value="{{$donasi->nama_donatur}}" ></td>
                            <td><input type="text" name="alamat" value="{{$donasi->alamat}}" ></td>
                            <td><input type="number" name="telpon" value="{{$donasi->telpon}}" ></td>
                            <td><input type="email" name="email" value="{{$donasi->email}}" ></td>
                            <td><input type='number' name="nominal" value="{{$donasi->nominal}}" ></td>
                            <td><p>{{$donasi->metode_pembayaran}}</p></td>
                            <td>
                                <input type="text" name="pesan" value="{{$donasi->pesan}}" style="display: none;">
                                <input type="text" name="blog_id" value="{{$donasi->blog_id}}" style="display: none;">
                                <img src="" alt="bukti tf">
                            </td>
                            <td><button type="submit" onclick="return confirm('tambahkan data ini?')">verifikasi</button></td>
                        </form>
                        <td>
                            <form action="{{route('hapus.donasi', $donasi)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('hapus donasi?')">hapus</button>
                            </form>
                        </td>
                    </tr>
                
                @endforeach
            </table>
                
                    
                    
                    
                    
                    
                    
                    
                
            
        </div>
    </body>

@endsection