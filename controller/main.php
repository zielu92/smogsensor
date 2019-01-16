<?php
$smogSql = "SELECT * FROM records2 WHERE device='SDS011' ORDER BY id DESC LIMIT 1";
$smog =  $conn->query($smogSql); 

$tempSql = "SELECT * FROM records2 WHERE device='BMP180' OR 
device='DHT11' ORDER BY id DESC LIMIT 2";
$temp =  $conn->query($tempSql); 
