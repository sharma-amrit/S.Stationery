<?php
// Start the session
session_start();

// Database connection
$DBservername = "localhost";
$DBusername = "root";
$DBpassword = "";
$DBdatabase = "s_stationery";

$conn = mysqli_connect($DBservername, $DBusername, $DBpassword, $DBdatabase);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>