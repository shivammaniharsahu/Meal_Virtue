
<?php 
  include "../config/dbconfig.php"; 

  session_start();
  include "../server/donate_server.php";  


  if (!isset($_SESSION['email'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: DONAR/login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['email']);
  	header("location: landing.php");
  }
?> 


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <link rel="icon" href="../assets/img/favicon.png" type="image/gif" sizes="16x16">
  <title>Meal-Virtue: Working for the needy</title>
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
  
  <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        margin-top:30px;
        display: block;
  margin-left: auto;
  margin-right: auto;
        height: 80%;
        width:80%;
        text-align:center;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
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
    <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200">
      <h1>Want to do service to humanity</h1> 
      <h2>Your donations can help someone to have a day's meal</h2>
      <div class="d-flex align-items-center">
        <i class="bx bxs-right-arrow-alt get-started-icon"></i>
        <a href="NGO/ngo_o_profile.php" class="btn-get-started scrollto">Get to donate</a>
      </div>
    </div>
  </section><!-- End Hero -->
  
<!-- latest registered NGO's -->
 
<!-- End other NGO's table -->

<!-- 
 map starts here
   -->
   <div style="text-align: center;color: black;font-size: 23px;"><b><u>NGO near your location, see the name and donate</u></b></div>
<div id="map">
</div> 
    <script>
      var customLabel = {
        restaurant: {
          label: 'R'
        },
        bar: {
          label: 'B'
        }
      };
     //Find live location user
     var lt;
     var ln;
     GetGeolocation();
     function GetGeolocation() 
     { 
               navigator.geolocation.getCurrentPosition(GetCoords);
     }
     function GetCoords(position){
      
      lt=position.coords.latitude;
      ln=position.coords.longitude;
      // alert(lt); 
      // alert(ln); 
      // alert(position.coords.accuracy); 
      }
    //End live location of user
    icon: { url: "http://maps.google.com/mapfiles/ms/icons/blue-dot.png"   }

        function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          //center: new google.maps.LatLng(25.405754, 81.876980),
          center: new google.maps.LatLng(lt,ln), 
          zoom: 12
        });
        //user marker
        let marker = new google.maps.Marker({
        map: map,
        position: {lat: lt, lng: ln},
        icon: {
          url: "http://maps.google.com/mapfiles/ms/icons/green-dot.png"
        }
      });
        var infoWindow = new google.maps.InfoWindow;
          // Change this depending on the name of your PHP or XML file
          downloadUrl('https://storage.googleapis.com/mapsdevsite/json/mapmarkers2.xml', function(data) {
            var xml = data.responseXML;
            var markers = document.getElementsByTagName('markers');
            //console.log(markers);
            var i=0;
            Array.prototype.forEach.call(markers[0].childNodes, function(markerElem) 
            {
                    var id = markers[0].childNodes[i].getAttribute('id');
                    var name = markers[0].childNodes[i].getAttribute('name');
                    var address = markers[0].childNodes[i].getAttribute('address');
                    var type = markers[0].childNodes[i].getAttribute('type');
                    var lat=markers[0].childNodes[i].getAttribute('lat');
                    var lng=markers[0].childNodes[i].getAttribute('lng');
                    var mob=markers[0].childNodes[i].getAttribute('mobile_no');
                    //console.log(id);
                    console.log(name);
                    //console.log(address);
                    // console.log(type);
                    // console.log(lat);
                    // console.log(lng);
                    var point = new google.maps.LatLng(
                        parseFloat(markers[0].childNodes[i].getAttribute('lat')),
                        parseFloat(markers[0].childNodes[i].getAttribute('lng')));
                    var infowincontent = document.createElement('div');
                    var strong = document.createElement('strong');
                    strong.textContent = name
                    infowincontent.appendChild(strong);
                    infowincontent.appendChild(document.createElement('br'));
                    var text = document.createElement('text');
                    text.textContent = address
                    infowincontent.appendChild(text);
                    var icon = customLabel[type] || {};
                    var marker = new google.maps.Marker({
                        map: map,
                        position: point,
                        label: icon.label
                    });
                    marker.addListener('click', function() {
                        infoWindow.setContent(infowincontent);
                        infoWindow.open(map, marker);
                    });
                    i++;
            });
          });
        }
      function downloadUrl(url, callback) {
        var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;

        request.onreadystatechange = function() {
          if (request.readyState == 4) {
            request.onreadystatechange = doNothing;
            callback(request, request.status);
          }
        };
        request.open('GET', url, true);
        request.send(null);
      }
      function doNothing() {}
    </script>
    <script defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCPKOD1-Gxhg9YvhLKl8lPFokjSBY3Cy-E&callback=initMap">
    </script>

<!-- map ends here -->


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
 
<script src="../assets/js/donate.js"></script>

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

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 
<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>

</body>

</html>

<?php
//require("phpsqlajax_dbinfo.php");

function parseToXML($htmlStr)
{
$xmlStr=str_replace('<','&lt;',$htmlStr);
$xmlStr=str_replace('>','&gt;',$xmlStr);
$xmlStr=str_replace('"','&quot;',$xmlStr);
$xmlStr=str_replace("'",'&#39;',$xmlStr);
$xmlStr=str_replace("&",'&amp;',$xmlStr);
return $xmlStr;
}
// Opens a connection to a MySQL server
$connection=mysqli_connect($servername, $username, $password, 'food_filler_db');  
 $query = "SELECT * FROM registered_ngo";
$result = mysqli_query($connection, $query);
$testimonial_num = mysqli_num_rows($result);

//header("Content-type: text/xml");

// Start XML file, echo parent node
echo "<?xml version='1.0' ?>";
echo '<markers>';
$ind=0;
// Iterate through the rows, printing XML nodes for each
while ($row = @mysqli_fetch_assoc($result)){
  // Add to XML document node
  echo '<div ';
  echo 'id="' . $row['id'] . '" ';
  echo 'name="' . parseToXML($row['ngoname']) . '" ';
  echo 'address="' . parseToXML($row['ngoaddress']) . '" ';
  echo 'lat="' . $row['latitude'] . '" ';
  echo 'lng="' . $row['longitude'] . '" ';
  echo '></div>';
  $ind = $ind + 1;
}
// End XML file
echo '</markers>';

?>