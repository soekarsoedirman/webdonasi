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
            <h1>daftar donatur</h1>
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
                    <th>metode bayar</th>
                    <th>hapus</th>
                </tr>
                @foreach ($donatur as $donatur)
                
                    <tr>
                        <td><p>{{$donatur->program}}</p></td>
                        <td><p>{{$donatur->nama_donatur}}</p></td>
                        <td><p>{{$donatur->alamat}}</p></td>
                        <td><p>{{$donatur->telpon}}</p></td>
                        <td><p>{{$donatur->email}}</p></td>
                        <td><p>{{$donatur->nominal}}</p></td>
                        <td><p>{{$donatur->metode_pembayaran}}</p></td>
                        <td>
                            <form action="{{route('hapus.donatur', $donatur)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('hapus donatur?')">hapus</button>
                            </form>
                        </td>
                    </tr>
                
                @endforeach
            </table>
        </div>
    </body>

@endsection