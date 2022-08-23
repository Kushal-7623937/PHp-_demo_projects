<?php 


$host = "localhost";
$user = "root";
$pass = "";
$dbname="logins";

$conn = mysqli_connect($host, $user, $pass, $dbname);

if(!$conn){

	echo "Database Connection Got Failed";
}
else{
	echo "Database Connected Successfully";

}

// Lets create database name 

// $sql = "CREATE Database logins";

// if(mysqli_query($conn , $sql )){
// 	echo "Database with logins name has created Successfully";
// }
// else{
// 	echo "Database Creation Failed";
// }
// Database Creation done 

// now lets try to create database table 

// $sql = 'create table salr3( id INT(8) AUTO_INCREMENT,
//  Name VARCHAR(30) NOT NULL,
// Mail VARCHAR(30) NOT NULL,
// Number INT(12)   NOT NULL,
// primary key (id))';



// if(mysqli_query($conn , $sql)){
// 	echo "Table created Successfully";
// }
// else{
// 	echo "Table creation failed";
// }

// Table created successfully

//lets insert data into table 








































?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login form</title>
</head>
<body style="font-family: 'Poppins', sans-serif;">
	<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">

	<h1 style =" text-align: center;font-weight: bolder;"> Login Form Creation </h1>

	<p style = "text-align: center;padding-top: 50px;">Please Enter Your Full Name&nbsp;&nbsp;&nbsp;<input type = "text" name="fname" size="40"><p>
		<p style = "text-align: center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please Enter Your Mail &nbsp;&nbsp;&nbsp;<input type = "text" name="mail" size="40"><p>
			<p style = "text-align: center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please Enter Your Mobile Number &nbsp;&nbsp;&nbsp;<input type = "text" name="number" size="30"><p>


<button style="margin-left:630px ;margin-top: 20px;"> Submit </button>

<?php


$naam = $_POST['fname'];
$aam = $_POST['mail'];
$mob = $_POST['number'];

if($naam == NULL || $aam == NULL || $mob == NULL){
	echo "<script type ='text/JavaScript'>";  
    echo "alert('Fields  cannot be empty')";  
    echo "</script>";   
} 

// $sql = "INSERT INTO salr3(id , Name ,Mail, Number) VALUES('0' , '$naam ', '$aam' , '$mob')";

// if(mysqli_query($conn , $sql)){
// 	echo "Form submitted Successfully";
// }
// else{
// 	echo "Your form is not submitted";
// }





$mmm = "SELECT * FROM salr3";
$retval = mysqli_query($conn,$mmm);

if(mysqli_num_rows($retval) > 0){
	while($ro = mysqli_fetch_assoc($retval)){  
		echo "EMP ID :{$ro['id']}  <br> ".  
         "EMP NAME : {$ro['Name']} <br> ";
         }  

}

























?>
</body>
</html>