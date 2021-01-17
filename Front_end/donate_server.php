
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



      
      


      
      $sql = "INSERT INTO `donate` (`event`, `fooditem`, `plate`, `weight`, `upi`, `money`, `email`) 
      VALUES ('$event', '$fooditem', '$plate', '$weight', '$upi', '$money', '$email')";
      $result =  mysqli_query($conn, $sql);
      

      // $_SESSION['total_money'] = 6000;
      // $_SESSION['total_weight'] = 900;
      
	 
      header("Location: ../loginlogout/index.php#popup00");
   // header("Location:fetchedngo.php#popup00");
     
     
	}
?>