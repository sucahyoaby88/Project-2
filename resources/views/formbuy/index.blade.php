<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href=" {{asset('css/form2.css')}} ">
    <title>Form User</title>
</head>
<body>

<div class="user">
<div class="form">
<center><h2>Form User</h2></center>
<form action="{{ url('datamobil/formbuy2') }}" method="post" enctype="multipart/form-data">       
        @csrf 
        <div class="input-field"> 
            <input name="nama_user" type="text" required="">
            <label>Please Enter Your Name</label> 
            <span></span>
        </div>
        <div class="input-field"> 
            <input name="alamat" type="text" required=""> 
            <label>Please Enter Your Address</label> 
            <span></span>
        </div>
        
        <div class="input-field"> 
	        <input name="harga_mobil" type="text" required="" value="{{$mobil->harga_mobil}}" readonly> 
            <label>Please Enter Car Price</label>
            <span></span>
        </div>

        <div class="input-field"> 
	        <input name="id_mobil" type="text" required="" value="{{$mobil->id}}" readonly> 
            <label>Please Enter Car ID</label>
            <span></span>
        </div>

            <center><input type="submit" value="submit" class="btn"> </center>
    </form> 
    </div>
    </div>

</body>
</html>