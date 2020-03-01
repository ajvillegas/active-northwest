<?php
/**
 * This file configures PHPMailer to handle contact form submissions.
 *
 * Rename to contact.php to use in this context, and fill out the
 * correct credentials for your host's SMTP server.
 *
 * @package    AceInTheHole
 * @author     Alexis J. Villegas
 * @link       http://www.alexisvillegas.com
 * @license    GPL-2.0+
 */

// Check if first name has a value and honeypot field is empty.
if (isset($_POST['c_fullname']) && empty($_POST['honeypot'])) {
    // Define submitted values.
    $name    = $_POST['c_fullname'];
    $email   = $_POST['c_email'];
    $type    = $_POST['c_type'];
    $message = $_POST['c_message'];

    date_default_timezone_set('Etc/UTC');

    require 'includes/vendors/phpmailer/PHPMailerAutoload.php';

    //Create a new PHPMailer instance.
    $mail = new PHPMailer;

    // Tell PHPMailer to use SMTP.
    $mail->isSMTP();
    $mail->Host = 'localhost'; // Replace with your host's SMTP name.
    $mail->Port = 25; // Replace with your host's SMTP port.
    // Set this to true if SMTP host requires authentication to send email.
    $mail->SMTPAuth = true;
    // Provide username and password.
    $mail->Username = 'username';
    $mail->Password = 'password';
    // Use a fixed address in your own domain as the from address.
    $mail->setFrom('email@domain.com', 'Your Name');
    // Send the message to yourself, or whoever should receive contact for submissions.
    $mail->addAddress('other.email@domain.com', 'Your Name');

    // Put the submitter's address in a reply-to header.
    if ($mail->addReplyTo($email, $name)) {
        $mail->Subject = 'Ace in the Hole Contact Form';
        $mail->isHTML(true);
        // Build a simple message body.
        $mail->Body = <<<EOT
Email: $email<br>
Name: $name<br>
Type: $type<br>
Message: $message
EOT;
        //Send the message, check for errors.
        if (! $mail->send()) {
            // Display error message.
            echo "Mailer Error:" .  $mail->ErrorInfo;
        } else {
            include 'includes/success-contact.html.php';
        }
    } else {
        include 'includes/contact.html.php';
    }
} else {
    include 'includes/contact.html.php';
}
