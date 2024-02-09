<?php
session_start();
unset($_SESSION["alogin"]);
header("Location:index.php");
?>