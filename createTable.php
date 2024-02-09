<?php
require("config.php");

$sql = "CREATE TABLE users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        uname VARCHAR(50) NOT NULL,
        username VARCHAR(50) NOT NULL,
        uemail VARCHAR(100) NOT NULL,
        upassword VARCHAR(255) NOT NULL,
        uwebsite VARCHAR(255)
);";

$results = $conn->query($sql);

if ($results) {
    echo "table created successfully";
}

?>