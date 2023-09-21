<?php
    $property_name = $_POST['rtmi-name'];
    $property_location = $_POST['rtmi-location'];
    $property_bhk = $_POST['rtmi-bhk'];
    $property_sqft = $_POST['rtmi-sqft'];
    $property_floor_level = $_POST['rtmi-floor-level'];
    $property_monthly_rent = $_POST['rtmi-monthly-rent'];
    $image_1 = $_FILES['image--1']['name'];
    $image_2 = $_FILES['image--2']['name'];
    $image_3 = $_FILES['image--3']['name'];
    $data = array();
    include '../db.php';

    $result = $conn->query("INSERT INTO ready_to_move_in (property_name, property_location, property_bhk, property_sqft, property_floor_level, property_monthly_rent, property_image_1, property_image_2, property_image_3) VALUES ('$property_name','$property_location','$property_bhk','$property_sqft','$property_floor_level','$property_monthly_rent','$image_1','$image_2','$image_3')");
    if ($result) {
        $data['success'] = true;
        move_uploaded_file($_FILES['image--1']['tmp_name'], '../images/property-images/' . $image_1);
        move_uploaded_file($_FILES['image--2']['tmp_name'], '../images/property-images/' . $image_2);
        move_uploaded_file($_FILES['image--3']['tmp_name'], '../images/property-images/' . $image_3);
    } else {
        $data['error'] = true;
    }

    echo json_encode($data);
?>
