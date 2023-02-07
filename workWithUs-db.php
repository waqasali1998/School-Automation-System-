<?php
include("admin/conn.php");




if(isset($_POST['book']))

{
    // $filename = $_FILES["uploadfile"]["name"];
    // $tempname = $_FILES["uploadfile"]["tmp_name"];
    // $folder = "./cv/" . $filename;

    $resume=$_FILES['resume']['name'];
    $c_tmp_image=$_FILES['resume']['tmp_name'];
  
    move_uploaded_file($c_tmp_image, "admin/cv/$resume");


    $sql = "INSERT INTO cv (tname,tlast,email,position,dob,nic,Qualification,gender,
    branch,expertise,resume,phone) 
    VALUES  ('".$_POST['tname']."','".$_POST['lname']."','".$_POST['email']."',
    '".$_POST['position']."','".$_POST['dob']."','".$_POST['nic']."',
    '".$_POST['qualification']."','".$_POST['gender']."',
    '".$_POST['branch']."','".$_POST['expertise']."',
    '".$_FILES['resume']['name']."','".$_POST['phone']."')";
$result = mysqli_query($conn,$sql);


if($result)
{
    echo '<script>
    alert("Successfully Submitted!");
    window.location.assign("workWithUs.php");
    </script>';
}
else
{
    echo '<script>
    alert("Something went wrong!");
    window.location.assign("workWithUs.php");
    </script>';
}
}

?>