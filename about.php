<?php
include 'head.php';

//sitas eilutes copy paste visuose pages
include("connection.php");
include("functions.php");

//registracijos dalykai. Tikrina ar LogedIn
session_start();
$user_data=check_login($con);
//sitas eilutes copy paste visuose pages
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GASP</title>
    <style>
        /* CSS code goes here */
        <?php include "stylesheet.css"; ?>
    </style>
</head>
    

<nav class="navbar">
    <div class="logo">
        <a href="#">ShellyAPI</a>
    </div>
    <ul>
        <li><a href="index.php">Pagrindinis</a></li>
        <li><a href="contact.php">Kontaktai</a></li>
        <li><a href="status.php">Status</a></li>
        <li><a href="about.php">Apie mus</a></li>
        <li><a href="Contact Us Form/index.php">Susisiekite su mumis</a></li>
        <li><a href="profile.php">Profilis</a></li>
        <!-- registracijai reikalingi-->
        <li><a href="logout.php">Atsijungti</a></li>
        <!--registracijos dalykai-->
    </ul>

</nav>

<div class="row">
    <div class = "column">
        <h2>text goes here</h2>
      <p>text goes here</p>
    </div>
</div>
<div class="row">
    <div class = "column">
        <h2>text goes here</h2>
      <p>text goes here</p>
    </div>
</div>
</body>
</html>