<?php
include('config.php');
session_start();

if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>ICAE2</title>
    <style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f8f9fa;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100vh;
        margin: 0;
    }

    h1 {
        color: #007BFF;
        margin-bottom: 20px;
    }

    form {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 300px;
        max-width: 100%;
    }

    label {
        display: block;
        margin-bottom: 10px;
        color: #333;
    }

    input {
        margin-bottom: 15px;
        padding: 10px;
        width: 100%;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    input[type="password"] {
        margin-bottom: 15px;
    }

    input[type="submit"] {
        background-color: #007BFF;
        color: #fff;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    input[type="submit"]:hover {
        background-color: #0056b3;
    }

    a {
        color: #007BFF;
        text-decoration: none;
        font-weight: bold;
        margin-top: 10px;
        transition: color 0.3s;
    }

    a:hover {
        color: #0056b3;
    }

    .error {
        color: #FF0000;
        font-size: 14px;
        font-weight: bold;
    }
    </style>
</head>

<body>
    <h1>Change Password</h1>

    <form method="post">

        Current Password:
        <input type="password" name="current_password"><br>


        New Password: <span class="error">*</span>
        <input type="text" name="new_password" value=""><br>

        <input type="submit" name="passchangebtn" value="Change Password">
    </form>
    <a href="profile.php">Back to Profile</a>
</body>

</html>