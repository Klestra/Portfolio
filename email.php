<?php
    $to = 'corre.mathieu@gmail.com';
    $subject = $_POST['subject'];
    $message = $_POST['text'] . "\r\n" . "\r\n" . $_POST['surName'] . " "  . $_POST['firstName'];
    $headers = 'From: ' . $_POST['email'] . "\r\n" .
     'Reply-To: ' . $_POST['email'] . "\r\n" .
     'X-Mailer: PHP/' . phpversion();
    mail($to, $subject, $message, $headers);
    header('Location: /index.html');
    