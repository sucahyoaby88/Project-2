<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href=" {{asset('css/form.css')}} ">
	<title>Edit</title>
</head>
<body>
	<div id="mobil">
	<div class="form">
        <center><h2>Edit Car Data</h2></center> 
        <form action="{{ url('mobil/' . $mobil->id . '/update') }}" method="post" enctype="multipart/form-data"> 
        @csrf
	        <div class="input-field"> 
	            <input name="nama_mobil" type="text" required="" value="{{$mobil->nama_mobil}}">
				<label>Please Enter Car Name</label> 
            <span></span> 
	        </div> 

            <div class="input-field">  
	            <input name="harga_mobil" type="text" required="" value="{{$mobil->harga_mobil}}"> 
				<label>Please Enter Car Price</label> 
            <span></span>
            </div>

            <div class="input-field">  
	            <input name="stock" type="text" required="" value="{{$mobil->stock}}"> 
				<label>Please Enter Car Stock</label> 
            <span></span>
            </div>

            
			<div class="input-field">  
	            <input name="gambar" type="file" required="">   
				<label>Please Enter Car Photo</label>          
            </div> 	
	
			<center><input type="submit" value="submit" class="btn"></center>
	</form> 
	</div>
	</div> 

</body>
</html>