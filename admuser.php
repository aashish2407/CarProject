<?php

session_start();

$c = mysqli_connect("localhost","root","","carp");
$z = "SELECT * FROM nadm";
$y = mysqli_query($c,$z)

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
    <div class="p-5 bg-success p-3 text-white text-center">
  <h1>Welcome To AK...UsedCars.</h1>
  <p>Dream of A Buying A Car</p> 
</div>

<nav class="navbar navbar-expand-sm bg-dark p-3 navbar-dark">
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
      <h2>AK...Car's Modification</h2>
      <h5>Your Dream Car:</h5>
      
      <div class="container mt-3">
     




  
         
  <img src="car.png" class="rounded" alt="Cinque Terre" width="304" height="236"> 
</div>
      <h3 class="mt-4">Your dream car</h3>
      <p>Lorem ipsum dolor sit ame.</p>
      
      <hr class="d-sm-none">
    </div>
    <div class="col-sm-8">
      <h2>Servic By AK..UsedCars</h2>
      <h5>CAR Decor and Washing </h5>

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
    <img src="mcara.jpg" alt="Los Angeles" class="d-block" style="width:100%">
  </div>
  <div class="carousel-item">
    <img src="alto.jpg" alt="Chicago" class="d-block" style="width:100%">
  </div>
  <div class="carousel-item">
    <img src="desire.jpg" alt="New York" class="d-block" style="width:100%">
  </div>
  <div class="carousel-item">
    <img src="caiz.png" alt="New York" class="d-block" style="width:100%">
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
      
      
      
      <h2>Build Your Dream Car..</h2>
      <p>Choose from a range of Body, Wheel, Glasses, <b>Plastic trim coatings and Paint protection films after the Paint job,<b>< here at AK.. UsedCars. Full body paint jobs get discounts on detailing and paint </p>
    </div>
  </div>
</div>


<table class="table w-90">
<h1>Welcome TO AK..UsrdCar  List ..file : </h1>
<!-- <?php echo $_SESSION['z'];?>  &nbsp;&nbsp;<a href="loggout.php" class="btn-btn-danger">logout</a></h1> -->

    <thead border="1" class="table-table-success">
        

            <th>carname</th>
            <th>carmodel</th>
            <th>carprice</th>
            <th>carrun</th>
           
           

       
</thead>
<tbody>
    <?php
    while($a=mysqli_fetch_array($y))
    {
    
    
  
 echo '<tr  class="table-success">
    <td>'.$a["carname"].'</td>
    <td>'.$a["carmodel"].'</td>
    <td>'.$a["carprice"].'</td>
    <td>'. $a["carrun"].'</td>
    
    
   
    
</tr>';

    }
    ?>
</tbody>
</table>
    


<div class="mt-5 p-4 bg-dark text-white text-center">
  <h2>Welcome To AK..UsedCars Service</h2>
</div>







</body>
</body>
</html>