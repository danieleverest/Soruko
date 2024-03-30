<?php
// Include your database connection code here
include_once "../config/db.php";

// Fetch events data from the database
$sql = "SELECT * FROM events";
$result = mysqli_query($conn, $sql);

// Check if there are any events
if (mysqli_num_rows($result) > 0) {
    // Loop through each row of the result set
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <div class="fc-event fc-daygrid-event fc-daygrid-block-event"
            style="background-color: <?php echo $row['color']. '1A'; ?>;">
            <div class="fc-event-main" style="color: <?php echo $row['color']; ?>;">
                <?php echo $row['event_name']; ?>
            </div>
        </div>
        <?php
    }
} else {
    // No events found
    ?>
    <div>No events found.</div>
    <?php
}
?>