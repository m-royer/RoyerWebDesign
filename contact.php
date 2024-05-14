<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
require_once(".env");

if($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['nonce'] == "gsYd5owyPgB8u6yp") {

    // Setup
    $output_array = [];
    $sender_name = htmlspecialchars($_POST['name']);
    $sender_email = htmlspecialchars($_POST['email']);
    $sender_message = htmlspecialchars($_POST['message']);

    $output_array['name'] = $sender_name;
    $output_array['org-name'] = htmlspecialchars($_POST['org-name']);
    $output_array['email'] = $sender_email;
    $output_array['url'] = htmlspecialchars($_POST['url']);
    $output_array['message'] = $sender_message;

    // send the mail
    $mail = new PHPMailer(true);
    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.dreamhost.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'mike@royerwebdesign.com';                     //SMTP username
        $mail->Password   = getenv("SMTP_PASS");                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom('mailer@royerwebdesign.com', 'RoyerWebDesign Mailer');
        $mail->addAddress('mike@royerwebdesign.com', 'Mike Royer');     //Add a recipient
        $mail->addReplyTo($sender_email, $sender_name);
    
        //Content
        $mail->isHTML(false);                                  //Set email format to HTML
        $mail->Subject = 'New message from RoyerWebDesign';
        $mail->Body    = $sender_message;
    
        $mail->send();
        $output_array["success"] = "true";
    } catch (Exception $e) {
        $output_array["success"] = "false";
        $output_array["error"] = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
    

    echo json_encode($output_array);
    die();
}

echo "Ah ah ah, you didn't say the magic word!";