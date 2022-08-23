<?php 


session_start();

class cont{
	public $host ="localhost";
	public $user ="root";
	public $pass="";
	public $dbname="tms";


	public function __construct(){
		
		$this->conn = mysqli_connect($this->host,$this->user,$this->pass,$this->dbname);
		
	}
}
class inse extends cont{
	public function insUsers($username,$number,$fromloc,$toloc,$date,$time){
		$duplicate = mysqli_query($this->conn,"SELECT * FROM booking WHERE username= '$username'OR Phonenumber='$number' ");
  if(mysqli_num_rows($duplicate)>0){
    return 10;
   // Username or email has already taken
 }
             else {
             	$query ="INSERT INTO booking VALUES('','$username','$number','$fromloc','$toloc','$date','$time')";
             	mysqli_query($this->conn,$query);
             	
             		return 1;
            

             }

	}
}

?>