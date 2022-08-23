<?php

$host = "localhost";
$user="root";
$pass="";
$dbname="drop";


$conn = mysqli_connect($host ,$user ,$pass ,$dbname);

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
	<title>Drop down fetch</title>
</head>

<style>

#nay{

	margin-left: 350px;
}
.text-info{
	margin-left: 350px;
}
#cx{
	margin-left: 350px;
}
#yan{
	padding-top: 30px;
}
.btn{
	margin-left: 380px;
}
</style>
<body>

<h3 class ="text-center text-danger pt-5"> Student names and courses they are interested</h3><br><br>

<form method ="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<h5 class="text-info"> Enter your name</h5>
<input type = "text" name ="stuName" size="30" placeholder="Enter your full name" id="nay">

<h5 class="text-info"id="yan"> Select course you are interested</h5>
<select name="coursera" id="cx">
	<option>Select</option>
		<option>FrontEnd</option>
	<option>BackEnd</option>
	<option>BigData Engineer</option>
	<option>Full Stack</option>
	<option>Ethical Hacking</option>
</select><br><br>

<button type="submit" name ="submit-btn" class="btn btn-primary"> Submit</button>
</form>


<?php

if(isset($_POST['submit-btn'])){
	$studentName = $_POST['stuName'];
	$studentCourse= $_POST['coursera'];


	$sql = "INSERT INTO `down`(`id`, `student`, `value`) VALUES (0 , '$studentName' , '$studentCourse')";
	$result = $conn->query($sql);
	if($result == TRUE){
		echo "<script>";
		echo 'alert("record updated successfully")';
		echo "</script>";
	}
	else{
		echo "Record updation failed";
	}
}

?>
 




<?php

$sql = "SELECT * FROM down";
$result=$conn->query($sql);

if($result->num_rows > 0){
	while($row = $result->fetch_assoc()){

		echo "Id :{$row['id']} <br>" .
		"student Name :{$row['student']}<br>" .
		"Selected Course:{$row['value']} <br>" .
		 "--------------------------------<br>";
	}


}

?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>
</html>