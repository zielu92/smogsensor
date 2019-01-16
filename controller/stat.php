<?php
$dayHumSql = "SELECT * FROM records2 WHERE datatime >= date_sub(NOW(), interval 24 hour) AND device='DHT11' ORDER BY id DESC";
$dayHumidity = $conn->query($dayHumSql);

$dayPressSql = "SELECT * FROM records2 WHERE datatime >= date_sub(NOW(), interval 24 hour) AND device='BMP180' ORDER BY id DESC";
$dayPress = $conn->query($dayPressSql);

$daySmogSql = "SELECT * FROM records2 WHERE datatime >= date_sub(NOW(), interval 24 hour) AND device='SDS011' ORDER BY id DESC";
$daySmog = $conn->query($daySmogSql);