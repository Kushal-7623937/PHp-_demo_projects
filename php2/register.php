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
	border: 2px solid white;
}
#gg{
	margin-left: 40px;
}
#gm{
	margin-left: 40px;
	margin-top: 20px;
}
#check{
	margin-left: 40px;
}
#log{
	margin-left: 70px;
width: 60%;
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
	<h5 class="text-grey text-center" id="gh">REGISTER HERE</h5>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
		<input type ="hidden" name="id">
		<input type ="text" name="name" size="30" placeholder="Enter your Name" id="gm"><br>	
	<input type ="text" name="username" size="30" placeholder="Enter your Username" id="gm"><br>
			<input type ="text" name="email" size="30" placeholder="Enter your Gmail" id="gm"><br>	
	
		<input type ="password" name="password" size="30" placeholder="Enter your Password" id="gm">
		<input type ="password" name="confirmpassword" size="30" placeholder="Confirm your Password" id="gm"><br>
		<br>
		
		<button class="btn btn-info" type="submit" name="submit" id="log">Register </button><br><br>
		 

	</form>
</div>

<?php 
$register = new Register();
if(isset($_SESSION['id'])){
		header('Location:recrea.php');


}
if(isset($_POST["submit"])){

  $res =$register->registration($_POST["name"],$_POST["username"],$_POST["email"],$_POST["password"],$_POST["confirmpassword"]);

  if($res == 1){
    echo
    "<script>alert('Registration Successful');</script>";
    header('Location:recrea.php');


  }
  else if($res == 10){
    echo
    "<script>alert('username already taken ');</script>";
  }
  else if($res== 100){

    echo
    "<script>alert('password didnt match');</script>";
  }
}

?>











<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>


</body>
</html>




















