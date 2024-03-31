<?php
session_start();
include_once "../config/db.php";

$color = isset($_POST['color']) ? $_POST['color'] : '';
$linkcategory_name = isset($_POST['linkcategory_name']) ? $_POST['linkcategory_name'] : '';
$errors = array();

// Check if form is submitted
if (isset($_POST['add-linkcategory'])) {
    // Get form data
    $linkcategory_name = mysqli_real_escape_string($conn, $_POST['linkcategory_name']);

    // Check if linkcategory already exists
    $sql_check = "SELECT * FROM linkcategories WHERE linkcategory = '$linkcategory_name'";
    $result_check = mysqli_query($conn, $sql_check);
    if (mysqli_num_rows($result_check) > 0) {
        // Category already exists
        $_SESSION['error'] = "Category already exists!";
    } else {
        // Insert linkcategory data into database
        $sql_insert = "INSERT INTO linkcategories (linkcategory) VALUES ('$linkcategory_name')";
        if (mysqli_query($conn, $sql_insert)) {
            $_SESSION['success'] = "Category added successfully!";
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

if (isset($_POST['edit-linkcategory'])) {
    $linkcategory_id = mysqli_real_escape_string($conn, $_POST['linkcategory_id']);
    $new_linkcategory_name = mysqli_real_escape_string($conn, $_POST['new_linkcategory_name']);

    // Update linkcategory data in the database
    $sql_update = "UPDATE linkcategories SET linkcategory = '$new_linkcategory_name' WHERE id = '$linkcategory_id'";
    if (mysqli_query($conn, $sql_update)) {
        $_SESSION['success'] = "Category updated successfully!";
    } else {
        $_SESSION['error'] = "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit();
}

if (isset($_POST['delete-linkcategory'])) {
    $linkcategoryId = mysqli_real_escape_string($conn, $_POST['delete-linkcategory-id']);

    // Prepare and execute SQL query to delete the linkcategory
    $sql_delete = "DELETE FROM linkcategories WHERE id = '$linkcategoryId'";
    if (mysqli_query($conn, $sql_delete)) {
        $_SESSION['success'] = "Category deleted successfully!";
    } else {
        $_SESSION['error'] = "Error: " . mysqli_error($conn);
    }

    // Redirect back to the previous page
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit();
}
?>