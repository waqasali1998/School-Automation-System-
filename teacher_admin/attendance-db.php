<?php
include("../admin/conn.php");
session_start();

if(isset($_POST['attendance']))
{
    for($i=0;$i<$_SESSION['ii']-1;$i++)
    {
      
        $sql = "INSERT INTO attendance (std_id,std_name,attendance,class)
        VALUES ('".$_POST['id'][$i]."','".$_POST['fname'][$i]."','".$_POST['attendance_std'][$i]."','".$_POST['class_name']."')";
        $result = mysqli_query($conn,$sql);
  
    }
    
   
if($result)
{
    echo '<script>
    alert("Successfully Submitted!");
     window.location.assign("attendance-student.php");
    </script>';
}
else
{
    echo '<script>
    alert("Something went wrong!");
    window.location.assign("attendance-student.php");
    </script>';
}
}

?>