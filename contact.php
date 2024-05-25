<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
require_once(".env");

session_start();

$token = filter_input(INPUT_POST, 'token', FILTER_SANITIZE_STRING);
if($_SERVER['REQUEST_METHOD'] == "POST" && $token && $token == $_SESSION['token']) {

    // Setup
    $output_array = [];
    $sender_name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $sender_org_name = filter_input(INPUT_POST, 'org-name', FILTER_SANITIZE_STRING);
    $sender_email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $sender_url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_STRING);
    $sender_message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);

    $output_array['name'] = $sender_name;
    $output_array['org-name'] = $sender_org_name;
    $output_array['email'] = $sender_email;
    $output_array['url'] = $sender_url;
    $output_array['message'] = $sender_message;

    // Hardcoded because this is small and only going to me
    $body = ("
    <html>
    <head>
    <style>
        body {
            font: Arial 18px;
            background: #FFFFFF;
            color: #222;
        }

        table {
            background: #f1f1f1;
            padding: 2px;
            max-width: 600px;
            margin: 5px;
        }

        tr {
            margin: 1px 0;
        }

        td {
            padding: 2px;
            margin: 3px;
            background: #dcf0f4;
        }
    </style>
    </head>
    <body>
    <p style=\"font-size: 1.1em;\">New Royer Web Design message from {$sender_name}.</p>
    <table cols=2>
        <tr>
        <td>
            Name: <br />
            {$sender_name}
        </td>
        <td>
            Organization: <br />
            {$sender_org_name}
        </td>
        </tr>

        <tr>
        <td colspan=2>
            Web URL: <br />
            <a href=\"{$sender_url}\">{$sender_url}</a>
        </td>
        </tr>

        <tr>
        <td colspan=2>
            Message: <br />
            {$sender_message}
        </td>
        </tr>
    </table>
    </body>
    </html>
    ");

    // send the mail
    $mail = new PHPMailer(true);
    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.dreamhost.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'mailer@royerwebdesign.com';                     //SMTP username
        $mail->Password   = getenv("SMTP_PASS");                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom('mailer@royerwebdesign.com', 'RoyerWebDesign Mailer');
        $mail->addAddress('mike@royerwebdesign.com', 'Mike Royer');     //Add a recipient
        $mail->addReplyTo($sender_email, $sender_name);
    
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'New message from RoyerWebDesign';
        $mail->Body    = $body;
    
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