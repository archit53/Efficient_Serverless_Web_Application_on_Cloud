<!DOCTYPE html>
<html>
<head>
	<title>Upload Page</title>
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

<form action="upload.php" method="post" enctype="multipart/form-data">

    
<fieldset>
	<legend>Upload</legend>
	Choose File :  <input type="file" name="fileToUpload" id="fileToUpload">
	<br> 
	<br>
	<center>
	 <input type="submit" value="Upload" name="submit">
	</center>
</fieldset>
   
</form>

</body>
</html>