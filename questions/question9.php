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
            <h3>Question 9: What was the first soft drink in space?</h3>
            <div id="grid">
            <input type="submit" name="question-9-answers" id="answer" value="A. Coca Cola" />
            <input type="submit" name="question-9-answers" id="answer" value="B. Sprite" />
            <input type="submit" name="question-9-answers" id="answer" value="C. Fanta" />
            <input type="submit" name="question-9-answers" id="answer" value="D. Pepsi" />
            </div>
        </form>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $answer = $_POST['question-9-answers'];
        if ($answer == "A. Coca Cola") {
            $_SESSION['prize'] = 900;
            echo "<div id='check'> Correct! </br> Prize: $"; 
            echo $_SESSION['prize']; ?></div>
            <?php
            header("refresh: 2;url=question10.php");
    
        } else {
            $_SESSION['prize'] = 800;
           
            echo "<div id='check'>Incorrect! </br> Prize: $";
            echo $_SESSION['prize'];?></div>
            <?php 
            include("record.php");
        }
    }
    ?>
    
</body>
</html>