<?php

include("conn.php");



// For updating records

if (isset($_POST['edit_id'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $mobile_number = $_POST['mobile_number'];
  
    mysqli_query($conn, "UPDATE library SET name='$asin_no', name='$name', category='$category' WHERE id=$id");
     echo "Data Updated Successfully";
    header('location: index.php');


  
   

  }

  if (isset($_POST['class_delete_id'])) {
    $id = $_POST['id'];
 
    
    mysqli_query($conn, "Delete Form classes where  WHERE id=$id");
     echo "Data Updated Successfully";

     if(mysqli_query){
      header('location:add_class.php');
     }
    


  
   

  }



  
  


$id=$_GET['delete_id'];
$query = "UPDATE library SET approve = 2 where id='$id'"; 

if($query){
$r = mysqli_query($conn,$query);
header("Location:library.php"); 

}

$id=$_GET['sub_delete_id'];
$query = "Delete  from subject  where id='$id'"; 

if($query){
$r = mysqli_query($conn,$query);
header("Location:library.php"); 

}


?>
