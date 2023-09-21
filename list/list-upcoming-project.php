<?php
    include '../db.php';
    $result = $conn->query("SELECT * FROM upcoming_projects");
    $response = "<ul class=\"w-90 mx-3 list-group list-unstyled\">";
    while($row = $result->fetch_array()) {
        $response = $response
        ."<li class='border list-group-item d-flex justify-content-between record' data-record-id='" . $row['upcoming_project_id'] . "' data-record-type='upcoming-project'>"
            .$row['upcoming_project_name']
            ."<div>"
            ."<a class=\"btn btn-primary me-3\" target=\"_blank\" href=\"view/view-up.php?up_id=" . $row['upcoming_project_id'] . "\">View</a>"
            ."<button class='btn btn-danger delete-btn'>Delete</button>"
            ."</div>"
        ."</li>";
    }
    $response = $response . "</ul>";

    echo $response;
?>