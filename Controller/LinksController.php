<?php
session_start();
include_once "../config/db.php";

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

// Links
if (isset($_POST["add-link"])) {
    // Retrieve form data
    $link_name = mysqli_real_escape_string($conn, $_POST['link_name']);
    $link_url = mysqli_real_escape_string($conn, $_POST['link_url']);
    $category_id = mysqli_real_escape_string($conn, $_POST['category_id']);

    if ($_FILES["image"]["error"] === UPLOAD_ERR_OK) {
        // Check if the file is an image
        $fileType = exif_imagetype($_FILES["image"]["tmp_name"]);
        if ($fileType !== false) {
            // Generate a unique name for the image
            $imageName = uniqid("link_image_") . "." . pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);

            // Specify the directory where uploaded images will be saved
            $uploadDirectory = "uploads/";

            // Move the uploaded file to the specified directory
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $uploadDirectory . $imageName)) {
                // File upload successful, now insert link data into the database

                // Prepare the SQL statement
                $sql_insert = "INSERT INTO links (link_name, link_url, category_id, image_path) VALUES ('$link_name', '$link_url', '$category_id', '$imageName')";

                if (mysqli_query($conn, $sql_insert)) {
                    $_SESSION['success'] = "Link added successfully!";
                    header('Location: ' . $_SERVER['HTTP_REFERER']);
                    // header("location: links.php?errorMessage=" . urlencode($errorMessage));
                    exit();
                } else {
                    $_SESSION['error'] = "Error: " . mysqli_error($conn);
                }


                // $sql = "INSERT INTO links (link_name, price, shopcategory_id, description, image) VALUES ('$linkName', $price, $shopcategoryID, '$description', '$imageName')";

            } else {
                // Error moving uploaded file
                // echo "Error uploading image.";
                // header("location: links.php?errorMessage=" . urlencode($errorMessage));
                $errorMessage = "Error uploading image.";
                // header('Location: ' . $_SERVER['HTTP_REFERER']);
                // exit();
            }
        } else {
            // File is not an image
            $errorMessage = "Uploaded file is not an image.";
            // header("location: links.php?errorMessage=" . urlencode($errorMessage));
            // header('Location: ' . $_SERVER['HTTP_REFERER']);
            // exit;
        }
    } else {
        $errorMessage = "Error uploading file: " . $_FILES["image"]["error"];
        // header("location: shopproducts.php?errorMessage=" . urlencode($errorMessage));
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit();
    }
}
?>