
@extends('layouts.admin.layout')
<title>{{config('app.name')}} - Sudah Verifikasi</title>
@section('section')
    

    @if (Session::get('success'))
    <div >
        {{ Session::get('success') }}
    </div>
    @endif

    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Username</th>
                <th>bukti</th>
            </tr>
        </thead>
        <tbody>
            
        @foreach ($user as $item)
        <tr>
            <td>{{ $item->name }}</td>
            <td>{{ $item->username }}</td>
            <td><a href="{{$item->urlbukti}}">{{$item->urlbukti}}</a></td>
            <td>
              

                
                
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
   
    <a href="{{ url('ListUser') }}">kembali</a>
</body>
</html>