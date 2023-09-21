<?php
    $commercial_property_name = $_POST['cp-name'];
    $commercial_property_location = $_POST['cp-location'];
    $commercial_property_bhk = $_POST['cp-bhk'];
    $commercial_property_sqft = $_POST['cp-sqft'];
    $commercial_property_floor_level = $_POST['cp-floor-level'];
    $commercial_property_monthly_rent = $_POST['cp-monthly-rent'];
    $image_1 = $_FILES['image--1']['name'];
    $image_2 = $_FILES['image--2']['name'];
    $image_3 = $_FILES['image--3']['name'];
    $data = array();
    include '../db.php';

    $result = $conn->query("INSERT INTO commercial_properties (commercial_property_name, commercial_property_location, commercial_property_bhk, commercial_property_sqft, commercial_property_floor_level, commercial_property_monthly_rent, commercial_property_image_1, commercial_property_image_2, commercial_property_image_3) VALUES ('$commercial_property_name','$commercial_property_location','$commercial_property_bhk','$commercial_property_sqft','$commercial_property_floor_level','$commercial_property_monthly_rent','$image_1','$image_2','$image_3')");
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
