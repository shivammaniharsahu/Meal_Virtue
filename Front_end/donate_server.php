
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
     
    $event = $_POST["event"];
    $fooditem = $_POST["fooditem"];
    $plate = $_POST["plate"];
    $weight = $_POST["weight"];
     
    $upi = $_POST["upi"];
    $money = $_POST["money"];  
    $errors = array(); 
 
 
    $email="";
    $earned_points=0;
    $firstname="";
    $lastname="";
    $address="";

    //Added for mail
    $current_donated_item="";

    $points = $weight + $money + $plate;

    if(empty($fooditem)) $fooditem= 'Rs. '. $money;



   


  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  //if (empty($event)) { array_push($errors, "Event name is required"); }
  //if (empty($fooditem)) { array_push($errors, "Enter food"); }
//   if (!empty($fooditem) && empty($plate) && empty($weight)) { array_push($errors, "Enter donation item in weight or plate"); }
//   if (!empty($upi) && empty($money)) { array_push($errors, "Enter money"); }
  
  
 
       

      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "registration";
      $conn = mysqli_connect($servername, $username, $password, $database); 


 
      $email= $_SESSION['email'];

      $total_points_earned = $_SESSION['earned_points'] + $points; 


      $temp_name_t = $_SESSION['firstname']. ' ' .$_SESSION['lastname'];
      $temp_city_t = $_SESSION['address'];
   
      //ADDED for mail
      $_SESSION['current_donated_item']= $fooditem;
      
      
    

      
      $sql = "INSERT INTO `donate` (`event`, `fooditem`, `plate`, `weight`, `upi`, `money`, `email`, `pointsearned`, `overallpointearned`,`d_name`,`d_address`) 
      VALUES ('$event', '$fooditem', '$plate', '$weight', '$upi', '$money', '$email', '$points', '$total_points_earned','$temp_name_t','$temp_city_t')";
      $result =  mysqli_query($conn, $sql);
      
 
      
	 
      header("Location: profile.php#popup00"); 
     
     
	}
?>