<?php
include "head.php";
include("connection.php");
include("functions.php");

session_start();
$user_data = check_login($con);

// Function to fetch device status from Shelly API
// function fetchDeviceStatus() {
//     // Replace 'your_shelly_api_endpoint' with the actual endpoint
//     $api_endpoint = 'your_shelly_api_endpoint';
//     $response = file_get_contents($api_endpoint);
//     return json_decode($response, true);
// }

// Fetch device status
//$device_status = fetchDeviceStatus();
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
        <?php include "buttonstyle.css"; ?>
        .hidden {
    display: none;
}
        .image {
            background-color: transparent;
    box-shadow: none;
    padding: 0;
    border-radius: 0;
        }


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
        <li><a href="logout.php">Atsijungti</a></li>
    </ul>
</nav>

<div class="row">
    <!-- Status bar container -->
    <div class="column status-bar">
        <h2>Statusas</h2>
        <div id="status">
            
        </div>
    </div>

    <!-- Button container -->
   
</div>

<div class = "row">
<div class="column button-container">
        <!-- The checkbox to toggle the light -->
        <input name="switch" id="switch" type="checkbox" onchange="toggleDeviceStatus()">
        <label class="switch" for="switch"></label>
    </div>

</div>
<div class="row">
    <div class="column light-container">
        <img id="lightOn" class="light hidden" class = "image" src="images\lightbublon.png" alt="Light is turned ON">
        <img id="lightOff" class="light" class = "image" src="images\lightbublof.png" alt="Light is turned OFF">
    </div>
</div>

<script>
function toggleDeviceStatus() {
    var lightOn = document.getElementById('lightOn');
    var lightOff = document.getElementById('lightOff');
    
    // Check the checkbox status and show/hide images accordingly
    if (document.getElementById('switch').checked) {
        lightOn.classList.remove('hidden');
        lightOff.classList.add('hidden');
    } else {
        lightOn.classList.add('hidden');
        lightOff.classList.remove('hidden');
    }
}
</script>

</body>
</html>
