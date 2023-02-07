<?php
include("admin/conn.php");

if(isset($_POST['book']))
{
    $sql = "INSERT INTO register_student (fname,lname,dob,`address`,number,gender,gardian,class,approve,email,father_nic,student_nic)
VALUES ('".$_POST['fname']."','".$_POST['lname']."','".$_POST['dob']."','".$_POST['Address']."','".$_POST['Phone']."','".$_POST['Gender']."','".$_POST['Gardian']."','".$_POST['class']."','".$_POST['fname']."','".$_POST['Email']."','".$_POST['Father_nic']."','".$_POST['NIC']."')";
$result = mysqli_query($conn,$sql);
if($result)
{
    echo '<script>
    alert("Successfully Submitted!");
    window.location.assign("admission.php");
    </script>';
}
else
{
    echo '<script>
    alert("Something went wrong!");
     window.location.assign("admission.php");
    </script>';
}
}

?>