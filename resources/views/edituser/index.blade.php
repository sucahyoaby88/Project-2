<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href=" {{asset('css/form.css')}} ">
	<title>Edit User Data</title>
</head>
<body>
	<div id="user">
	<div class="form">
        <center><h2>Edit User Data</h2></center> 
        <form action="{{ url('user/' . $user->id . '/update') }}" method="post" enctype="multipart/form-data"> 
        @csrf
	        <div class="input-field"> 
	            <input name="nama_user" type="text" required="" value="{{$user->nama_user}}">
				<label>Please Enter Your Name</label>
				<span></span>  
	        </div> 

            <div class="input-field">  
	            <input name="alamat" type="text" required="" value="{{$user->alamat}}"> 
				<label>Please Enter Your Address</label>
				<span></span>
            </div>

			<center><input type="submit" value="submit" class="btn"></center> 
	</form> 
	</div>
	</div> 

	</body>
</html>