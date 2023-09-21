<?php
    include '../db.php';
    $result = $conn->query("SELECT * FROM user_feedback");
    $response = "<ul class=\"w-90 list-unstyled list-group mx-3\">";
    while($row = $result->fetch_array()) {
        $response = $response
        ."<li class='list-group-item d-flex justify-content-between record' data-record-id='" . $row['id'] . "' data-record-type='user-feedback'>"
            .$row['user_feedback']
            ."<div>"
                ."<button class='btn btn-danger delete-btn'>Delete</button>"
            ."</div>"
        ."</li>";
    }
    $response = $response . "</ul>";

    echo $response;
?>