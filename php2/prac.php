<?php 

$host = "localhost";
$user="root";
$pass="";
$dbname="search";

$conn = mysqli_connect($host,$user,$pass,$dbname);
if($conn->connect_error){
	die("connection failed" . $conn->connect_error);
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
.container{
	margin-top: 200px;
	margin-left: 400px;

}
.btn{
	margin-left: 60px;
}

	</style>
</head>
<body >
	<div class="container">
	<form class="form" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
		<input type="text" name="stuname" placeholder="Enter student name" size="30"><br><br>
				<input type="text" name="stumark" placeholder="Enter student marks" size="30"><br><br>
				<button class="btn btn-primary" type="submit" name="submit-btn"> Submit</button>
			</form>
		</div>


<?php 


if(isset($_POST['submit-btn'])){

    $usrname = $_POST['stuname'];
    $usrmark=$_POST['stumark'];

 $duplicate = mysqli_query($conn,"SELECT * FROM sear WHERE name ='$usrname'");
 $row = mysqli_fetch_assoc($duplicate);
	if(mysqli_num_rows($duplicate)>0){
		if( $usrname ==$row['name'] ){
			echo "student name already taken ";

		}
		 else{

    	$sql = "INSERT INTO `sear`(`id` ,`name`,`marks`) VALUES (0, '$usrname' ,'$usrmark') ";
    	$result = $conn->query($sql);
    	if($result == True){
    		echo "record inserted successfully";
    	}
    	else{
    		echo "record insertion failed";
    	}
	}
}
   } 

?>


























<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>