<?php
    session_start();
    include 'db.php';
    $name = $_POST['full-name'];
    $email = $_POST['email'];
    $feedbackMessage = $_POST['message'];

    $sql = "INSERT INTO user_feedback (username, user_email, user_feedback) VALUES ('$name', '$email', '$feedbackMessage')";

    $conn->query($sql);
?>