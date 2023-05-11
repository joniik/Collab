<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<head>
	<link rel="stylesheet" href="style.css">
	<title>Vastaukset</title>
</head>
<body>
	<h1>Vastaukset</h1>
	<form method="post" action="submit.php">
		<label for="username">Nimi:</label>
		<input type="text" id="username" name="username">
		<br><br>
		<?php
			$q1 = $_POST['q1'];
			$a1 = $_POST['a1'];
			$a2 = $_POST['a2'];
			$a3 = $_POST['a3'];
			$q2 = $_POST['q2'];
			$b1 = $_POST['b1'];
			$b2 = $_POST['b2'];
			$b3 = $_POST['b3'];
			$q3 = $_POST['q3'];
			$c1 = $_POST['c1'];
			$c2 = $_POST['c2'];
			$c3 = $_POST['c3'];
		
			// Create a string containing the user's name and answers
			$data = "Name: $q1: $a1\n$q2: $b2\n$q3: $c3\n\n";
			
			// Save the data to a file named "answers.txt"
			file_put_contents('answers.txt', $data, FILE_APPEND);
		?>
		<h2><?php echo $q1; ?></h2>
		<input type="radio" id="a1" name="q1_answer" value="<?php echo $a1; ?>">
		<label for="a1"><?php echo $a1; ?></label>
		<br>
		<input type="radio" id="a2" name="q1_answer" value="<?php echo $a2; ?>">
		<label for="a2"><?php echo $a2; ?></label>
		<br>
		<input type="radio" id="a3" name="q1_answer" value="<?php echo $a3; ?>">
		<label for="a3"><?php echo $a3; ?></label>
		<br><br>
		<h2><?php echo $q2; ?></h2>
		<input type="radio" id="b1" name="q2_answer" value="<?php echo $b1; ?>">
		<label for="b1"><?php echo $b1; ?></label>
		<br>
		<input type="radio" id="b2" name="q2_answer" value="<?php echo $b2; ?>">
		<label for="b2"><?php echo $b2; ?></label>
		<br>
		<input type="radio" id="b3" name="q2_answer" value="<?php echo $b3; ?>">
		<label for="b3"><?php echo $b3; ?></label>
		<br><br>
		<h2><?php echo $q3; ?></h2>
		<input type="radio" id="c1" name="q3_answer" value="<?php echo $c1; ?>">
		<label for="c1"><?php echo $c1; ?></label>
		<br>
		<input type="radio" id="c2" name="q3_answer" value="<?php echo $c2; ?>">
		<label for="c2"><?php echo $c2; ?></label>
		<br>
		<input type="radio" id="c3" name="q3_answer" value="<?php echo $c3; ?>">
		<label for="c3"><?php echo $c3; ?></label>
		<br><br>
		<input type="submit" value="Submit">
	</form>
</body>
</html>