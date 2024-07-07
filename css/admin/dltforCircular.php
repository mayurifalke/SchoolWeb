<?php
include("connection.php");
$id= $_GET['id'];

$query = "DELETE FROM addcircular WHERE id='$id'";

$data = mysqli_query($con,$query);

if($data){
    echo "<script>alert('Record Deleted');</script>";
}
else{
    echo "Record not Deleted";
}
?>