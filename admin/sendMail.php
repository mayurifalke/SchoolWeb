<?php
 
 require_once('connection.php');
 $query = "select email from registration2";
 $result = mysqli_query($con,$query);
 
 while($row = mysqli_fetch_assoc($result))
 {
     $to= $row['email'];
 }
  //echo $to;


 $sub ="Medicare Foundation Appointment ";
 $msg="Thank you for booking your appointment! Your appointment has been successfully scheduled on  please report on time. If you have any questions or need to make any changes to your appointment, please don't hesitate to reach out to us. We look forward to seeing you soon!";
 $rec=$to;

 mail($rec,$sub,$msg)


?>