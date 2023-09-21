<?php
    // session_start();

    $conn = new mysqli('localhost', 'root', '', 'real_estate');
    if ($conn->connect_error) die ('Connection Error');

    $userTableSql = "CREATE TABLE IF NOT EXISTS session_test (
        id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(20) NOT NULL,
        lastname VARCHAR(20) NOT NULL,
        email VARCHAR(30) NOT NULL,
        passwd VARCHAR(30) NOT NULL,
        joining_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";
    
    $result = $conn->query($userTableSql);
    if (!$result) die ('Error: ' . $conn->error);

    $agentTableSql = "CREATE TABLE IF NOT EXISTS session_test_agents (
        id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
        agent_fullname VARCHAR(20) NOT NULL,
        agent_number VARCHAR(20) NOT NULL,
        agent_registered_address VARCHAR(100) NOT NULL,
        agent_company_type VARCHAR(20) NOT NULL,
        agent_email VARCHAR(35) NOT NULL,
        agent_city VARCHAR(35) NOT NULL,
        agent_state VARCHAR(30) NOT NULL,
        agent_join_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";

    $result = $conn->query($agentTableSql);
    if (!$result) die ('Error: ' . $conn->error);
?>