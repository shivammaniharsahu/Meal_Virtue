<?php
  session_start();
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

  
  <link href="../assets/css/testimonials.css" rel="stylesheet"> 

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
          <li class="active"><a href="landing.php">Home</a></li> 
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
                <li ><a href="contact.php">Contact US</a></li>
           
            
          </ul>
     
          <?php

          if (isset($_SESSION['email'])) {
             echo" <img href='profile.php'  class='nav-avatar' style='height: 40px; width: 40px; -webkit-border-radius: 50%; -moz-border-radius: 50%; border-radius: 50%;'
             src='..\assets\img\prof.jpg'> 
      <button style='border:3px solid #000000;border-radius:8px 0px 8px 0px;'><a href='profile.php?logout='1''><b  style='color:#006494;font-size:15px;'>Logout</b></a>  </button>
        ";
          };
          ?>



        </nav>
      </div>
    </div>
  </header>


  <main>


    <section id="hero" class="d-flex align-items-center">
      <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200">
        <h1>Your messages are important to US!</h1>
        <h2> Share your experience for others to get motivated</h2>
        <a href="submittestimonial.php" class="btn-get-started scrollto">Want to write Testimonials / Share Experience</a>
        <br>
      </div>
    </section><!-- End Hero -->
<!-- 
    <section id="hero" class="d-flex align-items-center">

    
    <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200"> 
      <a href="#myform" class="btn-get-started scrollto">Register Your NGO, Click Here</a>
    </div> 

    </section> -->

    <section id="testimonials" class="testimonials section-bg">
      <div class="container">





        <div class="row">
          <div class="col-lg-12">
            <div class="section-title" data-aos="zoom-in-up">
              <h2>What they say</h2>
              <p>Listen from people who have done their bit with us and have donated food for those who don't have access to it.</p>
            </div>
          </div>
          <div class="col-lg-12" data-aos-delay="100">
            <div class="owl-carousel testimonials-carousel">
 
            <?php
                 
                  
                
               
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "registration";
                $db = mysqli_connect($servername, $username, $password, $database);
                  
                $testimonial_query = "SELECT * FROM testimonial ORDER BY testimonial_id DESC LIMIT 5";
                $testimonial_res = mysqli_query($db, $testimonial_query);

                $testimonial_num = mysqli_num_rows($testimonial_res);

                if($testimonial_num)
                {
                   while ($row = mysqli_fetch_assoc($testimonial_res)){
                        
                              echo '<div class="testimonial-item">';
                              echo '<p>';
                              echo '<i class="bx bxs-quote-alt-left quote-icon-left"></i>' .$row['testimonial_text']. '<i class="bx bxs-quote-alt-right quote-icon-right"></i>';
                              echo '</p>';
                              echo '<img src="../assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">';
                              echo '<h3>Written By: ' .$row['name']. '</h3>';
                              echo'<br>';
                              echo '<h4>From: ' .$row['address']. '</h4>';
                              echo'<br>';
                              echo '<h4><b>Posted On : ' .$row['date']. '</b></h4>';
                              echo '<div class="icons" >';
                              echo ' <div class="icon"><i class="bx bxl-twitter bx-border-circle bx-tada bx-md"></i></div>';
                              echo '<div class="icon"><i class="bx bxl-instagram bx-border-circle bx-tada bx-md"></i></div>';
                              echo '<div class="icon"><i class="bx bxl-facebook bx-border-circle bx-tada bx-md"></i></div>';
                              echo '</div>';
                              echo '</div>';

                   } 
                }
 
            ?> 


            </div>
          </div>
        </div>

      </div>
    </section>
   </main>

  
 <br><br>
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