@extends('layout.main')

@section('title', 'data mobil')

@section('container')

<body style="background: white;">

<div id="mobil" class="mobil">

<center><h2 style="color : black;">Data Mobil</h2></center>

<a href="{{url ('mobil/create') }}" style="color : black;">Tambah Mobil</a>
<a href="{{url ('mobil_cetak') }}" style="color : black;">Cetak PDF</a>
@if (!empty($mobil_list))
<table class="table" border="1">
<thead class="mobil" style="background: #5bff63; color: black;">
<tr>
<th>No</th>
<th>Nama</th>
<th>Harga</th>
<th>Stock</th>
<th>Gambar</th>
<th>Aksi</th>
</tr>
</thead>
<tbody>
@php $i=1 @endphp
@foreach($mobil_list as $mobil)
<tr class="mobil">
<td style="background: white; color: black;">{{ $i++ }}</td>
<td style="background: white; color: black;">{{ $mobil->nama_mobil }}</td>
<td style="background: white; color: black;">{{ $mobil->harga_mobil }}</td>
<td style="background: white; color: black;">{{ $mobil->stock}}</td>
<td style="background: white;"><img src="{{$mobil->getGambar()}}" alt="Gambar" height="120px" width="200px"></td>
<td style="background: white;"><a class="btn btn-info" href="{{ url('mobil/' . $mobil->id) }}">Detail</a>
<a class="btn btn-success" href="{{ url('mobil/' . $mobil->id . '/edit') }}">Edit</a>
<a class="btn btn-danger" href="{{ url('mobil/' . $mobil->id . '/delete') }}">Delete</a>
</td>
</tr>
@endforeach
</tbody>
</table>
@else
<p style="color : black;">Tidak ada data mobil.</p>
@endif

<div class="table-bottom" style="color : black;">
<div class="pull-left">
<strong> Jumlah Mobil : {{ $jumlah_mobil }}</strong>
</div>
<div class="pull-right">
{{ $mobil_list->links() }}
</div>
</div>

<div id="footer" style="color : black;">

<center><p> &copy; 2019 project1</p></center>
</div>

</div>

<link rel="stylesheet" href="{{ asset('css/custom.css') }}" >


</body>

@endsection