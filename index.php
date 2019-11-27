<?php

// MaxMind Setup
require_once 'vendor/autoload.php';
use GeoIp2\Database\Reader;

$reader = new Reader('GeoLite2-City.mmdb');
$record = $reader->city('197.210.65.87');

print($record->country->isoCode . "\n"); // 'US'
print($record->country->name . "\n"); // 'United States'
print($record->country->names['zh-CN'] . "\n"); // '美国'
$client_ip = $_SERVER['REMOTE_ADDR'];
echo "</br>";
echo $client_ip;
// $db =new Reader('GeoLite2-City.mmdb');
// $client_ip=$db->city($_SERVER['REMOTE_ADDR']);
// $client_country=$client_ip->country->isoCode;

// Specification of allowed_countries
// $allowed_countries=array("US","CA");

// // Blocking Logic
// if(!in_array($client_country,$allowed_countries)) {
//   header("HTTP/1.0 403 Forbidden");
//   echo "<h1>Access Forbidden!</h1>";
//   echo "<p>You are accessing from $client_country which is forbidden.</p>";
//   exit();
// }
?>
