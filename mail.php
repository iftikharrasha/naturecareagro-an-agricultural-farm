<?php

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

require 'vendor/autoload.php';

if (($_POST['name_typed'] != "") && ($_POST['email_typed'] != "")) {
    $name_typed = $_POST['name_typed'];
    $subject_typed = $_POST['subject_typed'];
    $email_typed = $_POST['email_typed'];
    $message_typed = $_POST['message_typed'];

    require 'phpmailer/PHPMailerAutoload.php';

    $mail = new PHPMailer(true);

    try {

        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 587;
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'tls';
        $mail->Username = 'contact@iftikharrasha.com';
        $mail->Password = '22Novemb';

        $mail->setFrom($email_typed, $name_typed);
        $mail->addAddress('contact@iftikharrasha.com');
        $mail->addReplyTo($email_typed, $name_typed);

        $mail->isHTML(true);
        $mail->Subject = $subject_typed;
        $mail->Body = '<p>Name: ' . $name_typed . '<br>Email: ' . $email_typed . '<br>Description: ' . $message_typed . '</p>';

        $mail->send();
        echo '
        <h5>
            We have received your enquiry<br>We will contact you soon,
            <br>Thank You!
        </h5>
        ';
    } catch (Exception $e) {
        echo '
        <h5>The message could not be sent.</h5>Mail Error: ', $mail->ErrorInfo;
    }
} else {
    echo "<h5>Something went wrong!</h5>";
}
