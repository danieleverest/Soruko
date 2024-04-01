<?php
session_start();
include_once "../config/db.php";

$color = isset($_POST['color']) ? $_POST['color'] : '';
$event_name = isset($_POST['event_name']) ? $_POST['event_name'] : '';
$errors = array();

// Check if form is submitted
if (isset($_POST['add-event'])) {
    // Get form data
    $color = mysqli_real_escape_string($conn, $_POST['color']);
    $event_name = mysqli_real_escape_string($conn, $_POST['event_name']);

    // Check if event already exists
    $sql_check = "SELECT * FROM events WHERE color = '$color' AND event_name = '$event_name'";
    $result_check = mysqli_query($conn, $sql_check);
    if (mysqli_num_rows($result_check) > 0) {
        // Event already exists
        $_SESSION['error'] = "Event already exists!";
    } else {
        // Insert event data into database
        $sql_insert = "INSERT INTO events (color, event_name) VALUES ('$color', '$event_name')";
        if (mysqli_query($conn, $sql_insert)) {
            $_SESSION['success'] = "Event added successfully!";
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

if (isset($_POST['edit-event'])) {
    $event_id = mysqli_real_escape_string($conn, $_POST['event_id']);
    $new_color = mysqli_real_escape_string($conn, $_POST['new_color']);
    $new_event_name = mysqli_real_escape_string($conn, $_POST['new_event_name']);

    // Update event data in the database
    $sql_update = "UPDATE events SET color = '$new_color', event_name = '$new_event_name' WHERE id = '$event_id'";
    if (mysqli_query($conn, $sql_update)) {
        $_SESSION['success'] = "Event updated successfully!";
    } else {
        $_SESSION['error'] = "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit();
}

if (isset($_POST['delete-event'])) {
    $eventId = mysqli_real_escape_string($conn, $_POST['delete-event-id']);

    // Prepare and execute SQL query to delete the event
    $sql_delete = "DELETE FROM events WHERE id = '$eventId'";
    if (mysqli_query($conn, $sql_delete)) {
        $_SESSION['success'] = "Event deleted successfully!";
    } else {
        $_SESSION['error'] = "Error: " . mysqli_error($conn);
    }

    // Redirect back to the previous page
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit();
}




?>