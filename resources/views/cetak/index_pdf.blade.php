<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Laporan PDF </title>
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    </head>
    <body>
        <style type="text/css">
            table tr td
            table tr th{
                font-size: 9pt;
            }
        </style>

        <center>
            <h4> Laporan PDF</h4>
        </center>

        <table class='table table-bordered'>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Stock</th>
                    <th>Gambar</th>
                </tr>
            </thead>
            <tbody>
                @php $i=1 @endphp
                @foreach($mobil as $m)
                <tr>
                    <th>{{ $i++ }}</th>
                    <th>{{ $m->nama_mobil }}</th>
                    <th>{{ $m->harga_mobil }}</th>
                    <th>{{ $m->stock }}</th>
                    <th><img src="{{$m->getGambar()}}" alt="Avatar" height="120px" width="200px"></th>
                </tr>
                @endforeach
            </tbody>        
        </table>

    </body>

</html>