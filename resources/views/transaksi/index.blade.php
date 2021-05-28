<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/animate/animate.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/perfect-scrollbar/perfect-scrollbar.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
<!--===============================================================================================-->    
    <link rel="stylesheet" href="{{asset('css/transaksi.css')}}">
    
    <title>Data Transaksi</title>
</head>
<body>

<div id="penjualan">

<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
                <center><h2>Data Penjualan</h2><br/>
<a class="btn btn-primary" href="{{ url('datamobil') }}">Back To Car Data</a></center><br/>
@if (!empty($penjualan_list))
					<table>
						<thead>
							<tr class="table100-head">
                                <th>No</th>
                                <th>Nama User</th>
                                <th>Nama Admin</th>
                                <th>Nama Mobil</th>
                                <th>Jumlah Barang</th>
                                <th>Total Harga</th>
                                <th>Aksi</th>   
                            </tr>
                        </thead>
<tbody>
@php $i=1 @endphp
@foreach($penjualan_list as $penjualan)
<tr>
<td>{{ $i++ }}</td>
<td>{{  ! empty($penjualan->users->nama_user) ?
        $penjualan->users->nama_user : '-' }}
<td>{{  ! empty($penjualan->admin->name) ?
        $penjualan->admin->name : '-' }}
<td>{{  ! empty($penjualan->mobil->nama_mobil) ?
        $penjualan->mobil->nama_mobil : '-' }}</td>
<td>{{ $penjualan->stock }}</td>
<td>{{ ! empty($penjualan->users->total_harga) ?
        $penjualan->users->total_harga : '-' }}</td>
<td><a class="btn btn-primary" href="{{ url('penjualan_cetak/' . $penjualan->id) }}">Cetak Struk</a>
</td>
</tr>
@endforeach
</tbody>
</table>
@else
<p>Tidak ada data penjualan.</p>
@endif



<div class="table-bottom">
<div class="pull-left">
<center><strong> Jumlah Penjualan : {{ $jumlah_penjualan }}</strong></center>
</div>
<div class="pull-right">
{{ $penjualan_list->links() }}
</div>
</div>
<br/>
<center><p> &copy; 2019 project1</p></center>




    </div>
        </div>
            </div>
                </div>
                

                
<!--===============================================================================================-->	
	<script src="{{asset('vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('js/main.js')}}"></script>

</div>
</body>

</html>