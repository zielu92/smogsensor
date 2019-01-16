<?php
include('../config/config.php');
include('../config/db.php');
include('functions.php');

$data_points = array();
//todo: choice data and show by data
$daySmogSql = "SELECT val1, val2, datatime FROM records2 WHERE datatime >= date_sub(NOW(), interval 24 hour) AND device='SDS011' ORDER BY datatime ASC";
$daySmog = $conn->query($daySmogSql);

while ($rows = mysqli_fetch_array($daySmog)) {
    $point = array("ts" => date('Y-m-d H:i', strtotime($timeZone, strtotime($rows['datatime']))), "v1" => $rows['val1'], "v2" => $rows['val2'], "indeks" => caqui($rows['val1'], $rows['val2']));
    array_push($data_points, $point);
}

echo json_encode($data_points, JSON_NUMERIC_CHECK);
