<?php
 //step 1 check connection status with sql

$host = "localhost";
$user = "root";
$pass="";
$dbname = "employee";

$conn = mysqli_connect($host , $user ,$pass ,$dbname);

if($conn){
	echo "PHP connected to SQL succesfully";
}
else{
	echo "Connection failed";
}

echo "<br>";
// let create database 

// $sql = "CREATE Database employee";

// if(mysqli_query($conn,$sql)){
// 	echo "Database succesfully created in SQL";
// }
// else{
// 	echo "Database creation failed";
// }

//lets create table in our database 

// $sql = 'create table salr3( id INT(6) AUTO_INCREMENT,
// Name VARCHAR(10) NOT NULL,
// salary VARCHAR(10) NOT NULL,
// primary key (id))';

// if(mysqli_query($conn , $sql)){
// 	echo "Table created succesfully";

// }
// else{
// 	echo "Table creation failed";
// }

// lets insert the values into our table

// $sql = 'INSERT INTO salr3(id , Name ,salary)VALUES(1,"Kushal",21000),(2,"siri",23000),(3,"sai",20000)';

// if(mysqli_query($conn , $sql)){
// 	echo "Values inserted into SQL table succesfully";
// }
// else{
// 	echo "values insertion failed";
// }

// sai came back again and updated that nani and sai take combinded salary ( so lets update the sql table)

// $id= 3;
// $name = "nani & sai";
// $salary = 58000;

// $sql = "update salr3 set name=\"$name\", salary=\"$salary\" where id=$id";  

// if(mysqli_query($conn ,$sql)){
// 	echo "data updated succesfully";
// }
// else{
// 	echo "data updation failed";
// }

// then lets get there data by using  select (mysqi_num_rows & mysqi_fetch_assoc)

// $sql = 'SELECT * FROM salr3';

// $retval = mysqli_query($conn,$sql);

// if(mysqli_num_rows($retval) > 0){  
//  while($ro = mysqli_fetch_assoc($retval)){  
//     echo "EMP ID :{$ro['id']}  <br> ".  
//          "EMP NAME : {$ro['Name']} <br> ".  
//          "EMP SALARY : {$ro['salary']} <br> ".  
//          "--------------------------------<br>";  
//  } //end of while  
// }else{  
// echo "0 results";  
// }  

// all are fighting that they need first my salary my salary seo lets do one thing => we will gve ordedr by name 


$sql = 'SELECT * FROM salr3 order by name ';
$retval = mysqli_query($conn , $sql);

if(mysqli_num_rows($retval) >0){
	while($r = mysqli_fetch_assoc($retval)){
		echo "EMP ID : {$r['id']} <br>".
		"EMP Naam : {$r['Name']} <br>".
		"EMP Salary: {$r['salary']} <br>".
		"............................<br>";
		


	}
}
else{
	echo "0 results";
}