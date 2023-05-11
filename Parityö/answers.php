<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$question1 = $_POST['question1'];
	$question2 = $_POST['question2'];
	$question3 = $_POST['question3'];

	$answers = array(
		"Question 1: $question1" => "Answer 1: Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
		"Question 2: $question2" => "Answer 2: Nulla sed massa quis mi bibendum feugiat.",
		"Question 3: $question3" => "Answer 3: Etiam ac sapien vel sapien tincidunt consectetur."
	);

	foreach ($answers as $question => $answer) {
		echo "<p><strong>$question</strong></p><p><strong>$answer</strong></p>";
	}
}
?>
