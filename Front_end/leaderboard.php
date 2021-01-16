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
</head>

<body>
  <header id="header" class="d-flex align-items-center">
    <div class="container">
      <div class="header-container d-flex align-items-center">
        <div class="logo mr-auto">
          <a href="landing.php"><img src="../assets/img/logo1.png" style="height: 100px; width: 200px"></a>
        </div>

        <nav class="nav-menu d-none d-lg-block">
          <ul>
          <li ><a href="landing.php">Home</a></li> 
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
   echo"<div>
   <button style='border:3px solid #000000;border-radius:8px;'><a href='profile.php?logout='1''><b  style='color:#006494;font-size:15px;'>Logout</b></a>  </button>
       <img class='nav-avatar' style='height: 35px; width: 35px; -webkit-border-radius: 50%; -moz-border-radius: 50%; border-radius: 50%;'
         src='https://bootdey.com/img/Content/avatar/avatar3.png'>
           
   </div>";
};
?>
        </nav>
      </div>
    </div>
  </header>


  <section id="testimonials" class="testimonials section-bg">
    <div class="container">

      <div class="row">
        <div class="col-lg-4">
          <div class="section-title" data-aos="fade-right">
            <h2>Our Top Three</h2>
            <p>The top 3 donaters, they work with us with many moire, towards upliftment of people</p>
          </div>
        </div>
        <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
          <div class="owl-carousel testimonials-carousel">

              <!-- Top point earned members data fetched -->
 
            <?php

                    //donation food_items

                    //connect to db
                    $db = mysqli_connect('localhost', 'root', '', 'registration' , "3306"); 
 
                    $donated_query_rs = "SELECT tt.*
                    FROM donate tt
                    INNER JOIN
                        (
                        SELECT DISTINCT email, MAX(overallpointearned) AS MaxDateTime
                        FROM donate
                        GROUP BY email
                        ) groupedtt ON tt.email = groupedtt.email AND tt.overallpointearned = groupedtt.MaxDateTime 
                    ORDER BY overallpointearned DESC LIMIT 3 "; 

                    $donated_q_result = mysqli_query($db, $donated_query_rs); 
                    $donated_q_num = mysqli_num_rows($donated_q_result);
                    if($donated_q_num)
                    {
                        while ($donated_q_row = mysqli_fetch_assoc($donated_q_result)){ 
                        echo '<div class="testimonial-item">';
                        echo '<img src="../assets/img/testimonials/testimonials-1.jpeg" class="testimonial-img" alt="">';
                        echo '<h3>Name: ' . $donated_q_row['d_name']. '</h3>';
                        echo '<h4>Address: '. $donated_q_row['d_address']. '</h4>';
                        echo '<h5>Points Earned: ' . $donated_q_row['overallpointearned']. '</h5>'; 
                        echo '</div>'; 
                        }
                    }
                    

                    //end_donated_items

            ?>
              <!-- End of earned points data fetched --> 
          </div>
        </div>
      </div>

    </div>
  </section>

  <div class="container">
    
  <table class="table table-hover table-dark">
    <h3>Our Leaderboard</h3>
    <thead>
      <tr>
        <th scope="col">Rank</th>
        <th scope="col">Name</th>
        <th scope="col">City</th>
        <th scope="col">Points earned</th>
      </tr>
    </thead>
    <tbody>
      

        <?php

        //donation food_items

        //connect to db
        $db = mysqli_connect('localhost', 'root', '', 'registration' , "3306"); 

        $donated_query_rs = "SELECT tt.*
        FROM donate tt
        INNER JOIN
            (
            SELECT DISTINCT email, MAX(overallpointearned) AS MaxDateTime
            FROM donate
            GROUP BY email
            ) groupedtt ON tt.email = groupedtt.email AND tt.overallpointearned = groupedtt.MaxDateTime 
        ORDER BY overallpointearned DESC LIMIT 10 "; 

        $donated_q_result = mysqli_query($db, $donated_query_rs);
        $count=0;
        $donated_q_num = mysqli_num_rows($donated_q_result);
        if($donated_q_num)
        {   
            while ($donated_q_row = mysqli_fetch_assoc($donated_q_result)){ 
                $count=$count+1;
                echo '<tr>';
                echo '<th scope="row">' .$count. '</th>';
                echo '<td>' . $donated_q_row['d_name']. '</td>';
                echo '<td>' . $donated_q_row['d_address']. '</td>';
                echo '<td>' . $donated_q_row['overallpointearned']. '</td>';
                echo '</tr>'; 
            }
        }


        //end_donated_items

        ?> 
    </tbody>
  </table>
</div><!-- ======= Footer ======= -->
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