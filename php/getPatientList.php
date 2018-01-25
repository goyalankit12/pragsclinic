<?php
include_once "databaseConnection.php";
$databaseConnClass = new dbQuery();
$databaseConnClass->connectionCreate();
$result = $databaseConnClass->getPatientList();
echo json_encode($result);

?>