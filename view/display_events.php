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
        <li class="list-group-item">
            <div class="d-flex align-items-center flex-wrap gap-2">
                <div class="lh-1">
                    <span class="avatar avatar-rounded p-2 bg-light">
                        <!-- <img src="../assets/images/media/file-manager/1.png" alt=""> -->
                        <input type="color" class="form-control form-control-color border-0 mt-1"
                            value="<?php echo $row['color']; ?>" disabled>
                    </span>
                </div>
                <div class="flex-fill">
                    <span class="d-block text-muted fs-12 fw-normal">Name</span>
                    <a href="javascript:void(0);"><span class="d-block fw-medium">
                            <?php echo $row['event_name']; ?>
                        </span></a>
                </div>
                <div class="btn-list">
                    <button type="button" aria-label="button" class="btn btn-sm btn-icon btn-info-light btn-wave edit-event"
                        data-id="<?php echo $row['id']; ?>" data-bs-toggle="modal" data-color="<?php echo $row['color']; ?>"
                        data-name="<?php echo $row['event_name']; ?>" data-bs-target="#edit-event">
                        <i class="ri-edit-line"></i></button>
                    <button type="button" aria-label="button" class="btn btn-sm btn-icon btn-danger-light btn-wave delete-event"
                        data-id="<?php echo $row['id']; ?>" data-bs-toggle="modal" data-bs-target="#delete-event"><i
                            class="ri-delete-bin-line"></i></button>
                </div>
            </div>
        </li>
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

?>