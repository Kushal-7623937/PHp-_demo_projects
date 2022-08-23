<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>

<script src="https://kit.fontawesome.com/d5f543fe2e.js" crossorigin="anonymous"></script>
	<title></title>
	<style>
 body{
    min-width: 300px;
  }
	
.test{
  margin-right: 20px;
}
footer{
  margin-top: 100px;
  background-color: black;
  color: white;
}
a{
text-decoration: none;
}
#get{
  margin-left: 590px;
  font-weight: bolder;
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
.fa-gem{
	color: orange;
}
#group{
  width: 60%;
  height: 20%;
  float: right;
  margin-left: 350px;
  margin-top: 10px;
  margin-right: 90px;
  margin-bottom: 30px;


}
#quote{
	margin-left: 80px;
	padding-top: 20px;
}
#mini-quote{
		margin-left: 80px;

}
.card-horizontal {
  display: flex;
  flex: 1 1 auto;
}
#roles{
	width: 80%;
}
#main{
	font-weight: bolder;
	margin-left: 120px;
}
.card-title{
	margin-right: 80px;
}
.doctor-title{
	margin-left: 100px;
}
.secondCont{
	margin-left: 30px;
	margin-right: 30px;
}
.card{
	margin-top: 30px;
	width: 100%;
}
#role{
	width: 30%;
	
}
#dahosp{
	width: 50%;
}
:root {
  --surface-color: #fff;
  --curve: 40;
}

* {
  box-sizing: border-box;
}

body {
  font-family: 'Noto Sans JP', sans-serif;
  background-color: white;
}

.cards {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: 2rem;
  margin: 4rem 5vw;
  padding: 0;
  list-style-type: none;
}
.cards_first {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: 2rem;
  margin: 4rem 5vw;
  padding: 0;
  list-style-type: none;
  margin-left: 60px;
}
.card {
  position: relative;
  display: block;
  height: 100%;  
  border-radius: calc(var(--curve) * 1px);
  overflow: hidden;
  text-decoration: none;
}

.card__image {      
  width: 100%;
  height: auto;
}
.card__image1 {      
  width: 100%;
  height: auto;
}


.card__overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  z-index: 1;      
  border-radius: calc(var(--curve) * 1px);    
  background-color: var(--surface-color);      
  transform: translateY(100%);
  transition: .2s ease-in-out;
}

.card:hover .card__overlay {
  transform: translateY(0);
}

.card__header {
  position: relative;
  display: flex;
  align-items: center;
  gap: 2em;
  padding: 2em;
  border-radius: calc(var(--curve) * 1px) 0 0 0;    
  background-color: var(--surface-color);
  transform: translateY(-100%);
  transition: .2s ease-in-out;
}

.card__arc {
  width: 80px;
  height: 80px;
  position: absolute;
  bottom: 100%;
  right: 0;      
  z-index: 1;
}

.card__arc path {
  fill: var(--surface-color);
  d: path("M 40 80 c 22 0 40 -22 40 -40 v 40 Z");
}       

.card:hover .card__header {
  transform: translateY(0);
}

.card__thumb {
  flex-shrink: 0;
  width: 50px;
  height: 50px;      
  border-radius: 50%;      
}

.card__title {
  font-size: 1em;
  margin: 0 0 .3em;
  color: #6A515E;
}

.card__tagline {
  display: block;
  margin: 1em 0;
  font-family: "MockFlowFont";  
  font-size: .8em; 
  color: #D7BDCA;  
}

.card__status {
  font-size: .8em;
  color: #D7BDCA;
}

.card__description {
  padding: 0 2em 2em;
  margin: 0;
  color: #D7BDCA;
  font-family: "MockFlowFont";   
  display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-line-clamp: 3;
  overflow: hidden;
} 
.first_card_content{
  margin-left: 40px;
} 
#title{
  word-spacing: 3px;
  letter-spacing: 3px;
  color:#b03520;
} 
.container_first{
align-items: center;
} 
.about_chairman{
  word-spacing: 3px;
  letter-spacing: 3px;
  font-weight: bolder;

}
.container-responsive6{
  margin: 30px;
}

</style>
</head>
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
  <h3 class="text-dark text-center mt-5 pt-5" id="title" > Our Specialized Doctors </h3><br>
  <h4 class="text-center about_chairman" style="color:#b03520;"> Chairman of Amma Hospitals</h4>

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
<div class="full_container bg-light">
<div class="container_first bg-light">

<ul class="cards_first">
  <li>
    <a href="" class="card">
      <img src="https://img.freepik.com/free-vector/flat-design-medical-presentation_23-2148891224.jpg?size=626&ext=jpg&ga=GA1.2.861524257.1658580216" class="card__image1" alt="" />
      <div class="card__overlay">
        <div class="card__header">
          <img class="card__thumb" src="https://img.freepik.com/free-vector/flat-design-medical-presentation_23-2148891224.jpg?size=626&ext=jpg&ga=GA1.2.861524257.1658580216" alt="" />
          <div class="card__header-text">
            <h3 class="card__title"><b>Dr.MC.SANDEEP </b></h3>            
            <span class="card__status" style="color:#b03520;"><b><i> Chairman of Amma Hospitals</span>
              
          </div>
        </div>
<p style="color:black" class="first_card_content">MBBS,MRCP(T)<br>
                         
                         MS Cardiology (London) <br>
                         Chief Cardiologist<br>
                         Exp:- Narayana Hrudayalaya , Manipal & Jaydev Hospitals</p>      </div>
    </a>      
  </li>
</ul>
</i>
</b>
</span>
</div>
<ul class="cards bg-light" >
  <li>
    <a href="" class="card">
      
      <img src="https://img.freepik.com/free-vector/doctor-online-service-platform-healthcare-modern-medicine-treatment-analysis-diagnosis-emergency-call-isolated-vector-illustration_613284-1170.jpg?size=626&ext=jpg&ga=GA1.2.861524257.1658580216" class="card__image" alt="" />
      <div class="card__overlay">        
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                 
          <img class="card__thumb" src="https://img.freepik.com/free-vector/doctor_1196-270.jpg?w=740&t=st=1660802322~exp=1660802922~hmac=a5d3f9f20ba194e6cf44993246dcef78012e3d25b7613207c279532a9ce257a1" alt="" />
          <div class="card__header-text">
            <h3 class="card__title"><b>Dr.E.ANKITHA REDDY</b></h3>
            <span class="card__status" style="color:#b03520;"><b> Fellow in Diabetology (UK)</b></span>
          </div>
        </div>
        <p class="card__description">MBBS , MRCP(LONDON)</p>
      </div>
    </a>
  </li>
  <li>
    <a href="" class="card">
     <img src="https://img.freepik.com/free-vector/tiny-doctors-with-glucometer-flat-vector-illustration-female-therapists-analyzing-result-patients-blood-glucose-sugar-test-making-diagnosis-diabetic-hypoglycemia-medicine-concept_74855-23209.jpg?size=626&ext=jpg&ga=GA1.2.861524257.1658580216" class="card__image" alt="" />
      <div class="card__overlay">
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
          <img class="card__thumb" src="https://img.freepik.com/premium-vector/front-portraits-young-doctors-character-avatars-illustration-graphic-design-animation_635702-196.jpg?w=740" alt="" />
          <div class="card__header-text">
            <h3 class="card__title"><b>Dr.A.MANOHAR KUMAR</b></h3>
            <span class="card__tagline" style="color:#b03520;"><b>Emergency Medicine</b></span>            
          </div>
        </div>
        <p class="card__description">MBBS,MCCM,DEM</p>
      </div>
    </a>
  </li>
  


  <li>
    <a href="" class="card">
      <img src="https://img.freepik.com/free-vector/cardiologist-concept-illustration_114360-6987.jpg?w=740&t=st=1659962177~exp=1659962777~hmac=4690850f219a9a6ada8320869707c61c43d080aa282d7fbd0d252b8205df0cc8" class="card__image" alt="" />
      <div class="card__overlay">
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
          <img class="card__thumb" src="https://img.freepik.com/free-vector/male-doctor-poster_1284-4729.jpg?size=338&ext=jpg&ga=GA1.2.861524257.1658580216" alt="" />
          <div class="card__header-text">
            <h3 class="card__title"><b>Dr.ANAND R SHENOY</b></h3>            
            <span class="card__status" style="color:#b03520;"><b> consultant international cardiologist </b></span>
          </div>
        </div>
        <p class="card__description">MD,DM,FICC,FSCAI,MEAPCI,FESC,FRCP(Ed)<br>
        Department Of Cardiology</p>
      </div>
    </a>      
  </li>
</ul>
<ul class="cards bg-light">
  <li>
    <a href="" class="card">
      <img src="https://img.freepik.com/free-vector/physiotherapy-rehabilitation-isometric-composition-with-doctor-examining-patients-leg-electronic-apparatus-illustration_1284-64098.jpg?size=338&ext=jpg&ga=GA1.2.861524257.1658580216" class="card__image" alt="" />
      <div class="card__overlay">        
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                 
          <img class="card__thumb" src="https://img.freepik.com/free-vector/detailed-doctors-nurses-illustration_52683-60089.jpg?size=626&ext=jpg&ga=GA1.2.861524257.1658580216" alt="" />
          <div class="card__header-text">
            <h3 class="card__title"><b>Dr.S.BHASKAR</b></h3>
            <span class="card__status" style="color:#b03520;"><b>Electro Physiologist</b></span>
          </div>
        </div>
        <p class="card__description"><b>MD,DM<br> INTV cardiologist</b></p>
      </div>
    </a>
  </li>
  <li>
    <a href="" class="card">
      <img src="https://img.freepik.com/free-vector/doctor-nurse-study-discuss-xray-patient-lung-image-man-pulmonologist-woman-therapist-assistant-examine-fluorography-result-disease-determination_575670-456.jpg?w=740&t=st=1659962760~exp=1659963360~hmac=4acb650691cf9843a01b6dadedb05231d096d539027ade8d196887c2fa329836" class="card__image" alt="" />
      <div class="card__overlay">
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
          <img class="card__thumb" src="https://img.freepik.com/free-vector/doctor-doing-checkup-examination-old-patient-hospital-man-listening-breathing-with-stethoscope-senior-standing_575670-1555.jpg?size=626&ext=jpg&ga=GA1.2.861524257.1658580216" alt="" />
          <div class="card__header-text">
            <h3 class="card__title"><b>Dr.K.CHINNIKRISHNA REDDY</b></h3>
            <span class="card__status" style="color:#b03520;"><b>Consultant Radiologist </b></span>
          </div>
        </div>
        <p class="card__description"><b> MBBS,DMRD </b></p>
      </div>
    </a>
  </li>
  <li>
    <a href="" class="card">
      <img src="https://img.freepik.com/free-vector/medical-video-call-consultation-illustration_88138-415.jpg?w=900&t=st=1660802653~exp=1660803253~hmac=157d220f96fbc253fb22364881c69ab897434bf7a038f8ccd77429a9316973fd" class="card__image" alt="" />
      <div class="card__overlay">
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
          <img class="card__thumb" src="https://img.freepik.com/free-psd/3d-illustration-cute-woman-doctor-cartoon-character-presentation-copy-space-healthcare-medical-banner_56104-1656.jpg?size=626&ext=jpg&ga=GA1.2.861524257.1658580216" alt="" />
          <div class="card__header-text">
            <h3 class="card__title"><b>Dr.TAMEEM AHMED</b></h3>
            <span class="card__status" style="color:#b03520;"><b>Medical Director</b></span>
          </div>
        </div>
        <p class="card__description"></p>
      </div>
    </a>
  </li>
  
</ul>
</div>

   



<footer class="text-center text-lg-start ">
  <section
    class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
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
sahc.cardiac@gmail.com          </p>
          <p><i class="fas fa-phone me-3"></i>8123340355</p>
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