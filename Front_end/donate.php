
 <?php 

  session_start();
  include "donate_server.php";  

  if (!isset($_SESSION['email'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: ../loginlogout/login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['email']);
  	header("location: ../Front_end/landing.html");
  }
?> 


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Food-Filler: Working for the needy</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->

  <link href="../assets/css/style.css" rel="stylesheet">
  <link href="../assets/css/donate.css" rel="stylesheet">
  
</head>

<body>
    <header id="header" class="d-flex align-items-center">
        <div class="container">
          <div class="header-container d-flex align-items-center">
            <div class="logo mr-auto">
              <h1 class="text-light"><a href="landing.html"><span>Food Filler- Working for the unpreviliged</span></a></h1>
            </div>
            <nav class="nav-menu d-none d-lg-block">
              <ul>
                <li><a href="landing.html">Home</a></li>
                <li><a href="about-us.html">About</a></li>
                <li><a href="donate.php">Donate leftovers from event</a></li>
                <li class="active"><a href="ngoregister.php">Register Organisation</a></li>
                <li><a href="../loginlogout/index.php">Your Profile</a></li>
                <li class="drop-down"><a href="">Testimonials</a>
                  <ul>
                    <li><a href="leaderboard.html">Our Leaderboard</a></li>
                    <li><a href="#">Listen from Users</a></li>
                    <li><a href="#">Thank you</a></li>
                  </ul>
                </li>
                <li><a href="contact.php">Contact US</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </header>
 



      <section id="hero" class="d-flex align-items-center" style="height:340px;">
    <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200"> 
      <h2>We are dedicated towards that no one should sleep hungry</h2>
      <a href="#sign-up" class="btn-get-started scrollto">Donate Now</a>
    </div>
  </section><!-- End Hero -->
  
<!-- latest registered NGO's -->
 
<!-- End other NGO's table -->




<!-- NGO Register Form --> 

<div class="containerr">
  <div class="overlay" id="overlay">

    <div class="sign-in" id="sign-in" style="margin-left:30px;">
      <h1>Welcome Back!</h1>
      <p>To donate money  <br> 
         <a href="#"> <span style="color:orange;font-weight:bold;font-size:15px;">Click Donate Money</span>
         </a> or to donate leftover food fill form present in right side
      </p>
      <button class="switch-button" id="slide-right-button">Donate Money</button>
    </div>


    <div class="sign-up" id="sign-up" style="margin-right:30px;">
      <h1>Hello, Happy to see you here!</h1>
      <p>To donate leftover food  <br> 
        <a href="#"> <span style="color:orange;font-weight:bold;font-size:15px;">Click Donate Leftover food</span>
        </a> or to donate money fill form present in left side
      </p>
      <button class="switch-button" id="slide-left-button">
          <span style="font-size:10px;">Donate Leftover food</span>
      </button>
    </div>
  </div>
  <div class="form">
    <div class="sign-in" id="sign-in-info">
    <h3>Donate Money</h3>
      <!-- <div class="social-media-buttons">
        <div class="icon">
          <svg viewBox="0 0 24 24">
            <path fill="#000000" d="M17,2V2H17V6H15C14.31,6 14,6.81 14,7.5V10H14L17,10V14H14V22H10V14H7V10H10V6A4,4 0 0,1 14,2H17Z" />
        </svg>
        </div>
        <div class="icon">
        <svg viewBox="0 0 24 24">
            <path fill="#000000" d="M23,11H21V9H19V11H17V13H19V15H21V13H23M8,11V13.4H12C11.8,14.4 10.8,16.4 8,16.4C5.6,16.4 3.7,14.4 3.7,12C3.7,9.6 5.6,7.6 8,7.6C9.4,7.6 10.3,8.2 10.8,8.7L12.7,6.9C11.5,5.7 9.9,5 8,5C4.1,5 1,8.1 1,12C1,15.9 4.1,19 8,19C12,19 14.7,16.2 14.7,12.2C14.7,11.7 14.7,11.4 14.6,11H8Z" />
        </svg>
        </div>
        <div class="icon">
        <svg viewBox="0 0 24 24">
          <path fill="#000000" d="M21,21H17V14.25C17,13.19 15.81,12.31 14.75,12.31C13.69,12.31 13,13.19 13,14.25V21H9V9H13V11C13.66,9.93 15.36,9.24 16.5,9.24C19,9.24 21,11.28 21,13.75V21M7,21H3V9H7V21M5,3A2,2 0 0,1 7,5A2,2 0 0,1 5,7A2,2 0 0,1 3,5A2,2 0 0,1 5,3Z" />
        </svg>
        </div>
      </div>
      <p class="small">or use your email account:</p> -->
      <form id="sign-in-form" method="post">  
              
        <input type="number" name="money" placeholder="Enter donated money e.g 200"/>
        <input type="text" name="upi" placeholder="Enter Upi id abc@oksbi"/> 
        <div>OR</div>
        <img style="length:170px;width:170px;" src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d0/QR_code_for_mobile_English_Wikipedia.svg/1200px-QR_code_for_mobile_English_Wikipedia.svg.png" alt="Italian Trulli">
        <p class="forgot-password">Scan and Pay</p>
        <button class="control-button in">Donate Now</button>
      </form>
    </div>

  

    <div class="sign-up" id="sign-up-info">
      <h3>Donate leftover food or raw food items</h3>
      <!-- <div class="social-media-buttons">
        <div class="icon">
          <svg viewBox="0 0 24 24">
            <path fill="#000000" d="M17,2V2H17V6H15C14.31,6 14,6.81 14,7.5V10H14L17,10V14H14V22H10V14H7V10H10V6A4,4 0 0,1 14,2H17Z" />
        </svg>
        </div>
        <div class="icon">
        <svg viewBox="0 0 24 24">
            <path fill="#000000" d="M23,11H21V9H19V11H17V13H19V15H21V13H23M8,11V13.4H12C11.8,14.4 10.8,16.4 8,16.4C5.6,16.4 3.7,14.4 3.7,12C3.7,9.6 5.6,7.6 8,7.6C9.4,7.6 10.3,8.2 10.8,8.7L12.7,6.9C11.5,5.7 9.9,5 8,5C4.1,5 1,8.1 1,12C1,15.9 4.1,19 8,19C12,19 14.7,16.2 14.7,12.2C14.7,11.7 14.7,11.4 14.6,11H8Z" />
        </svg>
        </div>
        <div class="icon">
        <svg viewBox="0 0 24 24">
          <path fill="#000000" d="M21,21H17V14.25C17,13.19 15.81,12.31 14.75,12.31C13.69,12.31 13,13.19 13,14.25V21H9V9H13V11C13.66,9.93 15.36,9.24 16.5,9.24C19,9.24 21,11.28 21,13.75V21M7,21H3V9H7V21M5,3A2,2 0 0,1 7,5A2,2 0 0,1 5,7A2,2 0 0,1 3,5A2,2 0 0,1 5,3Z" />
        </svg>
        </div>
      </div> -->
      <!-- <p class="small">or use your email for registration:</p> -->
      <form id="sign-up-form" method="post"> 
        <input type="text" name="event" placeholder="Enter event type e.g party"/>  
        <input type="text" name="fooditem" placeholder="Food items e.g chapati"/> 
        <input type="number" name="plate" placeholder="Number of plates food"/>
        <input type="number" name="weight" placeholder="Raw food items in kg"/>
        <div style="color:blue;font-weight:bold;font-size:15px;">You can donate number of plates or raw food or both</div>
        <button class="control-button up">Donate Now</button>
      </form>
    </div>
  </div>
</div>
 
<script src="../assets/css/donate.js"></script>

<!-- NGO Register Form end here -->



  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Food-Filler</h3>
            <p>
              95/45, NG road Highway <br>
              Raipur, RPR 194402<br>
              India <br><br>
              <strong>Phone:</strong> + 91 992299223<br>
              <strong>Email:</strong> foodfiller@example.com<br>
            </p>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>
          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Have a suggestion for us? Please write to us</h4>
            <p>You can also write to us your story or your experience with us</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Your email">
            </form>
          </div>

        </div>
      </div>
    </div>


  <!-- Vendor JS Files -->
  <script src="../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="../assets/vendor/counterup/counterup.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/venobox/venobox.min.js"></script>
  <script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>