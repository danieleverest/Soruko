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
                                            <?php
                                            $_GET['status'] = 0; // Set the status parameter
                                            include "todo/tasks_list.php"; // Include the file
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer border-top-0">
                                <nav aria-label="Page navigation" class="pagination-style-1">
                                    <ul class="pagination mb-0 float-end">
                                        <li class="page-item <?php echo $page <= 1 ? 'disabled' : ''; ?>">
                                            <a class="page-link" href="?status=0&page=<?php echo $page - 1; ?>">
                                                <i class="ri-arrow-left-s-line align-middle"></i>
                                            </a>
                                        </li>
                                        <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                                            <li class="page-item <?php echo $i == $page ? 'active' : ''; ?>">
                                                <a class="page-link" href="?status=0&page=<?php echo $i ?>">
                                                    <?php echo $i; ?>
                                                </a>
                                            </li>
                                        <?php endfor; ?>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link <?php echo $page >= $totalPages ? 'disabled' : ''; ?>"
                                                href="?status=0&page=<?php echo $page + 1; ?>">
                                                <i class="ri-arrow-right-s-line align-middle"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-6">
                        <div class="card custom-card overflow-auto" style="max-height: 800px">
                            <div class="card-header">
                                <div class="card-title">
                                    Completed
                                </div>
                            </div>
                            <div class="card-body" id="taskDoneListContainer">
                                <?php
                                $_GET['status'] = 1; // Set the status parameter
                                include "todo/tasks_list.php"; // Include the file
                                ?>
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
        function setupPaginationListeners() {
            var paginationLinks = document.querySelectorAll('.pagination .page-link');
            paginationLinks.forEach(function (link) {
                link.addEventListener('click', function (event) {
                    event.preventDefault(); // Prevent the default behavior of anchor tags

                    // Get the page number from the link's href attribute
                    var page = this.getAttribute('href').split('=')[2];

                    // Fetch tasks for the selected page using AJAX
                    displayTasks(0, page);

                    // Update the active class for pagination links
                    var activeLink = document.querySelector('.pagination .page-item.active');
                    if (activeLink) {
                        activeLink.classList.remove('active');
                    }
                    this.parentElement.classList.add('active');
                });
            });
        }

        function setupToggleSwitchListeners() {
            var toggleSwitches = document.querySelectorAll('[task-toggle]');
            toggleSwitches.forEach(function (toggleSwitch) {
                toggleSwitch.addEventListener('click', function () {
                    var taskId = this.dataset.taskId;
                    var status = this.getAttribute('task-toggle') === 'on' ? 1 : 0;
                    updateTaskStatus(taskId, status);

                    // After updating task status, display tasks for the current page again
                    var currentPage = getCurrentPage(); // Assuming you have a function to get the current page number
                    displayTasks(status, currentPage);
                });
            });
        }

        function getCurrentPage() {
            // Get the URL parameters
            var urlParams = new URLSearchParams(window.location.search);

            // Get the value of the 'page' parameter from the URL
            var page = urlParams.get('page');

            // Parse the page number as an integer, or return 1 if it's not available or not a valid number
            return parseInt(page) || 1;
        }

        document.addEventListener("DOMContentLoaded", function () {

            // Initial setup of event listeners
            setupEventListeners();

            setupPaginationListeners();
            displayTasks(0, getCurrentPage()); // Display tasks with status 0
            displayTasks(1, getCurrentPage()); // Display tasks with status 1
        });

        function setupEventListeners() {
            // Set up toggle switch event listeners
            setupToggleSwitchListeners();

            // Set up delete task event listeners
            var deleteButtons = document.querySelectorAll('.delete-task');
            deleteButtons.forEach(function (button) {
                button.addEventListener("click", function () {
                    var taskId = this.getAttribute('data-id');
                    document.getElementById('delete-task-id').value = taskId;
                });
            });

            // Set up edit task event listeners
            var editButtons = document.querySelectorAll('.edit-task');
            editButtons.forEach(function (button) {
                button.addEventListener("click", function () {
                    var taskId = this.getAttribute('data-id');
                    var taskName = this.getAttribute('data-name');
                    populateEditEventModal(taskId, taskName);
                });
            });
        }

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
                        displayTasks(0, getCurrentPage()); // Display tasks with status 0
                        displayTasks(1, getCurrentPage()); // Display tasks with status 1
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

        function displayTasks(status, page) {

            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function () {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        // Update the task list container with the fetched tasks
                        var taskListContainer = (status === 0) ? 'taskListContainer' : 'taskDoneListContainer';
                        var container = document.getElementById(taskListContainer);
                        if (container) {
                            container.innerHTML = xhr.responseText;
                            // Set up event listeners after updating tasks
                            setupEventListeners();
                        } else {
                            console.error('Task list container not found:', taskListContainer);
                        }
                    } else {
                        // Error handling
                        console.error('Error fetching tasks. Status: ' + xhr.status);
                    }
                }
            };
            xhr.open('GET', 'todo/tasks_list.php?status=' + status + '&page=' + page);
            xhr.send();
        }

        function handlePaginationClick(event) {
            event.preventDefault(); // Prevent the default behavior of anchor tags

            // Get the URL from the anchor tag's href attribute
            var url = event.target.href;

            // Extract the page number from the URL
            var params = new URLSearchParams(url);
            var page = params.get('page') || 1;

            // Fetch tasks for the selected page using AJAX
            displayTasks(0, page);

            return false;
        }


    </script>



</body>

</html>