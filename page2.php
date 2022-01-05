<!DOCTYPE html>
<html lang='en'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
<meta name='viewport' content='width=device-width, initial-scale=1.0' />

<title>pizza page 2</title>

<style>
    body { font-family: sans-serif; }
</style>
</head>
<body>
	<h1>pizza page 2 to demo session ID</h1>
		<div>
		<p>Session ID from Kwynn's own function:
		<?php require_once('/opt/kwynn/kwutils.php');
			echo(startSSLSession());
			?></p>
	</div>
	<p>back to <a href='./'>page 1 / index</a></p>
</body>
</html>

