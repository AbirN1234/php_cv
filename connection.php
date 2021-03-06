<?php
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $path = mysqli_connect('localhost','id12390258_mydb','Abirn','id12390258_mydb');

    $ins = "INSERT INTO contact SET name='$name', email='$email', subject='$subject', message='$message'";

    $path->query($ins);

    echo("Message sent successfull.");

?>