<?php
    $servername = "localhost";
    $username = "root";
    $password = "Long2542k";
    $dbname = "week5";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
?>