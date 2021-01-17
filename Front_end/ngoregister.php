<?php 
  include "ngoreg_server.php";
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

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">
  <link href="../assets/css/ngocard.css" rel="stylesheet">
  <link href="../assets/css/ngoregisterform.css" rel="stylesheet">
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
 




  
<!-- latest registered NGO's -->
<section id="hero" class="d-flex align-items-center">
    <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200">
      <h1>Want to be a part of this Organization</h1>
      <h2>Register your NGO for donation</h2>
      <a href="#myform" class="btn-get-started scrollto">Register Your NGO, Click Here</a>
    </div>
  </section><!-- End Hero -->


<section>
  <div class="container"> 
  <div style="text-align: center;color: black;font-size: 23px;"><b>Our Latest Registered NGO's</b></div>
  <br/>
  <div class="row">
  
   
<?php 

$servername = "localhost";
$username = "root";
$password = "";
$database = "registration";
$conn = mysqli_connect($servername, $username, $password, $database);

$sql = "SELECT * FROM ngotable ORDER BY id DESC LIMIT 3";
$result =  mysqli_query($conn, $sql);

$num = mysqli_num_rows($result);



if($num)
{
    while ($row = mysqli_fetch_assoc($result)){
        
        echo' <div class="col-lg-4"> '; 
         echo '<div class="wrapper">';
    echo '<div class="img-area">';
      echo '<div class="inner-area">';
        echo '<img src="https://images.unsplash.com/photo-1492288991661-058aa541ff43?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="">';
      echo '</div>';
    echo '</div>';
    echo '<div class="icon arrow"><i class="fas fa-arrow-left"></i></div>';
    echo '<div class="icon dots"><i class="fas fa-ellipsis-v"></i></div>';
    echo '<div class="name" style="font-weight:bold;">' . $row['ngoname'].  '</div>';
    echo '<div class="about" style="font-weight:bold;">' . $row['ngoaddress'].' '. $row['ngopin']. '</div>';
    echo '<div class="social-icons">';
      echo '<a href="#" class="fb"><i class="bx bxl-facebook bx-tada-hover"></i></a>';
      echo '<a href="#" class="insta"><i class="bx bxl-instagram bx-tada-hover"></i></a>';
      echo '<a href="#" class="twitter"><i class="bx bxl-twitter bx-tada-hover"></i></a>';
      echo '<a href="#" class="yt"><i class="bx bxl-linkedin-square bx-tada-hover"></i></a>';
    echo '</div>';
    echo '<div class="buttons">';
      echo '<button><span style="font-weight:bold;">Mail: </span> ' . $row['ngoemail']. '</button>'; 
    echo '</div>';
    echo '<div class="buttons">';
      echo '<button><span style="font-weight:bold;">Contact: </span> ' . $row['ngocontact']. '</button>'; 
    echo '</div>'; 

    echo '<div class="buttons">';
      echo '<button><span style="font-weight:bold;">Registered date: </span> ' . $row['registereddate']. '</button>'; 
    echo '</div>'; 
  echo '</div>';


  echo'</div>';
    }

    
} 
?>
   </div>
   </div>
   </section> 

 
<!-- End Registered NGO's -->




<!-- other NGO's table -->
<section style="margin-left:20px; margin-right:20px;border:3px solid black;">
<div style="text-align: center;color: black;font-size: 23px;"><b><u>Other Registered NGO's</u></b></div>
<div class="table table-responsive">
        <?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "registration";
$conn = mysqli_connect($servername, $username, $password, $database);

$sql = "SELECT * FROM ngotable ORDER BY id DESC LIMIT 8";
$result =  mysqli_query($conn, $sql);

$num = mysqli_num_rows($result);
echo '
<table id="fresh-table" class="table table-hover">
<thead>
  <th data-field="id">NGO Id</th>
  <th data-field="name">Name</th>
  <th data-field="name">Owner Name</th>
  <th data-field="pin-code">Pin Code</th>
  <th data-field="city">City</th>
  <th data-field="address">Address</th>
  <th data-field="Contact_no">Contact No.</th>
  <th data-field="email">Email</th>
  <th data-field="status">Status</th>
</thead>
<tbody>';


if($num)
{
    while ($row = mysqli_fetch_assoc($result)){
        echo 
        "<tr>
        <td> ". $row['ngoid']. "</td>
        <td> ". $row['ngoname']. "</td>
        <td>". $row['ownerfirstname']." ". $row['ownerlastname']."</td>
        <td>". $row['ngopin']."</td>
        <td>". $row['ngocity']. "</td>
        <td>". $row['ngoaddress']. "</td>
        <td>". $row['ngocontact']. "</td>
        <td>". $row['ngoemail']. "</td>
        <td class='table-success'>". $row['ngostatus']. "</td>
      </tr>
      "
      ;
    }
}
 
echo '
</tbody>
</table>
';
?>
</div> 
</section>
<!-- End other NGO's table -->




<!-- NGO Register Form -->

<section class="form-v10" >
	<div class="page-content" id="myform">
		<div class="form-v10-content" >
            <h2  style="text-align:center;font-weight:bold;margin-top: 20px;">NGO REGISTRATION FORM</h1> 
            <br>
			<form class="form-detail" action="" method="post" >
				<div class="form-left">
					<h2>NGO Owner details</h2>
					<div class="form-row">
						<select name="title">
						    <option class="option" value="title">Title</option>
						    <option class="option" value="Mr.">Mr.</option>
						    <option class="option" value="Miss">Miss</option>
						</select>
						<span class="select-btn">
						  	<i class="zmdi zmdi-chevron-down"></i>
						</span>
					</div>
					<div class="form-group">
						<div class="form-row form-row-1">
							<input type="text" name="ownerfirstname" id="first_name" class="input-text" placeholder="First Name" required>
						</div>
						<div class="form-row form-row-2">
							<input type="text" name="ownerlastname" id="last_name" class="input-text" placeholder="Last Name" required>
						</div>
					</div>
					<div class="form-row">
						<input type="email" name="owneremail" class="company" id="company" placeholder="Email of Owner" required>
                    </div>
                    <div class="form-row">
						<input type="tel" name="ownercontact" class="company" id="company" placeholder="Contact of owner" required>
					</div>
				</div>
				<div class="form-right">
                    <h2>NGO's Details</h2>
                    <div class="form-row">
						<input type="text" name="ngoname" class="additional" id="address" placeholder="Enter name of NGO" required>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
							<input type="tel" name="ngocontact" class="additional" id="city" placeholder="Enter contact number" required>
						</div>
						<div class="form-row form-row-1">
							<input type="email" name="ngoemail" class="zip" id="zip" placeholder="Enter Email of NGO" required>
						</div> 
					</div>
					<div class="form-row">
						<input type="text" name="ngoaddress" class="additional" id="address" placeholder="Enter address of NGO" required>
                    </div>
                    
					<div class="form-group">
                        <div class="form-row">
							<input type="text" name="ngocity" class="additional" id="city" placeholder="Enter city" required>
						</div>
						<div class="form-row form-row-1">
							<input type="text" name="ngopin" class="zip" id="zip" placeholder="Pin Code" required>
						</div> 
                    </div>
                    
                    <div class="form-group">
                        <div class="form-row form-row-1">
                            <label for="myfile" style="color: white;">Select NGO verification document:</label>
                            <input type="file" name="ngofile" id="myfile" name="myfile"> 
						</div> 
                        <div class="form-row">
							<input type="text" name="ngoid" class="additional" id="city" placeholder="Enter ID/Registration no." required>
						</div>
						
                    </div>
                     
					<div class="form-row-last">
						<input type="submit" name="register" class="register" value="Register">
					</div>
				</div>
			</form>
			
		</div>
	</div>
</section>



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