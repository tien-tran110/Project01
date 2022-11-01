<?php
session_start();

if(isset($_POST["Submit"])){
    //retrieve login information
    $login = file("users.txt", FILE_IGNORE_NEW_LINES);
    //Check and assign submitted Username and Password to new variable
    $Username = $_POST["Username"];
    $Password = $_POST["Password"];
     
    foreach($login as $user){
        $player = explode(",", $user);
        
        if($Username == $player[0] && $Password == $player[1]){
            $_SESSION["Username"] = $player[0];
            setcookie("Username", $_POST["Username"],time() + (86400 * 30), "/","", 0);
            header("location:index.php");
        }
    }
        //Unsuccesfull -> set error msg
       $msg = "Invalid Login Detail!";
  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="Chrome">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Login Page</title>
</head>
<body> 
    
<div class="container">
    <form action="" method="post">
        
        <!-- container for username and pswd -->
        <div class="logo"><img src="./logo.jpeg" alt="logo" width="100" height="100" ></div>
        <h2>Welcome</h2>
        <div id="input">
            <label><b>Username</b></label></br>
            <input type="text" name="Username" required></br>

            <label><b>Password</b></label></br>
            <input type="password" name="Password" required></br>

            <input type="submit" name="Submit" value="Log In"></br>
            <?php echo "<span style='color:red;'>$msg<br/></span>"; ?>
            Don't have an account? <a href="signup.php"> Sign Up</a>
        </div>         
       
    </form>
  </div>   
</body>
</html>