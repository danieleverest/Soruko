<?php
session_start();
include_once "../config/db.php";

$errors = array();

// Check if form is submitted
if (isset($_POST['add-calendar-event'])) {
    // Get form data
    $title = isset($_POST['title']) ? $_POST['title'] : '';
    $start = isset($_POST['start']) ? $_POST['start'] : '';
    $end = isset($_POST['end']) ? $_POST['end'] : '';
    $color = isset($_POST['color']) ? $_POST['color'] : '';
    // Check if event already exists
    $sql_check = "SELECT * FROM calendar WHERE title = '$title' AND start = '$start' AND end = '$end' AND color = '$color" ;
    $result_check = mysqli_query($conn, $sql_check);
    if (mysqli_num_rows($result_check) > 0) {
        // Event already exists
        $_SESSION['error'] = "Event already exists!";
    } else {
        // Insert event data into database
        $sql_insert = "INSERT INTO calendar (title, start, end, color) VALUES ('$title', '$start', '$end', '$color')";
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
}if (isset($_POST['delete-calendar-event'])) {
    // Get form data
    $deleteId = isset($_POST['deleteId']) ? $_POST['deleteId'] : '';

    // Prepare and execute SQL query to delete the event
    $sql_delete = "DELETE FROM calendar WHERE id = '$deleteId'";
    if (mysqli_query($conn, $sql_delete)) {
        $_SESSION['success'] = "Event deleted successfully!";
    } else {
        $_SESSION['error'] = "Error: " . mysqli_error($conn);
    }

    // Close database connection
    mysqli_close($conn);

    // Redirect back to the previous page
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit();
}else{
    // Get form data
    // Check if event already exists
    $sql = "SELECT * FROM calendar" ;
    $result = mysqli_query($conn, $sql);

    // Close database connection
    mysqli_close($conn);

    $data = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }

    // Redirect back to the previous page
    // header('Location: ' . $_SERVER['HTTP_REFERER']);
    header('Content-Type: application/json');

    echo json_encode($data);
    exit();
}



?>