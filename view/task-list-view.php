<?php
$pageTitle = "Tasks";
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
                        <h1 class="page-title fw-medium fs-18 mb-2">Task List View</h1>
                        <div class="">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Task</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Task List View</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="btn-list">
                        <button class="btn btn-primary-light btn-wave me-2">
                            <i class="bx bx-crown align-middle"></i> Plan Upgrade
                        </button>
                        <button class="btn btn-secondary-light btn-wave me-0">
                            <i class="ri-upload-cloud-line align-middle"></i> Export Report
                        </button>
                    </div>
                </div>
                <!-- Page Header Close -->

                <!-- Start::row-1 -->
                <div class="row">
                    <div class="col-xxl-9 col-xl-8">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Total Tasks
                                </div>
                                <div class="d-flex">
                                    <button class="btn btn-sm btn-primary btn-wave waves-light" data-bs-toggle="modal"
                                        data-bs-target="#create-task"><i
                                            class="ri-add-line fw-medium align-middle me-1"></i> Create Task</button>
                                    <!-- Start::add task modal -->
                                    <div class="modal fade" id="create-task" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h6 class="modal-title">Add Task</h6>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body px-4">
                                                    <div class="row gy-2">
                                                        <div class="col-xl-6">
                                                            <label for="task-name" class="form-label">Task Name</label>
                                                            <input type="text" class="form-control" id="task-name"
                                                                placeholder="Task Name">
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <label for="task-id" class="form-label">Task ID</label>
                                                            <input type="text" class="form-control" id="task-id"
                                                                placeholder="Task ID">
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <label class="form-label">Assigned Date</label>
                                                            <div class="form-group">
                                                                <div class="input-group">
                                                                    <div class="input-group-text text-muted"> <i
                                                                            class="ri-calendar-line"></i> </div>
                                                                    <input type="text" class="form-control"
                                                                        id="assignedDate"
                                                                        placeholder="Choose date and time">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <label class="form-label">Due Date</label>
                                                            <div class="form-group">
                                                                <div class="input-group">
                                                                    <div class="input-group-text text-muted"> <i
                                                                            class="ri-calendar-line"></i> </div>
                                                                    <input type="text" class="form-control" id="dueDate"
                                                                        placeholder="Choose date and time">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <label class="form-label">Status</label>
                                                            <select class="form-control" data-trigger
                                                                name="choices-single-default"
                                                                id="choices-single-default">
                                                                <option value="New">New</option>
                                                                <option value="Completed">Completed</option>
                                                                <option value="Inprogress">Inprogress</option>
                                                                <option value="Pending">Pending</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <label class="form-label">Priority</label>
                                                            <select class="form-control" data-trigger
                                                                name="choices-single-default"
                                                                id="choices-single-default1">
                                                                <option value="High">High</option>
                                                                <option value="Medium">Medium</option>
                                                                <option value="Low">Low</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-xl-12">
                                                            <label class="form-label">Assigned To</label>
                                                            <select class="form-control"
                                                                name="choices-multiple-remove-button1"
                                                                id="choices-multiple-remove-button1" multiple>
                                                                <option value="Choice 1">Angelina May</option>
                                                                <option value="Choice 2">Kiara advain</option>
                                                                <option value="Choice 3">Hercules Jhon</option>
                                                                <option value="Choice 4">Mayor Kim</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-light"
                                                        data-bs-dismiss="modal">Cancel</button>
                                                    <button type="button" class="btn btn-primary">Add Task</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End::add task modal -->
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
                                                <th>
                                                    <input class="form-check-input check-all" type="checkbox"
                                                        id="all-tasks" value="" aria-label="...">
                                                </th>
                                                <th scope="col">Task</th>
                                                <th scope="col">Task ID</th>
                                                <th scope="col">Assigned Date</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Due Date</th>
                                                <th scope="col">Priority</th>
                                                <th scope="col">Assigned To</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="task-list">
                                                <td class="task-checkbox"><input class="form-check-input"
                                                        type="checkbox" value="" aria-label="..."></td>
                                                <td>
                                                    <span class="fw-medium">Design New Landing Page</span>
                                                </td>
                                                <td>
                                                    <span class="fw-medium">SPK - 01</span>
                                                </td>
                                                <td>
                                                    02-06-2023
                                                </td>
                                                <td>
                                                    <span class="fw-medium text-primary">New</span>
                                                </td>
                                                <td>
                                                    10-06-2023
                                                </td>
                                                <td>
                                                    <span class="badge bg-secondary-transparent">Medium</span>
                                                </td>
                                                <td>
                                                    <div class="avatar-list-stacked">
                                                        <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="../assets/images/faces/2.jpg" alt="img">
                                                        </span>
                                                        <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="../assets/images/faces/8.jpg" alt="img">
                                                        </span>
                                                        <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="../assets/images/faces/2.jpg" alt="img">
                                                        </span>
                                                        <a class="avatar avatar-sm bg-primary avatar-rounded text-fixed-white"
                                                            href="javascript:void(0);">
                                                            +2
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="btn btn-primary-light btn-icon btn-sm"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Edit"><i class="ri-edit-line"></i></button>
                                                    <button
                                                        class="btn btn-danger-light btn-icon ms-1 btn-sm task-delete-btn"><i
                                                            class="ri-delete-bin-5-line"></i></button>
                                                </td>
                                            </tr>
                                            <tr class="task-list">
                                                <td class="task-checkbox"><input class="form-check-input"
                                                        type="checkbox" value="" aria-label="..." checked></td>
                                                <td>
                                                    <span class="fw-medium">New Project Buleprint</span>
                                                </td>
                                                <td>
                                                    <span class="fw-medium">SPK - 04</span>
                                                </td>
                                                <td>
                                                    05-06-2023
                                                </td>
                                                <td>
                                                    <span class="fw-medium text-secondary">Inprogress</span>
                                                </td>
                                                <td>
                                                    15-06-2023
                                                </td>
                                                <td>
                                                    <span class="badge bg-danger-transparent">High</span>
                                                </td>
                                                <td>
                                                    <div class="avatar-list-stacked">
                                                        <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="../assets/images/faces/12.jpg" alt="img">
                                                        </span>
                                                        <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="../assets/images/faces/11.jpg" alt="img">
                                                        </span>
                                                        <a class="avatar avatar-sm bg-primary avatar-rounded text-fixed-white"
                                                            href="javascript:void(0);">
                                                            +4
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="btn btn-primary-light btn-icon btn-sm"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Edit"><i class="ri-edit-line"></i></button>
                                                    <button
                                                        class="btn btn-danger-light btn-icon ms-1 btn-sm task-delete-btn"><i
                                                            class="ri-delete-bin-5-line"></i></button>
                                                </td>
                                            </tr>
                                            <tr class="task-list">
                                                <td class="task-checkbox"><input class="form-check-input"
                                                        type="checkbox" value="" aria-label="..."></td>
                                                <td>
                                                    <span class="fw-medium">Server Side Validation</span>
                                                </td>
                                                <td>
                                                    <span class="fw-medium">SPK - 11</span>
                                                </td>
                                                <td>
                                                    12-06-2023
                                                </td>
                                                <td>
                                                    <span class="fw-medium text-warning">Pending</span>
                                                </td>
                                                <td>
                                                    16-06-2023
                                                </td>
                                                <td>
                                                    <span class="badge bg-success-transparent">Low</span>
                                                </td>
                                                <td>
                                                    <div class="avatar-list-stacked">
                                                        <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="../assets/images/faces/5.jpg" alt="img">
                                                        </span>
                                                        <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="../assets/images/faces/9.jpg" alt="img">
                                                        </span>
                                                        <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="../assets/images/faces/13.jpg" alt="img">
                                                        </span>
                                                        <a class="avatar avatar-sm bg-primary avatar-rounded text-fixed-white"
                                                            href="javascript:void(0);">
                                                            +5
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="btn btn-primary-light btn-icon btn-sm"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Edit"><i class="ri-edit-line"></i></button>
                                                    <button
                                                        class="btn btn-danger-light btn-icon ms-1 btn-sm task-delete-btn"><i
                                                            class="ri-delete-bin-5-line"></i></button>
                                                </td>
                                            </tr>
                                            <tr class="task-list">
                                                <td class="task-checkbox"><input class="form-check-input"
                                                        type="checkbox" value="" aria-label="..."></td>
                                                <td>
                                                    <span class="fw-medium">New Plugin Development</span>
                                                </td>
                                                <td>
                                                    <span class="fw-medium">SPK - 24</span>
                                                </td>
                                                <td>
                                                    08-06-2023
                                                </td>
                                                <td>
                                                    <span class="fw-medium text-success">Completed</span>
                                                </td>
                                                <td>
                                                    17-06-2023
                                                </td>
                                                <td>
                                                    <span class="badge bg-success-transparent">Low</span>
                                                </td>
                                                <td>
                                                    <div class="avatar-list-stacked">
                                                        <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="../assets/images/faces/2.jpg" alt="img">
                                                        </span>
                                                        <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="../assets/images/faces/8.jpg" alt="img">
                                                        </span>
                                                        <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="../assets/images/faces/2.jpg" alt="img">
                                                        </span>
                                                        <a class="avatar avatar-sm bg-primary avatar-rounded text-fixed-white"
                                                            href="javascript:void(0);">
                                                            +2
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="btn btn-primary-light btn-icon btn-sm"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Edit"><i class="ri-edit-line"></i></button>
                                                    <button
                                                        class="btn btn-danger-light btn-icon ms-1 btn-sm task-delete-btn"><i
                                                            class="ri-delete-bin-5-line"></i></button>
                                                </td>
                                            </tr>
                                            <tr class="task-list">
                                                <td class="task-checkbox"><input class="form-check-input"
                                                        type="checkbox" value="" aria-label="..." checked></td>
                                                <td>
                                                    <span class="fw-medium">Designing New Authentication Page</span>
                                                </td>
                                                <td>
                                                    <span class="fw-medium">SPK - 16</span>
                                                </td>
                                                <td>
                                                    03-06-2023
                                                </td>
                                                <td>
                                                    <span class="fw-medium text-secondary">Inprogress</span>
                                                </td>
                                                <td>
                                                    08-06-2023
                                                </td>
                                                <td>
                                                    <span class="badge bg-secondary-transparent">Medium</span>
                                                </td>
                                                <td>
                                                    <div class="avatar-list-stacked">
                                                        <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="../assets/images/faces/10.jpg" alt="img">
                                                        </span>
                                                        <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="../assets/images/faces/15.jpg" alt="img">
                                                        </span>
                                                        <a class="avatar avatar-sm bg-primary avatar-rounded text-fixed-white"
                                                            href="javascript:void(0);">
                                                            +3
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="btn btn-primary-light btn-icon btn-sm"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Edit"><i class="ri-edit-line"></i></button>
                                                    <button
                                                        class="btn btn-danger-light btn-icon ms-1 btn-sm task-delete-btn"><i
                                                            class="ri-delete-bin-5-line"></i></button>
                                                </td>
                                            </tr>
                                            <tr class="task-list">
                                                <td class="task-checkbox"><input class="form-check-input"
                                                        type="checkbox" value="" aria-label="..." checked></td>
                                                <td>
                                                    <span class="fw-medium">Documentation For New Template</span>
                                                </td>
                                                <td>
                                                    <span class="fw-medium">SPK - 07</span>
                                                </td>
                                                <td>
                                                    12-06-2023
                                                </td>
                                                <td>
                                                    <span class="fw-medium text-primary">New</span>
                                                </td>
                                                <td>
                                                    25-06-2023
                                                </td>
                                                <td>
                                                    <span class="badge bg-danger-transparent">High</span>
                                                </td>
                                                <td>
                                                    <div class="avatar-list-stacked">
                                                        <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="../assets/images/faces/12.jpg" alt="img">
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="btn btn-primary-light btn-icon btn-sm"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Edit"><i class="ri-edit-line"></i></button>
                                                    <button
                                                        class="btn btn-danger-light btn-icon ms-1 btn-sm task-delete-btn"><i
                                                            class="ri-delete-bin-5-line"></i></button>
                                                </td>
                                            </tr>
                                            <tr class="task-list">
                                                <td class="task-checkbox"><input class="form-check-input"
                                                        type="checkbox" value="" aria-label="..."></td>
                                                <td>
                                                    <span class="fw-medium">Updating Old UI</span>
                                                </td>
                                                <td>
                                                    <span class="fw-medium">SPK - 13</span>
                                                </td>
                                                <td>
                                                    06-06-2023
                                                </td>
                                                <td>
                                                    <span class="fw-medium text-success">Completed</span>
                                                </td>
                                                <td>
                                                    12-06-2023
                                                </td>
                                                <td>
                                                    <span class="badge bg-success-transparent">Low</span>
                                                </td>
                                                <td>
                                                    <div class="avatar-list-stacked">
                                                        <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="../assets/images/faces/11.jpg" alt="img">
                                                        </span>
                                                        <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="../assets/images/faces/1.jpg" alt="img">
                                                        </span>
                                                        <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="../assets/images/faces/10.jpg" alt="img">
                                                        </span>
                                                        <a class="avatar avatar-sm bg-primary avatar-rounded text-fixed-white"
                                                            href="javascript:void(0);">
                                                            +1
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="btn btn-primary-light btn-icon btn-sm"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Edit"><i class="ri-edit-line"></i></button>
                                                    <button
                                                        class="btn btn-danger-light btn-icon ms-1 btn-sm task-delete-btn"><i
                                                            class="ri-delete-bin-5-line"></i></button>
                                                </td>
                                            </tr>
                                            <tr class="task-list">
                                                <td class="task-checkbox"><input class="form-check-input"
                                                        type="checkbox" value="" aria-label="..." checked></td>
                                                <td>
                                                    <span class="fw-medium">Developing New Events In Plugins</span>
                                                </td>
                                                <td>
                                                    <span class="fw-medium">SPK - 20</span>
                                                </td>
                                                <td>
                                                    14-06-2023
                                                </td>
                                                <td>
                                                    <span class="fw-medium text-warning">Pending</span>
                                                </td>
                                                <td>
                                                    19-06-2023
                                                </td>
                                                <td>
                                                    <span class="badge bg-danger-transparent">High</span>
                                                </td>
                                                <td>
                                                    <div class="avatar-list-stacked">
                                                        <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="../assets/images/faces/3.jpg" alt="img">
                                                        </span>
                                                        <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="../assets/images/faces/9.jpg" alt="img">
                                                        </span>
                                                        <a class="avatar avatar-sm bg-primary avatar-rounded text-fixed-white"
                                                            href="javascript:void(0);">
                                                            +2
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="btn btn-primary-light btn-icon btn-sm"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Edit"><i class="ri-edit-line"></i></button>
                                                    <button
                                                        class="btn btn-danger-light btn-icon ms-1 btn-sm task-delete-btn"><i
                                                            class="ri-delete-bin-5-line"></i></button>
                                                </td>
                                            </tr>
                                            <tr class="task-list">
                                                <td class="task-checkbox"><input class="form-check-input"
                                                        type="checkbox" value="" aria-label="..."></td>
                                                <td>
                                                    <span class="fw-medium">Fixing Minor Ui Issues</span>
                                                </td>
                                                <td>
                                                    <span class="fw-medium">SPK - 26</span>
                                                </td>
                                                <td>
                                                    11-06-2023
                                                </td>
                                                <td>
                                                    <span class="fw-medium text-success">Completed</span>
                                                </td>
                                                <td>
                                                    18-06-2023
                                                </td>
                                                <td>
                                                    <span class="badge bg-secondary-transparent">Medium</span>
                                                </td>
                                                <td>
                                                    <div class="avatar-list-stacked">
                                                        <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="../assets/images/faces/5.jpg" alt="img">
                                                        </span>
                                                        <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="../assets/images/faces/14.jpg" alt="img">
                                                        </span>
                                                        <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="../assets/images/faces/12.jpg" alt="img">
                                                        </span>
                                                        <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="../assets/images/faces/3.jpg" alt="img">
                                                        </span>
                                                        <a class="avatar avatar-sm bg-primary avatar-rounded text-fixed-white"
                                                            href="javascript:void(0);">
                                                            +1
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="btn btn-primary-light btn-icon btn-sm"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Edit"><i class="ri-edit-line"></i></button>
                                                    <button
                                                        class="btn btn-danger-light btn-icon ms-1 btn-sm task-delete-btn"><i
                                                            class="ri-delete-bin-5-line"></i></button>
                                                </td>
                                            </tr>
                                            <tr class="task-list">
                                                <td class="task-checkbox"><input class="form-check-input"
                                                        type="checkbox" value="" aria-label="..."></td>
                                                <td>
                                                    <span class="fw-medium">Designing Of New Ecommerce Website</span>
                                                </td>
                                                <td>
                                                    <span class="fw-medium">SPK - 32</span>
                                                </td>
                                                <td>
                                                    03-06-2023
                                                </td>
                                                <td>
                                                    <span class="fw-medium text-secondary">Inprogress</span>
                                                </td>
                                                <td>
                                                    09-06-2023
                                                </td>
                                                <td>
                                                    <span class="badge bg-success-transparent">Low</span>
                                                </td>
                                                <td>
                                                    <div class="avatar-list-stacked">
                                                        <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="../assets/images/faces/12.jpg" alt="img">
                                                        </span>
                                                        <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="../assets/images/faces/6.jpg" alt="img">
                                                        </span>
                                                        <a class="avatar avatar-sm bg-primary avatar-rounded text-fixed-white"
                                                            href="javascript:void(0);">
                                                            +4
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="btn btn-primary-light btn-icon btn-sm"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Edit"><i class="ri-edit-line"></i></button>
                                                    <button
                                                        class="btn btn-danger-light btn-icon ms-1 btn-sm task-delete-btn"><i
                                                            class="ri-delete-bin-5-line"></i></button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer border-top-0">
                                <nav aria-label="Page navigation">
                                    <ul class="pagination mb-0 float-end">
                                        <li class="page-item disabled">
                                            <a class="page-link">Previous</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
                                        <li class="page-item active" aria-current="page">
                                            <a class="page-link" href="javascript:void(0);">2</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="javascript:void(0);">Next</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="row gy-3">
                                    <div class="col-xl-6 pe-0">
                                        <div class="p-3 border border-dashed border-2 rounded text-center">
                                            <div
                                                class="svg-icon-background bg-primary-transparent mb-3 svg-primary mx-auto">
                                                <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1"
                                                    viewBox="0 0 24 24">
                                                    <path
                                                        d="M13,16H7a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2ZM9,10h2a1,1,0,0,0,0-2H9a1,1,0,0,0,0,2Zm12,2H18V3a1,1,0,0,0-.5-.87,1,1,0,0,0-1,0l-3,1.72-3-1.72a1,1,0,0,0-1,0l-3,1.72-3-1.72a1,1,0,0,0-1,0A1,1,0,0,0,2,3V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V13A1,1,0,0,0,21,12ZM5,20a1,1,0,0,1-1-1V4.73L6,5.87a1.08,1.08,0,0,0,1,0l3-1.72,3,1.72a1.08,1.08,0,0,0,1,0l2-1.14V19a3,3,0,0,0,.18,1Zm15-1a1,1,0,0,1-2,0V14h2Zm-7-7H7a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2Z" />
                                                </svg>
                                            </div>
                                            <div class="flex-fill">
                                                <h6 class="mb-2 fs-12">New Tasks</h6>
                                                <div class="pb-0 mt-0">
                                                    <div>
                                                        <h4
                                                            class="fs-18 fw-medium mb-2 d-flex align-items-center justify-content-center">
                                                            <span class="count-up" data-count="42">42</span><span
                                                                class="badge bg-primary fw-normal ms-2 fs-10">
                                                                12,345
                                                            </span> </h4>
                                                        <p class="text-muted fs-11 mb-0 lh-1">
                                                            <span class="text-success me-1 fw-medium">
                                                                <i
                                                                    class="ri-arrow-up-s-line me-1 align-middle"></i>3.25%
                                                            </span>
                                                            <span>this month</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="p-3 border border-dashed border-2 rounded text-center">
                                            <div
                                                class="svg-icon-background bg-success-transparent mb-3 svg-success mx-auto">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                    <path
                                                        d="M11.5,20h-6a1,1,0,0,1-1-1V5a1,1,0,0,1,1-1h5V7a3,3,0,0,0,3,3h3v5a1,1,0,0,0,2,0V9s0,0,0-.06a1.31,1.31,0,0,0-.06-.27l0-.09a1.07,1.07,0,0,0-.19-.28h0l-6-6h0a1.07,1.07,0,0,0-.28-.19.29.29,0,0,0-.1,0A1.1,1.1,0,0,0,11.56,2H5.5a3,3,0,0,0-3,3V19a3,3,0,0,0,3,3h6a1,1,0,0,0,0-2Zm1-14.59L15.09,8H13.5a1,1,0,0,1-1-1ZM7.5,14h6a1,1,0,0,0,0-2h-6a1,1,0,0,0,0,2Zm4,2h-4a1,1,0,0,0,0,2h4a1,1,0,0,0,0-2Zm-4-6h1a1,1,0,0,0,0-2h-1a1,1,0,0,0,0,2Zm13.71,6.29a1,1,0,0,0-1.42,0l-3.29,3.3-1.29-1.3a1,1,0,0,0-1.42,1.42l2,2a1,1,0,0,0,1.42,0l4-4A1,1,0,0,0,21.21,16.29Z" />
                                                </svg>
                                            </div>
                                            <div class="flex-fill">
                                                <h6 class="mb-2 fs-12">Completed Tasks</h6>
                                                <div>
                                                    <h4
                                                        class="fs-18 fw-medium mb-2 d-flex align-items-center justify-content-center">
                                                        <span class="count-up" data-count="320">320</span><span
                                                            class="badge bg-success ms-2 fs-10">
                                                            4,176
                                                        </span> </h4>
                                                    <p class="text-muted fs-11 mb-0 lh-1">
                                                        <span class="text-danger me-1 fw-medium">
                                                            <i class="ri-arrow-down-s-line me-1 align-middle"></i>1.16%
                                                        </span>
                                                        <span>this month</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 pe-0">
                                        <div class="p-3 border border-dashed border-2 rounded text-center">
                                            <div
                                                class="svg-icon-background bg-warning-transparent mb-3 svg-warning mx-auto">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                                    <path
                                                        d="M19,12h-7V5c0-0.6-0.4-1-1-1c-5,0-9,4-9,9s4,9,9,9s9-4,9-9C20,12.4,19.6,12,19,12z M12,19.9c-3.8,0.6-7.4-2.1-7.9-5.9C3.5,10.2,6.2,6.6,10,6.1V13c0,0.6,0.4,1,1,1h6.9C17.5,17.1,15.1,19.5,12,19.9z M15,2c-0.6,0-1,0.4-1,1v6c0,0.6,0.4,1,1,1h6c0.6,0,1-0.4,1-1C22,5.1,18.9,2,15,2z M16,8V4.1C18,4.5,19.5,6,19.9,8H16z" />
                                                </svg>
                                            </div>
                                            <div class="flex-fill">
                                                <h6 class="mb-2 fs-12">Pending Tasks</h6>
                                                <div>
                                                    <h4
                                                        class="fs-18 fw-medium mb-2 d-flex align-items-center justify-content-center">
                                                        <span class="count-up" data-count="81">81</span><span
                                                            class="badge bg-warning ms-2 fs-10">
                                                            7,064
                                                        </span> </h4>
                                                    <p class="text-muted fs-11 mb-0 lh-1">
                                                        <span class="text-success me-1 fw-medium">
                                                            <i class="ri-arrow-up-s-line me-1 align-middle"></i>0.25%
                                                        </span>
                                                        <span>this month</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="p-3 border border-dashed border-2 rounded text-center">
                                            <div class="svg-icon-background bg-light mb-3 svg-dark mx-auto">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                                    <path
                                                        d="M19,12h-7V5c0-0.6-0.4-1-1-1c-5,0-9,4-9,9s4,9,9,9s9-4,9-9C20,12.4,19.6,12,19,12z M12,19.9c-3.8,0.6-7.4-2.1-7.9-5.9C3.5,10.2,6.2,6.6,10,6.1V13c0,0.6,0.4,1,1,1h6.9C17.5,17.1,15.1,19.5,12,19.9z M15,2c-0.6,0-1,0.4-1,1v6c0,0.6,0.4,1,1,1h6c0.6,0,1-0.4,1-1C22,5.1,18.9,2,15,2z M16,8V4.1C18,4.5,19.5,6,19.9,8H16z" />
                                                </svg>
                                            </div>
                                            <div class="flex-fill">
                                                <h6 class="mb-2 fs-12">Inprogress Tasks</h6>
                                                <div>
                                                    <h4
                                                        class="fs-18 fw-medium mb-2 d-flex align-items-center justify-content-center">
                                                        <span class="count-up" data-count="33">33</span>K<span
                                                            class="badge bg-light text-default ms-2 fs-10">
                                                            1,105
                                                        </span> </h4>
                                                    <p class="text-muted fs-11 mb-0 lh-1">
                                                        <span class="text-success me-1 fw-semibFold">
                                                            <i class="ri-arrow-down-s-line me-1 align-middle"></i>0.46%
                                                        </span>
                                                        <span>this month</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <p class="fs-15 fw-medium">Tasks Statistics <span class="text-muted fw-normal">(Last
                                            6 months) :</span></p>
                                    <div id="task-list-stats"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End::row-1 -->

            </div>
        </div>
        <!-- End::app-content -->


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
    <script src="../assets/js/task-list.js"></script>

    <!-- Custom JS -->
    <script src="../assets/js/custom.js"></script>

</body>

</html>