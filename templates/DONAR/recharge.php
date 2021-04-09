





<?php 
  include "../../config/dbconfig.php";
  include('../../server/server.php') ; 
  //include "name.php";
 //session_start();
   


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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		
  <!-- Template Main CSS File -->
  <link href="../../assets/css/style.css" rel="stylesheet">
  <link href="../../assets/css/profile_page.css" rel="stylesheet">
  <link href="../../assets/css/ngocard.css" rel="stylesheet">

  
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
                <li><a href="../../templates/registeredngo.php">Registered Organisation</a></li> 
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
    <div class="container text-center position-relative"  data-aos-delay="100">
      <h1>Hello <?php echo $_SESSION['firstname']; ?></h1>   
      <h2>You have <?php echo $_SESSION['remain']; ?> redeem points from what you have donoted</h2>
	   <h2>Drop Details of your Edible items here, to have memory of your food stock <br> And check Nutrition values of your stuffs</h2>
   </div>
</section>
<!-- End Hero -->


 <!-- recharge entry table -->
<div class="container"  style="font-size: 15px;">
	<br />
	<br />
	<div class="row">
		<div class="col-md-10">
		<div class="bill-to">
			<div id="show">
			<p class="h5 mb-xs text-dark text-semibold">
				<strong>Add Products Here</strong>
			</p>
			</div>
			</div>
		</div>
		<div class="col-md-2">
		<div class="bill-data text-right">
			<p class="mb-none">
			<span class="text-dark">Date:</span>
			</p>
			<p class="mb-none">
			<span class="value"><?php echo date("Y-m-d h:i:sa");?></span>
			</p>
		</div>
		</div>
	</div>
	<div class="form-group">
		<form name="add_name" id="add_name" action = "recharge.php">
			<div class="table-responsive" >
				<table class="table table-bordered" id="dynamic_field">
				<thead>
						<tr class="h4 text-dark">
						<th id="cell-id" class="text-semibold"> #</th>
						<th id="cell-item" class="text-semibold">Products</th>
						<th id="cell-item" class="text-semibold">Quantity</th>
						<th id="cell-item" class="text-semibold">Expiry Date</th>
						</tr>
					</thead>
					<tr>
						<td><h4>1</h4></td>
						<td><input type="text" class="form-control" aria-label="Text input with checkbox" name="item[]" id="item"></td>
						<td><input type="number" name="qty[]" id="qty" min="1" style="width:70px;" id="qty"></td>
						<td><input type="date" name="doe[]" placeholder="20-10-2020" value="<?php echo $dob; ?>" id="doe" ></td>
						<td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>
					</tr>
				</table>
				<input type="button" name="submit" id="submit" class="btn btn-info" value="Submit" />
			</div>
		</form>
	</div>
</div>
	<!-- recharge entry table -->
	
<!-- current food table in your home -->

<div class="container" style="font-size: 15px;">
		
	<table class="table table-hover table-bordered table-fluid" id="myTable">
	<thead class="thead">
		<tr>
		<th scope="col">#</th>
		<th scope="col">Item</th>
		<th scope="col">Quantity</th>
		<th scope="col">Date of Expiry</th>
		<th scope="col">Days left</th>
		</tr>
	</thead>
	<tbody>
	<?php 
		$con  = mysqli_connect($servername, $username, $password, $database);
		$email = $_SESSION['email'];
		
		$sql = "SELECT * from recharge_food where email = '$email' ORDER BY doe ASC ";
		$res = mysqli_query($con, $sql);
		$i = 1;
		while($row = mysqli_fetch_assoc($res))
		{
			$item = $row['item'];
			$qty = $row['qty'];
			$doe = $row['doe'];
			$now = date("Y-m-d"); // or your date as well

			$diff = abs(strtotime($doe) - strtotime($now));

			$years = floor($diff / (365*60*60*24));
			$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
			$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
			$total_days = $years*360 + $months*30 + $days;
			if($total_days<=12)
			{
				echo "
			<tr class='table-danger'>
			<th scope='row'>$i</th>
			<form method='post' action = './recharge.php#popup00'>
			<td><input type='hidden' name='fooditem' value='$item' />$item</td>
			<td><input type='hidden' name='weight' value='$qty ' />$qty</td>
			<td>$doe</td>
			<td>$years years $months months $days days
			<button type='submit' class='btn btn-success' id = 'Donate' name = 'Donate'>Donate</button>
			</td>
			</form>
			</tr>
			";
			}
			else
			{echo "
			<tr class='table-success'>
			<th scope='row'>$i</th>
			<td>$item</td>
			<td>$qty</td>
			<td>$doe</td>
			<td>$years years $months months $days days</td>
			</tr>
			";}
			$i = $i +1;;
		}
	?>
	</tbody>
	</table>
	</div>

<script>
    $(document).ready( function () {
    $("#myTable").DataTable();
      });
</script>

<br><br><br><br>

<!-- current food table in your home -->

    <!-- ======= Footer ======= -->





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
		      <a class="closepopup" style="color: black;font-size: 1.5em;opacity: 1;font-style:calibri;" href="./recharge.php">&times;</a>
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
	
		
		echo '<a ><button onclick="sendmailtongo(\''.$row['ngoemail'].'\', \''.$donar_email_add .'\', \''.$donar_contact_no .'\', \''.$donar_address .'\', \''.$current_donated_item .'\', \''.$donarname .'\'); 
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
 
<!-- Nutrition Chart div -->
<div id="chartContainer" style="height: 300px; width: 50%;margin: auto; background-image:url('https://i.imgur.com/XVCnqWS.jpg');">
</div>
 
 <!-- Nutrition Chart div --> 

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
   <!-- <script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script> -->
<script src="https://smtpjs.com/v3/smtp.js"></script>


<!-- <script src="../../assets/vendor/jquery/jquery.min.js"></script> -->
  <script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- <script src="../../assets/vendor/jquery.easing/jquery.easing.min.js"></script> -->
  <script src="../../assets/vendor/php-email-form/validate.js"></script>
  <!-- <script src="../../assets/vendor/waypoints/jquery.waypoints.min.js"></script> -->
  <script src="../../assets/vendor/counterup/counterup.min.js"></script>
  <script src="../../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../../assets/vendor/venobox/venobox.min.js"></script>
  <script src="../../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="../../assets/vendor/aos/aos.js"></script>
  
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> -->

  <!-- Template Main JS File -->
<script src="../../assets/js/main.js"></script>
 
<!-- recharge script -->
<script>

	$(document).ready(function(){
		var i=1;
		$('#add').click(function(){
			i++;
			$('#dynamic_field').append('<tr id="row'+i+'"><td><h4>'+i+'</h4></td><td><input type="text" class="form-control" aria-label="Text input with checkbox" name="item[]" id="item"></td><td><input type="number" name="qty[]" id="qty" min="1" style="width:70px;" id="qty"></td><td><input type="date" name="doe[]" placeholder="20-10-2020" value="<?php echo $dob; ?>" id="doe" ></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
		});
		
		$(document).on('click', '.btn_remove', function(){
			var button_id = $(this).attr("id"); 
			$('#row'+button_id+'').remove();
		});
		
		$('#submit').click(function(){		
			$.ajax({
				url:"./recharge.php",
				method:"POST",
				data:$('#add_name').serialize() ,
				success:function(data)
				{
					$('#add_name')[0].reset();
					window.location.href="recharge.php";
				}
			});
		});
		
	});

</script>
<!-- recharge script -->
<!-- End -->


</body>
</html>

<!-- recharge php -->
<?php
 include "../../config/dbconfig.php"; 
 $connect = mysqli_connect($servername, $username, $password, $database); 
 if($_POST)
	{  
		$number = count($_POST["item"]);
	$email = $_SESSION['email'];
	echo $email;
	if($number > 0)
	{
		for($i=0; $i<$number; $i++)
		{
			if(trim($_POST["item"][$i] != ''))
			{
				$sql = "INSERT INTO recharge_food( `email`, `item`, `qty`, `doe`) VALUES('$email', '".mysqli_real_escape_string($connect, $_POST["item"][$i])."', '".mysqli_real_escape_string($connect, $_POST["qty"][$i])."', '".mysqli_real_escape_string($connect, $_POST["doe"][$i])."' )";
				echo $sql;
				$res = mysqli_query($connect, $sql);
				if($res) echo "success";
				else
				echo "error";

				// entring data to food database
						$item = mysqli_real_escape_string($connect, $_POST["item"][$i]);
						$sql = "SELECT * FROM food where item = '$item'";
						$result = mysqli_query($conn, $sql);
						//echo "<script>console.log($result);</script>";
						
						// pending database check and tally
						$curl = curl_init();

						curl_setopt_array($curl, [
							CURLOPT_URL => "https://edamam-edamam-nutrition-analysis.p.rapidapi.com/api/nutrition-data?ingr=1%20$item",
							CURLOPT_RETURNTRANSFER => true,
							CURLOPT_FOLLOWLOCATION => true,
							CURLOPT_ENCODING => "",
							CURLOPT_MAXREDIRS => 10,
							CURLOPT_TIMEOUT => 30,
							CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
							CURLOPT_CUSTOMREQUEST => "GET",
							CURLOPT_HTTPHEADER => [
								"x-rapidapi-host: edamam-edamam-nutrition-analysis.p.rapidapi.com",
								"x-rapidapi-key: 08d6ee9336msh2f73a6b74739f1ap140c0bjsn869dfd222ff7"
							],
						]);

						$response = curl_exec($curl);
						$err = curl_error($curl);

						curl_close($curl);


						
						$data = json_decode($response);
						$temp = $data->totalNutrients;

						$total_weight = $data->totalWeight;
						$energy_kcal = $temp->ENERC_KCAL->quantity;
						$fat_g = $temp->FAT->quantity;
						$fiber_g = $temp->FIBTG->quantity ;
						$sugar_g = $temp->SUGAR->quantity;
						$protein_g = $temp->PROCNT->quantity ;
						$cholestrol_mg = $temp->CHOLE->quantity;
						$calciium_mg = $temp->CA->quantity;
						$vitaminA_ug = $temp->VITA_RAE->quantity;
						$vitaminC_ug = $temp->VITC->quantity;
						$vitaminD_ug = $temp->VITD->quantity;
						$vitaminE_ug = $temp->TOCPHA->quantity;
						$vitaminB12_ug = $temp->VITB12->quantity;



						$sql  = "INSERT INTO `food`(`item`, `total_weight`, `energy_kcal`, `fat_g`, `fiber_g`, `sugar_g`, `protein_g`, `cholestrol_mg`, `calciium_mg`, `vitaminA_ug`, `vitaminC_ug`, `vitaminB12_ug`, `vitaminD_ug`, `vitaminE_ug`)
								VALUES ('$item', '$total_weight', '$energy_kcal', '$fat_g', '$fiber_g', '$sugar_g', '$protein_g', '$cholestrol_mg', '$calciium_mg', '$vitaminA_ug', '$vitaminC_ug', '$vitaminB12_ug', '$vitaminD_ug', '$vitaminE_ug')";
						$result =   mysqli_query($conn, $sql);

						if($result)
							echo "<script>console.log($response)</script>	";
							else
							echo "error";

						}
				// entring data to food database

				
			}
		
	//	echo "Data Inserted";
	}
	else
	{
		//echo "Please Enter Name";
	}

	
	}
	

?>
<!-- recharge php -->


<!-- send mail to ngo -->
<?php 
	include "../../config/dbconfig.php"; 

	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		
		$event = "home";
		$fooditem = $_POST["fooditem"];
		$plate = " ";
		$weight = $_POST["weight"];
		echo $fooditem;
		$upi = " ";
		$money = 0;  
		if(empty($money)) $money= '0';
		$errors = array(); 
	
	
		$earned_points=0;

		//Added for mail
		$current_donated_item="";

		$points = $weight;

		if(empty($fooditem)) $fooditem= 'Rs. '. $money;

	
	
		$conn = mysqli_connect($servername, $username, $password, $database); 


	
		$email= $_SESSION['email'];

		$total_points_earned = $_SESSION['earned_points'] + $points; 


		$temp_name_t = $_SESSION['firstname']. ' ' .$_SESSION['lastname'];
		$temp_city_t = $_SESSION['address'];
		
	
		//ADDED for mail 

		$_SESSION['current_donated_item']= $fooditem . '<br>Food donated in Kg:' . $weight . '<br>Number of plates food donated:' . $plate . '<br>Money donated: Rs.'. $money;
		
		// update querry for overall_points
		$res2 = mysqli_query($conn, "SELECT * FROM users WHERE `users`.`email` = '$email'");
		$donated_row = mysqli_fetch_assoc($res2);
		$donated_row['overall_points'] = $donated_row['overall_points'] + $total_points_earned;
		$res3 = $donated_row['overall_points'];
		mysqli_query($conn, "UPDATE `users` SET `overall_points` = $res3  WHERE `users`.`email` = '$email'");
		// end update

		$sql = "INSERT INTO `donate` (`event`, `fooditem`, `plate`, `weight`, `upi`, `money`, `email`, `pointsearned`,`d_name`,`d_address`) 
		VALUES ('$event', '$fooditem', '$plate', '$weight', '$upi', '$money', '$email', '$points','$temp_name_t','$temp_city_t')";
		$result =  mysqli_query($conn, $sql);
		
		
			$sql = "DELETE FROM `recharge_food` WHERE email = '$email' AND item = '$fooditem'";
			$result =  mysqli_query($conn, $sql);
		}

?>
<!-- send mail to ngo -->

<!-- Nutrion chart php -->
<?php 
	include "../../config/dbconfig.php";
	$conn = mysqli_connect($servername, $username, $password, $database);
	$sql = "SELECT DISTINCT `item` from recharge_food where email = '$email'";
		$res = mysqli_query($conn, $sql);
		$n =0;
		$finalarray = array();
		while ($row = mysqli_fetch_assoc($res))
		{ 
			$item = $row['item'];
			$sql2 = "SELECT * FROM food WHERE item = '$item'";
			$res2 = mysqli_query($conn, $sql2);
			$arrayitem = array();
			//array_push($arrayitem, $item);
			 $row2 = mysqli_fetch_array($res2);
			if($row2)
			{ 
				if($row2['total_weight'] > 0)
				{$n = $n +1;
			  array_push($finalarray, $row2);}
		    }
		}
	
		
		    $enarray = array();
			for($j = 0; $j <$n;$j=$j+1)
			{  
				array_push($enarray, array("y"=>$finalarray[$j][3], "label" => $finalarray[$j][1]));
			}
			$fatarray = array();
			for($j = 0; $j <$n;$j=$j+1)
			{  
				array_push($fatarray, array("y"=>$finalarray[$j][4], "label" => $finalarray[$j][1]));
			}
			$fiberarray = array();
			for($j = 0; $j <$n;$j=$j+1)
			{  
				array_push($fiberarray, array("y"=>$finalarray[$j][5], "label" => $finalarray[$j][1]));
			}
			$sugararray = array();
			for($j = 0; $j <$n;$j=$j+1)
			{  
				array_push($sugararray, array("y"=>$finalarray[$j][6], "label" => $finalarray[$j][1]));
			}
			$proteinarray = array();
			for($j = 0; $j <$n;$j=$j+1)
			{  
				array_push($proteinarray, array("y"=>$finalarray[$j][7], "label" => $finalarray[$j][1]));
			}
			$cholestarray = array();
			for($j = 0; $j <$n;$j=$j+1)
			{  
				array_push($cholestarray, array("y"=>$finalarray[$j][8], "label" => $finalarray[$j][1]));
			}
			$calciumarray = array();
			for($j = 0; $j <$n;$j=$j+1)
			{  
				array_push($calciumarray, array("y"=>$finalarray[$j][9], "label" => $finalarray[$j][1]));
			}
			$vitAarray = array();
			for($j = 0; $j <$n;$j=$j+1)
			{  
				array_push($vitAarray, array("y"=>$finalarray[$j][10], "label" => $finalarray[$j][1]));
			}
			$vitCarray = array();
			for($j = 0; $j <$n;$j=$j+1)
			{  
				array_push($vitCarray, array("y"=>$finalarray[$j][11], "label" => $finalarray[$j][1]));
			}
			$vitBarray = array();
			for($j = 0; $j <$n;$j=$j+1)
			{  
				array_push($vitBarray, array("y"=>$finalarray[$j][12], "label" => $finalarray[$j][1]));
			}
			$vitDarray = array();
			for($j = 0; $j <$n;$j=$j+1)
			{  
				array_push($vitDarray, array("y"=>$finalarray[$j][13], "label" => $finalarray[$j][1]));
			}
			$vitEarray = array();
			for($j = 0; $j <$n;$j=$j+1)
			{  
				array_push($vitEarray, array("y"=>$finalarray[$j][14], "label" => $finalarray[$j][1]));
			}
			
		
?>
<!-- Nutrion chart php -->

<!-- Nutrition Chart js-->
<script>
    window.onload = function () {
    var chart = new CanvasJS.Chart("chartContainer",
    {
		backgroundColor: "transparent",
		
      title:{
        text: "Nutrition Chart of your food items"
	  },
	  animationEnabled: true,
	  animationDuration: 2000,
	  exportFileName: "Nutrition Chart",
	  dynamicUpdate: true,
      toolTip: {
        shared: true
      },
      axisY:{
        title:"Values"
      },
      axisX:{
        title: "Food Items"

      },
      data: [
      {
        type: "stackedArea",
        name: "Total Energy (Kcal)",
        showInLegend: "true",
        dataPoints:<?php echo json_encode($enarray, JSON_NUMERIC_CHECK); ?>
      },      {
        type: "stackedArea",
        name: "Fat (g)",
        showInLegend: "true",
        dataPoints: <?php echo json_encode($fatarray, JSON_NUMERIC_CHECK); ?>
      },      {
        type: "stackedArea",
        name: "Fiber (g)",
        showInLegend: "true",
        dataPoints: <?php echo json_encode($fiberarray, JSON_NUMERIC_CHECK); ?>
      },       {
        type: "stackedArea",
        name: "Sugar (g)",
        showInLegend: "true",
        dataPoints:<?php echo json_encode($sugararray, JSON_NUMERIC_CHECK); ?>
      },      {
        type: "stackedArea",
        name: "Protein (g)",
        showInLegend: "true",
        dataPoints: <?php echo json_encode($proteinarray, JSON_NUMERIC_CHECK); ?>
      },      {
        type: "stackedArea",
        name: "Cholestrol (mg)",
        showInLegend: "true",
        dataPoints: <?php echo json_encode($cholestarray, JSON_NUMERIC_CHECK); ?>
      },       {
        type: "stackedArea",
        name: "Calcium (mg)",
        showInLegend: "true",
        dataPoints:<?php echo json_encode($calciumarray, JSON_NUMERIC_CHECK); ?>
      },      {
        type: "stackedArea",
        name: "Vitamin A (µg)",
        showInLegend: "true",
        dataPoints: <?php echo json_encode($vitAarray, JSON_NUMERIC_CHECK); ?>
      },      {
        type: "stackedArea",
        name: "Vitamin C (µg)",
        showInLegend: "true",
        dataPoints: <?php echo json_encode($vitCarray, JSON_NUMERIC_CHECK); ?>
      },       {
        type: "stackedArea",
        name: "Vitamin B (µg)",
        showInLegend: "true",
        dataPoints:<?php echo json_encode($vitBarray, JSON_NUMERIC_CHECK); ?>
      },      {
        type: "stackedArea",
        name: "Vitamin D (µg)",
        showInLegend: "true",
        dataPoints: <?php echo json_encode($vitDarray, JSON_NUMERIC_CHECK); ?>
      },      {
        type: "stackedArea",
        name: "Vitamin E (µg)",
        showInLegend: "true",
        dataPoints: <?php echo json_encode($vitEarray, JSON_NUMERIC_CHECK); ?>
      }

      ]
    });

    chart.render();
  }
 </script>
<script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<!-- Nutrition Chart js-->


