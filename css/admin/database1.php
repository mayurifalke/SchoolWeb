<?php
$hostName = "localhost";
$userName = "root";
$password = "";
$databaseName = "project";

 //$conn = new mysqli($hostName, $userName, $password, $databaseName);
 $conn = mysqli_connect($hostName, $userName, $password, $databaseName);
 
// Check connection
if ($conn) {
	?>
	<script>
	//alert('Connection successfull');
	</script>
	<?php
}else{
		
  die("Connection failed: " . mysqli_connect_error());
}
?>