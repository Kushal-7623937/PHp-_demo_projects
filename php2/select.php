<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">  
 </script> 
	<title></title>
</head>
<style>
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
.card-img-top{
	width: 100%;
}
.card{
	width: 20%;
	margin-left: 50px;
	margin-top: 70px;
}
.photo{
	width: 100%;
	height: 100%;
}
.btn-outline-secondary{
	margin-left: 50px;
	margin-top: 50px;
}

	</style>
<body >
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
    <button type="button" class="btn btn-outline-secondary" data-id="all"> All Services</button>
        <button type="button" class="btn btn-outline-secondary" data-id="volvo ac"> Volvo Ac</button>
            <button type="button" class="btn btn-outline-secondary" data-id="volvo nonac"> Volvo Non-Ac</button>
    <button type="button" class="btn btn-outline-secondary" data-id="amaravathi ac">Amaravathi Ac</button>
    <button type="button" class="btn btn-outline-secondary" data-id="amaravathi nonac">Amaravathi Non-Ac</button>
     <button type="button" class="btn btn-outline-secondary" data-id="garuda ac">Garuda Ac</button>
    <button type="button" class="btn btn-outline-secondary" data-id="garuda nonac">Garuda Non-Ac</button>



<div class="container d-flex flex-row">
 <div class="card-deck d-flex flex-row" id="search">
  <div class="card">
    <img src="" class="photo">
    <div class="card-body">
      <h5 class="title"></h5>
      <p class="desc"></p>
      <a class="btn btn-warning" href="booking.php" id="book"></a>

    </div>
  </div>
</div>

<script>

	const menu =[ 
	{
"img":"https://spng.pinpng.com/pngs/s/27-271999_coach-clipart-bus-volvo-bus-yellow-hd-png.png",
"title":"volvo nonac",
"desc": "NonAc Volvo",
"btn":"Book Now",
},
{
    
    "img":"data:image/png;base64,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",

"title": "garuda nonac",
"desc":"non ac garuda",
"btn":"Book Now",
},

{

    "img":"https://u7.uidownload.com/vector/381/502/vector-tourism-bus-free-vector-ai-eps-svg-thumbnail.jpg",

"title": "amaravathi nonac",
"desc":"non ac Amaravathi",
"btn":"Book Now",

	},
	];
	

window.addEventListener("DOMContentLoaded",function(){
 

	let displayMenu = menu.map(function(items){
	
		return ` <div class="card">
	<img src=${items.img} alt="Card image cap" class="photo">
	 <div class="card-body">
      <h5 class="title">${items.title}</h5>
      <p class="desc">${items.desc} </p>
            <a class="btn btn-warning" href="booking.php" id="book">${items.btn}</a>

      </div>
      </div>`

	});
	displayMenu =displayMenu.join('');
	    
	    document.querySelector(".container").innerHTML= displayMenu;
});


function sai(){
var nameArray = menu.map(function(element){
      return element.title;
});
console.log(nameArray);
}

// const section = document.querySelector(".container");
// 	const btn = document.querySelector(".btn-outline-secondary");
// 	console.log(btn);


// Array.from(btn).forEach((el) =>{
// btn.addEventListener("click",function(e){
// 	console.log(e.currentTarget.dataset.id);
// });
// });
// Object.keys(menu).forEach(key => {
// 	console.log(key);
// });







 // btn.forEach(function (btn){
 // 	btn.addEventListener("click" ,function (e) {
 // 		console.log(e.currentTarget.dataset.id);

 // 	});

 // });

	










</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>
</html>