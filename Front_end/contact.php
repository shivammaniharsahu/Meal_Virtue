

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
     
    $nm = $_POST["name"];
    $em = $_POST["email"];
    $sb = $_POST["subject"];
    $me = $_POST["message"];
      
   
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "registration";
      $conn = mysqli_connect($servername, $username, $password, $database); 

  
      
      $sql = "INSERT INTO `contactpage` (`name`, `email`, `subject`, `message`) 
      VALUES ('$nm', '$em', '$sb', '$me')";
      $t_result =  mysqli_query($conn, $sql);
      
 
      
	 
      header("Location: contact.php"); 
     
     
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
  <link href="../assets/css/contact.css" rel="stylesheet">
</head>
<body>
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container">
      <div class="header-container d-flex align-items-center">
        <div class="logo mr-auto">
          <a href="landing.php"><img src="../assets/img/logo1.png" style="height: 100px; width: 200px"></a>
        </div>

        <nav class="nav-menu d-none d-lg-block">
          <ul>
                <li><a href="landing.php">Home</a></li> 
                <li ><a href="about-us.html">About</a></li>
                <li><a href="donate.php">Donate leftovers from event</a></li>
                <li><a href="ngoregister.php">Register Organisation</a></li>
                <li><a href="profile.php">Your Profile</a></li>
                <li class="drop-down"><a href="">Testimonials</a>
                  <ul>
                    <li><a href="leaderboard.php">Our Leaderboard</a></li>
                    <li><a href="testimonial.php">Listen from Users</a></li>
                    <li><a href="thankyou.php">Thank you</a></li>
                  </ul>
                </li>
                <li class="active"><a href="contact.php">Contact US</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </header>
    
      <section id="hero" class="d-flex align-items-center">
        <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="100">
          <h1>Want to get in touch?</h1>
          <h2>We are always up for everyone who have issues</h2>
          <a href="#contact" class="btn-get-started scrollto">Talk to us</a>
        </div>
      </section><!-- End Hero -->
    
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">
          <div class="row">
            <div class="col-lg-4" data-aos="fade-right">
              <div class="section-title">
                <h2>Contact</h2>
                <p>We are up for any issues if you face. Just ring us, mail us or knock at our door. We are available</p>
              </div>
            </div>
  
            <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
                <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3718.549083148088!2d81.60284041488723!3d21.24972218587903!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a28dde213f66723%3A0x21543965c50c43c7!2sNational%20Institute%20of%20Technology%2C%20Raipur!5e0!3m2!1sen!2sin!4v1610175040474!5m2!1sen!2sin" frameborder="0" allowfullscreen></iframe>
              <div class="info mt-4">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p>95NG/344, GE road, Raipur</p>
              </div>
              <div class="row">
                <div class="col-lg-6 mt-4">
                  <div class="info">
                    <i class="icofont-envelope"></i>
                    <h4>Email:</h4>
                    <p>foodfiller@example.com</p>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="info w-100 mt-4">
                    <i class="icofont-phone"></i>
                    <h4>Call:</h4>
                    <p>992299223</p>
                  </div>
                </div>
              </div>
  
              <form method="post" action="contact.php">
                <div class="form-row">
                  <div class="col-md-6 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validate"></div>
                  </div>
                  <div class="col-md-6 form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validate"></div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validate"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validate"></div>
                </div> 
                <div class="text-center"><button style="border:2px solid white;border-radius:20px;width:140px;height:40px;color:white; background-color:#006494;" type="submit">Send Message</button></div>
              </form>
            </div>
          </div>
  
        </div>
      </section><!-- End Contact Section -->

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
                  <li><i class="bx bx-chevron-right"></i> <a href="landing.php">Home</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="about-us.html">About us</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="leaderboard.php">Leaderboard</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="profile.php">See Profile</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Donate to US</a></li>
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


