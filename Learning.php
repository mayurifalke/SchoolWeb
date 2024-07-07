<?php
session_start();
$euser = $_SESSION['user_name'];
//echo "Welcome ".$euser;
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
           /* width: 100%;*/
            height: 100vh;
            background: url(img/learn1.jpg);
            background-position: center;
            background-size: cover;
        }
        .boxc{
            /*margin-top: 20px;*/
            background: url(img/blue.jpg);
            width: 610px;
            height: 820px;
            background-position: center;
            background-size: cover;
            text-align: left;

            box-shadow: 0 0 10px 5px rgba(214, 225, 225, 0.8);
            
        }
        .para {
            font-size: 40px;
            text-shadow: 2px 2px 5px black;
            margin-top: 40px;
            margin-left: 600px;
            text-align: justify;
        }
        .content1 {
            margin-top: 20px;
            border-radius: 25px;
            /*margin-left: 360px;*/
            width: 610px;
            height: 820px;
            
            /*text-align: justify;*/
        }
        .para2 {
           /* margin-top: 29px;*/
            letter-spacing: normal;
            font-size: 20px;
           /* margin-left: 700px;*/
            /*margin-right: 18px;*/
        }

        .heading {
            font-size: 23px;
            color: rgb(229, 61, 5);
        }
       ul li{
        list-style: none;
        font-size: 25px;
        margin-right: 10px;
        text-align: center;
        color: white;
       }
      ul li:hover{
        color: black;
        background-color: wheat;
        padding: 10px;
        margin-right: 20px;
        box-shadow: 0 0 5px 2px rgba(214, 225, 225, 0.8);
      }
      .logout{
        background-color:rgba(12, 240, 185, 0.8);
           
            margin-left: 1000px;
            margin-top: 20px;
            width: 190px;
            height: 55px;
            border-radius: 8px;
            margin-bottom: -120px;
            font-weight: bold;
            font-size: 20px;
            cursor: pointer;
        }
        .logout:hover{
            background-color:rgba(159, 17, 91, 0.8);
            
        }
    </style>
</head>

<?php
//if user doesn't login and try to acess the parent page by using url
$userprofile = $_SESSION['user_name'];
echo "<script> alert('Welcome $userprofile'); </script>";         
if($userprofile == true)
{

}
else{
    echo "<script>window.location.href='loginforLearning.php';</script>";
}
?>

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
            <h1 class="m-0 text-primary"style="float:right;"><!--<i class="fa fa-tooth me-2"></i>-->Godavari Public School</h1>
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
<!-- Full Screen Search End -->
<!--<div class="bg-img"></div>-->
<!--info-->
<div class="container-fluid p-0">
<div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="w-100" src="img/learn1.jpg" alt="Image" width="" height="1200">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center" style="background-color: #0000008a;">
                <div class="p-3" style="max-width: 900px;"><br><br><br><br><br><br>
                    <h2 class="text-white text-uppercase mb-3 animated slideInDown" style="margin-top: -150px;">Select Your Standard
                        </h2>
                        <a href="logout.php"><input type="submit" value="LogOut" class="logout"></a>
                        
                           <!-- <div style="border: dotted; border-radius: 20px;margin: 10px; margin-top: 20px;">-->
                            <div>
                           
                            <center><div class="content1">
                           
<div class="boxc">

    <p class="para2">
    <ul>
        <a href="jrkg.html"><li class="l1" >Jr.KG</li></a><br>
        <a href="nursery.html"><li class="l1">Nursery</li></a><br>
        <a href="srkg.html"><li class="l1">Sr.KG</li></a><br>
        <a href="std1.html"><li class="l1">First Standard</li></a><br>
        <a href=""><li class="l1">Second Standard</li></a><br>
        <a href=""><li class="l1">Third Standard</li></a><br>
        <a href=""><li class="l1">Fourth Standard</li></a><br>
        <a href=""><li class="l1">Fifth Standard</li></a><br>
        <a href=""><li class="l1">Sixth Standard</li></a><br>
        <a href=""><li class="l1">Seventh Standard</li></a><br>
        <a href=""><li class="l1">Eighth Standard</li></a><br>
        <a href=""><li class="l1">Ninth Standard</li></a><br>
        <a href=""><li class="l1">Tenth Standard</li></a>
    </ul><br><br>
</p><br><br>
</div><br><br><br>
</div></center>
                            </div>
                <!--</div>-->
            </div>
        </div>
    </div>
    </div>
    </div>
</div>
    <br>
<div>





<!--<center><p class="para">Select Your Standard</p></center><br><br>
   

<center><div class="content1">
    <div class="boxc">

        <p class="para2">
       <ul>
            <a href="jrkg.html"><li class="l1" >Jr.KG</li></a><br>
            <a href="nursery.html"><li class="l1">Nursery</li></a><br>
            <a href="srkg.html"><li class="l1">Sr.KG</li></a><br>
            <a href="std1.html"><li class="l1">First Standard</li></a><br>
            <a href=""><li class="l1">Second Standard</li></a><br>
            <a href=""><li class="l1">Third Standard</li></a><br>
            <a href=""><li class="l1">Fourth Standard</li></a><br>
            <a href=""><li class="l1">Fifth Standard</li></a><br>
            <a href=""><li class="l1">Sixth Standard</li></a><br>
            <a href=""><li class="l1">Seventh Standard</li></a><br>
            <a href=""><li class="l1">Eighth Standard</li></a><br>
            <a href=""><li class="l1">Ninth Standard</li></a><br>
            <a href=""><li class="l1">Tenth Standard</li></a>
        </ul>
    </p>
</div>
</div></center>-->





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