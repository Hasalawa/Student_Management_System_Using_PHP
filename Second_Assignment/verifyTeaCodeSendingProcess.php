<?php

session_start();

$otp = rand();

$user_id = $_SESSION["teacher"]["id"];

require "SMTP.php";
require "PHPMailer.php";
require "Exception.php";

use PHPMailer\PHPMailer\PHPMailer;

$sender = $_POST["s"];
$receiver = $_POST["r"];

if(empty($receiver)){
    echo("Please enter email.");
 }else if(!filter_var($receiver,FILTER_VALIDATE_EMAIL)){
    echo("Please enter the valid email.");
 }else{

    $db = new mysqli("localhost", "root", "Kh@17052002", "student_management_system", "3306");

    $stmt = $db->prepare("INSERT INTO `verification_code_teacher` (`user_id`, `code`) VALUES (?, ?)");
    $stmt->bind_param('is', $user_id, $otp);

    $stmt->execute();
    $stmt->close();
    $db->close();

    $dbms = new mysqli("localhost", "root", "Kh@17052002", "student_management_system", "3306");

    $q = "SELECT * FROM `teachers` WHERE `email`='" . $receiver . "'";

    $rs = $dbms->query($q);
    $num = $rs->num_rows;

    while ($d = $rs->fetch_assoc()) {

        // email code
        $mail = new PHPMailer;
        $mail->IsSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = $sender;
        $mail->Password = 'ciknsmsdehvqlqix';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;
        $mail->setFrom($sender, 'Kehan Hasalawa');
        $mail->addReplyTo($sender, 'Kehan Hasalawa');
        $mail->addAddress($receiver);
        $mail->isHTML(true);
        $mail->Subject = 'Student Management System Verification';
        $bodyContent = "Email:-" . " " . $d["email"] . "<br/>";
        $bodyContent .= "Password:-" . " " . $d["password"] . "<br/>";
        $bodyContent .= "OTP:-" . " " . $otp;
        $mail->Body    = $bodyContent;

        if (!$mail->send()) {
            echo 'Verification code sending failed, Please enter the valid email.';
        } else {
            echo 'Verification code has sent.';
        }
    }
}

?>