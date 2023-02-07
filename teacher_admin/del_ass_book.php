<?php


include("conn.php");
$id=$_GET['delete_id'];
$query = "UPDATE book_ass SET approve = 2 where id='$id'"; 


$r = mysqli_query($conn,$query);
header("Location:book_ass.php"); 
?>

