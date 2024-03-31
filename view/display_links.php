<?php
// Include your database connection code here
include_once "../config/db.php";

// Fetch links data from the database
$sql = "SELECT * FROM linkcategories";
$result = mysqli_query($conn, $sql);

// Check if there are any links
if (mysqli_num_rows($result) > 0) {
    // Loop through each row of the result set
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <li class="list-group-item">
            <div class="d-flex align-items-center flex-wrap gap-2">
                <div class="flex-fill">
                    <span class="d-block text-muted fs-12 fw-normal">Name</span>
                    <a href="javascript:void(0);"><span class="d-block fw-medium">
                            <?php echo $row['linkcategory']; ?>
                        </span></a>
                </div>
                <div class="btn-list">
                    <button type="button" aria-label="button"
                        class="btn btn-sm btn-icon btn-info-light btn-wave edit-linkcategory"
                        data-name="<?php echo $row['linkcategory']; ?>" data-id="<?php echo $row['id']; ?>"
                        aria-label="Edit Category" data-bs-toggle="modal" data-bs-target="#edit-linkcategory">
                        <i class="ri-edit-line"></i></button>
                    <button type="button" aria-label="button"
                        class="btn btn-sm btn-icon btn-danger-light btn-wave delete-linkcategory"
                        data-id="<?php echo $row['id']; ?>" data-bs-toggle="modal" data-bs-target="#delete-linkcategory">
                        <i class="ri-delete-bin-line"></i></button>
                </div>
            </div>
        </li>
        <?php
    }
} else {
    // No links found
    ?>
    <tr>
        <td colspan="3">No links found.</td>
    </tr>
    <?php
}

?>