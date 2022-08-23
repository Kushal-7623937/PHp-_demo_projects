<?php 
$host ="localhost";
$user="root";
$pass="";
$dbname ="export";


$conn = mysqli_connect($host , $user,$pass,$dbname);

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
<script src="https://kit.fontawesome.com/d5f543fe2e.js" crossorigin="anonymous"></script>
	<title></title>
	<style>

.container{
	margin-left: 400px;
	margin-top: 50px;
}
.btn{
	margin-left: 60px;
}
form{
	margin-top: 50px;
}









	</style>
</head>
<body>

	<div class="container">
		<h3> Fill The Customer Details</h3>
<form method ="post" action="">

	<input type="text" placeholder="Enter customer name" size="30" name="cuname"><br><br>
		<input type="text" placeholder="Enter customer id" size="30" name="cuid"><br><br>
			<input type="text" placeholder="Enter customer number" size="30" name="cunumber"><br><br>
				<input type="text" placeholder="Enter customer mail" size="30" name="custmail"><br><br>
					<input type="text" placeholder="Enter customer storage charges" size="30" name="cusstorage"><br><br>
						<input type="text" placeholder="Enter customer transport charges" size="30" name="custransport"><br><br>

						<button type="submit" class="btn btn-primary" name="submit-btn">submit</button>
					</form>
				</div>

<?php 

if(isset($_POST['submit-btn'])){
	$customername =$_POST['cuname'];
	$customerid =$_POST['cuid'];
	$customernumber=$_POST['cunumber'];
	$customermail =$_POST['custmail'];
	$customerstorage =$_POST['cusstorage'];
	$customertransport =$_POST['custranport'];
}
















<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>