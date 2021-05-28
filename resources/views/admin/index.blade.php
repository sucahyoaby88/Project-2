@extends('layout.main')

@section('title', 'data admin')

@section('container')

<body style="background : white;">

<div id="users" class="users">

<center><h2 style="color : black;">Data Admin</h2></center>

<a href="{{url ('admin_cetak') }}" class="btn btn-primary" style="color : black;">Cetak PDF</a>
@if (!empty($admin_list))
<table class="table" border="1">
<thead class="users" style="background: #5bff63; color: black;">
<tr>
<th>No</th>
<th>Nama</th>
<th>Email</th>
<th>Aksi</th>
</tr>
</thead>
<tbody>
@php $i=1 @endphp
@foreach($admin_list as $admin)
<tr class="users">
<td style="background: white; color: black;">{{ $i++ }}</td>
<td style="background: white; color: black;">{{ $admin->name }}</td>
<td style="background: white; color: black;">{{ $admin->email }}</td>
<td style="background: white;"><a class="btn btn-success" href="{{ url('admin/' . $admin->id . '/editadmin') }}">Edit</a>
<a class="btn btn-danger" href="{{ url('admin/' . $admin->id . '/delete') }}">Delete</a>
</td>
</tr>
@endforeach
</tbody>
</table>
@else
<p style="color : black;">Tidak ada data Admin.</p>
@endif

<div class="table-bottom" style="color : black;">
<div class="pull-left">
<strong> Jumlah Admin : {{ $jumlah_admin }}</strong>
</div>
<div class="pull-right">
{{ $admin_list->links() }}
</div>
</div>

<div id="footer" style="color : black;">

<center><p> &copy; 2019 project1</p></center>
</div>

</div>

<link rel="stylesheet" href="{{ asset('css/custom2.css') }}" >

</body>

@endsection