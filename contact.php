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
    $sender_message = nl2br( filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING) );

    $output_array['name'] = $sender_name;
    $output_array['org-name'] = $sender_org_name;
    $output_array['email'] = $sender_email;
    $output_array['url'] = $sender_url;
    $output_array['message'] = $sender_message;

    // Hardcoding because this is small and only going to me
    $body = ("
    <html>
    <head>
        <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
        <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
        <link href=\"https://fonts.googleapis.com/css2?family=Roboto&display=swap\" rel=\"stylesheet\">
        <style>
            html,body {
                width: 100%;
                height: 100%;
            }

            body {
                font-family: \"Roboto\", sans-serif;
                font-weight: 400;
                font-style: normal;
                font-size: 14px;
                background: #f1f1f1;
                color: #333;
                text-align: center;
            }

            table {
                border-spacing: 10px;
                width: 100%;
                max-width: 600px;
                margin: 10px auto;

            }

            tr {
                margin: 1px 0;
            }

            td {
                padding: 5px;
                background: #c6e6f9;
                border: solid 1px #a5c7db;
            }

            p {
                width: 100%;
                max-width: 600px;
                font-size: 9px;
            }
        </style>
    </head>
    <body>
    <p style=\"font-size: 1.1em; font-weight: bold; text-align: center; \">New Royer Web Design message from {$sender_name}.</p>
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
            <a href=\"https://{$sender_url}\">{$sender_url}</a>
        </td>
        </tr>

        <tr>
        <td colspan=2>
            Message: <br />
            {$sender_message}
        </td>
        </tr>
    </table>
    <p>IP: {$_SERVER['REMOTE_ADDR']}</p>
    <p>Agent: {$_SERVER['HTTP_USER_AGENT']}</p>
    </body>
    </html>
    ");

    // send the mail
    $mail = new PHPMailer(true);
    try {
        //Server settings
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.dreamhost.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'websend@royerwebdesign.com';                     //SMTP username
        $mail->Password   = getenv("SMTP_PASS");                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom('websend@royerwebdesign.com', 'RoyerWebDesign Mailer');
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