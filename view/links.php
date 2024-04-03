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
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light" data-menu-styles="light" data-toggled="close">

<head>
    <?php include '../components/externalcss.php'; ?>

    <!-- Prism CSS -->
    <link rel="stylesheet" href="../assets/libs/prismjs/themes/prism-coy.min.css">
    <link rel="stylesheet" href="../assets/libs/filepond/filepond.min.css">

    <link rel="stylesheet" href="../assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css">
    <link rel="stylesheet" href="../assets/libs/filepond-plugin-image-edit/filepond-plugin-image-edit.min.css">
    <link rel="stylesheet" href="../assets/libs/dropzone/dropzone.css">

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
                <div class="my-4 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
                    <div class="col-xl-12">
                        <div class="card custom-card mt-4">
                            <div class="card-body">
                                <div class="contact-header">
                                    <div class="d-sm-flex d-block align-items-center justify-content-between">
                                        <div class="h5 fw-medium mb-0">Links</div>
                                        <?php
                                        if (isset($_GET['successMessage'])) {
                                            $successMessage = $_GET['successMessage'];
                                            echo "
                                            <div class='offset-sm-3 col-sm-6'>
                                                <div id='successMessage' class='alert alert-success alert-dismissible fade show' role='alert'>
                                                    <strong>$successMessage</strong>
                                                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                                </div>
                                            </div>
                                            <script>
                                                setTimeout(function() {
                                                    document.getElementById('successMessage').style.display = 'none';
                                                    // Remove the successMessage parameter from the URL
                                                    var url = window.location.href;
                                                    if (url.includes('?successMessage=')) {
                                                        var newUrl = url.split('?')[0];
                                                        window.history.replaceState({}, document.title, newUrl);
                                                    }
                                                }, 5000);
                                            </script>";
                                        }
                                        ?>
                                        <?php
                                        if (isset($_GET['errorMessage']) && $_GET['errorMessage']) {
                                            $errorMessage = $_GET['errorMessage'];
                                            echo "
                                            <div id='errorMessageContainer' class='offset-sm-3 col-sm-6'>
                                                <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                                    <strong>$errorMessage</strong>
                                                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                                </div>
                                            </div>
                                            <script>
                                                setTimeout(function() {
                                                    document.getElementById('errorMessageContainer').style.display = 'none';
                                                    // Remove the errorMessageContainer parameter from the URL
                                                    var url = window.location.href;
                                                    if (url.includes('?errorMessageContainer=')) {
                                                        var newUrl = url.split('?')[0];
                                                        window.history.replaceState({}, document.title, newUrl);
                                                    }
                                                }, 5000);
                                            </script>";
                                        }
                                        ?>
                                        <div class="d-flex mt-sm-0 mt-2 align-items-center">
                                            <div class="input-group">
                                                <input type="text" class="form-control bg-light border-0" placeholder="Search Contact" aria-describedby="search-contact-member">
                                                <button class="btn btn-light" type="button" id="search-contact-member"><i class="ri-search-line text-muted"></i></button>
                                            </div>
                                            <div class="dropdown ms-2">
                                                <button class="btn btn-icon btn-primary-light btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                                            <button class="btn btn-icon btn-secondary-light ms-2" data-bs-toggle="modal" data-bs-target="#add_link" data-bs-title="Add Links"><i class="ri-add-line"></i></button>
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
                            <?php include "todo/link_list.php" ?>
                            <!-- <div class="row">
                                <h6 class="mb-3">Using Grid Markups:</h6>
                                <nav aria-label="Page navigation">
                                    <ul class="pagination justify-content-end">
                                        <li class="page-item disabled"><a class="page-link" href="javascript:void(0);">Previous</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">Next</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="card custom-card overflow-hidden">
                            <div class="d-flex card-header align-items-center justify-content-between">
                                <div class="card-title">
                                    Category:
                                </div>
                                <a aria-label="anchor" href="javascript:void(0)" class="btn btn-sm btn-info bg-white text-default border btn-wave" data-bs-toggle="modal" data-bs-target="#add-linkcategory">
                                    <i class="ri-add-line align-middle me-1 fw-medium"></i>Add New Category
                                </a>
                            </div>
                            <div class="card-body p-0">
                                <ul class="list-group list-group-flush">
                                    <?php include 'display_links.php'; ?>
                                </ul>
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
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body px-4">
                                    <div class="row gy-2">
                                        <div class="col-xl-12">
                                            <label for="link-category-name" class="form-label">Category Name</label>
                                            <input type="text" class="form-control" id="link-category-name" placeholder="Category Name" name="linkcategory_name" required>
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
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body px-4">
                                    <input type="hidden" name="linkcategory_id" id="edit-linkcategory-id">
                                    <div class="row gy-2">
                                        <div class="col-xl-10">
                                            <label for="edit-linkcategory-name" class="form-label">Category Name</label>
                                            <input type="text" class="form-control" id="edit-linkcategory-name" placeholder="Category Name" name="new_linkcategory_name" required>
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
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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

                <!-- Start::add link modal -->
                <div class="modal fade" id="add_link" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <form id="add-link-form" data-single="true" action="../Controller/LinksController.php" method="post" enctype="multipart/form-data">
                                <div class="modal-header">
                                    <h6 class="modal-title">Add Link</h6>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body px-4">
                                    <div class="row gy-2">
                                        <div class="col-xl-6">
                                            <div class="col-xl-12">
                                                <label for="link-name" class="form-label">Link
                                                    Name</label>
                                                <input type="text" class="form-control" id="link-name" placeholder="Link Name" required name="link_name">
                                            </div>
                                            <div class="col-xl-12">
                                                <label for="link-url" class="form-label">Link
                                                    URL</label>
                                                <input type="url" class="form-control" id="link-url" placeholder="Link URL: https://" required name="link_url" pattern="https?://.*">
                                            </div>
                                            <br>
                                            <div class="col-xl-12">
                                                <label class="form-label">Category</label>
                                                <select class="form-select" aria-label="Default select example" required name="category_id">
                                                    <option selected>Select Category
                                                    </option>
                                                    <?php
                                                    // Include your database connection code here
                                                    include_once "../config/db.php";

                                                    // Fetch categories data from the database
                                                    $sql = "SELECT * FROM linkcategories";
                                                    $result = mysqli_query($conn, $sql);

                                                    // Check if there are any categories
                                                    if (mysqli_num_rows($result) > 0) {
                                                        // Loop through each row of the result set
                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                    ?>
                                                            <option value="<?php echo $row['id']; ?>">
                                                                <?php echo $row['linkcategory']; ?>
                                                            </option>
                                                        <?php
                                                        }
                                                    } else {
                                                        // No categories found
                                                        ?>
                                                        <option disabled>No categories found
                                                        </option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="card custom-card">
                                                <div class="card-header">
                                                    <div class="card-title">
                                                        Image Upload
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <!-- <label for="image">Image:</label> -->
                                                    <!-- <input type="file" name="image" class="single-fileupload"
                                                    id="image" accept="image/*" value=""
                                                    required /> -->
                                                    <input type="file" class="single-fileupload" name="image" value="" id="image" accept="image/*">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-primary" name="add-link">Add
                                        Link</button>
                                </div>
                            </form>
                            <!-- Start:: row-2 -->
                            <!-- <div class="card-body d-none">
                                <form data-single="true" method="post"
                                    action="../Controller/LinksController.php"
                                    class="dropzone">
                                </form>
                            </div> -->
                            <!-- End:: row-2 -->
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="edit-link" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <form id="edit-link-form" data-single="true" action="../Controller/LinksController.php" method="post" enctype="multipart/form-data">
                                <div class="modal-header">
                                    <h6 class="modal-title">Edit Link</h6>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body px-4">
                                    <input type="hidden" name="edit_link_id" id="edit-link-id">
                                    <div class="row gy-2">
                                        <div class="col-xl-6">
                                            <div class="col-xl-12">
                                                <label for="edit-link-name" class="form-label">Link
                                                    Name</label>
                                                <input type="text" class="form-control" id="edit-link-name" placeholder="Link Name" required name="edit_link_name">
                                            </div>
                                            <div class="col-xl-12">
                                                <label for="edit-link-url" class="form-label">Link
                                                    URL</label>
                                                <input type="url" class="form-control" id="edit-link-url" placeholder="Link URL: https://" required name="edit_link_url" pattern="https?://.*">
                                            </div>
                                            <br>
                                            <div class="col-xl-12">
                                                <label class="form-label">Category</label>
                                                <select class="form-select" id="edit-link-category" aria-label="Default select example" required name="edit_link_category_id">
                                                    <option selected>Select Category
                                                    </option>
                                                    <?php
                                                    // Include your database connection code here
                                                    include_once "../config/db.php";

                                                    // Fetch categories data from the database
                                                    $sql = "SELECT * FROM linkcategories";
                                                    $result = mysqli_query($conn, $sql);

                                                    // Check if there are any categories
                                                    if (mysqli_num_rows($result) > 0) {
                                                        // Loop through each row of the result set
                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                    ?>
                                                            <option value="<?php echo $row['id']; ?>">
                                                                <?php echo $row['linkcategory']; ?>
                                                            </option>
                                                        <?php
                                                        }
                                                    } else {
                                                        // No categories found
                                                        ?>
                                                        <option disabled>No categories found
                                                        </option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="card custom-card">
                                                <div class="card-header">
                                                    <div class="card-title">
                                                        Image Upload
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <img class="img-thumbnail" src="" id="edit-original-img" alt="">
                                                    <!-- <label for="image">Image:</label> -->
                                                    <!-- <input type="file" name="image" class="single-fileupload"
                                                    id="image" accept="image/*" value=""
                                                    required /> -->
                                                    <input type="file" class="single-fileupload" name="edit_link_image" value="" id="edit-link-image" accept="image/*">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-primary" name="edit-link">Edit
                                        Link</button>
                                </div>
                            </form>
                            <!-- Start:: row-2 -->
                            <!-- <div class="card-body d-none">
                                <form data-single="true" method="post"
                                    action="../Controller/LinksController.php"
                                    class="dropzone">
                                </form>
                            </div> -->
                            <!-- End:: row-2 -->
                        </div>
                    </div>
                </div>


                <!-- Start::edit link modal -->
                <!-- <div class="modal fade" id="edit-link" tabindex="-1" aria-hidden="true">
                    <form id="edit-link-form" action="../Controller/LinksController.php" method="post">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h6 class="modal-title">Edit Link</h6>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body px-4">
                                    
                                    <div class="row gy-2">
                                        <div class="col-xl-12">
                                            <label for="edit-link-name" class="form-label">Link Name</label>
                                            <input type="text" class="form-control" id="edit-link-name" placeholder="Link Name" name="new_link_name" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-primary" name="edit-link">Edit
                                        Link</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div> -->
                <!-- End::add link modal -->

                <!-- Start::delete link modal -->
                <div class="modal fade" id="delete-link" tabindex="-1" aria-hidden="true">
                    <form id="delete-link-form" action="../Controller/LinksController.php" method="post">
                        <input type="hidden" name="delete-link-id" id="delete-link-id">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h6 class="modal-title">Delete Link</h6>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Are you sure you want to delete this link?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-danger" name="delete-link">Delete</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- End::delete link modal -->



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

        <div class="modal fade" id="header-responsive-search" tabindex="-1" aria-labelledby="header-responsive-search" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="input-group">
                            <input type="text" class="form-control border-end-0" placeholder="Search Anything ..." aria-label="Search Anything ..." aria-describedby="button-addon2">
                            <button class="btn btn-primary" type="button" id="button-addon2"><i class="bi bi-search"></i></button>
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

    <!-- Filepond JS -->
    <script src="../assets/libs/filepond/filepond.min.js"></script>
    <script src="../assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js"></script>
    <script src="../assets/libs/filepond-plugin-image-exif-orientation/filepond-plugin-image-exif-orientation.min.js"></script>
    <script src="../assets/libs/filepond-plugin-file-validate-size/filepond-plugin-file-validate-size.min.js"></script>
    <script src="../assets/libs/filepond-plugin-file-encode/filepond-plugin-file-encode.min.js"></script>
    <script src="../assets/libs/filepond-plugin-image-edit/filepond-plugin-image-edit.min.js"></script>
    <script src="../assets/libs/filepond-plugin-file-validate-type/filepond-plugin-file-validate-type.min.js"></script>
    <script src="../assets/libs/filepond-plugin-file-validate-type/filepond-plugin-file-validate-type.min.js"></script>
    <script src="../assets/libs/filepond-plugin-image-crop/filepond-plugin-image-crop.min.js"></script>
    <script src="../assets/libs/filepond-plugin-image-resize/filepond-plugin-image-resize.min.js"></script>
    <script src="../assets/libs/filepond-plugin-image-transform/filepond-plugin-image-transform.min.js"></script>

    <!-- Dropzone JS -->
    <script src="../assets/libs/dropzone/dropzone-min.js"></script>
    <!-- Fileupload JS -->
    <script src="../assets/js/fileupload.js"></script>

    <!-- Custom JS -->
    <script src="../assets/js/custom.js"></script>
    <!-- Toast JS -->
    <!-- <script src="../assets/js/Toasts.js"></script> -->

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var deleteButtons = document.querySelectorAll('.delete-linkcategory');
            deleteButtons.forEach(function(button) {
                button.addEventListener("click", function() {
                    var linkId = this.getAttribute('data-id');
                    document.getElementById('delete-linkcategory-id').value = linkId;
                });
            });

            var editcategoryButtons = document.querySelectorAll('.edit-linkcategory');
            editcategoryButtons.forEach(function(button) {
                button.addEventListener("click", function() {
                    var linkId = this.getAttribute('data-id');
                    var linkName = this.getAttribute('data-name');
                    document.getElementById('edit-linkcategory-id').value = linkId;
                    document.getElementById('edit-linkcategory-name').value = linkName;
                });
            });

            var deleteButtons = document.querySelectorAll('.delete-link');
            deleteButtons.forEach(function(button) {
                button.addEventListener("click", function() {
                    var linkId = this.getAttribute('data-id');
                    document.getElementById('delete-link-id').value = linkId;
                });
            });

            // Set up edit link event listeners
            var editlinkButtons = document.querySelectorAll('.edit-link');
            editlinkButtons.forEach(function(button) {
                button.addEventListener("click", function() {
                    var linkId = this.getAttribute('data-id');
                    var linkName = this.getAttribute('data-name');
                    var linkUrl = this.getAttribute('data-url');
                    var linkCategory = this.getAttribute('data-category');
                    var linkImage = this.getAttribute('data-image');
                    populateEditEventModal(linkId, linkName, linkUrl, linkCategory, linkImage);
                });
            });

            function populateEditEventModal(linkId, linkName, linkUrl, linkCategory, linkImage) {
                document.getElementById('edit-link-id').value = linkId;
                document.getElementById('edit-link-name').value = linkName;
                document.getElementById('edit-link-url').value = linkUrl;
                document.getElementById('edit-link-category').value = linkCategory;
                document.getElementById('edit-original-img').setAttribute('src', '../Controller/uploads/' + linkImage);
            }
        });
    </script>

</body>

</html>