<?php 
include "ops.php";

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/d5f543fe2e.js" crossorigin="anonymous"></script>
	<title></title>
</head>
<style>
body{
	background-color: darkcyan;
}
.container{
	background-color: white;
	width: 30%;
	margin-top: 80px;
	box-shadow: 100px;
	
}
#gg{
	margin-left: 40px;
}
#gm{
	margin-left: 40px;
	margin-top: 30px;
}
#check{
	margin-left: 40px;
}
#log{
	margin-left: 100px;
}
#logo{
	margin-left: 70px;
width: 60%;
}
#lin{
	padding-left: 40px;
	margin-top: 30px;
	outline: none;
	color: grey;
	border-style: none;
	list-style-type: none;
	outline-style: none;
}
#gh{
	padding-top: 20px;
}
#nn{
	width: 30%;
	height: 20%;
	margin-left: 130px;
}

	</style>
<body >

<div class="container">
	<img src="https://logos.textgiraffe.com/logos/logo-name/Kushal-designstyle-pastel-m.png" id="nn">
	<h5 class="text-grey text-center" id="gh"> SIGN IN</h5>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
	<input type ="text" name="username" size="30" placeholder="Enter your username" id="gm"><br><br>	
		<input type ="password" name="password" size="30" placeholder="Enter your Password" id="gg"><br><br>
		<input type="checkbox" id="check" > Remember me<br><br>
		<button class="btn btn-secondary" type="submit" name="submit-btn" id="log">Login </button>
		<a class="btn btn-info" href="register.php"> Register</a><br><br>
		 <i class="fa-solid fa-lock-keyhole"></i> <a href="up.php" id="lin">Forgot your password? </a></p>
		 <p class="text-grey text-center"> OR </p>
		 <button class="btn btn-primary" type="submit" name="submit" id="logo">Login with Email/Mobile </button><br><br>

	</form>
</div>

<?php 

$login = new Login();
if(isset($_SESSION['id'])){
		header('Location:welcome.php');


}

if(isset($_POST['submit-btn'])){
	$result = $login->login($_POST['username'] , $_POST['password']);

if($result == 1){
	$_SESSION['login'] = true;
	$_SESSION['id'] = $login->idUser();
	echo "<script> alert('login succesfull');</script>";
	header('Location:welcome.php');

}
else if ($result == 10){
		echo "<script> alert('Wrong password');</script>";
}
else if ($result == 100){
		echo "<script> alert('User not registered');</script>";
}
}
?>





















<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>