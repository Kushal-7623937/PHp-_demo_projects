<?php  

class dbh {
	private $host;
	private $user;
	private $pass;
	private $dbname;

	public function connect(){
		$this->host = "localhost";
		$this->user = "root";
		$this->pass = "";
		$this->dbname = "pro2";

		$conn = new mysqli($this->host , $this->user ,$this->pass,$this->dbname);
		return $conn;
	}
}

// class inser extends dbh{
// 	public function insertData(){
// 		$id= 7;
// 		$name="mgb@gmail.com";
// 		$passw="Mgb123";

// 		$sql = "INSERT INTO pro2ta(id ,user,password) VALUES('$id' ,'$name','$passw' ) ";
// 		$result = $this->connect()->query($sql);
// 		if($result){
// 			echo "Record inserted successfully";
// 		}
// 	}
// }

class user extends dbh {
   public function getAllUsers(){
   	$sql = "SELECT * FROM pro2ta";
   	$result= $this->connect()->query($sql);
   	$numRows = $result->num_rows;
   	if($numRows > 0){
   		while($row= $result->fetch_assoc()){
   		$data[]=$row;
   		}
   		echo $row;
   	}
   }
}

// class view extends user{
// 	public function showAllUser(){
// 		$datas = $this->getAllUsers();
// 		foreach ($datas as $data) {
// 			echo $data['id'] . "<br>";
//             echo $data['user']. "<br>";
//             echo $data['password']. "<br>";
// 		}
// 	}
// }

?>
<?php
$obj = new user();
$obj->getAllUsers();
?>

