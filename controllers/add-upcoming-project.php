<?php
    $upcoming_project_name = $_POST['project-name'];
    $upcoming_project_location = $_POST['project-location'];
    $upcoming_project_bhk = $_POST['project-bhk'];
    $upcoming_project_sqft = $_POST['project-sqft'];
    $upcoming_project_floor_level = $_POST['project-floor-level'];
    $expected_start_date = $_POST['project-start-date'];
    $expected_end_date = $_POST['project-end-date'];
    $project_status = $_POST['project-status'];
    $project_developer = $_POST['project-developer'];
    $image_1 = $_FILES['image--1']['name'];
    $image_2 = $_FILES['image--2']['name'];
    $image_3 = $_FILES['image--3']['name'];
    $data = array();
    include '../db.php';

    $result = $conn->query("INSERT INTO upcomimg_projects (upcoming_project_name, upcoming_project_location, upcoming_project_bhk, upcoming_project_sqft, upcoming_project_floor_level, upcoming_project_expected_start_date, upcoming_project_expected_end_date, upcoming_project_status, upcoming_project_developer, upcoming_project_image_1, upcoming_project_image_2, upcoming_project_image_3) VALUES ('$upcoming_project_name','$upcoming_project_location','$upcoming_project_bhk','$upcoming_project_sqft','$upcoming_project_floor_level','$upcoming_project_monthly_rent','$image_1','$image_2','$image_3')");
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
