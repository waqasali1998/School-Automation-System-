<?php

include("conn.php");

if(isset($_POST['submit_pass']))
{
    $email=$_POST['email'];
    $old_pass=$_POST['old_pass'];
    $pass=$_POST['pass'];
    $query = "SELECT * FROM `login` WHERE `password`='".$old_pass."' AND email='".$email."'"; 
    $result = mysqli_query($conn,$query);
    
    if(mysqli_num_rows($result)>0)
    {
        $query1 = "UPDATE `login` SET `password`='".$pass."' where email='".$email."'"; 
        $result1 = mysqli_query($conn,$query1);
if($result1)
{
    echo '<script>
    alert("Successfully changed!");
     window.location.assign("changepassword.php");
    </script>';
}
    }
}





?>