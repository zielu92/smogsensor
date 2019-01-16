<?php
function caqui($pm10, $pm25)
{
    return round($pm25 + $pm10 / 2);
}

function caquiRate($value)
{
    if ($value <= 25) {
        return 1;
    } else if ($value >= 25 && $value <= 50) {
        return 2;
    } else if ($value >= 50 && $value <= 70) {
        return 3;
    } else if ($value >= 75 && $value <= 100) {
        return 4;
    } else if ($value >= 100) {
        return 5;
    }
}

function units($valueName, $val)
{
    switch ($valueName) {
        case "Temperature":
            $result = "Temperature: <b>" . $val . "°C</b>";
            break;
        case "Humidity":
            $result = "Humidity: <b>" . $val . "%</b>";
            break;
        case "Pressure":
            $result = "Pressure: <b>" . $val . "hPa</b>";
            break;
        case "PM2.5":
            $result = "PM2.5: <b>" . $val . "μg/m<sup>3</sup></b>";
            break;
        case "PM10":
            $result = "PM10: <b>" . $val . "μg/m<sup>3</sup></b>";
            break;
        default:
            $result = $valueName ? $valueName . ": <b>" . $val . "</b>" : " ";
            break;
    }
    return $result;
}

