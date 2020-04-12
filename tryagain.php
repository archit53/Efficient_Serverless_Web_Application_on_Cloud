<?php
if( isset( $_POST['submit'])  )
{ 
  header("Location:index.php");		
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Try Again
	</title>
	<style>
	fieldset 
	{
  	
    	border: 2px solid black;  
    	padding:5px;    
    	   
    	line-height:1.8;    
    	margin: 0% auto;    
    	width:25%

 	}
	</style>
</head>
<body>
<h2 style="text-align: center;">Try Again....</h2>
<br>
<form method="post" action="tryagain.php">
	<fieldset>
	<legend>Login Again</legend>
	<center>
	<input type="Submit" value="Login Again" name="submit" >
	</center>
	</fieldset>
</form>
</body>
</html>