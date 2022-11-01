<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Question</title>
</head>
<body>
    
    <?php include("./header.php"); ?>

    <div class="question">
        <form action="" method="post">
            <h3>Question 1: Which animal can be seen on the Porsche logo?</h3>
            <div id="grid">
            <input type="submit" name="question-1-answers" id="answer" value="A. Horse" />
            <input type="submit" name="question-1-answers" id="answer" value="B. Lion" />
            <input type="submit" name="question-1-answers" id="answer" value="C. Snake" />
            <input type="submit" name="question-1-answers" id="answer" value="D. Bird" />
            </div>
        </form>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $answer = $_POST['question-1-answers'];
        if ($answer == "A. Horse") {
            $_SESSION['prize'] = 100;
        
            echo "<div id='check'> Correct! </br> Prize: $"; 
            echo $_SESSION['prize']; ?></div>
            <?php
            
            header("refresh: 2;url=question2.php");
            exit();
    
        } else {
            $_SESSION['prize'] = 0;
            echo "<div id='check'>Incorrect! </br> Prize: $";
            echo $_SESSION['prize'];?></div>
            <?php 
            include("record.php");
        }
    }
    ?>
    
</body>
</html>