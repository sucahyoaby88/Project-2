<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href=" {{asset('css/form2.css')}} ">
    <title>Form Penjualan</title>
</head>
<body>

<div class="penjualan">
<div class="form">
<h2>Form Penjualan</h2>
<form action="{{ url('datamobil/transaksi') }}" method="post" enctype="multipart/form-data">       
        @csrf 
        <div class="input-field"> 
        @if(!empty($mobil)) 
        <select name="id_mobil" class="form-control" id="exampleFormControlSelect1">
                @foreach($mobil as $m)
                <option value="{{$m->id}}">{{$m->nama_mobil}}</option>
                @endforeach
			</select>
            @else
            <p>Tidak ada data Mobil</p>
            @endif
            <label>Please Enter Car Name</label> 
            <span></span>
        </div>

        <div class="input-field"> 
        @if(!empty($admin)) 
        <select name="id_admin" class="form-control" id="exampleFormControlSelect1">
                @foreach($admin as $a)
                <option value="{{$a->id}}">{{$a->name}}</option>
                @endforeach
			</select>
            @else
            <p>Tidak ada Admin</p>
            @endif
            <label>Please Enter Admin Name</label> 
            <span></span>
        </div>

        <div class="input-field"> 
        @if(!empty($users)) 
        <select name="id_user" class="form-control" id="exampleFormControlSelect1">
                @foreach($users as $u)
                <option value="{{$u->id}}">{{$u->nama_user}}</option>
                @endforeach
			</select>
            @else
            <p>Tidak ada User</p>
            @endif
            <label>Please Enter User Name</label> 
            <span></span>
        </div>

        <div class="input-field"> 
            <input name="stock" type="text" required="">
            <label>Please Enter Quantity</label> 
            <span></span>
        </div>
        

            <center><input type="submit" value="submit" class="btn"> </center>
    </form> 
    </div>
    </div>

</body>
</html>