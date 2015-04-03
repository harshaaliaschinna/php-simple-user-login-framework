<?php
/*
Author: harshaaliaschinna
E-mail: harshaaliaschinna@gmail.com
Script: php-simple-user-login-framework
*/
// Destroying stored session variables
session_destroy();
// closing database connection
include "dbclose.php";
// Redirecting to login page
header("location: login.php");
?>
