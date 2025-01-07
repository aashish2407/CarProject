<?php

session_start();
$c=mysqli_connect("localhost","root","","CRUD") or die("unable to connect");

if(isset($_POST['btn']))
{
    $u=$_POST['email'];
    $p=$_POST['password'];

    $q="select * from logg where email='$u' and password='$p'";

    $n=mysqli_query($c,$q);
    
    $s=mysqli_fetch_array($n);

    if($s)
    {
        $_SESSION['z']=$_POST['username'];

        header("location:list.php");
    }
    else
    {
        echo "wrong password plz enter correct password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
<form method="post" class="w-50 ms-4 bg-primary p-4 mt-4" enctype="multipart/from-data">
<<div class="mb-3">

<h1 class="color-danfger">login From</h1>
    <label  class="form-label">Email:</label>
    <input type="text" class="form-control"  placeholder="Enter email" name="email">
    
  </div>
  <div class="mb-3 mt-3">
    <label  class="form-label">Password:</label>
    <input type="text" class="form-control" placeholder="Enter Password" name="password">
    
  </div>
 
  
  <button type="submit" class="btn btn-danger" name="btn" value="save">Submit</button>
</form>
</body>

</html>

