<?php
include "config.php";

if(isset($_GET['id'])){

	$user_id = $_GET['id'];

	$sql= "DELETE FROM `labjaa` WHERE `id` = '$user_id'";
	$result = $conn->query($sql);

	if($result == True){
		echo "record deleted successfully";
	}
}
?>
<?php 
if(isset($_GET['id'])){
	$user_id = $_GET['id'];


	$sql = "SELECT * FROM `labjaa` WHERE `id` = '$user_id'";
	$result = $conn->query($sql);

	if($result->num_rows > 0){
    
    while($row = $result->fetch_assoc()){
    	$id = $row['id'];
    	$budgTit = $row['Title'];
    	$budgCos = $row['Cost'];
    }
}
}
?>