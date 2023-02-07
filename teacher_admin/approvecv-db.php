<?php

include("conn.php");
$id=$_GET['approve_id'];
$query = "UPDATE cv SET approve=1 where id='$id'"; 


$r = mysqli_query($conn,$query);
header("Location:pending_cv.php"); 
?>
