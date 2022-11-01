<?php session_start();

if(isset($_POST["Start"])){
    
    header("location:./questions/question1.php");
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="Chrome">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./style.css" rel="stylesheet"  type="text/css">
    <title>Welcome</title>
</head>
<body>
<?php include("./questions/header.php"); ?>

    <h2>WELCOME <?php echo $_COOKIE["Username"]; ?> TO WHO WANTS TO BE A MILLIONAIRE! </h2>


    <div id="logout">
    <a href="logout.php">Log Out</a></br>
    </div>

    <div class="start">
    <p>Click Start to play</p></br>
    <form action="" method="post">
         <input type="submit" value="Start" name="Start" /></br>
    </form>
    </div>

    <div class="chart">
        <?php 
        include("leaderboard.php");?>
    </div>

    
   
</body>
</html>
