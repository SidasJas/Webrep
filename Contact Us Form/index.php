<?php
//sitas eilutes copy paste visuose pages

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>


<nav class="navbar">
    <div class="logo">
        <a href="#">ShellyAPI</a>
    </div>
    <ul>
        <li><a href="../index.php">Pagrindinis</a></li>
        <li><a href="contact.php">Kontaktai</a></li>
        <li><a href="about.php">Apie mus</a></li>
        <li><a href="index.php">Susisiekite su mumis</a></li>
        <li><a href="signup.php">Prisijungimas</a></li>
    </ul>

</nav>
<body>
    <main>
        <form class="contact-form"action="contactform.php" method="post"></form>
        <input type="text" name="name" placeholder = "Pilnas vardas">
        <input type="text" name="mail" placeholder = "Jūsų elektroninis paštas">
        <input type="text" name="subject" placeholder = "Tema">
        <textarea name="message" placeholder ="Žinutė"></textarea>
        <button type = "submit" name="submit">Išsiųsti</button>

    </main>
</body>
</html>