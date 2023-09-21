<?php
    if (!isset($_POST['id'])) {
        die ('<h3>Stop right there, you criminal scum.</h3>');
    }
    $data = array();

    if ($_POST['type'] == 'flat') {
        $conn = new mysqli('localhost', 'root', '', 'real_estate');
        $image_array = $conn->query("SELECT flat_image_1, flat_image_3, flat_image_3 FROM flats WHERE flat_id=" . $_POST['id'])->fetch_array();
        $result = $conn->query("DELETE FROM flats WHERE flat_id=" . $_POST['id']);
        if ($result) {$data['success'] = true;}
        else {$data['errormessage'] = $conn->error;}
        if ($result) {
            if (file_exists($image_array[0]) && file_exists($image_array[1]) && file_exists($image_array[2])) {
                unlink($image_array[0]);
                unlink($image_array[1]);
                unlink($image_array[2]);
            }
            $data['success'] = true;
        } else {
            $data['success'] = false;
        }
    } else if ($_POST['type'] == 'commercial-property') {
        $conn = new mysqli('localhost', 'root', '', 'real_estate');
        $image_array = $conn->query("SELECT commercial_property_image_1, commercial_property_image_2, commercial_property_image_3 FROM commercial_properties WHERE commercial_property_id=" . $_POST['id'])->fetch_array();
        $result = $conn->query("DELETE FROM commercial_properties WHERE commercial_property_id=" . $_POST['id']);
        if ($result) {$data['success'] = true;}
        else {$data['errormessage'] = $conn->error;}
        if ($result) {
            $data['success'] = true;
            if (file_exists($image_array[0]) && file_exists($image_array[1]) && file_exists($image_array[2])) {
                unlink($image_array[0]);
                unlink($image_array[1]);
                unlink($image_array[2]);
            }
        } else {
            $data['success'] = false;
        }
    } else if ($_POST['type'] == 'ready-to-move-in') {
        $conn = new mysqli('localhost', 'root', '', 'real_estate');
        $image_array = $conn->query("SELECT property_image_1, property_image_3, property_image_3 FROM ready_to_move_in WHERE property_id=" . $_POST['id'])->fetch_array();
        $result = $conn->query("DELETE FROM ready_to_move_in WHERE property_id=" . $_POST['id']);
        if ($result) {$data['success'] = true;}
        else {$data['errormessage'] = $conn->error;}
        if ($result) {
            $data['success'] = true;
            if (file_exists($image_array[0]) && file_exists($image_array[1]) && file_exists($image_array[2])) {
                unlink($image_array[0]);
                unlink($image_array[1]);
                unlink($image_array[2]);
            }
        } else {
            $data['success'] = false;
        }
    }else if ($_POST['type'] == 'upcoming-project') {
        $conn = new mysqli('localhost', 'root', '', 'real_estate');
        $image_array = $conn->query("SELECT upcoming_project_image_1, upcoming_project_image_2, upcoming_project_image_3 FROM upcoming_projects WHERE upcoming_project_id=" . $_POST['id'])->fetch_array();
        $result = $conn->query("DELETE FROM upcoming_projects WHERE upcoming_project_id=" . $_POST['id']);
        if ($result) {$data['success'] = true;}
        else {$data['errormessage'] = $conn->error;}
        if ($result) {
            $data['success'] = true;
            if (file_exists($image_array[0]) && file_exists($image_array[1]) && file_exists($image_array[2])) {
                unlink($image_array[0]);
                unlink($image_array[1]);
                unlink($image_array[2]);
            }
        } else {
            $data['success'] = false;
        }
    }
    else if ($_POST['type'] == 'user') {
        $conn = new mysqli('localhost', 'root', '', 'real_estate');
        $result = $conn->query("DELETE FROM session_test WHERE id=" . $_POST['id']);
        if ($result) {$data['success'] = true;}
        else {$data['errormessage'] = $conn->error;}
    }
    else if ($_POST['type'] == 'agent') {
        $conn = new mysqli('localhost', 'root', '', 'real_estate');
        $image_array = $conn->query("SELECT agent_image FROM agent_table WHERE agent_id=" . $_POST['id'])->fetch_array();
        $result = $conn->query("DELETE FROM agent_table WHERE agent_id=" . $_POST['id']);
        if ($result) {$data['success'] = true;}
        else {$data['errormessage'] = $conn->error;}
        if ($result) {
            $data['success'] = true;
            if (file_exists($image_array[0])) {
                unlink($image_array[0]);
            }
        } else {
            $data['success'] = false;
        }
    }
    else if ($_POST['type'] == 'user-feedback') {
        $conn = new mysqli('localhost', 'root', '', 'real_estate');
        $result = $conn->query("DELETE FROM user_feedback WHERE id=" . $_POST['id']);
        if ($result) {$data['success'] = true;}
        else {$data['errormessage'] = $conn->error;}
    }
    echo json_encode($data);
?>