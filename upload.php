<?php

 if( isset( $_POST['submit1'])  )
  { 
   		header("Location: redirection.php");	
  }

	require './vendor/autoload.php';	
	use Aws\S3\S3Client;
	use Aws\S3\Exception\S3Exception;
	$bucketName = 'architgupta53';
	$IAM_KEY = 'AKIARWOEZQNCFDAHH353';
	$IAM_SECRET = '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';
	try {
		$s3 = S3Client::factory(
			array(
				'credentials' => array(
					'key' => $IAM_KEY,
					'secret' => $IAM_SECRET
				),
				'version' => 'latest',
				'region'  => 'us-east-1'

			)
		);
	} catch (Exception $e) {
		die("Error: " . $e->getMessage());
	}
	
	$keyName =basename($_FILES["fileToUpload"]['name']);
	$pathInS3 = 'https://s3.us-east-1.amazonaws.com/' . $bucketName . '/' . $keyName;
	try {
		$file = $_FILES["fileToUpload"]['tmp_name'];
		$s3->putObject(
			array(
				'Bucket'=>$bucketName,
				'Key' =>  $keyName,
				'SourceFile' => $file,
				'StorageClass' => 'REDUCED_REDUNDANCY',
				 'ACL'    => 'public-read'
			)
		);
	} catch (S3Exception $e) {
		die('Error:' . $e->getMessage());
	} catch (Exception $e) {
		die('Error:' . $e->getMessage());
	}
	?>
	<center>
		<?php
	echo 'Done';
	?>
	</center>
	
	<br>

	<html>
<head>
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
	<legend>Home</legend>
  <center>
	<input type="Submit" name="submit1" value="Home">
	</center>

</fieldset>

</form>
</body>
</html>

