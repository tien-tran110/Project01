<?php 
$name = $_COOKIE['Username'];
$prize = $_SESSION['prize'];
$nameNprize = "\n".$name.",".$prize;
$file = fopen("../chart.txt", "a+") or die("Unable to open file!");
fwrite($file, $nameNprize);
fclose($file);

?>
<form action="../index.php" method="post">
<input type="submit" value="Play again"/> 
</form>
<p><a href="../leaderboard.php" >View Leaderboard</a></p>