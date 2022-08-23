<?php

$host = "localhost";
$user="root";
$pass="";
$dbname = "labj";


$conn = mysqli_connect($host , $user , $pass, $dbname);

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
</head>
<body>
	<h4> ADD EXPENSE </h4><hr>
	<form method = "post" action="<?php echo $_SERVER['PHP_SELF'];?>">
		<p> Enter the budget Title </p>
		<input type = "text" name="budgetHead" placeholder="Enter budget title">
		<p> Enter the cost of item </p>
		<input type = "text" name="budgetCost" placeholder="Enter cost of title"><br><br>
		<input type ="submit" name="submit-btn" value="submit">
	</form><br><br><br><br><br>

<?php 

if(isset($_POST['submit-btn'])){
	$budgTit = $_POST['budgetHead'];
	$budgCos = $_POST['budgetCost'];


	$sql = "INSERT INTO labjaa (id ,Title , ost) VALUES (0 , '$budgTit' , '$budgCos')";
	$result = $conn->query($sql);

	
}

?>

<?php 


$sql = "SELECT * FROM labjaa";

$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<div class="container">
		<h3> Total Expenses </h3>
	
	<table class="table">
		<tr>
			<th> Id </th>
			<th> Budget Title</th>
			<th> Cost </th>
			<th> Action </th>
		</tr>

		<?php
       if($result->num_rows > 0){

       	while($row = $result->fetch_assoc()){
?>
       <tr>
       	<td> <?php echo $row['id'] ?></td>
       		<td> <?php echo $row['Title'] ?></td>
       			<td> <?php echo $row['ost'] ?></td>
       			<td><a class="btn btn-info" href="update1.php?id=<?php echo $row['id']; ?>">Edit</a>&nbsp;<a class="btn btn-danger" href="delete1.php?id=<?php echo $row['id']; ?>">Delete</a></td>
       		</tr>

<?php 
	}
       }
?>
</table>
</div>
<?php
$sql = "SELECT SUM(ost) from `labjaa`";
$result = $conn->query($sql);
while($row = mysqli_fetch_array($result)){
    echo " Total Cost: ". $row['SUM(ost)'];
    echo "<br>";
}

?>
</body>
</html>


























	
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>		
</body>
</html>