<?php
use PHPMailer\PHPMailer\PHPMailer;

if(isset($_POST['name']) && isset($_POST['email'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $Phone = $_POST['phone'];
    $message = $_POST['message'];

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
    $mail->addAddress($_POST['email']);
    $mail->Subject = ("$name");
    // $mail->Body = $message;
    $mail->Body = 'Name : '.$_POST['name'].'<br>Email : '.$_POST['email'].'<br>Subject : '.$_POST['phone'].'<br>Message : '.$_POST['message'];


    if($mail->send()){
        // $status = "success";
        // $response = "Email is sent!";
        echo '<script>
         alert("Sent Successfully");
        window.location = "index.php";
        </script>';
    }
    else
    {
        $status = "failed";
        $response = "Something is wrong: <br>" . $mail->ErrorInfo;
    }

    exit(json_encode(array("status" => $status, "response" => $response)));
}

?>