<?php

include("conn.php");
$id=$_GET['delete_id'];
$query = "DELETE FROM teacher_ass  where id='$id'"; 


$r = mysqli_query($conn,$query);

if($r){
header("Location:teacher_ass.php"); 

}
?>
