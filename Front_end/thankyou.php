
 <?php 

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Food-Filler: Working for the needy</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

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

  
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"/>

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">
  <link href="../assets/css/galery.css" rel="stylesheet">
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
                <li><a href="ngoregister.php">Register Organisation</a></li>
                <li><a href="profile.php">Your Profile</a></li>
                <li class="drop-down"><a href="">Testimonials</a>
                  <ul>
                    <li><a href="leaderboard.php">Our Leaderboard</a></li>
                    <li><a href="testimonial.php">Listen from Users</a></li>
                    <li><a href="thankyou.php">Thank you</a></li>
                  </ul>
                </li>
                <li ><a href="contact.php">Contact US</a></li>
           
            
          </ul>
     
          <?php

          if (isset($_SESSION['email'])) {
             echo" <img href='profile.php'  class='nav-avatar' style='height: 40px; width: 40px; -webkit-border-radius: 50%; -moz-border-radius: 50%; border-radius: 50%;'
             src='..\assets\img\prof.jpg'> 
      <button style='border:3px solid #000000;border-radius:8px 0px 8px 0px;'><a href='profile.php?logout='1''><b  style='color:#006494;font-size:15px;'>Logout</b></a>  </button>
        ";
          };
          ?>



            </nav>
          </div>
        </div>
      </header>

      <section id="hero" class="d-flex align-items-center">
        <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200">
          <h1>Want to know where your food delivered?</h1>
          <h2>We will help you to find whome we are delevering your food .</h2>
          <a href="#abouttt" class="btn-get-started scrollto">Let's Start</a>
        </div>
      </section><!-- End Hero -->

   <br> <br>  

   <h2 style="text-align: center;" id="abouttt">Your donated food</h2>
   <hr style="border: 1px solid #253240;width:50%;">
  
<div class="demo1" >
<ul class="galeria">
  <li>
    <a href="#img1"><img src="..\assets\img\ngoimgs\img1.jpg"></a>
    <div class="text-center"><button style="border:2px solid white;border-radius:5px;width:250px;height:40px;color:white; background-color:#9A6C3B;" >Donated By: Mr. Abc Kumar</button></div>
    <div class="text-center"><button style="border:2px solid white;border-radius:5px;width:250px;height:40px;color:white; background-color:#946E61;">Donated on: 17-Jan-2020</button></div>
    
  </li>
  <li><a href="#img2"><img src="..\assets\img\ngoimgs\img2.jpg"></a>
    <div class="text-center"><button style="border:2px solid white;border-radius:5px;width:250px;height:40px;color:white; background-color:#9A6C3B;" >Donated By: Mr. Shivam Kumar</button></div>
    <div class="text-center"><button style="border:2px solid white;border-radius:5px;width:250px;height:40px;color:white; background-color:#946E61;">Donated on: 16-Jan-2020</button></div>
    </li>
  <li><a href="#img3"><img src="..\assets\img\ngoimgs\img4.jpg"></a>
    <div class="text-center"><button style="border:2px solid white;border-radius:5px;width:250px;height:40px;color:white; background-color:#9A6C3B;" >Donated By: Mr. Rahul Kumar</button></div>
    <div class="text-center"><button style="border:2px solid white;border-radius:5px;width:250px;height:40px;color:white; background-color:#946E61;">Donated on: 17-Jan-2020</button></div>
    </li>
  <li><a href="#img4"><img src="..\assets\img\ngoimgs\img5.jpg"></a>
    <div class="text-center"><button style="border:2px solid white;border-radius:5px;width:250px;height:40px;color:white; background-color:#9A6C3B;" >Donated By: Mr. Rajesh</button></div>
    <div class="text-center"><button style="border:2px solid white;border-radius:5px;width:250px;height:40px;color:white; background-color:#946E61;">Donated on: 17-Jan-2020</button></div>
    </li>
  <li><a href="#img5"><img src="..\assets\img\ngoimgs\img6.jpg"></a>
    <div class="text-center"><button style="border:2px solid white;border-radius:5px;width:250px;height:40px;color:white; background-color:#9A6C3B;" >Donated By: Mr. Shasy Kumar</button></div>
    <div class="text-center"><button style="border:2px solid white;border-radius:5px;width:250px;height:40px;color:white; background-color:#946E61;">Donated on: 17-Jan-2020</button></div>
    </li>
  <li><a href="#img6"><img src="..\assets\img\ngoimgs\img7.jpg"></a>
    <div class="text-center"><button style="border:2px solid white;border-radius:5px;width:250px;height:40px;color:white; background-color:#9A6C3B;" >Donated By: Mr. Ajay Kumar</button></div>
    <div class="text-center"><button style="border:2px solid white;border-radius:5px;width:250px;height:40px;color:white; background-color:#946E61;">Donated on: 17-Jan-2020</button></div>
    </li>
  <li><a href="#img7"><img src="..\assets\img\ngoimgs\img8.jpg"></a>
    <div class="text-center"><button style="border:2px solid white;border-radius:5px;width:250px;height:40px;color:white; background-color:#9A6C3B;" >Donated By: Mr. Neer</button></div>
    <div class="text-center"><button style="border:2px solid white;border-radius:5px;width:250px;height:40px;color:white; background-color:#946E61;">Donated on: 15-Dec-2019</button></div>
    </li>
  <li><a href="#img8"><img src="..\assets\img\ngoimgs\img9.jpg"></a>
    <div class="text-center"><button style="border:2px solid white;border-radius:5px;width:250px;height:40px;color:white; background-color:#9A6C3B;" >Donated By: Mr. AUYG Kumar</button></div>
    <div class="text-center"><button style="border:2px solid white;border-radius:5px;width:250px;height:40px;color:white; background-color:#946E61;">Donated on: 17-Jan-2020</button></div>
    </li>
  <li><a href="#img9"><img src="..\assets\img\ngoimgs\img10.jpg"></a>
    <div class="text-center"><button style="border:2px solid white;border-radius:5px;width:250px;height:40px;color:white; background-color:#9A6C3B;" >Donated By: Mr. Raghav</button></div>
    <div class="text-center"><button style="border:2px solid white;border-radius:5px;width:250px;height:40px;color:white; background-color:#946E61;">Donated on: 17-Jan-2020</button></div>
    </li>
  <li><a href="#img10"><img src="..\assets\img\ngoimgs\img11.jpg"></a>
    <div class="text-center"><button style="border:2px solid white;border-radius:5px;width:250px;height:40px;color:white; background-color:#9A6C3B;" >Donated By: Mr. Deen</button></div>
    <div class="text-center"><button style="border:2px solid white;border-radius:5px;width:250px;height:40px;color:white; background-color:#946E61;">Donated on: 17-Jan-2020</button></div>
    </li>
  <li><a href="#img11"><img src="..\assets\img\ngoimgs\img12.jpg"></a>
    <div class="text-center"><button style="border:2px solid white;border-radius:5px;width:250px;height:40px;color:white; background-color:#9A6C3B;" >Donated By: Mr. Abc Kumar</button></div>
    <div class="text-center"><button style="border:2px solid white;border-radius:5px;width:250px;height:40px;color:white; background-color:#946E61;">Donated on: 17-Jan-2020</button></div>
    </li>
  <li><a href="#img12"><img src="..\assets\img\ngoimgs\img13.jpg"></a>
    <div class="text-center"><button style="border:2px solid white;border-radius:5px;width:250px;height:40px;color:white; background-color:#9A6C3B;" >Donated By: Mr. Nitish</button></div>
    <div class="text-center"><button style="border:2px solid white;border-radius:5px;width:250px;height:40px;color:white; background-color:#946E61;">Donated on: 17-Jan-2020</button></div>
    </li>

</ul>
  


<figure id="img1" class="lbox bounce">
  <span><a href="#img12" title='Anterior'><i class="fas fa-angle-left"></i></a></span>
<img alt="Cachorrito 1" title="Cachorrito 1" src="..\assets\img\ngoimgs\img1.jpg"/>

  <span id='right'><a href="#img2" title='Siguiente'><i class="fas fa-angle-right"></i></a></span>
<a title='Cerrar' href="#_"><i class="fas fa-times"></i></a>
  <h2>Título opcional</h2>
</figure>

<figure id="img2" class="lbox bounce">
  <span><a href="#img1" title='Anterior'><i class="fas fa-angle-left"></i></a></span>
<img alt="Cachorrito 1" title="Cachorrito 1" src="..\assets\img\ngoimgs\img2.jpg"/>
  <span id='right'><a href="#img3" title='Siguiente'><i class="fas fa-angle-right"></i></a></span>
<a title='Cerrar' href="#_"><i class="fas fa-times"></i></a>
  <h2>Título opcional</h2>
</figure>

<figure id="img3" class="lbox bounce">
  <span><a href="#img2" title='Anterior'><i class="fas fa-angle-left"></i></a></span>
<img alt="Cachorrito 1" title="Cachorrito 1" src="..\assets\img\ngoimgs\img4.jpg"/>
  <span id='right'><a href="#img4" title='Siguiente'><i class="fas fa-angle-right"></i></a></span>
<a title='Cerrar' href="#_"><i class="fas fa-times"></i></a>
  <h2>Título opcional</h2>
</figure>

<figure id="img4" class="lbox bounce">
  <span><a href="#img3" title='Anterior'><i class="fas fa-angle-left"></i></a></span>
<img alt="Cachorrito 1" title="Cachorrito 1" src="..\assets\img\ngoimgs\img5.jpg"/>
  <span id='right'><a href="#img5" title='Siguiente'><i class="fas fa-angle-right"></i></a></span>
<a title='Cerrar' href="#_"><i class="fas fa-times"></i></a>
  <h2>Título opcional</h2>
</figure>

<figure id="img5" class="lbox bounce">
  <span><a href="#img4" title='Anterior'><i class="fas fa-angle-left"></i></a></span>
<img alt="Cachorrito 1" title="Cachorrito 1" src="..\assets\img\ngoimgs\img6.jpg"/>
  <span id='right'><a href="#img6" title='Siguiente'><i class="fas fa-angle-right"></i></a></span>
<a title='Cerrar' href="#_"><i class="fas fa-times"></i></a>
  <h2>Título opcional</h2>
</figure>

<figure id="img6" class="lbox bounce">
  <span><a href="#img5" title='Anterior'><i class="fas fa-angle-left"></i></a></span>
<img alt="Cachorrito 1" title="Cachorrito 1" src="..\assets\img\ngoimgs\img7.jpg"/>
  <span id='right'><a href="#img7" title='Siguiente'><i class="fas fa-angle-right"></i></a></span>
<a title='Cerrar' href="#_"><i class="fas fa-times"></i></a>
  <h2>Título opcional</h2>
</figure>

<figure id="img7" class="lbox bounce">
  <span><a href="#img6" title='Anterior'><i class="fas fa-angle-left"></i></a></span>
<img alt="Cachorrito 1" title="Cachorrito 1" src="..\assets\img\ngoimgs\img8.jpg"/>
  <span id='right'><a href="#img8" title='Siguiente'><i class="fas fa-angle-right"></i></a></span>
<a title='Cerrar' href="#_"><i class="fas fa-times"></i></a>
  <h2>Título opcional</h2>
</figure>

<figure id="img8" class="lbox bounce">
  <span><a href="#img7" title='Anterior'><i class="fas fa-angle-left"></i></a></span>
<img alt="Cachorrito 1" title="Cachorrito 1" src="..\assets\img\ngoimgs\img9.jpg"/>
  <span id='right'><a href="#img9" title='Siguiente'><i class="fas fa-angle-right"></i></a></span>
<a title='Cerrar' href="#_"><i class="fas fa-times"></i></a>
  <h2>Título opcional</h2>
</figure>
 
<figure id="img9" class="lbox bounce">
  <span><a href="#img8" title='Anterior'><i class="fas fa-angle-left"></i></a></span>
<img alt="Cachorrito 1" title="Cachorrito 1" src="..\assets\img\ngoimgs\img10.jpg"/>
  <span id='right'><a href="#img10" title='Siguiente'><i class="fas fa-angle-right"></i></a></span>
<a title='Cerrar' href="#_"><i class="fas fa-times"></i></a>
  <h2>Título opcional</h2>
</figure>  

<figure id="img10" class="lbox bounce">
  <span><a href="#img9" title='Anterior'><i class="fas fa-angle-left"></i></a></span>
<img alt="Cachorrito 1" title="Cachorrito 1" src="..\assets\img\ngoimgs\img11.jpg"/>
  <span id='right'><a href="#img11" title='Siguiente'><i class="fas fa-angle-right"></i></a></span>
<a title='Cerrar' href="#_"><i class="fas fa-times"></i></a>
  <h2>Título opcional</h2>
</figure> 

<figure id="img11" class="lbox bounce">
  <span><a href="#img10" title='Anterior'><i class="fas fa-angle-left"></i></a></span>
<img alt="Cachorrito 1" title="Cachorrito 1" src="..\assets\img\ngoimgs\img12.jpg"/>
  <span id='right'><a href="#img12" title='Siguiente'><i class="fas fa-angle-right"></i></a></span>
<a title='Cerrar' href="#_"><i class="fas fa-times"></i></a>
  <h2>Título opcional</h2>
</figure>

<figure id="img12" class="lbox bounce">
  <span><a href="#img11" title='Anterior'><i class="fas fa-angle-left"></i></a></span>
<img alt="Cachorrito 1" title="Cachorrito 1" src="..\assets\img\ngoimgs\img13.jpg"/>
  <span id='right'><a href="#img1" title='Siguiente'><i class="fas fa-angle-right"></i></a></span>
<a title='Cerrar' href="#_"><i class="fas fa-times"></i></a>
  <h2>Título opcional</h2>
</figure>
  
  </div>

  <h2 style="text-align: center;">Expressions of receivers</h2>
  <hr style="border: 1px solid #253240;width:50%;">
 
<div class="demo1">
<ul class="galeria">
  <li><a href="#imgg1"><img src="..\assets\img\donorimg\img1.jpg"></a> <div class="text-center"><button style="border:2px solid white;border-radius:5px;width:250px;height:40px;color:white; background-color:#9A6C3B;" >Donated By: Mr. Pchy</button></div>
    <div class="text-center"><button style="border:2px solid white;border-radius:5px;width:250px;height:40px;color:white; background-color:#946E61;">Donated on: 17-Jan-2020</button></div>
   </li>
 <li><a href="#imgg2"><img src="..\assets\img\donorimg\img2.jpg"></a> <div class="text-center"><button style="border:2px solid white;border-radius:5px;width:250px;height:40px;color:white; background-color:#9A6C3B;" >Donated By: Mr. Harsh</button></div>
    <div class="text-center"><button style="border:2px solid white;border-radius:5px;width:250px;height:40px;color:white; background-color:#946E61;">Donated on: 16-Jan-2020</button></div>
   </li>
 <li><a href="#imgg3"><img src="..\assets\img\donorimg\img4.jpg"></a> <div class="text-center"><button style="border:2px solid white;border-radius:5px;width:250px;height:40px;color:white; background-color:#9A6C3B;" >Donated By: Mr. Abc Kumar</button></div>
    <div class="text-center"><button style="border:2px solid white;border-radius:5px;width:250px;height:40px;color:white; background-color:#946E61;">Donated on: 17-Jan-2020</button></div>
   </li>
 <li><a href="#imgg4"><img src="..\assets\img\donorimg\img5.jpg"></a> <div class="text-center"><button style="border:2px solid white;border-radius:5px;width:250px;height:40px;color:white; background-color:#9A6C3B;" >Donated By: Mr. Shiv Kumar</button></div>
    <div class="text-center"><button style="border:2px solid white;border-radius:5px;width:250px;height:40px;color:white; background-color:#946E61;">Donated on: 17-Jan-2020</button></div>
   </li>
 <li><a href="#imgg5"><img src="..\assets\img\donorimg\img6.jpg"></a> <div class="text-center"><button style="border:2px solid white;border-radius:5px;width:250px;height:40px;color:white; background-color:#9A6C3B;" >Donated By: Mr. Dore Kumar</button></div>
    <div class="text-center"><button style="border:2px solid white;border-radius:5px;width:250px;height:40px;color:white; background-color:#946E61;">Donated on: 17-Jan-2020</button></div>
   </li>
 <li><a href="#imgg6"><img src="..\assets\img\donorimg\img7.jpg"></a> <div class="text-center"><button style="border:2px solid white;border-radius:5px;width:250px;height:40px;color:white; background-color:#9A6C3B;" >Donated By: Mr. Pqrs Kumar</button></div>
    <div class="text-center"><button style="border:2px solid white;border-radius:5px;width:250px;height:40px;color:white; background-color:#946E61;">Donated on: 17-Jan-2020</button></div>
   </li>
 <li><a href="#imgg7"><img src="..\assets\img\donorimg\img8.jpg"></a> <div class="text-center"><button style="border:2px solid white;border-radius:5px;width:250px;height:40px;color:white; background-color:#9A6C3B;" >Donated By: Mr. Abc Kumar</button></div>
    <div class="text-center"><button style="border:2px solid white;border-radius:5px;width:250px;height:40px;color:white; background-color:#946E61;">Donated on: 17-Jan-2020</button></div>
   </li>
 <li><a href="#imgg8"><img src="..\assets\img\donorimg\img9.jpg"></a> <div class="text-center"><button style="border:2px solid white;border-radius:5px;width:250px;height:40px;color:white; background-color:#9A6C3B;" >Donated By: Mr. Abc Kumar</button></div>
    <div class="text-center"><button style="border:2px solid white;border-radius:5px;width:250px;height:40px;color:white; background-color:#946E61;">Donated on: 17-Jan-2020</button></div>
   </li>
 <li><a href="#imgg9"><img src="..\assets\img\donorimg\img10.jpg"></a> <div class="text-center"><button style="border:2px solid white;border-radius:5px;width:250px;height:40px;color:white; background-color:#9A6C3B;" >Donated By: Mr. Abc Kumar</button></div>
    <div class="text-center"><button style="border:2px solid white;border-radius:5px;width:250px;height:40px;color:white; background-color:#946E61;">Donated on: 17-Jan-2020</button></div>
   </li>
 <li><a href="#imgg10"><img src="..\assets\img\donorimg\img11.jpg"></a> <div class="text-center"><button style="border:2px solid white;border-radius:5px;width:250px;height:40px;color:white; background-color:#9A6C3B;" >Donated By: Mr. Abc Kumar</button></div>
    <div class="text-center"><button style="border:2px solid white;border-radius:5px;width:250px;height:40px;color:white; background-color:#946E61;">Donated on: 17-Jan-2020</button></div>
   </li>
 <li><a href="#imgg11"><img src="..\assets\img\donorimg\img12.jpg"></a> <div class="text-center"><button style="border:2px solid white;border-radius:5px;width:250px;height:40px;color:white; background-color:#9A6C3B;" >Donated By: Mr. Abc Kumar</button></div>
    <div class="text-center"><button style="border:2px solid white;border-radius:5px;width:250px;height:40px;color:white; background-color:#946E61;">Donated on: 17-Jan-2020</button></div>
   </li>
 <li><a href="#imgg12"><img src="..\assets\img\donorimg\img13.jpg"></a> <div class="text-center"><button style="border:2px solid white;border-radius:5px;width:250px;height:40px;color:white; background-color:#9A6C3B;" >Donated By: Mr. Abc Kumar</button></div>
    <div class="text-center"><button style="border:2px solid white;border-radius:5px;width:250px;height:40px;color:white; background-color:#946E61;">Donated on: 17-Jan-2020</button></div>
   </li>


</ul>
 


<figure id="imgg1" class="lbox bounce">
 <span><a href="#imgg12" title='Anterior'><i class="fas fa-angle-left"></i></a></span>
<img alt="Cachorrito 1" title="Cachorrito 1" src="..\assets\img\donorimg\img1.jpg"/>
 <span id='right'><a href="#imgg2" title='Siguiente'><i class="fas fa-angle-right"></i></a></span>
<a title='Cerrar' href="#_"><i class="fas fa-times"></i></a>
 <h2>Título opcional</h2>
</figure>

<figure id="imgg2" class="lbox bounce">
 <span><a href="#imgg1" title='Anterior'><i class="fas fa-angle-left"></i></a></span>
<img alt="Cachorrito 1" title="Cachorrito 1" src="..\assets\img\donorimg\img2.jpg"/>
 <span id='right'><a href="#imgg3" title='Siguiente'><i class="fas fa-angle-right"></i></a></span>
<a title='Cerrar' href="#_"><i class="fas fa-times"></i></a>
 <h2>Título opcional</h2>
</figure>

<figure id="imgg3" class="lbox bounce">
 <span><a href="#imgg2" title='Anterior'><i class="fas fa-angle-left"></i></a></span>
<img alt="Cachorrito 1" title="Cachorrito 1" src="..\assets\img\donorimg\img4.jpg"/>
 <span id='right'><a href="#imgg4" title='Siguiente'><i class="fas fa-angle-right"></i></a></span>
<a title='Cerrar' href="#_"><i class="fas fa-times"></i></a>
 <h2>Título opcional</h2>
</figure>

<figure id="imgg4" class="lbox bounce">
 <span><a href="#imgg3" title='Anterior'><i class="fas fa-angle-left"></i></a></span>
<img alt="Cachorrito 1" title="Cachorrito 1" src="..\assets\img\donorimg\img5.jpg"/>
 <span id='right'><a href="#imgg5" title='Siguiente'><i class="fas fa-angle-right"></i></a></span>
<a title='Cerrar' href="#_"><i class="fas fa-times"></i></a>
 <h2>Título opcional</h2>
</figure>

<figure id="imgg5" class="lbox bounce">
 <span><a href="#imgg4" title='Anterior'><i class="fas fa-angle-left"></i></a></span>
<img alt="Cachorrito 1" title="Cachorrito 1" src="..\assets\img\donorimg\img6.jpg"/>
 <span id='right'><a href="#imgg6" title='Siguiente'><i class="fas fa-angle-right"></i></a></span>
<a title='Cerrar' href="#_"><i class="fas fa-times"></i></a>
 <h2>Título opcional</h2>
</figure>

<figure id="imgg6" class="lbox bounce">
 <span><a href="#imgg5" title='Anterior'><i class="fas fa-angle-left"></i></a></span>
<img alt="Cachorrito 1" title="Cachorrito 1" src="..\assets\img\donorimg\img7.jpg"/>
 <span id='right'><a href="#imgg7" title='Siguiente'><i class="fas fa-angle-right"></i></a></span>
<a title='Cerrar' href="#_"><i class="fas fa-times"></i></a>
 <h2>Título opcional</h2>
</figure>

<figure id="imgg7" class="lbox bounce">
 <span><a href="#imgg6" title='Anterior'><i class="fas fa-angle-left"></i></a></span>
<img alt="Cachorrito 1" title="Cachorrito 1" src="..\assets\img\donorimg\img8.jpg"/>
 <span id='right'><a href="#imgg8" title='Siguiente'><i class="fas fa-angle-right"></i></a></span>
<a title='Cerrar' href="#_"><i class="fas fa-times"></i></a>
 <h2>Título opcional</h2>
</figure>

<figure id="imgg8" class="lbox bounce">
 <span><a href="#imgg7" title='Anterior'><i class="fas fa-angle-left"></i></a></span>
<img alt="Cachorrito 1" title="Cachorrito 1" src="..\assets\img\donorimg\img9.jpg"/>
 <span id='right'><a href="#imgg9" title='Siguiente'><i class="fas fa-angle-right"></i></a></span>
<a title='Cerrar' href="#_"><i class="fas fa-times"></i></a>
 <h2>Título opcional</h2>
</figure>

<figure id="imgg9" class="lbox bounce">
 <span><a href="#imgg8" title='Anterior'><i class="fas fa-angle-left"></i></a></span>
<img alt="Cachorrito 1" title="Cachorrito 1" src="..\assets\img\donorimg\img10.jpg"/>
 <span id='right'><a href="#imgg10" title='Siguiente'><i class="fas fa-angle-right"></i></a></span>
<a title='Cerrar' href="#_"><i class="fas fa-times"></i></a>
 <h2>Título opcional</h2>
</figure>  

<figure id="img10" class="lbox bounce">
 <span><a href="#imgg9" title='Anterior'><i class="fas fa-angle-left"></i></a></span>
<img alt="Cachorrito 1" title="Cachorrito 1" src="..\assets\img\donorimg\img11.jpg"/>
 <span id='right'><a href="#imgg11" title='Siguiente'><i class="fas fa-angle-right"></i></a></span>
<a title='Cerrar' href="#_"><i class="fas fa-times"></i></a>
 <h2>Título opcional</h2>
</figure> 

<figure id="imgg11" class="lbox bounce">
 <span><a href="#imgg10" title='Anterior'><i class="fas fa-angle-left"></i></a></span>
<img alt="Cachorrito 1" title="Cachorrito 1" src="..\assets\img\donorimg\img12.jpg"/>
 <span id='right'><a href="#imgg12" title='Siguiente'><i class="fas fa-angle-right"></i></a></span>
<a title='Cerrar' href="#_"><i class="fas fa-times"></i></a>
 <h2>Título opcional</h2>
</figure>

<figure id="imgg12" class="lbox bounce">
 <span><a href="#imgg11" title='Anterior'><i class="fas fa-angle-left"></i></a></span>
<img alt="Cachorrito 1" title="Cachorrito 1" src="..\assets\img\donorimg\img13.jpg"/>
 <span id='right'><a href="#imgg1" title='Siguiente'><i class="fas fa-angle-right"></i></a></span>
<a title='Cerrar' href="#_"><i class="fas fa-times"></i></a>
 <h2>Título opcional</h2>
</figure>
 
 </div>


  
   


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
  <script src="../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="../assets/vendor/counterup/counterup.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/venobox/venobox.min.js"></script>
  <script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>