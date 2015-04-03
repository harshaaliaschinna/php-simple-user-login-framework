<?php
/*
Author: harshaaliaschinna
E-mail: harshaaliaschinna@gmail.com
Script: php-simple-user-login-framework
*/
include "dbopen.php";
// Starting sessions
session_start();
$lock_uid=$_SESSION['uid'];

$usrcheck=mysqli_query($dbcon,"SELECT * FROM users WHERE uid='$lock_uid'");
if(!$usrcheck)
echo "ERROR";
$lckchk=mysqli_fetch_array($usrcheck,MYSQLI_ASSOC);
// Validating email with database and session
$lock_email=$lckchk['email'];
// if logged in user is another or hijacked or not logged in then redirecting user to login page
if(!isset($lock_email))
{
    header("location: login.php");
}
?>
