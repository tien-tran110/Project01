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
            <h3>Question 7: What is your body's largest organ?</h3>
            <div id="grid">
            <input type="submit" name="question-7-answers" id="answer" value="A. Stomach" />
            <input type="submit" name="question-7-answers" id="answer" value="B. Lungs" />
            <input type="submit" name="question-7-answers" id="answer" value="C. Heart" />
            <input type="submit" name="question-7-answers" id="answer" value="D. Skin" />
            </div>
        </form>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $answer = $_POST['question-7-answers'];
        if ($answer == "D. Skin") {
            $_SESSION['prize'] = 700;
            echo "<div id='check'> Correct! </br> Prize: $"; 
            echo $_SESSION['prize']; ?></div>
            <?php
            header("refresh: 2;url=question8.php");
    
        } else {
            $_SESSION['prize'] = 600;
           
            echo "<div id='check'>Incorrect! </br> Prize: $";
            echo $_SESSION['prize'];?></div>
            <?php 
            include("record.php");
        }
    }
    ?>
    
</body>
</html>