<?php
include('../config/config.php');
include('../config/db.php');
include('functions.php');

$data_points = array();

$dayHumSql = "SELECT * FROM records2 WHERE device='DHT11' ORDER BY id ASC";
$dayHumidity = $conn->query($dayHumSql);

while ($rows = mysqli_fetch_array($dayHumidity)) {
    $point = array("ts" => date('Y-m-d H:i', strtotime($timeZone, strtotime($rows['datatime']))), "v2" => $rows['val2']);
    array_push($data_points, $point);
}

echo json_encode($data_points, JSON_NUMERIC_CHECK);