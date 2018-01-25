<?php
include_once "databaseConnection.php";
$id = $_GET["id"];
$databaseConnClass = new dbQuery();
$databaseConnClass->connectionCreate();
$result = $databaseConnClass->getVisitByID($id);
echo json_encode($result);

?>