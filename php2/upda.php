<?php
include "config.php";

?>

<?php
if(isset($_POST['update'])){
	$todayTask = $_POST['manu'];
	$userd = $_POST['user'];


	$sql = "UPDATE `list` SET `tasks` = '$todayTask' WHERE  `id` = '$userd'";
	$result= $conn->query($sql);

	if($result == TRUE){
		echo "Record updated successfully";
	}
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

<form method = "post" action="">
	<input type="hidden" name="user" value="<?php echo $userd ;?>">
	<input type ="text" name="manu" value="<?php echo $todayTask ;?>" size ="30">
	<input type ="submit" name="update" value="Update">
</form>
<?php 

echo"<pre>";
print_r($_POST);die();
?>