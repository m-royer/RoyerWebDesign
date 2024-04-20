<?php

if($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['nonce'] == "gsYd5owyPgB8u6yp") {
    $output_array = [];
    $output_array['name'] = htmlspecialchars($_POST['name']);
    $output_array['org-name'] = htmlspecialchars($_POST['org-name']);
    $output_array['email'] = htmlspecialchars($_POST['email']);
    $output_array['url'] = htmlspecialchars($_POST['url']);
    $output_array['message'] = htmlspecialchars($_POST['message']);
    

    echo json_encode($output_array);
    die();
}

echo "Ah ah ah, you didn't say the magic word!";