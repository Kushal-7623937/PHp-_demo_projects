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

img{
	width: 100%;
}
body{
	background-image: url(https://wallpaperaccess.com/full/2182418.jpg);

}
.container-fluid{
	margin-top: 30px;
	background-color: dark;
	width: 25%;
	margin-left: 520px;
	border:  2px solid white;

}
h5{
	padding-left: 120px;
	padding-top: 10px;
}
.ty{
	color: white;
}
#log{
	margin-left: 70px;
}
#lin{
	padding-left: 70px;
}
#gm{
margin-left: 17px;
margin-top: 10px;
}
#gg{
	margin-left: 17px;
}
#check{
	margin-left: 17px;
}

	 </style>
</head>
<body class="bg-dark">
	<div class="container-fluid ">

	


		<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
			<h5 class="text-white pl-5"> LOGIN </h5>
		<input type ="text" name="username" size="30" placeholder="Enter your username" id="gm"><br><br>	
		<input type ="password" name="password" size="30" placeholder="Enter your Password" id="gg"><br><br>
		<input type="checkbox" id="check" > <span class="text-white">Remember me</span><br><br>
<a class="btn btn-secondary" href="welcome.php" id="log"> Login</a>		
<a class="btn btn-info" href="rq.php"> Register</a><br><br>
		 <i class="fa-solid fa-lock-keyhole"></i> <a href="up.php" id="lin" class="text-white">Forgot your password? </a></p>
		 
	</form>
</div>

<?php 

$Login = new log();

if(isset($_POST['submit-btn'])){
	$result = $Login->logUsers($_POST['username'] , $_POST['password']);

	if($result == 20){
		echo
		 "<script>alert('Login successfull');</script>";
		header('Location: welcome.php');
	}
	
	else if($result == 21){
		echo 
		"<script>alert('username or password is incorrect');</script>";
	}
	else if($result == 11){
		echo "<script>alert('user not registered');</script>";
	}
}

?>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>
</html>