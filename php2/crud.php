<?php 

$host = "localhost";
$user = "root";
$pass="";
$dbname="crud";

$conn = mysqli_connect($host , $user, $pass, $dbname);

if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);

}

?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CRUD operations </title>
</head>
<body>
	<form method = "post" action="<?php echo $_SERVER['PHP_SELF'];?>">
		Enter First Name <br> <input type="text" name="fname" size="30"><br>
        Enter Last Name <br> <input type="text" name="lname" size="30"><br>
        Enter Email <br> <input type="text" name="email" size="30"><br><br>
        <button> submit</button>
    </form>


<?php 

$firstName = $_POST['fname'];
$lastName = $_POST['lname'];
$mail = $_POST['email'];


$sql = "INSERT INTO operates(firstName , lastName ,mail) VALUES 
('$firstName', '$lastName','$mail')";

if(mysqli_query($conn , $sql)){
	echo "New record created successfully";
}
else{
	echo "Record is not created";
}

?>
<?php 

$sql = "SELECT * FROM operates";

$result = $conn->query($sql);

?>

<!DOCTYPE html>

<html>

<head>

    <title>View Page</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>

<body>

    <div class="container">

        <h2>users</h2>

<table class="table">

    <thead>

        <tr>

        
        <th>First Name</th>

        <th>Last Name</th>

        <th>Email</th>

        
    </tr>

    </thead>

    <tbody> 

        <?php

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {

     ?>

                    <tr>

                   
                    <td><?php echo $row['firstName']; ?></td>

                    <td><?php echo $row['lastName']; ?></td>

                    <td><?php echo $row['mail']; ?></td>

                   

                    
                    </tr>                       

        <?php       }

            }

        ?>                

    </tbody>

</table>

    </div> 

</body>

</html>

</body>
</html>