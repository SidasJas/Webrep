<?php
include "head.php";
include("connection.php");
include("functions.php");

//registracijos dalykai
    session_start();
    $user_data=check_login($con);

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
        <li><a href="../Contact Us Form/index.php">Susisiekite su mumis</a></li>
        <li><a href="signup.php">Prisijungimas</a></li>
    </ul>

</nav>
    <div class="row">
        <div class="column">
            <h2>Shelly išmaniųjų namų sistema</h2>
            <p>lorem ipsum lalalalalalla</p>
        </div>
    </div>
<!-- registracijai reikalingi-->
    <a href="logout.php">Atsijungti</a>
<!--registracijos dalykai-->
</body>
</html>
