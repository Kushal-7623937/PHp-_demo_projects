<?php
$host = "localhost";
$user="root";
$pass="";
$dbname="reg";

$conn = mysqli_connect($host ,$user ,$pass, $dbname);

if($conn->connect_error){
	die("connection failed" .$conn->connect_error);
}


?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<title></title>
	<style>
body{
	background-color: darkcyan;
}
.container{
	background-color: white;
	width: 30%;
	margin-top: 100px;
	box-shadow: 100px;
	border: 3px solid transparent;
            border-image: linear-gradient(to right, #d41ed4, #3013c2);
            border-image-slice: 1;
            padding: 25px;
}
#nn{
	width: 30%;
	height: 20%;
	margin-left: 120px;
}
.btn{
	margin-bottom: 50px;
	margin-left: 80px;
}
#mi{
	margin-left: 40px;
}
h3{
	padding-top: 30px;
}


	</style>
</head>
<body >
	<div class="container">
	<img src="https://logos.textgiraffe.com/logos/logo-name/Kushal-designstyle-pastel-m.png" id="nn">
		<h3 class="text-center"> Change Password</h3><br>
<form method = "post" action="">
	
	<input type ="text" name="username" value="<?php echo $username ;?>" size ="30" placeholder ="Enter your username" id="mi"><br><br>

	<input type ="password" name="password" value="<?php echo $password ;?>" size ="30" placeholder="Enter your new Password" id="mi"><br><br>
	<button class="btn btn-info" type="submit" name="update"> update password</button>
</form>
</div>
<?php
if(isset($_POST['update'])){
	$username = $_POST['username'];
	$password=$_POST['password'];


	$sql = "UPDATE `regi` SET `password` = '$password' WHERE  `username` = '$username'";
	$result= $conn->query($sql);

	
}


if(isset($_GET['password'])){
	$password = $_GET['password'];

	$sql = "SELECT * FROM `regi` WHERE `username` = '$username'";
$result = $conn->query($sql);

if($result->num_rows > 0){
	while($row = $result->fetch_assoc()){
		$username = $row['username'];
		// $userd= $row['id'];
		$password=$row['password'];
	}
}
}

?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>

