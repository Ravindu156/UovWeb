<?php
require("config.php");

if (isset($_GET['id'])) {
    $userId = $_GET['id'];

    $sqlPath = "SELECT `uwebsite` FROM `users` WHERE id='{$userId}'";

    $resultsPath = $conn->query($sqlPath);
    $pathRow = $resultsPath->fetch_assoc();

    $path = $pathRow['uwebsite'];

    unlink($path);

    $sqlDelete = "UPDATE `users` SET `uwebsite`='' WHERE id='{$userId}'";

    $resultsDelete = $conn->query($sqlDelete);


}

?>