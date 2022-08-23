<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		body{   
    background: #eee;  
}  
#frm{  
    border: solid gray 1px;  
    width:25%;  
    border-radius: 2px;  
    margin: 120px auto;  
    background: white;  
    padding: 50px;  
}  
#btn{  
    color: #fff;  
    background: #337ab7;  
    padding: 7px;  
    margin-left: 70%;  
}  
	</style>
</head>
<body>

    <div id = "frm">  
        <h1>Login</h1>  
        <form name="f1" action = "authentication.php" onsubmit = "return validation()" method = "POST">  
            <p>  
                <label> UserName: </label>  
                <input type = "text" id ="user" name  = "user" />  
            </p>  
            <p>  
                <label> Password: </label>  
                <input type = "password" id ="pass" name  = "pass" />  
            </p>  
            <p>     
                <input type =  "submit" id = "btn" value = "Login" />  
            </p>  
        </form>  
    </div>  
<script>

	function validation(){
		let userName = document.getElementById("user").value;
		let password = document.getElementById("pass").value;

		if(userName == "" || userName == null){
			alert("userName cannot be empty");
		}
		else if (userName.length <= 2 || password.length <= 2){
			alert("Length of user and both will be greater than 3");
		}
	}

</script>

<?php 

mysqli_connect("localhost","root","","my login");

if(mysqli_connect_error()){
	echo "connection not done";
}
else{
	echo "connected succesfull";
}


?>
</body>
</html>