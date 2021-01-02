<?php

$serverName = "localhost";
$dBUserName = "root";
$dBPassword = "";
$dBName = "koronaLS";

$conn = mysqli_connect($serverName,$dBUserName,$dBPasswordName,$dBName);
if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}