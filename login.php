<?php
require("config.php");
session_start();


if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='{$username}' and upassword='{$password}'";

    $results = $conn->query($sql);

    if ($results->num_rows > 0) {
        $row = $results->fetch_assoc();
        //var_dump($row);
        $_SESSION['id'] = $row['id'];
        $_SESSION['username'] = $row['username'];
        var_dump($_SESSION);
        Header("Location:profile.php");
    }

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

        h2 {
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

        input {
            margin-bottom: 15px;
            padding: 10px;
            width: 100%;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
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

        .register-link {
            margin-top: 10px;
            color: #007BFF;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s;
        }

        .register-link:hover {
            text-decoration: underline;
            color: #0056b3;
        }

        .error-message {
            color: #dc3545;
            margin-bottom: 15px;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <h2>Login</h2>

    <form action="login.php" method="post">
        Username: <input type="text" name="username" required><br>
        Password: <input type="password" name="password" required><br>
        <input type="submit" value="Login" name="login">
    </form>
    <a href="register.php" class="register-link">New User? Register</a>
</body>

</html>