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
            <h4> Laporan PDF </h4>
        </center>

        <table class='table table-bordered'>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                @php $i=1 @endphp
                @foreach($admin as $a)
                <tr>
                    <th>{{ $i++ }}</th>
                    <th>{{ $a->name }}</th>
                    <th>{{ $a->email }}</th>
                </tr>
                @endforeach
            </tbody>        
        </table>

    </body>

</html>