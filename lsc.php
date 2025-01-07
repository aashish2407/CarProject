<?php
$c=mysqli_connect("localhost","root","","carp") or die("unnble to connect");



if(isset($_POST['cr']))
{
 
    $n=$_POST['name'];
    $ln=$_POST['lasstname'];
    $a=$_POST['address'];
    $con=$_POST['contact'];
    $cn=$_POST['carname'];
    
    
         //echo "hi else";exit;
        $q="INSERT INTO caruser(name,lasstname,address,contact,carname) VALUES('$n','$ln','$a','$con','$cn')";
       $s= mysqli_query($c,$q);
       if($s)
       {
        echo " <div class='alert alert-success'>
    <strong>Your Record Is Inserted!</strong>
  </div>";
       }
        
    

} 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <body>
    <div class="p-5 bg-danger text-white text-center">
  <h1>Welcome To AK...UsedCars.</h1>
  <p>Dream of A Buying A Car</p> 
</div>

<nav class="navbar navbar-expand-sm bg-warning navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active-succes" href="admuser.php">Used Cars</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="carm.php">Car Modification</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="carw.php">Car Service</a>
      </li>
      
    </ul>
  </div>
</nav>

<div class="container mt-5">
  <div class="row">
    <div class="col-sm-4">
      <h2>AK...CarService</h2>
      <h5>Your Dream Car:</h5>
      
      <div class="container mt-3">
        <!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

<!-- Indicators/dots -->
<div class="carousel-indicators">
  <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
  <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
  <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
</div>

<!-- The slideshow/carousel -->
<div class="carousel-inner">
  <div class="carousel-item active">
    <img src="caiz.png" alt="Los Angeles" class="d-block" style="width:100%">
  </div>
  <div class="carousel-item">
    <img src="alto.jpg" alt="Chicago" class="d-block" style="width:100%">
  </div>
  <div class="carousel-item">
    <img src="cc.jpeg" alt="New York" class="d-block" style="width:100%">
  </div>
  <div class="carousel-item">
    <img src="xls.webp" alt="New York" class="d-block" style="width:100%">
  </div>
</div>

<!-- Left and right controls/icons -->
<button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
  <span class="carousel-control-prev-icon"></span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
  <span class="carousel-control-next-icon"></span>
</button>
</div>



  
         
  <!-- <img src="car.png" class="rounded" alt="Cinque Terre" width="304" height="236">  -->
</div>
      <h3 class="mt-4">Your dream car</h3>
      <p>Lorem ipsum dolor sit ame.</p>
      
      <hr class="d-sm-none">
    </div>
    <div class="col-sm-8">
      <h2>Servic By AK..UsedCars</h2>
      <h5>CAR Decor and Washing </h5>
      
      <p>About..</p>
      <p>
      Ak. UsedCar- Car Detailing & Paint Shop is located in Pune.   Ak. UsedCar- Car Detailing & Paint Shop is working in Car repair, Body repair, Car wash and detail activities. You can contact the company at 022 3515 5706. You can find more information about Brotomotiv- Car Detailing & Paint Shop at   Ak. UsedCar Service.in.</p>
      <h2 class="mt-5">Service Modified</h2>
      <h5>Service And Modification</h5>
      
      <p>Build Your Dream Car..</p>
      <p>Choose from a range of Body, Wheel, Glasses, Plastic trim coatings and Paint protection films after the Paint job, here at AK.. UsedCars. Full body paint jobs get discounts on detailing and paint </p>
    </div>
  </div>
</div>

<div class="mt-5 p-4 bg-dark text-white text-center">
  <h2>Welcome To AK..UsedCars Service</h2>
</div>





<div class="container mt-3">
  <h2>New User Register for Car Service and Modified..</h2>
  <form method="post">
    <div class="mb-3 mt-3">
      <label>Name:</label>
      <input type="name" class="form-control" placeholder="Enter name" name="name">
    </div>
    <div class="mb-3 mt-3">
      <label >LastName:</label>
      <input type="name" class="form-control"  placeholder="Enter Last Name" name="lasstname">
    </div>
    <div class="mb-3 mt-3">
      <label for="email">Address:</label>
      <input type="add" class="form-control" placeholder="Enter Adress" name="address">
    </div>
    <div class="mb-3 mt-3">
      <label for="email">Contact:</label>
      <input type="name" class="form-control"  placeholder="Enter Contact" name="contact">
    </div>
    <div class="mb-3">
      <label for="pwd">Car Name:</label>
      <input type="name" class="form-control" placeholder="Enter Car Name" name="carname">
    </div>
    
    <button type="submit" name="cr" class="btn btn-primary">Submit</button>
  </form>

  <div class="mt-5 p-4 bg-warning text-white text-center">
  <h2>Thank you  To Visit AK..UsedCars Service</h2>
</div>
</div>

</body>
</body>
</html>