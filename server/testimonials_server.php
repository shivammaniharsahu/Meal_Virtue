
<?php 
include "../../config/dbconfig.php"; 


 if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		 
      $conn = mysqli_connect($servername, $username, $password, $database); 

 


      $t_address=$_SESSION['address'];  
      $t_name = $_SESSION['firstname']. ' ' .$_SESSION['lastname'];
      $test_text = $_POST["test_text"]; 


      
      
    

      
      $sql = "INSERT INTO `testimonial` (`name`, `address`, `testimonial_text`) 
                                 VALUES ('$t_name', '$t_address', '$test_text')";
      $t_result =  mysqli_query($conn, $sql); 

      header("Location:../../templates/TESTIMONIAL/testimonial.php"); 
     
 }
    

?>