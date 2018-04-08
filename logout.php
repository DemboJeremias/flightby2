<?php
session_start();
unset($_SESSION["userID"]);
unset($_SESSION["name"]);
unset($_SESSION["access_level"]);
session_destroy();
$error = "You have successfully logged out.";
include "login.php";
?>