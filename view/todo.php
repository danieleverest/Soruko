<?php
$pageTitle = "Todo";
// Start the session
session_start();

// Check if user is logged in
if (!isset($_SESSION['info'])) {
    // Redirect to login page
    header("Location: auth/login.php");
    exit();
}

// Normal page content below...
?>
<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light"
    data-menu-styles="light" data-toggled="close">

<head>
    <!-- Meta Data -->
    <?php include '../components/externalcss.php'; ?>
    <link href="../assets/css/custom.css" rel="stylesheet">

</head>

<body>

    <!-- Start Switcher -->
    <?php include '../components/switcher.php'; ?>
    <!-- End Switcher -->


    <!-- Loader -->
    <?php include '../components/loader.php'; ?>
    <!-- Loader -->

    <div class="page">
        <!-- app-header -->
        <?php include '../components/header.php'; ?>
        <!-- /app-header -->
        <!-- Start::app-sidebar -->
        <?php include '../components/aside.php'; ?>
        <!-- End::app-sidebar -->

        <!-- Start::app-content -->
        <div class="main-content app-content">
            <div class="container-fluid">

                <!-- Page Header -->
                <div
                    class="my-4 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
                    <div>
                        <h1 class="page-title fw-medium fs-18 mb-2">Todo</h1>
                    </div>
                </div>
                <!-- Page Header Close -->

                <!-- Start::row-1 -->
                <div class="row">
                    <div class="col-xxl-8 col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Open
                                </div>
                                <div class="d-flex">
                                    <button class="btn btn-sm btn-primary btn-wave waves-light" data-bs-toggle="modal"
                                        data-bs-target="#create-task"><i
                                            class="ri-add-line fw-medium align-middle me-1"></i> Create Task</button>
                                    <div class="dropdown ms-2">
                                        <button class="btn btn-icon btn-secondary-light btn-sm btn-wave waves-light"
                                            type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ti ti-dots-vertical"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="javascript:void(0);">New Tasks</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Pending Tasks</a>
                                            </li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Completed Tasks</a>
                                            </li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Inprogress Tasks</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table text-nowrap">
                                        <thead>
                                            <tr>
                                                <th scope="col">Name</th>
                                                <th scope="col">Created Date</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="taskListContainer">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer border-top-0">
                                <nav aria-label="Page navigation" class="pagination-style-1">
                                    <ul class="pagination mb-0 float-end">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="javascript:void(0);">
                                                <i class="ri-arrow-left-s-line align-middle"></i>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
                                        <li class="page-item active"><a class="page-link"
                                                href="javascript:void(0);">2</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="javascript:void(0);">
                                                <i class="bi bi-three-dots"></i>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">21</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="javascript:void(0);">
                                                <i class="ri-arrow-right-s-line align-middle"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Completed
                                </div>
                            </div>
                            <div class="card-body" id="taskDoneListContainer">
                            </div>
                        </div>
                    </div>
                </div>
                <!--End::row-1 -->

            </div>
        </div>
        <!-- End::app-content -->

        <!-- Start::add task modal -->
        <div class="modal fade" id="create-task" tabindex="-1" aria-hidden="true">
            <form id="add-event-form" action="../Controller/TaskController.php" method="post">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h6 class="modal-title">Add Task</h6>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body px-4">
                            <div class="row gy-2">
                                <div class="col-xl-12">
                                    <label for="task-name" class="form-label">Task
                                        Name</label>
                                    <input type="text" class="form-control" id="task-name" placeholder="Task Name"
                                        name="task_name">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary" name="add-task">Add Task</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!-- End::add task modal -->

        <!-- Start::edit task modal -->
        <div class="modal fade" id="edit-task" tabindex="-1" aria-hidden="true">
            <form id="edit-task-form" action="../Controller/TaskController.php" method="post">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h6 class="modal-title">Edit Task</h6>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body px-4">
                            <input type="hidden" name="task_id" id="edit-task-id">
                            <div class="row gy-2">
                                <div class="col-xl-12">
                                    <label for="edit-task-name" class="form-label">Task Name</label>
                                    <input type="text" class="form-control" id="edit-task-name" placeholder="Task Name"
                                        name="new_task_name" required>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary" name="edit-task">Edit
                                Task</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!-- End::add task modal -->

        <!-- Start::delete task modal -->
        <div class="modal fade" id="delete-task" tabindex="-1" aria-hidden="true">
            <form id="delete-task-form" action="../Controller/TaskController.php" method="post">
                <input type="hidden" name="delete-task-id" id="delete-task-id">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h6 class="modal-title">Delete Task</h6>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>Are you sure you want to delete this task?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-danger" name="delete-task">Delete</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!-- End::delete task modal -->


        <!-- Footer Start -->
        <?php include '../components/footer.php'; ?>
        <!-- Footer End -->
        <div class="modal fade" id="header-responsive-search" tabindex="-1" aria-labelledby="header-responsive-search"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="input-group">
                            <input type="text" class="form-control border-end-0" placeholder="Search Anything ..."
                                aria-label="Search Anything ..." aria-describedby="button-addon2">
                            <button class="btn btn-primary" type="button" id="button-addon2"><i
                                    class="bi bi-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <!-- Scroll To Top -->
    <div class="scrollToTop">
        <span class="arrow"><i class="ti ti-arrow-narrow-up fs-20"></i></span>
    </div>
    <div id="responsive-overlay"></div>
    <!-- Scroll To Top -->

    <!-- Popper JS -->
    <script src="../assets/libs/@popperjs/core/umd/popper.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="../assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Defaultmenu JS -->
    <script src="../assets/js/defaultmenu.min.js"></script>

    <!-- Node Waves JS-->
    <script src="../assets/libs/node-waves/waves.min.js"></script>

    <!-- Sticky JS -->
    <script src="../assets/js/sticky.js"></script>

    <!-- Simplebar JS -->
    <script src="../assets/libs/simplebar/simplebar.min.js"></script>
    <script src="../assets/js/simplebar.js"></script>

    <!-- Color Picker JS -->
    <script src="../assets/libs/@simonwep/pickr/pickr.es5.min.js"></script>



    <!-- Custom-Switcher JS -->
    <script src="../assets/js/custom-switcher.min.js"></script>

    <!-- Apex Charts JS -->
    <script src="../assets/libs/apexcharts/apexcharts.min.js"></script>

    <!-- Flat Picker JS -->
    <script src="../assets/libs/flatpickr/flatpickr.min.js"></script>

    <!-- Internal Invoice List JS -->
    <!-- <script src="../assets/js/task-list.js"></script> -->

    <!-- Custom JS -->
    <script src="../assets/js/custom.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var deleteButtons = document.querySelectorAll('.delete-task');
            deleteButtons.forEach(function (button) {
                button.addEventListener("click", function () {
                    var taskId = this.getAttribute('data-id');
                    document.getElementById('delete-task-id').value = taskId;
                });
            });

            var editButtons = document.querySelectorAll('.edit-task');
            editButtons.forEach(function (button) {
                button.addEventListener("click", function () {
                    var taskId = this.getAttribute('data-id');
                    var taskName = this.getAttribute('data-name');
                    populateEditEventModal(taskId, taskName);
                });
            });

            var toggleSwitches = document.querySelectorAll('[task-toggle]');
            toggleSwitches.forEach(function (toggleSwitch) {
                toggleSwitch.addEventListener('click', function () {
                    var taskId = this.dataset.taskId;
                    var status = this.getAttribute('task-toggle') === 'on' ? 1 : 0;
                    updateTaskStatus(taskId, status);
                });
            });


            function displayTasks(status) {
                var xhr = new XMLHttpRequest();
                xhr.onreadystatechange = function () {
                    if (xhr.readyState === XMLHttpRequest.DONE) {
                        if (xhr.status === 200) {
                            // Update the task list container with the fetched tasks
                            var taskListContainer = (status === 0) ? 'taskListContainer' : 'taskDoneListContainer';
                            document.getElementById(taskListContainer).innerHTML = xhr.responseText;
                        } else {
                            // Error handling
                            console.error('Error fetching tasks. Status: ' + xhr.status);
                        }
                    }
                };
                xhr.open('GET', 'todo/tasks_list.php?status=' + status);
                xhr.send();
            }
    
            // Initial display of tasks with status 0 and 1
            displayTasks(0);
            displayTasks(1);
        });

        function populateEditEventModal(taskId, taskName) {
            document.getElementById('edit-task-id').value = taskId;
            document.getElementById('edit-task-name').value = taskName;
        }

        function updateTaskStatus(taskId, status) {
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function () {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        // Update was successful
                        console.log(xhr.responseText);
                        // Re-display tasks with updated status
                        displayTasks(status);
                    } else {
                        // Update failed
                        console.error('Error updating task status.');
                    }
                }
            };
            xhr.open('POST', status == 1 ? 'todo/update_task_statuson.php' : 'todo/update_task_statusoff.php');
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.send('task_id=' + taskId);
        }
    </script>


</body>

</html>