@extends('layout.main')

@section('title', 'data user')

@section('container')

<body style="background: white;">

<div id="user" class="user">

<center><h2 style="color : black;">Data User</h2></center>
<a href="{{url ('user_cetak') }}" class="btn btn-primary" style="color : black;">Cetak PDF</a>
@if (!empty($user_list))
<table class="table" border="1">
<thead class="user" style="background: #5bff63; color: black;">
<tr>
<th>No</th>
<th>Nama</th>
<th>Alamat</th>
<th>Aksi</th>
</tr>
</thead>
<tbody>
@php $i=1 @endphp
@foreach($user_list as $user)
<tr class="user">
<td style="background: white; color: black">{{ $i++ }}</td>
<td style="background: white; color: black">{{ $user->nama_user }}</td>
<td style="background: white; color: black">{{ $user->alamat }}</td>
<td style="background: white; color: black"><a class="btn btn-success" href="{{ url('user/' . $user->id . '/edituser') }}">Edit</a>
<a class="btn btn-danger" href="{{ url('user/' . $user->id . '/delete') }}">Delete</a>
</td>
</tr>
@endforeach
</tbody>
</table>
@else
<p style="color : black;">Tidak ada data user.</p>
@endif

<div class="table-bottom" style="color : black;">
<div class="pull-left">
<strong> Jumlah User : {{ $jumlah_user }}</strong>
</div>
<div class="pull-right">
{{ $user_list->links() }}
</div>
</div>

<div id="footer" style="color : black;">

<center><p> &copy; 2019 project1</p></center>
</div>

</div>

<link rel="stylesheet" href="{{ asset('css/custom3.css') }}" >

</body>

@endsection