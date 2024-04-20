<?php

if($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['none'] == "gsYd5owyPgB8u6yp") {
    $output_array = [];
    $output_array['name'] = htmlspecialchars($_POST['name']);
    $output_array['org-name'] = htmlspecialchars($_POST['org-name']);
    $output_array['email'] = htmlspecialchars($_POST['email']);
    $output_array['url'] = htmlspecialchars($_POST['url']);
    $output_array['message'] = htmlspecialchars($_POST['message']);
    

    return json_encode($output_array);
}

return "Ah ah ah, you didn't say the magic word!";