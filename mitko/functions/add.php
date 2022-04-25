<?php
include "db.php";
$first_name = filter_var(trim($_POST['first_name']), FILTER_SANITIZE_STRING);
$last_name = filter_var(trim($_POST['last_name']), FILTER_SANITIZE_STRING);
$classId = filter_var(trim($_POST['classId']), FILTER_SANITIZE_STRING);
$diplomna = filter_var(trim($_POST['diplomna']), FILTER_SANITIZE_STRING);
$diplomna_description = filter_var(trim($_POST['diplomna_description']), FILTER_SANITIZE_STRING);
$student_first_name = filter_var(trim($_POST['first_name']), FILTER_SANITIZE_STRING);
$student_last_name = filter_var(trim($_POST['first_name']), FILTER_SANITIZE_STRING);
if (isset($_POST['upload'])){
	$db->query("INSERT INTO `students` (`first_name`,`last_name`,`classId`,`diplomna`,`diplomna_description`) VALUES ('$first_name','$last_name','$classId','$diplomna', '$diplomna_description')");
	$db->query("INSERT INTO `diplomni` (`title`,`student_first_name`,`student_last_name`,`description`) VALUES ('$diplomna', '$student_first_name', '$student_last_name', '$diplomna_description')");
	if ($db->error) {
		printf("Errormessage: %s\n", $db->error);
	} 
}
header("Location: ../students.php"); ?>