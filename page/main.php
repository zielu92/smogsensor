<?php require_once('controller/main.php'); ?>
<div class="col-lg-4">
  <div class="indexBox text-center">
    <h2 class="indexValue"><?php
      if($smog->num_rows > 0) {
        $row = $smog->fetch_assoc();
        echo caqui($row['val1'], $row['val2']);
      }
    ?></h2>
    <?php $i=-3; 
    while($i<=0) {?>
      <div class="circle index<?php $smog =  $conn->query($smogSql); 
        if($smog->num_rows > 0) {
          $row = $smog->fetch_assoc();
          echo caquiRate(caqui($row['val1'], $row['val2']));
        }
      ?>" style="animation-delay: <?echo($i);?>s"></div>
    <?php $i++; }?>
  </div>
</div>
<div class="col-md-2"></div>
<div class="col-md-1"></div>
<div class="col-md-5 pull-right">
  <h1 class="mt-5 text-center"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span></h1>
  <h2 class="text-center">
    <?php 

    if($temp->num_rows > 0) {
      while($rom = $temp->fetch_assoc()) { 
        if($rom['device']!="DHT11") {
          echo units($rom['valname1'],$rom['val1']);
          echo ("<br>");
        }
        echo units($rom['valname2'],$rom['val2']);  
        echo ("<br>");
      }
    } else echo("Sorry, there is no data :(");

    $smog =  $conn->query($smogSql); 
    if($smog->num_rows > 0) {
      $rog = $smog->fetch_assoc();
      echo units($rog['valname1'],$rog['val1']);
      echo ("<br>");
      echo units($rog['valname2'],$rog['val2']);
      echo ("<br>");
      //timezone from config
      $date = date('Y-m-d H:i',strtotime($timeZone,strtotime($rog['datatime'])));
      echo('<h4 class="text-center">Last update: '.$date.'</h4>'); 
    } else echo("Sorry, there is no data :(");
    ?>


  </h2>
</div>