<?php
// Include your database connection code here
include_once "../config/db.php";

// Fetch linkcategories data from the database
$sql = "SELECT * FROM linkcategories";
$result = mysqli_query($conn, $sql);

// Check if there are any linkcategories
if (mysqli_num_rows($result) > 0) {
    // Loop through each row of the result set
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <div class="fc-link fc-daygrid-link fc-daygrid-block-link"
            style="background-color: <?php echo $row['color'] . '1A'; ?>;">
            <div class="fc-link-main">
                <?php echo $row['link_name']; ?>
            </div>
        </div>
        <?php
    }
} else {
    // No linkcategories found
    ?>
    <div>No linkcategories found.</div>
    <?php
}
?>