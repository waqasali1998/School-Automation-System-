<?php

include("conn.php");
$id=$_GET['delete_id'];
$query = "UPDATE register_student SET approve = 2 where id='$id'"; 


$r = mysqli_query($conn,$query);
header("Location:register.php"); 
?>
