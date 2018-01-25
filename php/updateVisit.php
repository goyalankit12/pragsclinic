<?php
include_once "databaseConnection.php";
$databaseConnClass = new dbQuery();
$databaseConnClass->connectionCreate();
$databaseConnClass->updateVisit($_POST["data"]);
?>