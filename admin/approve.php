<?php

include("conn.php");
$id=$_GET['approve_id'];
$query = "UPDATE register_student SET approve=1 where id='$id'"; 


$r = mysqli_query($conn,$query);
header("Location:register.php"); 
?>
