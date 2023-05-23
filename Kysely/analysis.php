<!DOCTYPE html>
<html>
<head>
    <title>Quiz Analysis</title>
    <style>
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        $filename = "quiz_data.vcf";
        $questions = [
            'q1' => 'Question 1',
            'q2' => 'Question 2',
            'q3' => 'Question 3',
            'q4' => 'Question 4',
        ];

        $answerCounts = array();
        $totalCount = array();
        $percentages = array();

        // Initialize arrays
        foreach ($questions as $question => $questionText) {
            $answerCounts[$question] = array();
            $totalCount[$question] = 0;
            $percentages[$question] = array();
        }

        // Read data from file
        if (file_exists($filename)) {
            $file = fopen($filename, "r");
            while (!feof($file)) {
                $line = fgets($file);
                $answers = explode(",", $line);
                $answers = array_map('trim', $answers);
                foreach ($questions as $question => $questionText) {
                    $answerKey = array_search($question, array_keys($questions));
                    if (isset($answers[$answerKey])) {
                        $answer = $answers[$answerKey];
                        if (!empty($answer)) {
                            if (!isset($answerCounts[$question][$answer])) {
                                $answerCounts[$question][$answer] = 0;
                            }
                            $answerCounts[$question][$answer]++;
                            $totalCount[$question]++;
                        }
                    }
                }
            }
            fclose($file);
        }

        // Display question analysis
        foreach ($questions as $question => $questionText) {
            echo "<h2>$questionText</h2>";
            echo "<ul>";
            foreach ($answerCounts[$question] as $answer => $count) {
                $percentage = ($count / $totalCount[$question]) * 100;
                $percentage = number_format($percentage, 2);
                echo "<li>$answer: $percentage%</li>";
            }
            echo "</ul>";
        }
        ?>
    </div>
</body>
</html>
