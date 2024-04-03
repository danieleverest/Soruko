<?php
include_once "../../config/db.php";

$sql = "INSERT INTO `notes` () VALUES ();";
if($conn->query($sql) === TRUE) {
    echo "Note created.";
} else {
    echo "Error creating note: " . $conn->error;
}
?>