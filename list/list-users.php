<?php
    include '../db.php';
    $result = $conn->query("SELECT * FROM session_test");
    $response = "<ul class=\"w-90 list-unstyled list-group mx-3\">";
    while ($row = $result->fetch_array()) {
        if ($row['firstname'] == 'admin') continue;
        $response = $response
        ."<li class=\"list-group-item d-flex justify-content-between record\" data-record-id='" . $row['id'] . "' data-record-type='user'>"
            .$row['firstname']
            ."<div>"
                ."<button class='btn btn-danger delete-btn'>Delete</button>"
            ."<div>"
        ."</li>";
    }
    $response = $response . "</ul>";
    echo $response;
?>