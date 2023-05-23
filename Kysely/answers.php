<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<head>
    <link rel="stylesheet" href="style4.css">
    <title>Vastaukset</title>
</head>
<body>
    <h1>Vastaukset</h1>
    <?php
    $questions = [
        'q1' => 'Question 1',
        'q2' => 'Question 2',
        'q3' => 'Question 3',
        'q4' => 'Question 4',
    ];
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['Button1'])) {

        $q1 = $_POST['q1'];
        $q2 = $_POST['q2'];
        $q3 = $_POST['q3'];
        $q4 = $_POST['q4'];
        
        // Define the path and filename of the text file
        $filename = "quiz_data.vcf";
        
        // Open the file in append mode
        $file = fopen($filename, "a");
        
        // Append the selected answers to the file
        fwrite($file, "$q1,");
        fwrite($file, "$q2,");
        fwrite($file, "$q3,");
        fwrite($file, "$q4\n");
        
        // Close the file
        fclose($file);


        if (isset($_POST['Button1'])) {
        // Display a success message
        echo "<p>Answers submitted successfully!</p>";
        // Add a button
        echo '<button onclick="window.history.back()">Vastaa uudestaan</button>';
        echo '<button onclick="window.location.href=\'index.html\'">Etusivulle</button>';
        
        }} else {
        // Display the form
        ?>
        <form method="POST" action="answers.php" class="container">
            <h2><?php echo $_POST['q1']; ?></h2>
            <div class="QAcontainer">     
                <input type="radio" id="a1" name="q1" value="<?php echo $_POST['a1']; ?>">
                <label for="a1"><?php echo $_POST['a1']; ?></label>
                <br>
                <input type="radio" id="a2" name="q1" value="<?php echo $_POST['a2']; ?>">
                <label for="a2"><?php echo $_POST['a2']; ?></label>
                <br>
                <input type="radio" id="a3" name="q1" value="<?php echo $_POST['a3']; ?>">
                <label for="a3"><?php echo $_POST['a3']; ?></label>
            </div>
            <br><br>
            <h2><?php echo $_POST['q2']; ?></h2>
            <div class="QAcontainer">
                <input type="radio" id="b1" name="q2" value="<?php echo $_POST['b1']; ?>">
                <label for="b1"><?php echo $_POST['b1']; ?></label>
                <br>
                <input type="radio" id="b2" name="q2" value="<?php echo $_POST['b2']; ?>">
                <label for="b2"><?php echo $_POST['b2']; ?></label>
                <br>
                <input type="radio" id="b3" name="q2" value="<?php echo $_POST['b3']; ?>">
                <label for="b3"><?php echo $_POST['b3']; ?></label>
            </div>
            <br><br>
            <h2><?php echo $_POST['q3']; ?></h2>
            <div class="QAcontainer">
                <input type="radio" id="c1" name="q3" value="<?php echo $_POST['c1']; ?>">
                <label for="c1"><?php echo $_POST['c1']; ?></label>
                <br>
                <input type="radio" id="c2" name="q3" value="<?php echo $_POST['c2']; ?>">
                <label for="c2"><?php echo $_POST['c2']; ?></label>
                <br>
                <input type="radio" id="c3" name="q3" value="<?php echo $_POST['c3']; ?>">
                <label for="c3"><?php echo $_POST['c3']; ?></label>
            </div>
            <br><br>
            <h2><?php echo $_POST['q4']; ?></h2>
            <div class="QAcontainer">
                <input type="radio" id="d1" name="q4" value="<?php echo $_POST['d1']; ?>">
                <label for="d1"><?php echo $_POST['d1']; ?></label>
                <br>
                <input type="radio" id="d2" name="q4" value="<?php echo $_POST['d2']; ?>">
                <label for="d2"><?php echo $_POST['d2']; ?></label>
                <br>
                <input type="radio" id="d3" name="q4" value="<?php echo $_POST['d3']; ?>">
                <label for="d3"><?php echo $_POST['d3']; ?></label>
            </div>
            <br><br>
        <input type="submit" name="Button1" value="Submit">
    </form>    
    <?php }} ?>   
</body>
</html>
