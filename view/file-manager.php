<?php
$pageTitle = "File Manager";
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
                <div class="file-manager-container p-2 gap-2 d-sm-flex">
                    <div class="file-manager-navigation">
                        <div class="d-flex align-items-center justify-content-between w-100 p-3 border-bottom">
                            <div>
                                <h6 class="fw-medium mb-0">File Manager</h6>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-sm btn-icon btn-primary-light btn-wave waves-light" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ri-settings-3-line"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="javascript:void(0);">Hidden Files</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="p-3 border-bottom">
                            <div class="input-group">
                                <input type="text" class="form-control bg-light border-0" placeholder="Search Files"
                                    aria-describedby="button-addon2">
                                <button class="btn btn-light" type="button" id="button-addon2"><i
                                        class="ri-search-line text-muted"></i></button>
                            </div>
                        </div>
                        <div>
                            <ul class="list-unstyled files-main-nav" id="files-main-nav">
                                <li class="active files-type">
                                    <a href="javascript:void(0)">
                                        <div class="d-flex align-items-center">
                                            <div class="me-2">
                                                <i class="ri-folder-2-line fs-16"></i>
                                            </div>
                                            <span class="flex-fill text-nowrap">
                                                My Files
                                            </span>
                                            <span class="badge bg-primary">322</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="files-type">
                                    <a href="javascript:void(0)">
                                        <div class="d-flex align-items-center">
                                            <div class="me-2">
                                                <i class="ri-star-s-line fs-16"></i>
                                            </div>
                                            <span class="flex-fill text-nowrap">
                                                favourites
                                            </span>
                                        </div>
                                    </a>
                                </li>
                                <li class="files-type">
                                    <a href="javascript:void(0)">
                                        <div class="d-flex align-items-center">
                                            <div class="me-2">
                                                <i class="ri-share-forward-line fs-16"></i>
                                            </div>
                                            <span class="flex-fill text-nowrap">
                                                Shared Files
                                            </span>
                                        </div>
                                    </a>
                                </li>
                                <li class="files-type">
                                    <a href="javascript:void(0)">
                                        <div class="d-flex align-items-center">
                                            <div class="me-2">
                                                <i class="ri-delete-bin-line fs-16"></i>
                                            </div>
                                            <span class="flex-fill text-nowrap">
                                                Recycle Bin
                                            </span>
                                        </div>
                                    </a>
                                </li>
                                <li class="files-type">
                                    <a href="javascript:void(0)">
                                        <div class="d-flex align-items-center">
                                            <div class="me-2">
                                                <i class="ri-history-fill fs-16"></i>
                                            </div>
                                            <span class="flex-fill text-nowrap">
                                                Recent Files
                                            </span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <div class="d-flex align-items-center">
                                            <div class="me-2">
                                                <i class="ri-settings-3-line fs-16"></i>
                                            </div>
                                            <span class="flex-fill text-nowrap">
                                                Settings
                                            </span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <div class="d-flex align-items-center">
                                            <div class="me-2">
                                                <i class="ri-questionnaire-line fs-16"></i>
                                            </div>
                                            <span class="flex-fill text-nowrap">
                                                Help Center
                                            </span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <div class="d-flex align-items-center">
                                            <div class="me-2">
                                                <i class="ri-folder-line fs-16"></i>
                                            </div>
                                            <span class="flex-fill text-nowrap">
                                                Version
                                            </span>
                                        </div>
                                    </a>
                                </li>
                                <li class="mb-4">
                                    <a href="javascript:void(0)">
                                        <div class="d-flex align-items-center">
                                            <div class="me-2">
                                                <i class="ri-logout-box-line fs-16"></i>
                                            </div>
                                            <span class="flex-fill text-nowrap">
                                                Log out
                                            </span>
                                        </div>
                                    </a>
                                </li>
                                <li class="mb-4">
                                    <div class="text-muted mb-2">
                                        <p class="mb-1"><span class="fw-bold fs-14">69.42GB</span> Used</p>
                                        <p class="fs-12 mb-0">58% Used - 51.04Gb free</p>
                                    </div>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 58%"
                                            aria-valuenow="58" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center justify-content-center">
                                    <div class="filemanager-upgrade-storage">
                                        <span>
                                            <img src="../assets/images/media/file-manager/2.png" alt="">
                                        </span>
                                        <div class="text-default">
                                            <span class="fs-15 fw-medium">Want to <span
                                                    class="fw-bold text-success"><u>Buy</u></span> Storage?</span>
                                        </div>
                                        <div class="mt-3 d-grid">
                                            <button class="btn btn-primary-gradient">Upgrade</button>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="file-manager-folders">
                        <div
                            class="d-flex p-3 flex-wrap gap-2 align-items-center justify-content-between border-bottom">
                            <div>
                                <h6 class="fw-medium mb-0">Folders</h6>
                            </div>
                            <div class="d-flex gap-2">
                                <button id="folders-close-btn"
                                    class="d-sm-none d-block btn btn-icon btn-sm btn-danger-light">
                                    <i class="ri-close-fill"></i>
                                </button>
                                <button
                                    class="btn btn-sm btn-primary d-flex align-items-center justify-content-center btn-wave waves-light"
                                    data-bs-toggle="modal" data-bs-target="#create-folder">
                                    <i class="ri-add-circle-line align-middle me-1"></i>Create Folder
                                </button>
                                <div class="modal fade" id="create-folder" tabindex="-1" aria-labelledby="create-folder"
                                    data-bs-keyboard="false" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h6 class="modal-title" id="staticBackdropLabel">Create Folder
                                                </h6>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <label for="create-folder1" class="form-label">Folder Name</label>
                                                <input type="text" class="form-control" id="create-folder1"
                                                    placeholder="Folder Name">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-sm btn-icon btn-light"
                                                    data-bs-dismiss="modal"><i class="ri-close-fill"></i></button>
                                                <button type="button" class="btn btn-sm btn-success">Create</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button
                                    class="btn btn-sm btn-outline-secondary d-flex align-items-center justify-content-center btn-wave waves-light"
                                    data-bs-toggle="modal" data-bs-target="#create-file">
                                    <i class="ri-add-circle-line align-middle me-1"></i>Create File
                                </button>
                                <div class="modal fade" id="create-file" tabindex="-1" aria-labelledby="create-file"
                                    data-bs-keyboard="false" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h6 class="modal-title" id="staticBackdropLabel1">Create File
                                                </h6>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <label for="create-file1" class="form-label">File Name</label>
                                                <input type="text" class="form-control" id="create-file1"
                                                    placeholder="File Name">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-sm btn-icon btn-light"
                                                    data-bs-dismiss="modal"><i class="ri-close-fill"></i></button>
                                                <button type="button" class="btn btn-sm btn-success">Create</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-3 file-folders-container overflow-auto" id="file-folders-container">
                            <div class="d-flex mb-3 align-items-center justify-content-between">
                                <p class="mb-0 fw-medium fs-14">My Files</p>
                                <button class="btn btn-sm btn-primary-light">View All</button>
                            </div>
                            <div class="row mb-3">
                                <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6">
                                    <div class="card custom-card shadow-none bg-light">
                                        <div class="card-body p-3">
                                            <a href="javascript:void(0);">
                                                <div class="d-flex justify-content-between flex-wrap">
                                                    <div class="file-format-icon svg-primary">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                                            <path opacity="0.3"
                                                                d="M19 2H5a3.009 3.009 0 0 0-3 3v8.86l3.88-3.88a3.075 3.075 0 0 1 4.24 0l2.871 2.887.888-.888a3.008 3.008 0 0 1 4.242 0L22 15.86V5a3.009 3.009 0 0 0-3-3z" />
                                                            <path opacity="1"
                                                                d="M10.12 9.98a3.075 3.075 0 0 0-4.24 0L2 13.86V19a3.009 3.009 0 0 0 3 3h14c.815 0 1.595-.333 2.16-.92L10.12 9.98z" />
                                                            <path opacity="0.1"
                                                                d="m22 15.858-3.879-3.879a3.008 3.008 0 0 0-4.242 0l-.888.888 8.165 8.209c.542-.555.845-1.3.844-2.076v-3.142z" />
                                                        </svg>
                                                    </div>
                                                    <div>
                                                        <span class="fw-medium mb-1">
                                                            Images
                                                        </span>
                                                        <span class="fs-10 d-block text-muted text-end">
                                                            214.32MB
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6">
                                    <div class="card custom-card shadow-none bg-light">
                                        <div class="card-body p-3">
                                            <a href="javascript:void(0);">
                                                <div class="d-flex justify-content-between flex-wrap">
                                                    <div class="file-format-icon svg-secondary">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                                            <path opacity="0.3"
                                                                d="M14 18H5a3.003 3.003 0 0 1-3-3V9a3.003 3.003 0 0 1 3-3h9a3.003 3.003 0 0 1 3 3v6a3.003 3.003 0 0 1-3 3z" />
                                                            <path opacity="1"
                                                                d="M21.895 7.554a1 1 0 0 0-1.342-.449l-3.564 1.783c.001.038.01.073.011.112v6c0 .039-.01.074-.011.112l3.564 1.783A1 1 0 0 0 22 16V8a1 1 0 0 0-.105-.446z" />
                                                        </svg>
                                                    </div>
                                                    <div>
                                                        <span class="fw-medium mb-1">
                                                            Videos
                                                        </span>
                                                        <span class="fs-10 d-block text-muted text-end">
                                                            1.45GB
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6">
                                    <div class="card custom-card shadow-none bg-light">
                                        <div class="card-body p-3">
                                            <a href="javascript:void(0);">
                                                <div class="d-flex justify-content-between flex-wrap">
                                                    <div class="file-format-icon svg-warning">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                            <path opacity="0.3"
                                                                d="m20 9-7-7H7a3 3 0 0 0-3 3v14a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3Z" />
                                                            <path opacity="1"
                                                                d="M20 9h-5a2 2 0 0 1-2-2V2zm-5 9H9a1 1 0 0 1 0-2h6a1 1 0 0 1 0 2zm0-4H9a1 1 0 0 1 0-2h6a1 1 0 0 1 0 2zm-5-4H9a1 1 0 0 1 0-2h1a1 1 0 0 1 0 2z" />
                                                        </svg>
                                                    </div>
                                                    <div>
                                                        <span class="fw-medium mb-1">
                                                            Docs
                                                        </span>
                                                        <span class="fs-10 d-block text-muted text-end">
                                                            432.29KB
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6">
                                    <div class="card custom-card shadow-none bg-light">
                                        <div class="card-body p-3">
                                            <a href="javascript:void(0);">
                                                <div class="d-flex justify-content-between flex-wrap">
                                                    <div class="file-format-icon svg-info">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                                            <path opacity="0.3"
                                                                d="M6 21H3a1 1 0 0 1-1-1v-6a1 1 0 0 1 1-1h3a3.003 3.003 0 0 1 3 3v2a3.003 3.003 0 0 1-3 3zm15 0h-3a3.003 3.003 0 0 1-3-3v-2a3.003 3.003 0 0 1 3-3h3a1 1 0 0 1 1 1v6a1 1 0 0 1-1 1z" />
                                                            <path opacity="1"
                                                                d="M12 3C6.477 3 2 7.477 2 13v1a1 1 0 0 1 1-1h1a8 8 0 0 1 16 0h1a1 1 0 0 1 1 1v-1c0-5.523-4.477-10-10-10z" />
                                                        </svg>
                                                    </div>
                                                    <div>
                                                        <span class="fw-medium mb-1">
                                                            Music
                                                        </span>
                                                        <span class="fs-10 d-block text-muted text-end">
                                                            289MB
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6">
                                    <div class="card custom-card shadow-none bg-light">
                                        <div class="card-body p-3">
                                            <a href="javascript:void(0);">
                                                <div class="d-flex justify-content-between flex-wrap">
                                                    <div class="file-format-icon svg-success">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                                            <circle cx="12" cy="4" r="2" opacity="0.3" />
                                                            <path fill="#b7d7fd"
                                                                d="M12 6a1.98 1.98 0 0 1-1-.277V8a1 1 0 0 0 2 0V5.723A1.98 1.98 0 0 1 12 6z" />
                                                            <path opacity="0.3"
                                                                d="M17 22H7a3.003 3.003 0 0 1-3-3v-9a3.003 3.003 0 0 1 3-3h10a3.003 3.003 0 0 1 3 3v9a3.003 3.003 0 0 1-3 3z" />
                                                            <path opacity="1"
                                                                d="M14.97 12.243 16.28 7H7.72l1.31 5.243A1 1 0 0 0 10 13h4a1 1 0 0 0 .97-.757z" />
                                                            <path fill="#b7d7fd"
                                                                d="M2 18a1 1 0 0 1-1-1v-2a1 1 0 1 1 2 0v2a1 1 0 0 1-1 1zm20 0a1 1 0 0 1-1-1v-2a1 1 0 1 1 2 0v2a1 1 0 0 1-1 1z" />
                                                            <circle cx="9" cy="16" r="1" opacity="1" />
                                                            <circle cx="15" cy="16" r="1" opacity="1" />
                                                        </svg>
                                                    </div>
                                                    <div>
                                                        <span class="fw-medium mb-1">
                                                            Apps
                                                        </span>
                                                        <span class="fs-10 d-block text-muted text-end">
                                                            12.56GB
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6">
                                    <div class="card custom-card shadow-none bg-light">
                                        <div class="card-body p-3">
                                            <a href="javascript:void(0);">
                                                <div class="d-flex justify-content-between flex-wrap">
                                                    <div class="file-format-icon svg-danger">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                            <path opacity="1"
                                                                d="M15.707 13.293a1 1 0 0 0-1.414 0L13 14.586V3a1 1 0 0 0-2 0v11.586l-1.293-1.293a1 1 0 0 0-1.414 1.414l3 3a1 1 0 0 0 1.414 0l3-3a1 1 0 0 0 0-1.414Z" />
                                                            <path opacity="0.3"
                                                                d="M18 9h-5v5.586l1.293-1.293a1 1 0 0 1 1.414 1.414l-3 3a1 1 0 0 1-1.414 0l-3-3a1 1 0 0 1 1.414-1.414L11 14.586V9H6a3.003 3.003 0 0 0-3 3v7a3.003 3.003 0 0 0 3 3h12a3.003 3.003 0 0 0 3-3v-7a3.003 3.003 0 0 0-3-3Z" />
                                                        </svg>
                                                    </div>
                                                    <div>
                                                        <span class="fw-medium mb-1">
                                                            Downloads
                                                        </span>
                                                        <span class="fs-10 d-block text-muted text-end">
                                                            3.12GB
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6">
                                    <div class="card custom-card shadow-none bg-light">
                                        <div class="card-body p-3">
                                            <a href="javascript:void(0);">
                                                <div class="d-flex justify-content-between flex-wrap">
                                                    <div class="file-format-icon svg-purple">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                            <path opacity="0.3"
                                                                d="M17 21H7a3.003 3.003 0 0 1-3-3V8a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v10a3.003 3.003 0 0 1-3 3Z" />
                                                            <path opacity="1"
                                                                d="M19 9H5a3 3 0 0 1 0-6h14a3 3 0 0 1 0 6zm-5 4h-4a1 1 0 0 1 0-2h4a1 1 0 0 1 0 2z" />
                                                        </svg>
                                                    </div>
                                                    <div>
                                                        <span class="fw-medium mb-1">
                                                            Archives
                                                        </span>
                                                        <span class="fs-10 d-block text-muted text-end">
                                                            28.5MB
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6">
                                    <div class="card custom-card shadow-none bg-light">
                                        <div class="card-body p-3">
                                            <a href="javascript:void(0);">
                                                <div class="d-flex justify-content-between flex-wrap">
                                                    <div class="file-format-icon svg-pink">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                            <rect width="9" height="9" x="2" y="2" opacity="1" rx="1" />
                                                            <rect width="9" height="9" x="2" y="13" opacity="0.3"
                                                                rx="1" />
                                                            <rect width="9" height="9" x="13" y="2" opacity="0.3"
                                                                rx="1" />
                                                            <rect width="9" height="9" x="13" y="13" opacity="0.3"
                                                                rx="1" />
                                                        </svg>
                                                    </div>
                                                    <div>
                                                        <span class="fw-medium mb-1">
                                                            More
                                                        </span>
                                                        <span class="fs-10 d-block text-muted text-end">
                                                            32GB
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex mb-3 align-items-center justify-content-between">
                                <p class="mb-0 fw-medium fs-14">Folders</p>
                                <button class="btn btn-sm btn-primary-light">View All</button>
                            </div>
                            <div class="row mb-3">
                                <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6">
                                    <div class="card border custom-card shadow-none">
                                        <div class="card-body bg-primary-transparent">
                                            <div
                                                class="mb-4 folder-svg-container d-flex flex-wrap justify-content-between align-items-top">
                                                <div class="svg-primary">
                                                    <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1"
                                                        viewBox="0 0 24 24">
                                                        <path opacity="1"
                                                            d="M19.97586,10V9a3,3,0,0,0-3-3H10.69678l-.31622-.94868A3,3,0,0,0,7.53451,3H3.97586a3,3,0,0,0-3,3V19a2,2,0,0,0,2,2H3.3067a2,2,0,0,0,1.96774-1.64223l1.40283-7.71554A2,2,0,0,1,8.645,10Z" />
                                                        <path opacity="0.3"
                                                            d="M22.02386,10H8.645a2,2,0,0,0-1.96777,1.64221L5.27441,19.35773A2,2,0,0,1,3.3067,21H19.55292a2,2,0,0,0,1.96771-1.64227l1.48712-8.17884A1,1,0,0,0,22.02386,10Z" />
                                                    </svg>
                                                </div>
                                                <div>
                                                    <div class="dropdown">
                                                        <button
                                                            class="btn btn-sm btn-icon btn-primary btn-wave waves-light"
                                                            type="button" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <i class="ri-more-2-fill"></i>
                                                        </button>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item"
                                                                    href="javascript:void(0);">Delete</a></li>
                                                            <li><a class="dropdown-item"
                                                                    href="javascript:void(0);">Rename</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0);">Hide
                                                                    Folder</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="fs-14 fw-medium mb-1 lh-1">
                                                <a href="javascript:void(0);">Images</a>
                                            </p>
                                            <div class="d-flex align-items-center justify-content-between flex-wrap">
                                                <div>
                                                    <span class="text-muted fs-12">
                                                        246 Files
                                                    </span>
                                                </div>
                                                <div>
                                                    <span class="text-default fw-medium">
                                                        214.32MB
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6">
                                    <div class="card border custom-card shadow-none">
                                        <div class="card-body">
                                            <div
                                                class="mb-4 folder-svg-container d-flex flex-wrap justify-content-between align-items-top">
                                                <div class="svg-primary">
                                                    <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1"
                                                        viewBox="0 0 24 24">
                                                        <path opacity="1"
                                                            d="M19.97586,10V9a3,3,0,0,0-3-3H10.69678l-.31622-.94868A3,3,0,0,0,7.53451,3H3.97586a3,3,0,0,0-3,3V19a2,2,0,0,0,2,2H3.3067a2,2,0,0,0,1.96774-1.64223l1.40283-7.71554A2,2,0,0,1,8.645,10Z" />
                                                        <path opacity="0.3"
                                                            d="M22.02386,10H8.645a2,2,0,0,0-1.96777,1.64221L5.27441,19.35773A2,2,0,0,1,3.3067,21H19.55292a2,2,0,0,0,1.96771-1.64227l1.48712-8.17884A1,1,0,0,0,22.02386,10Z" />
                                                    </svg>
                                                </div>
                                                <div>
                                                    <div class="dropdown">
                                                        <button
                                                            class="btn btn-sm btn-icon btn-primary-light btn-wave waves-light"
                                                            type="button" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <i class="ri-more-2-fill"></i>
                                                        </button>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item"
                                                                    href="javascript:void(0);">Delete</a></li>
                                                            <li><a class="dropdown-item"
                                                                    href="javascript:void(0);">Rename</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0);">Hide
                                                                    Folder</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="fs-14 fw-medium mb-1 lh-1">
                                                <a href="javascript:void(0);">Docs</a>
                                            </p>
                                            <div class="d-flex align-items-center justify-content-between flex-wrap">
                                                <div>
                                                    <span class="text-muted fs-12">
                                                        17 Files
                                                    </span>
                                                </div>
                                                <div>
                                                    <span class="text-default fw-medium">
                                                        432.39KB
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6">
                                    <div class="card border custom-card shadow-none">
                                        <div class="card-body">
                                            <div
                                                class="mb-4 folder-svg-container d-flex flex-wrap justify-content-between align-items-top">
                                                <div class="svg-primary">
                                                    <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1"
                                                        viewBox="0 0 24 24">
                                                        <path opacity="1"
                                                            d="M19.97586,10V9a3,3,0,0,0-3-3H10.69678l-.31622-.94868A3,3,0,0,0,7.53451,3H3.97586a3,3,0,0,0-3,3V19a2,2,0,0,0,2,2H3.3067a2,2,0,0,0,1.96774-1.64223l1.40283-7.71554A2,2,0,0,1,8.645,10Z" />
                                                        <path opacity="0.3"
                                                            d="M22.02386,10H8.645a2,2,0,0,0-1.96777,1.64221L5.27441,19.35773A2,2,0,0,1,3.3067,21H19.55292a2,2,0,0,0,1.96771-1.64227l1.48712-8.17884A1,1,0,0,0,22.02386,10Z" />
                                                    </svg>
                                                </div>
                                                <div>
                                                    <div class="dropdown">
                                                        <button
                                                            class="btn btn-sm btn-icon btn-primary-light btn-wave waves-light"
                                                            type="button" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <i class="ri-more-2-fill"></i>
                                                        </button>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item"
                                                                    href="javascript:void(0);">Delete</a></li>
                                                            <li><a class="dropdown-item"
                                                                    href="javascript:void(0);">Rename</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0);">Hide
                                                                    Folder</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="fs-14 fw-medium mb-1 lh-1">
                                                <a href="javascript:void(0);">Downloads</a>
                                            </p>
                                            <div class="d-flex align-items-center justify-content-between flex-wrap">
                                                <div>
                                                    <span class="text-muted fs-12">
                                                        437 Files
                                                    </span>
                                                </div>
                                                <div>
                                                    <span class="text-default fw-medium">
                                                        3.12GB
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6">
                                    <div class="card border custom-card shadow-none">
                                        <div class="card-body">
                                            <div
                                                class="mb-4 folder-svg-container d-flex flex-wrap justify-content-between align-items-top">
                                                <div class="svg-primary">
                                                    <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1"
                                                        viewBox="0 0 24 24">
                                                        <path opacity="1"
                                                            d="M19.97586,10V9a3,3,0,0,0-3-3H10.69678l-.31622-.94868A3,3,0,0,0,7.53451,3H3.97586a3,3,0,0,0-3,3V19a2,2,0,0,0,2,2H3.3067a2,2,0,0,0,1.96774-1.64223l1.40283-7.71554A2,2,0,0,1,8.645,10Z" />
                                                        <path opacity="0.3"
                                                            d="M22.02386,10H8.645a2,2,0,0,0-1.96777,1.64221L5.27441,19.35773A2,2,0,0,1,3.3067,21H19.55292a2,2,0,0,0,1.96771-1.64227l1.48712-8.17884A1,1,0,0,0,22.02386,10Z" />
                                                    </svg>
                                                </div>
                                                <div>
                                                    <div class="dropdown">
                                                        <button
                                                            class="btn btn-sm btn-icon btn-primary-light btn-wave waves-light"
                                                            type="button" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <i class="ri-more-2-fill"></i>
                                                        </button>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item"
                                                                    href="javascript:void(0);">Delete</a></li>
                                                            <li><a class="dropdown-item"
                                                                    href="javascript:void(0);">Rename</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0);">Hide
                                                                    Folder</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="fs-14 fw-medium mb-1 lh-1">
                                                <a href="javascript:void(0);">Apps</a>
                                            </p>
                                            <div class="d-flex align-items-center justify-content-between flex-wrap">
                                                <div>
                                                    <span class="text-muted fs-12">
                                                        165 Files
                                                    </span>
                                                </div>
                                                <div>
                                                    <span class="text-default fw-medium">
                                                        12.56GB
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex mb-3 align-items-center justify-content-between">
                                <p class="mb-0 fw-medium fs-14">Recents</p>
                                <button class="btn btn-sm btn-primary-light">View All</button>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="table-responsive border border-bottom-0">
                                        <table class="table text-nowrap table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">File Name</th>
                                                    <th scope="col">Category</th>
                                                    <th scope="col">Size</th>
                                                    <th scope="col">Date Modified</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody class="files-list">
                                                <tr>
                                                    <th scope="row">
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2">
                                                                <span class="avatar avatar-xs">
                                                                    <img src="../assets/images/media/file-manager/1.png"
                                                                        alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <a href="javascript:void(0);" data-bs-toggle="offcanvas"
                                                                    data-bs-target="#offcanvasRight"
                                                                    aria-controls="offcanvasRight">VID-00292312-SPK823.mp4</a>
                                                            </div>
                                                        </div>
                                                    </th>
                                                    <td>Videos</td>
                                                    <td>87MB</td>
                                                    <td>22,Nov 2023</td>
                                                    <td>
                                                        <div class="hstack gap-2 fs-15">
                                                            <a href="javascript:void(0);"
                                                                class="btn btn-icon btn-sm btn-info-light rounded-pill"><i
                                                                    class="ri-eye-line"></i></a>
                                                            <a href="javascript:void(0);"
                                                                class="btn btn-icon btn-sm btn-danger-light rounded-pill"><i
                                                                    class="ri-delete-bin-line"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2">
                                                                <span class="avatar avatar-xs">
                                                                    <img src="../assets/images/media/file-manager/1.png"
                                                                        alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <a href="javascript:void(0);" data-bs-toggle="offcanvas"
                                                                    data-bs-target="#offcanvasRight"
                                                                    aria-controls="offcanvasRight">IMG-09123878-SPK734.jpeg</a>
                                                            </div>
                                                        </div>
                                                    </th>
                                                    <td>Images</td>
                                                    <td>1.35MB</td>
                                                    <td>25,Nov 2023</td>
                                                    <td>
                                                        <div class="hstack gap-2 fs-15">
                                                            <a href="javascript:void(0);"
                                                                class="btn btn-icon btn-sm btn-info-light rounded-pill"><i
                                                                    class="ri-eye-line"></i></a>
                                                            <a href="javascript:void(0);"
                                                                class="btn btn-icon btn-sm btn-danger-light rounded-pill"><i
                                                                    class="ri-delete-bin-line"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="table-active">
                                                    <th scope="row">
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2">
                                                                <span class="avatar avatar-xs">
                                                                    <img src="../assets/images/media/file-manager/1.png"
                                                                        alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <a href="javascript:void(0);" data-bs-toggle="offcanvas"
                                                                    data-bs-target="#offcanvasRight"
                                                                    aria-controls="offcanvasRight">AMB-2012.zip</a>
                                                            </div>
                                                        </div>
                                                    </th>
                                                    <td>Archives</td>
                                                    <td>422KB</td>
                                                    <td>23,Nov 2023</td>
                                                    <td>
                                                        <div class="hstack gap-2 fs-15">
                                                            <a href="javascript:void(0);"
                                                                class="btn btn-icon btn-sm btn-info-light rounded-pill"><i
                                                                    class="ri-eye-line"></i></a>
                                                            <a href="javascript:void(0);"
                                                                class="btn btn-icon btn-sm btn-danger-light rounded-pill"><i
                                                                    class="ri-delete-bin-line"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2">
                                                                <span class="avatar avatar-xs">
                                                                    <img src="../assets/images/media/file-manager/1.png"
                                                                        alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <a href="javascript:void(0);" data-bs-toggle="offcanvas"
                                                                    data-bs-target="#offcanvasRight"
                                                                    aria-controls="offcanvasRight">AUD-1002-2012.mp3</a>
                                                            </div>
                                                        </div>
                                                    </th>
                                                    <td>Archives</td>
                                                    <td>422KB</td>
                                                    <td>23,Nov 2023</td>
                                                    <td>
                                                        <div class="hstack gap-2 fs-15">
                                                            <a href="javascript:void(0);"
                                                                class="btn btn-icon btn-sm btn-info-light rounded-pill"><i
                                                                    class="ri-eye-line"></i></a>
                                                            <a href="javascript:void(0);"
                                                                class="btn btn-icon btn-sm btn-danger-light rounded-pill"><i
                                                                    class="ri-delete-bin-line"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2">
                                                                <span class="avatar avatar-xs">
                                                                    <img src="../assets/images/media/file-manager/1.png"
                                                                        alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <a href="javascript:void(0);" data-bs-toggle="offcanvas"
                                                                    data-bs-target="#offcanvasRight"
                                                                    aria-controls="offcanvasRight">Document-02.pdf</a>
                                                            </div>
                                                        </div>
                                                    </th>
                                                    <td>Documents</td>
                                                    <td>1.69MB</td>
                                                    <td>2,Dec 2023</td>
                                                    <td>
                                                        <div class="hstack gap-2 fs-15">
                                                            <a href="javascript:void(0);"
                                                                class="btn btn-icon btn-sm btn-info-light rounded-pill"><i
                                                                    class="ri-eye-line"></i></a>
                                                            <a href="javascript:void(0);"
                                                                class="btn btn-icon btn-sm btn-danger-light rounded-pill"><i
                                                                    class="ri-delete-bin-line"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td colspan="5">
                                                        <nav aria-label="Page navigation">
                                                            <ul class="pagination justify-content-end mb-0">
                                                                <li class="page-item disabled"><a class="page-link"
                                                                        href="javascript:void(0);">Previous</a></li>
                                                                <li class="page-item"><a class="page-link"
                                                                        href="javascript:void(0);">1</a></li>
                                                                <li class="page-item"><a class="page-link"
                                                                        href="javascript:void(0);">2</a></li>
                                                                <li class="page-item"><a class="page-link"
                                                                        href="javascript:void(0);">Next</a></li>
                                                            </ul>
                                                        </nav>
                                                    </td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End::app-content -->

        <!-- Start::mail information offcanvas -->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight">
            <div class="offcanvas-body p-0">
                <div class="selected-file-details">
                    <div class="d-flex p-3 align-items-center justify-content-between border-bottom">
                        <div>
                            <h6 class="fw-medium mb-0">File Details</h6>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="dropdown me-1">
                                <button
                                    class="btn btn-sm btn-icon btn-primary-light btn-wave waves-light waves-effect waves-light"
                                    type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ri-more-2-fill"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="javascript:void(0);">Share</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Copy</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Move</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Raname</a></li>
                                </ul>
                            </div>
                            <button type="button" class="btn btn-sm btn-icon btn-outline-light border"
                                data-bs-dismiss="offcanvas" aria-label="Close"><i class="ri-close-line"></i></button>
                        </div>
                    </div>
                    <div class="filemanager-file-details" id="filemanager-file-details">
                        <div class="p-3 text-center border-bottom border-block-end-dashed">
                            <div class="file-details mb-3">
                                <img src="../assets/images/media/file-manager/3.png" alt="">
                            </div>
                            <div>
                                <p class="mb-0 fw-medium fs-16">AMB-2012.zip</p>
                                <p class="mb-0 text-muted fs-10">422KB | 23,Nov 2023</p>
                            </div>
                        </div>
                        <div class="p-3 border-bottom border-block-end-dashed">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <div>
                                        <span class="fw-medium">File Format : </span><span
                                            class="fs-12 text-muted">zip</span>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div>
                                        <p class="fw-medium mb-0">File Description : </p>
                                        <span class="fs-12 text-muted">This file contains 3 folder UDON.main &
                                            UDON.premium & UDON.featured and 42 images and layout styles are added in
                                            this update.</span>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <p class="fw-medium mb-0">File Location : </p>
                                    <span class="fs-12 text-muted">Device/Storage/Archives/AMB-2012.zip</span>
                                </li>
                            </ul>
                        </div>
                        <div class="p-3 border-bottom border-block-end-dashed">
                            <p class="mb-1 fw-medium fs-14">Downloaded from :</p>
                            <a class="text-primary fw-medium text-break"
                                href="https://themeforest.net/user/spruko/portfolio" target="_blank">
                                <u>https://themeforest.net/user/spruko/portfolio</u>
                            </a>
                        </div>
                        <div class="p-3">
                            <p class="mb-2 fw-medium fs-14">Shared With :</p>
                            <div class="d-flex align-items-center p-2 mb-1">
                                <span class="avatar avatar-sm me-2">
                                    <img src="../assets/images/faces/1.jpg" alt="">
                                </span>
                                <span class="fw-medium flex-fill">Akira Susan</span>
                                <span class="badge bg-success-transparent fw-normal">28,Nov 2023</span>
                            </div>
                            <div class="d-flex align-items-center p-2 mb-1">
                                <span class="avatar avatar-sm me-2">
                                    <img src="../assets/images/faces/15.jpg" alt="">
                                </span>
                                <span class="fw-medium flex-fill">Khalid Ahmad</span>
                                <span class="badge bg-success-transparent fw-normal">16,Oct 2023</span>
                            </div>
                            <div class="d-flex align-items-center p-2 mb-1">
                                <span class="avatar avatar-sm me-2">
                                    <img src="../assets/images/faces/8.jpg" alt="">
                                </span>
                                <span class="fw-medium flex-fill">Jeremiah Jackson</span>
                                <span class="badge bg-success-transparent fw-normal">05,Dec 2023</span>
                            </div>
                            <div class="d-flex align-items-center p-2">
                                <span class="avatar avatar-sm me-2">
                                    <img src="../assets/images/faces/13.jpg" alt="">
                                </span>
                                <span class="fw-medium flex-fill">Brigo Jhonson</span>
                                <span class="badge bg-success-transparent fw-normal">13,Nov 2023</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End::mail information offcanvas -->


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

    <!-- Internal File Manager JS -->
    <script src="../assets/js/file-manager.js"></script>

    <!-- Custom JS -->
    <script src="../assets/js/custom.js"></script>

</body>

</html>