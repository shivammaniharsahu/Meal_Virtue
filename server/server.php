 
   <script src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
<script src="https://smtpjs.com/v3/smtp.js"></script> 
<?php 
include "../../config/dbconfig.php"; 


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
$remain=0;




// connect to the database
$db = mysqli_connect($servername, $username, $password, $database);

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
  //$avatar = mysqli_real_escape_string($db, $_POST['avatar']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);


  $avatar = $_FILES['avatar'];

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



   

    //avatar

        
        $file_name = $avatar['name']; 
        $file_type = $avatar['type'];
        $file_size = $avatar['size'];
        $file_tmp_loc = $avatar['tmp_name'];
        $file_store_location = "../../assets/img/users_profile_pic/".$email. ' ' .$file_name; 
        move_uploaded_file($file_tmp_loc, $file_store_location);

        $users_profile_pic_name =$email. ' ' .$file_name;
        
        if (empty($file_name)) { $users_profile_pic_name= 'prof.jpg';}



  	$query = "INSERT INTO users (firstname,lastname, email, mobile, dob, occupation, address, pincode, password, avatar) 
  		VALUES('$firstname','$lastname','$email','$mobile','$dob', '$occupation', '$address', '$pincode','$password', '$users_profile_pic_name')";
  	mysqli_query($db, $query);
    $_SESSION['firstname'] = $firstname;
    $_SESSION['lastname'] = $lastname;
    $_SESSION['email'] = $email;
    $_SESSION['mobile'] = $mobile;
    $_SESSION['dob'] = $dob;
    $_SESSION['occupation'] = $occupation;
    $_SESSION['address'] = $address;
    $_SESSION['pincode'] = $pincode; 
    $_SESSION['avatar'] = $users_profile_pic_name; 
    $_SESSION['success'] = "You are now logged in";
    $_SESSION['rg'] = "1";
    
      

    // header('location: ../Front_end/profile.html');
    //header('location: ../templates/profile.php'); 
      header( "refresh:3; url= ../DONAR/profile.php" ); 
     //Notification here

     echo"

     <script>
     
     sendn('$email','$password_1', '$firstname', '$mobile', '$dob');
        function sendn(usermail,userpassword, firstname, mobile, dob){
          console.log(usermail);
          console.log('hi');
          
          var name = 'Food Filler Company';
          
          var subject = 'Your Registration Successful';
          var message = 'Please Keep all information safe, Use email and password for login';
          var thank   = 'Thanks and Regards';
          var team    = 'Shivam Shashwat Ajay Rahul , FoodFiller-Team';
          var foodemail    = 'nawabhiba700@gmail.com';
      
      
        var Body=   'Company-Name:'+name+ 
                    '<br><br>Glad to see you here' +
                    '<br>Dear ' +firstname+
                    '<br><br>Your registered Email is: '+ usermail +
                    '<br>Your Password is: '+ userpassword +
                    '<br>Your registered mobile number is: '+ mobile +
                    '<br>Your DOB is: '+ dob +
                    '<br><br>Message: '+message+
                    '<br>If any problem occure please contact Food-Filler Team'+
                    '<br><br>'+
                    '<br>'+thank+
                    '<br>Team: '+team+
                    '<br>Food-Filler Mail: '+foodemail; 
      
          Email.send({
            SecureToken:'fbf31702-bb7f-4a4e-9c1c-4ccf17ee777f',
            To: usermail,
            From: 'nawabhiba700@gmail.com',
            Subject: subject,
            Body: Body
          }).then(
            message =>{
              //console.log (message);
              if(message=='OK'){
              alert('You have successfully registered. Please check your registered Mail for more information !');
              }
              else{
                console.error (message);
                alert('There is error at sending message. ')
                
              }
      
            }
          );
      
        }
      
     
     </script>

     ";

 //Notification End here
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
                $_SESSION['avatar'] = $row['avatar'];
                $_SESSION['remain'] = $row['overall_points'];  
                header('location: ../DONAR/profile.php'); 
            }
            
        }
 
    }
  }







  // Forgot Password
if (isset($_POST['forgot'])) {
    $email = mysqli_real_escape_string($db, $_POST['forgot_email']); 
  
    if (empty($email)) {
        array_push($errors, "Email is required");
    } 
 
 
    if (count($errors) == 0) {
         
        //echo $email;
        $donated_query = "SELECT * FROM users WHERE email='$email' ";
        $donated_result = mysqli_query($db, $donated_query); 
        $donated_num = mysqli_num_rows($donated_result);

        //echo $donated_num;
         
        if($donated_num!=1)
        {
            array_push($errors, "Please INPUT Registered Email Id"); 
        }
        else
        {  
             
                function randomPassword() {
                $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
                $pass = array(); //remember to declare $pass as an array
                $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
                for ($i = 0; $i < 8; $i++) {
                    $n = rand(0, $alphaLength);
                    $pass[] = $alphabet[$n];
                }
                return implode($pass); //turn the array into a string
               }

                $newPassword = randomPassword();

                //echo $newPassword;

                $password = md5($newPassword);

                mysqli_query($db, "UPDATE `users` SET `password` = '$password'  WHERE `users`.`email` = '$email'");
  

                echo"

                <script>
                 
                sendr('$email','$newPassword');
                function sendr(usermail,userpassword){
                    console.log(usermail);
                    console.log('hi');
                    
                     var name = 'Food Filler Company';
                     
                     var subject = 'Your New Password';
                     var message = 'Please Keep it safe';
                     var thank   = 'Thanks and Regards';
                     var team    = 'Shivam Shashwat Ajay Rahul , FoodFiller-Team';
                     var foodemail    = 'nawabhiba700@gmail.com';
               
              
                  var Body=   'Company-Name:'+name+ 
                              '<br><br>Your New Password is: '+ userpassword +
                              '<br><br>Message: '+message+
                              '<br>If any problem occure please contact Food-Filler Team'+
                              '<br><br>'+
                              '<br>'+thank+
                              '<br>Team: '+team+
                              '<br>Food-Filler Mail: '+foodemail; 
              
                    Email.send({
                      SecureToken:'fbf31702-bb7f-4a4e-9c1c-4ccf17ee777f',
                      To: usermail,
                      From: 'nawabhiba700@gmail.com',
                      Subject: subject,
                      Body: Body
                    }).then(
                      message =>{
                        //console.log (message);
                        if(message=='OK'){
                        alert('Your New password Has been sent to your registered Email Id. Please Login With Updated Password');
                        }
                        else{
                          console.error (message);
                          alert('There is error at sending message. ')
                          
                        }
              
                      }
                    );
              
                  }
                </script>

                ";
                //header('location: nwlogin.php');  
        }
 
    }
  }
  
  ?>