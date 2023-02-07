<?php
use PHPMailer\PHPMailer\PHPMailer;
include("conn.php");
$id=$_GET['approve_id'];
$name=$_GET['approve_name'];
$email=$_GET['approve_email'];
$phone=$_GET['phone'];


// echo $id;
// echo $name;
// echo $email;
// echo $phone;
$query = "UPDATE cv SET approve=1 where id='$id'"; 
$r = mysqli_query($conn,$query);

if($r)
{
    $sql = 'INSERT INTO `login` (role_id,full_name,email,`password`)
VALUES (1,"Teacher","'.$name.$id.'@school.pk","teacher123")';
    $result = mysqli_query($conn,$sql);
    if($result)
    {
        // header("Location:pending_cv.php"); 

        // $name = $_POST['name'];
        // $email = $_POST['email'];
        // $Phone = $_POST['phone'];
        // $message = $_POST['message'];
    
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
        $mail->Body = 'Name : '.$name.'<br>Email : '.$email.'<br>Subject : '.$phone.'<br>Message : Your are invited for interview';
    
    
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

}
?>
