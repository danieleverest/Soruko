<?php
// Include your database connection code here
include_once "../../config/db.php";

// Check if the task_id parameter is set
if (isset($_POST['task_id'])) {
    // Sanitize the input
    $taskId = mysqli_real_escape_string($conn, $_POST['task_id']);

    // Update the status of the task to 1
    $sql = "UPDATE tasks SET status = 1, finished_date = NOW() WHERE id = '$taskId'";
    $result = mysqli_query($conn, $sql);

    // Check if the update was successful
    if ($result) {
        echo "Task status updated successfully.";
    } else {
        echo "Error updating task status.";
    }
} else {
    echo "Task ID not provided.";
}
?>