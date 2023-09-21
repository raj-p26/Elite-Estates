<?php
    $flat_name = $_POST['flat-name'];
    $flat_location = $_POST['flat-location'];
    $flat_bhk = $_POST['flat-bhk'];
    $flat_sqft = $_POST['flat-sqft'];
    $flat_floor_level = $_POST['flat-floor-level'];
    $flat_monthly_rent = $_POST['flat-monthly-rent'];
    $age_of_construction = $_POST['flat-age-of-construction'];
    $water_availability = $_POST['flat-water-availability'];
    $electricity_status = $_POST['flat-electricity-status'];
    $image_1 = $_FILES['image--1']['name'];
    $image_2 = $_FILES['image--2']['name'];
    $image_3 = $_FILES['image--3']['name'];
    $data = array();
    include '../db.php';

    $result = $conn->query("INSERT INTO flats(flat_name, flat_location, flat_bhk, flat_sqft, flat_floor_level, flat_monthly_rent, flat_age_of_construction, flat_water_availability, flat_electricity_status, flat_image_1, flat_image_2, flat_image_3) VALUES ('$flat_name','$flat_location','$flat_bhk','$flat_sqft','$flat_floor_level','$flat_monthly_rent','$age_of_construction','$water_availability','$electricity_status','$image_1','$image_2','$image_3')");
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
