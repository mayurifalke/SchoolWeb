<?php
include('connection.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Godavari Public School</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="lib/twentytwenty/twentytwenty.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
        .bg-img {
            width: 100%;
            height: 60vh;
            background: url(img/reg.jpg);
            background-position: center;
            background-size: cover;
        }

        .para {
            font-size: 40px;
            text-shadow: 2px 2px 5px rgb(243, 10, 10);
            margin-top: 40px;
           /* margin-left: 600px;*/
        }

        .para3 {
            font-size: 25px;
            margin-left: 140px;
            margin-top: 55px;
            font-weight: bolder;
        }

        .para4 {
            letter-spacing: normal;
            font-size: 20px;
            margin-left: 140px;
            margin-top: 18px;
        }
         /*Registration form css*/
         .main {
            margin-top: 50px;
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
            margin-top: 16px;
            min-height: 500px;
            background-color: #fff;
        }

        .contain form .form {
            position: absolute;
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
            font-size: 12px;
            font-weight: 500;
            color: #2e2e2e;
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

        }
        body{
        height: auto;
    }
    </style>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-dark m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-secondary m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-light ps-5 pe-0 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <small class="py-2"><i class="far fa-clock text-primary me-2"></i>Opening Hours: Mon - Sat : 6.00 am
                        - 10.00 pm, Sunday Closed </small>
                </div>
            </div>
            <div class="col-md-6 text-center text-lg-end">
                <div class="position-relative d-inline-flex align-items-center bg-primary text-white top-shape px-5">
                    <div class="me-3 pe-3 border-end py-2">
                        <p class="m-0"><i class="fa fa-envelope-open me-2"></i>godavari@example.com</p>
                    </div>
                    <div class="me-3 pe-3 border-end py-2">
                        <p class="m-0"><i class="fa fa-phone-alt me-2"></i>+012 345 6789</p>
                    </div>

                    <div>
                        <!--<button type="button" class="btn text-dark" data-bs-toggle="modal"
                            data-bs-target="#searchModal"><i class="fa fa-search"></i></button>-->
                        <!-- <a href="admission1.php" class="btn btn-primary py-2 px-4 ms-3"
                            style="color:black;">Admission</a> -->
                            <a href="admin/adminpage.php" class="btn btn-primary py-2 px-4 ms-3"
                            style="color:black;background-color:#F57E57;">Admin Login </a>
                    </div>  
                              </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0">
        <a href="index.php" class="navbar-brand p-0">
        <img src="img/download.jpg" style="width:100px;height:100px;">
            &nbsp;&nbsp;
            <h1 class="m-0 text-primary" style="float:right;"><!--<i class="fa fa-tooth me-2"></i>-->Godavari Public School</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="index.php" class="nav-item nav-link active">Home</a>
                <div class="nav-item dropdown">
                    <a href="about.html" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">About Us</a>
                    <div class="dropdown-menu m-0">
                        <a href="principalDesk.html" class="dropdown-item">Principal Desk</a>
                        <a href="Trustee.html" class="dropdown-item">Trustee</a>
                        <a href="Faculty.html" class="dropdown-item">Faculty</a>
                       
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Facilities</a>
                    <div class="dropdown-menu m-0">
                        <a href="Sciencelab2.html" class="dropdown-item">Science Lab</a>
                        <a href="Computerlab.html" class="dropdown-item">Computer Lab</a>
                        <a href="library1.html" class="dropdown-item">Library</a>
                        <a href="Playarea.html" class="dropdown-item">Play Area</a>
                        <a href="Smartclasses.html" class="dropdown-item">Smart Classes</a>
                        <a href="busfacility1.html" class="dropdown-item">Bus Facility</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Achivements</a>
                    <div class="dropdown-menu m-0">
                        <a href="sports.html" class="dropdown-item">Sports Achivements</a>
                        <a href="academics.html" class="dropdown-item">Academics Achivements</a>
                        <a href="other.html" class="dropdown-item">Other Achivements</a>
                    </div>
                </div>

                <a href="gallery2.html" class="nav-item nav-link active" style="color:black">Gallery</a>
                <a href="loginforLearning.php" class="nav-item nav-link active" style="color:black">Learning</a>
                <a href="login.php" class="nav-item nav-link active" style="color:black">Parent Login</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">More</a>
                    <div class="dropdown-menu m-0">
                        <a href="textbook.html" class="dropdown-item">TextBook List</a>
                        <a href="academiccalendar.html" class="dropdown-item">Academic<br> Calendar</a>
                        <a href="contact.php" class="dropdown-item">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->
  <!-- Full Screen Search Start -->
  <div class="modal fade" id="searchModal" tabindex="-1">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
            <div class="modal-header border-0">
                <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex align-items-center justify-content-center">
                <div class="input-group" style="max-width: 600px;">
                    <input type="text" class="form-control bg-transparent border-primary p-3"
                        placeholder="Type search keyword">
                    <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Full Screen Search End -->
<div class="bg-img"></div>
    <center><p class="para">Admission Enquiry Form</p></center><br><br>
    <p class="para3">
        The following documents need to be submitted along with the ‘Provisional Admission Form’.
    </p>
    <p class="para4">
        ◉ Please use capital letters only.<br>
        ◉ Incomplete form will not be accepted..
    </p>

    <div class="main">
        <div class="contain">
            <br>
            <header>Registration Form</header>
            <form action="#" class="secActive" method="post">
                <div class="form first">
                    <div class="details personal">
                        <span class="title">Personal Details</span>

                        <div class="fields">
                            <div class="input-field">
                                <label style="margin-right: 40px;">Student Name</label>
                                <input type="text" placeholder="Your Name"  name="studentname" required>
                            </div>
                            <div class="input-field">
                                <label style="margin-right: 40px;">Date of Birth</label>
                                <input type="date" id="bdate" placeholder="Your Date of Birth"  name="birth" required>
                            </div>
                            <div class="input-field">
                                <label style="margin-right: 40px;">Parent's emailID</label>
                                <input type="text" placeholder="Enter emailID"  name="email"required>
                            </div>
                            <div class="input-field">
                                <label style="margin-right: 40px;">Gender</label>
                                <input type="text" placeholder="Your Gender"  name="gender"required>
                            </div>

                            <div class="input-field">
                                <label>Parent Phone Number</label>
                                <input type="number" placeholder="Mobile No."  name="fno"required>
                            </div>
                            <div class="input-field">
                                <label>Annual Income</label>
                                <input type="number" placeholder="Enter Income in number format"  name="income"required>
                            </div>
                        </div>
                    </div>

                    <!--next-->
                    <div class="details personal">
                        <!--<span class="title">Personal Details</span>-->
                        <div class="fields">
                            <div class="input-field">
                                <label>Nationality & Religion</label>
                                <input type="text" placeholder="Nationality & Religion"  name="nation" required>
                            </div>
                            <div class="input-field">
                                <label style="margin-right: 40px;">Mother Tongue</label>
                                <input type="text" placeholder="Mother Tongue"  name="tongue" required>
                            </div>
                            <div class="input-field">
                                <label style="margin-right: 40px;">Father's Name</label>
                                <input type="text" placeholder="Father's Name"  name="fname" required>
                            </div>

                          <!--  <div class="input-field">
                                <label style="margin-right: 40px;">Mother's Name</label>
                                <input type="text" placeholder="Mother's Name" required name="mname">
                            </div>-->
                            <?php
                           
                           /* if(array_key_exists('bdate',$_POST))
                            {
                            $birth = $_POST['birth'];
                            $c1 = date("y-m-d");
                            $timestamp1 = strtotime($birth);
                            $timestamp2 = strtotime($c1);
                            $y1 = date('Y',$timestamp1);
                            $y2 = date('Y',$timestamp2);
                            
                            $m1 = date('m',$timestamp1);
                            $m2 = date('m',$timestamp2);
                            
                            $d1 = date('d',$timestamp1);
                            $d2 = date('d',$timestamp2);
                            
                            $y = ($y2-$y1);
                            //printf("%d years: ",$y)."<br>";
                            
                            $m = ($m1-$m2);
                            //printf("%d years: ",$m)."<br>";
                            
                            $d = ($d1-$d2);
                           // printf("%d years: ",$d)."<br>";
                            */
                              ?>
                            <div class="input-field">
                                <label style="margin-right: 40px;">Standard
                            <span><?php 
                             ?></span>
                                </label>
                                <input type="number" placeholder="Standard" required name="std"required>
                            </div>

                          <!--  <div class="input-field">
                                <label style="margin-right: 40px;"></label>
                                <input type="number" placeholder="Enter Income in number format" required name="income">
                            </div>-->

                            
                        </div>
                        
                        <center><input type="submit" value="Submit"  name="reg" style="margin-top:30px;" id="sbtn"></center>
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

   <div class="content">
            <p class="para3" style="color:#070707;font-weight:bold;">
                Note
            </p>
            <p class="para4" style="color:#030303;">
                1. Any one parent should accompany the child on interview day.<br>
                2. Submit a passport size photo of the child<br>
                3. Submit a photo copy of the Birth Certificate
            </p>
        </div><br><br>


<!-- Newsletter Start -->

<!-- Newsletter End -->
  <!-- Footer Start -->
  <div class="container-fluid bg-dark text-light py-5 wow fadeInUp" data-wow-delay="0.3s">
  <div class="container pt-5">
            <div class="row g-5 pt-4">
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Quick Links</h3>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-light mb-2" href="index.php"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                        <a class="text-light mb-2" href="aboutus.html"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                        <a class="text-light mb-2" href="Sciencelab2.html"><i class="bi bi-arrow-right text-primary me-2"></i>Facilities</a>
                        <a class="text-light mb-2" href="academics.html"><i class="bi bi-arrow-right text-primary me-2"></i>Achivements</a>
                        <a class="text-light" href="gallery2.html"><i class="bi bi-arrow-right text-primary me-2"></i>Gallery</a>
                       
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Quick Links</h3>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-light mb-2" href="loginforLearning.php"><i class="bi bi-arrow-right text-primary me-2"></i>Learning</a>
                        <a class="text-light mb-2" href="parent.php"><i class="bi bi-arrow-right text-primary me-2"></i>Parent Login</a>
                        <a class="text-light mb-2" href="textbook.html"><i class="bi bi-arrow-right text-primary me-2"></i>Textbook List</a>
                        <a class="text-light mb-2" href="academiccalendar.html"><i class="bi bi-arrow-right text-primary me-2"></i>Academic Calendar</a>
                        <a class="text-light" href="contact.php"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Get In Touch</h3>
                    <p class="mb-2"><i class="bi bi-geo-alt text-primary me-2"></i>Waluj,Aurangabad,431001</p>
                    <p class="mb-2"><i class="bi bi-envelope-open text-primary me-2"></i>godavari@.com</p>
                    <p class="mb-0"><i class="bi bi-telephone text-primary me-2"></i>+012 345 67890</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Follow Us</h3>
                    <div class="d-flex">
                        <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="https://twitter.com/explore"><i class="fab fa-twitter fw-normal"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="https://www.facebook.com/"><i class="fab fa-facebook-f fw-normal"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="https://www.linkedin.com/"><i class="fab fa-linkedin-in fw-normal"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded" href="https://www.instagram.com/"><i class="fab fa-instagram fw-normal"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-light py-4" style="background: #051225;">
        <div class="container">
            <div class="row g-0">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-md-0">&copy; <a class="text-white border-bottom" href="#">Godavari Public School</a>. All Rights Reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="mb-0">Designed by: <a class="text-white border-bottom" href="https://htmlcodex.com">Mayuri,Snehal & Janhavi</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="lib/twentytwenty/jquery.event.move.js"></script>
    <script src="lib/twentytwenty/jquery.twentytwenty.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
</html>

<?php
if(isset($_POST['reg']))
{
$studentname = $_POST['studentname'];
$birth = $_POST['birth'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$fno = $_POST['fno'];
$income = $_POST['income'];
$nation = $_POST['nation'];
$tongue = $_POST['tongue'];
$fname = $_POST['fname'];
//$mname = $_POST['mname'];
//$occupation = $_POST['occupation'];

$standard = $_POST['std'];

//email validation
//$email = $_POST["email"];
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Invalid email format";
}




$disp;

$current = date('Y');

//echo $current."<br>";
//echo "$birth";
$var = $current-3;




$c1 = date("y-m-d");
    $timestamp1 = strtotime($birth);
    $timestamp2 = strtotime($c1);
    $y1 = date('Y',$timestamp1);
    $y2 = date('Y',$timestamp2);
    
    $m1 = date('m',$timestamp1);
    $m2 = date('m',$timestamp2);
    
    $d1 = date('d',$timestamp1);
    $d2 = date('d',$timestamp2);
    
    $y = ($y2-$y1);
    //printf("%d years: ",$y)."<br>";
    
    $m = ($m1-$m2);
    //printf("%d years: ",$m)."<br>";
    
    $d = ($d1-$d2);
    //printf("%d years: ",$d)."<br>";
    

if($birth >= $var)
{  
    echo "<script> alert('Your Entered Date is invalid!!'); </script>";
}





else
{
$sql = "INSERT INTO registration2 (studentname,birth,email,gender,fatherNo,Annual,nation,mothertongue,fathername,std) 
VALUES ('$studentname', '$birth','$email','$gender','$fno','$income','$nation','$tongue','$fname','$standard')";

if (mysqli_query($con, $sql)) 
{
 echo "<script> alert('You Registered successfully'); </script>";
} 
else 
{
    echo "<script> alert('Unsuccessfully'); </script>";
  echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

}






mysqli_close($con);

}




?>
