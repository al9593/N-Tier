<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$db_hostname = 'localhost:3306';
$db_database = 'world';
$db_username = 'world'; 
$db_password = 'worlduser'; 

include 'functions.php';
connect($db_hostname, $db_database, $db_username, $db_password);
if ( isset($_POST['Country'])) 
{
	$country = $_POST['Country'];	
	$city = $_POST['amount'];		
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>All Countries</title>

    <!-- Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

	<!-- datatables -->
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.4/css/jquery.dataTables.min.css">	

	<!-- class styles -->
	<link rel="stylesheet" href="../css/csci343.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- custom local styles -->
    <style>

	</style>

  	</head>
  	<body>
		<!-- page content -->
		<form id="donationForm" action="http://php-csci343.rhcloud.com/examples/donations.php" method="post">
				<div class="form-group">
					<label for="name">Full Name</label>
					<input type="text" class="form-control" 
						id="name" name="name" required placeholder="Full Name">
				</div>
				<div class="form-group">
					<label for="amount">Donation ($10 - $100)</label>
					<input type="number" class="form-control" 
						id="amount" name="amount" min="10" max="100" required placeholder="Doonation ($10 - $100)">
				</div>			
				<button type="submit" class="btn btn-info">Donate!</button>
			</form>

		<!-- jquery -->
		<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>	

		<!-- datatables -->	
		<script src="https://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>	

		<!-- class scipts -->
		<script src="../js/csci343.js"></script>	
		
		<!-- custom local javascript -->
		<script>

		</script>
	</body>
</html>
