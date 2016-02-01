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
    
}
