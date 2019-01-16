<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Smog Sensor data</title>

    <!-- Bootstrap core CSS -->
    <link href="page/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="page/css/full.css" rel="stylesheet">
  </head>
  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-bottom">
      <div class="container">
        <a class="navbar-brand" href="#">Smog sensor data</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item <?php !$_GET ? print("active") : print(" "); ?>">
              <a class="nav-link" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item<?php $_GET['s']=='about' ? print("active"): print(" "); ?>">
               <a class="nav-link" href="index.php?s=about">About</a>
            </li>
            <li class="nav-item <?php $_GET['s']=='stat' ? print("active"): print(" "); ?>">
              <a class="nav-link" href="index.php?s=stat">Statistic</a>
            </li>
            <li class="nav-item <?php $_GET['s']=='graph' ? print("active"): print(" "); ?>">
              <a class="nav-link" href="index.php?s=graph">Graphs</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <section>
      <div class="container-fluid">
        <div class="row">