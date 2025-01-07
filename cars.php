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
<div class="container mt-3">
<div class="p-5 bg-primary p-3 text-white text-center">
  <h1>Welcome To AK...UsedCars.</h1>
  <p>Dream of A Buying A Car</p> 
</div>

<nav class="navbar navbar-expand-sm bg-secondary  p-3 navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active-succes" href="cars.php">Used Cars</a>
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

<h1 style="text-align-center"  class="text-success">Welcome to AK..<sapn class="text-primary">used Cars Service</span></h1>

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
      <img src="xls.webp" alt="Los Angeles" class="d-block" style="width:100%">
    </div>
    <div class="carousel-item">
      <img src="caiz.png" alt="Chicago" class="d-block" style="width:100%">
    </div>
    <div class="carousel-item">
      <img src="swift.jpg" alt="New York" class="d-block" style="width:100%">
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
<br>
<br>
<br>


  <h2>Availlable Car's</h2>

  <table class="table">
    <thead>
      <tr>
      <th>CarNAME</th>
        <th>CarModel</th>
        <th>CarPrice</th>
      </tr>
    </thead>
    <tbody>
      <tr class="table-danger">
        <td>Swift vdi</td>
        <td>2014</td>
        <td>4,50,000</td>
      </tr>      
      <tr class="table-primary">
        <td>Vereana</td>
        <td>2018</td>
        <td>7,80,000</td>
      </tr>
      <tr class="table-success">
        <td>Scorpio</td>
        <td>2021</td>
        <td>9,30,000</td>
      </tr>
      <tr class="table-danger">
        <td>Baleno</td>
        <td>2016</td>
        <td>4,60,000</td>
      </tr>
      <tr class="table-info">
        <td>Ertiga</td>
        <td>2019</td>
        <td>6,50,000</td>
      </tr>
      <tr class="table-warning">
        <td>Alto</td>
        <td>2014</td>
        <td>3,50,000</td>
      </tr>
      
      
      <tr class="table-light">
        <td>Wagnor</td>
        <td>2013</td>
        <td>1,50,000</td>
      </tr>
      
    </tbody>
  </table>
</div>
</body>
</html>