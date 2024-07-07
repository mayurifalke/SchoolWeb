<?php
include("connection.php");
$id= $_GET['id'];

$selectquery="select * from contact where id='$id' ";

$query = mysqli_query($con,$selectquery);
$nums=mysqli_num_rows($query);
$res = mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /*Registration form css*/
        .main {
            /*margin-top: 50px;*/
            display: flex;
            align-items: center;
            justify-content: center;
            background: #4070f4;
            min-height: 100vh;
        }

        .container1 {
            position: relative;
            max-width: 900px;
            width: 100%;
            border-radius: 6px;
            padding: 30px;
            margin: 0 15px;
            background-color: #fff;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
            
        }

        .contain .head {
            position: relative;
            font-size: 20px;
            font-weight: 600;
            color: #333;
        }

        .contain .head::before {
            content: "";
            position: absolute;
            left: 0;
            bottom: -2px;
            height: 3px;
            width: 27px;
            border-radius: 8px;
            background-color: #4070f4;
        }

        .container1 form {
            position: relative;
           /* margin-top: 16px;*/
            min-height: 500px;
            background-color: #fff;
          
        }

        .contain form .form {
            /*position: absolute;*/
            background-color: #fff;
            transition: 0.3s ease;
        }

        .contain form .title {
            font-size: 16px;
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            margin: 6px 0;
            color: #333;
        }

        .contain form .fields {
            align-items: center;
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        form .fields .input-field {
            display: flex;
            width: calc(100% / 3 - 15px);
            flex-direction: column;
            margin: 4px 0;
        }

        .input-field label {
            font-size: 17px;
            font-weight: 500;
            color: #2e2e2e;
            margin-left:20px;
        }

        .input-field input {
            outline: none;
            font-size: 14px;
            font-weight: 400;
            color: #333;
            border-radius: 5px;
            border: 1px solid #aaa;
            padding: 0 15px;
            height: 42px;
            margin: 8px 0;
        }

        .input-field input:is(focus, :valid) {
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.13);
        }

        .input-field input[type="date"] {
            color: #707070;
        }

        .input-field input[type="date"]:valid {
            color: #333;
        }

        .contain form button {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 45px;
            max-width: 200px;
            width: 100%;
            border: none;
            outline: none;
            color: #fff;
            border-radius: 5px;
            margin: 25px 0;
            background-color: #4070f4;
            transition: all 0.3s linear;
            cursor: pointer;
        }

        form button:hover {
            background-color: #809524;
            color: #0e0e0e;
        }

        form button i,
        form .backBtn i {
            margin: 0 6px;
        }

        form .buttons {
            display: flex;
            align-items: center;
        }

        .contain form button {
            font-size: 14px;
            font-weight: 400;
        }

        .content {
          
            margin-right: 40px;
            padding-right: 20px;
        }
        #sbtn{
             width: 180px;
             height: 50px;
             background-color: rgba(39, 245, 135, 0.8);
             font-weight: bold;
             font-size: large;
             box-shadow: 5px 10px 18px #888888;
        }
        #sbtn:hover{
            font-size: large;
            background-color:gold;
            box-shadow: 5px 10px 18px #888888;
        }
        #sbtn2{
            width: 180px;
             height: 50px;
             background-color: rgba(39, 245, 135, 0.8);
             font-weight: bold;
           float: right;
           font-size: large;
           box-shadow: 5px 10px 18px #888888;
        }
        #sbtn2:hover{
            font-size: large;
            background-color:gold;
            box-shadow: 5px 10px 18px #888888;
        }
    </style>
</head>
<body>
<div class="main">
    
        <div class="contain" >
            
           <a href="Newvisitors.php"> <input type="button" value="Back"  name="reg"  id="sbtn2" ></a><br><br><br><br>
            <center><header style="font-size:26px; font-weight:bold;">Update Student Details</header></center><br>
            <form action="#" class="secActive" method="post">
                <div class="form first">
                    <div class="details personal"><br>
                        <span class="title" style="font-size:20px;margin-left:20px;">Personal Details</span>

                        <div class="fields">
                            <div class="input-field">
                                <label style="margin-right: 40px;">Student Name</label>
                                <input type="text" placeholder="Your Name" style=" margin-left:20px;" required name="fname"
                                value="<?php echo $res['fname'];?>">
                            </div>
        
                            <div class="input-field">
                                <label style="margin-right: 40px;">Parent's emailID</label>
                                <input type="text" placeholder=" Your email" required name="email"
                                value="<?php echo $res['email'];?>" style=" margin-right:20px;">
                            </div>
                            <div class="input-field">
                                <label style="margin-right: 40px;">Subject</label>
                                <input type="text" placeholder="Your Subject" required name="sub" style=" margin-left:20px;"
                                value="<?php echo $res['sub'];?>">
                            </div>
                            <div class="input-field">
                                <label style="margin-right: 40px;">Message</label>
                                <input type="text" placeholder="Your Message" required name="msg" style=" margin-left:20px;"
                                value="<?php echo $res['msg'];?>">
                            </div>

                           <!-- <div class="input-field">
                                <label>Message</label>
                                <input class="btn btn-primary w-100 py-3" type="submit" value="Send Message" name="send" >
                                value="<?php echo $res['msg'];?>">
                            </div>-->
                          
                           <!-- <div class="input-field">
                                <label style="margin-right: 40px;">Mother's Name</label>
                                <input type="text" placeholder="Mother's Name" required name="mname">
                            </div>
                            <div class="input-field">
                                <label style="margin-right: 40px;">Occupation</label>
                                <input type="text" placeholder="Father's Occupation" required name="occupation">
                            </div>

                            <div class="input-field">
                                <label style="margin-right: 40px;">Annual Income</label>
                                <input type="number" placeholder="Enter Income in number format" required name="income">
                            </div>-->

                            
                        </div>
                        
                        <center><input type="submit" value="Update"  name="reg" style="margin-top:30px;" id="sbtn"></center><br><br>
                        <!--<button class="nextBtn"  name="register" name="reg">
                            <span class="btnText">Submit</span>
                            <i class="uil uil-navigator"></i>
                        </button>-->
                    </div>
                    
                </div>
                
        </form>
    </div>

    <!--end my reg form-->
</div> 


</body>
</html>
<?php
if(isset($_POST['reg']))
{
$studentname = $_POST['fname'];
$email = $_POST['email'];
$subject = $_POST['sub'];
$msg = $_POST['msg'];



$sql = "UPDATE contact set fname='$studentname',email='$email',sub='$subject',msg='$msg' WHERE id='$id'";
if (mysqli_query($con, $sql)) 
{
 echo "<script> alert('New record updated successfully'); </script>";
} 
else 
{
  echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

mysqli_close($con);

}
?>