<?php
include("conn.php");
session_start();
if(isset($_POST['login-submit']))
{
$email_login = $_POST['email-login'];
$pass_login = $_POST['pass-login'];

$sql = 'SELECT * FROM `login` WHERE email = "'.$email_login.'" AND password =  "'.$pass_login.'"';
$result = mysqli_query($conn,$sql);
if($result)
{
    if(mysqli_num_rows($result)>0)
    {
        // $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

        $_SESSION['role_id'] = $result->fetch_assoc()['role_id'];
        $_SESSION['email'] = $email_login ;
        
        if($_SESSION['role_id'] == 3){
            $_SESSION['admin'] =  $_SESSION['role_id'];
          
            echo '<script>
            alert("Successfully Loged in");
            window.location.assign("index.php");
            </script>';
        }
        else if($_SESSION['role_id'] == 1)
        {
            $_SESSION['admin'] =  $_SESSION['role_id'];
            $_SESSION['email']=$email_login;
            echo '<script>
            alert("Successfully Loged in");
            window.location.assign("../teacher_admin/classes.php");
            </script>';
        }
       
      
      
    }
    else
    {
        echo '<script>
        alert("Sorry Wrong Input");
        window.location.assign("login.php");
        </script>';
    }
}
}
?>