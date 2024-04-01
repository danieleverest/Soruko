<?php
include_once "../../config/db.php";

if(isset($_POST['note_id'])) {
    $noteId = mysqli_real_escape_string($conn, $_POST['note_id']);

    $sql = "DELETE FROM `notes` WHERE id=$noteId";

    if($conn->query($sql) === TRUE) {
        echo "Note deleted";
    } else {
        echo "Error deleting note: " . $conn->error;
    }
}
?>