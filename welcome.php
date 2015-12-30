<?php 

$name = $_POST['name'];
$email = $_POST['email'];

$to = 'riley@rileybathurst.com';
$subject =  $name ;
$message = 'email' .
            $email ;

mail($to, $subject, $message);
    
?>