<?php
include('connection.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta charset="utf-8">
    <title>Godavari Public School</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap"
        rel="stylesheet">

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
        *{
            margin: 0;
            padding: 0;
        }
        body{
            width: 100vw;
            height: auto;
            
            
        }
        .back{
            margin-top: 50px;
            background-color: #051937;
            width: 100%;
        }
        .back2{
            background:url(img/sbg1.jpg) center center no-repeat;
              background-size: cover;
        }
        .back3{
            height: 600px;
            margin-top: 80px;
            background:url(img/bgh.jpeg) center center no-repeat;
              background-size: cover;
        }
        #sbtn{
             width: 180px;
             height: 50px;
             background-color: rgba(39, 245, 135, 0.8);
             font-weight: bold;
        }
        .twoBtn{
              
              flex-direction: row;
        }

     
    </style>

</head>


<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-light ps-5 pe-0 d-none d-lg-block col-lg-6 col-md-6">
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

                    <div class="twoBtn">
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
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0" style="width=100%;">
        <a href="index.php" class="navbar-brand p-0">
            <img src="img/download.jpg" style="width=100px;height=100px;">
            &nbsp;&nbsp;<h1 class="m-0 text-primary" style="float:right;"><!--<i class="fa fa-tooth me-2"></i>--><br>Godavari Public School</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <style>
           
            </style>
        <div class="collapse navbar-collapse " id="navbarCollapse" style="width=100%;">
            <div class="navbar-nav ms-auto py-0"style="width=100%;"> 
                <a href="index.php" class="nav-item nav-link active">Home</a>
                <div class="nav-item dropdown">
                    <a href="aboutus.html" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">About Us</a>
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
                <div class="nav-item dropdown" >
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">More</a>
                    <div class="dropdown-menu m-0"  style="margin-right:30px;">
                        <a href="textbook.html" class="dropdown-item"  style="margin-right:30px;">TextBook List</a>
                        <a href="academiccalendar.html" class="dropdown-item"  style="margin-right:30px;">Academic <br>Calendar</a>
                        <a href="contact.php" class="dropdown-item"  style="margin-right:30px;">Contact Us</a>
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


    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/sbg1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center" style="background-color: #0000008a;">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Learning Today Leading
                                Tommarow</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Welcome to Godavari Public
                                School</h1>
                            <a href="admission1.php"
                                class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Admission</a>
                            <a href="contact.php" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/bgsc2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center" style="background-color: #0000008a;">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Learning Today Leading
                                Tommarow</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Welcome to Godavari Public
                                School</h1>
                            <a href="admission1.php"
                                class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Admission</a>
                            <a href="contact.php" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Banner Start -->
    <div class="container-fluid banner mb-5">
        <div class="container">
            <div class="row gx-0">
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
                    <div class="bg-primary d-flex flex-column p-5" style="height: 300px;">
                        <div class="d-flex justify-content-between text-white mb-3">
                            <!--<h6 class="text-white mb-0">Mon - Fri</h6>--><br><br>
                            <p class="mb-0" style="font-size:21px;color:black;font-weight:bold;"><i> "All children start
                                    their school careers with sparkling imaginations,
                                    fertile minds, and a willingness to take risks with what they think!"</i></p>
                        </div>
                        <button type="button" class="btn text-dark">
                            <a href="aboutus.html" class="btn btn-primary1 py-2 px-4 ms-3"
                                style="color:black;background-color:white;margin-right:30px;">School
                            </a></button>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                    <div class="bg-dark d-flex flex-column p-5" style="height: 300px;">
                        <div class="d-flex justify-content-between text-white mb-3">
                            <!--<h6 class="text-white mb-0">Mon - Fri</h6>--><br><br>
                            <p class="mb-0" style="font-size:21px;color:rgb(253, 253, 253);font-weight:bold;"><i>
                                    "Teachers give children purpose, set them up for success as
                                    citizens of our world, and inspire in them a drive to do well and succeed in
                                    life!"</i></p>
                        </div>
                        <button type="button" class="btn text-dark">
                            <a href="Faculty.html" class="btn btn-primary1 py-2 px-4 ms-3"
                                style="color:black;background-color:white;margin-right:30px;">Teachers
                            </a></button>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
                    <div class="bg-secondary d-flex flex-column p-5" style="height: 300px;">
                        <div class="d-flex justify-content-between text-white mb-3">
                            <!--<h6 class="text-white mb-0">Mon - Fri</h6>--><br><br>
                            <p class="mb-0" style="font-size:21px;color:black;font-weight:bold;"><i> "Building a Better
                                    World For Your Child.Our School offered all Facilities to provide a better education
                                    !"</i></p>
                        </div><br>
                        <button type="button" class="btn text-dark">
                            <a href="Sciencelab2.html" class="btn btn-primary1 py-2 px-4 ms-3"
                                style="color:black;background-color:white;margin-right:30px;">Facilities
                            </a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Start -->


    <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-7">
                     <div class="section-title mb-4">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">About Us</h5>
                        <h1 class="display-5 mb-0">ABOUT
                            GODAVARI ENGLISH PUBLIC SCHOOL</h1>
                     </div>
                     <p class="mb-4" style="text-align: justify; font-size:20px">Education is the passport to the future;
                        for tomorrow belongs to those who prepare for it today.”<br>
                        -Malcolm X<br><br>
                        Godavari English Public School affiliated to State Board was established in 2013 in a sprawling
                        campus in the heart
                        of the city.<br> It boasts of a dynamic infrastructure with spacious and well-ventilated
                        classrooms,
                        a huge library, well-equipped laboratories, high-tech computer lab, an open-air playground and a
                        state-of-the-art Auditorium.
                        It was founded by a visionary Dr. R N Shetty with the vision of providing an empowering
                        environment where learners become
                        independent through meticulously planned scientific and practical ways. Here, we believe in
                        imparting quality education which
                        focuses on learners gaining in self-confidence and courage to face the challenges of life.</h4>
                        Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam
                        amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus
                        clita duo justo et tempor eirmod magna dolore erat amet</p>
                </div>
                <!--<div class="col-lg-5" style="min-height: 500px;">-->
                    <!--<div class="position-relative h-100">-->
                    <!--registration form-->
                    <div class="col-lg-5"  style="min-height: 500px;">
                        <div class="appointment-form h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn"
                            data-wow-delay="0.6s">
                            <!--registration form-->
                            <div class="main">
                                <div class="contain"><br>
                                    <header>Registration Form</header><br>
                                    <form action="#" class="secActive" method="post">
                                        <div class="form first">
                                            <div class="details personal">
                                                <span class="title">Personal Details</span>
                        
                                                <div class="fields">
                                                    <div class="input-field">
                                                        <label style="margin-right: 40px;">Student Name</label>
                                                        <input type="text" placeholder="Your Name" required name="studentname">
                                                    </div>
                                                    <div class="input-field">
                                                        <label style="margin-right: 40px;">Date of Birth</label>
                                                        <input type="date" placeholder="Your Date of Birth" required name="birth">
                                                    </div>
                                                    <div class="input-field">
                                                        <label style="margin-right: 40px;">Parent's emailID</label>
                                                        <input type="text" placeholder="Enter emailID" required name="email">
                                                    </div>
                                                    <div class="input-field">
                                                        <label style="margin-right: 40px;">Gender</label>
                                                        <input type="text" placeholder="Your Gender" required name="gender">
                                                    </div>
                        
                                                    <div class="input-field">
                                                        <label>Parent Phone Number</label>
                                                        <input type="number" placeholder="Mobile No." required name="fno">
                                                    </div>
                                                    <div class="input-field">
                                                        <label>Annual Income</label>
                                                        <input type="number" placeholder="Enter Income in number format" required name="mno">
                                                    </div>
                        
                        
                                                </div>
                                            </div>
                        
                                            <!--next-->
                                            <div class="details personal">
                                                <!--<span class="title">Personal Details</span>-->
                        
                                                <div class="fields">
                                                    <div class="input-field">
                                                        <label>Nationality & Religion</label>
                                                        <input type="text" placeholder="Nationality & Religion" required name="nation">
                                                    </div>
                                                    <div class="input-field">
                                                        <label style="margin-right: 40px;">Mother Tongue</label>
                                                        <input type="text" placeholder="Mother Tongue" required  name="tongue">
                                                    </div>
                                                    <div class="input-field">
                                                        <label style="margin-right: 40px;">Father's Name</label>
                                                        <input type="text" placeholder="Father's Name" required name="fname">
                                                    </div>
                        
                                                </div>
                                                <center><input type="submit" value="Submit"  name="reg" style="margin-top:30px;" id="sbtn"></center>
                                            </div>
                                        </div>
                                </div>

                            <!--end my reg form-->
                        </div>
                    </div><!--end form-->

                    <!--</div>--><!--position-relative h-100-->
                <!--</div>-->
         </div>

      </div>
   </div>
                <!-- About End -->

                <!-- Latest Event Start -->
                <div class="back col-lg-6 col-md-6"  data-wow-delay="0.1s" style="width=100%;">
                    <div class="container" style="height:630px;width=100%;">
                        <div class="row gx-5">
                            <div class="col-lg-6 py-5">
                                <div class="py-5"><br><br><br>
                                    <p class="text-white mb-0" style="margin-left: 150px;font-size:20px;">Latest News</p>
                                    <h1 class="display-5 text-white mb-4" style="margin-left: 70px; margin-top:10px;">News & Events</h1>
                                   <!--<a href="ciru.php"> <button style="border-radius: 12px; color:black; background-color:rgb(240, 146, 162); margin-left:90px; width:160px; height:50px;font-weight:bold;">
                                        Latest News</button></a>-->
                                        <a href="ciru.php"><input type="button" value="Latest News" style="border-radius: 12px; color:black; background-color:rgb(240, 146, 162); margin-left:90px; width:160px; height:50px;font-weight:bold;"></a>
                                        <a href="eventCalendar.php"><input type="button" value="Latest Events" style="border-radius: 12px; color:black; background-color:rgb(204, 231, 88);margin-left:10px; width:160px; height:50px;font-weight:bold;"></a>
                                        <!--<a href="eventCalendar.php"><button style="border-radius: 12px; color:black; background-color:rgb(204, 231, 88);margin-left:10px; width:160px; height:50px;font-weight:bold;">
                                        Latest Events</button></a>-->
                                </div>
                             </div>
                             <!--<div class="col-lg-6">-->
                                <div class = "box col-lg-6 ">
                                    <img src = "img/karate.jpg" alt = "#" class="img1">
                                    <button class = "btn">Yoga & Meditiation</button>
                                 </div>
                                 <div class = "box2 col-lg-6 ">
                                    <img src = "img/yoga.jpg" alt = "#" class="img1">
                                    <button class = "btn">Karate</button>
                                 </div>
                                 <div class = "box3 col-lg-6">
                                    <img src = "img/cultural.jpg" alt = "#" class="img1">
                                    <button class = "btn">Cultural Event</button>
                                 </div>
                                <div class = "box4 col-lg-6">
                                    <img src = "img/ganesha.jpg" alt = "#" class="img1">
                                    <button class = "btn">Genesh Festival</button>
                                 </div>
                               <!--</div>-->
                            </div><!--end form-->
                        </div>
                    </div>
                </div>
                <!-- Latest Event End -->

                 <!-- Team Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="px-2" style="font-size:20px;">Our Teachers</span></p>
                <h1 class="mb-4">Meet Our Teachers</h1>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3 text-center team mb-5">
                    <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%;">
                        <img class="img-fluid w-100" src="img/teach1.jpg" alt="" >
                        <div
                            class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                            <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;"
                                href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;"
                                href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px;"
                                href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <h4>Mrs.Rohini Chimney</h4>
                    <i>Maths Teacher</i>
                </div>
                
                <div class="col-md-6 col-lg-3 text-center team mb-5">
                    <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%;">
                        <img class="img-fluid w-100" src="img/teach2.jpg" alt="" >
                        <div
                            class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                            <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;"
                                href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;"
                                href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px;"
                                href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <h4>Mr.Anand Verma</h4>
                    <i>Language Teacher</i>
                </div>
                <div class="col-md-6 col-lg-3 text-center team mb-5">
                    <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%;">
                        <img class="img-fluid w-100" src="img/teach33.jpg" alt="" >
                        <div
                            class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                            <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;"
                                href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;"
                                href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px;"
                                href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <h4>Mrs.Savita Warshney</h4>
                    <i>Science Teacher</i>
                </div>
                <div class="col-md-6 col-lg-3 text-center team mb-5">
                    <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%;">
                        <img class="img-fluid w-100" src="img/teach44.jpg" alt="" >
                        <div
                            class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                            <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;"
                                href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;"
                                href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px;"
                                href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <h4>Mr.Anil Bhavsar</h4>
                    <i>Art Teacher</i>
                </div>
              
            </div>
            <center><a href="Faculty.html" class="btn btn-dark py-3 px-5" >Read More</a></center><br>
        </div>
       
    </div>
    <!-- Team End --><br><br>

                <!-- Offer Start -->
                <div class="back2" data-wow-delay="0.1s">
                    <div class="container py-5">
                        <div class="row justify-content-center">
                            <div class="col-lg-7 wow zoomIn" data-wow-delay="0.6s">
                                <div class="offer-text text-center rounded p-5">
                                    <h1 class="display-5 text-white">Vision</h1>
                                    <p class="text-white mb-4">"Inspiring to learn and empowering to excel."</p>
                                        <h1 class="display-5 text-white">Mission</h1>
                                        <p class="text-white mb-4">"To develop and motivate a vibrant learning community that emboldens students to excel in all 
                                            forms of learning by adopting all the natural skills in a caring and creative environment.."</p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Offer End -->


                 <!-- Testimonial Start -->
                 <div>
                    <div class="back3">
                        <div class="row justify-content-center">
                            <div class="col-lg-7 col-lg-6 col-md-6">
                                <div class="owl-carousel testimonial-carousel rounded p-5 wow zoomIn"
                                    data-wow-delay="0.6s"  style="margin-top: 50px;">
                                    <div class="testimonial-item text-center text-white">
                                        <img class="img-fluid mx-auto rounded mb-4" src="img/principal.jpg" alt="">
                                        <p class="fs-5" style="font-size: 20px;">Principal's Message</p>
                                        <p class="fs-5"><i>“Educating the mind without educating the heart is no education at all.”</i></p>
                                        <hr class="mx-auto w-25">
                                        <h4 class="text-white mb-0">Mrs.Surekha Mane</h4><br>
                                        <a href="principalDesk.html" class="btn btn-light py-3 px-5" >Read More</a>

                                    </div>
                                    <div class="testimonial-item text-center text-white">
                                        <img class="img-fluid mx-auto rounded mb-4" src="img/trustee.jpg" alt="">
                                        <p class="fs-5">Trustee Message</p>
                                        <p class="fs-5" style="font-size: 20px;"><i>“Education is the most powerful weapon which you can use to change the world”-</i></p>
                                        <hr class="mx-auto w-25">
                                        <h4 class="text-white mb-0">Mr.Prashant Patil</h4><br>
                                        <a href="Trustee.html" class="btn btn-light py-3 px-5">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Testimonial End --><br><br><br><br>

<!--Map start-->
<div class ="col-lg-6 col-md-6" style="width: 100vw;">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60050.752123780556!2d75.19974146918562!3d19.83267362621279!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdb9bc36aa14927%3A0xbe9f87b5b93017e4!2sWaluj%2C%20Aurangabad%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1679376907864!5m2!1sen!2sin" 
    width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<!--map end-->
                


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
                <!-- Newsletter End --><br><br><br><br>


                 <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light py-5 wow fadeInUp" data-wow-delay="0.3s" style="margin-top:-80px;">
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
    <div class="container-fluid text-light py-4 col-lg-6 col-md-6" style="background: #051225;">
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
                <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i
                        class="bi bi-arrow-up"></i></a>


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
$mno = $_POST['mno'];
$nation = $_POST['nation'];
$tongue = $_POST['tongue'];
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$occupation = $_POST['occupation'];
$income = $_POST['income'];

$sql = "INSERT INTO registration2 (studentname,birth,email,gender,fatherNo,motherNo,nation,mothertongue,fathername,mothername,occupation,income) 
VALUES ('$studentname', '$birth','$email','$gender','$fno','$mno','$nation','$tongue','$fname','$mname','$occupation','$income')";

if (mysqli_query($con, $sql)) 
{
 echo "<script> alert('Registerd successfully'); </script>";
} 
else 
{
  echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

mysqli_close($con);

}
?>