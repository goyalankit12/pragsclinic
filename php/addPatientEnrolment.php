<?php
include_once "databaseConnection.php";
$databaseConnClass = new dbQuery();
$databaseConnClass->connectionCreate();
$databaseConnClass->addPatientEnrolment($_POST["data"]);
//echo $sql="INSERT INTO \"activity\" (\"user\",\"type\",\"desc\",\"head\") VALUES ('$user','$type','$desc','$head')";
//$result = pg_query($conn,$sql);


?>