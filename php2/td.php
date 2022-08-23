<?php

$host = "localhost";
$user="root";
$pass="";
$dbname="to do";

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
<script src="https://kit.fontawesome.com/d5f543fe2e.js" crossorigin="anonymous"></script>
	<title></title>
</head>

<style>
	
#ta{
	margin-top: 10px;
	margin-left: 400px;
}

#tdli{
	margin-top: 50px;
	margin-left: 470px;
}
#sant{
	margin-left: 400px;
	background-color: rgb(199, 200, 201);
}
#ic{
	margin-left: 400px;
	margin-top: 50px;
}
#up{
	 background: linear-gradient(to right, rgb(116, 222, 200), rgb(194, 110, 223));
	 border-radius: 10px;
}
h5{
	font-weight: bolder;
}
.strike { 
  background-color: limegreen;
}

</style>
<body style="font-family: 'Poppins', sans-serif;">


<nav class = "navbar navbar-expand-lg bg-dark">
	<h3 class ="text-white" style="font-family: 'Lobster', cursive; font-size: 2rem;"> ToDo-List</h3>
</nav>
<h4 id="tdli"> Enter Your ToDo-Tasks </h4>
<form method="post" action = "<?php echo $_SERVER['PHP_SELF'];?>">
<input type="text" size="45" placeholder="Enter Today Tasks" name="taskName" id="ta">
<button type="submit" name ="submit-btn" class="btn btn-info"> <i class="fa-solid fa-plus"></i></button>
</form> <br><br>

<?php

if(isset($_POST['submit-btn'])){
	$todayTask = $_POST['taskName'];
// if(!empty($todayTask)){
// 	echo "<script>";
// 		echo 'alert("please Enter Your Task")';
// 		echo "</script>";
// 	}


	$sql = "INSERT INTO `list`(`id` , `tasks`) VALUES(0 ,'$todayTask')";
	$result = $conn->query($sql);

	if($result == TRUE){
		echo "<script>";
		echo "record updated successfully";
		echo "</script>";
	}
}

?>


<?php 
$sql = "SELECT * FROM list";
$result =$conn->query($sql);

?>
<?php
if($result->num_rows >0){
	while($row = $result->fetch_assoc()){


?>

<input type="text" value="<?php echo $row['tasks'];?>" id="$row['tasks']"  size="40">
<a class="btn btn-primary"  id="nu" onclick="strikes()"><i class="fa-solid fa-check fa-xs"></i></a>
<a class="btn btn-info" href="td.php?id=<?php echo $row['id']; ?>"><i class="fa-solid fa-pencil fa-xs"></i></a>
<a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>"><i class="fa-solid fa-trash fa-xs"></i></a><br><br>
<script>

	function strikes(){
		
var div_id ="$row['tasks'] "; //im assuming youre getting $row['id'] correctly

 document.getElementById("$row['tasks']").style.backgroundColor = "Green";
}
</script>


<?php }
}
?>
<?php
if(isset($_POST['update'])){
	$todayTask = $_POST['manu'];
	$userd = $_POST['user'];


	$sql = "UPDATE `list` SET `tasks` = '$todayTask' WHERE  `id` = '$userd'";
	$result= $conn->query($sql);

	
}


if(isset($_GET['id'])){
	$userd = $_GET['id'];

	$sql = "SELECT * FROM `list` WHERE `id` = '$userd'";
$result = $conn->query($sql);

if($result->num_rows > 0){
	while($row = $result->fetch_assoc()){
		$todayTask = $row['tasks'];
		$userd= $row['id'];

		
	}
}
}

?>
<h5 class="text-primary "> Update your selected Task Here</h5>
<form method = "post" action="">
	<input type="hidden" name="user" value="<?php echo $userd ;?>">
	<input type ="text" name="manu" value="<?php echo $todayTask ;?>" size ="30">
	<input type ="submit" name="update" value="Update" id="up">
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>
</html>