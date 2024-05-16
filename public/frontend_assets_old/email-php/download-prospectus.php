<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if (isset($_POST['submit'])) {
    // print_r($_POST);die();
    $your_name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $mail = new PHPMailer(true);
    try {
        $mail->SMTPDebug = 0;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'pixelstreetdev@gmail.com'; //put your gmail email id                                        
        $mail->Password = 'fzzafjvhehwahcmi';  //put your gmail password
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;
        $mail->setFrom("contact@msu.edu.in", 'Download Prospectus Form Details'); //send from
        $mail->addAddress("contact@msu.edu.in"); //send to   
        // $mail->AddCC("khurshid@pixelstreet.in");
        // $mail->AddCC("subhradeep.pixelstreet@gmail.com");
        $mail->isHTML(true);
        $mail->Subject = "Download Prospectus Form Details";
        $mail->Body = "<h1>Download Prospectus Form Details : </h1><h3>Your Name: " . $your_name . "</h3>
            <h3>Email: " . $email . "</h3>
            <h3>Phone: " . $phone . "</h3>";

        if ($mail->Send()) {
            header('Location: https://www.msu.edu.in/thank-you.html');
        }
    } catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }
}
