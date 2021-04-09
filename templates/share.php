<?php 
  include "../config/dbconfig.php"; 
  session_start(); 

  if (!isset($_SESSION['email'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['email']);
  	header("location: landing.php");
  }

?>

<!-- --------------------------------------------------------------------------
  

it is profile.php 

 
--------------------------------------------------------------------------------->


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Meal-Virtue: Working for the needy</title>
  <link rel="icon" href="../assets/img/favicon.png" type="image/gif" sizes="16x16">
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
  <link href="../assets/css/profile_page.css" rel="stylesheet">
  <link href="../assets/css/ngocard.css" rel="stylesheet">
</head>
<body>

 




<!-- Added here profile -->

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
                <li><a href="registeredngo.php">Registered Organisation</a></li>
                <li class="drop-down"><a href="">My Profile</a>
                  <ul>
                    <li><a href="DONAR/profile.php">Donar Profile</a></li>
                    <li><a href="NGO/ngo_o_profile.php">NGO Profile</a></li>
                    <li><a href="ADMIN/admin.php">Admin Pannel</a></li>
                  </ul>
                </li>
                <li class="drop-down"><a href="">Testimonials</a>
                  <ul>
                    <li><a href="leaderboard.php">Our Leaderboard</a></li>
                    <li><a href="TESTIMONIAL/testimonial.php">Listen from Users</a></li>
                    <li><a href="thankyou.php">Thank you</a></li>
                  </ul>
                </li>
                <li ><a href="contact.php">Contact US</a></li>
          </ul>
          <img href="profile.php"  class='nav-avatar' style="height: 40px; width: 40px; -webkit-border-radius: 50%; -moz-border-radius: 50%; border-radius: 50%;"
                src="..\assets\img\prof.jpg"> 
         <button style="border:3px solid #000000;border-radius:8px 0px 8px 0px;"><a href="DONAR/profile.php?logout='1'"><b  style="color:#FF7733;font-size:15px;">Logout</b></a>  </button>
           
           
 
         
        </nav>
      </div>
    </div>
  </header>
  <section id="hero" class="d-flex align-items-center">
    <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="100">
      <h1>Hello <?php echo $_SESSION['firstname']; ?></h1>   
       </div>
  </section><!-- End Hero -->


  <div class="container">
    <div class="row">
      <div class="profile-nav col-md-3">
          <div class="panel">
              <div class="user-heading round">
                  <a href="#">
                      <img src="..\assets\img\donorimg\img10.jpg" alt="">
                       
                      
                  </a>
                  <h1><?php echo $_SESSION['firstname']; ?> <?php echo $_SESSION['lastname']; ?></h1>
              </div>
                  
          <div class="panel">
              <div class="card">
                  <div class="card-header" style="background-color: black;">
                      Total food donated(approx weight)
                  </div>
                  <div class="card-body">
                    <p class="card-text"><?php echo $_SESSION['donate_weight']; ?> </p>
                  </div>
                </div>
                <div class="card">
                    <div class="card-header" style="background-color: black;">
                      Total Number of plates donated
                    </div>
                    <div class="card-body">
                      <p class="card-text"><?php echo $_SESSION['donate_plate']; ?></p>
                    </div>
               </div>
               <div class="card">
                    <div class="card-header" style="background-color: black;">
                      Donated Items
                    </div>
                    <div class="card-body">
                      <p class="card-text"><?php echo $_SESSION['donated_left_food_items']; ?></p>
                    </div>
               </div>
               <div class="card">
                    <div class="card-header" style="background-color: black;">
                      Total money donated
                    </div>
                    <div class="card-body">
                      <p class="card-text"><?php echo $_SESSION['donate_money']; ?></p>
                    </div>
               </div>
               
               <div class="card">
                    <div class="card-header" style="background-color: black;">
                      Earned Points
                    </div>
                    <div class="card-body">
                      <p class="card-text"><?php echo $_SESSION['remain']; ?></p>
                    </div>
               </div>


            </div>
              </ul>
          </div>
      </div>
      <div class="profile-info col-md-9">
          <div class="panel">
              <div class="bio-graph-heading">
                  I am a homemaker and keep looking for innovative and creative things. I like gardening, watching TV and scrolling social media
              </div>
              <div class="panel-body bio-graph-info">
                  <h1>Profile details</h1>
                  <div class="row">
                      <div class="bio-row">
                          <p><span>First Name </span>: <?php echo $_SESSION['firstname']; ?></p>
                      </div>
                      <div class="bio-row">
                          <p><span>Last Name </span>: <?php echo $_SESSION['lastname']; ?></p>
                      </div>
                      
                      <div style="padding : 10px">
                      <a href="#img4"><img src="..\assets\img\ngoimgs\img5.jpg" style="height :250px; width :250px"></a>
                      <div class="text-center"><button style="border:2px solid white;border-radius:5px;width:250px;height:40px;color:white; background-color:#9A6C3B;" >Donated By: Miss. <?php echo $_SESSION['firstname']." ".$_SESSION['lastname']?></button></div>
                      <div class="text-center"><button style="border:2px solid white;border-radius:5px;width:250px;height:40px;color:white; background-color:#946E61;">Donated on: 17-Jan-2020</button></div>
                      </div>
                      <div style="padding : 10px">
                      <a href="#img4"><img src="..\assets\img\ngoimgs\img6.jpg" style="height :250px; width :250px"></a>
                      <div class="text-center"><button style="border:2px solid white;border-radius:5px;width:250px;height:40px;color:white; background-color:#9A6C3B;" >Donated By: Miss. <?php echo $_SESSION['firstname']." ".$_SESSION['lastname']?></button></div>
                      <div class="text-center"><button style="border:2px solid white;border-radius:5px;width:250px;height:40px;color:white; background-color:#946E61;">Donated on: 17-Jan-2020</button></div>
                      </div>
                      <div style="padding : 10px">
                      <a href="#img4"><img src="..\assets\img\ngoimgs\img7.jpg" style="height :250px; width :250px"></a>
                      <div class="text-center"><button style="border:2px solid white;border-radius:5px;width:250px;height:40px;color:white; background-color:#9A6C3B;" >Donated By: Miss. <?php echo $_SESSION['firstname']." ".$_SESSION['lastname']?></button></div>
                      <div class="text-center"><button style="border:2px solid white;border-radius:5px;width:250px;height:40px;color:white; background-color:#946E61;">Donated on: 17-Jan-2020</button></div>
                      </div>
              </div>
          </div>






          <div class="panel">
              <h2 style="margin: 5px 5px 5px 5px">Recent Activity</h2>
              
              <!-- finding latest donations -->
              <?php

                  //donation food_items
                  $fetchemail = $_SESSION['email'];
                  
                  // connect to the database
                  $db = mysqli_connect($servername, $username, $password, $database); 
                  
                  $donated_query = "SELECT * FROM donate WHERE email='$fetchemail' ORDER BY uniqueid DESC LIMIT 3 ";
                  $donated_result = mysqli_query($db, $donated_query); 
                  $donated_num = mysqli_num_rows($donated_result);
                  if($donated_num)
                  {
                    while ($donated_row = mysqli_fetch_assoc($donated_result)){
                      

                      echo '<div class="card">';
                        echo'<div class="card-header">Donated on: ' . $donated_row['donateddate']. '</div>';
                        echo'<div class="card-body">';
                          echo'<h5 class="card-title">Event: ' . $donated_row['event']. '</h5>';
                          echo'<p class="card-text"> Food donated: '. $donated_row['weight'].' kg</p>';
                          echo'<p class="card-text"> Money donated: Rs.'. $donated_row['money'].'</p>';
                          echo'<p class="card-text"> Number of plates food donated: '. $donated_row['plate'].'</p>';
                          echo'<p class="card-text"> Points Earned: ' . $donated_row['pointsearned']. ' points</p>';
                        echo'</div>';
                      echo'</div>';


                      // echo '<div class="name" style="font-weight:bold;">' . $row['ngoname'].  '</div>';

                      // $donate_weight = $donate_weight+$donated_row['weight'];
                      // $donate_money = $donate_money+$donated_row['money'];
                      // //$earned_points = $earned_points+$donated_row['pointsearned'];
                      // $donate_plate = $donate_plate+$donated_row['plate']; 
                
                    }
                  }
                  
                  

                  //end_donated_items
              echo '<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-60116c21cb80d1c3"></script>';
              ?>
              <!-- End of finding latest donations -->

        </div>
          </div>
      </div>
    </div>
    </div>

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
              <li><i class="bx bx-chevron-right"></i> <a href="#">Leaderboard</a></li>
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
  <!-- Go to www.addthis.com/dashboard to customize your tools -->


  
</body>
</html>
