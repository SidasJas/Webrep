<?php
include "head.php";
//sitas eilutes copy paste visuose pages
include("connection.php");
include("functions.php");
session_start();
$user_data=check_login($con);
// Check if the user's ID is set in the session
if(isset($_SESSION['user_id'])) {
    // Retrieve the user's ID from the session
    $user_id = $_SESSION['user_id'];

    // Prepare and execute a SQL query to fetch the user's username and password based on the user ID
    $query = "SELECT user_name, password FROM users WHERE user_id = '$user_id' LIMIT 1";
    $result = mysqli_query($con, $query);

    // Check if the query was successful and if it returned any rows
    if ($result && mysqli_num_rows($result) > 0) {
        // Fetch the username and password from the result set
        $user_data = mysqli_fetch_assoc($result);

    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GASP</title>
    <style>
        <?php include "stylesheet.css"; ?>
    </style>
</head>
<body>
<nav class="navbar">
    <div class="logo">
        <a href="#">ShellyAPI</a>
    </div>
    <ul>
        <li><a href="index.php">Pagrindinis</a></li>
        <li><a href="contact.php">Kontaktai</a></li>
        <li><a href="about.php">Apie mus</a></li>
        <li><a href="Contact Us Form/index.php">Susisiekite su mumis</a></li>
        <li><a href="profile.php">Profilis</a></li>
        <!-- registracijai reikalingi-->
        <li><a href="logout.php">Atsijungti</a></li>
        <!--registracijos dalykai-->
    </ul>
</nav>
<div class="row">
    <div class="column">
        <h2>Shelly išmaniųjų namų sistema</h2>

        <?php
        // Check if the user is logged in
        if(isset($_SESSION['user_id'])) {
            // Display the username and password
            echo "<p>Vartotojo vardas: " . $user_data['user_name'] . "</p>";
            echo "<p>Slaptažodis: <input type='password' id='password' value='" . $user_data['password'] . "'></p>";
            echo "<button onclick='revealPassword()'>Rodyti slaptažodį</button>";
        } else {
            // Display a message indicating the user is not logged in
            echo "<p>User is not logged in.</p>";
        }
        ?>
    </div>
</div>
</body>
</html>
