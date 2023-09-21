<?php
    include '../db.php';
    $result = $conn->query("SELECT * FROM ready_to_move_in");
    $response = "<ul class=\"w-90 list-group mx-3 list-unstyled\">";
    while($row = $result->fetch_array()) {
        $response = $response
        ."<li class='border list-group-item record d-flex justify-content-between' data-record-id='" . $row['property_id'] . "' data-record-type='ready-to-move-in'>"
            .$row['property_name']
            ."<div>"
            ."<a class=\"btn btn-primary me-3\" target=\"_blank\" href=\"view/view-rtmi.php?rtmi_id=" . $row['property_id'] . "\">View</a>"
            ."<button class='btn btn-danger delete-btn'>Delete</button>"
            ."</div>"
        ."</li>";
    }
    $response = $response . "</ul>";

    echo $response;
?>