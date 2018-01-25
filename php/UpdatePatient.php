<?php
include_once "databaseConnection.php";
$databaseConnClass = new dbQuery();
$databaseConnClass->connectionCreate();
$databaseConnClass->updatePatient($_POST["data"]);
?>