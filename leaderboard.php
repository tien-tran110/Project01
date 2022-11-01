<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Leaderboard Chart</title>
</head>
<body>

    <p style="text-align: center; font-size: 20px;">Leaderboard Chart</p>

    <p><a href="index.php" >Back to Homepage</a></p>
       
    <table>
        <tr>
            <th>Rank</th>
            <th>Name</th>
            <th>Prize</th>
        </tr>
        
       <?php 
       $file = file("chart.txt");
       $leaderboardCount = 0;
       $max = 5;
       
       foreach($file as $line){
           $userLine = explode(",", $line);
           $nameNprize[$userLine[0]] = $userLine[1];
       }
       arsort($nameNprize, SORT_NATURAL);

        foreach($nameNprize as $name => $prize){
            $leaderboardCount++;
            echo "
            <tr>
                <td>$leaderboardCount</td>
                <td>$name</td>
                <td>$prize</td>
            </tr>
            ";

            if($leaderboardCount == $max){
                exit;
            }
        }
        ?>

    </table>
 
</body>
</html>