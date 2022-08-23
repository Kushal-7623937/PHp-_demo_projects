<?php

$host="localhost";
$user="root";
$pass="";
$dbname="export";


$conn=mysqli_connect($host,$user,$pass,$dbname);

if($conn->connect_error){
	die("connection failed" . $conn->connect_error);
}

?>
<?php


$sql = "SELECT * FROM excel";
$result =$conn->query($sql);




?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/d5f543fe2e.js" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
<script  src="cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
	<title></title>
</head>
<style>

	.btn{
		float: right;
	}
	.btn-warning{
		float: left;
		margin-left: 1100px;
	}
	#aad{
		margin-left: 600px;
	}

	</style>
<body>
	<form  method="post" action="">

		<h4> GET USERS DATA </h4>

       <input type ="text" name="search" placeholder="Enter Your Search Term" size="30" id="aad">
       <button class="btn btn-warning" type="submit" name="sub" onclick="Show()"> Filter </button>
  
		<button class="btn btn-primary" type="submit" name="submit-btn"> Export Excel </button>
		<!-- <table class="table" id="table1">
			<tr>
				<th> Name</th>
				<th> id</th>
				<th> Number</th>
				<th> Email</th>
				<th> storage charges</th>
				<th> transport charges </th>
			</tr>

			<?php 

			  if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {
?>
<tr>
	<td> <?php echo $row['customername'];?></td>
	<td> <?php echo $row['customerid'];?></td>
	<td> <?php echo $row['customernumber'];?></td>
	<td> <?php echo $row['customermail'];?></td>
	<td> <?php echo $row['customerstorage'];?></td>
	<td> <?php echo $row['customertransport'];?></td>
</tr>
<?php 

				}
			}
?>

</table>
</form> -->


<?php 
if(isset($_POST['sub'])){
	$search = $_POST['search'];

 $sql = "SELECT * FROM excel WHERE `customerid`  LIKE '%$search%'";
 $result=$conn->query($sql);

}
?>

<table class="table" id="table2">
			<tr>
				<th> Name</th>
				<th> id</th>
				<th> Number</th>
				<th> Email</th>
				<th> storage charges</th>
				<th> transport charges </th>
			</tr>

			<?php 

			  if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {
?>
<tr>
	<td> <?php echo $row['customername'];?></td>
	<td> <?php echo $row['customerid'];?></td>
	<td> <?php echo $row['customernumber'];?></td>
	<td> <?php echo $row['customermail'];?></td>
	<td> <?php echo $row['customerstorage'];?></td>
	<td> <?php echo $row['customertransport'];?></td>
</tr>
<?php }
}
?>
<?php 

if(isset($_POST['submit-btn'])){
	$sql = "SELECT * FROM excel";
	$result = $conn->query($sql);
	$columnHeader="";
	$columnHeader="Name" ."\t" ."Cust Id" ."\t"."Number"."\t" ."Mail" ."\t"."storage charges"."\t" ."Transport charges" ."\t" ;
	$setData ="";

	while($row = $result->fetch_assoc()){
		$rowData ="";
		forEach($row as $value){
			$value ='"'. $value . '"' . "\t";
			$rowData = $value;
		}
		$setData = trim($rowData) ."\t";
	}
	header("Content-type: application/octet-stream");  
header("Content-Disposition: attachment; filename=User_Detail.xls");  
header("Pragma: no-cache");  
header("Expires: 0");

}

?>

</table>

<script > 

function Show(){
	var Search = document.getElementById("aad").value;
	if(Search == "" || Search == null){
		document.getElementById('table1').style.display ="none";
	}
	
}

</script>
<script>
$(document).ready( function () {
    $('#table2').DataTable();
} );
</script>























	
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>
</html>