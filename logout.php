<?php
session_start();
unset($_SESSION["email"]);
unset($_SESSION["id"]);
unset($_SESSION["password"]);
unset($_SESSION["epassword"]);
unset($_SESSION["name"]);
unset($_SESSION["username"]);
unset($_SESSION["error"]);
header("Location:index.php");
?>