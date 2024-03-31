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
        <tr>
            <td>
                <?php echo $row['linkcategory']; ?>
            </td>
            <td>
                <div class="hstack gap-2 flex-wrap">
                    <a aria-label="anchor" href="javascript:void(0);" class="text-info fs-14 lh-1 edit-linkcategory" data-name="<?php echo $row['linkcategory']; ?>"
                        data-id="<?php echo $row['id']; ?>" aria-label="Edit Category" data-bs-toggle="modal"
                        data-bs-target="#edit-linkcategory">
                        <i class="ri-edit-line"></i>
                    </a>
                    <a aria-label="anchor" href="javascript:void(0);" class="text-danger fs-14 lh-1 delete-linkcategory"
                        data-id="<?php echo $row['id']; ?>" data-bs-toggle="modal" data-bs-target="#delete-linkcategory"><i
                            class="ri-delete-bin-5-line"></i></a>
                </div>
            </td>
        </tr>
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