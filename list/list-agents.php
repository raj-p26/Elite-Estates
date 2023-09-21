<?php
    include '../db.php';
    $result = $conn->query("SELECT * FROM agent_table");
    $response = "<ul class=\"w-90 list-unstyled list-group mx-3\">";
    while($row = $result->fetch_array()) {
        $response = $response
        ."<li class='border list-group-item d-flex justify-content-between record' data-record-id='" . $row[0] . "' data-record-type='agent'>"
            .$row['agent_name']
            ."<div>"
            ."<button class='btn btn-danger delete-btn'>Delete</button>"
            ."</div>"
        ."</li>";
    }
    $response = $response . "</ul>";

    echo $response;
?>