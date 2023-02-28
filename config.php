<?php
session_start();
$conn = mysqli_connect("localhost","root","","dandb") or die("Database Connection Failed");
echo "Database Connection Succesfull";
?>


<?php
/*
// Define database credentials
$db_host = "localhost";
$db_user = "database_user";
$db_password = "database_password";
$db_name = "database_name";

// Connect to the database
$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

// Close the connection
mysqli_close($conn);
*/
?>
