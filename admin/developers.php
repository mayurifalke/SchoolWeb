<?php
include("database1.php");

$selectquery="select * from registration2";

$query = mysqli_query($conn,$selectquery);
$nums=mysqli_num_rows($query);
//echo $nums;


$res = mysqli_fetch_array($query);

//echo $res[0];
while($res = mysqli_fetch_array($query)){
	echo $res['Name']."<br>";
}

 
?>


