<?php

$db = mysqli_connect("localhost","root","","myportfolio");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}
?>