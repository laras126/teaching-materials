<?php

$mood = $_GET['mood'];
$name = $_GET['name'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form Demo</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="http://necolas.github.io/normalize.css/3.0.1/normalize.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	
	<div class="wrapper">
		
		<h1>Tell us how you are feeling!</h1>
		
		<form method="GET">
		
			<label for="name">Your name:</label>
		    <input name="name" type="text" />
			
		    <label for="mood">How are you feeling today?</label>
		    <input name="mood" type="text" />
		    
		    <input type="submit" name="submit" value="Save">

		</form>	
		
		<p>Name: <?php echo $name; ?></p> 
		<p>Mood: <?php echo $mood; ?></p>
	
	</div> <!-- /wrapper -->

</body>
</html>