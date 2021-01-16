<?php include('server.php') ?>
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
  <link rel="stylesheet" type="text/css" href="../assets/css/reg.css">
</head>

<body>
  <header id="header" class="d-flex align-items-center">
    <div class="container">
      <div class="header-container d-flex align-items-center">
        <div class="logo mr-auto">
          <h1 class="text-light"><a href="landing.php"><span style="font-size: 26px;">Food Filler- Working for the unpreviliged</span></a></h1>
        </div>

        <nav class="nav-menu d-none d-lg-block">
          <ul>
          <li ><a href="landing.php">Home</a></li> 
                <li ><a href="about-us.html">About</a></li>
                <li><a href="donate.php">Donate leftovers from event</a></li>
                <li  ><a href="ngoregister.php">Register Organisation</a></li>
                <li class="active" ><a href="profile.php">Your Profile</a></li>
                <li class="drop-down"><a href="">Testimonials</a>
                  <ul>
                    <li><a href="leaderboard.php">Our Leaderboard</a></li>
                    <li><a href="testimonial.php">Listen from Users</a></li>
                    <li><a href="thankyou.php">Thank you</a></li>
                  </ul>
                </li>
                <li ><a href="contact.html">Contact US</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </header>

  <section id="hero" class="d-flex align-items-center">
    <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="100">
      <h1>Become a user...And help others</h1>
      <h2>How awesome is that if you get redeem points and coupons?</h2>
      <a href="#log" class="btn-get-started scrollto">Register</a>
    </div>
  </section><!-- End Hero -->

  

<!-- login form -->
<section >
    <div class="container">
    <div class="row">
        <div class="col-lg-12">
<div class="login-container"id="log" > 
<form method="post" action="register.php">
           <h2 style="text-align:center;font-weight:bold;">Register</h2>
           <br>
           <?php include('errors.php'); ?>
           
           <div class="container">
           <div class="row">

           <div class="col-lg-6 col-md-6 footer-contact"> 
           <div>
               <label><span style="color:#EE6C4D;">*</span>Firstname</label>
               <input type="text" name="firstname" placeholder="Enter your first name" value="<?php echo $firstname; ?>">
           </div>
           </div> 


           <div class="col-lg-6 col-md-6 footer-contact">
           <div>
               <label><span style="color:#EE6C4D;">*</span>Lastname</label>
               <input type="text" name="lastname" placeholder="Enter Last name" value="<?php echo $lastname; ?>">
           </div>
           </div>


           <div class="col-lg-6 col-md-6 footer-contact"> 
           <div>
               <label><span style="color:#EE6C4D;">*</span>Email</label>
               <input type="text" name="email" placeholder="abc@gmail.com" value="<?php echo $email; ?>">
           </div>
           </div>

           <div class="col-lg-6 col-md-6 footer-contact">
           <div>
               <label><span style="color:#EE6C4D;">*</span>Mobile</label>
               <input type="tel" name="mobile" placeholder="888 888 8888" maxlength="12"  title="Ten digits code" required value="<?php echo $mobile; ?>">
           </div>
           </div>

           <div class="col-lg-6 col-md-6 footer-contact">
           <div>
               <label><span style="color:#EE6C4D;">*</span>Birthday</label>
               <input type="date" name="dob" placeholder="20-10-2020" value="<?php echo $dob; ?>" >
           </div>
           </div>

           <div class="col-lg-6 col-md-6 footer-contact">
           <div>
               <label>Occupation/Profession</label>
               <input type="text" name="occupation" placeholder="Accountant/Domestic Worker" value="<?php echo $occupation; ?>">
           </div>
           </div>

           <div class="col-lg-6 col-md-6 footer-contact">
           <div>
               <label><span style="color:#EE6C4D;">*</span>Full Address</label>
               <input type="text" name="address" placeholder="Raipur" value="<?php echo $address; ?>">
           </div>
           </div>

           <div class="col-lg-6 col-md-6 footer-contact">
           <div>
               <label><span style="color:#EE6C4D;">*</span>Pincode</label>
               <input type="text" name="pincode"  maxlength="6" placeholder="123456" value="<?php echo $pincode; ?>" >
           </div>
           </div>

           <div class="col-lg-6 col-md-6 footer-contact">
           <div>
               <label><span style="color:#EE6C4D;">*</span>Password</label>
               <input type="password" name="password_1" placeholder="Enter your password here" >
           </div>
           </div>

           <div class="col-lg-6 col-md-6 footer-contact">
           <div>
               <label><span style="color:#EE6C4D;">*</span>Confirm Password</label>
               <input type="password" name="password_2" placeholder="Confirm password here" >
           </div>
           </div>

           <div class="col-lg-6 col-md-6 footer-contact">
           <div>
                <label for="img">Select image:</label>
                <input type="file" name="avatar" id="img" name="img" accept="image/*">
           </div>
           </div>

           <div class="col-lg-6 col-md-6 footer-contact">
           <div>
           <span style="color:#EE6C4D;">*</span>Required all fields
           </div>
           </div>
           

           </div>
           </div>


           <input type="submit" name="reg_user" >
           <a href="login.php" style="font-size:16px;"><div>Alredy an account,Login Here</a> 
       </form>
       </div>
       </div>
</div>
</div>
</section>

<!-- login form end -->




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