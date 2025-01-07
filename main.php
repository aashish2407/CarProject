<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
      #c1{
        text-align: center;
      }
      #b1{
        text-align: center;
      }
      #a1{
         text-align: center;
      }
      /* #c{
        height:100px;
        width:220px;
        padding-left:500px;
        padding-bottom:30px;
       
         } */
      *{
        margin:0;
        padding:0;
        font-family:sans-serif;
        box-sizing:border-box;
      }
      .banner{
        width: 100%;
        height: 100vh;
        background-image:linear-gradient(rgba(0,0,0,0,40),);
        background-position:center;
        background-size:center;
      }
      .navbar{
        width: 90%;
        padding:30px;
        margin:auto;
        display:flex;
        /* align-item:center; */
        justify-content:space-between;
      }
      .logo{
        width: 160px;
        margin-left:30px;
        margin-top:12px;
        margin-right:10px;

       
        cursor:pointer;

      }
      .navbar ul li{
        list-style:none;
        display:inline-block;
        margin:20px;

      }
      . navbar ul li a{
        text-decoration:none;
        text-transfrom:uppercase;
        color:red;
        font-weight:600;
        padding:15px;
      }
      li a:hover{
        background:green;
        transition:0.06s;
      }
      .navbar a:hover{
            color:black;
      }
      .content{
        width: 100%;
        position: absolute;
        color:white;
        top:45%;
        transform:translatev(-50%);
        text-align:center;
      }
      .content h1{
        margin-top:80px;
        font-size:90px;
        font-weight:800;
      }
      button{
        width:200px;
        padding:15px;
        margin:20px 5px;
        text-align:center;
        border-radius:25px;
        color:black;
        border:2px;
        font-size:20px;
        cursor:pointer;
        font-weight:600;
      }
      button:hover{
        background:brown;
        transition:0.6s;
      }
      button:hover{
        color:white;
      }
      .banner video{
        position:absolute;
        right:0;
        bottom:0;
        z-index:-1;
      }
      @media(min-aspect-ratio:16/9){
        .banner video{
          width:100%;
          height:auto;
          
        }
      }
    
      
    </style>
 
</head>
 <?php
 $con=mysqli_connect("localhost","root","","carp")or die("unbale to connect");

 if(isset($_POST['adm']))
 {

  $q=

  $t=mysqli_query($con,$q);

  $d=mysqli_fetch_array($a);
 if($a)
 {

  header("location:admin.php");
 }
}


 

 ?>

<body>
  <form method="post">

  <div class="banner">
    <video autoplay loop muted plays-inline controls>
      <source src="carvc.mp4" type="video/mp4">

    </video>
    <div class="logox">
<a class="navbar-brand" href="#">
      <img src="car.png" alt="Logo" style="width:40px;" class="rounded-pill">
    </a>
</div>
    <div class="navbar">
      <!-- <img clas="logo" src="car.png"> -->
      <ul>
        <li><a href="admin.php" name="admin" type="button" class="btn btn-primary">Admin Login</a></li>
        <li><a href="user.php" name="user" type="button" class="btn btn-success">User Login</a></li>
      </ul>
    </div>
  
    <div>
      <h1 class="content">Welcome  To<span class="text-danger"> AK..</span><span  class="text-info">UsedCar Service Care</span> </h1>
    </div>
  </div>
  






  <div class="mt-5 p-4 bg-dark text-white text-center">
  <h2 class="bg-secondary">Welcome To AK..UsedCars Service</h2>
  

  <div class="row">
    <div class="col bg-dark">
      <h2>About US</h2>
      <br>
      <br>
      <p>FAQs</p>
       <p>Contact Us</p>
       <p>Offers</p>
       <p>Reviews</p>
       <p>Workshop Locator</p>
       <p>Privacy  Policiy</p>
       <p>Terms And Condition</p>
       <p>Offers</p>
    </div>
    <div class="col bg-dark">
    <h2>OUR Services</h2>
      <br>
      <br>
      <p>Scheduled Services</p>
       <p>AC Service Us</p>
       <p>Cleaning And Detailing</p>
       <p>Lights And Fitments</p>
       <p>Denting And Painting</p>
       <p>Insurance Services</p>
       <p>Cutom Service</p>
       <p>Battries</p>
       <p>Tyers</p>
       <p>Detailing Services</p>
       


    </div>
    <div class="col bg-dark">
    <h2>Modified CAR's</h2>
      <br>
      <br>
      <p>Scorpio</p>
       <p>Thar</p>
       <p>Bolero</p>
       <p>Swift Desire</p>
       <p>Baleno</p>
       <p>Ertiga</p>
       <p>Wagnor</p>
       <p>Alto</p>
       <p>Hyundai i-20</p>
       <p>Creta</p>
       <p>Breaza</p>
       <p>Tavera</p>
      
    </div>
    <div class="col bg-dark">
    <h2>Popular Brands</h2>
      <br>
      <br>
      <p>Maruti Suzuki</p>
       <p>Hyundai</p>
       <p>Honda</p>
       <p>Toyota</p>
       <p>Tata</p>
       <p>Mahindra</p>
       <p>chevriolet</p>
       <p>Fait</p>
       <p>Rnault</p>
       <p>Kia </p>
       <p>Skoda</p>
       <p>Volswagan</p>
    </div>
  </div>
</div>

</div>

<div class="row" >
    <div class="col-4 bg-secondary text-center ">
    <img src="fcar.webp" height="70px" width="90px"><h3>Go Meachinic</h3>
     
        
      <p>Spaze IT-Park Sohana Gurgaon,<br>
     s-Block Sector-59<br>
     Mumbai,12208</p>
    </div>
    <div class="col-4 bg-secondary text-center">
      <div >
       <i style="font-size:24px" class="fa ">&#xf003;</i> Email
     </div>
    
     <div>
     <i style="font-size:24px" class="fa">&#xf095;</i> Phone
     </div>
     <div>
     <i style="font-size:24px" class="fa">&#xf073;</i> Working Hours
    </div>
</div>
    <div class="col-4 bg-secondary text-center" >
    info@usedcar.ocm
      <br>
      9860314997
      <br>
      7:00AM to 9:00AM
  </div>
</div>
<div id="c1" class="bg-danger p-3"s">

<i style="font-size:24px" class="fa">&#xf1f9;</i> <span style="color-white">2016-2024 Service Used Technology Private Limited(PVT)</span>
</div>
</form>

</body>
</html>