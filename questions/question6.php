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
            <h3>Question 6: How many presidents have been impeached?</h3>
            <div id="grid">
            <input type="submit" name="question-6-answers" id="answer" value="A. One" />
            <input type="submit" name="question-6-answers" id="answer" value="B. Two" />
            <input type="submit" name="question-6-answers" id="answer" value="C. Three" />
            <input type="submit" name="question-6-answers" id="answer" value="D. Four" />
            </div>
        </form>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $answer = $_POST['question-6-answers'];
        if ($answer == "C. Three") {
            $_SESSION['prize'] = 600;
            echo "<div id='check'> Correct! </br> Prize: $"; 
            echo $_SESSION['prize']; ?></div>
            <?php
            header("refresh: 2;url=question7.php");
    
        } else {
            $_SESSION['prize'] = 400;
          
            echo "<div id='check'>Incorrect! </br> Prize: $";
            echo $_SESSION['prize'];?></div>
            <?php 
            include("record.php");
        }
    }
    ?>
    
</body>
</html>