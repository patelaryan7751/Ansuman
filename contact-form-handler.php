<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];
    
    $emal_from = 'tripathy77ansu@gmail.com';
    $email_subject = "New Form Submission";
    $email_body = "UserName: $name.\n".
        "User Email: $visitor_email.\n".
         "User Message: $message.\n";

    $to = "tripathy77ansu@gmail.com";
    
    $headers = "From: $email_from \r\n";
   
    $headers .="Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$header);

    header("Location: index.html");

?>