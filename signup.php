<?php session_start();
if(isset($_POST['signup'])){
    $newUser = "\n".$_POST['Username'].",".$_POST['Password'];
    $file = fopen("users.txt", "a+") or die("Unable to open file!");
    fwrite($file, $newUser);
    fclose($file);
    header("location:login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Sign Up</title>
</head>
<body>
    <div class="container">
    <form action="" method="post">
    <div class="logo"><img src="logo.jpeg" alt="logo" width="100" height="100" ></div>
            <h2>New User Sign Up</h2>
            <label for="Username"><b>Username</b></label></br>
            <input type="text" size="20" name="Username" required></br>
            <label for="Password"><b>Password</b></label></br>
            <input type="password" size="20" name="Password" required></br>
            <input type="submit" name="signup" value="Sign Up">

    </form>
    </div>
    
</body>
</html>