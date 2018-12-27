<?php
include(''); // the location of your page you intend to locally call the $strings. 
//Fetch strings from your intended page, and have then documented on this page.
$username = '$username'; // If this string is empty use Null; please.
$ip = '$ip'; // If this string is empty use Null; please.
$spacer = "----------";
$phone = '$phone'; // If this string is empty use Null; please.
$email = '$email'; // If this string is empty use Null; please.
date_default_timezone_set('Australia/Melbourne'); //Set your time zone
$date = date('m/d/Y h:i:s a', time());
$nl = ' /n';
$log = fopen('/var/log/fraudlog.log', 'w');
fwrite($log, $username.$spacer.$ip.$spacer.$phone.$spacer.$email.$spacer.$date.$nl);
fclose($log);
?>
