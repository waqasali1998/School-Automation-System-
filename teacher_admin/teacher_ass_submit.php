<?php
include("conn.php");
if(isset($_POST['teacher_assign']))
{
$tname = $_POST['teacher_name'];
$class = $_POST['class_ass'];
$sql1 = "INSERT INTO teacher_ass (tname,class)
VALUES ('".$tname."','".$class."')";
$result1 = mysqli_query($conn,$sql1);
if($result1)
{
    echo '<script>
    alert("Assign Successfully!");
    window.location.assign("teacher_ass.php");
    </script>';
}
}

?>