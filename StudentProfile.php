<?php
include('connection.php');
?>
<?php
/*if(!defined('MYSITE')){
    header('location:parent.php');
}*/
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Student's Profile</title>
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
        .content1{
            /*border-radius: 25px;*/
            border: 2px solid #000000;
            width: 650px;
            height: 750px;
        }
        table{
            width: 600px;
            
        }
        td,th{
            text-align: left;
            padding: 10px;
            font-size: 17px;
            color: black;
           
            text-align: left;
        }
        .form-container input[type=number] {
         /*width: 100%;*/
         width: 300px;
        padding: 9px;
        height: 70px;
        /*margin: 20px 0 40px 0;*/
         border: none;
          background: #f1f1f1;

         
          
           }
           .form-container input[type=number]:hover{
            border: 1px solid;
  padding: 10px;
  box-shadow: 5px 10px 8px #888888;
           }
           .form-container label{
            font-size: 26px;
           }
           .sbtn{
            width: 200px;
            height: 50px;
            /*border: 1px solid;
  padding: 10px;
  box-shadow: 5px 10px 8px #888888;*/
            
           }
           .sbtn:hover{
            background-color: rgba(17, 31, 91, 0.8);
            color: white;
            font-weight: bold;
            font-size: 20px;
            border: 1px solid;
  padding: 10px;
  box-shadow: 5px 10px 8px #888888;


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
        <a href="index.html" class="navbar-brand p-0">
        <img src="img/download.jpg" style="width:100px;height:100px;">
          &nbsp;&nbsp;
            <h1 class="m-0 text-primary"style="float:right;"><!--<i class="fa fa-tooth me-2"></i>-->Godavari Public School</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="index.html" class="nav-item nav-link active">Home</a>
                <div class="nav-item dropdown">
                    <a href="about.html" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">About Us</a>
                    <div class="dropdown-menu m-0">
                        <a href="principalDesk.html" class="dropdown-item">Principal Desk</a>
                        <a href="Trustee.html" class="dropdown-item">Trustee</a>
                        <a href="Faculty.html" class="dropdown-item">Faculty</a>
                        <a href="appointment.html" class="dropdown-item">School Timing</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Facilities</a>
                    <div class="dropdown-menu m-0">
                        <a href="Sciencelab2.html" class="dropdown-item">Science Lab</a>
                        <a href="Computerlab.html" class="dropdown-item">Computer Lab</a>
                        <a href="library1.html" class="dropdown-item">Libraray</a>
                        <a href="Playarea1.html" class="dropdown-item">Play Area</a>
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
                        <a href="academiccalendar1.html" class="dropdown-item">Academic <br>Calendar</a>
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


<?php
if(isset($_POST['searchdata']))
{
    $search = $_POST['sid'];
    
    $query = "SELECT * FROM adduser WHERE id='$search' ";
   // echo "<script> alert('New record created successfully'); </script>";
    $data = mysqli_query($con,$query);

    $result = mysqli_fetch_assoc($data);
    
    
    //$name = $result['sname'];
    //echo $name;


    
}
?>


<form action="" method="post">
<!-- Full Screen Search End -->
<div class="form-container">
<br><br><br><br>
    <center><label><b>Enter Student ID: &nbsp;</b></label>
    <input type="number" placeholder="Enter Student ID" name="sid" required><br><br><br>
    <input type="submit"  name="searchdata" value="Search" class="sbtn"></center>
    </div>
    </form>

<div class="content1" style="margin-left:540px;margin-top:100px;background: rgba(240,227,227,0.5);
 backdrop-filter: blur(15px);">
   
 <div class="inner1" style="background-color: rgb(51, 5, 89);">
   <center>
           
  <br>
    <img src="
    <?php
            if(isset($_POST['searchdata'])){echo "admin/".$result['uimg']; }
            ?>
    
    " width="250px" height="230px" style="border-radius: 50%;border-color: red;" ></center><br>
   
    <center><p style="color: #fff;font-size:20px">Student's Name</p></center>
</div>
<!--<div class="line" style="border-bottom:2px solid #000000;margin-top:auto"></div>-->
<center><p style="color: rgb(8, 201, 244);font-size:large;">Student Personal Information</p></center>
<hr>
<center><table>
    <tr>
           <th>Student Full Name:</th>
           <th>
            <?php
            if(isset($_POST['searchdata'])){echo $result['sname'];}
            ?>
           </th>
    </tr>
    <tr>
           <td>Date of Birth:</td>
           <td><?php
            if(isset($_POST['searchdata'])){echo $result['birth'];}
            ?></td>
    </tr>
    <tr>
        <td>Admission Date:</td>
        <td><?php
            if(isset($_POST['searchdata'])){echo $result['adate'];}
            ?></td>
 </tr>
 <tr>
    <td>Parent's emailID:</td>
    <td><?php
            if(isset($_POST['searchdata'])){echo $result['pemail'];}
            ?></td>
</tr>

<tr>
    <td>Gender:</td>
    <td><?php
            if(isset($_POST['searchdata'])){echo $result['gender'];}
            ?></td>
</tr>
<tr>
    <td>Parent Phone Number</td>
    <td><?php
            if(isset($_POST['searchdata'])){echo $result['pno'];}
            ?></td>
</tr>
<!--<tr>
    <td>Mother's Phone Number</td>
    <td>01 Jun 2016</td>
</tr>-->
<tr>
    <td>Address</td>
    <td><?php
            if(isset($_POST['searchdata'])){echo $result['addr'];}
            ?></td>
</tr>

</table></center>
</div><br><br><br>
    

<!-- Newsletter Start -->
<!--<div class="container-fluid position-relative pt-5 wow fadeInUp" data-wow-delay="0.1s"
style="z-index: 1;">
<div class="container">
    <div class="bg-primary p-5">
        <form class="mx-auto" style="max-width: 600px;">
            <div class="input-group">
                <input type="text" class="form-control border-white p-3" placeholder="Your Email">
                <button class="btn btn-dark px-4">Sign Up</button>
            </div>
        </form>
    </div>
</div>
</div>-->
<!-- Newsletter End -->
  <!-- Footer Start -->
  <div class="container-fluid bg-dark text-light py-5 wow fadeInUp" data-wow-delay="0.3s" >
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
