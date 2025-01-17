<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Sports Achievements</title>
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
                <a href="index.php" class="nav-item nav-link active">Home</a>
                <div class="nav-item dropdown">
                    <a href="about.php" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">About Us</a>
                    <div class="dropdown-menu m-0">
                        <a href="principalDesk.php" class="dropdown-item">Principal Desk</a>
                        <a href="Trustee.html" class="dropdown-item">Trustee</a>
                        <a href="Faculty.php" class="dropdown-item">Faculty</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Facilities</a>
                    <div class="dropdown-menu m-0">
                        <a href="Sciencelab.html" class="dropdown-item">Science Lab</a>
                        <a href="Computerlab.php" class="dropdown-item">Computer Lab</a>
                        <a href="library1.php" class="dropdown-item">Libraray</a>
                        <a href="Playarea1.html" class="dropdown-item">Play Area</a>
                        <a href="Smartclasses.php" class="dropdown-item">Smart Classes</a>
                        <a href="busfacility1.php" class="dropdown-item">Bus Facility</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Achievements</a>
                    <div class="dropdown-menu m-0">
                        <a href="sports.html" class="dropdown-item">Sports Achivements</a>
                        <a href="academics.php" class="dropdown-item">Academics Achivements</a>
                        <a href="other.php" class="dropdown-item">Other Achivements</a>
                    </div>
                </div>

                <a href="gallery2.php" class="nav-item nav-link active" style="color:black">Gallery</a>
                <a href="loginforLearning.php" class="nav-item nav-link active" style="color:black">Learning</a>
                <a href="login.php" class="nav-item nav-link active" style="color:black">Parent Login</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">More</a>
                    <div class="dropdown-menu m-0">
                        <a href="textbook.html" class="dropdown-item">TextBook List</a>
                        <a href="academiccalendar1.php" class="dropdown-item">Academic <br>Calendar</a>
                        <a href="contact.php" class="dropdown-item">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->
    <!--info-->
<div class=" p-0">
    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="img\Kho-Kho.webp" alt="Image" width="300" height="1000">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center" style="background-color: #0000008a;">
                    <div class="p-3" style="max-width: 900px;">
                        <h5 class="text-white text-uppercase mb-3 animated slideInDown">Learning Today Leading
                            Tommarow</h5>
                        <h4 class="display-1 text-white mb-md-4 animated zoomIn">Sports Achievements</h4>
                            <div style="text-align: center;">
                             </div><br><br>
                             <div style="border: dotted; border-radius: 20px;margin: 10px;">
                                <div>
                                    <p>
                                        The school also encourages students to participate in Inter-school competitions, in co-curricular activities & in sports both at Interschool & CBSE Cluster Level.<br>
                        
                        Our school students, Shravani Adiga of Std V & Saathvik Adiga of Std III have bagged State Level Chess Championships & Sathvik Adiga bagged many prizes in State Level, National Level & International Level chess competitions.<br>
                        
                        Rohit S of Std VIII won various prizes in Sub-Jr. & Jr. State Level Soft Tennis.<br>
                        
                        Our students bagged 2nd prize in Recycle Relay & 1st prize in Drawing competition in Tiranga 2019, organised by Tattva School.<br><br>
                        
                        
                        Our students bagged 3rd Prize in Kabbaddi tournament under 14 held by Bangalore Sahodaya Complex in 2018.<br>
                        Our boys & girls under 10 secured 2nd place in Basketball tournament held at National Public School & Tejas Subramanya of Std IV, Vedika K Kitturkar of Std VI got best “Upcoming Player Award” in the same tournament.<br>
                        Many of our students under 12, 14 & 16 bagged Gold, Silver & Bronze medals in shot put, 100mtrs & 4 x 100mtrs relay race & high jump.<br> Gagan Mithra of Std VII got “Overall Championship” held at Smt. <br>Kamalabai Educational Institution, Bangalore.<br>
                        Our students have participated in CBSE Cluster Athletic Meet held in Kumdhavathi Residential School, Shikaripura
                        
                                    </p>
                                </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>

        
<!--photos-->
<div class="main" >
    <!-- Portfolio Gallery Grid -->
    <div class="row2">
      <div class="column">
        <div class="content2">
          <img src="img\football.jpg" alt="Mountains" style="width:100%">
          <h3>FOOTBALL Shabir (2016-17)</h3>
          <p>Students of our school won the first prize in the city of Mumbai in the game Football</p>
        </div>
      </div>
      <div class="column">
        <div class="content2">
          <img src="img\batmintan.jpg" alt="Lights" style="width:100%">
          <h3>BADMINTON Soumya (2014-15)</h3>
          <p>Students of our school won the first prize in the city of pune in the game Batmintion</p>
        </div>
      </div>
      <div class="column">
        <div class="content2">
          <img src="img\criicate.jpg" alt="Nature" style="width:100%">
          <h3>Cricket Tournament (2016-15)</h3>
          <p>Students of our school won the first prize in the city of Shirdi in the game Cricket</p>
        </div>
      </div>
      <div class="column">
        <div class="content2">
          <img src="img\chess.jpeg" alt="Mountains" style="width:100%">
          <h3>CHESS Ram Prasad PM – Captain of RGUHS team (2017-18)</h3>
          <p>Students of our school won the first prize in the city of Aurangabad in the game Chess</p>
        </div>
      </div>
    </div>
    <!-- END MAIN -->
    </div>

    <style>
        
          body{
            height: auto;
          }
         
          /* Center website */
          .main {
            max-width: 1000px;
            margin: auto;
          }
          
          h1 {
            font-size: 50px;
            word-break: break-all;
          }
          
          .row2 {
            margin: 8px -16px;
          }
          
          /* Add padding BETWEEN each column (if you want) */
          .row2,
          .row2 > .column {
            padding: 8px;
          }
          
          /* Create four equal columns that floats next to each other */
          .column {
            float: left;
            width: 25%;
          }
          
          /* Clear floats after rows */
          .row2:after {
            content: "";
            display: table;
            clear: both;
          }
          
          /* Content */
          .content2 {
            background-color: white;
            padding: 10px;
          }
          
          /* Responsive layout - makes a two column-layout instead of four columns */
          @media screen and (max-width: 900px) {
            .column {
              width: 50%;
            }
          }
          
          /* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
          @media screen and (max-width: 600px) {
            .column {
              width: 100%;
            }
          }
    </style>


     

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
                    <a class="text-light mb-2" href="aboutus.php"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                    <a class="text-light mb-2" href="Sciencelab2.php"><i class="bi bi-arrow-right text-primary me-2"></i>Facilities</a>
                    <a class="text-light mb-2" href="academics.php"><i class="bi bi-arrow-right text-primary me-2"></i>Achivements</a>
                    <a class="text-light" href="gallery2.php"><i class="bi bi-arrow-right text-primary me-2"></i>Gallery</a>
                   
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h3 class="text-white mb-4">Quick Links</h3>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-light mb-2" href="loginforLearning.php"><i class="bi bi-arrow-right text-primary me-2"></i>Learning</a>
                    <a class="text-light mb-2" href="parent.php"><i class="bi bi-arrow-right text-primary me-2"></i>Parent Login</a>
                    <a class="text-light mb-2" href="textbook.html"><i class="bi bi-arrow-right text-primary me-2"></i>Textbook List</a>
                    <a class="text-light mb-2" href="academiccalendar.php"><i class="bi bi-arrow-right text-primary me-2"></i>Academic Calendar</a>
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