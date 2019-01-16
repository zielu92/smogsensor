<?php require_once('controller/stat.php'); ?>
<div class="col-lg-4">
    <h2 class="text-center">24h of DHT11</h2>
    <table class="table table-striped table-dark">
        <tbody>
        <?php
        $i = 1;
        if ($dayHumidity->num_rows > 0) {
            while ($row = $dayHumidity->fetch_assoc()) {
                echo("<tr>
				      <th scope=\"row\">" . $i . "</th>");
                echo("<td>" . date('Y-m-d H:i', strtotime($timeZone, strtotime($row['datatime']))) . "</td>");
                echo("<td>" . units($row['valname1'], $row['val1']) . "</td>");
                echo("<td>" . units($row['valname2'], $row['val2']) . "</td>");
                echo("</tr>");
                $i++;
            }
        }
        ?>
        </tbody>
    </table>
</div>
<div class="col-sm-4">
    <h2 class="text-center">24h of BMP180</h2>
    <table class="table table-striped table-dark">
        <tbody>
        <?php
        $i = 1;
        if ($dayPress->num_rows > 0) {
            while ($rowp = $dayPress->fetch_assoc()) {
                echo("<tr>
				      <th scope=\"row\">" . $i . "</th>");
                echo("<td>" . date('Y-m-d H:i', strtotime($timeZone, strtotime($rowp['datatime']))) . "</td>");
                echo("<td>" . units($rowp['valname1'], $rowp['val1']) . "</td>");
                echo("<td>" . units($rowp['valname2'], $rowp['val2']) . "</td>");
                echo("</tr>");
                $i++;
            }
        }
        ?>
        </tbody>
    </table>
</div>

<div class="col-sm-4">
    <h2 class="text-center">24h of SDS011</h2>
    <table class="table table-striped table-dark">
        <tbody>
        <?php
        $i = 1;
        if ($daySmog->num_rows > 0) {
            while ($rows = $daySmog->fetch_assoc()) {
                echo("<tr>
				      <th scope=\"row\">" . $i . "</th>");
                echo("<td>" . date('Y-m-d H:i', strtotime($timeZone, strtotime($rows['datatime']))) . "</td>");
                echo("<td>" . units($rows['valname1'], $rows['val1']) . "</td>");
                echo("<td>" . units($rows['valname2'], $rows['val2']) . "</td>");
                echo("</tr>");
                $i++;
            }
        }
        ?>
        </tbody>
    </table>
</div>

<div class="col-md-12 paddzioch">
    <div id="chartContainer" style="height: 300px; width: 100%;"></div>
</div>