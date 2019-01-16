<?php
include('../config/config.php');
include('../config/db.php');
include('functions.php');

$data_points = array();

$dayPressSql = "SELECT * FROM records2 WHERE device='BMP180' ORDER BY id ASC";
$dayPress = $conn->query($dayPressSql);

$i = 0;
while ($rows = mysqli_fetch_array($dayPress)) {
    $point = array("ts" => date('Y-m-d H:i', strtotime($timeZone, strtotime($rows['datatime']))), "v1" => ($rows['val1'] > 100) ? $rows['val2'] : $rows['val1'], "v2" => ($rows['val2'] < 800 AND $rows['val1'] > 800) ? $rows['val1'] : $rows['val2']);
    array_push($data_points, $point);
    $i++;
}

echo json_encode($data_points, JSON_NUMERIC_CHECK);