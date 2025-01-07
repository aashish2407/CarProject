<?php
$c=mysqli_connect("localhost","root","","carp") or die("unnble to connect");
$id=$_GET['t'];
$q="DELETE FROM register1 WHERE id='$id'";
$w=mysqli_query($c,$q);

if($w)
{
  header("location:adminb.php");
}
?>