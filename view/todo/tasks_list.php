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
// Include your database connection code here

if (isset($_GET['status'])) {
    $status = mysqli_real_escape_string($conn, $_GET['status']);

    // Fetch tasks data from the database based on the provided status
    $sql = "SELECT * FROM tasks WHERE status = '$status'";
    $result = mysqli_query($conn, $sql);
    // Check if there are any tasks
    if (mysqli_num_rows($result) > 0) {
        // Loop through each row of the result set
        while ($row = mysqli_fetch_assoc($result)) {
            if ($row['status'] == 0) {
                ?>
                <tr class="task-list" id="task_<?php echo $row['id']; ?>">
                    <td>
                        <span class="fw-medium">
                            <div class="fs-15 fw-medium">
                                <?php echo $row['task_name']; ?>
                            </div>
                            <?php
                            // Check if the task has been updated
                            if ($row['updated_at'] != $row['created_at']) {
                                ?>
                                <p class="mb-0 text-muted op-7 fs-12">
                                    Updated by
                                    <?php echo $row['updated_at']; ?>
                                </p>
                                <?php
                            }
                            ?>
                        </span>
                    </td>
                    <td>
                        <?php echo $row['created_at']; ?>
                    </td>
                    <td>
                        <div class="d-flex align-items-center flex-wrap">
                            <div class="">
                                <p class="text-muted m-0"><code></code></p>
                            </div>
                            <div class="toggle toggle-sm toggle-secondary on m-0 p-0" task-toggle="on"
                                data-task-id="<?php echo $row['id']; ?>">
                                <span></span>
                            </div>
                        </div>
                    </td>
                    <td>
                        <button class="btn btn-primary-light btn-icon btn-sm edit-task" data-id="<?php echo $row['id']; ?>"
                            data-bs-toggle="modal" data-name="<?php echo $row['task_name']; ?>" data-bs-target="#edit-task"><i
                                class="ri-edit-line"></i></button>
                        <button class="btn btn-danger-light btn-icon ms-1 btn-sm task-delete-btn delete-task"
                            data-id="<?php echo $row['id']; ?>" data-bs-toggle="modal" data-bs-target="#delete-task">
                            <i class="ri-delete-bin-5-line"></i></button>
                    </td>
                </tr>
                <?php
            } else {
                ?>
                <div class="d-flex align-items-center w-100 task-group-item m-1 border-radius bg-light">
                    <div class="px-2">
                        <div class="fs-15 fw-medium">
                            <?php echo $row['task_name']; ?>
                        </div>
                        <p class="mb-0 text-muted op-7 fs-12">
                            <?php echo $row['finished_date']; ?>
                        </p>
                    </div>
                    <div class="ms-auto d-flex">
                        <div class="px-2 align-self-center">
                            <!-- <span class="badge bg-success-transparent">Done</span> -->
                            <div class="d-flex align-items-center flex-wrap" style="border: 1px solid rgba(0, 0, 0, 0.3)">
                                <div class="">
                                    <p class="text-muted m-0"><code></code></p>
                                </div>
                                <div class="toggle toggle-sm toggle-secondary m-0 p-0" task-toggle="off"
                                    data-task-id="<?php echo $row['id']; ?>">
                                    <span></span>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown text-nowrap">
                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-sm task-btn btn-light"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fe fe-more-vertical"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item edit-task" href="javascript:void(0);" data-id="<?php echo $row['id']; ?>"
                                        data-bs-toggle="modal" data-name="<?php echo $row['task_name']; ?>"
                                        data-bs-target="#edit-task"><i
                                            class="ri-edit-line align-middle me-1 d-inline-block"></i>Edit</a>
                                </li>
                                <li><a class="dropdown-item delete-task" href="javascript:void(0);" data-id="<?php echo $row['id']; ?>"
                                        data-bs-toggle="modal" data-bs-target="#delete-task"><i
                                            class="ri-delete-bin-line me-1 align-middle d-inline-block"></i>Delete</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php
            }
        }
    } else {
        // No tasks found
        ?>
        <div>No tasks found.</div>
        <?php
    }
}

?>