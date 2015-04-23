<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$db_hostname = 'localhost:3306';
$db_database = 'world';
$db_username = 'world'; 
$db_password = 'worlduser'; 

include 'functions.php';

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
connect($db_hostname, $db_database, $db_username, $db_password);
if ( isset($_POST['country']) ) 
{
	$where = " AND Country.Name = '" . $_POST['country'] . "'");
	$languages = select("SELECT CountryLanguage.Language, CountryLanguage.Percentage FROM CountryLanguage ORDER BY CountryLanguage.Percentage DESC, Country WHERE CountryLanguage.CountryCode = Country.Code " . $where);
	echo json_encode($languages);
}
else
{
	$countries = select("SELECT Name FROM Country");
	echo json_encode($countries);
}
disconnect();

?>