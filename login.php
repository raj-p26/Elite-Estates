<?php
    session_start();
    include 'db.php';
    $data = array();

    $email = $_POST['email'];
    $password = $_POST['password'];

    $emailQuery = "SELECT * FROM session_test WHERE email = '$email'";
    $result = $conn->query($emailQuery)->fetch_assoc();
    if (!$result) {
        $data['error'] = true;
        $data['errorMessage'] = "Please login with correct credentials";
    } else {
        $creds = $conn->query("SELECT * FROM session_test WHERE password='" . $result['password'] . "'");
        $data['isAdmin'] = $result['firstname'] === 'admin' ? true : false;
        $data['success'] = true;
        $data['successMessage'] = 'Logged In Successfully';
        $_SESSION['isAdmin'] = $result['firstname'] === 'admin' ? true : false;
        $_SESSION['username'] = $result['firstname'];
        $_SESSION['email'] = $result['email'];
    }
    echo json_encode($data);
?>
