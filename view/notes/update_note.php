<?php
include_once "../../config/db.php";
if(isset($_POST['note_id'])) {
    $noteId = mysqli_real_escape_string($conn, $_POST['note_id']);
    if(isset($_POST['content'])) {
        $content = mysqli_real_escape_string($conn, $_POST['content']);
    
        $sql = "UPDATE `notes` SET content='$content' WHERE id=$noteId;";

        if($conn->query($sql) === TRUE) {
            echo htmlspecialchars(nl2br($content));
        } else {
            echo "Error updating note: " . $conn->error;
        }
    } else if(isset($_POST['pinned'])) {
        $pinned = mysqli_real_escape_string($conn, $_POST['pinned']);
        
        $sql = "UPDATE `notes` SET pinned='$pinned' WHERE id=$noteId;";
        echo $sql;
        if($conn->query($sql) === TRUE) {
            echo "Note updated";
        } else {
            echo "Error updating note: " . $conn->error;
        }
    }
    // echo $sql;
}
?>