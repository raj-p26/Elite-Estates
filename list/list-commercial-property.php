<?php
    include '../db.php';
    $result = $conn->query("SELECT * FROM commercial_properties");
    $response = "<ul class=\"w-90 list-unstyled list-group mx-3\">";
    while($row = $result->fetch_array()) {
        $response = $response
        ."<li class=\"border list-group-item d-flex justify-content-between record\" data-record-id='" . $row['commercial_property_id'] . "' data-record-type='commercial-property'>"
            .$row['commercial_property_name']
            ."<div>"
                ."<a class=\"btn btn-primary me-3\" target=\"_blank\" href=\"view/view-cp.php?cp_id=" . $row['commercial_property_id'] . "\">View</a>"
                ."<button class='btn btn-danger delete-btn'>Delete</button>"
            ."</div>"
        ."</li>";
    }
    $response = $response . "</ul>";

    echo $response;
?>