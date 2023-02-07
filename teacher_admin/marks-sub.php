<?php
include("../admin/conn.php");
session_start();
if(isset($_POST['marks_submit']))
{
   
    for($i=0;$i<$_SESSION['ii']-1;$i++)
    {
      
        $sql = "INSERT INTO `".$_POST['class_name']."` (std_id,`name`,marks,subject)
        VALUES ('".$_POST['id'][$i]."','".$_POST['fname'][$i]."','".$_POST['marks'][$i]."','".$_POST['class_subject']."')";

        $result = mysqli_query($conn,$sql);
    
    }
    
   
if($result)
{
    echo '<script>
    alert("Successfully Submitted!");
    window.location.assign("marks.php");
    </script>';
}
else
{
    echo '<script>
    alert("Something went wrong!");
    //  window.location.assign("admission.php");
    </script>';
}
}

?>