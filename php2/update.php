<?php 
include "config.php";

  if (isset($_POST['update'])) {

        
       $fullName = $_POST['full'];
        $user_id = $_POST['user_id'];
        $cityName=$_POST['city'];


        $sql = "UPDATE `msrs` SET `Name` = '$fullName',`Location` = '$cityName' WHERE `id`='$user_id'"; 

        $result = $conn->query($sql); 

        if ($result == TRUE) {

            echo "Record updated successfully.";

        }else{

            echo "Error:" . $sql . "<br>" . $conn->error;

        }

    } 

if (isset($_GET['id'])) {

    $user_id = $_GET['id']; 

    $sql = "SELECT * FROM `msrs` WHERE `id`='$user_id'";

    $result = $conn->query($sql); 

    if ($result->num_rows > 0) {        

        while ($row = $result->fetch_assoc()) {

           $fullName = $row['Name'];
           $cityName = $row['Location'];

            $id = $row['id'];

        } 

    ?>

        <h2>User Update Form</h2>

        <form action="" method="post">

          <fieldset>

            <legend>Personal information:</legend>

            First name:<br>

            <input type="text" name="full" value="<?php echo $fullName; ?>">

            <input type="hidden" name="user_id" value="<?php echo $id; ?>">

            <br>

            Last name:<br>

            <input type="text" name="city" value="<?php echo $cityName; ?>">

            

            <input type="submit" value="Update" name="update">

          </fieldset>

        </form> 

        </body>

        </html> 

    <?php

    } else{ 

        header('Location: allcrud.php');

    } 

}

?> 