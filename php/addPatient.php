<?php
include_once "databaseConnection.php";
$databaseConnClass = new dbQuery();
//var_dump($_POST);
//echo $_POST['name'];
/*$name = $_POST['name'];
$address = $_POST['address'];
$contactinfo = $_POST['contactinfo'];
$reference = $_POST['reference'];
$age= $_POST['age'];
*/
$databaseConnClass->connectionCreate();
$databaseConnClass->addPatient($_POST["data"]);
//echo $sql="INSERT INTO \"activity\" (\"user\",\"type\",\"desc\",\"head\") VALUES ('$user','$type','$desc','$head')";
//$result = pg_query($conn,$sql);


?>