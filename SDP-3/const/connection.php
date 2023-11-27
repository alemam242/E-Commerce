<?php
define("CURRENCY", "৳");

$server = "localhost";
$username = "root";
$password = "";
$db = "ecom_sdp_3";

$con = mysqli_connect($server, $username, $password, $db);

if (!$con) {
   die("Connection Failed" . mysqli_connect_error());
}
