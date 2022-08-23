<?php

include "tms.php";
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<style>
body{
	background-image: url(http://trumpwallpapers.com/wp-content/uploads/Truck-Wallpaper-02-1920x1080-1.jpg);
	background-size: cover;
	background-repeat: no-repeat;
}
.container{
margin-top: 230px;
border: 1px solid white;
width: 23%;
margin-left: 10px;
}
#gm{
	margin-top: 30px;
}
#log{
	margin-top: 20px;
	margin-left: 80px;
}
#gh{
	margin-left: 50px;
}

	</style>
</head>
<body class="bg-dark">

<div class="container">
	<h5 class="text-warning" id="gh">REGISTER HERE</h5>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
		
			<input type ="text" name="email" size="30" placeholder="Enter your Gmail" id="gm"><br>	
	
		<input type ="password" name="password" size="30" placeholder="Enter your Password" id="gm">
		
		<br>		
		<button class="btn btn-info" type="submit" name="submit-btn" id="log">Register </button><br>
		 

	</form>
</div>

<?php 
$Check = new check();

if(isset($_POST['submit-btn'])){
	$result= $Check->getUsers($_POST["email"] , $_POST["password"]);

	if($result == 10){
		echo "<script> alert('User already Registered, Register with different email'); </script>";
	}
	else if($result == 1){
				echo "<script> alert('record uploaded successfully); </script>";
				header('Location:tmslogin.php');

	}
}

?>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>