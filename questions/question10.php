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
            <h3>Question 10: Which fashion brand made the “Genius Jeans” that became part of the Guinness World Records?</h3>
            <div id="grid">
            <input type="submit" name="question-10-answers" id="answer" value="A. Yves Saint Laurent" />
            <input type="submit" name="question-10-answers" id="answer" value="B. Louis Vuitton" />
            <input type="submit" name="question-10-answers" id="answer" value="C. Coco Chanel" />
            <input type="submit" name="question-10-answers" id="answer" value="D. Gucci" />
            </div>
        </form>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $answer = $_POST['question-10-answers'];
        if ($answer == "D. Gucci") {
            $_SESSION['prize'] = 1000;
            echo "<div id='check'> You are the WINNER! </br> Prize: $"; 
            echo $_SESSION['prize']; ?></div>
            <?php
            include("record.php");  ?>
            
        <?php
        } else {
            $_SESSION['prize'] = 900; 
            echo "<div id='check'>Incorrect! </br> Prize: $";
            echo $_SESSION['prize'];?></div>
            <?php  
            include("record.php"); 
        }
    }
    ?>
    
</body>
</html>