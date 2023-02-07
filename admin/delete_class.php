<?php

include("conn.php");



if(isset($_GET['sub_delete_id']))
{
    $id=$_GET['sub_delete_id'];
    $query = "Delete  from classes  where id = $id"; 
    $result = mysqli_query($conn,$query);

    if($result){
    
    header("Location:add_class.php"); 
    
    }
}

  
  






?>
