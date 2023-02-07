<?php
include("conn.php");
if(isset($_POST['add_class']))
{
$s_name = $_POST['s_name'];
$class = $_POST['class'];



$sql1 = "INSERT INTO classes (class,subject)
VALUES ('".$s_name."','".$class."')";
$result1 = mysqli_query($conn,$sql1);
if($result1)
{
    echo '<script>
    alert("Assign Successfully!");
    
    </script>';
}
}

?>