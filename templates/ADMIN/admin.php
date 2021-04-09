
<?php 
  include "../../config/dbconfig.php";  
  session_start(); 

  if (!isset($_SESSION['admin_email'])) { 
  	header('location: adminlogin.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['admin_email']);
  	header("location: ../../templates/landing.php");
  }

  
// <!-- register ngo here, push into db -->
  $errors = array(); 
  if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		 
    $t_ownerfirstname = $_POST["ownerfirstname"];
    $t_ownerlastname = $_POST["ownerlastname"];
    $t_owneremail = $_POST["owneremail"];
    $t_ownercontact = $_POST["ownercontact"];
    
    $t_ngoname = $_POST["ngoname"];
    $t_ngocontact = $_POST["ngocontact"]; 
    $t_ngoemail = $_POST["ngoemail"];
    $t_ngoaddress = $_POST["ngoaddress"];
    $t_ngocity = $_POST["ngocity"];
    $t_ngopin = $_POST["ngopin"];
    $t_ngoid = $_POST['ngoid'];

    $t_ngofile = $_FILES['ngofile']; 

    $profile_p = $_POST['profile_p']; 
    

    //print_r($t_ngofile);   
    //Array ( [name] => registered_NGO.sql [type] => application/octet-stream [tmp_name] => C:\xampp\tmp\php32A4.tmp [error] => 0 [size] => 5510 )

    



  if (empty($t_ownerfirstname)) { array_push($errors, "Firstname is required"); }
  if (empty($t_owneremail)) { array_push($errors, "Email is required"); }
  if (empty($t_ownercontact)) { array_push($errors, "Owner Mobile number is required"); }
  if (empty($t_ngoemail)) { array_push($errors, "NGO Email is required"); }
  if (empty($t_ngocontact)) { array_push($errors, "NGO Mobile number is required"); }
  if (empty($t_ngoname)) { array_push($errors, "NGO is required"); }
  if (empty($t_ngoaddress)) { array_push($errors, "NGO Address is required"); }
  if (empty($t_ngocity)) { array_push($errors, "NGO city is required"); }
  if (empty($t_ngopin)) { array_push($errors, "NGO Pin is required"); } 
  if (empty($t_ngofile)) { array_push($errors, "Please attach valid Document of NGO Related"); }
  if (empty($t_ngoid)) { array_push($errors, "Enter Valid Registered NGO Id"); }

  // $len_o_contact = strlen($t_ownercontact);
  // if ($len_o_contact < 10 || $len_o_contact > 12) { array_push($errors, "Owner Contact is invalid"); }

       
 
      $conn = mysqli_connect($servername, $username, $password, $database);
      
      if (count($errors) == 0) 
      {  


        $file_name = $t_ngofile[name];
        $file_type = $t_ngofile[type];
        $file_size = $t_ngofile[size];
        $file_tmp_loc = $t_ngofile[tmp_name];
        $file_store_location = "../../assets/registered_ngo_uploaded_document/".$t_ngoname. ' ' .$file_name; 
        move_uploaded_file($file_tmp_loc, $file_store_location);

        $sql = "INSERT INTO `registered_ngo` (`ownerfirstname`, `ownerlastname`, `owneremail`, `ownercontact`, `ngoname`, `ngocontact`, `ngoemail`, `ngoaddress`, `ngocity`, `ngopin`, `ngofile`,`ngoid`, `ngostatus`) 
        VALUES ('$t_ownerfirstname', '$t_ownerlastname', '$t_owneremail', '$t_ownercontact', '$t_ngoname', '$t_ngocontact', '$t_ngoemail', '$t_ngoaddress', '$t_ngocity', '$t_ngopin','$profile_p', '$t_ngoid', '1')";
        $resultt =  mysqli_query($conn, $sql);
        
        header("Location: #");
      }
     
	}
 
  ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Meal-Virtue: Working for the needy</title>
  
  <link rel="icon" href="../../assets/img/favicon.png" type="image/gif" sizes="16x16">
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="../../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../../assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="../../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../../assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../../assets/css/style.css" rel="stylesheet">
  <link href="../../assets/css/ngocard.css" rel="stylesheet">
  <link href="../../assets/css/ngoregisterform.css" rel="stylesheet">
</head>

<body>
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container">
          <div class="header-container d-flex align-items-center">
            <div class="logo mr-auto">
              <a href="landing.php"><img src="../../assets/img/logo1.png" style="height: 100px; width: 200px"></a>
            </div>
    
            <nav class="nav-menu d-none d-lg-block">
              
        <ul>
          <li class="active"><a href="../../templates/landing.php">Home</a></li> 
                <li ><a href="../../templates/about-us.html">About</a></li>
                <li><a href="../../templates/donate.php">Donate leftovers from event</a></li>
                <li><a href="../../templates/registeredngo.php">Register Organisation</a></li> 
                <li class="drop-down"><a href="">My Profile</a>
                  <ul>
                    <li><a href="../DONAR/profile.php">Donar Profile</a></li>
                    <li><a href="../NGO/ngo_o_profile.php">NGO Profile</a></li>
                    <li><a href="../ADMIN/admin.php">Admin Pannel</a></li>
                  </ul>
                </li> 
                <li class="drop-down"><a href="">Testimonials</a>
                <ul>
                    <li><a href="../../templates/leaderboard.php">Our Leaderboard</a></li>
                    <li><a href="../TESTIMONIAL/testimonial.php">Listen from Users</a></li>
                    <li><a href="../../templates/thankyou.php">Thank you</a></li>
                  </ul>
                </li>
                <li ><a href="../../templates/contact.php">Contact US</a></li>
           
            
          </ul>
     
          <?php

          if (isset($_SESSION['admin_email'])) {
             echo" <img href='admin.php'  class='nav-avatar' style='height: 40px; width: 40px; -webkit-border-radius: 50%; -moz-border-radius: 50%; border-radius: 50%;'
             src='..\..\assets\img\prof.jpg'> 
      <button style='border:3px solid #000000;border-radius:8px 0px 8px 0px;'><a href='admin.php?logout='1''><b  style='color:#FF7733;font-size:15px;'>Logout FROM ADMIN Pannel</b></a>  </button>
        ";
          };
          ?>




            </nav>
          </div>
        </div>
      </header>
 


      <section id="hero" class="d-flex align-items-center">
    <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200">
      <h1>ADMIN IS HERE</h1>
      <h2>Register NGO HERE</h2> 
    </div>
  </section>
  <!-- End Hero -->

 


 
<!-- End Registered NGO's -->




<!-- other NGO's table -->
 
<!-- End other NGO's table -->




<!-- NGO Register Form -->

<section class="form-v10" >
	<div class="page-content" id="myform">
		<div class="form-v10-content" >
            <h2  style="text-align:center;font-weight:bold;margin-top: 20px;">NGO REGISTRATION FORM -Filled By Admin </h1> 
            <br>
            <?php include('..\errors.php'); ?>
			<form class="form-detail" action="" method="post" enctype="multipart/form-data">
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

          <div class="form-row">
						<input type="text" name="profile_p" class="company" id="company" placeholder=" Path of NGO Logo or Image for Profile Pic of NGO" required>
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
                            <input type="file" name="ngofile" id="myfile"> 
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
  <script src="../../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="../../assets/vendor/php-email-form/validate.js"></script>
  <script src="../../assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="../../assets/vendor/counterup/counterup.min.js"></script>
  <script src="../../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../../assets/vendor/venobox/venobox.min.js"></script>
  <script src="../../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="../../assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="../../assets/js/main.js"></script>

</body>

</html>




 