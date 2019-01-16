<?php
include('config/config.php');
include('config/db.php');
include('functions.php');
if (!$_GET || $_GET['s'] != "update") {
    include('page/header.php');
}
if (!$_GET) include('page/main.php'); else {
    switch ($_GET['s']) {
        case "stat":
            {
                include('page/stat.php');
                break;
            }
        case "graph":
            {
                include('page/graph.php');
                break;
            }
        case "update":
            {
                include('update.php');
                break;
            }
        case "about":
            {
                include('page/about.php');
                break;
            }
        default:
            include('page/main.php');
    }
}
if (!$_GET || $_GET['s'] != "update") {
    include('page/footer.php');
}