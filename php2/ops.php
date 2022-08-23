<?php 

session_start();
class Connection{
 public$host="localhost";
 public$user="root";
 public$password="";
 public$dbname = "reg";
 public$id;

 public function __construct(){
   $this->conn=mysqli_connect($this->host,$this->user,$this->password,$this->dbname);
}
 }
class Register extends Connection{
public function registration($name,$username,$email,$password,$confirmpassword){
  $duplicate = mysqli_query($this->conn,"SELECT * FROM regi WHERE username= '$username 'OR email='$email' ");
  if(mysqli_num_rows($duplicate)>0){
    return 10;
   // Username or email has already taken
 }
  else{
    if($password == $confirmpassword){
      $query ="INSERT INTO regi VALUES('','$name','$username','$email','$password')";

                                
      mysqli_query($this->conn, $query);
      return 1;
    }
    else{
      return 100;
  }
}
}
                
                }

   class Login extends Register{
    public $id ;
   	public function login($username,$password){
   		$result =mysqli_query($this->conn,"SELECT * FROM regi WHERE username='$username' OR email='$username'");
   		$row = mysqli_fetch_assoc($result);

   		if(mysqli_num_rows($result)> 0){
   			if($password == $row['password']){
   				$this->id = $row['id'];
   				return 1;
   				 
   			}
   			else{
   				return 10;
   			}
   		}
   		else{
   			return 100;
   		}
   	}
   	public function idUser(){
   		return $this->id ;
   	}
   }

 //   class Change extends Connection{
 //    public $id;
 //    public function changePass($username,$password){
 //      $query = mysqli_query($this->conn,"UPDATE regi SET name = '$username' OR password = '$password' WHERE id= '$id' " );
 //      if($query == TRUE){
 //      return 1;
 //    }

    
 //    else{
 //      return 10;
 //    }
 

 //   }
 // }

?>
