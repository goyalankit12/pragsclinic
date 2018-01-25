<?php
include_once "databaseConnection.php";
$databaseConnClass = new dbQuery();
$databaseConnClass->connectionCreate();
$date = $_POST["data"];
$from = $date['from'];
$to = $date['to'];
$visits = $databaseConnClass->visitsRange($from,$to);
$enrollmentID= array();
foreach ($visits as $visit )
{
    array_push($enrollmentID,$visit['enrolement_id']);

}

$enrolment = $databaseConnClass->enrolmentRange($enrollmentID);

echo json_encode($enrolment);




?>