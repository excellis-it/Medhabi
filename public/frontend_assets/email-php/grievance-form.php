<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if (isset($_POST['submit'])) {
    // print_r($_POST);die();
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $reg = $_POST['registration'];
    $prog = $_POST['programme'];
    $cat = $_POST['category-grievance'];
    $message = $_POST['message'];
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
        $mail->setFrom("contact@msu.edu.in", 'Grievance Redressal Form Details'); //send from
        $mail->addAddress("contact@msu.edu.in"); //send to   
        // $mail->AddCC("khurshid@pixelstreet.in");
        // $mail->AddCC("subhradeep.pixelstreet@gmail.com");
        $mail->isHTML(true);
        $mail->Subject = "Grievance Redressal Form Details";
        $mail->Body = "<h1>Grievance Redressal Form Details : </h1><h3>Your Name: " . $name . "</h3>
            <h3>Email: " . $email . "</h3>
            <h3>Gender: " . $gender . "</h3>
            <h3>Registration: " . $reg . "</h3>
            <h3>Programme: " . $prog . "</h3>
            <h3>Category Grievance: " . $cat . "</h3>
            <h3>Email: " . $email . "</h3>
            <h3>Phone: " . $phone . "</h3>
            <h3>Message: " . $message . "</h3>";

        if ($mail->Send()) {
            header('Location: https://www.msu.edu.in/thank-you');
        }
    } catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }
}
