<?php

include "config.php";

$dbcon=mysqli_connect($servername,$serveruser,$serverpass,$serverdb);

if(!$dbcon)
{
    die("Error! establishing Database connection".mysqli_connect_error());
}
?>
