<!DOCTYPE html>
<html>
<head>
	<title>Laporan PDF</title>
	<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h4>struk</h4>
	</center>
 
	<table class='table table-striped'>
		<thead>
			<tr>
				<th>Nama User</th>
				<th>Nama Mobil</th>
				<th>Nama Admin</th>
				<th>Jumlah</th>
				<th>Total Harga</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>{{ ! empty($penjualan->users->nama_user) ?
        $penjualan->users->nama_user : '-'  }}</td>
				<td>{{ ! empty($penjualan->mobil->nama_mobil) ?
        $penjualan->mobil->nama_mobil : '-' }}</td>
                <td>{{ ! empty($penjualan->admin->name) ?
        $penjualan->admin->name : '-' }}</td>
                <td>{{ $penjualan->stock }}</td>
				<td>{{ ! empty($penjualan->users->total_harga) ?
        $penjualan->users->total_harga : '-' }}</td>
			</tr>
		</tbody>
	</table>
 
</body>
</html>