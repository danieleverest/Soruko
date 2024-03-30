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
        <tr>
            <td>
                <?php echo $row['event_name']; ?>
            </td>
            <td>
                <input type="color" class="form-control form-control-color border-0 mt-1" value="<?php echo $row['color']; ?>"
                    disabled>
            </td>
            <td>
                <div class="hstack gap-2 flex-wrap">
                    <a aria-label="anchor" href="javascript:void(0);" class="text-info fs-14 lh-1 edit-event" data-id="<?php echo $row['id']; ?>"
                        aria-label="Edit Event" data-bs-toggle="modal" data-bs-target="#edit-event">
                        <i class="ri-edit-line"></i>
                    </a>
                    <a aria-label="anchor" href="javascript:void(0);" class="text-danger fs-14 lh-1 delete-event"
                        data-id="<?php echo $row['id']; ?>" data-bs-toggle="modal" data-bs-target="#delete-event"><i
                            class="ri-delete-bin-5-line"></i></a>
                </div>
            </td>
        </tr>
        <?php
    }
} else {
    // No events found
    ?>
    <tr>
        <td colspan="3">No events found.</td>
    </tr>
    <?php
}

// Close database connection
mysqli_close($conn);
?>