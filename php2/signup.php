<?php

include "con.php";


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<title></title>
	<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&family=Roboto:ital,wght@0,300;0,400;1,300&display=swap');

.nn{
	margin-left: 500px;
}
#mn{
	margin-top: 40px;
	margin-left: 500px;
}
#kn{
	
		margin-left: 500px;

}
#btn{
	margin-left: 580px;
	background-color: #94bbe9;
	border-radius: 10px;
	width: 70px;

}
h6{
	padding-top: 20px;
	padding-left: 500px;
}
#nin{
	padding-top: 50px;
	padding-left: 530px;
}

</style>
</head>

<body >
<nav class = "navbar navbar-expand-lg bg-light">
	<h3 class="text-dark"> Signup Form</h3>
</nav>
<!-- <div class = "container  " style="width:30% ; height :50%; margin-top:160px ;"> -->
	<h3 id="nin">  SignUp Form <hr style="width:20%;"></h3>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<h4  id="mn"> Username </h4>
<input type="text" name="mail" placeholder="Enter your Username" class="nn" size ="30"><br><br>
<h4  id="kn"> Password </h4>
<input type="password" name="pass" placeholder="Enter your Password" class="nn" size ="30"><br><br>

<input type ="submit" value="save" name="submit-btn" id="btn">


<?php

if(isset($_POST['submit-btn'])){
	$userName = $_POST['mail'];
	$userPass= $_POST['pass'];


	$sql = "INSERT INTO `pro2ta`(id , user , password) VALUES (0 , '$userName' , '$userPass')";
	$result = $conn->query($sql);

	if($result == TRUE){
		header('Location: login.php');

	}
}
?>




















<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>		

</body>
</html>