


<?php
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
    $t_ngofile = $_POST["ngofile"];
    $t_ngoid = $_POST['ngoid'];
       

      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "registration";
      $conn = mysqli_connect($servername, $username, $password, $database);
      


      $sql = "INSERT INTO `ngotable` (`ownerfirstname`, `ownerlastname`, `owneremail`, `ownercontact`, `ngoname`, `ngocontact`, `ngoemail`, `ngoaddress`, `ngocity`, `ngopin`, `ngofile`,`ngoid`, `ngostatus`) 
      VALUES ('$t_ownerfirstname', '$t_ownerlastname', '$t_owneremail', '$t_ownercontact', '$t_ngoname', '$t_ngocontact', '$t_ngoemail', '$t_ngoaddress', '$t_ngocity', '$t_ngopin','$t_ngofile', '$t_ngoid', '1')";
	  $resultt =  mysqli_query($conn, $sql);
	 
	 header("Location: ngoregister.php");
     
	}
?>