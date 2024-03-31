<?php
$pageTitle = "Task Details";
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
                        <h1 class="page-title fw-medium fs-18 mb-2">Task Details</h1>
                        <div class="">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Task</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Task Details</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="btn-list">
                        <button type="button" class="btn btn-primary-light btn-wave me-2">
                            <i class="bx bx-crown align-middle"></i> Plan Upgrade
                        </button>
                        <button type="button" class="btn btn-secondary-light btn-wave me-0">
                            <i class="ri-upload-cloud-line align-middle"></i> Export Report
                        </button>
                    </div>
                </div>
                <!-- Page Header Close -->

                <!-- Start::row-1 -->
                <div class="row">
                    <div class="col-xl-9">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">Task Summary</div>
                                <div class="btn-list">
                                    <button type="button" class="btn btn-success btn-sm btn-wave me-0"><i
                                            class="ri-edit-line me-1 align-middle"></i>Edit Task</button>
                                </div>
                            </div>
                            <div class="card-body">
                                <h5 class="fw-medium mb-4 task-title">
                                    Launch Marketing Campaign
                                </h5>
                                <div class="fs-15 fw-medium mb-2">Task Description :</div>
                                <p class="text-muted task-description">The current website design needs a refresh to
                                    improve user experience and enhance visual appeal. The goal is to create a modern
                                    and responsive design that aligns with the latest web design trends. The updated
                                    design should ensure seamless navigation, easy readability, and a cohesive visual
                                    identity.</p>
                                <div class="fs-15 fw-medium mb-2">Key tasks :</div>
                                <div>
                                    <ul class="task-details-key-tasks mb-0">
                                        <li>Conduct market research to identify target audience and competition.</li>
                                        <li>Develop a comprehensive marketing campaign strategy.</li>
                                        <li>Create engaging and relevant content for the campaign.</li>
                                        <li>Execute the marketing campaign.</li>
                                        <li>Monitor the campaign's performance and gather data for analysis.</li>
                                        <li>Make adjustments based on campaign performance analysis.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="d-flex align-items-center justify-content-between gap-2 flex-wrap">
                                    <div>
                                        <span class="d-block text-muted fs-12">Assigned By</span>
                                        <div class="d-flex align-items-center">
                                            <div class="me-2 lh-1">
                                                <span class="avatar avatar-xs avatar-rounded">
                                                    <img src="../assets/images/faces/15.jpg" alt="">
                                                </span>
                                            </div>
                                            <span class="d-block fs-14 fw-medium">J.T.Stark</span>
                                        </div>
                                    </div>
                                    <div>
                                        <span class="d-block text-muted fs-12">Assigned Date</span>
                                        <span class="d-block fs-14 fw-medium">24,Dec 2023</span>
                                    </div>
                                    <div>
                                        <span class="d-block text-muted fs-12">Due Date</span>
                                        <span class="d-block fs-14 fw-medium">05,Jan 2024</span>
                                    </div>
                                    <div class="task-details-progress">
                                        <span class="d-block text-muted fs-12 mb-1">Progress</span>
                                        <div class="d-flex align-items-center">
                                            <div class="progress progress-xs progress-animate flex-fill me-2"
                                                role="progressbar" aria-valuenow="70" aria-valuemin="0"
                                                aria-valuemax="100">
                                                <div class="progress-bar bg-primary" style="width: 70%"></div>
                                            </div>
                                            <div class="text-muted fs-11">70%</div>
                                        </div>
                                    </div>
                                    <div>
                                        <span class="d-block text-muted fs-12">Efforts</span>
                                        <span class="d-block fs-14 fw-medium">45H : 35M : 45S</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">Task Discussions</div>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled profile-timeline">
                                    <li>
                                        <div>
                                            <span
                                                class="avatar avatar-sm bg-primary-transparent avatar-rounded profile-timeline-avatar">
                                                E
                                            </span>
                                            <p class="mb-2">
                                                <span class="fw-medium">You</span> Commented on <span
                                                    class="fw-medium">Work Process</span> in this task <a
                                                    class="text-secondary" href="javascript:void(0);"><u>#New
                                                        Task</u></a>.<span class="float-end fs-11 text-muted">24,Dec
                                                    2023 - 14:34</span>
                                            </p>
                                            <p class="text-muted mb-0">
                                                "Sure. We've completed the initial wireframes and received feedback from
                                                the client. They are happy with the direction. We're now moving on to
                                                high-fidelity design mockups."
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <span class="avatar avatar-sm avatar-rounded profile-timeline-avatar">
                                                <img src="../assets/images/faces/11.jpg" alt="">
                                            </span>
                                            <p class="text-muted mb-2">
                                                <span class="text-default">
                                                    <span class="fw-medium">Christopher</span> reacted to the task
                                                    &#128077;
                                                </span>.
                                                <span class="float-end fs-11 text-muted">18,Dec 2023 - 12:16</span>
                                            </p>
                                            <p class="text-muted mb-0">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae,
                                                repellendus rem rerum excepturi aperiam ipsam temporibus inventore ullam
                                                tempora eligendi libero sequi dignissimos cumque, et a sint tenetur
                                                consequatur omnis!
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <span class="avatar avatar-sm avatar-rounded profile-timeline-avatar">
                                                <img src="../assets/images/faces/4.jpg" alt="">
                                            </span>
                                            <p class="text-muted mb-2">
                                                <span class="text-default">
                                                    <span class="fw-medium">Isabella</span> shared a document with
                                                    <span class="fw-medium">you</span>
                                                </span>.
                                                <span class="float-end fs-11 text-muted">21,Dec 2023 - 15:32</span>
                                            </p>
                                            <p class="profile-activity-media mb-0">
                                                <a aria-label="anchor" href="javascript:void(0);">
                                                    <img src="../assets/images/media/file-manager/3.png" alt="">
                                                </a>
                                                <span class="fs-11 text-muted">432.87KB</span>
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <span
                                                class="avatar avatar-sm bg-success-transparent avatar-rounded profile-timeline-avatar">
                                                P
                                            </span>
                                            <p class="text-muted mb-2">
                                                <span class="text-default">
                                                    <span class="fw-medium">You</span> shared a post with 4 people
                                                    <span class="fw-medium">Amelia,Harper,Evelyn,Richard </span>
                                                </span>.
                                                <span class="float-end fs-11 text-muted">28,Dec 2023 - 18:46</span>
                                            </p>
                                            <p class="profile-activity-media mb-2">
                                                <a aria-label="anchor" href="javascript:void(0);">
                                                    <img src="../assets/images/media/media-18.jpg" alt="">
                                                </a>
                                            </p>
                                            <div>
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
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="../assets/images/faces/10.jpg" alt="img">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <span class="avatar avatar-sm avatar-rounded profile-timeline-avatar">
                                                <img src="../assets/images/media/media-39.jpg" alt="">
                                            </span>
                                            <p class="mb-1">
                                                <span class="fw-medium">Json</span> Commented on Task post <a
                                                    class="text-secondary" href="javascript:void(0);"><u>#UI
                                                        Technologies</u></a>.<span
                                                    class="float-end fs-11 text-muted">24,Dec 2023 - 14:34</span>
                                            </p>
                                            <p class="text-muted">Technology id developing rapidly keep up your work
                                                &#128076;</p>
                                            <p class="profile-activity-media mb-0">
                                                <a aria-label="anchor" href="javascript:void(0);">
                                                    <img src="../assets/images/media/media-26.jpg" alt="">
                                                </a>
                                                <a aria-label="anchor" href="javascript:void(0);">
                                                    <img src="../assets/images/media/media-29.jpg" alt="">
                                                </a>
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-footer">
                                <div class="d-sm-flex align-items-center lh-1">
                                    <div class="me-sm-3 mb-2 mb-sm-0">
                                        <span class="avatar avatar-md avatar-rounded">
                                            <img src="../assets/images/faces/9.jpg" alt="">
                                        </span>
                                    </div>
                                    <div class="flex-fill me-sm-2">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Post Anything"
                                                aria-label="Recipient's username with two button addons">
                                            <button type="button" aria-label="button"
                                                class="btn btn-outline-light border btn-wave"><i
                                                    class="bi bi-emoji-smile"></i></button>
                                            <button type="button" aria-label="button"
                                                class="btn btn-outline-light border btn-wave"><i
                                                    class="bi bi-paperclip"></i></button>
                                            <button type="button" aria-label="button"
                                                class="btn btn-outline-light border btn-wave"><i
                                                    class="bi bi-camera"></i></button>
                                            <button class="btn btn-primary btn-wave" type="button">Post</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Additional Details
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table text-nowrap">
                                        <tbody>
                                            <tr>
                                                <td><span class="fw-medium">Task ID :</span></td>
                                                <td>SPK - 123</td>
                                            </tr>
                                            <tr>
                                                <td><span class="fw-medium">Task Tags :</span></td>
                                                <td>
                                                    <span class="badge bg-light border text-default">Web Design</span>
                                                    <span class="badge bg-light border text-default">Responsive
                                                        Design</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><span class="fw-medium">Project Name :</span></td>
                                                <td>
                                                    Evergreen Garden Redesign
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><span class="fw-medium">Project Status :</span></td>
                                                <td>
                                                    <span class="fw-medium text-secondary">Inprogress</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><span class="fw-medium">Project Priority :</span></td>
                                                <td>
                                                    <span class="badge bg-danger-transparent">High</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><span class="fw-medium">Assigned To :</span></td>
                                                <td>
                                                    <div class="avatar-list-stacked">
                                                        <span class="avatar avatar-sm avatar-rounded"
                                                            data-bs-toggle="tooltip"
                                                            data-bs-custom-class="tooltip-primary"
                                                            data-bs-original-title="Simon">
                                                            <img src="../assets/images/faces/2.jpg" alt="img">
                                                        </span>
                                                        <span class="avatar avatar-sm avatar-rounded"
                                                            data-bs-toggle="tooltip"
                                                            data-bs-custom-class="tooltip-primary"
                                                            data-bs-original-title="Sasha">
                                                            <img src="../assets/images/faces/8.jpg" alt="img">
                                                        </span>
                                                        <span class="avatar avatar-sm avatar-rounded"
                                                            data-bs-toggle="tooltip"
                                                            data-bs-custom-class="tooltip-primary"
                                                            data-bs-original-title="Anagha">
                                                            <img src="../assets/images/faces/2.jpg" alt="img">
                                                        </span>
                                                        <span class="avatar avatar-sm avatar-rounded"
                                                            data-bs-toggle="tooltip"
                                                            data-bs-custom-class="tooltip-primary"
                                                            data-bs-original-title="Hishen">
                                                            <img src="../assets/images/faces/10.jpg" alt="img">
                                                        </span>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card custom-card overflow-hidden">
                            <div class="card-header justify-content-between">
                                <div class="card-title">Sub Tasks</div>
                                <div>
                                    <button type="button" class="btn btn-secondary-light btn-sm btn-wave"><i
                                            class="ri-add-line me-1 align-middle"></i>Sub Task</button>
                                </div>
                            </div>
                            <div class="card-body">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <div class="d-flex align-items-center">
                                            <div class="me-2"><input class="form-check-input form-checked-success"
                                                    type="checkbox" value="" id="successChecked1" checked></div>
                                            <div class="fw-medium">Create a list of industry publications.</div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex align-items-center">
                                            <div class="me-2"><input class="form-check-input form-checked-success"
                                                    type="checkbox" value="" id="successChecked2"></div>
                                            <div class="fw-medium">Define campaign goals and objectives.</div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex align-items-center">
                                            <div class="me-2"><input class="form-check-input form-checked-success"
                                                    type="checkbox" value="" id="successChecked3"></div>
                                            <div class="fw-medium">Write blog posts and articles.</div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex align-items-center">
                                            <div class="me-2"><input class="form-check-input form-checked-success"
                                                    type="checkbox" value="" id="successChecked4"></div>
                                            <div class="fw-medium">Schedule social media posts.</div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex align-items-center">
                                            <div class="me-2"><input class="form-check-input form-checked-success"
                                                    type="checkbox" value="" id="successChecked5" checked></div>
                                            <div class="fw-medium">Track website traffic and conversions.</div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex align-items-center">
                                            <div class="me-2"><input class="form-check-input form-checked-success"
                                                    type="checkbox" value="" id="successChecked6" checked></div>
                                            <div class="fw-medium">Modify content as needed.</div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex align-items-center">
                                            <div class="me-2"><input class="form-check-input form-checked-success"
                                                    type="checkbox" value="" id="successChecked77" checked></div>
                                            <div class="fw-medium">Implement customer feedback.</div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex align-items-center">
                                            <div class="me-2"><input class="form-check-input form-checked-success"
                                                    type="checkbox" value="" id="successChecked7"></div>
                                            <div class="fw-medium">Collaborate with influencers.</div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card custom-card overflow-hidden">
                            <div class="card-header">
                                <div class="card-title">
                                    Attachments
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <div class="d-flex align-items-center flex-wrap gap-2">
                                            <div class="lh-1">
                                                <span class="avatar avatar-rounded p-2 bg-light">
                                                    <img src="../assets/images/media/file-manager/1.png" alt="">
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <a href="javascript:void(0);"><span class="d-block fw-medium">Full
                                                        Project</span></a>
                                                <span class="d-block text-muted fs-12 fw-normal">0.45MB</span>
                                            </div>
                                            <div class="btn-list">
                                                <button type="button" aria-label="button"
                                                    class="btn btn-sm btn-icon btn-info-light btn-wave"><i
                                                        class="ri-edit-line"></i></button>
                                                <button type="button" aria-label="button"
                                                    class="btn btn-sm btn-icon btn-danger-light btn-wave"><i
                                                        class="ri-delete-bin-line"></i></button>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex align-items-center flex-wrap gap-2">
                                            <div class="lh-1">
                                                <span class="avatar avatar-rounded bg-light">
                                                    <img src="../assets/images/media/file-manager/3.png" alt="">
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <a href="javascript:void(0);"><span
                                                        class="d-block fw-medium">assets.zip</span></a>
                                                <span class="d-block text-muted fs-12 fw-normal">0.99MB</span>
                                            </div>
                                            <div class="btn-list">
                                                <button aria-label="button" type="button"
                                                    class="btn btn-sm btn-icon btn-info-light btn-wave"><i
                                                        class="ri-edit-line"></i></button>
                                                <button aria-label="button" type="button"
                                                    class="btn btn-sm btn-icon btn-danger-light btn-wave"><i
                                                        class="ri-delete-bin-line"></i></button>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex align-items-center flex-wrap gap-2">
                                            <div class="lh-1">
                                                <span class="avatar avatar-rounded p-2 bg-light">
                                                    <img src="../assets/images/media/file-manager/1.png" alt="">
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <a href="javascript:void(0);"><span
                                                        class="d-block fw-medium">image-1.png</span></a>
                                                <span class="d-block text-muted fs-12 fw-normal">245KB</span>
                                            </div>
                                            <div class="btn-list">
                                                <button aria-label="button" type="button"
                                                    class="btn btn-sm btn-icon btn-info-light btn-wave"><i
                                                        class="ri-edit-line"></i></button>
                                                <button aria-label="button" type="button"
                                                    class="btn btn-sm btn-icon btn-danger-light btn-wave"><i
                                                        class="ri-delete-bin-line"></i></button>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex align-items-center flex-wrap gap-2">
                                            <div class="lh-1">
                                                <span class="avatar avatar-rounded bg-light">
                                                    <img src="../assets/images/media/file-manager/3.png" alt="">
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <a href="javascript:void(0);"><span
                                                        class="d-block fw-medium">documentation.zip</span></a>
                                                <span class="d-block text-muted fs-12 fw-normal">2MB</span>
                                            </div>
                                            <div class="btn-list">
                                                <button type="button" aria-label="button"
                                                    class="btn btn-sm btn-icon btn-info-light btn-wave"><i
                                                        class="ri-edit-line"></i></button>
                                                <button type="button" aria-label="button"
                                                    class="btn btn-sm btn-icon btn-danger-light btn-wave"><i
                                                        class="ri-delete-bin-line"></i></button>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex align-items-center flex-wrap gap-2">
                                            <div class="lh-1">
                                                <span class="avatar avatar-rounded bg-light">
                                                    <img src="../assets/images/media/file-manager/3.png" alt="">
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <a href="javascript:void(0);"><span
                                                        class="d-block fw-medium">landing.zip</span></a>
                                                <span class="d-block text-muted fs-12 fw-normal">3.46MB</span>
                                            </div>
                                            <div class="btn-list">
                                                <button aria-label="button" type="button"
                                                    class="btn btn-sm btn-icon btn-info-light btn-wave"><i
                                                        class="ri-edit-line"></i></button>
                                                <button aria-label="button" type="button"
                                                    class="btn btn-sm btn-icon btn-danger-light btn-wave"><i
                                                        class="ri-delete-bin-line"></i></button>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
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

    <!-- Custom JS -->
    <script src="../assets/js/custom.js"></script>

</body>

</html>