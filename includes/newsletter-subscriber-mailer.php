<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
    //Get tje post data
    $name = strip_tags(trim($_POST['name']));
    //checking the posted value is email adress
    $email  = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $recipient = $_POST['recipient'];
    $subject = $_POST['subject'];
    
    //Validation
    if(empty($name) || empty($email)){
        //send Error
        http_response_code(400);
        echo 'Please fillout all fields';
        exit;
    }
    
    //Build Email
    
    $message = "Name: $name \n";
    $message .= "Email: $email\n\n";
    
    // Build Headers
    $headers = "From: $name <$email>";
    
    //send emial
    
    if(mail($recipient, $subject, $message, $headers)){
        http_response_code(200);
        echo "You are now subscribed";
    } else {
        http_response_code(500);
        echo "There is a problem";
    }
} else {
    http_response_code(403);
        echo "There was a problem";
}
