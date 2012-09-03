<?php
$included = include 'header.php';
 
if(!$included) { 
?>
	<html>
	<head>
		<title>Manoj Mardithaya | CSE, UCSD</title>
	</head>
	<body>
		Uh oh! Something went wrong!
	</body>
	</html>
<?php
} else {
	$included = include 'content/education.php';
	
	if(!$included) { ?>
	<html>
	<head>
		<title>Manoj Mardithaya | CSE, UCSD</title>
	</head>
	<body>
		Uh oh! Something went wrong!
	</body>
	</html>
	<?php
	} else {
		include 'trailer.php';
	}
} ?>