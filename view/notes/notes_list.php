<?php

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

$sql = "SELECT * FROM `notes` ORDER BY `pinned` DESC;";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)) {
    while($row = mysqli_fetch_assoc($result)) {
        ?>
        <div class="col-xl-4 col-md-6 p-3">
            <div class="sticky-note">
                <?php
                    $createdDate = $row['createDate'];
                    $createdDate = new DateTime($createdDate);
                    $createdDate = $createdDate->format('Y: m: d');
                ?>
                <div class="d-flex justify-content-between">
                    <div class="text-right">
                        <h4 class="mb-3"><?php echo $createdDate;?></h4>
                    </div>
                    <div class="text-left">
                        <a class="pin-note" data-id="<?php echo $row['id'];?>" data-pin="<?php echo $row['pinned']; ?>">
                            <?php
                                if($row['pinned'] === 'true') {
                                    echo '<i class="bi bi-pin-angle-fill"></i>';
                                } else {
                                    echo '<i class="bi bi-pin-fill"></i>';
                                }
                            ?>    
                        </a>
                    </div>
                </div>
                <div class="form-group">
                    <!-- <label for="noteContent">Content:</label> -->
                    <textarea data-id="<?php echo $row['id'];?>" class="form-control note-content" rows="5"><?php echo $row['content']?></textarea>
                </div>
                <a class="btn btn-primary delete-note" data-id="<?php echo $row['id'];?>">Delete</a>
            </div>
        </div>
        <?php
    }
}
?>