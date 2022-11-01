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
            <h3>Question 8: What is the hottest planet in the solar system?</h3>
            <div id="grid">
            <input type="submit" name="question-8-answers" id="answer" value="A. Mecury" />
            <input type="submit" name="question-8-answers" id="answer" value="B. Sun" />
            <input type="submit" name="question-8-answers" id="answer" value="C. Venus" />
            <input type="submit" name="question-8-answers" id="answer" value="D. Mars" />
            </div>
        </form>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $answer = $_POST['question-8-answers'];
        if ($answer == "C. Venus") {
            $_SESSION['prize'] = 800;
            echo "<div id='check'> Correct! </br> Prize: $"; 
            echo $_SESSION['prize']; ?></div>
            <?php
           header("refresh: 2;url=question9.php");
    
        } else {
            $_SESSION['prize'] = 700;
            
            echo "<div id='check'>Incorrect! </br> Prize: $";
            echo $_SESSION['prize'];?></div>
            <?php 
            include("record.php");
        }
    }
    ?>
    
</body>
</html>