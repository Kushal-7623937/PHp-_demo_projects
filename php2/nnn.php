<?php 

$host ="localhost";
$user ="root";
$pass="";
$dbname="naa";

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
	<title></title>
</head>
<body>
	<h3> Add Expense </h3><hr>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
	Enter the Title<br>
	<input type ="text" name="heading" placeholder="Enter title"><br><br>
	Enter the amount<br>
   <input type ="number" name="col" placeholder="Enter amount"><br><br>
   <input type="submit" name="submit-btn" 
                             value="submit">
</form>


<?php 
if( isset($_POST["submit-btn"])){
	
	print_r($_POST);
	
	
}

// $sql = "INSERT INTO nadhi(id , title ,cost) VALUES(0,'$field_head','$field_cost')";
// if(mysqli_query($conn,$sql)){
// 	echo "new record updated success";
// }
// else{
// 	echo "record creation failed";
// }

?>
<?php echo"<pre>"; print_r($_POST);die();?>
</body>
</html>