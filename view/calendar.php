<?php
$pageTitle = "Calendar";
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
                    <div>
                        <h1 class="page-title fw-medium fs-18 mb-2">Calendar</h1>
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
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">All Events</div>
                                <a aria-label="anchor" href="javascript:void(0)"
                                    class="btn btn-sm btn-info bg-white text-default border btn-wave"
                                    data-bs-toggle="modal" data-bs-target="#add-event">
                                    <i class="ri-add-line align-middle me-1 fw-medium"></i>Create New Event
                                </a>
                            </div>
                            <div class="card-body p-0">
                                <div id="external-events"
                                    class="border-bottom p-3 d-flex align-items-center justify-content-between flex-wrap">
                                    <?php include 'events_list.php'; ?>
                                    <!-- <div
                                        class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event bg-primary-transparent">
                                        <div class="fc-event-main text-primary">Calendar Events</div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">Full Calendar</div>
                            </div>
                            <div class="card-body">
                                <div id='calendar2'></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="p-3">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h6 class="fw-medium">
                                            Events :
                                        </h6>
                                        <!-- <button class="btn btn-primary-light btn-sm btn-wave">View All</button> -->
                                    </div>
                                </div>
                                <div class="border-bottom" id="full-calendar-activity">
                                    <ul class="list-unstyled mb-0 fullcalendar-events-activity">
                                        <div class="card custom-card">
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table text-nowrap table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">Email</th>
                                                                <th scope="col">Color</th>
                                                                <th scope="col">Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php include 'display_events.php'; ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </ul>
                                </div>
                                <div class="p-3">
                                    <img src="../assets/images/media/media-81.svg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End::row-1 -->

                <!-- Start::add event modal -->
                <div class="modal fade" id="add-event" tabindex="-1" aria-hidden="true">
                    <form id="add-event-form" action="../Controller/CalendarController.php" method="post">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h6 class="modal-title">Add Event</h6>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body px-4">
                                    <div class="row gy-2">
                                        <div class="col-xl-2">
                                            <label for="event-id" class="form-label">Color</label>
                                            <input type="color" class="form-control form-control-color border-0 mt-1"
                                                id="event-id" name="color" value="#136ad0" title="Choose your color">
                                        </div>
                                        <div class="col-xl-10">
                                            <label for="event-name" class="form-label">Event Name</label>
                                            <input type="text" class="form-control" id="event-name"
                                                placeholder="Event Name" name="event_name" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-primary" name="add-event">Add
                                        Event</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- End::add event modal -->

                <!-- Start::edit event modal -->
                <div class="modal fade" id="edit-event" tabindex="-1" aria-hidden="true">
                    <form id="edit-event-form" action="../Controller/CalendarController.php" method="post">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h6 class="modal-title">Edit Event</h6>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body px-4">
                                    <input type="hidden" name="event_id" id="edit-event-id">
                                    <div class="row gy-2">
                                        <div class="col-xl-2">
                                            <label for="edit-event-color" class="form-label">Color</label>
                                            <input type="color" class="form-control form-control-color border-0 mt-1"
                                                id="edit-event-color" name="new_color" title="Choose your color">
                                        </div>
                                        <div class="col-xl-10">
                                            <label for="edit-event-name" class="form-label">Event Name</label>
                                            <input type="text" class="form-control" id="edit-event-name"
                                                placeholder="Event Name" name="new_event_name" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-primary" name="edit-event">Edit
                                        Event</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- End::add event modal -->

                <!-- Start::delete event modal -->
                <div class="modal fade" id="delete-event" tabindex="-1" aria-hidden="true">
                    <form id="delete-event-form" action="../Controller/CalendarController.php" method="post">
                        <input type="hidden" name="delete-event-id" id="delete-event-id">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h6 class="modal-title">Delete Event</h6>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Are you sure you want to delete this event?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-danger" name="delete-event">Delete</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- End::delete event modal -->

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
    <script src="../assets/libs/fullcalendar/index.global.min.js"></script>
    <script src="../assets/js/fullcalendar.js"></script>

    <!-- Prism JS -->
    <script src="../assets/libs/prismjs/prism.js"></script>
    <script src="../assets/js/prism-custom.js"></script>

    <!-- Toast JS -->
    <!-- <script src="../assets/js/Toasts.js"></script> -->

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var deleteButtons = document.querySelectorAll('.delete-event');
            deleteButtons.forEach(function (button) {
                button.addEventListener("click", function () {
                    var eventId = this.getAttribute('data-id');
                    document.getElementById('delete-event-id').value = eventId;
                });
            });

            var editButtons = document.querySelectorAll('.edit-event');
            editButtons.forEach(function (button) {
                button.addEventListener("click", function () {
                    var eventId = this.getAttribute('data-id');
                    var color = this.getAttribute('data-color');
                    var eventName = this.getAttribute('data-name');
                    populateEditEventModal(eventId, color, eventName);
                });
            });
        });

        function populateEditEventModal(eventId, color, eventName) {
            document.getElementById('edit-event-id').value = eventId;
            document.getElementById('edit-event-color').value = color;
            document.getElementById('edit-event-name').value = eventName;
        }
    </script>

</body>

</html>