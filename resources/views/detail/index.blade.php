@extends('layout.main')

@section('title', 'detail')

@section('container')

<div id="mobil">
    <h2>Detail Mobil</h2>

    <table class="table table-striped">
        <tr>
        <th>Nama</th>
        <td>{{ $mobil->nama_mobil }}</td>
        </tr>
        <tr>
        <th>Harga</th>
        <td>{{ $mobil->harga_mobil }}</td>
        </tr>
        <tr>
        <th>Stock</th>
        <td>{{ $mobil->stock }}</td>
        </tr>
        <tr>
        <th>Gambar</th>
        <td><img src="{{$mobil->getGambar()}}" alt="Gambar" height="120px" width="200px"></td>
        </tr>
    </table>
</div>

@endsection