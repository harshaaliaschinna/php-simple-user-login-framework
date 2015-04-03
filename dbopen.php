<?php
/*
Author: harshaaliaschinna
E-mail: harshaaliaschinna@gmail.com
Script: php-simple-user-login-framework
*/

include "config.php";
// Creating new connection with MYSQL server
$dbcon=mysqli_connect($servername,$serveruser,$serverpass,$serverdb);
// If there are problems in connecting to database
if(!$dbcon)
{
    die("Error! Establishing Database connection".mysqli_connect_error());
}
?>
