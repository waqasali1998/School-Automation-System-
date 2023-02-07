<?php
include("conn.php");
if(isset($_POST['teacher_assign']))
{
$tname = $_POST['teacher_name'];
$class = $_POST['class_ass'];
$subject = $_POST['s_name'];


$get_teacher="SELECT * FROM login Where role_id=1";


 $run_teacher=mysqli_query($conn,$get_teacher);
 while($row_teacher=mysqli_fetch_array($run_teacher)){
     $email=$row_teacher['email'];

 }
    
     

$sql1 = "INSERT INTO teacher_ass (tname,email,class,subject)
VALUES ('".$tname."','".$email."','".$class."','".$subject."')";
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