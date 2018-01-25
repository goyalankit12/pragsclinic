<?php
include_once "databaseConnection.php";
$databaseConnClass = new dbQuery();
$databaseConnClass->connectionCreate();
$databaseConnClass->updatePatientEnrollment($_POST["data"]);
?>