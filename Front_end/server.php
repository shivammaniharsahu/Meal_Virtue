<?php
session_start();

// initializing variables
$firstname = "";
$lastname    = "";
$email  = "";
$mobile = "";
$dob = "";
$occupation = "";
$address = "";
$pincode    = "";
$avatar = "";
$errors = array(); 


//donated things  
$donate_weight=0; 
$donate_money=0; 
$earned_points=0; 
$donate_plate=0; 
$donated_left_food_items="";
$donated_recent_item="";

$earned_points=0;




// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'registration' , "3306");

// REGISTER USER
if (isset($_POST['reg_user'])) 
{
  // receive all input values from the form
  $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
  $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $mobile = mysqli_real_escape_string($db, $_POST['mobile']);
  $dob = mysqli_real_escape_string($db, $_POST['dob']);
  $occupation = mysqli_real_escape_string($db, $_POST['occupation']);
  $address = mysqli_real_escape_string($db, $_POST['address']);
  $pincode = mysqli_real_escape_string($db, $_POST['pincode']);
  $avatar = mysqli_real_escape_string($db, $_POST['avatar']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($firstname)) { array_push($errors, "Firstname is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($mobile)) { array_push($errors, "Mobile number is required"); }
  if (empty($dob)) { array_push($errors, "DOB is required"); }
  if (empty($address)) { array_push($errors, "Address is required"); }
  if (empty($pincode)) { array_push($errors, "Pincode is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }


  //donation food_items
   
  $donated_query = "SELECT * FROM donate WHERE email='$email' ";
  $donated_result = mysqli_query($db, $donated_query); 
  $donated_num = mysqli_num_rows($donated_result);
  if($donated_num)
  {
    while ($donated_row = mysqli_fetch_assoc($donated_result)){
       
       $donate_weight = $donate_weight+$donated_row['weight'];
       $donate_money = $donate_money+$donated_row['money'];
       //$earned_points = $earned_points+$donated_row['pointsearned'];
       $donate_plate = $donate_plate+$donated_row['plate']; 
       $donated_left_food_items= $donated_left_food_items . ', '. $donated_row['fooditem'];
 
    }
  }
  $_SESSION['donate_weight'] = $donate_weight;
  $_SESSION['donate_money'] = $donate_money;
  $_SESSION['donate_plate'] = $donate_plate;
  $_SESSION['earned_points'] = $donate_weight + $donate_money + $donate_plate;

  $_SESSION['donated_left_food_items']=$donated_left_food_items;
  

  //end_donated_items





  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
   
  if ($user) { // if user exists 
    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (firstname,lastname, email, mobile, dob, occupation, address, pincode, password, avatar) 
  		VALUES('$firstname','$lastname','$email','$mobile','$dob', '$occupation', '$address', '$pincode','$password', '$avatar')";
  	mysqli_query($db, $query);
    $_SESSION['firstname'] = $firstname;
    $_SESSION['lastname'] = $lastname;
    $_SESSION['email'] = $email;
    $_SESSION['mobile'] = $mobile;
    $_SESSION['dob'] = $dob;
    $_SESSION['occupation'] = $occupation;
    $_SESSION['address'] = $address;
    $_SESSION['pincode'] = $pincode; 
    $_SESSION['avatar'] = $avatar; 
    $_SESSION['success'] = "You are now logged in";
    
     

    // header('location: ../Front_end/profile.html');
    header('location: profile.php'); 
  }
}

// ... 
// ... 

// LOGIN USER
if (isset($_POST['login_user'])) {
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
  
    if (empty($email)) {
        array_push($errors, "Email is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }



  //donation food_items
   
  $donated_query = "SELECT * FROM donate WHERE email='$email' ";
  $donated_result = mysqli_query($db, $donated_query); 
  $donated_num = mysqli_num_rows($donated_result);
  if($donated_num)
  {
    while ($donated_row = mysqli_fetch_assoc($donated_result)){
       
       $donate_weight = $donate_weight+$donated_row['weight'];
       $donate_money = $donate_money+$donated_row['money'];
       $earned_points = $earned_points+$donated_row['pointsearned'];
       $donate_plate = $donate_plate+$donated_row['plate']; 
       $donated_left_food_items= $donated_left_food_items .', '. $donated_row['fooditem'];
 
    }
  }
  $_SESSION['donate_weight'] = $donate_weight;
  $_SESSION['donate_money'] = $donate_money;
  $_SESSION['donate_plate'] = $donate_plate;
  $_SESSION['earned_points'] = $donate_weight + $donate_money + $donate_plate;
  $_SESSION['donated_left_food_items']=$donated_left_food_items;

  //end_donated_items



  
    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
         
        $results = mysqli_query($db, $query);
        if(mysqli_num_rows($results)!=1)
        {
            array_push($errors, "Wrong email/password combination"); 
        }
        else
        {
            while($row = mysqli_fetch_array($results, MYSQLI_ASSOC)){

                $_SESSION['firstname'] = $row['firstname'];
                $_SESSION['lastname'] = $row['lastname'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['mobile'] = $row['mobile'];
                $_SESSION['dob'] = $row['dob'];
                $_SESSION['occupation'] = $row['occupation'];
                $_SESSION['address'] = $row['address'];
                $_SESSION['pincode'] = $row['pincode'];   
                header('location: profile.php'); 
            }
            
        }
 
    }
  }
  
  ?>