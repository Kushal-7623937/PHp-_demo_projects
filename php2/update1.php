<?php

include "config.php";


if(isset($_POST['update'])){
	$budgTit = $_POST['budgetHead'];
	$budgCos = $_POST['budgetCost'];
	$user_id = $_POST['user_id'];


	$sql = "UPDATE `labjaa` SET `Title` = '$budgTit' , `ost`= '$budgCos' WHERE `id` = '$user_id'";
	$result = $conn->query($sql);

	if($result == TRUE){
		echo "Record updated successfully";
	}
	else{

            echo "Error:" . $sql . "<br>" . $conn->error;

        }



}



if(isset($_GET['id'])){
	$user_id = $_GET['id'];


	$sql = "SELECT * FROM `labjaa` WHERE `id` = '$user_id'";
	$result = $conn->query($sql);

	if($result->num_rows > 0){
    
    while($row = $result->fetch_assoc()){
    	$id = $row['id'];
    	$budgTit = $row['Title'];
    	$budgCos = $row['ost'];
    }
?>

		<h3> Update data form </h3><hr>
	<form method = "post" action="">

		 Enter the budget Title <br>
		<input type = "text" name="budgetHead"  value="<?php echo $budgTit;?>"><br>
		<input type="hidden" name="user_id" value="<?php echo $id ;?>">
		 Enter the cost of item <br>
		<input type = "text" name="budgetCost" value = "<?php echo $budgCos;?>"><br><br>

		<input type ="submit" name="update" value="Update1">
	
</form>

<?php

	}else{
		header('Location: labj.php');
	}
}
?>
<?php 
echo "<pre>" ; print_r($_POST);die(); ?>
