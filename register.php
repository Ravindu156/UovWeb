<?php
require("config.php");

if (isset($_POST['submitbtn'])) {
    $name = $_POST["name"];
    $uname = $_POST["uname"];
    $uemail = $_POST["uemail"];
    $upassword = $_POST["upassword"];


    $sql = "INSERT INTO `users`(`uname`, `username`, `uemail`, `upassword`) VALUES ('{$name}','{$uname}','{$uemail}','{$upassword}')";

    $results = $conn->query($sql);

    if (!$results) {
        echo "Insert failuire";
    } else {
        Header("Location:login.php");
    }


}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>ICAE2</title>
    <style>
    .requiredlabel {
        color: #FF0000;
        font-weight: bold;
    }

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

    h2 {
        color: #007BFF;
        margin-bottom: 8px;
    }

    form {
        background-color: #fff;
        padding: 10px 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 300px;
        max-width: 100%;
    }

    input {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .error {
        color: #FF0000;
        font-size: 14px;
        font-weight: bold;
    }

    input[type="submit"],
    input[type="reset"] {
        background-color: #007BFF;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    input[type="submit"]:hover,
    input[type="reset"]:hover {
        background-color: #0056b3;
    }

    .login-link {
        margin-top: 3px;
        color: #007BFF;
        text-decoration: none;
        font-weight: bold;
        transition: color 0.3s;
    }

    .login-link:hover {
        text-decoration: underline;
        color: #0056b3;
    }
    </style>
</head>

<body>
    <h2>Register</h2>

    <form method="post" action="register.php">
        <p><span class="requiredlabel">* required field</span></p>

        <span class="error">* </span><br>

        Name: <span class="error">* </span>
        <input type="text" name="name" value="">
        <br>

        Username: <span class="error">* </span>
        <input type="text" name="uname" value="">
        <br>

        E-mail: <span class="error">* </span>
        <input type="text" name="uemail" value="">
        <br>

        Password: <span class="error">* </span>
        <input type="text" name="upassword" value="">
        <br>



        <input type="submit" name="submitbtn" value="Submit">
        <input type="reset" name="resetbtn" value="Reset">
    </form>

    <a href="login.php" class="login-link">Already have an account? Login</a>
</body>

</html>