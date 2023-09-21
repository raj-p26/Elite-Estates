<?php
    session_start();

    $conn = new mysqli('localhost', 'root', '', 'real_estate');
    $prop_id = $_POST['propId'];
    $user_email = $_SESSION['email'];
    $query = "SELECT id FROM session_test WHERE email='$user_email'";
    $user_id = $conn->query($query)->fetch_array()[0];

    $return_value = null;
    $range = $conn->query("SELECT COUNT(*) FROM agent_table")->fetch_array()[0];
    $random_agent_id = rand(1, $range);
    if ($_POST['propType'] == 'flat') {
        $result = $conn->query("INSERT INTO bought_flats (user_id, agent_id, flat_id) VALUES ('$user_id', '$random_agent_id', '$prop_id')");
        if ($result)
            $return_value = array('success' => true);
        else
            $return_value = array('success' => false, "message" => $conn->error);
    } else if ($_POST['propType'] == 'ready-to-move-in') {
        $result = $conn->query("INSERT INTO bought_ready_to_move_in (user_id, agent_id, property_id) VALUES ('$user_id', '$random_agent_id', '$prop_id')");
        if ($result)
            $return_value = array('success' => true,);
        else
            $return_value = array('success' => false, "message" => $conn->error);
    } else if ($_POST['propType'] == 'commercial-property') {
        $result = $conn->query("INSERT INTO bought_commercial_properties (user_id, agent_id, cp_id) VALUES ('$user_id', '$random_agent_id', '$prop_id')");
        if ($result)
            $return_value = array('success' => true);
        else
            $return_value = array('success' => false, "message" => $conn->error);
    } else if ($_POST['propType'] == 'upcoming-project') {
        $result = $conn->query("INSERT INTO registered_upcoming_projects (user_id, up_id) VALUES ('$user_id', '$prop_id')");
        if ($result)
            $return_value = array('success' => true);
        else
            $return_value = array('success' => false, "message" => $conn->error);
    }

    echo json_encode($return_value);
?>