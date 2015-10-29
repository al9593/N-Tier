<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$db_hostname = 'localhost:3306';
$db_database = 'FinalExam';
$db_username = 'FinalExam'; 
$db_password = 'finalexam'; 

include 'functions.php';

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
connect($db_hostname, $db_database, $db_username, $db_password);
if ( isset($_GET['grade']) ) 
{
	if($_GET['grade'] == 'A') 
	{
	$sql = "SELECT STUDENT, AVERAGE FROM GRADES WHERE AVERAGE > 89 ORDER BY AVERAGE DESC ";
	}
	else if ($_GET['grade'] == 'B') {
		$sql = "SELECT STUDENT, AVERAGE FROM GRADES WHERE AVERAGE > 79 AND AVERAGE < 90 ORDER BY AVERAGE DESC";
	}
	else if($_GET['grade'] == 'C')	{
		$sql = "SELECT STUDENT, AVERAGE FROM GRADES WHERE AVERAGE > 69 AND AVERAGE < 80 ORDER BY AVERAGE DESC";
	}
	else if($_GET['grade'] == 'D') {
		$sql = "SELECT STUDENT, AVERAGE FROM GRADES WHERE AVERAGE > 59 AND AVERAGE < 70 ORDER BY AVERAGE DESC";
	}
	else if($_GET['grade'] == 'F') {
		$sql = "SELECT STUDENT, AVERAGE FROM GRADES WHERE AVERAGE < 60 ORDER BY AVERAGE DESC";
	}
	else {
		$sql = "SELECT STUDENT, AVERAGE FROM GRADES ORDER BY AVERAGE DESC";
	} 	
	$grades = select($sql);
	echo json_encode($grades);
}
else
{
	$names = select("SELECT STUDENT, AVERAGE FROM GRADES ORDER BY AVERAGE DESC");
	echo json_encode($names);
}
disconnect();

?>