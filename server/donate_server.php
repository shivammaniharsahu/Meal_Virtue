
<?php 
include "../config/dbconfig.php"; 

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
     
    $event = $_POST["event"];
    $fooditem = $_POST["fooditem"];
    $plate = $_POST["plate"];
    $weight = $_POST["weight"];
     
    $upi = $_POST["upi"];
    $money = $_POST["money"];  
    if(empty($money)) $money= '0';
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
      
     
	 
      header("Location: DONAR/profile.php#popup00");  
	}
?>