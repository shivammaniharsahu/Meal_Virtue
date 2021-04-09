
<?php 
  include "../config/dbconfig.php";  
  session_start();
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
  <!-- Google Api Script-->

  <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->

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
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  
  
    
  <!-- new cdn for jquery -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    <script
    src="http://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" ></script>
<!-- new cdn for jquery -->
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
     
          <?php

          if (isset($_SESSION['email'])) {
             echo" <img href='profile.php'  class='nav-avatar' style='height: 40px; width: 40px; -webkit-border-radius: 50%; -moz-border-radius: 50%; border-radius: 50%;'
             src='..\assets\img\prof.jpg'> 
      <button style='border:3px solid #000000;border-radius:8px 0px 8px 0px;'><a href='DONAR/profile.php?logout='1''><b  style='color:#FF7733;font-size:15px;'>Logout</b></a>  </button>
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
      <div class="d-flex align-items-center">
        <i class="bx bxs-right-arrow-alt get-started-icon"></i>
        <a href="NGO/ngo_o_profile.php" class="btn-get-started scrollto">Register your NGO</a>
      </div>
      
    </div>
  </section>
  <!-- End Hero -->



   <!-- Recent 3 registered NGO -->
 


<section>
  <div class="container"> 
  <div style="text-align: center;color: black;font-size: 23px;"><b>Our Latest Registered NGO's</b></div>
  <br/>
  <div class="row">
  
   
<?php 
 
$conn = mysqli_connect($servername, $username, $password, $database);

$sql = "SELECT * FROM registered_ngo ORDER BY id DESC LIMIT 3";
$result =  mysqli_query($conn, $sql);

$num = mysqli_num_rows($result);



if($num)
{
    while ($row = mysqli_fetch_assoc($result)){ 
      ?>
 
     <div class="col-lg-4">
         <div class="wrapper">
            <div class="img-area">
              <div class="inner-area">
              <img src="../assets/img/ngo_profile_pic/<?php echo $row['ngofile'] ?>" alt="">
              </div>
            </div>
            <div class="icon arrow"><i class="fas fa-arrow-left"></i></div>
            <div class="icon dots"><i class="fas fa-ellipsis-v"></i></div>
            <div class="name" style="font-weight:bold;"> <?php echo $row['ngoname'] ?></div>
            <div class="about" style="font-weight:bold;"><?php echo $row['ngoaddress']?> <?php echo  $row['ngopin']?></div>
            <div class="social-icons">
              <a href="#" class="fb"><i class="bx bxl-facebook bx-tada-hover"></i></a>
              <a href="#" class="insta"><i class="bx bxl-instagram bx-tada-hover"></i></a>
              <a href="#" class="twitter"><i class="bx bxl-twitter bx-tada-hover"></i></a>
              <a href="#" class="yt"><i class="bx bxl-linkedin-square bx-tada-hover"></i></a>
            </div>
            <div class="buttons">
            <button><span style="font-weight:bold;">Mail: </span> <?php echo $row['ngoemail'] ?> </button>
            </div>
            <div class="buttons">
            <button><span style="font-weight:bold;">Contact: </span> <?php echo  $row['ngocontact'] ?> </button>
            </div>

            <div class="buttons">
            <button><span style="font-weight:bold;">Registered date: </span> <?php echo $row['registereddate'] ?></button>
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




<!-- other NGO's table -->
<section style="margin-left:20px; margin-right:20px;border:3px solid black;">
<div style="text-align: center;color: black;font-size: 23px;"><b><u>Other Registered NGO's</u></b></div>
<div class="table table-responsive" >
        <?php
        
$conn = mysqli_connect($servername, $username, $password, $database);

$sql = "SELECT * FROM registered_ngo ORDER BY id DESC ";
$result =  mysqli_query($conn, $sql);

$num = mysqli_num_rows($result);
echo '
<table  class="table table-hover" id = "myTable">
<thead>
  <th data-field="id">NGO Id</th>
  <th data-field="name">Name</th> 
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

      ?>
        <tr>
        <td> <?php echo $row['ngoid'] ?></td>
        <td> <?php echo $row['ngoname'] ?></td> 
        <td> <?php echo $row['ngopin'] ?></td>
        <td> <?php echo $row['ngocity'] ?></td>
        <td> <?php echo $row['ngoaddress'] ?></td>
        <td> <?php echo $row['ngocontact'] ?></td>
        <td> <?php echo $row['ngoemail'] ?></td>

        
        <td class='table-success'>  <?php if( $row['ngostatus']=='1') 
             echo '<button style="color:white; background-color:green;width:130px;height:40px;text-align:center;border: 2px solid black;border-radius:20px;font-size:15px;"><b>ACTIVE</b></button>';
             else  
             echo '<button style="color:white; background-color:red;width:130px;height:40px;text-align:center;border: 2px solid black;border-radius:20px;font-size:15px;"><b>INACTIVE</b></button>';
         ?>
         </td>
      </tr>
      
      <?php
    }
}
 
echo '
</tbody>
</table>
';
?>
</div> 
</section>

<script>
    $(document).ready( function () {
    $('#myTable').DataTable();
    } );
</script>
<!-- End other NGO's table -->




<!-- 
 map starts here
   -->
   <div style="text-align: center;color: black;font-size: 23px;"><b><u>Nearby NGO's of your Location</u></b></div>
<div id="map"></div> 
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
  <!-- <script src="../assets/vendor/jquery/jquery.min.js"></script> -->
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- <script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script> -->
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <!-- <script src="../assets/vendor/waypoints/jquery.waypoints.min.js"></script> -->
  <script src="../assets/vendor/counterup/counterup.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/venobox/venobox.min.js"></script>
  <script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>



  <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>  -->
<!-- <script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script> -->

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
$connection=mysqli_connect($servername, $username, $password, $database);  
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
