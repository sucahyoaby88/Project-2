@extends('layout.main')

@section('title','Data Mobil')

@section('container')

<section>
  <h3>Data Mobil</h3>
  <div class="tbl-header">
   <table cellpadding="0" cellspacing="0" border="0">
    <thead>
    <tr>
      <th>Nama</th>
      <th>Harga</th>
      <th>Stock</th>
      <th>Gambar</th>
      <th>Aksi</th>
    </tr>
    </thead>
  </table>
</div>

<div class="tbl-content">
 <table cellpadding="0" cellspacing="0" border="0">
  <tbody>

@foreach($mobil_list as $mobil)
    <tr>
      <td class="text-center">{{ $mobil->nama_mobil }}</td>
      <td class="text-center">{{ $mobil->harga_mobil }}</td>
      <td class="text-center">{{ $mobil->stok }}</td>
      <td class="text-center"><img src="{{$mobil->getGambar()}}" alt="Gambar" height="120px" width="200px"></td>
        <td class="text-center"><a class="btn btn-success btn-sm" href="{{ url('mobil/'. $mobil->id)}}">Detail</a>
            <a class="btn btn-warning btn-sm" href="{{ url('mobil/'. $mobil->id. '/edit')}}">Edit</a>
            <a class="btn btn-danger btn-sm" href="{{ url('mobil/'. $mobil->id. '/delete')}}">Delete</a></td>
    </tr>
  </tbody>
  @endforeach
</table>
</div>
</section>

<a href="mobil/create" role="button" class="btn btn-primary btn-block">Tambah Mobil</a>
@endsection