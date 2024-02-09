<?php
require("config.php");
session_start();


if (isset($_POST['upload'])) {
    var_dump($_FILES['profilePic']);
    $filename = $_FILES['profilePic']['name'];
    $tmpname = $_FILES['profilePic']["tmp_name"];
    $type = $_FILES['profilePic']['type'];
    $filepath = "uploads/{$filename}";

    $userId = $_SESSION['id'];

    $sql = "UPDATE `users` SET `uwebsite`='{$filepath}' WHERE id='{$userId}'";

    $results = $conn->query($sql);

    if ($results) {
        move_uploaded_file($tmpname, $filepath);
    }

}

?>