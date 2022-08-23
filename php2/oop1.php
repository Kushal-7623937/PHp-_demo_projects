
<?php
include "nor.php";
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<form method ="post" action="oop1.php">
	<input type ="text" name="num1" placeholder="Enter 1st number " size="30"><br><br>
		<input type ="text" name="num2" placeholder="Enter 2nd number " size="30"><br><br>
		<select name="calc">
			<option value="add">Add</option>
			<option value="Subs"> Substract</option>
		</select><br><br>
		<button type="submit" name="submit-btn"> calculate</button>

</form>

</body>
</html>

<?php 

if(isset($_POST['submit-btn'])){
	$num1 = $_POST['num1'];
	$num2 = $_POST['num2'];
	$calc = $_POST['calc'];

	$obj = new Cal($num1, $num2, $calc);
	echo  $obj->calcMethod();

}
?>