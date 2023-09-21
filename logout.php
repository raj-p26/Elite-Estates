<?php
    session_start();
    include 'db.php';
    $data = array();
    if ($_GET['action'] == 'delete') {
        $sql = "DELETE FROM session_test WHERE email = '" . $_SESSION['email'] ."'";
        
        $result = $conn->query($sql);
        if (!$result) {
            $data['error'] = true;
            $data['errorMessage'] = "SQL Error";
        } else {
            $data['success'] = true;
            $data['successMessage'] = "Account Deleted Successfully!";
            session_unset();
            session_destroy();
        }
    } else if($_GET['action'] == 'logout') {
        $data['success'] = true;
        $data['successMessage'] = "Successfully signed out";
        session_unset();
        session_destroy();
    } else {
        $data['error'] = true;
        $data['errorMessage'] = "Invalid Method!";
    }
    echo json_encode($data);
?>