<?php
include "head.php";
//sitas eilutes copy paste visuose pages
include("connection.php");
include("functions.php");

//registracijos dalykai. Tikrina ar LogedIn
    session_start();
    $user_data=check_login($con);
//sitas eilutes copy paste visuose pages
