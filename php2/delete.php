<?php 

include "config.php"; 

if (isset($_GET['id'])) {

    $userd = $_GET['id'];

    $sql = "DELETE FROM `list` WHERE `id`='$userd'";

     $result = $conn->query($sql);

     if ($result == TRUE) {

        echo "Record deleted successfully.";

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 

?>
<?php
if(isset($_GET['id'])){

    $userd = $_GET['id'];

    $sql = "SELECT * FROM list WHERE `id` = '$userd'";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            
        $userd= $row['id'];
        }
    }
    
}
?>