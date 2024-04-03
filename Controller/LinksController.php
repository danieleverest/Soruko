<?php
session_start();
include_once "../config/db.php";

$linkcategory_name = isset($_POST['linkcategory_name']) ? $_POST['linkcategory_name'] : '';
$error = array();


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

// Links
if (isset($_POST["add-link"])) {
    // Retrieve form data
    $link_name = mysqli_real_escape_string($conn, $_POST['link_name']);
    $link_url = mysqli_real_escape_string($conn, $_POST['link_url']);
    $category_id = mysqli_real_escape_string($conn, $_POST['category_id']);

    if (isset($_FILES["image"]) && $_FILES["image"]["error"] === UPLOAD_ERR_OK) {
        // Check if the file is an image
        $fileType = exif_imagetype($_FILES["image"]["tmp_name"]);
        if ($fileType !== false) {
            // Generate a unique name for the image
            $imageName = uniqid("link_image_") . "." . pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);

            // Specify the directory where uploaded images will be saved
            $uploadDirectory = "uploads/";
            // $uploadDirectory = "../uploads/"; // Make sure this directory exists and is writable

            // Move the uploaded file to the specified directory
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $uploadDirectory . $imageName)) {
                // File upload successful, now insert link data into the database

                // Prepare the SQL statement
                $sql_insert = "INSERT INTO links (link_name, link_url, category_id, image_path) VALUES ('$link_name', '$link_url', '$category_id', '$imageName')";

                if (mysqli_query($conn, $sql_insert)) {
                    $successMessage = "Link added successfully!";
                    // header('Location: ' . $_SERVER['HTTP_REFERER']);
                    header("Location: ../view/links.php?successMessage=" . urlencode($successMessage));
                    exit;
                } else {
                    $_SESSION['error'] = "Error: " . mysqli_error($conn);
                }
            } else {
                $_SESSION['error'] = "Error moving uploaded image to destination directory.";
            }
        } else {
            // $_SESSION['error'] = "Uploaded file is not a valid image.";
            $errorMessage = "Uploaded file is not a valid image.";
            header("Location: ../view/links.php?errorMessage=" . urlencode($errorMessage));
            exit;
        }
    } else {
        // $_SESSION['error'] = "No file uploaded.";
        $errorMessage = $_FILES["image"]["error"];
        header("Location: ../view/links.php?errorMessage=" . urlencode($errorMessage));
        exit;
        // $errorMessage = "No file uploaded or there was an error uploading the file.";
    }

    if (isset($errorMessage)) {
        header("Location: ../view/links.php?errorMessage=" . urlencode($errorMessage));
        exit;
    }
}

if (isset ($_POST["edit-link"])) {
    $edit_link_id = $_POST["edit_link_id"];
    $edit_link_name = $_POST["edit_link_name"];
    $edit_link_url = $_POST["edit_link_url"];
    $edit_link_category_id = $_POST["edit_link_category_id"];

    // Check if a new image has been uploaded
    if ($_FILES["edit_link_image"]["error"] === UPLOAD_ERR_OK) {
        // Retrieve the old image name
        $old_image_sql = "SELECT image_path FROM links WHERE id = '$edit_link_id'";
        $old_image_result = mysqli_query($conn, $old_image_sql);
        $old_image_row = mysqli_fetch_assoc($old_image_result);
        $old_image = $old_image_row['image_path'];

        // Delete the old image
        unlink("uploads/$old_image");

        // Upload the new image
        $new_image_name = uniqid("link_image_") . "." . pathinfo($_FILES["edit_link_image"]["name"], PATHINFO_EXTENSION);
        $uploadDirectory = "uploads/";
        if (move_uploaded_file($_FILES["edit_link_image"]["tmp_name"], $uploadDirectory . $new_image_name)) {
            // Update the link data with the new image
            $sql = "UPDATE links SET link_name = '$edit_link_name', link_url = '$edit_link_url', category_id = '$edit_link_category_id', image_path = '$new_image_name' WHERE id = '$edit_link_id'";
        } else {
            // Error moving uploaded file
            $errorMessage = "Error uploading new image.";
            header("location: ../view/links.php?errorMessage=" . urlencode($errorMessage));
            exit;
        }
    } else {
        // No new image uploaded, update link data without changing the image
        $sql = "UPDATE links SET link_name = '$edit_link_name', link_url = '$edit_link_url', category_id = '$edit_link_category_id' WHERE id = '$edit_link_id'";
    }

    // Execute the SQL statement
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        $errorMessage = "Error updating link: " . mysqli_error($conn);
        header("location: ../view/links.php?errorMessage=" . urlencode($errorMessage));
        exit;
    }

    $successMessage = "Product updated successfully!";
    header("location: ../view/links.php?successMessage=" . urlencode($successMessage));
    exit;
}

if (isset($_POST['delete-link'])) {
    $linkId = mysqli_real_escape_string($conn, $_POST['delete-link-id']);

    // Prepare and execute SQL query to delete the link
    $sql_delete = "DELETE FROM links WHERE id = '$linkId'";
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