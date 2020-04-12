<?php
  if( isset( $_POST['submit'])  )
  { 
  	$username = $_POST['username'];
   	$password = $_POST['password']; 

   	if($username=="archit" && $password=="archit")
   	{
   		header("Location: redirection.php");	
   	}
   	else 
   	{
   		header("Location: tryagain.php");	
   	}
 	
}
?>

<html>
<head>
	<title>Index Page</title>
	<style>
	fieldset 
	{
  	
    	border: 2px solid black;  
    	padding:5px;    
    	width:500px;    
    	line-height:1.8;    
    	margin: 20% auto;    
    	width:25%

 	}
	</style>
</head>
<body>
<form method="post">

<fieldset>
	<legend>Login</legend>
	Username : <input type="text" name ="username" placeholder="Enter Username">
	<br> 
	<br>
	 Password : <input type="Passowrd" name="password" placeholder= "Enter Password">
	<br>
	<br>
	<center>
	<input type="Submit" name="submit">
	</center>
</fieldset>

</form>
</body>
</html>