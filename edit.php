<?php
$c=mysqli_connect("localhost","root","","carp") or die("unnble to connect");

$id=$_GET['z'];
$q="UPDATE caruser SET WHERE id='$id'";
$q="SELECT * FROM caruser WHERE id='$id'";
$s=mysqli_query($c,$q);

while($r=mysqli_fetch_array($s))
{
    $a=$r['name'];
    $b=$r['lasstname'];
    $d=$r['address'];
    $e=$r['contact'];
    $f=$r['carname'];
    $id =$r['id'];
   
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<body>
<form method="post" action="update.php">
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
</body>
</html>