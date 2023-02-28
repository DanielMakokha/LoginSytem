<?php
session_start();
$conn = mysqli_connect("localhost","root","","dandb") or die("Database Connection Failed");
echo "Database Connection Succesfull";
?>