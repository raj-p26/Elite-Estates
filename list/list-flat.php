<?php
    include '../db.php';
    $result = $conn->query("SELECT * FROM flats");
    $response = "<ul class=\"w-90 list-unstyled list-group mx-3\">";
    while($row = $result->fetch_array()) {
        $response = $response
        ."<li class='border list-group-item d-flex justify-content-between record' data-record-id='" . $row['flat_id'] . "' data-record-type='flat'>"
            .$row['flat_name']
            ."<div>"
                ."<a class=\"btn btn-primary me-3\" target=\"_blank\" href=\"view/view-flat.php?flat_id=" . $row['flat_id'] . "\">View</a>"
                ."<button class='btn btn-danger delete-btn'>Delete</button>"
            ."</div>"
        ."</li>";
    }
    $response = $response . "</ul>";

    echo $response;
?>