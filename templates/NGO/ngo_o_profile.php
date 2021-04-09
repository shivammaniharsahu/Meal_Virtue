 

<?php 
  include "../../config/dbconfig.php";   
  include "../../server/ngoreg_server.php"; 
  session_start(); 

  if (!isset($_SESSION['ngo_o_email'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: ngo_o_login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['ngo_o_email']);
  	header("location: ../landing.php");
  }

  

?>


<?php 
  include "../../config/dbconfig.php";  
    
  
  // <!-- register ngo here, push into db -->
  $errors = array(); 
  if (isset($_POST['register_ngo'])) {
		  
    $t_ngoname = $_POST["ngoname"];
    $t_ngocontact = $_POST["ngocontact"]; 
    $t_ngoemail = $_POST["ngoemail"];
    $t_ngoaddress = $_POST["ngoaddress"];
    $t_ngocity = $_POST["ngocity"];
    $t_ngopin = $_POST["ngopin"];
    $t_ngoid = $_POST['ngoid'];


    $t_ngofile = $_FILES['ngofile'];
    $t_ngoprofile = $_FILES['ngoprofile']; 

    //print_r($t_ngofile);   
    //Array ( [name] => registered_NGO.sql [type] => application/octet-stream [tmp_name] => C:\xampp\tmp\php32A4.tmp [error] => 0 [size] => 5510 )

    


 
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
        $file_store_location = "../../assets/applied_ngo_uploaded_document/".$t_ngoname. ' ' .$file_name; 
        move_uploaded_file($file_tmp_loc, $file_store_location);



        $p_file_name = $t_ngoprofile[name];
        $p_file_type = $t_ngoprofile[type];
        $p_file_size = $t_ngoprofile[size];
        $p_file_tmp_loc = $t_ngoprofile[tmp_name];
        $p_file_store_location = "../../assets/img/ngo_profile_pic/".$t_ngoname. ' ' .$p_file_name; 
        move_uploaded_file($p_file_tmp_loc, $p_file_store_location);

        $ngo_profile_pic_name =$t_ngoname. ' ' .$p_file_name;
        
        if (empty($p_file_name)) { $ngo_profile_pic_name= 'prof.jpg';}
        $t_owneremail=$_SESSION['ngo_o_email'];

        $sql = "INSERT INTO `ngotable` (`owneremail`,`ngoname`, `ngocontact`, `ngoemail`, `ngoaddress`, `ngocity`, `ngopin`, `ngofile`,`ngoid`) 
        VALUES ('$t_owneremail', '$t_ngoname', '$t_ngocontact', '$t_ngoemail', '$t_ngoaddress', '$t_ngocity', '$t_ngopin','$ngo_profile_pic_name', '$t_ngoid')";
        $resultt =  mysqli_query($conn, $sql);
        
        header("Location: #");
      }
     
	}
 
  ?>



<!-- --------------------------------------------------------------------------
  

it is profile.php 

 
--------------------------------------------------------------------------------->
<script type="text/javascript"> 
        window.history.forward(); 
        function noBack() { 
            window.history.forward(); 
        } 
    </script> 
    

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  
  <link rel="icon" href="../../assets/img/favicon.png" type="image/gif" sizes="16x16">
  <title>Meal-Virtue: Working for the needy</title>
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
  <link href="../../assets/css/profile_page.css" rel="stylesheet">
  <link href="../../assets/css/ngoprofilengocard.css" rel="stylesheet">
  <link href="../../assets/css/ngoregisterform.css" rel="stylesheet"> 

 

    
</head>
<body>






<!-- Added here profile -->

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

            <img href="profile.php"  class='nav-avatar' style="height: 40px; width: 40px; -webkit-border-radius: 50%; -moz-border-radius: 50%; border-radius: 50%;"
                    src="..\..\assets\img\prof.jpg"> 
            <button style="border:3px solid #000000;border-radius:8px 0px 8px 0px;"><a href="ngo_o_profile.php?logout='1'"><b  style="color:#FF7733;font-size:15px;">Logout</b></a>  </button>

       </nav>
      </div>
    </div>
  </header>


  <!-- Hero -->
  
  <section id="hero" class="d-flex align-items-center">
    <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="100">
      <h1>Hello <?php echo $_SESSION['ngo_o_name']; ?></h1> 
      <i class="bx bxs-right-arrow-alt get-started-icon"></i>   
       <a type="button" class="btn-get-started scrollto " 
      href='#myform'>Register You NGO</a>
   </div>
  </section><!-- End Hero -->

 


  


  <div class="container">
        <div class="row">
            <div class="profile-nav col-md-3">
                <div class="panel">
                    <div class="user-heading round">
                        <a href="#">
                            <!-- <img src="..\..\assets\img\prof1.jpg" alt=""> -->
                            <img src="..\..\assets\img\ngo_o_profile_pic\<?php echo $_SESSION['ngo_o_avatar']; ?>" alt=""> 
                        </a>
                        <h1><?php echo $_SESSION['ngo_o_name']; ?></h1>
                        <p><?php echo $_SESSION['ngo_o_email']; ?></p>
                    </div>
                        
                <div class="panel">
                    <div class="card">
                        <div class="card-header" style="background-color: black;">
                            Total Number Of Application of NGO
                        </div>
                        <div class="card-body">
                            <p class="card-text">56 </p>
                        </div>
                        </div>   
                    </div> 
                </div>
            </div>


            <div class="profile-info col-md-9">
                <div class="panel">
                    <div class="bio-graph-heading">
                        I am a homemaker and keep looking for innovative and creative things. I like gardening, watching TV and scrolling social media
                    </div>
                    <div class="panel-body bio-graph-info">
                        <h1>NGO Owner Profile details</h1>
                        <div class="row">
                            <div class="bio-row">
                                <p><span>First Name </span>: <?php echo $_SESSION['ngo_o_name']; ?></p>
                            </div>  
                            <div class="bio-row">
                                <p><span>Email</span>: <?php echo $_SESSION['ngo_o_email']; ?></p>
                            </div>
                            <div class="bio-row">
                                <p><span>Contact No </span>: <?php echo $_SESSION['ngo_o_mobile']; ?></p>
                            </div> 
                            <div class="bio-row">
                                <p><span>Address </span>: <?php echo $_SESSION['ngo_o_address']; ?></p>
                            </div>
                            <div class="bio-row">
                                <p><span>Pincode </span>: <?php echo $_SESSION['ngo_o_pincode']; ?></p>
                            </div>
                        </div> 
                    </div>
                </div> 
            </div>
        </div>
  </div> 

 <!-- Registered NGO -->
                         
 <!-- Recent 3 registered NGO -->

<section>
      <div class="container"> 
      <div style="text-align: center;color: black;font-size: 23px;"><b>Your registered NGO's</b></div>
      <br/>
      <div class="row">
  
   
          <?php 
          
          $conn = mysqli_connect($servername, $username, $password, $database);
          $zx=$_SESSION['ngo_o_email'];
          $sql = "SELECT * FROM registered_ngo where owneremail='$zx' ORDER BY id DESC LIMIT 5";
          $result =  mysqli_query($conn, $sql);

          $num = mysqli_num_rows($result);



          if($num)
          {
              while ($row = mysqli_fetch_assoc($result)){
                  

              ?>      
                  
            <div class="col-lg-6">
            <div class="wrapper">

                <div class="row">

                   <div class="col-lg-12" style="text-align: center;">
                        <div class="name" style="font-weight:bold;"> <?php echo $row['ngoname'] ?>  </div>
                        <div class="about" style="font-weight:bold;"> Address: <?php echo $row['ngoaddress']?> Pin: <?php echo $row['ngopin']?> </div>
                   </div>
                   <div class="col-lg-4 col-md-12 col-xs-12" style="text-align: center;"> 
                        <div class="row">
                        <div class="col-lg-12 ">   
                            <div class="img-area">
                                <div class="inner-area">
                                    <img src="../../assets/img/ngo_profile_pic/<?php echo $row['ngofile'] ?>" alt="">
                                </div>
                            </div> 
                         </div>
                         <div class="col-lg-12 ">  
                            <div class="name" style="font-weight:bold;font-size:20px;">Id: ID123  </div>
                         </div>
                         </div>    
                    </div>
                    <div class="col-lg-8 col-md-12 col-xs-12"> 
                            <div class="buttons">
                                <button><span style="font-weight:bold;">Mail: </span>  <?php echo $row['ngoemail']?> </button>
                            </div>
                            <div class="buttons">
                                <button><span style="font-weight:bold;">Contact: </span>  <?php echo $row['ngocontact']?> </button>
                            </div> 
                            <div class="buttons">
                                <button><span style="font-weight:bold;">Registered date: </span>  12-Aug-2019</button>
                            </div> 
                    </div>
                </div>
            </div> 
            </div>

          <?php 
              }
          } 
          ?>
      </div>
      </div>
</section> 

 
<!-- End Registered NGO's -->
 
<!-- End Registered NGO's -->


 
                         
 <!-- Application for NGO registration -->
    

 <section>
      <div class="container"> 
      <div style="text-align: center;color: black;font-size: 23px;"><b>Application for NGO registration</b></div>
      <br/>
      <div class="row">
  
   
          <?php 
          
          $conn = mysqli_connect($servername, $username, $password, $database);

          $sql = "SELECT * FROM ngotable where owneremail='$zx' ORDER BY id DESC LIMIT 5";
          $result =  mysqli_query($conn, $sql);

          $num = mysqli_num_rows($result);



          if($num)
          {
              while ($row = mysqli_fetch_assoc($result)){
                  

              ?>      
                  
            <div class="col-lg-12" style="background-color:#FF7733;border:1px solid black;margin:3px;border-radius:12px;"> 

                <div class="row"> 
                    <div class="col-lg-4" style="font-weight:bold;color:white;text-align: left;padding:20px;">
                        <div class="name"> NGO Name: <?php echo $row['ngoname'] ?>  </div>
                        <div class="name"> NGO Id: FFFD354  </div>
                        <div class="about"> Address: <?php echo $row['ngoaddress']?><br> Pin: <?php echo $row['ngopin']?> </div>
                        
                    </div> 
                    <div class="col-lg-4"> 
                            <div class="buttons">
                                <button><span style="font-weight:bold;">Mail: </span>  <?php echo $row['ngoemail']?> </button>
                            </div>
                            <div class="buttons">
                                <button><span style="font-weight:bold;">Contact: </span>  <?php echo $row['ngocontact']?> </button>
                            </div> 
                            <div class="buttons">
                                <button><span style="font-weight:bold;">Applied on: </span>  <?php echo $row['registereddate']?> </button>
                            </div> 
                    </div> 
                    <div class="col-lg-4" >
                        <div style="text-align: center;color: black;font-size: 17px;"><b>Application Status</b></div> 
                        <div data-new-gr-c-s-check-loaded="14.993.0" data-gr-ext-installed="" class="progress">
                          <div class="progress-done" style="width: <?php echo $row['ngostatus']?>%; opacity: 1;">
                            <b><?php echo $row['status_comment']?> </b>
                          </div>
                        </div> 
                    </div> 
                </div> 
            </div>

          <?php 
              }
          } 
          ?>
      </div>
      </div>
</section> 

 
<!-- End Registered NGO's -->
 
<!-- End Registered NGO's -->

  
<!-- NGO Register Form -->

<section class="form-v10" >
	<div class="page-content" id="myform">
		<div class="form-v10-content" >
            <h2  style="text-align:center;font-weight:bold;margin-top: 20px;">NGO REGISTRATION FORM</h1> 
            <br> 
			<form class="form-detail" action="" method="post" enctype="multipart/form-data">
				<div class="form-left">
					<h2>NGO Details</h2>

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
                    
                   
						 


				</div>
				<div class="form-right">
                        <h2>NGO's Document Details</h2>
                        <div class="form-row">
							<input type="text" name="ngoid" class="additional" id="city" placeholder="Enter ID/Registration no." required>
						</div> 
                        <div class="form-row">
                            <label for="myfile" style="color: white;">Select NGO verification document:</label>
                            <input type="file" name="ngofile" id="myfile"> 
						</div>  
                        <div class="form-row">
                            <label for="myfile" style="color: white;">Select NGO Logo or Image for Profile Pic of NGO</label>
                            <input type="file" name="ngoprofile" id="myfile"> 
                        </div>  
                        <div class="form-row-last">
                            <input type="submit" name="register_ngo" class="register" value="Register">
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

 
   
<!-- 
   Comment for mail script -->
   <script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
<script src="https://smtpjs.com/v3/smtp.js"></script>




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

<!-- End -->


</body>
</html>

 