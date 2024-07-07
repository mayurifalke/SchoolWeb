<?php
//Session Destroy karnyasthi 
session_start();


session_unset();
//session destroy jhalyavr punha login page vr janyasthi
echo "<script>window.location.href='loginforLearning.php';</script>";
?>