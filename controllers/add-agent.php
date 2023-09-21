<?php
    $agent_name = $_POST['agent-name'];
    $agent_dob = $_POST['agent-dob'];
    $agent_phone = $_POST['agent-phone'];
    $agent_email = $_POST['agent-email'];
    $agent_address = $_POST['agent-address'];
    $image = $_FILES['image--1']['name'];
    $data = array();
    $conn = new mysqli('localhost', 'root', '', 'real_estate');

    $result = $conn->query("INSERT INTO agent_table (agent_name, agent_dob, agent_phone, agent_email, agent_address, agent_image) VALUES ('$agent_name', '$agent_dob', '$agent_phone', '$agent_email', '$agent_address', '$image')");
    if ($result) {
        $data['success'] = true;
        move_uploaded_file($_FILES['image--1']['tmp_name'], '../images/agent-images/' . $image);
    } else {
        $data['error'] = true;
    }

    echo json_encode($data);
?>
