<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<?php 

	require_once "data.php";

	foreach($publications as $item) {
		
		
		print_r("<div class='news'>" . $item->printItem() . "</div>" );
		
	}

?>
	
</body>
</html>

