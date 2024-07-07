<?php
session_start();
?>
<html>  
<head>  
    <title>PHP login system</title>  
  <style>
  
  body{   
    background: #eee;
}  
.filter-blur{
            background: rgba(34, 32, 33, 0.52);
            backdrop-filter: blur(3px);
            position: absolute;
            width: 100%;
            height: 100%;
            z-index: 1;
        }
#frm{  
    border: solid gray 1px;  
    width:18%;  
	height:40%;
    border-radius: 2px;  
    margin: 100px auto;  
    background: white;  
    padding: 50px; 
	background-image: url("AF.jpg"); 
  background-size:cover;
  background-repeat:no-repeat;
  background-position:center;
   border-radius:10px;
  box-shadow:-3px -3px 9px #aaa9a9a2,
  3px 3px 7px rgba(147,149,151,0.671);
}  


#btn{  
    color: #fff;  
    background: #337ab7;  
    padding: 7px;  
    margin-center: 70%;  
    width: 70px;
    padding: 10px;
}  
#btn:hover{
    border-radius:10px;
  box-shadow:-3px -3px 9px #aaa9a9a2,
  3px 3px 7px rgba(147,149,151,0.671);
}
.input1 {
            color: #707070;
            height: 30px;
            width: 200px;
        }
        .input1:hover{
            border-radius:10px;
  box-shadow:-3px -3px 9px #aaa9a9a2,
  3px 3px 7px rgba(147,149,151,0.671);
        }
        #sbtn2{
            width: 180px;
             height: 50px;
             background-color: rgba(243, 226, 11, 0.92);
             font-weight: bold;
           margin-top: 20px;
           margin-left: 40px;
           font-size: large;
           box-shadow: 5px 10px 18px #888888;
        }
        #sbtn2:hover{
            font-size: large;
            background-color: white;
            box-shadow: 5px 10px 18px #888888;
        }



</style>  
</head>  
<body class="filter-blur" style="background: url(img/bgs1.jpeg);background-size:cover;background-repeat:no-repeat;
background-position:center;width=100%"> 
<?php

?>
<a href="http://localhost/final%20project/"> <input type="button" value="Back"  name="reg"  id="sbtn2" ></a><br><br><br><br>
    <div id = "frm">  
        <h1> <center>Login</center></h1>  
        <form name="f1" action = "" onsubmit = "return validation()" method = "POST">  
		
		<center>
            <p>  
               <div class="input-field">
                <input type = "text" id ="user"  placeholder="Username" name  = "user" class="input1"/> 
               </div> 
            </p> 
			
            <p>  
            <div class="input-field">
                <input type = "password" id ="pass"  placeholder="Password" name  = "pass" class="input1"/> 
    </div> 
			
            </p>  
			<br>
            <p>  
          		
                <input type =  "submit" id = "btn" value = "Login" name="login" />  
				
            </p> 
			<input type="checkbox" checked="checked"> Remember  
	<br><br>
	  
          
   <!-- <button type="button">
	<a href="logout.php">Logout</a>  </button>-->

		 <!-- <a href="file:///C:/xampp/htdocs/final%20project%20prog/Home1.html"> logout</a>-->
		
		  
</center>			
        </form>  
    </div>  
      
    <script>  

            function validation()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>  
</body>     
</html>
<?php 
include("connection.php");

if(isset($_POST['login']))
{
    $username = $_POST['user'];  
    $password = $_POST['pass'];  

    $query = "select * from log where username = '$username' and password = '$password'";  
    $data = mysqli_query($con, $query);
    $total = mysqli_num_rows($data);
    //echo "<script> alert('$total'); </script>"; 

    if($total == 1)
    {
        //echo "<script> alert('Login successful'); </script>";
        echo "<script> alert('login Successfull'); </script>";
        $_SESSION['user_name'] = $username;
        echo "<script>window.location.href='index.php';</script>";
        exit;
       
        //<meta http-equiv = "refresh" content = "0; url = http://localhost/final%20project/parent.php"/>
        
    }
    else{
        echo "<script> alert('Login Failed. Please Enter the Valid Username and Password'); </script>";
    }
}

?> 
