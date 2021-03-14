<?php

#Receive user input
$lastname = $_POST[' lastname'];
$firstname = $_POST['firstname'];
$email = $_POST['email'];
$yourstress = $_POST['resume'];


#Filter user input
function filter_email_header($form_field) {  
    return preg_replace('/[nr|!/<>^$%*&]+/','',$form_field); 
    }

    $email = filter_email_header($email);


#Send email

$headers = "From: $email";
$sent = mail('Feedback', $yourstress, $headers) ;

#Thank user or notify them of a problem
if ($sent) {

    ?><html>
    <head>
    <title>Thank You</title>
    </head>
    <body>
    <h1>Thank You</h1>
    <p>We have received your request.
        Mr Clavier get back to you in less than one hour
    </p>
    </body>
    </html>
    <?php
    
    } else {
    
    ?><html>
    <head>
    <title>Something went wrong</title>
    </head>
    <body>
    <h1>Something went wrong</h1>
    <p>We could not send your feedback. Please try again.</p>
    </body>
    </html>
    <?php
    }
    ?>
