<?php

$studentname = $_POST['studentname'];
$birth = $_POST['birth'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$fno = $_POST['fno'];
$mno = $_POST['mno'];
$nation = $_POST['nation'];
$tongue = $_POST['tongue'];
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$occupation = $_POST['occupation'];
$income = $_POST['income'];


$con = mysqli_connect("localhost","root","","project");
//echo "connect ";
if (!$con)

{
  die("Connection failed: " . mysqli_connect_error());
}


$sql = "INSERT INTO registration (studentname,birth,email,gender,fatherNo,motherNo,nation,mothertongue,fathername,mothername,occupation,income) 
VALUES ('$studentname', '$birth','$email','$gender','$fno','$mno','$nation','$tongue','$fname','$mname','$occupation','$income')";

if (mysqli_query($con, $sql)) 
{
  echo "New record created successfully";
} else 
{
  echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

mysqli_close($con);

?>