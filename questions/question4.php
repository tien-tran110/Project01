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
            <h3>Question 4: Which country produces the most coffee in the world?</h3>
            <div id="grid">
            <input type="submit" name="question-4-answers" id="answer" value="A. Brazil" />
            <input type="submit" name="question-4-answers" id="answer" value="B. United States" />
            <input type="submit" name="question-4-answers" id="answer" value="C. Cuba" />
            <input type="submit" name="question-4-answers" id="answer" value="D. Thailand" />
            </div>
        </form>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $answer = $_POST['question-4-answers'];
        if ($answer == "A. Brazil") {
            $_SESSION['prize'] = 400;
            echo "<div id='check'> Correct! </br> Prize: $"; 
            echo $_SESSION['prize']; ?></div>
            <?php
            
           header("refresh: 2;url=question5.php");
    
        } else {
            $_SESSION['prize'] = 300;
           
            echo "<div id='check'>Incorrect! </br> Prize: $";
            echo $_SESSION['prize'];?></div>
            <?php 
            include("record.php");
        }
    }
    ?>
    
</body>
</html>

