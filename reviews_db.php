<?php
include("admin/conn.php");




if(isset($_POST['pst']))

{
    // $filename = $_FILES["uploadfile"]["name"];
    // $tempname = $_FILES["uploadfile"]["tmp_name"];
    // $folder = "./cv/" . $filename;

   


    $sql = "INSERT INTO reviews (first_name,last_name,contact,email,feedback)
 
    VALUES  ('".$_POST['fname']."','".$_POST['lname']."','".$_POST['contact']."',
    '".$_POST['email']."','".$_POST['feedback']."')";
$result = mysqli_query($conn,$sql);




if($result)
{
    echo '<script>
    alert("Successfully Submitted!");
    window.location.assign("reviews.php");
    </script>';
}
else
{
    echo '<script>
    alert("Something went wrong!");
    window.location.assign("reviews.php");
    </script>';
}
}

?>