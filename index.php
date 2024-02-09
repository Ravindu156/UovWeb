<!DOCTYPE html>
<html lang="en">

<head>
    <title>ICAE2</title>
    <style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f4f4f4;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100vh;
        /* Make the container take the full height of the viewport */
        margin: 0;
        /* Remove default margin to prevent unwanted spacing */
    }

    h1 {
        color: #007BFF;
    }

    ul {
        list-style: none;
        padding: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    li {
        margin: 10px 0;
    }

    a {
        text-decoration: none;
        color: #007BFF;
        font-weight: bold;
        padding: 8px 16px;
        border: 1px solid #007BFF;
        border-radius: 5px;
        transition: background-color 0.3s;
        margin: 5px;
        /* Add margin to separate buttons */
    }

    a:hover {
        background-color: #0056b3;
        color: #fff;
    }

    /* Add this style to display buttons side by side */
    @media (min-width: 600px) {
        ul {
            flex-direction: row;
        }
    }
    </style>
</head>

<body>

    <h1>Welcome to UoV</h1>
    <ul>
        <li><a href="register.php" >Register</a></li>
        <li><a href="login.php">Login</a></li>
    </ul>
</body>

</html>