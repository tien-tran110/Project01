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
            <h3>Question 3: How long is an Olympic swimming pool (in meters)?</h3>
            <div id="grid">
            <input type="submit" name="question-3-answers" id="answer" value="A. 20 meters" />
            <input type="submit" name="question-3-answers" id="answer" value="B. 50 meters" />
            <input type="submit" name="question-3-answers" id="answer" value="C. 100 meters" />
            <input type="submit" name="question-3-answers" id="answer" value="D. 200 meters" />
            </div>
        </form>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $answer = $_POST['question-3-answers'];
        if ($answer == "B. 50 meters") {
            $_SESSION['prize'] = 300;
           
            echo "<div id='check'> Correct! </br> Prize: $"; 
            echo $_SESSION['prize']; ?></div>
            <?php
           header("refresh: 2;url=question4.php");
    
        } else {
            $_SESSION['prize'] = 200;
            echo "<div id='check'>Incorrect! </br> Prize: $";
            echo $_SESSION['prize'];?></div>
            <?php 
            include("record.php");
        }
    }
    ?>
    
</body>
</html>
