<?php 

include "books.php";
?>
<!DOCTYPE html>
<html lang="en"dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <style>
   *{
    box-sizing: border-box;
    font-family: "roboto";


   }
    body{
      font-family: "roboto";
      background-color: #f1f1f1;

      
    }
#bn{
  width: 100%;
  height: 110vh;
}
#men{
  padding-left:520px ;
  color: black;
}
#how{
  color: black;

}
#ser{
  color: black;

}
#tes{
    color: black;

}
li{
  padding-right: 20px;
}

#nav-img{
  width: 3%;
  heigth: 3%;
}
#mai{
  padding-top: 160px;
  font-weight: bolder;
  word-spacing: 5px;
  letter-spacing: 3px;
  padding-left: 600px;
  
}
#sub{
  padding-top: 350px;
  font-weight: bolder;
    word-spacing: 10px;
      letter-spacing: 5px;


}
.container-fluid{
  width: 50%;
  background-color: orange;
 
}
.container{
  width: 100%;
}
h5{
  padding-left: 20px;
}
select{
  margin-left: 32px;
}

.vl {
  border-left: 2px solid black;
  height: 60px;
  margin-left: 30px;
}
#non{
  font-family: "roboto";
  font-weight: bolder;
}
.container-lg{
  margin-top: 100px;
}
.lor{
  padding: 30px;
}
.card-img-top{
  width:100%;
  height: 60%;
}
#book{
  margin-left: 70px;
}

.card{
  margin: 20px;
  width: 300px;
}
#no{
  margin: 10px;
  width: 200px;
}
.card-deck{
  margin-left: 120px;
}
.card-title{
  margin-left: 50px;
}
.cont{
  padding-top:50px;
  padding-left: 30px;
}
#bl{
  font-weight: bolder;
}
#be{
  margin-left: 870px;
}
.form{
  margin-top: 50px;
  margin-left: 300px;
  border: 2px solid black;
  width: 30%;
}
#lok{
  margin-top: 50px;
}
#bok{
  margin-top: 50px;
}
#time{
  margin-top: 10px;
}
#pd{
  margin-top: 20px;
}
#pt{
  margin-top: 20px;
}
#regForm{
  background-color: #ffffff;
  border: 1px solid black;
  width: 30%;
  height: 20%;
margin-left: 400px;
margin-top: 50px;
margin-bottom: 20px;
min-width: 300px;
}

h3{
  text-align: center;
  padding-top: 20px;
}
.tab{
  display: none;
  margin-left: 20px;
}
button{
  background-color: limegreen;
  margin: 5px;
  padding: 5px;
  border-radius: 10px;


}
#prevBtn{
  background-color: lightcyan;
  width: 20%;
  margin-right: 10px;

}
#nextBtn{
  background-color: lightslategray;
    width: 20%;
      margin-right: 0px;
      align-items: center;
      margin-left: 50px;


}
.step{
  width: 15px;
  background-color: darkred;
  height: 15px;
  border-radius: 50%;
  margin: 0 2px;
  display: inline-block;

align-items: center;
margin-left: 30px;
}
.step.active{
 background-color: orange;
}
.step.finish{
  background-color:darkgreen;
}
button:hover{
opacity: 0.8; 
 }
 input.invalid {
  background-color: #ffdddd;
}
.btn-primary{
  margin-left: 30px;
}








  </style>
  <body>
    <nav class="navbar navbar-expand-lg bg-white sticky-top">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRe30Xca_7zW4_4rRZeTJCppQmf4yMyGGHju0d8J0NuCVQD7MddJ9NJTaahDqiSLWe7jSQ&usqp=CAU" id="nav-img">
   
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

 
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
     <h4><span class="text-warning">TSM </span> Travels</h4>
      <ul class="navbar-nav ml-auto">
        <li>
          <a class="nav-link disabled" href="#" id="men" > Menu </a>
        </li>
        <li>
          <a class="nav-link disabled" href="#" id="how"> How it works </a>
        </li>
        <li>
          <a class="nav-link disabled" href="#" id="ser" > Services  </a>
        </li>
        <li>
          <a class="nav-link disabled" href="#" id="tes"> Testimonial </a>
        </li>
      </ul>
      <button  class="btn btn-warning"> Book Now</button>
    </nav>
 <div
  class="bg-image "
  style="
    background-image: url('https://media.istockphoto.com/illustrations/wireframe-of-grand-tour-bus-moving-fast-on-a-dark-blue-background-illustration-id1295087557?k=20&m=1295087557&s=612x612&w=0&h=jd3QXna13LYUU6xA3m3GZhiw223axU-eg0FS7-P_vyQ=');
    height: 100vh; background-repeat: no-repeat;width:100%; background-size: cover;">
    
  

        
         <h3 class="text-white  font-weight-bolder" id="mai">Book Your Favourite Ride In Simple Steps</h3><br>
         <a class="btn btn-warning" href="#" id="be">Book Now </a>
       </div>



<div>
  <form id="regForm" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <h3 class="text-dark"> Book your ticket here</h3><hr><br>
<div class="tab"> Username or Email 
  <p> <input type="text" placeholder="username or email" size="30" oninput ="this.className=''" name="username" ></p><br> Enter Mobile Number
 <p> <input type="text" placeholder="Enter Number" size="30" oninput ="this.className=''" name="number" ></p>
</div>

<div class="tab">Choose From Location

  <p> <input type="text" placeholder="From Location..." size="30" oninput ="this.className=''" name="fromloc" ></p><br>Choose To Location
 <p> <input type="text" placeholder="To Location..." size="30" oninput ="this.className=''" name="toloc" ></p>
</div>
 
<div class="tab"> Choose Date
  <p> <input type="date" placeholder="choose Date" size="30" oninput ="this.className=''" name="date" ></p><br> Choose Approximate Time
 <p> <input type="time" placeholder="choose Time " size="30" oninput ="this.className=''" name="time" ></p>
</div>
<div style="overflow: auto;">
  <div>
    <button type="button" id="prevBtn" onclick="nextPrev(-1)"> Previous</button>
                    <button class="btn btn-primary ml-5" type="submit" name="submit-btn"> submit</button>

        <button type="button"  id="nextBtn" onclick="nextPrev(1)"> Next</button>


      </div>
    </div><br>
    <div>
      <span class="step"></span>
       <span class="step"></span>
 <span class="step"></span>
</div>
</form>
<?php 
$Inse = new inse();

if(isset($_POST['submit-btn'])){
  $result =$Inse->insUsers($_POST['username'],$_POST['number'],$_POST['fromloc'],$_POST['toloc'],$_POST['date'],$_POST['time']);

  

if($result == 1){
  echo '<script> alert("Ticket quote generated , we will send confirmation mail"); </script>';

}
else if($result == 10){
  echo '<script> alert("Your request is already submitted"); </script>';
}
else if($_POST['username'] == NULL || $_POST['number'] == NULL){
    echo '<script> alert("please fill required details"); </script>';

}
else if($_POST['fromloc'] == Null ||$_POST['toloc'] == Null ||$_POST['date'] == Null ||$_POST['time'] == Null){
     echo '<script> alert("Fill all details by clicking on next!"); </script>';
 
}
}

?>

<script>

let currentTab = 0;
showTab(currentTab);


function showTab(n){

  var x = document.getElementsByClassName("tab");
  x[n].style.display ="block";

  if(n == 0){
    document.getElementById("prevBtn").style.display = "none";
  }else{
    document.getElementById("prevBtn").style.display="inline";
  }

  if(n == (x.length-1)){
    document.getElementById("nextBtn").style.display ="none";
  }else{
    document.getElementById("nextBtn").innerHTML="Next";
  }
  fixSteps(n);
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
document.getElementById('regForm').submit();  
  return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}
function fixSteps(n){
   var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}

</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
  <html>
