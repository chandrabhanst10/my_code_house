<?php
$name=$_POST[''];
$visitor_email=$_POST[''];
$subject=$_POST[''];
$message=$_POST[''];

$email_from='technorigenchandrabhan1998@gmail.com';
$email_subject='New form submission';
$email_body="user name: $name.\n"
            "user email: $visitor_email.\n"
            "subject: $subject.\n"
            "user message: $message.\n";


 $to='technorigenchandrabhan1998@gmail.com';

 $headers='from: $email_from\r\n' ;
 $headers= "reply-to: $visitor_email\r\n"   

 mail($to,$email_subject,$email_body,$headers)  ;     

 header("Location: contact.html")
?>