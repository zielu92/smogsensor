<?php
require_once('config/devices.php');
$pass = mysqli_real_escape_string($conn, $_GET['pass']);
$device = mysqli_real_escape_string($conn, $_GET['task']);
$valname = mysqli_real_escape_string($conn, $_GET['valuename']);
$value = mysqli_real_escape_string($conn, $_GET['value']);

if ($pass == $devicePasword) {
    if (array_key_exists($device, $devices)) {
        $sql = "SELECT valname1, valname2, valname3 FROM records2 where device='$device' AND 
    	datatime > date_sub(now(), interval $differenceBetweenUpdate) ORDER BY datatime DESC LIMIT 1";
        $check = $conn->query($sql);
        if ($check->num_rows > 0) {
            $row = $check->fetch_assoc();
            if ($row['valname1'] == null) {
                $sql = "INSERT INTO records2 (device, valname1, val1) VALUES ('$device', '$valname', '$value')";
                //we can do it loop depend on elements in array later;
            } else if ($row['valname2'] == null) {
                $sql = "UPDATE records2 SET val2='$value', valname2='$valname' WHERE device='$device' AND 
    				datatime > date_sub(now(), interval $delayOnUpdate)";
            } else if ($row['valname3'] == null) {
                $sql = "UPDATE records2 SET val3='$value', valname3='$valname' WHERE device='$device' AND 
    				datatime > date_sub(now(), interval $delayOnUpdate)";
            } else {
                $sql = "INSERT INTO records2 (device, valname1, val1) VALUES ('$device', '$valname', '$value')";
            }
        } else {
            $sql = "INSERT INTO records2 (device, valname1, val1) VALUES ('$device', '$valname', '$value')";
        }

    } else {
        $sql = "INSERT INTO records2 (device, valname1, val1) VALUES ('$device', '$valname', '$value')";
    }

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
