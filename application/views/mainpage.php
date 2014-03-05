<?php date_default_timezone_set('UTC') ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>first time with codeigniter</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
<div id="container">
	<div id="top">The current time and date:</div>
	<div id="bottom">
		<h1><?= date('l jS \of F Y') ?></h1>
		<h1><?= date('h:i:s A') ?></h1>
	</div>
</div>
</body>
</html>