<?php

session_start();

$c = mysqli_connect("localhost","root","","crud");
$z = "SELECT * FROM login";
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
<table class="table w-90">
<h1>Welcome TO list..file : <?php echo $_SESSION['z'];?>  &nbsp;&nbsp;<a href="logout.php" class="btn-btn-danger">logout</a></h1>

    <thead border="1" class="table-table-success">
        

            <th>Email</th>
            <th>Password</th>
            <th>Mobile</th>
            <th>Image</th>
            <th>Action</th>

       
</thead>
<tbody>
    <?php
    while($a=mysqli_fetch_array($y))
    {
    
    
  
 echo '<tr  class="table-success">
    <td>'.$a["email"].'</td>
    <td>'.$a["password"].'</td>
    <td>'. $a["mobile"].'</td>
    <td><img src="upload/'.$a["img"].'" height="100" width="100"></td>
    <td><a href="edit.php?z='.$a["id"].'" class="btn btn-primary">edit</a>  <a href="delet.php?t='.$a["id"].'" class="btn btn-danger">delet</a></td>
    
</tr>';

    }
    ?>
</tbody>
</table>
    
</body>
</html>