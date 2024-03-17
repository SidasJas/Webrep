<?php
session_start();
include("connection.php");
include("functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Something was posted
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    

    // Check if the username is already taken
    $check_query = "SELECT * FROM users WHERE user_name = '$user_name'";
    $check_result = mysqli_query($con, $check_query);

    if (mysqli_num_rows($check_result) > 0) {
        // Username is already taken
        echo '<div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center; color:white; font-size:30px">';
        echo "Vartotojo vardas užimtas, pasirinkite kitą!";
        echo '</div>';
    } elseif (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {
        // Username is available, save to DB
        $user_id = random_num(20);
        $hashed_password = password_hash($password, PASSWORD_DEFAULT); // Hash the password
    
        $query = "INSERT INTO users (user_id, user_name, password) VALUES ('$user_id', '$user_name', '$hashed_password')";
    
        mysqli_query($con, $query);
    
        header("Location: login.php");
        die;
    }else {
        // Invalid input
        echo "Please enter valid information.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <style type="text/css">
        body {
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, sans-serif;
            overflow: auto;
            background: linear-gradient(315deg, rgba(101,0,94,1) 3%, rgb(56, 114, 169) 38%, rgb(44, 159, 150) 68%, rgb(21, 37, 103) 98%);
            animation: gradient 15s ease infinite;
            background-size: 400% 400%;
            background-attachment: fixed;
        }

        /* Top navigation bar style */
        .navbar {
            background-color: rgba(128, 128, 128, 0);
            padding: 10px 20px;
            display: flex;
            justify-content: right;
            align-items: center;
            border-bottom: 2px solid white;

        }

        /* Logo style */
        .logo{
            flex: 1;
        }
        .logo a {
            font-size: 35px;
            font-weight: 600;
            color: white;
            text-decoration: none;


        }

        /* Navigation links style */
        .navbar ul {
            margin: 0;
            padding: 0;
            list-style: none;
            display: flex;
        }

        .navbar ul li {
            margin-right: 25px;
        }

        .navbar ul li a {
            color: white;
            font-size: 18px;
            font-weight: bold;
            text-decoration: none;
        }

        /* Signup box style */
        #box {
            background-color: rgba(138, 43, 226, 0);
            margin: 50px auto;
            width: 300px;
            padding: 20px;
            border-radius: 10px;
            border: 2px solid #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }

        #box form div {
            font-size: 20px;
            margin-bottom: 10px;
            color: white;
            text-align: center;
        }

        #box input[type="text"],
        #box input[type="password"] {
            height: 40px;
            border-radius: 5px;
            padding: 4px;
            border: solid thin #aaa;
            width: 100%;
            box-sizing: border-box;
            margin-bottom: 10px;
        }

        #box button {
            padding: 0;
            height: 40px;
            border-radius: 5px;
            width: 100%;
            color: white;
            background-color: rgba(138, 43, 226, 0);
            border: 2px solid white;
            cursor: pointer;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #box button span {
            display: inline-block;
            width: 100%;
            text-align: center;
        }

        #box button:hover {
            background-color: #800080;
        }

        #box a {
            color: white;
            text-decoration: none;
        }

        #box a:hover {
            color: #ffd700;
        }

        @keyframes gradient {
            0% {
                background-position: 0% 0%;
            }
            50% {
                background-position: 100% 100%;
            }
            100% {
                background-position: 0% 0%;
            }
        }
    </style>
</head>
<body>
<nav class="navbar">
    <div class="logo">
        <a href="#">ShellyAPI</a>
    </div>
    <ul>
        <li><a href="#">Pagrindinis</a></li>
        <li><a href="#">Kontaktai</a></li>
        <li><a href="login.php">Prisijungti</a></li>
    </ul>

</nav>
<div id="box">
    <form method="post">
        <div>Registracija</div>
        <input type="text" name="user_name" placeholder="Vartotojo vardas"><br>
        <input type="password" name="password" placeholder="Slaptažodis"><br>
        <button type="submit"><span>Užsiregistruoti</span></button><br>
        <a href="login.php">Prisijungti</a>
    </form>
</div>
</body>
</html>
