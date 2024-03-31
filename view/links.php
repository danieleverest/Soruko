<?php
$pageTitle = "Links";
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
    <?php include '../components/externalcss.php'; ?>

    <!-- Prism CSS -->
    <link rel="stylesheet" href="../assets/libs/prismjs/themes/prism-coy.min.css">
</head>

<body>
    <!-- Start Switcher -->
    <?php include '../components/switcher.php'; ?>
    <!-- End Switcher -->


    <!-- Loader -->
    <?php include '../components/loader.php'; ?>
    <!-- Loader -->

    <div class="page">
        <?php include '../components/header.php'; ?>
        <?php include '../components/aside.php'; ?>

        <!-- Start::app-content -->
        <div class="main-content app-content">
            <div class="container-fluid">

                <!-- Page Header -->
                <div
                    class="my-4 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
                    <div class="col-xl-12">
                        <div class="card custom-card mt-4">
                            <div class="card-body">
                                <div class="contact-header">
                                    <div class="d-sm-flex d-block align-items-center justify-content-between">
                                        <div class="h5 fw-medium mb-0">Links</div>
                                        <div class="d-flex mt-sm-0 mt-2 align-items-center">
                                            <div class="input-group">
                                                <input type="text" class="form-control bg-light border-0"
                                                    placeholder="Search Contact"
                                                    aria-describedby="search-contact-member">
                                                <button class="btn btn-light" type="button"
                                                    id="search-contact-member"><i
                                                        class="ri-search-line text-muted"></i></button>
                                            </div>
                                            <div class="dropdown ms-2">
                                                <button class="btn btn-icon btn-primary-light btn-wave" type="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ti ti-dots-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Delete
                                                            All</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Copy
                                                            All</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Move
                                                            To</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <button class="btn btn-icon btn-secondary-light ms-2"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                data-bs-title="Add Links"><i class="ri-add-line"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div>
                        <button class="btn btn-primary-light btn-wave me-2 waves-effect waves-light">
                            <i class="bx bx-crown align-middle"></i> Plan Upgrade
                        </button>
                        <button class="btn btn-secondary-light btn-wave me-0">
                            <i class="ri-upload-cloud-line align-middle"></i> Export Report
                        </button>
                    </div> -->
                </div>
                <!-- Page Header Close -->

                <!-- Start::row-1 -->
                <div class="row">
                    <div class="col-xl-9">

                        <div class="card-body">
                            <div class="row">
                                <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-6">
                                    <div class="card custom-card text-center">
                                        <div class="card-body p-4">
                                            <div class="avatar avatar-xl avatar-rounded mb-3">
                                                <img src="../assets/images/faces/4.jpg" alt="" class="img-thumbnail">
                                            </div>
                                            <div class="mb-3">
                                                <h6 class="mb-1 fw-medium">
                                                    Emily
                                                </h6>
                                                <p class="mb-1 text-muted contact-mail text-truncate">
                                                    emiley2134@gmail.com</p>
                                                <p class="fw-medium fs-11 mb-0 text-primary">
                                                    +1(555) 354 2345
                                                </p>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-center gap-2">
                                                <button type="button" class="btn btn-sm btn-outline-light border">
                                                    View Contact
                                                </button>
                                                <div class="dropdown">
                                                    <button
                                                        class="btn btn-sm btn-icon btn-outline-light btn-wave border"
                                                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-2-fill"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video
                                                                Call</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri ri-heart-3-line me-2 align-middle d-inline-block"></i>Favourite</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <button aria-label="button"
                                                    class="btn btn-sm btn-icon btn-outline-light border" type="button">
                                                    <i class="ri-heart-3-fill text-danger"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-6">
                                    <div class="card custom-card text-center">
                                        <div class="card-body p-4">
                                            <div class="avatar avatar-xl avatar-rounded mb-3">
                                                <img src="../assets/images/faces/15.jpg" alt="" class="img-thumbnail">
                                            </div>
                                            <div class="mb-3">
                                                <h6 class="mb-1 fw-medium">
                                                    William
                                                </h6>
                                                <p class="mb-1 text-muted contact-mail text-truncate">
                                                    William111@gmail.com</p>
                                                <p class="fw-medium fs-11 mb-0 text-primary">
                                                    +1(555) 873 8923
                                                </p>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-center gap-2">
                                                <button type="button" class="btn btn-sm btn-outline-light border">
                                                    View Contact
                                                </button>
                                                <div class="dropdown">
                                                    <button
                                                        class="btn btn-sm btn-icon btn-outline-light btn-wave border"
                                                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-2-fill"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video
                                                                Call</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri ri-heart-3-line me-2 align-middle d-inline-block"></i>Favourite</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <button aria-label="button"
                                                    class="btn btn-sm btn-icon btn-outline-light border" type="button">
                                                    <i class="ri-heart-3-fill text-danger"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-6">
                                    <div class="card custom-card text-center">
                                        <div class="card-body p-4">
                                            <div class="avatar avatar-xl avatar-rounded mb-3">
                                                <img src="../assets/images/faces/2.jpg" alt="" class="img-thumbnail">
                                            </div>
                                            <div class="mb-3">
                                                <h6 class="mb-1 fw-medium">
                                                    Charlotte
                                                </h6>
                                                <p class="mb-1 text-muted contact-mail text-truncate">
                                                    Charlotte@gmail.com</p>
                                                <p class="fw-medium fs-11 mb-0 text-primary">
                                                    +1(555) 347 0923
                                                </p>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-center gap-2">
                                                <button type="button" class="btn btn-sm btn-outline-light border">
                                                    View Contact
                                                </button>
                                                <div class="dropdown">
                                                    <button
                                                        class="btn btn-sm btn-icon btn-outline-light btn-wave border"
                                                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-2-fill"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video
                                                                Call</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri ri-heart-3-line me-2 align-middle d-inline-block"></i>Favourite</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <button aria-label="button"
                                                    class="btn btn-sm btn-icon btn-outline-light border" type="button">
                                                    <i class="ri-heart-3-fill text-danger"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-6">
                                    <div class="card custom-card text-center">
                                        <div class="card-body p-4">
                                            <div class="avatar avatar-xl avatar-rounded mb-3">
                                                <img src="../assets/images/faces/13.jpg" alt="" class="img-thumbnail">
                                            </div>
                                            <div class="mb-3">
                                                <h6 class="mb-1 fw-medium">
                                                    Christopher
                                                </h6>
                                                <p class="mb-1 text-muted contact-mail text-truncate">
                                                    Christopher@gmail.com</p>
                                                <p class="fw-medium fs-11 mb-0 text-primary">
                                                    +1(555) 674 7824
                                                </p>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-center gap-2">
                                                <button type="button" class="btn btn-sm btn-outline-light border">
                                                    View Contact
                                                </button>
                                                <div class="dropdown">
                                                    <button
                                                        class="btn btn-sm btn-icon btn-outline-light btn-wave border"
                                                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-2-fill"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video
                                                                Call</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri ri-heart-3-line me-2 align-middle d-inline-block"></i>Favourite</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <button aria-label="button"
                                                    class="btn btn-sm btn-icon btn-outline-light border" type="button">
                                                    <i class="ri-heart-3-fill text-danger"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-6">
                                    <div class="card custom-card text-center">
                                        <div class="card-body p-4">
                                            <div class="avatar avatar-xl avatar-rounded mb-3">
                                                <img src="../assets/images/faces/9.jpg" alt="" class="img-thumbnail">
                                            </div>
                                            <div class="mb-3">
                                                <h6 class="mb-1 fw-medium">
                                                    Steven
                                                </h6>
                                                <p class="mb-1 text-muted contact-mail text-truncate">
                                                    Steven235@gmail.com</p>
                                                <p class="fw-medium fs-11 mb-0 text-primary">
                                                    +1(555) 985 2893
                                                </p>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-center gap-2">
                                                <button type="button" class="btn btn-sm btn-outline-light border">
                                                    View Contact
                                                </button>
                                                <div class="dropdown">
                                                    <button
                                                        class="btn btn-sm btn-icon btn-outline-light btn-wave border"
                                                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-2-fill"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video
                                                                Call</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri ri-heart-3-line me-2 align-middle d-inline-block"></i>Favourite</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <button aria-label="button"
                                                    class="btn btn-sm btn-icon btn-outline-light border" type="button">
                                                    <i class="ri-heart-3-fill text-danger"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-6">
                                    <div class="card custom-card text-center">
                                        <div class="card-body p-4">
                                            <div class="avatar avatar-xl avatar-rounded mb-3">
                                                <img src="../assets/images/faces/5.jpg" alt="" class="img-thumbnail">
                                            </div>
                                            <div class="mb-3">
                                                <h6 class="mb-1 fw-medium">
                                                    Isabella
                                                </h6>
                                                <p class="mb-1 text-muted contact-mail text-truncate">
                                                    Isabella456@gmail.com</p>
                                                <p class="fw-medium fs-11 mb-0 text-primary">
                                                    +1(555) 675 4680
                                                </p>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-center gap-2">
                                                <button type="button" class="btn btn-sm btn-outline-light border">
                                                    View Contact
                                                </button>
                                                <div class="dropdown">
                                                    <button
                                                        class="btn btn-sm btn-icon btn-outline-light btn-wave border"
                                                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-2-fill"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video
                                                                Call</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri ri-heart-3-line me-2 align-middle d-inline-block"></i>Favourite</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <button aria-label="button"
                                                    class="btn btn-sm btn-icon btn-outline-light border" type="button">
                                                    <i class="ri-heart-3-fill text-danger"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-6">
                                    <div class="card custom-card text-center">
                                        <div class="card-body p-4">
                                            <div class="avatar avatar-xl avatar-rounded mb-3">
                                                <img src="../assets/images/faces/10.jpg" alt="" class="img-thumbnail">
                                            </div>
                                            <div class="mb-3">
                                                <h6 class="mb-1 fw-medium">
                                                    Thomas
                                                </h6>
                                                <p class="mb-1 text-muted contact-mail text-truncate">
                                                    Thomas00@gmail.com</p>
                                                <p class="fw-medium fs-11 mb-0 text-primary">
                                                    +1(555) 765 8937
                                                </p>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-center gap-2">
                                                <button type="button" class="btn btn-sm btn-outline-light border">
                                                    View Contact
                                                </button>
                                                <div class="dropdown">
                                                    <button
                                                        class="btn btn-sm btn-icon btn-outline-light btn-wave border"
                                                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-2-fill"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video
                                                                Call</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri ri-heart-3-line me-2 align-middle d-inline-block"></i>Favourite</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <button aria-label="button"
                                                    class="btn btn-sm btn-icon btn-outline-light border" type="button">
                                                    <i class="ri-heart-3-fill text-danger"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-6">
                                    <div class="card custom-card text-center">
                                        <div class="card-body p-4">
                                            <div class="avatar avatar-xl avatar-rounded mb-3">
                                                <img src="../assets/images/faces/21.jpg" alt="" class="img-thumbnail">
                                            </div>
                                            <div class="mb-3">
                                                <h6 class="mb-1 fw-medium">
                                                    Amelia
                                                </h6>
                                                <p class="mb-1 text-muted contact-mail text-truncate">
                                                    Amelia@gmail.com</p>
                                                <p class="fw-medium fs-11 mb-0 text-primary">
                                                    +1(555) 890 5687
                                                </p>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-center gap-2">
                                                <button type="button" class="btn btn-sm btn-outline-light border">
                                                    View Contact
                                                </button>
                                                <div class="dropdown">
                                                    <button
                                                        class="btn btn-sm btn-icon btn-outline-light btn-wave border"
                                                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-2-fill"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video
                                                                Call</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri ri-heart-3-line me-2 align-middle d-inline-block"></i>Favourite</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <button aria-label="button"
                                                    class="btn btn-sm btn-icon btn-outline-light border" type="button">
                                                    <i class="ri-heart-3-fill text-danger"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-6">
                                    <div class="card custom-card text-center">
                                        <div class="card-body p-4">
                                            <div class="avatar avatar-xl avatar-rounded mb-3">
                                                <img src="../assets/images/faces/11.jpg" alt="" class="img-thumbnail">
                                            </div>
                                            <div class="mb-3">
                                                <h6 class="mb-1 fw-medium">
                                                    Richard
                                                </h6>
                                                <p class="mb-1 text-muted contact-mail text-truncate">
                                                    Richard@gmail.com</p>
                                                <p class="fw-medium fs-11 mb-0 text-primary">
                                                    +1(555) 972 9883
                                                </p>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-center gap-2">
                                                <button type="button" class="btn btn-sm btn-outline-light border">
                                                    View Contact
                                                </button>
                                                <div class="dropdown">
                                                    <button
                                                        class="btn btn-sm btn-icon btn-outline-light btn-wave border"
                                                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-2-fill"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video
                                                                Call</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri ri-heart-3-line me-2 align-middle d-inline-block"></i>Favourite</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <button aria-label="button"
                                                    class="btn btn-sm btn-icon btn-outline-light border" type="button">
                                                    <i class="ri-heart-3-fill text-danger"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-6">
                                    <div class="card custom-card text-center">
                                        <div class="card-body p-4">
                                            <div class="avatar avatar-xl avatar-rounded mb-3">
                                                <img src="../assets/images/media/media-63.jpg" alt=""
                                                    class="img-thumbnail">
                                            </div>
                                            <div class="mb-3">
                                                <h6 class="mb-1 fw-medium">
                                                    Anthony
                                                </h6>
                                                <p class="mb-1 text-muted contact-mail text-truncate">
                                                    Anthony65@gmail.com</p>
                                                <p class="fw-medium fs-11 mb-0 text-primary">
                                                    +1(555) 693 7836
                                                </p>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-center gap-2">
                                                <button type="button" class="btn btn-sm btn-outline-light border">
                                                    View Contact
                                                </button>
                                                <div class="dropdown">
                                                    <button
                                                        class="btn btn-sm btn-icon btn-outline-light btn-wave border"
                                                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-2-fill"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video
                                                                Call</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri ri-heart-3-line me-2 align-middle d-inline-block"></i>Favourite</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <button aria-label="button"
                                                    class="btn btn-sm btn-icon btn-outline-light border" type="button">
                                                    <i class="ri-heart-3-fill text-danger"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-6">
                                    <div class="card custom-card text-center">
                                        <div class="card-body p-4">
                                            <div class="avatar avatar-xl avatar-rounded bg-primary-transparent mb-3">
                                                EV
                                            </div>
                                            <div class="mb-3">
                                                <h6 class="mb-1 fw-medium">
                                                    Evelyn
                                                </h6>
                                                <p class="mb-1 text-muted contact-mail text-truncate">
                                                    Evelyn@gmail.com</p>
                                                <p class="fw-medium fs-11 mb-0 text-primary">
                                                    +1(555) 238 2342
                                                </p>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-center gap-2">
                                                <button type="button" class="btn btn-sm btn-outline-light border">
                                                    View Contact
                                                </button>
                                                <div class="dropdown">
                                                    <button
                                                        class="btn btn-sm btn-icon btn-outline-light btn-wave border"
                                                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-2-fill"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video
                                                                Call</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri ri-heart-3-line me-2 align-middle d-inline-block"></i>Favourite</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <button aria-label="button"
                                                    class="btn btn-sm btn-icon btn-outline-light border" type="button">
                                                    <i class="ri-heart-3-fill text-danger"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-6">
                                    <div class="card custom-card text-center">
                                        <div class="card-body p-4">
                                            <div class="avatar avatar-xl avatar-rounded mb-3">
                                                <img src="../assets/images/faces/12.jpg" alt="" class="img-thumbnail">
                                            </div>
                                            <div class="mb-3">
                                                <h6 class="mb-1 fw-medium">
                                                    Benjamin
                                                </h6>
                                                <p class="mb-1 text-muted contact-mail text-truncate">
                                                    Benjamin96@gmail.com</p>
                                                <p class="fw-medium fs-11 mb-0 text-primary">
                                                    +1(555) 875 6789
                                                </p>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-center gap-2">
                                                <button type="button" class="btn btn-sm btn-outline-light border">
                                                    View Contact
                                                </button>
                                                <div class="dropdown">
                                                    <button
                                                        class="btn btn-sm btn-icon btn-outline-light btn-wave border"
                                                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-2-fill"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video
                                                                Call</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri ri-heart-3-line me-2 align-middle d-inline-block"></i>Favourite</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <button aria-label="button"
                                                    class="btn btn-sm btn-icon btn-outline-light border" type="button">
                                                    <i class="ri-heart-3-fill text-danger"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-6">
                                    <div class="card custom-card text-center">
                                        <div class="card-body p-4">
                                            <div class="avatar avatar-xl avatar-rounded mb-3">
                                                <img src="../assets/images/faces/1.jpg" alt="" class="img-thumbnail">
                                            </div>
                                            <div class="mb-3">
                                                <h6 class="mb-1 fw-medium">
                                                    Victoria
                                                </h6>
                                                <p class="mb-1 text-muted contact-mail text-truncate">
                                                    Victoria@gmail.com</p>
                                                <p class="fw-medium fs-11 mb-0 text-primary">
                                                    +1(555) 568 9234
                                                </p>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-center gap-2">
                                                <button type="button" class="btn btn-sm btn-outline-light border">
                                                    View Contact
                                                </button>
                                                <div class="dropdown">
                                                    <button
                                                        class="btn btn-sm btn-icon btn-outline-light btn-wave border"
                                                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-2-fill"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video
                                                                Call</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri ri-heart-3-line me-2 align-middle d-inline-block"></i>Favourite</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <button aria-label="button"
                                                    class="btn btn-sm btn-icon btn-outline-light border" type="button">
                                                    <i class="ri-heart-3-fill text-danger"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-6">
                                    <div class="card custom-card text-center">
                                        <div class="card-body p-4">
                                            <div class="avatar avatar-xl avatar-rounded mb-3">
                                                <img src="../assets/images/media/media-13.jpg" alt=""
                                                    class="img-thumbnail">
                                            </div>
                                            <div class="mb-3">
                                                <h6 class="mb-1 fw-medium">
                                                    Tom Holland
                                                </h6>
                                                <p class="mb-1 text-muted contact-mail text-truncate">
                                                    tomholland98@gmail.com</p>
                                                <p class="fw-medium fs-11 mb-0 text-primary">
                                                    +1(555) 892 4334
                                                </p>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-center gap-2">
                                                <button type="button" class="btn btn-sm btn-outline-light border">
                                                    View Contact
                                                </button>
                                                <div class="dropdown">
                                                    <button
                                                        class="btn btn-sm btn-icon btn-outline-light btn-wave border"
                                                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-2-fill"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video
                                                                Call</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri ri-heart-3-line me-2 align-middle d-inline-block"></i>Favourite</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <button aria-label="button"
                                                    class="btn btn-sm btn-icon btn-outline-light border" type="button">
                                                    <i class="ri-heart-3-fill text-danger"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-6">
                                    <div class="card custom-card text-center">
                                        <div class="card-body p-4">
                                            <div class="avatar avatar-xl avatar-rounded mb-3">
                                                <img src="../assets/images/media/media-36.jpg" alt=""
                                                    class="img-thumbnail">
                                            </div>
                                            <div class="mb-3">
                                                <h6 class="mb-1 fw-medium">
                                                    Chloe
                                                </h6>
                                                <p class="mb-1 text-muted contact-mail text-truncate">
                                                    Chloe@gmail.com</p>
                                                <p class="fw-medium fs-11 mb-0 text-primary">
                                                    +1(555) 882 3445
                                                </p>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-center gap-2">
                                                <button type="button" class="btn btn-sm btn-outline-light border">
                                                    View Contact
                                                </button>
                                                <div class="dropdown">
                                                    <button
                                                        class="btn btn-sm btn-icon btn-outline-light btn-wave border"
                                                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-2-fill"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video
                                                                Call</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri ri-heart-3-line me-2 align-middle d-inline-block"></i>Favourite</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <button aria-label="button"
                                                    class="btn btn-sm btn-icon btn-outline-light border" type="button">
                                                    <i class="ri-heart-3-fill text-danger"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-6">
                                    <div class="card custom-card text-center">
                                        <div class="card-body p-4">
                                            <div class="avatar avatar-xl avatar-rounded mb-3">
                                                <img src="../assets/images/faces/8.jpg" alt="" class="img-thumbnail">
                                            </div>
                                            <div class="mb-3">
                                                <h6 class="mb-1 fw-medium">
                                                    Sophia
                                                </h6>
                                                <p class="mb-1 text-muted contact-mail text-truncate">
                                                    Sophia@gmail.com</p>
                                                <p class="fw-medium fs-11 mb-0 text-primary">
                                                    +1(555) 973 8734
                                                </p>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-center gap-2">
                                                <button type="button" class="btn btn-sm btn-outline-light border">
                                                    View Contact
                                                </button>
                                                <div class="dropdown">
                                                    <button
                                                        class="btn btn-sm btn-icon btn-outline-light btn-wave border"
                                                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-2-fill"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video
                                                                Call</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri ri-heart-3-line me-2 align-middle d-inline-block"></i>Favourite</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <button aria-label="button"
                                                    class="btn btn-sm btn-icon btn-outline-light border" type="button">
                                                    <i class="ri-heart-3-fill text-danger"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-6">
                                    <div class="card custom-card text-center">
                                        <div class="card-body p-4">
                                            <div class="avatar avatar-xl avatar-rounded mb-3">
                                                <img src="../assets/images/faces/21.jpg" alt="" class="img-thumbnail">
                                            </div>
                                            <div class="mb-3">
                                                <h6 class="mb-1 fw-medium">
                                                    Audrey
                                                </h6>
                                                <p class="mb-1 text-muted contact-mail text-truncate">
                                                    Audrey@gmail.com</p>
                                                <p class="fw-medium fs-11 mb-0 text-primary">
                                                    +1(555) 234 9345
                                                </p>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-center gap-2">
                                                <button type="button" class="btn btn-sm btn-outline-light border">
                                                    View Contact
                                                </button>
                                                <div class="dropdown">
                                                    <button
                                                        class="btn btn-sm btn-icon btn-outline-light btn-wave border"
                                                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-2-fill"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video
                                                                Call</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri ri-heart-3-line me-2 align-middle d-inline-block"></i>Favourite</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <button aria-label="button"
                                                    class="btn btn-sm btn-icon btn-outline-light border" type="button">
                                                    <i class="ri-heart-3-fill text-danger"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-6">
                                    <div class="card custom-card text-center">
                                        <div class="card-body p-4">
                                            <div class="avatar avatar-xl avatar-rounded mb-3">
                                                <img src="../assets/images/faces/14.jpg" alt="" class="img-thumbnail">
                                            </div>
                                            <div class="mb-3">
                                                <h6 class="mb-1 fw-medium">
                                                    Michael
                                                </h6>
                                                <p class="mb-1 text-muted contact-mail text-truncate">
                                                    Michael89@gmail.com</p>
                                                <p class="fw-medium fs-11 mb-0 text-primary">
                                                    +1(555) 783 0213
                                                </p>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-center gap-2">
                                                <button type="button" class="btn btn-sm btn-outline-light border">
                                                    View Contact
                                                </button>
                                                <div class="dropdown">
                                                    <button
                                                        class="btn btn-sm btn-icon btn-outline-light btn-wave border"
                                                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-2-fill"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video
                                                                Call</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri ri-heart-3-line me-2 align-middle d-inline-block"></i>Favourite</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <button aria-label="button"
                                                    class="btn btn-sm btn-icon btn-outline-light border" type="button">
                                                    <i class="ri-heart-3-fill text-danger"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-6">
                                    <div class="card custom-card text-center">
                                        <div class="card-body p-4">
                                            <div class="avatar avatar-xl avatar-rounded mb-3">
                                                <img src="../assets/images/media/media-8.jpg" alt=""
                                                    class="img-thumbnail">
                                            </div>
                                            <div class="mb-3">
                                                <h6 class="mb-1 fw-medium">
                                                    Anthony
                                                </h6>
                                                <p class="mb-1 text-muted contact-mail text-truncate">
                                                    Anthony@gmail.com</p>
                                                <p class="fw-medium fs-11 mb-0 text-primary">
                                                    +1(555) 234 2452
                                                </p>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-center gap-2">
                                                <button type="button" class="btn btn-sm btn-outline-light border">
                                                    View Contact
                                                </button>
                                                <div class="dropdown">
                                                    <button
                                                        class="btn btn-sm btn-icon btn-outline-light btn-wave border"
                                                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-2-fill"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video
                                                                Call</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri ri-heart-3-line me-2 align-middle d-inline-block"></i>Favourite</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <button aria-label="button"
                                                    class="btn btn-sm btn-icon btn-outline-light border" type="button">
                                                    <i class="ri-heart-3-fill text-danger"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-6">
                                    <div class="card custom-card text-center">
                                        <div class="card-body p-4">
                                            <div class="avatar avatar-xl avatar-rounded mb-3">
                                                <img src="../assets/images/faces/7.jpg" alt="" class="img-thumbnail">
                                            </div>
                                            <div class="mb-3">
                                                <h6 class="mb-1 fw-medium">
                                                    Harper
                                                </h6>
                                                <p class="mb-1 text-muted contact-mail text-truncate">
                                                    Harper@gmail.com</p>
                                                <p class="fw-medium fs-11 mb-0 text-primary">
                                                    +1(555) 890 2455
                                                </p>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-center gap-2">
                                                <button type="button" class="btn btn-sm btn-outline-light border">
                                                    View Contact
                                                </button>
                                                <div class="dropdown">
                                                    <button
                                                        class="btn btn-sm btn-icon btn-outline-light btn-wave border"
                                                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-2-fill"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video
                                                                Call</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri ri-heart-3-line me-2 align-middle d-inline-block"></i>Favourite</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <button aria-label="button"
                                                    class="btn btn-sm btn-icon btn-outline-light border" type="button">
                                                    <i class="ri-heart-3-fill text-danger"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-6">
                                    <div class="card custom-card text-center">
                                        <div class="card-body p-4">
                                            <div class="avatar avatar-xl avatar-rounded mb-3">
                                                <img src="../assets/images/media/media-34.jpg" alt=""
                                                    class="img-thumbnail">
                                            </div>
                                            <div class="mb-3">
                                                <h6 class="mb-1 fw-medium">
                                                    Andrew
                                                </h6>
                                                <p class="mb-1 text-muted contact-mail text-truncate">
                                                    Andrew@gmail.com</p>
                                                <p class="fw-medium fs-11 mb-0 text-primary">
                                                    +1(555) 982 7648
                                                </p>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-center gap-2">
                                                <button type="button" class="btn btn-sm btn-outline-light border">
                                                    View Contact
                                                </button>
                                                <div class="dropdown">
                                                    <button
                                                        class="btn btn-sm btn-icon btn-outline-light btn-wave border"
                                                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-2-fill"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video
                                                                Call</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri ri-heart-3-line me-2 align-middle d-inline-block"></i>Favourite</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <button aria-label="button"
                                                    class="btn btn-sm btn-icon btn-outline-light border" type="button">
                                                    <i class="ri-heart-3-fill text-danger"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-6">
                                    <div class="card custom-card text-center">
                                        <div class="card-body p-4">
                                            <div class="avatar avatar-xl avatar-rounded mb-3">
                                                <img src="../assets/images/media/media-21.jpg" alt=""
                                                    class="img-thumbnail">
                                            </div>
                                            <div class="mb-3">
                                                <h6 class="mb-1 fw-medium">
                                                    Eric
                                                </h6>
                                                <p class="mb-1 text-muted contact-mail text-truncate">Eric@gmail.com
                                                </p>
                                                <p class="fw-medium fs-11 mb-0 text-primary">
                                                    +1(555) 002 1239
                                                </p>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-center gap-2">
                                                <button type="button" class="btn btn-sm btn-outline-light border">
                                                    View Contact
                                                </button>
                                                <div class="dropdown">
                                                    <button
                                                        class="btn btn-sm btn-icon btn-outline-light btn-wave border"
                                                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-2-fill"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video
                                                                Call</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri ri-heart-3-line me-2 align-middle d-inline-block"></i>Favourite</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <button aria-label="button"
                                                    class="btn btn-sm btn-icon btn-outline-light border" type="button">
                                                    <i class="ri-heart-3-fill text-danger"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-6">
                                    <div class="card custom-card text-center">
                                        <div class="card-body p-4">
                                            <div class="avatar avatar-xl avatar-rounded mb-3">
                                                <img src="../assets/images/faces/6.jpg" alt="" class="img-thumbnail">
                                            </div>
                                            <div class="mb-3">
                                                <h6 class="mb-1 fw-medium">
                                                    Grace
                                                </h6>
                                                <p class="mb-1 text-muted contact-mail text-truncate">
                                                    Grace@gmail.com</p>
                                                <p class="fw-medium fs-11 mb-0 text-primary">
                                                    +1(555) 982 4834
                                                </p>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-center gap-2">
                                                <button type="button" class="btn btn-sm btn-outline-light border">
                                                    View Contact
                                                </button>
                                                <div class="dropdown">
                                                    <button
                                                        class="btn btn-sm btn-icon btn-outline-light btn-wave border"
                                                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-2-fill"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video
                                                                Call</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri ri-heart-3-line me-2 align-middle d-inline-block"></i>Favourite</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <button aria-label="button"
                                                    class="btn btn-sm btn-icon btn-outline-light border" type="button">
                                                    <i class="ri-heart-3-fill text-danger"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-6">
                                    <div class="card custom-card text-center">
                                        <div class="card-body p-4">
                                            <div class="avatar avatar-xl avatar-rounded bg-success-transparent mb-3">
                                                SM
                                            </div>
                                            <div class="mb-3">
                                                <h6 class="mb-1 fw-medium">
                                                    Samantha
                                                </h6>
                                                <p class="mb-1 text-muted contact-mail text-truncate">
                                                    Samantha@gmail.com</p>
                                                <p class="fw-medium fs-11 mb-0 text-primary">
                                                    +1(555) 982 4834
                                                </p>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-center gap-2">
                                                <button type="button" class="btn btn-sm btn-outline-light border">
                                                    View Contact
                                                </button>
                                                <div class="dropdown">
                                                    <button
                                                        class="btn btn-sm btn-icon btn-outline-light btn-wave border"
                                                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-2-fill"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video
                                                                Call</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri ri-heart-3-line me-2 align-middle d-inline-block"></i>Favourite</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <button aria-label="button"
                                                    class="btn btn-sm btn-icon btn-outline-light border" type="button">
                                                    <i class="ri-heart-3-fill text-danger"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <nav aria-label="Page navigation">
                                    <ul class="pagination justify-content-end">
                                        <li class="page-item disabled"><a class="page-link"
                                                href="javascript:void(0);">Previous</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">Next</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>

                    </div>
                    <div class="col-xl-3">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="p-3">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h6 class="fw-medium">
                                            Category :
                                        </h6>
                                        <!-- <button class="btn btn-primary-light btn-sm btn-wave">View All</button> -->
                                        <a aria-label="anchor" href="javascript:void(0)"
                                            class="btn btn-sm btn-info bg-white text-default border btn-wave"
                                            data-bs-toggle="modal" data-bs-target="#add-linkcategory">
                                            <i class="ri-add-line align-middle me-1 fw-medium"></i>Add New Category
                                        </a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table text-nowrap table-bordered">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Category</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php include 'display_links.php'; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End::row-1 -->

                <!-- Start::add link modal -->
                <div class="modal fade" id="add-linkcategory" tabindex="-1" aria-hidden="true">
                    <form id="add-linkcategory-form" action="../Controller/LinksController.php" method="post">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h6 class="modal-title">Add Category</h6>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body px-4">
                                    <div class="row gy-2">
                                        <div class="col-xl-12">
                                            <label for="link-category-name" class="form-label">Category Name</label>
                                            <input type="text" class="form-control" id="link-category-name"
                                                placeholder="Category Name" name="linkcategory_name" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-primary" name="add-linkcategory">Add
                                        Category</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- End::add link modal -->

                <!-- Start::edit linkcategory modal -->
                <div class="modal fade" id="edit-linkcategory" tabindex="-1" aria-hidden="true">
                    <form id="edit-linkcategory-form" action="../Controller/LinksController.php" method="post">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h6 class="modal-title">Edit Category</h6>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body px-4">
                                    <input type="hidden" name="linkcategory_id" id="edit-linkcategory-id">
                                    <div class="row gy-2">
                                        <div class="col-xl-10">
                                            <label for="edit-linkcategory-name" class="form-label">Category Name</label>
                                            <input type="text" class="form-control" id="edit-linkcategory-name"
                                                placeholder="Category Name" name="new_linkcategory_name" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-primary" name="edit-linkcategory">Edit
                                        Category</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- End::add linkcategory modal -->

                <!-- Start::delete linkcategory modal -->
                <div class="modal fade" id="delete-linkcategory" tabindex="-1" aria-hidden="true">
                    <form id="delete-linkcategory-form" action="../Controller/LinksController.php" method="post">
                        <input type="hidden" name="delete-linkcategory-id" id="delete-linkcategory-id">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h6 class="modal-title">Delete Event</h6>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Are you sure you want to delete this Category?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-danger" name="delete-linkcategory">Delete</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- End::delete linkcategory modal -->

                <!-- <button type="button" class="btn btn-primary btn-wave" id="liveToastBtn">Show live
                        toast</button> -->
                <!-- <div class="toast-container position-fixed top-0 end-0 p-3">
                        <div id="liveToast" class="toast" role="alert" aria-live="assertive"
                            aria-atomic="true">
                            <div class="toast align-items-center text-bg-success border-0 fade show"
                                role="alert" aria-live="assertive" aria-atomic="true">
                                <div class="d-flex">
                                    <div class="toast-body">
                                        Hello, world! This is the Success toast message.
                                    </div>
                                    <button type="button" class="btn-close btn-close-white me-2 m-auto"
                                        data-bs-dismiss="toast" aria-label="Close"></button>
                                </div>
                            </div>
                        </div>
                    </div> -->

            </div>
        </div>
        <!-- End::app-content -->

        <?php include '../components/footer.php'; ?>

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
    <?php include '../components/scrolltotop.php'; ?>
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


    <!-- Custom JS -->
    <script src="../assets/js/custom.js"></script>


    <!-- Custom-Switcher JS -->
    <script src="../assets/js/custom-switcher.min.js"></script>

    <!-- Moment JS -->
    <script src="../assets/libs/moment/moment.js"></script>

    <!-- Fullcalendar JS -->
    <!-- <script src="../assets/libs/fullcalendar/index.global.min.js"></script>
    <script src="../assets/js/fullcalendar.js"></script> -->

    <!-- Prism JS -->
    <script src="../assets/libs/prismjs/prism.js"></script>
    <script src="../assets/js/prism-custom.js"></script>

    <!-- Toast JS -->
    <!-- <script src="../assets/js/Toasts.js"></script> -->

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var deleteButtons = document.querySelectorAll('.delete-linkcategory');
            deleteButtons.forEach(function (button) {
                button.addEventListener("click", function () {
                    var linkId = this.getAttribute('data-id');
                    document.getElementById('delete-linkcategory-id').value = linkId;
                });
            });

            var editButtons = document.querySelectorAll('.edit-linkcategory');
            editButtons.forEach(function (button) {
                button.addEventListener("click", function () {
                    var linkId = this.getAttribute('data-id');
                    var linkName = this.getAttribute('data-name');
                    document.getElementById('edit-linkcategory-id').value = linkId;
                    document.getElementById('edit-linkcategory-name').value = linkName;
                });
            });
        });
    </script>

</body>

</html>