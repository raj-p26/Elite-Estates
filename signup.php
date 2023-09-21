<?php
    session_start();
    include 'db.php';
    $data = array();

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO session_test (firstname, lastname, email, passwd, joining_date) VALUES ('$firstname', '$lastname', '$email', '$password', CURRENT_TIMESTAMP)";
    $result = $conn->query($sql);
    if (!$result) {
        $data['error'] = true;
        $data['errorMessage'] = "SQL Error";
    } else {
        $data['success'] = true;
        $data['successMessage'] = "Successfully Signed Up";
        $_SESSION['username'] = $firstname;
        $_SESSION['email'] = $email;
    }
    echo json_encode($data);
    // header('location: index.php');
?>