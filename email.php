<?php
    $to = 'corre.mathieu@gmail.com';
    $name = $_POST['firstName'];
    $last = $_POST['lastName'];
    $subject = $_POST['subject'];
    $message = $_POST['text'] . "\r\n" .  $_POST['email'];
    $headers = 'From: ' . $_POST['email'] . "\r\n" .
     'Reply-To: ' . $_POST['email'] . "\r\n" .
     'X-Mailer: PHP/' . phpversion();
    mail($to, $name, $last, $subject, $message, $headers);
    header('Location: /index.html');