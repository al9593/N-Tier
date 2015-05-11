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
	$sql = "SELECT STUDENT, AVERAGE FROM GRADES WHERE VNAME = '" . $_GET['grade'] ."'";
	# SELECT MPG FROM MPG WHERE VNAME = 'Prius' 	
	$grades = select($sql);
	echo json_encode($grades);
}
else
{
	$names = select("SELECT STUDENT, AVERAGE FROM GRADES WHERE AVERAGE DESC");
	echo json_encode($names);
}
disconnect();

?>