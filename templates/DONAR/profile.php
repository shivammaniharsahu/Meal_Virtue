 

<?php 
  include "../../config/dbconfig.php";   
  session_start(); 

  if (!isset($_SESSION['email'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: ../DONAR/login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['email']);
  	header("location: ../landing.php");
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
  <link href="../../assets/css/profile_page.css" rel="stylesheet">
  <link href="../../assets/css/ngocard.css" rel="stylesheet">

 

    
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
         <button style="border:3px solid #000000;border-radius:8px 0px 8px 0px;"><a href="profile.php?logout='1'"><b  style="color:#FF7733;font-size:15px;">Logout</b></a>  </button>
           
           
          
        </nav>
      </div>
    </div>
  </header>
  <section id="hero" class="d-flex align-items-center">
    <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="100">
      <h1>Hello <?php echo $_SESSION['firstname']; ?></h1>   
      <h2>You have <?php echo $_SESSION['remain']; ?> redeem points from what you have donoted</h2>
      <i class="bx bxs-right-arrow-alt get-started-icon"></i>
      <a id="modalActivate" type="button" class="btn-get-started scrollto" data-toggle="modal" data-target="#exampleModalPreview">Click here to redeem your points</a>
      <i class="bx bxs-right-arrow-alt get-started-icon"></i>
      <a type="button" class="btn-get-started scrollto " 
      href='../share.php?email=<?php echo $_SESSION['email']; ?>'>Share your public profile</a>
      <i class="bx bxs-right-arrow-alt get-started-icon"></i>
      <a type="button" class="btn-get-started scrollto " 
      href='recharge.php'>Save your food</a>
   </div>
  </section><!-- End Hero -->


  <div class="modal fade right" id="exampleModalPreview" tabindex="-1" role="dialog" aria-labelledby="exampleModalPreviewLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalPreviewLabel">Collect your exciting rewards<br> Your points will deduct everytime you redeem a code</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              
                <div class="card-group">
                    <div class="card">
                        <img class="card-img-top" src="../../assets/img/train.jpg" alt="Card image cap" width = 100% height="100">
                        <div class="card-body">
                          <h5 class="card-title">200 points</h5>
                          <p class="card-text">book your train ticket and get exciting 30%off worth up to Rs.1500</p>
                          <button type="button" class="btn-get-started scrollto button-style" 
                                style="margin-top: auto;" id="btn1" onclick="location.href='?redeem=1'">Redeem Now</button>
                        </div>
                      </div>
                    <div class="card">
                      <img class="card-img-top" src="../../assets/img/flight.jpg" alt="Card image cap" width = 100% height="100">
                      <div class="card-body">
                        <h5 class="card-title">600 points</h5>
                        <p class="card-text">book your flight ticket and get exciting 40%off worth up to Rs.4000</p>
                        <button type="button" class="btn-get-started scrollto button-style"
                                id = "btn2" style="margin-top: auto;" onclick="location.href='?redeem=2'">Redeem Now</button>
                      </div>
                    </div>
                      <div class="card">
                        <img class="card-img-top" src="../../assets/img/ecommerce2.jpg" alt="Card image cap" width = 100% height="100">
                        <div class="card-body">
                          <h5 class="card-title">1200 points</h5>
                          <p class="card-text">Purchase items from any e-commerce website and get exciting 30%off worth up to Rs.5000</p>
                          <button type="button" class="btn-get-started scrollto button-style"
                                    id="btn3" style="margin-top: auto;" onclick="location.href='?redeem=3'">Redeem Now</button>
                        </div>
                      </div>
                  </div>
                  <div class="card-group">
                    <div class="card">
                        <img class="card-img-top" src="../../assets/img/ecommerce.jpg" alt="Card image cap" width = 100% height="100">
                        <div class="card-body">
                          <h5 class="card-title">1700 points</h5>
                          <p class="card-text">Purchase items from any e-commerce website and get exciting 50%off worth up to Rs.5500</p>
                          <button type="button" class="btn-get-started scrollto button-style"
                                    id="btn4" style="margin-top: auto;" onclick="location.href='?redeem=4'">Redeem Now</button>
                        </div>
                      </div>
                    <div class="card" style="border: solid 1px  black">
                      <img class="card-img-top" src="../../assets/img/goa.jpg" alt="Card image cap" width = 100% height="100">
                      <div class="card-body">
                        <h5 class="card-title">2500 points</h5>
                        <p class="card-text">Get your family for goa holidays, expenses offered by us worth Rs. 20000</p>
                        <button type="button" class="btn-get-started scrollto button-style"
                        id="btn5" style="margin-top: auto;" onclick="location.href='?redeem=5'">Redeem Now</button>
                      </div>
                    </div>
                      <div class="card">
                        <img class="card-img-top" src="../../assets/img/dubai.jpg" alt="Card image cap" width = 100% height="100">
                        <div class="card-body">
                          <h5 class="card-title">3500 points</h5>
                          <p class="card-text">Get your family for Dubai holidays, expenses offered by us worth Rs. 25000</p>
                          <button type="button" class="btn-get-started scrollto button-style"
                          id="btn6" style="margin-top: auto;" onclick="location.href='?redeem=6'">Redeem Now</button>
                        </div>
                      </div>
                  </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>





  <!-- adding pop here -->
  <style type="text/css">
	/* h1 {
	  text-align: center; 
	  color: #06D85F;
	  margin: 80px 0;
	} */
  .card {
    border: solid 1px  black;
    margin: 10px 10px 10px 10px;
    line-height: 1.5;
    font-size: 15px;
  }

  .button-style {
                background-color: rgb(238, 129, 56);
               position: relative;
               display: inline-block;
               border: solid 2px black;
               width: 100%;
               height:50px;
               font-size:15px;
               color: white;
               text-align: centre;
            }
	.owerlay {
	  position: fixed;
	  top: 0;
	  bottom: 0;
	  left: 0;
	  right: 0;
	  z-index: 2;
	  background: rgba(0, 0, 0, 0.7);
	  transition: opacity 500ms;
	  visibility: hidden;
	  opacity: 0;
	}
	.owerlay:target {
	  visibility: visible;
	  opacity: 1;
	}

	.popup {
	  margin: 110px auto;
	  padding: 20px;
	  background: #fff;
	  border-radius: 5px;
	  width: 50%;
	  position: relative;
	  z-index: 3;
	  transition: all 5s ease-in-out;
	}

	.popup h2 {
	  margin-top: 0;
	  color: #333; 
	}
	.popup .closepopup {
	  position: absolute;
	  top: 20px;
	  right: 30px;
	  transition: all 200ms;
	  font-size: 30px;
	  font-weight: bold;
	  text-decoration: none;
	  color: #333;
	}
	.popup .closepopup:hover {
	  color: #06D85F;
	}
	.popup .kontent {
	  max-height: 30%;
	  overflow: auto;
	} 
	</style>


<!-- POPup here -->


<div id="popup00" class="owerlay" style="padding-top: 70px;text-align: center;overflow:scroll;">
		    <div class="popup" style="font-size: 2em;font-weight:bold; background-size: cover;">
            <div style="text-align: center;color: black;font-size: 15px;"><b>Based on your location, nearby NGO's</b></div>
		      <a class="closepopup" style="color: black;font-size: 1.5em;opacity: 1;font-style:calibri;" href="#">&times;</a>
              <p style="text-align: center;color: black;font-size: 15px;"><b>Select anyone to send your donated items/money</b></p>
 
  <div class="container"> 
  
  <br/>
  <div class="row">
  <div class="col-lg-12"> 
  <div class="wrapper" style="width:100%;"> 
  
   
<?php 
 

$fetchpin = $_SESSION['pincode'];
$conn = mysqli_connect($servername, $username, $password, $database);

$sql = "SELECT * FROM registered_ngo WHERE ngopin='$fetchpin' ORDER BY id DESC LIMIT 8";
$result =  mysqli_query($conn, $sql);

$num = mysqli_num_rows($result);
//$current_donated_item="";


if($num)
{
    while ($row = mysqli_fetch_assoc($result)){
        
        
     
    echo '<div class="buttons">';
 


      $donarname = $_SESSION['firstname']." ".$_SESSION['lastname'];
      $current_donated_item=$_SESSION['current_donated_item'];
      $donar_email_add = $_SESSION['email'];
      $donar_contact_no = $_SESSION['mobile'];
      $donar_address = $_SESSION['address'];
      $donar_pincode = $_SESSION['pincode'];
      $donar_occupation = $_SESSION['occupation'];
      
     // '. $row['ngoname'].'
  
      
      echo '<a href="#"><button onclick="sendmailtongo(\''.$row['ngoemail'].'\', \''.$donar_email_add .'\', \''.$donar_contact_no .'\', \''.$donar_address .'\', \''.$current_donated_item .'\', \''.$donarname .'\'); 
                                         sendmailtodonar(\''.$donar_email_add .'\',\''.$row['ngoemail'].'\', \''.$row['ngocontact'].'\', \''.$row['ngoname'].'\' , \''.$row['ngoaddress'].'\', \''.$current_donated_item .'\') "><span style="font-weight:bold;"> NGO-Name: '. $row['ngoname']. ', NGO-Mail:' . $row['ngoemail']. ', NGO-Contact:' . $row['ngocontact']. '</span></button></a>'; 
    echo '</div>'; 
  
  
    }

    echo"


    
            <script> 

                function done()
                {
                  alert('Thanks for donating. Donation info send to you registered EMail. Your donated info also send to NGO selected by you. They will contact you soon!! Keep your food safe till then.');
                }
                
                function sendmailtongo(ngomail, donarmail, donarcontact, donaraddress, donateditems, donarname){
                  console.log(donarmail);
                  console.log('hi');
                  
                   var name = 'Food Filler Company';
                   
                   var subject = 'Pick-Up donated Item';
                   var message = 'Please pickup all these items from donar as soon as possible';
                   var thank   = 'Thanks and Regards';
                   var team    = 'Shivam Shashwat Ajay Rahul , FoodFiller-Team';
                   var foodemail    = 'nawabhiba700@gmail.com';
             
            
                var Body=   'Company-Name:'+name+
                            '<br><br><br>Donar-Information is given here'+ 
                            '<br>Donar-Name: '+donarname+ 
                            '<br>Donar-Email: '+donarmail+ 
                            '<br>Donar-Contact No: '+donarcontact+
                            '<br>Donated-Items: '+donateditems+ 
                            '<br>Message: '+message+
                            '<br>If any delay happen, please Contact to Donar by contact Information provided'+
                            '<br><br>'+
                            '<br>'+thank+
                            '<br>Team: '+team+
                            '<br>Food-Filler Mail: '+foodemail; 
            
                  Email.send({
                    SecureToken:'fbf31702-bb7f-4a4e-9c1c-4ccf17ee777f',
                    To: ngomail,
                    From: 'nawabhiba700@gmail.com',
                    Subject: subject,
                    Body: Body
                  }).then(
                    message =>{
                      //console.log (message);
                      if(message=='OK'){
                      alert('Thanks for Donation, Check your registered mail for more Information');
                      }
                      else{
                        console.error (message);
                        alert('There is error at sending message. ')
                        
                      }
            
                    }
                  );
            
                }

                
                function sendmailtodonar(donarmail, ngomail, ngocontact, ngoname, ngoaddress, donateditems){
                  console.log(donarmail);
                  console.log('hi');
                  
                   var name = 'Food Filler Company';
                   
                   var subject = 'Your donated items Info';
                   var message = 'Your donated items will be picked-up as soon as possible';
                   var thank   = 'Thanks and Regards';
                   var team    = 'Shivam Shashwat Ajay Rahul , FoodFiller-Team';
                   var foodemail    = 'nawabhiba700@gmail.com';
             
            
                var Body=   'Company-Name:'+name+
                            '<br><br><br>Your Donated Items'+
                            '<br>Donated-Items: '+donateditems+ 
                            '<br><br><br>Given NGO will received your donation as soon as possible'+
                            '<br><br>NGO-Information is given here'+ 
                            '<br>NGO-Name: '+ngoname+ 
                            '<br>NGO-Email: '+ngomail+ 
                            '<br>NGO-Contact No: '+ngocontact+
                            '<br>NGO-Address: '+ngoaddress+
                            
                            '<br>Message: '+message+
                            '<br>If any delay happen, please Contact to NGO by contact Information provided'+
                            '<br><br>'+
                            '<br>'+thank+
                            '<br>Team: '+team+
                            '<br>Food-Filler Mail: '+foodemail; 
            
                  Email.send({
                    SecureToken:'fbf31702-bb7f-4a4e-9c1c-4ccf17ee777f',
                    To: donarmail,
                    From: 'nawabhiba700@gmail.com',
                    Subject: subject,
                    Body: Body
                  }).then(
                    message =>{
                      //console.log (message);
                      if(message=='OK'){
                      console.log('Your mail has been send. Thank you for connecting.');
                      }
                      else{
                        console.error (message);
                        //alert('There is error at sending message. ')
                        
                      }
            
                    }
                  );
            
            
                }
            



                  function isNotEmpty(caller) {
                     
                    return true;
                }

            </script>
    ";

    
} 
?>
   </div>
   </div>
   </div>
   </div> 
		  </div>
		  </div>


  <!-- End popup here -->











  <div class="container">
    <div class="row">
      <div class="profile-nav col-md-3">
          <div class="panel">
              <div class="user-heading round">
                  <a href="#">
                      <!-- <img src="..\assets\img\prof1.jpg" alt=""> -->
                      <img src="..\..\assets\img\users_profile_pic\<?php echo $_SESSION['avatar']; ?>" alt="">

                      
                       
                      
                  </a>
                  <h1><?php echo $_SESSION['firstname']; ?> <?php echo $_SESSION['lastname']; ?></h1>
                  <p><?php echo $_SESSION['email']; ?></p>
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
                      <div class="bio-row">
                          <p><span>Birthday </span>: <?php echo $_SESSION['dob']; ?></p>
                      </div>
                      <div class="bio-row">
                          <p><span>Email</span>: <?php echo $_SESSION['email']; ?></p>
                      </div>
                      <div class="bio-row">
                          <p><span>Contact No </span>: <?php echo $_SESSION['mobile']; ?></p>
                      </div>
                      <div class="bio-row">
                          <p><span>Occupation </span>: <?php echo $_SESSION['occupation']; ?></p>
                      </div>
                      <div class="bio-row">
                          <p><span>Address </span>: <?php echo $_SESSION['address']; ?></p>
                      </div>
                      <div class="bio-row">
                          <p><span>Pincode </span>: <?php echo $_SESSION['pincode']; ?></p>
                      </div>
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

  

<script>
 var ret = <?php echo $_SESSION['remain']; ?>;
    document.querySelector('#btn1').addEventListener('click', ()=>{
      if(ret>=200)
      {
        ret -= 200;
        document.querySelector('#btn1').innerText = 'QW238DM4F';
        alert('Credits remaining in your acoount = '+ret +'\n\nsoon our executive will contact you. \n\nUse this QW238DM4F redeem code when asked');
      }
        else
      alert('insufficient credits!!');
    }) 

    document.querySelector('#btn2').addEventListener('click', ()=>{
      if(ret>=600)
      {
        ret -= 600;
        document.querySelector('#btn2').innerText = 'QW238DM4F';
        alert('Credits remaining in your acoount = '+ret +'\n\nsoon our executive will contact you. \n\nUse this QW238DM4F redeem code when asked');
      }
        else
      alert('insufficient credits!!');
    })

    document.querySelector('#btn3').addEventListener('click', ()=>{
      if(ret>=1200)
      {
        ret -= 1200;
        document.querySelector('#btn3').innerText = 'QW238DM4F';
        alert('Credits remaining in your acoount = '+ret +'\n\nsoon our executive will contact you. \n\nUse this QW238DM4F redeem code when asked');
      }
        else
      alert('insufficient credits!!');
    })

    document.querySelector('#btn4').addEventListener('click', ()=>{
      if(ret>=1700)
      {
        ret -= 1700;
        document.querySelector('#btn4').innerText = 'QW238DM4F';
        alert('Credits remaining in your acoount = '+ret +'\n\nsoon our executive will contact you. \n\nUse this QW238DM4F redeem code when asked');
      }
        else
      alert('insufficient credits!!');
    })

    document.querySelector('#btn5').addEventListener('click', ()=>{
      if(ret>=2500)
      {
        ret -= 2500;
        document.querySelector('#btn5').innerText = 'QW238DM4F';
        alert('Credits remaining in your acoount = '+ret +'\n\nsoon our executive will contact you. \n\nUse this QW238DM4F redeem code when asked');
      }
        else
      alert('insufficient credits!!');
    })

    document.querySelector('#btn6').addEventListener('click', ()=>{
      if(ret>=3500)
      {
        ret -= 3500;
        document.querySelector('#btn2=6').innerText = 'QW238DM4F';
        alert('Credits remaining in your acoount = '+ret +'\n\nsoon our executive will contact you. \n\nUse this QW238DM4F redeem code when asked');
      }
        else
      alert('insufficient credits!!');
    })
    </script>
   
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

<!-- // updating redeem points // -->
<?php 
$fetchemail = $_SESSION['email'];              
// connect to the database
$db = mysqli_connect($servername, $username, $password, $database); 

$donated_query = "SELECT * FROM users WHERE email='$fetchemail' ";
$donated_result = mysqli_query($db, $donated_query); 
$donated_row = mysqli_fetch_assoc($donated_result);  
$_SESSION['remain'] = $donated_row['overall_points'];
$remain = $_SESSION['remain'];

if($_REQUEST){
    if($_REQUEST['redeem']==1 && $_SESSION['remain']>=200)
    {$remain -= 200;}
    if($_REQUEST['redeem']==2 && $_SESSION['remain']>=600)
    {$remain -= 600;}
    if($_REQUEST['redeem']==3 && $_SESSION['remain']>=1200)
    {$remain -= 1200;}
    if($_REQUEST['redeem']==4 && $_SESSION['remain']>=1700)
    {$remain -= 1700;}
    if($_REQUEST['redeem']==5 && $_SESSION['remain']>=2500)
    {$remain  -= 2500;}
    if($_REQUEST['redeem']==6 && $_SESSION['remain']>=3500)
    {$remain -= 3500;}
mysqli_query($db, "UPDATE users SET overall_points =$remain  WHERE email = '$fetchemail'");
echo '<script> location.replace("profile.php"); </script>';
echo $remain;
$_SESSION['remain']=$remain;
}



?>