<?php
// Connect to the database
$server = 'localhost';
$dbuser = 'root';
$dbpass = '';
$database = 'soruko';

$conn = mysqli_connect($server, $dbuser, $dbpass, $database);
if (!$conn) {
    die("Connection error: " . mysqli_connect_error());
}

// Get the status parameter from the request
$status = isset($_GET['status']) ? $_GET['status'] : 0;

// Fetch the total number of records for the specified status
$sql = "SELECT COUNT(*) AS total FROM tasks WHERE status = '$status'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$totalRecords = $row['total'];

// Return the total number of records
echo $totalRecords;

// Close the database connection
mysqli_close($conn);
?>