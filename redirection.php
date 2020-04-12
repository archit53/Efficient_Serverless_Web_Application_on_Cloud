<?php
  if( isset( $_POST['submit1'])  )
  { 
   		header("Location: mainindex.php");	
  }
  else if( isset( $_POST['submit2'])  ) 
  {
   	header("Location: listing.php");	
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
	<legend>Choose:</legend>
  <center>
	<input type="Submit" name="submit1" value="Upload_File">
	<br>
  <br>
	<input type="Submit" name="submit2" value="Listing_Files">
	</center>

</fieldset>

</form>
</body>
</html>