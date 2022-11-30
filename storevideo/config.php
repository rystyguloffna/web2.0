<?php
session_start();

$host = "localhost";
$user = "root";
$password = "";
$db_name = "tiktok2.0";

$con = mysqli_connect($host, $user, $password, $db_name);

if(!$con){
    die("Connection failed: " . mysqli_connect_error());
}
