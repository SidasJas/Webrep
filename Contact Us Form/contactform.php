<?php

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];


    $mailTo = "submit@phonkextended.info";
    $headers = "From: ".$mailFrom;
    $txt = "Gautas laiškas iš ".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers)
    {
        header("Location: index.php?mailsend")
    };

    
}   
?>