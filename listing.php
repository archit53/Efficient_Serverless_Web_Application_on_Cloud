<?php 
if(isset ($_POST['Submit1'] ) )
{
	header("Location : index.php");
}
?>


<?php

require 'app/start.php';

$objects  = $s3->getIterator('ListObjects', [
	'Bucket' => $config['s3']['bucket']
	]);


?>

<!DOCTYPE html>
<html>
<head>
	<title>Listing Files</title>
	<style>
	fieldset 
	{
  	
    	border: 2px solid black;  
    	padding:5px;    
    	width:500px;    
    	line-height:1.5;    
    	margin: 20% auto;    
    	width:25%

 	}
	</style>

</head>

<body>


<form method="post" action="index.php">
	<fieldset>
		<legend>Home</legend>
		<center>
			<input type="Submit" name="Submit1" value="Home">
		</center>
	</fieldset>
</form>


	<fieldset>
		<legend>Listing Files</legend>
	<table border="2px">
		<thead>
			<tr>
				<th>File</th>
				<th>Download</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($objects as $object): ?> 
			
			<tr>

				<td><?php echo $object['Key']; ?></td>
				<td><a href="<?php echo $s3->getObjectUrl($config['s3']['bucket'], $object['Key']); ?>" download="<?php $object['Key']; ?>">Download</a></td>


			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>

	</fieldset>
</body>
</html>