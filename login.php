<?php

session_start();

include("connection.php");
include("functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Something was posted
    $user_name = $_POST['user_name'];
    $password = $_POST['password']; 
    
    if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {
        // Read from database
        $query = "SELECT * FROM users WHERE user_name = '$user_name' LIMIT 1";
        $result = mysqli_query($con, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);

            // Verify the password
            if (password_verify($password, $user_data['password'])) {
                $_SESSION['user_id'] = $user_data['user_id'];
                header("Location: index.php");
                die;
            } else {
                // Wrong password
                echo '<div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center; color:white; font-size:30px">';
                echo "Neteisingas salptazodis!";
                echo '</div>';
            }
        } else {
            // User doesn't exist
            echo '<div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center; color:white; font-size:30px">';
            echo "Vartotojas neegzistuoja!";
            echo '</div>';
        }
    }
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
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


        .navbar {
            background-color: rgba(128, 128, 128, 0);
            padding: 10px 20px;
            display: flex;
            justify-content: right;
            align-items: center;
            border-bottom: 2px solid white;

        }


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
        <li><a href="signup.php">Registruotis</a></li>
    </ul>

</nav>

<div id="box">
    <form method="post">
        <div>Prisijungti</div>

        <input id="text" type="text" name="user_name" placeholder="Vartotojo vardas"><br>
        <input id="text" type="password" name="password" placeholder="Slaptažodis"><br>
        <button id="button">Prisijungti</button><br>
        <a href="signup.php">Užsiregistruoti</a><br>
    </form>
</div>

<!--fancy backgriound-->

<div>
    <div class="wave"></div>
    <div class="wave"></div>
    <div class="wave"></div>
<!--fancybackgroundend-->
</div>
</body>
</html>

