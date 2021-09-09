<?php 

	if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
		header("HTTP/1.1 405 Method Not Allowed");
		die('405 Method not allowed! Only POST requests allowed.');
	}

	$n1 = isset($_POST['n1']) ? $_POST['n1'] : null;
	$n2 = isset($_POST['n2']) ? pow($_POST['n2'],2) : null;

	$calc = $n1 / $n2; 
	$result = '';

	if($calc <= 17):
		$result = 'Very underweight';

	elseif($calc > 17 && $calc <= 18.49):
		$result = 'Underweight';

	elseif($calc >= 18.5 && $calc <= 24.99):		
		$result = 'Normal weight';	
	
	elseif($calc >= 25 && $calc <= 29.99):
		$result = 'Overweight';

	elseif($calc >= 30 ):
		$result = 'Obesity';

	endif;

	header("Location: index.php?result=$result");

?>