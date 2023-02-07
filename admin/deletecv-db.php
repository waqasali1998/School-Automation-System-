<?php
use PHPMailer\PHPMailer\PHPMailer;
include("conn.php");
$id=$_GET['delete_id'];
$name=$_GET['approve_name'];
$email=$_GET['approve_email'];
$phone=$_GET['phone'];
$query = "UPDATE cv SET approve = 2 where id='$id'"; 


$r = mysqli_query($conn,$query);
if($r)
{
    require_once "PHPMailer/PHPMailer.php";
    require_once "PHPMailer/SMTP.php";
    require_once "PHPMailer/Exception.php";

    $mail = new PHPMailer();

    //smtp settings
    $mail->isSMTP();
    $mail->SMTPDebug = 0;
    $mail->Host = "smtp.gmail.com"; // host name
    $mail->SMTPAuth = true;
    $mail->Username = "romailbutt8@gmail.com";
    $mail->Password = 'gtgkmdgjgepkboxc';
    $mail->Port = 465;
    $mail->SMTPSecure = "ssl";


    //email settings
    $mail->isHTML(true);
    $mail->setFrom('romailbutt8@gmail.com', 'Clarks Power Washing Contact Form'); //from email
    $mail->addAddress($email);
    $mail->Subject = ("$name");
    // $mail->Body = $message;
    $mail->Body = 'Name : '.$name.'<br>Email : '.$email.'<br>Subject : '.$phone.'<br>Message : Your CV has been rejected';


    if($mail->send()){
        // $status = "success";
        // $response = "Email is sent!";
        echo '<script>
         alert("Sent Successfully");
        window.location = "pending_cv.php";
        </script>';
    }
    else
    {
        $status = "failed";
        $response = "Something is wrong: <br>" . $mail->ErrorInfo;
    }

    exit(json_encode(array("status" => $status, "response" => $response)));
}
// header("Location:pending_cv.php"); 
?>
