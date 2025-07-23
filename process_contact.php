<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// require 'vendor/autoload.php';


require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
require 'PHPMailer/Exception.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name    = htmlspecialchars($_POST['name']);
    $email   = htmlspecialchars($_POST['email']);
    $phone   = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    $mail = new PHPMailer(true);

    try {
        // SMTP settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'drmukesh496@gmail.com';     // 🔁 Your Gmail
        $mail->Password   = 'cvbpfaatwdusxytm';        // 🔁 Gmail App Password
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        // Mail setup
        $mail->setFrom('yourgmail@gmail.com', 'DK Admission Consulting');
        $mail->addAddress('drmukesh496@gmail.com');       // 🔁 where mail will be received

        $mail->isHTML(true);
        $mail->Subject = "New Contact Form Submission from $name";
        $mail->Body    = "
            <h3>New Message</h3>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Phone:</strong> $phone</p>
            <p><strong>Message:</strong><br>$message</p>
        ";

        $mail->send();
        $_SESSION['mailSuccess'] = "Message sent successfully!";
    } catch (Exception $e) {
        $_SESSION['mailError'] = "Mailer Error: " . $mail->ErrorInfo;
    }

    header("Location: contactus.php");
    exit;
}
?>
