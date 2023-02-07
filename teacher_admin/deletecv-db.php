<?php

include("conn.php");
$id=$_GET['delete_id'];
$query = "UPDATE cv SET approve = 2 where id='$id'"; 


$r = mysqli_query($conn,$query);
header("Location:pending_cv.php"); 
?>
