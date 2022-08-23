<?php 

session_start();

class Connection{
	public $host ="localhost";
	public $user ="root";
	public $pass="";
	public $dbname="tms";

	public function __construct(){
		$this->conn = mysqli_connect($this->host,$this->user,$this->pass,$this->dbname);
	
	}


}
class check extends Connection{
	public function getUsers( $email, $password){
		$duplicate = mysqli_query($this->conn,"SELECT * FROM login WHERE username= '$email'OR password='$password' ");
  if(mysqli_num_rows($duplicate)>0){
    return 10;
   // Username or email has already taken
 }
             else {
             	$query ="INSERT INTO login VALUES('','$email','$password')";
             	mysqli_query($this->conn,$query);
             	
             		return 1;
            

             }

	}
}

class log extends Connection{
public function logUsers($email , $password){
	$result =mysqli_query($this->conn,"SELECT * FROM login WHERE username = '$email'AND password='$password'");
	$row = mysqli_fetch_assoc($result);
	if(mysqli_num_rows($result)>0){
		if($email == $row['username'] && $password == $row['password']){
			return 20;
		}
		else if($email != $row['username']){
			return 21;
		}
	
	else if($password != $row['password']){
		return 200;
	}
	else{
		return 11;
	}
}
}
}




?>