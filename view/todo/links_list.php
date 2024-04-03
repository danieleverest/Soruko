<?php
// session_start();

$server = 'localhost';
$dbuser = 'root';
$dbpass = '';
$database = 'soruko';


try {
    $conn = mysqli_connect($server, $dbuser, $dbpass, $database);
} catch (PDOException $e) {
    if (!$conn) {
        die("Connection error: " . mysqli_connect_error());
    }
    // die("Error de conexión a la base de datos: " . $e->getMessage());
}

mysqli_set_charset($conn, "utf8");

?>

<?php

// Fetch links data from the database
$sql = "SELECT * FROM links";
$result = mysqli_query($conn, $sql);

// Check if there are any links
if (mysqli_num_rows($result) > 0) {
    // Loop through each row of the result set
    while ($row = mysqli_fetch_assoc($result)) {
?>
        <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-6">
            <div class="card custom-card text-center">
                <div class="card-body p-4">
                    <div class="avatar avatar-xl avatar-rounded mb-3">
                        <img src="../Controller/uploads/<?php echo $row['image_path']; ?>" alt="Links" class="img-thumbnail">
                    </div>
                    <div class="mb-3">
                        <h6 class="mb-1 fw-medium">
                            <?php echo $row['link_name']; ?>
                        </h6>
                        <a class="mb-1 text-muted contact-mail text-truncate" target="_blank" href="<?php echo $row['link_url']; ?>" style="cursor: pointer;">
                            <?php echo $row['link_url']; ?>
                        </a>
                    </div>
                    <div class="d-flex align-items-center justify-content-center gap-2">
                        <a type="button" class="btn btn-sm btn-outline-light border" target="_blank" href="<?php echo $row['link_url']; ?>">
                            View
                        </a>
                        <div class="dropdown">
                            <button class="btn btn-sm btn-icon btn-outline-light btn-wave border" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="ri-more-2-fill"></i>
                            </button>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item edit-link" href="javascript:void(0);" data-id="<?php echo $row['id']; ?>" data-bs-toggle="modal" data-name="<?php echo $row['link_name']; ?>" data-bs-target="#edit-link" data-url="<?php echo $row['link_url']; ?>" data-category="<?php echo $row['category_id']; ?>" data-image="<?php echo $row['image_path']; ?>"><i class="ri-edit-line align-middle me-1 d-inline-block"></i>Edit</a>
                                </li>
                                <li>
                                    <a class="dropdown-item delete-link" href="javascript:void(0);" data-id="<?php echo $row['id']; ?>" data-bs-toggle="modal" data-bs-target="#delete-link"><i class="ri-delete-bin-line me-1 align-middle d-inline-block"></i>Delete</a>
                                </li>
                                <li>
                                    <a class="dropdown-item favorite-link" href="javascript:void(0);" data-id="<?php echo $row['id']; ?>"><i class="ri ri-heart-3-line me-2 align-middle d-inline-block"></i>Favourite</a>
                                </li>
                            </ul>

                            <ul class="dropdown-menu">


                            </ul>
                        </div>
                        <button aria-label="button" class="btn btn-sm btn-icon btn-outline-light border" type="button">
                            <i class="ri-heart-3-fill text-danger"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
} else {
    // No links found
    ?>
    <div>No links found.</div>
<?php
}
?>