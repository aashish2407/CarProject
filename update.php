<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $c=mysqli_connect("localhost","root","","carp")or die("unbale to connect");
    $id=$_GET['z'];

    if(isset($_POST['btn']))
    {
        $a=$r['name'];
        $b=$r['lasstname'];
        $d=$r['address'];
        $e=$r['contact'];
        $f=$r['carname'];
        $s="UPDATE caruser SET name='$a',lasstname='$b',address='$d',contact='$e',carname='$f' WHERE id='$id'";
        $f=mysqli_query($c,$s);
        if($f)
        {
            echo " <div class='alert alert-success'>
    <strong>Your Record Is upadted!</strong>
  </div>";
        }
    }
    ?>
</body>
</html>