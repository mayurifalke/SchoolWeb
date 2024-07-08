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
       /* .image_effect img{
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .image_cont .images
        {
            width: 400px;
            height: 100%;
            border-radius: 10px;
        }*/
        /*.images{
            overflow: hidden;
        }*/
       /* .image_row{
            display: flex;
            justify-content: space-between;
            margin: 0 50px;
        }
        .image_effect:hover img{
            transform: scale(1,3);
            transition: 1s;
        }
        .images{
            overflow: hidden;
        }
        .image_effect{
            overflow: hidden;
            border-radius: 10px;
        }*/
        body{
            height: 200%;
        }
        .header1 {
            text-align: center;
            padding: 32px;
            background-color: rgba(214, 113, 158, 0.8);
            border: solid;
            font-family: cursive;
            font-size: large;
            text-decoration: underline;
          }
          .header1 p{
            color: black;
            font-size: 20px;
          }
          
          .row1 {
            display: -ms-flexbox; /* IE 10 */
            display: flex;
            -ms-flex-wrap: wrap; /* IE 10 */
            flex-wrap: wrap;
            padding: 0 4px;
            border-radius: 25px;
            margin-left: 130px;
            width: 1250px;
            height: 330px;
            text-align: justify;
          }
          
          /* Create two equal columns that sits next to each other */
          .column {
            -ms-flex: 50%; /* IE 10 */
            flex: 50%;
            padding: 0 4px;
          }
          
          .column img {
            margin-top: 8px;
            vertical-align: middle;
          }
          
          /* Style the buttons */
          .btn1 {
            border: none;
            outline: none;
            padding: 10px 16px;
            background-color: #f1f1f1;
            cursor: pointer;
            font-size: 18px;
          }
          
          .btn:hover {
            background-color: #ddd;
          }
          
          .btn.active {
            background-color: #666;
            color: white;
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
                        <a href="principalDesk.html" class="dropdown-item">Principal Desk</a>
                        <a href="Trustee.html" class="dropdown-item">Trustee</a>
                        <a href="Faculty.php" class="dropdown-item">Faculty</a>
                       
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Facilities</a>
                    <div class="dropdown-menu m-0">
                        <a href="Sciencelab2.html" class="dropdown-item">Science Lab</a>
                        <a href="Computerlab.php" class="dropdown-item">Computer Lab</a>
                        <a href="library1.html" class="dropdown-item">Library</a>
                        <a href="Playarea1.html" class="dropdown-item">Play Area</a>
                        <a href="Smartclasses.html" class="dropdown-item">Smart Classes</a>
                        <a href="busfacility1.php" class="dropdown-item">Bus Facility</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Achivements</a>
                    <div class="dropdown-menu m-0">
                        <a href="sports.html" class="dropdown-item">Sports Achivements</a>
                        <a href="academics.php" class="dropdown-item">Academics Achivements</a>
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
                        <a href="academiccalendar1.php" class="dropdown-item">Academic <br>Calendar</a>
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

<br><br>
     <!--<div class="image_row">
        <div class="image_cont">
            <div class="images">
                <div class="image_effect">
                    <img src="academics.png" alt="">
                </div>
                <div class="content">
                    <div><center>Zoom in</center></div>
                </div>
            </div>
        </div>

        <div class="image_cont">
            <div class="images">
                <div class="image_effect">
                    <img src="academics.png" alt="">
                </div>
                <div class="content">
                    <div><center>Zoom in</center></div>
                </div>
            </div>
        </div>

        <div class="image_cont">
            <div class="images">
                <div class="image_effect">
                    <img src="academics.png" alt="">
                </div>
                <div class="content">
                    <div><center>Zoom in</center></div>
                </div>
            </div>
        </div>
     </div>

     <div class="image_row">
        <div class="image_cont">
            <div class="images">
                <div class="image_effect">
                    <img src="academics.png" alt="">
                </div>
                <div class="content">
                    <div><center>Zoom in</center></div>
                </div>
            </div>
        </div>

        <div class="image_cont">
            <div class="images">
                <div class="image_effect">
                    <img src="academics.png" alt="">
                </div>
                <div class="content">
                    <div><center>Zoom in</center></div>
                </div>
            </div>
        </div>

        <div class="image_cont">
            <div class="images">
                <div class="image_effect">
                    <img src="academics.png" alt="">
                </div>
                <div class="content">
                    <div><center>Zoom in</center></div>
                </div>
            </div>
        </div>
     </div>-->

     <!-- Header -->
<div class="header1" id="myHeader">
    <h1>Gallery</h1>
    <p>Hard to forget such strong Godavari school memories with the best people and Future Stars.</p>
    <button class="btn" onclick="one()">1</button>
    <button class="btn active" onclick="two()">2</button>
    <button class="btn" onclick="four()">3</button>
  </div>
  
  <!-- Photo Grid -->
  <div class="row1"> 
    <div class="column">
      <img src="img1\IMG-20230310-WA0011-01.jpeg" style="width:100%">
      <img src="img1\IMG-20230310-WA0166.jpg" style="width:100%">
      <img src="img1\IMG-20230310-WA0021-01.jpeg" style="width:100%">
      <img src="img1\IMG-20230310-WA0063-01.jpeg" style="width:100%">
      <img src="img1\IMG-20230310-WA0064-01.jpeg" style="width:100%">
      <img src="img1\IMG-20230310-WA0158.jpg" style="width:100%">
      <img src="img1\IMG-20230310-WA0175.jpg" style="width:100%">
    </div>
    <div class="column">
      <img src="img1\IMG-20230310-WA0022-01.jpeg" style="width:100%">
      <img src="img1\IMG-20230310-WA0158.jpg" style="width:100%">
      <img src="img1\IMG-20230310-WA0155.jpg" style="width:100%">
      <img src="img1\IMG-20230310-WA0168.jpg" style="width:100%">
      <img src="img1\IMG-20230310-WA0193.jpg" style="width:100%">
      <img src="img1\IMG-20230310-WA0195.jpg" style="width:100%">
    </div>  
    <div class="column">
      <img src="img1\IMG-20230310-WA0168.jpg" style="width:100%">
      <img src="img1\IMG-20230310-WA0018-01.jpeg" style="width:100%">
      <img src="img1\IMG-20230310-WA0156.jpg" style="width:100%">
      <img src="img1\IMG-20230310-WA0201.jpg" style="width:100%">
      <img src="img1\IMG-20230310-WA0206.jpg" style="width:100%">
      <img src="img1\IMG-20230310-WA0212.jpg" style="width:100%">
      <img src="img1\IMG-20230310-WA0210.jpg" style="width:100%">
    
    </div>
    <div class="column">
      <img src="img1\IMG-20230310-WA0020-01.jpeg" style="width:100%">
      <img src="img1\IMG-20230310-WA0023-01.jpeg" style="width:100%">
      <img src="img1\IMG-20230310-WA0157.jpg" style="width:100%">
      <img src="img1\IMG-20230310-WA0169.jpg" style="width:100%">
      <img src="img1\IMG-20230310-WA0174.jpg" style="width:100%">
      <img src="img1\IMG-20230310-WA0205.jpg" style="width:100%">
      <img src="img1\IMG-20230310-WA0209.jpg" style="width:100%">
    </div>
  </div>
  
  <script>
  // Get the elements with class="column"
  var elements = document.getElementsByClassName("column");
  
  // Declare a loop variable
  var i;
  
  // Full-width images
  function one() {
      for (i = 0; i < elements.length; i++) {
      elements[i].style.msFlex = "100%";  // IE10
      elements[i].style.flex = "100%";
    }
  }
  
  // Two images side by side
  function two() {
    for (i = 0; i < elements.length; i++) {
      elements[i].style.msFlex = "50%";  // IE10
      elements[i].style.flex = "50%";
    }
  }
  
  // Four images side by side
  function four() {
    for (i = 0; i < elements.length; i++) {
      elements[i].style.msFlex = "25%";  // IE10
      elements[i].style.flex = "25%";
    }
  }
  
  // Add active class to the current button (highlight it)
  var header = document.getElementById("myHeader");
  var btns = header.getElementsByClassName("btn");
  for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function() {
      var current = document.getElementsByClassName("active");
      current[0].className = current[0].className.replace(" active", "");
      this.className += " active";
    });
  }
  </script>
     
  




<!-- Newsletter Start -->
<!--<div class="container-fluid position-relative pt-5 wow fadeInUp" data-wow-delay="0.1s"
style="z-index: 1;position:sticky;margin-top: 5600px;" >
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
  <!--<div class="container-fluid bg-dark text-light py-5 wow fadeInUp" data-wow-delay="0.3s" style="">
    <div class="container pt-5">
        <div class="row g-5 pt-4">
            <div class="col-lg-3 col-md-6">
                <h3 class="text-white mb-4">Quick Links</h3>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                    <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                    <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Facilities</a>
                    <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Achivements</a>
                    <a class="text-light" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Gallery</a>
                   
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h3 class="text-white mb-4">Quick Links</h3>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Learning</a>
                    <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Parent Login</a>
                    <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Textbook List</a>
                    <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Academic Calendar</a>
                    <a class="text-light" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
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
                    <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square rounded" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid text-light py-4" style="background: #051225;">
    <div class="container">
        <div class="row g-0">
            <div class="col-md-6 text-center text-md-start">
                <p class="mb-md-0">&copy; <a class="text-white border-bottom" href="#">Your Site Name</a>. All Rights Reserved.</p>
            </div>
            <div class="col-md-6 text-center text-md-end">
                <p class="mb-0">Designed by <a class="text-white border-bottom" href="https://htmlcodex.com">HTML Codex</a></p>
            </div>
        </div>
    </div>
</div>-->
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