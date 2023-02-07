<?php


include("conn.php");
if(isset($_GET['id']))
{
$id=$_GET['id'];
$query = "UPDATE reviews SET approve = 1 where id='$id'"; 


$r = mysqli_query($conn,$query);
header("Location:reviews_approve.php"); 

}
?>

