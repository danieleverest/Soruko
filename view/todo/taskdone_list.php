<?php
// Include your database connection code here
include_once "../config/db.php";

// Fetch tasks data from the database
$sql = "SELECT * FROM tasks WHERE status = 1";
$result = mysqli_query($conn, $sql);

// Check if there are any tasks
if (mysqli_num_rows($result) > 0) {
    // Loop through each row of the result set
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
        
        <?php
    }
} else {
    // No tasks found
    ?>
    <div>No tasks found.</div>
    <?php
}
?>