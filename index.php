<?php

	$result = isset($_GET['result']) ? $_GET['result'] : '';
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>IMC</title>
	</head>
	<body>
		<h1>IMC</h1>
		<form action="imc.php" method="POST">
			<div>	
				<input type="text" name="n1" placeholder="Enter your Weight" required><br>
				<input type="text" name="n2" placeholder="Enter your height" required><br>
				<button type="submit">Calculation</button>
			</div>				
		</form>
		<?= isset($result) ? $result : '' ?>
	</body>
</html>

