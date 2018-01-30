<?php
include_once "databaseConnection.php";
$databaseConnClass = new dbQuery();
$databaseConnClass->connectionCreate();
$report_final= array();

$date = $_POST["data"];
$from = $date['from'];
$to = $date['to'];

$visits = $databaseConnClass->visitsRange($from,$to);
//echo json_encode($visits);

if($visits!=null) {
    $enrollmentID = array();
    foreach ($visits as $visit) {
        array_push($enrollmentID, $visit['enrolement_id']);
   }
    $enrolments = $databaseConnClass->enrolmentRange($enrollmentID);
    $patient_id = array();
    foreach ($enrolments as $enrolment) {
        array_push($patient_id, $enrolment['patient_id']);
   }
    $patient_details = $databaseConnClass->getPatientDetails_groupIDS($patient_id);
    foreach ($visits as $visit) {
        $report = array();
        $report['name'] = $patient_details[$enrolments[$visit['enrolement_id']]['patient_id']]['name'];
        $report['fee'] = $visit['fee'];
        //$total+=$report['fee'];
        $report['status'] = $visit['status'];
        $report['year'] = $visit['year'];
        $report['month'] = $visit['month'];
        $report['day'] = $visit['day'];

        $report['description'] = $enrolments[$visit['enrolement_id']]['description'];
        $report['year_enroled'] = $enrolments[$visit['enrolement_id']]['year'];
        $report['month_enroled'] = $enrolments[$visit['enrolement_id']]['month'];
        $report['day_enroled'] = $enrolments[$visit['enrolement_id']]['day'];
        array_push($report_final, $report);
    }
}
echo json_encode($report_final);

?>