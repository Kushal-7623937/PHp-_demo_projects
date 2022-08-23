
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <meta charset="UTF-8">
  <title>PHP Search</title>
</head>
<body>
<div class="container">
   <div class="row">
   <div class="col-md-8 col-md-offset-2" style="margin-top: 5%;">
   <div class="row">

   <?php 

     $conn = new mysqli('localhost', 'root', '', 'search');
     if(isset($_GET['search'])){
        $searchKey = $_GET['search'];
        $sql = "SELECT * FROM sear WHERE name LIKE '%$searchKey%'";
     }
     else
     $sql = "SELECT * FROM sear";
     $result = $conn->query($sql);
   
   ?>

   <form action="" method="GET"> 
     <div class="col-md-6">
        <input type="text" name="search" class='form-control' placeholder="Search By Name"  > 
     </div>
     <div class="col-md-6 text-left">
      <button class="btn" name="sbt">Search</button>
     </div>
   </form>

   <br> 
   <br>
</div>

<table class="table table-bordered">
  <tr>
     <th>Name</th>
     <th>Marks</th>
  </tr>
  <?php
$result = $conn->query($sql);


   while($row = $result->fetch_assoc()){
    $usrname= $row['name'];
        $usrmark= $row['marks'];


  
}


   ?>
  <tr>
     <td><?php echo $usrname ;?></td>
     <td><?php echo $usrmark ; ?></td>
  </tr>
</table>
















</div>
</div>
</body>
</html>