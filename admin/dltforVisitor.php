<?php
include("connection.php");
$id= $_GET['id'];

$query = "DELETE FROM contact WHERE id='$id'";

$data = mysqli_query($con,$query);

if($data){
    echo "<script>alert('Record Deleted');</script>";
    header("Newvisitors.php");
}
else{
    echo "Record not Deleted";
}
?>