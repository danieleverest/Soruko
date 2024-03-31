<?php
session_start();
include_once "../config/db.php";

$task_name = isset($_POST['task_name']) ? $_POST['task_name'] : '';
$errors = array();

// Check if form is submitted
if (isset($_POST['add-task'])) {
    // Get form data
    $task_name = mysqli_real_escape_string($conn, $_POST['task_name']);

    // Check if task already exists
    $sql_check = "SELECT * FROM tasks WHERE task_name = '$task_name'";
    $result_check = mysqli_query($conn, $sql_check);
    if (mysqli_num_rows($result_check) > 0) {
        // Task already exists
        $_SESSION['error'] = "Task already exists!";
    } else {
        // Insert task data into database
        $sql_insert = "INSERT INTO tasks (task_name) VALUES ('$task_name')";
        if (mysqli_query($conn, $sql_insert)) {
            $_SESSION['success'] = "Task added successfully!";
        } else {
            $_SESSION['error'] = "Error: " . mysqli_error($conn);
        }
    }

    // Close database connection
    mysqli_close($conn);

    // Redirect back to the previous page
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit();
}

if (isset($_POST['edit-task'])) {
    $task_id = mysqli_real_escape_string($conn, $_POST['task_id']);
    $new_task_name = mysqli_real_escape_string($conn, $_POST['new_task_name']);

    // Update task data in the database
    $sql_update = "UPDATE tasks SET task_name = '$new_task_name' WHERE id = '$task_id'";
    if (mysqli_query($conn, $sql_update)) {
        $_SESSION['success'] = "Task updated successfully!";
    } else {
        $_SESSION['error'] = "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit();
}

if (isset($_POST['delete-task'])) {
    $taskId = mysqli_real_escape_string($conn, $_POST['delete-task-id']);

    // Prepare and execute SQL query to delete the task
    $sql_delete = "DELETE FROM tasks WHERE id = '$taskId'";
    if (mysqli_query($conn, $sql_delete)) {
        $_SESSION['success'] = "Task deleted successfully!";
    } else {
        $_SESSION['error'] = "Error: " . mysqli_error($conn);
    }

    // Redirect back to the previous page
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit();
}
?>