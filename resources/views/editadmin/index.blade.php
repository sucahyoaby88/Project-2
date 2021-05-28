<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href=" {{asset('css/form.css')}} ">
	<title>Edit Admin Data</title>
</head>
<body>

	<div id="users">
	<div class="form">
        <center><h2>Edit Admin Data</h2></center>
        <form action="{{ url('admin/' . $admin->id . '/update') }}" method="post" enctype="multipart/form-data"> 
        @csrf
	        <div class="input-field">  
	            <input name="name" type="text" required="" value="{{$admin->name}}">
	            <label>Please Enter Your Name</label>
				<span></span> 
	        </div> 

            <div class="input-field">  
	            <input name="email" type="text" required="" value="{{$admin->email}}"> 
				<label>Please Enter Your Email</label>
				<span></span>
            </div>

			<center><input type="submit" value="submit" class="btn"></center> 
	</form> 
	</div>
	</div> 

</body>
</html>