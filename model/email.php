<?php
// Load PHPMailer classes
set_include_path('C:\wamp64\www\book_apps\PHPMailer');
require 'PHPMailerAutoload.php';


function send_email($to_address, $to_name, $subject, $body, $is_body_html = false) {
    // Create PHPMaielr object
    $mail = new PHPMailer();

    //Set parameters for PHPMaielr object
    $mail->isSMTP();                               // Set mailer to use SMTP
    $mail->Host = '';                // Set SMTP server
    $mail->SMTPSecure = 'tls';                     // Set encryption type
    $mail->Port = 587;                             // Set TCP port
    $mail->SMTPAuth = true;                        // Enable SMTP authentication
    $mail->Username = ''; // Set SMTP username
    $mail->Password = '';                  // Set SMTP password
    
    // Set From address, To address, subject, and body
    $mail->setFrom('', 'My Guitar Shop');
    $mail->addAddress($to_address, $to_name);
    $mail->Subject = $subject;
    $mail->Body = $body;                  // Body with HTML
    if ($is_body_html) {
        $mail->isHTML(true);              // Enable HTML
    }
    
    if(!$mail->send()) {
        throw new Exception('Error sending email: ' .
                            htmlspecialchars($mail->ErrorInfo) );        
    }
}