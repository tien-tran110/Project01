<?php session_start();//start the session
session_destroy();//destroy the session
header("location:login.php");
exit;
?>