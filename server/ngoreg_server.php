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

        $sql = "INSERT INTO `ngotable` (`owneremail`,`ngoname`, `ngocontact`, `ngoemail`, `ngoaddress`, `ngocity`, `ngopin`, `ngofile`,`ngoid`) 
        VALUES ('$t_owneremail', '$t_ngoname', '$t_ngocontact', '$t_ngoemail', '$t_ngoaddress', '$t_ngocity', '$t_ngopin','$ngo_profile_pic_name', '$t_ngoid')";
        $resultt =  mysqli_query($conn, $sql);
        
        header("Location: #");
      }
     
	}
 
  ?>
