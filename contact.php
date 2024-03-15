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
        <li><a href="about.php">Apie mus</a></li>
        <li><a href="../Contact Us Form/index.php">Susisiekite su mumis</a></li>
        <li><a href="logout.php">Atsijungti</a></li>

    </ul>

</nav>

<div class="row">
    <div class = "column">
        <h2>Kontaktinė informacija</h2>
        <p>Arnas Zdanevičius - arnzda@ktu.lt</p>
        <p>Paulius Dzvankauskas - paudzv@ktu.lt</p>
        <p>Sidas Jasulaitis - sidjas@ktu.lt</p>
        <p>Gediminas Mikulėnas - gedmik463546@ktu.lt</p>
    </div>
</div>
</body>
</html>