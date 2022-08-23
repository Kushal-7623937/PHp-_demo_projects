<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">  
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>

<script src="https://kit.fontawesome.com/d5f543fe2e.js" crossorigin="anonymous"></script>
   <title></title>
</head>
<style>
body{
    min-width: 300px;
    background-color: white;
  }

   .test{
  margin-right: 20px;
}
#sub{
   padding-top: 160px;
   font-weight: bolder;
   padding-left: 0px;

}
.bg-image{
   opacity: 1;
}
.container-fluid2{
   margin-top: 100px;
   margin-left: 30px;
   margin-right: 30px;
}
#smal{
   width: 5%;
   height: 5%;
   margin-left: 20px;
   margin-top: 20px;
}
#smali{
   width: 5%;
   height: 5%;
   margin-left: 75px;
   margin-top: 20px;
}
#mal{
   margin-top: 20px;
   margin-left: 10px;
}
#mali{
   margin-top: 20px;
   margin-left:5px;
}
footer{
   margin-top: 150px;
   background-color: black;
  color: white;
}
}
#tweet:hover{
color: skyblue;
}
#face:hover{
color:skyblue;
}
#goog:hover{
color: red;
}
#insta:hover{
color: red;
}
#link:hover{
color: blue;
}
.container{
   margin-top: 70px;
   max-width: 100%;
   max-height: auto;
   height: 40%;
   padding-bottom: 40px;
   display: grid;
   justify-content: space-evenly;
   font-size: 20px;
}
#div2{
   margin-left: 70px;
   margin-top: 30px;
   max-width: 100%;
   height: auto;
}
#div1{
   margin-left: 20px;
      margin-top: 30px;
      max-width: 100%;
   height: auto;

}
#div3{
   margin-left: 70px;
      margin-top: 30px;
      max-width: 100%;
   height: auto;

}
#div4{
   margin-left: 70px;
      margin-top: 30px;
      max-width: 100%;
   height: auto;

}
#counter{
   margin-left: 40px;
}
#counted{
   padding-left: 20px;
}
#counting{
   margin-left: 70px;
}
#cot{
   margin-left: 0px;
}
.another{
   margin-top: 70px;
}
.satis{
   margin-left: 0px;
}
#plus{
   margin-left: 40px;
   margin-right: 20px;
}
#pluss{
   margin-left: 55px;
      margin-right: 25px;

}
#plusss{
   margin-left: 60px;
      margin-right: 25px;

}
#hide{
   display: none;
}
#hide1{
   display: none;
}
#hide2{
   display: none;
}
li{
   text-decoration: none;
}
a{
  text-decoration: none;
}
#get{
  margin-left: 590px;
  font-weight: bolder;
}

.secondCont{
   margin-top: 50px;
   margin-left: 15px;
   margin-right: 15px;
}
.fa-gem{
   color: orange;
}
.img-fluid{
         width: 60%;
      }
      .title{
         margin-top: 20px;
         padding-bottom: 30px;
      }
@media (max-width: 768px){
   .bg-image{
      max-height: 100vh;
   }
}
.container-responsive2{
   margin-top: 30px;
   margin-left: 30px;
   margin-right: 30px;
}
#subwa{
   margin-top: 100px;
}
#sbw{
   margin-top: 20px;
}
.image1{
   margin-left: 10px;
}
#chairman{
	margin-top: 20px;
}
.container-responsive6{
	margin: 30px;
}
.container9{
	margin: 30px;
}
.navbar-toggler-icon{
background-color: grey;
}

@import url(https://fonts.googleapis.com/css?family=Open+Sans:800,300);
@import url('https://fonts.googleapis.com/css?family=Yesteryear');
$lines-color : fade-out(#fff, .3);


.frame {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 400px;
  height: 400px;
  margin-top: -200px;
  margin-left: -200px;
  border-radius: 2px;
  box-shadow: .5rem .5rem 1rem rgba(0, 0, 0, 0.6);
  overflow: hidden;
  background: #201c29;
  color: #fff;
  font-family: 'Open Sans', Helvetica, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

.circle {
  position: absolute;
  z-index: 10;
  height: 20px;
  width: 20px;
  top: 50%;
  left: 50%;
   transform: translate(-50%, -50%);
  background-image: linear-gradient(45deg, #ff049f, #9a0fe0 45%);
  border-radius: 50%;
          animation: circle 1s ease-in-out;
          animation-fill-mode: forwards;
}

.line {
  position: absolute;
  z-index: 10;
  width: 150px;
  height: 1px;
  top: 198px;
  transform: scaleX(0);
}

.line.left {
  left: 50px;
  transform-origin: 100% 50%;
  animation: lines 1s ease-in-out 0.8s, line-left 1s steps(1) 0.8s;
   background: $lines-color;
}

.line.right {
  right: 50px;
   background: $lines-color;
  transform-origin: 0% 50%;
  animation: lines 1s ease-in-out 0.8s, line-right 1s steps(1) 0.8s;
}

.bracket {
  position: absolute;
  z-index: 10;
  height: 130px;
  width: 1px;
  top: 137px;
  background: $lines-color;
  animation: bracket .4s ease-out 1.7s;
  animation-fill-mode: both;
}

.bracket:before, .bracket:after {
  position: absolute;
  display: block;
  content: '';
  width: 25px;
  height: 1px;
}

.bracket.right:before, .bracket.right:after {
  background: $lines-color;
}

.bracket.left {
  left: 50px;
}

.bracket.left:before {
  top: 0;
  left: 0;
  transform-origin: 0% 50%;
  animation: bracket-line .2s ease-out 2.1s;
  animation-fill-mode: both;
}

.bracket.left:after {
  bottom: 0;
  left: 0;
  transform-origin: 0% 50%;
  animation: bracket-line .2s ease-out 2.1s;
  animation-fill-mode: both;
}

.bracket.left:before, .bracket.left:after {
   background: $lines-color;
}

.bracket.right {
  right: 50px;
}

.bracket.right:before {
  top: 0;
  right: 0;
          transform-origin: 100% 50%;
          animation: bracket-line .2s ease-out 2.1s;
          animation-fill-mode: both;
}

.bracket.right:after {
  bottom: 0;
  right: 0;
          transform-origin: 100% 50%;
          animation: bracket-line .2s ease-out 2.1s;
          animation-fill-mode: both;
}

.big {
  position: absolute;
  z-index: 5;
  top: 173px;
  width: 400px;
  text-align: center;
  font-size: 5rem;
   letter-spacing: 2px;
  color: #fff;
  line-height: 50px;
   font-family: "yesteryear", cursive;
  background-image: linear-gradient(33deg, #9a0fe0 25%, #ff049f);
  -webkit-text-fill-color: transparent;
  background-clip: text;
  transition: 0.2s ease-in;
}

.hide {
  position: absolute;
  z-index: 7;
  width: 400px;
  height: 50px;
  background: #201c29;
  left: 0;
          animation: reveal .4s ease-out 1.7s;
          animation-fill-mode: both;
}

.hide.top {
  bottom: 49%;
          transform-origin: 50% 0%;
}

.hide.bottom {
  top: 49%;
          transform-origin: 50% 100%;
}

.small {
  position: absolute;
  z-index: 10;
  width: 400px;
  text-align: center;
  left: 0;
  font-weight: 300;
  font-size: 1.8rem;
  color: #FFFFFF;
  line-height: 30px;
   word-spacing: .7rem;
  text-transform: uppercase;
}

.first-letter {
   font-family: yesteryear, cursive;
   font-size: 3.5rem;
  background-image: linear-gradient(33deg, #9a0fe0 25%, #ff049f);
  -webkit-text-fill-color: transparent;
  background-clip: text;
}

.small.top {
  top: 8rem;
          animation: small-top .5s ease-out 2.2s;
          animation-fill-mode: both;
}
.small.bottom {
  bottom: 8rem;
          animation: small-bottom .5s ease-out 2.2s;
          animation-fill-mode: both;
}

@keyframes circle {
  0% {
            transform: scale(1);
  }
  50% {
            transform: scale(1.1);
  }
  90%, 100% {
            transform: scale(0);
  }
}

@keyframes lines {
  0% {
            transform: scaleX(0);
  }
  50% {
            transform: scaleX(1);
  }
  100% {
            transform: scaleX(0);
  }
}

@keyframes line-left {
  0% {
            transform-origin: 100% 50%;
  }
  50%, 100% {
            transform-origin: 0% 50%;
  }
}

@keyframes line-right {
  0% {
            transform-origin: 0% 50%;
  }
  50%, 100% {
            transform-origin: 100% 50%;
  }
}

@keyframes bracket {
  0% {
            transform: scaleY(0);
  }
  100% {
            transform: scaleY(1);
  }
}

@keyframes bracket-line {
  0% {
            transform: scaleX(0);
  }
  100% {
            transform: scaleX(1);
  }
}

@keyframes reveal {
  0% {
            transform: scaleY(1);
  }
  100% {
            transform: scaleY(0);
  }
}
@keyframes small-top {
  0% {
            transform: translateX(-20px);
    opacity: 0;
  }
  100% {
            transform: translateX(0);
    opacity: 1;
  }
}

@keyframes small-bottom {
  0% {
            transform: translateX(20px);
    opacity: 0;
  }
  100% {
            transform: translateX(0);
    opacity: 1;
  }
}


   </style>
<body>
   <nav class="navbar navbar-expand-lg navbar-dark ">
    <div class="container-fluid">
             <h4><span style="color:#b03520;" class="amma">Amma </span><span class="text-dark">Super Speciality</span><span class="hospital" style="color:#b03520;"> Hospital</span></h4>

  <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ml-auto ms-auto">
          <a class="nav-link text-dark ml-auto test" href="cardi.php"  > Home </a>
          <a class="nav-link text-dark test" href="about.php" > About us </a>
          <a class="nav-link text-dark test" href="services.php"  > Services  </a>
          <a class="nav-link text-dark test" href="contact.php" > Contact Us</a>
                
            </div>
        
        </div>
    </div>
</nav>
   

<div class="secondConti d-flex flex-row " style="background-color: white;">

<div class="container-responsive2 ml-3">
  <div class="row">
    <div class="col-xl-6 col-lg-6 col-md-6" > 
      <h3 style="color:#b03520; " id="subwa" class="text-center"> About Us</h3>
      <h5 id="sbw"> Amma  hospital is the best heart care based solutions with an overall  experienced doctors founded at fore front of supplying diagnosis </h5>
        
         

 
    </div>
      
    
    <div class="col-xl-6 col-lg-6 col-md-6">
      <img src="https://img.freepik.com/free-vector/doctors-concept-illustration_114360-1515.jpg?size=626&ext=jpg&ga=GA1.2.861524257.1658580216" class="image1" alt="responsive webite" style="max-width: 100%; height:auto;">
      
    </div>
  </div>
</div>
</div> 



<div class="container-fluid2 ml-3">
  <div class="row">
    <div class="col-xl-6 col-lg-6 col-md-6" > 
 <h5>
      <h4 style="color:#b03520;" class="mt-5 pt-3 latest">About us</h4>
      <h3 style="font-family:roboto;" class="mt-3">Welcome To Amma Super Speciality Hospital</h3>
      <p>Amma hospitals founded at the fore front of supplying & supporting diagnostic and measurement equipment worldwide.</p>
<div class="d-flex flex-row">
<img src="data:image/png;base64,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" id="smal"><p id="mal"> Qualified Doctors</p>

<img src="https://www.clipartmax.com/png/small/133-1331680_open84-information-technology-icon-png.png" id="smal"><p id="mal"> Latest Technology</p>
</div>
<div class="d-flex flex-row">
<img src="http://cdn.onlinewebfonts.com/svg/img_491370.png" id="smal"><p id="mal"> Advanced <br> Medical</p>
<img src="http://cdn.onlinewebfonts.com/svg/img_494004.png" id="smali"><p id="mali">  Latest Drugs</p>


   </div>
</div>
</h5>

      
    <div class="col-xl-6 col-lg-6 col-md-6">
      <img src="https://media.istockphoto.com/photos/modern-therapist-with-tablet-computer-picture-id1197000727?k=20&m=1197000727&s=612x612&w=0&h=z80saEyen-enNU8-cCtsAUYm54oAWAHt1D7nOO515Dw=" class="image1" alt="responsive webite" style="max-width: 100%; height:auto;">
      
    </div>
  </div>
</div>
</div>
</nav>

<div class="container-responsive6 ml-3 mt-5 pt-5">
  <div class="row">
   
      
    <div class="col-xl-6 col-lg-6 col-md-6">
      <img src="/images/doctor.jpeg" style="max-width: 100%;height: auto;">
    </div>
     <div class="col-xl-6 col-lg-6 col-md-6" > 
 <h5 style="color:#b03520;" class="pt-4"><b>Dr.MC.SANDEEP </b></h5>

  <i><b>Chairman of Amma Hospitals</b></i><br>

 <h6 style="color:#b03520;" class="pt-4"><b>PARENTS</b></h6>
 <b>M Chandrasekhar <br>
 M Nirmala </b>

  <h6 style="color:#b03520;" class="pt-4"><b><i>About Chairman of Amma Hospitals</i></b></h6>



  <p id="chairman"> Born and brought up  in Madanpalle, Chittoor district AP, India, and studied MBBS  from 
Government medical college, Under NTR university of health sciences, from Kakatiya medical college and persuaded<b> MS Cardiology from London </b> , and <b>MRCP(T), FIEC, FICC from UK. </b> and<b> experience in Narayan hrudayalaya  hospitals ,Manipal hospitals , Jayadeva hospitals and DASH hospital in Kuwait,</b><br></p>

<h5>Founder of Nirmala smile foundation , (NGO) for orphans ,
Work Appreciation awards from Many respected authorities and organisations,</h5>

 <h5 style="color:#b03520;" class="pt-4"><b>NGO from 2013 8th April </b></h5>

    </div>
  </div>
</div>
</div>
<div class="frame">
   <div class="circle"></div>
   <div class="line left"></div>
   <div class="line right"></div>
   <div class="bracket left"></div>
   <div class="bracket right"></div>
   <div class="small top"><span class="first-letter">c</span>ollect</div>
   <div class="big">Moments</div>
   <div class="small bottom">Not <span class="first-letter">T</span>hings</div>
   <div class="hide top"></div>
   <div class="hide bottom"></div>
</div>
     






















<div class="sec-pad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title text-center wow fadeIn">
                   
                    <h2>Our Achievements</h2>
                </div>
            </div>
     <div class="col-lg-3 col-sm-6 col-6 mb-lg-0 mb-4" style="text-align: center;">
                <div class="flow-box wow fadeIn" data-wow-delay=".3s">
                    <img src="https://img.freepik.com/free-vector/flat-hand-drawn-patient-taking-medical-examination-illustration_23-2148859982.jpg?w=740&t=st=1660120472~exp=1660121072~hmac=fe57893fdd92f63a33d8e3d02eda2b6cf9a371336880a8fc240f63c990bd120d" alt="How It Works" title="How It Works" class="img-fluid d-block  mb-md-4 mb-3" style="margin: 0 auto;">
                   <h5 id="counter" style="color: #b03520;"><span class="text-white">+</span> </h5>

<script>
let counts=setInterval(updated);
        let upto=0;
        function updated(){
            var count= document.getElementById("counter");
            count.innerHTML=++upto;
            if(upto === 2000) {
                clearInterval(counts);
            }
        }


</script>

                    <h4 class="text-dark" > Happy Patients</h4>
                </div>
            </div>
                        <div class="col-lg-3 col-sm-6 col-6 mb-lg-0 mb-4" style="text-align: center;">
                <div class="flow-box wow fadeIn" data-wow-delay=".3s">
                    <img src="https://img.freepik.com/free-vector/cardiologist-concept-illustration_114360-6847.jpg?w=740&t=st=1660120273~exp=1660120873~hmac=c936fb560c15edcd180c7c8ef049f3f3e354f539a3ced039cd189d7c35dd1f5b" alt="How It Works" title="How It Works" class="img-fluid d-block  mb-md-4 mb-3" style="margin: 0 auto;">
                    <h5 id="counting" style="color: #b03520;"> </h5>
   <script>

let totalCount = setInterval(update);
let start = 0;
function update(){
   var counting = document.getElementById("counting");
   counting.innerHTML = ++start;

   if(start == 10){
      clearInterval(totalCount);
   }
}

   </script>
   <h4 class="text-dark"> Specialized Doctors</h4>
                </div>
            </div>
                        <div class="col-lg-3 col-sm-6 col-6 mb-lg-0 mb-4" style="text-align: center;">
                <div class="flow-box wow fadeIn" data-wow-delay=".3s">
                    <img src="https://img.freepik.com/free-vector/organic-flat-feedback-concept-illustrated_23-2148951369.jpg?w=740&t=st=1660120319~exp=1660120919~hmac=8acb8b3af5b655dd34f3e3628e2898d36af53b9b0132d5dc341867ab233cf088" alt="How It Works" title="How It Works" class="img-fluid d-block  mb-md-4 mb-3" style="margin: 0 auto;">
                    <h5 id="counted" style="color: #b03520;"></h5>
   <script>
      let counte = setInterval(coun);
      let stop = 0;
      function coun(){
         var counted=document.getElementById("counted");
         counted.innerHTML= ++stop;

         if(stop == 20){
            clearInterval(counte);
         }
      }

   </script>
                   <h4 class="text-dark" > Years of Experience</h4>
                </div>
            </div>
                        <div class="col-lg-3 col-sm-6 col-6 mb-lg-0 mb-4" style="text-align: center;">
                <div class="flow-box wow fadeIn" data-wow-delay=".3s">
                    <img src="https://img.freepik.com/free-vector/patient-taking-medical-examination_23-2148856193.jpg?size=338&ext=jpg&ga=GA1.2.861524257.1658580216" alt="How It Works" title="How It Works" class="img-fluid d-block  mb-md-4 mb-3" style="margin: 0 auto;">
                    <h5 id="cot" style="color: #b03520;"></h5>
   <script>
      let coe = setInterval(cn);
      let ship = 0;
      function cn(){
         var cot=document.getElementById("cot");
         cot.innerHTML= ++ship;

         if(ship ==600){
            clearInterval(coe);
         }
      }
</script>
                    <h4 class="text-dark"> Problems Solved</h4>
                </div>
            </div>
            
        </div>
    </div>
</div>



 <div class="secondCont d-flex flex-row "style="background-color: white;">

<div class="container-responsive2 ml-3">
  <div class="row">
    <div class="col-xl-6 col-lg-6 col-md-6">
      <img src="https://us.123rf.com/450wm/dolgachov/dolgachov1811/dolgachov181101988/112406588-doctor-showing-prescription-to-patient-at-hospital.jpg?ver=6" height="100%" style="max-width:100%;height:auto;">

    </div>
    <div class="col-xl-6 col-lg-6 col-md-6" > 
 <div class="satis">

 
<p>MISSION</p>

<h2>Mission & Values</h2>
<p > Our Mission, Vision, Values are to make Amma super speciality hospital founded at the fore front of supplying & supporting diagnostic and measurement equipment worldwide. </p>

<h5> Mission<i class="fa-solid fa-plus" id="plus" onclick="first()"></i> <i class="fa-solid fa-minus" id="slash" onclick="four()"></i></h5><hr>

<p id="hide"> Our Mission is to make the Amma super speciality hospitals as a center of creating an understanding of cardio diseases across the life span  through multidisciplinary collaboration between clinicians and doctors</p>

<h5> Vision<i class="fa-solid fa-plus" id="pluss" onclick="second()"></i><i class="fa-solid fa-minus" id="slash" onclick="five()"></i></h5><hr>

<p id="hide1"> Our vision is to made the Amma Super Speciality Hospitals the best heart care based solutions across Worldwide</p>

<h5> Value<i class="fa-solid fa-plus" id="plusss" onclick="third()"></i><i class="fa-solid fa-minus" id="slash" onclick="six()"></i></h5><hr>

<p id="hide2"> We, the staff and faculty of the Amma super speciality hospital, are committed to advancing medicine and serving humanity through living and teaching core values</p>


  
</div>
</div>
    </div>
      
    
  </div>
</div>
</div>
<script>

function first(){
    document.getElementById("hide").style.display ="block";

}
function second(){
    document.getElementById("hide1").style.display ="block";

}

function third(){
    document.getElementById("hide2").style.display ="block";

}
function four(){
    document.getElementById("hide").style.display ="none";

}
function five(){
        document.getElementById("hide1").style.display ="none";

}
function six(){
        document.getElementById("hide2").style.display ="none";

}






</script>

<div class="container9">
<h4 class="text-center mt-5 pt-5"> Our Gallery </h4>
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSFE6c9zsgYUsIuOhXuTNAZsZxGzaM5jL9AmA&usqp=CAU">
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS-3OAOHLL6gBU6xTywP3Fh13-ESq_w2fXg9g&usqp=CAU">
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRzkeaKKMsWgxd33cZhp8z8YYhJo32G61Ie5g&usqp=CAU">
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS9oR8fsBZbbovR6dMgI7pzJemlzgnW1t_cxw&usqp=CAU">
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRChLAaIZhYj_RARfPps06d_fj6VEOfob5gIQ&usqp=CAU">
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS9fre9eA3MyB_TIsUwxo6S4_mhbndP4TeaYA&usqp=CAU">
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR9xEN2tf-3_NnAz2SCqls_T39uT5ro7YNIXg&usqp=CAU">
</div>

<footer class="text-center text-md-start ">
  <section
    class="d-flex justify-content-center justify-content-md-between p-4 border-bottom">
    <div class="me-5 d-none d-lg-block">
      <span id="get" class="text-warning" >Get connected with us on social networks:</span>
    </div>

    <div>
      <a href="" class="me-4 text-reset">
<i class="fa-brands fa-facebook fa-xl" id="face"></i>      </a>
      <a href="" class="me-4 text-reset">
        <i class="fa-brands fa-twitter fa-xl" id="tweet"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fa-brands fa-google fa-xl" id="goog"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fa-brands fa-instagram fa-xl" id="insta"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fa-brands fa-linkedin fa-xl" id="link"></i>
      </a>
      
    </div>
  </section>

  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i><span class="text-warning">Amma Super Speciality Hospitals</span>
          </h6>
          <p>
Amma super speciality hospital founded at the fore front of supplying & supporting diagnostic and measurement equipment worldwide.          </p>
        </div>

        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <h6 class="text-uppercase fw-bold mb-4">
         <span class="text-warning">   Services</span>
          </h6>
          <p>
            <a href="#!" class="text-reset">Echo Cardiography</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Cardiology</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Body Blood Investigation</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Medicine delivery</a>
          </p>
        </div>
        
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase fw-bold mb-4">
         <span class="text-warning">   Useful links</span>
          </h6>
          <p>
            <a href="about.php" class="text-reset">About us</a>
          </p>
          <p>
            <a href="services.php" class="text-reset">Services</a>
          </p>
          <p>
            <a href="contact.php" class="text-reset">Contact</a>
          </p>
          <p>
            <a href="doctors.php" class="text-reset">Doctors</a>
          </p>
        </div>
        
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <h6 class="text-uppercase fw-bold mb-4">
                     <span class="text-warning">   Contact</span>

          </h6>
          <p><i class="fas fa-home me-3"></i><a href="contact.php" class="text-white" >CTM Road, Beside RTC Bustand, Madanapalle-517325</a> </p>
          <p>
            <i class="fas fa-envelope me-3"></i>
ammahospitals4@gmail.com         </p>
          <p><i class="fas fa-phone me-3"></i>8688696869</p>
                    <p><i class="fas fa-phone me-3"></i>08571222333</p>

        </div>
      </div>
    </div>
  </section>

  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/"><span class="text-warning">Amma Super Speciality Hospitals</span></a>
  </div>
</footer>





































<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>
</html>