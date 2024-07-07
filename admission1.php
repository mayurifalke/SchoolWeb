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
            background: url(student2.png);
            background-position: center;
            background-size: cover;
        }

        .para {
            font-size: 30px;
            text-shadow: 2px 2px 5px red;
            margin-top: 40px;
            margin-left: 600px;
        }

        .content1{
            border-radius: 25px;
            border: 2px solid #000000;
            border-style: dashed;
            margin-left: 130px;
            width: 1250px;
            height: 740px;
            text-align: justify;
        }

        .para2 {
            margin-top: 29px;
            letter-spacing: normal;
            font-size: 20px;
            margin-left: 25px;
            margin-right: 18px;
        }

        .heading {
            font-size: 23px;
            color: rgb(229, 61, 5);
        }
        .para3{
            font-size: 25px;
            margin-left: 140px;
            margin-top: 55px;
            font-weight: bolder;
        }
        
        .para4{
            letter-spacing:normal;
            font-size: 20px;
            margin-left: 140px;
            margin-top: 18px;
        }
        .para5{
            font-size: 25px;
            margin-left: 140px;
            margin-top: 30px;
            font-weight: bolder;
        }
        td{
            padding: 5px;
        }
        th{
            text-align: left;
            padding-left: 15px;
        }
        table{
            
            margin-top: 18px;
            margin-left: 140px;
        }
        .wi{
          width: 250px;
        }
        .btn1{
            margin-top: 70px;
            height: 60px;
            width: 200px;
            background-color: rgb(235, 202, 12);
            color: black;
            font-weight: bold;
        }
        .btn1:hover{
            background-color: rgb(8, 63, 8);
            color: white;
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
        <img src="img/download.jpg" style="width=100px;height=100px;">
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
                        <a href="academiccalendar1.html" class="dropdown-item">Academic<br> Calendar</a>
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
    <p class="para">Admission Procedure</p><br><br>
    <div class="content1">
        <p class="para2">Godavari English Public School offers a nurturing and rich educational ambience that fosters high quality learning
            skills ably supported by qualified and experienced teaching faculty.<br><br>
            Our admission process is as simple as possible to ensure that all the prospective parents are happy about
            the whole experience.
            <br><br>
            <span class="heading">Step 1 : Enquiry</span> <br>
            Send a mail to the school official mail ID admissions@godavarischool.edu.in with your queries and the RNS admin
            office will revert to you with the answers (or) you may visit the school on any working day from Monday to
            Saturday and meet the admin staff.
            <br><br>
            <span class="heading">2 : Registration</span><br>
            Parents can register for their children after meeting the admin staff. Once all queries are clarified you
            will be given a convenient date for an interaction/ evaluation.
            Parents are permitted for a campus visit on the day of interaction/ evaluation to understand the culture,
            ethos and infrastructure of Godavari English Public School.
            <br><br>
            <span class="heading">Step 3 : Evaluation/ Interaction</span><br>
            Once the interaction/ evaluation has been completed on the scheduled day selected parents will be issued
            <b>‘Provisional Admission Letter’</b>indicating the formalities to be complied along with the due date.
            <br><br>
            <span class="heading">Step 4 :</span><br>
            Parents are requested to complete all the required formalities by the due date and report to the school with
            the <b>‘Provisional Admission Letter’</b> to fill the formal<b> ‘Official Admission Form’</b> and register the mobile
            number of any one of the parents in the school portal for further communication.
        </p>
    </div>
    
    <div class="content2">
        <p class="para3">Eligible Age criteria: As on June 1st</p>
        <table border="1" class="table table-striped table-secondary" border="2px solid #000000;" style="
        border-style: dashed;border-radius: 25px;width: 1000px;">
            <tr>
                <th scope="col" class="wi">Class</th>
                <th scope="col">Entry Age</th>
            </tr>
            <tr >
                <td class="wi">Jr.KG</td>
                <td>2 Years 6 Months+</td>
            </tr>
            <tr>
                <td class="wi">Nursery</td>
                <td>4 years</td>
            </tr>
            <tr>
                <td class="wi">Sr.KG</td>
                <td>5 years</td>
            </tr>
            <tr>
                <td class="wi">STD I</td>
                <td>5 years 6 Months</td>
            </tr>
            <tr>
                <td class="wi">STD II</td>
                <td>6 years 6 Months</td>
            </tr>

        </table>
        
    </div>
    <p class="para3">
        The following documents need to be submitted along with the ‘Provisional Admission Form’.
    </p>
    <p class="para4">
        ◉ Attested copy of the Birth Certificate.<br>
        ◉ Copy of Progress Report of previous year (applicable only from Std II onwards)
    </p>
    <p class="para5">
        List of documents required at the time of Admission:
    </p>
    <p class="para4">
        ◉ Two recent passport size Photographs of the student<br>
        ◉ School copy of Fee paid Challan<br>
        ◉ Photocopy of Aadhar Card<br>
        ◉ Attested Birth Certificate(attested by gazetted officer)<br>
        ◉ Attested copy of caste certificate
    </p>
    <p class="para5">
        Documents applicable only from Std II onwards
    </p>
    <p class="para4">
        ◉ Original TC with School DISE Code & STS number<br>
        ◉ Photocopy of progress report
    </p>

   <center><a href="admission3.php"><button class="btn1">Register Here</button></a></center><br><br>
<!-- Newsletter Start -->

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