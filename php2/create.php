<?php
// connection of php to mysqli check


$host ="localhost";
$user ="root";
$pass="";
$dbname = "mega";

$conn = mysqli_connect($host , $user ,$pass , $dbname);

if(!$conn){
	echo "connection failed";
}
else{
	echo "connected succesfully";
}
echo "<br>";

// lets create sql database from php mysql_query();


// $sql = 'CREATE Database Mega';

// if(mysqli_query($conn,$sql)){
// 	echo "database created succesfully";
// }
// else{
// 	echo "database creation failed" .mysqli_error($conn);
// }
// echo "<br>";


// $sql = 'create table mie4(
// id INT AUTO_INCREMENT ,
// user VARCHAR(20) NOT NULL,
// pass VARCHAR(20) NOT NULL,
// email TEXT(20) NOT NULL,
// primary key (id))';


// if(mysqli_query($conn,$sql)){
// 	echo "table created succesfully";
// }
// else{
// 	echo "table creation failed";
// }


// $sql = 'INSERT INTO mie4(id,user,pass,email) VALUES(1 , "kushal","Kushal@12","222ss@gmail.com")';

// if(mysqli_query($conn , $sql)){
// 	echo "data inserted succesfully";
// }
// else{
// 	echo "Data insertion failed";
// }
// mysqli_close($conn);


// $id = 1 ;
// $user ="siri";
// $pass = "Siri122";

// $sql = "update mie4 set user = \"$user\", pass = \"$pass\"  where id= $id";

// if(mysqli_query($conn , $sql)){
// 	echo "table updated succesfully";
// }
// else{
// 	echo "table updation failed";
// }

$id=1;  
$sql = "delete from mie4 where id=$id";  
if(mysqli_query($conn, $sql)){  
 echo "Record deleted successfully";  
}else{  
echo "Could not deleted record: ". mysqli_error($conn);  
}  


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

 error_reporting(E_All);
 include('create.php');