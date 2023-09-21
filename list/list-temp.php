<?php
    $conn = new mysqli('localhost', 'root', '', 'real_estate');
    $result = $conn->query("SELECT * FROM temp");
    $response = "<ul class=\"w-90 list-unstyled mx-3\">";
    while ($row = $result->fetch_array()) {
        $response = $response
        ."<li class=\"border py-3 px-2 record\" data-record-id='" . $row['flat_id'] . "'>"
            .$row['flat_name']
            ."<a class=\"btn btn-primary\" target=\"_blank\" href=\"view/view-flat.php?flat_id=" . $row['flat_id'] . "\">View</a>"
            ."<button class='btn btn-danger delete-btn'>Delete</button>"
        ."</li>";
    }
    $response = $response . "</ul>";
    echo $response;
?>