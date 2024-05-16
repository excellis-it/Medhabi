<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $hear = $_POST['hear_about'];
    $school = $_POST['school_name'];
    $country = $_POST['country_name'];
    $state = $_POST['state_name'];
    $city = $_POST['mx_City'];
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
        $mail->setFrom("contact@msu.edu.in", 'Medhavi Contact Form Details'); //send from
        $mail->addAddress("contact@msu.edu.in");         //send to   
        $mail->AddCC("subhradeep.pixelstreet@gmail.com");
        $mail->isHTML(true);
        $mail->Subject = "Medhavi Contact Form Details";
        $mail->Body = "<h1>Medhavi Contact Form Details : </h1><h3>Name: " . $name . "</h3>
            <h3>Email Id: " . $email . "</h3> <h3>Phone Number: " . $phone . " </h3> <h3>Where did you hear about us: " . $hear . "</h3> <h3>School Name: " . $school . "</h3> <h3>Country Name: " . $country . "</h3> <h3>State Name: " . $state . "</h3> <h3>City: " . $city . "</h3>";

        if ($mail->Send()) {
            header('Location: https://www.msu.edu.in/thank-you.html');
        }
    } catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }
}
