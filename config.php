<?php
$conn = new mysqli("localhost", "root", "", "system");

if ($conn->connect_error) {
    die("error");
}

//echo "success";
?>