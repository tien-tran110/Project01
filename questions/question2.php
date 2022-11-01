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
            <h3>Question 2: What is the name of the largest ocean on earth?</h3>
            <div id="grid">
            <input type="submit" name="question-2-answers" id="answer" value="A. Indian Ocean" />
            <input type="submit" name="question-2-answers" id="answer" value="B. Pacific Ocean" />
            <input type="submit" name="question-2-answers" id="answer" value="C. Atlantic Ocean" />
            <input type="submit" name="question-2-answers" id="answer" value="D. Arctic Ocean" />
            </div>
        </form>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $answer = $_POST['question-2-answers'];
        if ($answer == "B. Pacific Ocean") {
            $_SESSION['prize'] = 200;

            echo "<div id='check'> Correct! </br> Prize: $"; 
            echo $_SESSION['prize']; ?></div>
            <?php
            
          header("refresh: 2;url=question3.php");
    
        } else {
            $_SESSION['prize'] = 100;
            
            echo "<div id='check'>Incorrect! </br> Prize: $";
            echo $_SESSION['prize'];?></div>
            <?php  
           
            include("record.php");
        }
    }
    ?>
    
</body>
</html>