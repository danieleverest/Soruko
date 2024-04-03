<?php
$pageTitle = "Notes";
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

    <link rel="stylesheet" href="../assets/libs/filepond/filepond.min.css">
    <link rel="stylesheet" href="../assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css">
    <link rel="stylesheet" href="../assets/libs/filepond-plugin-image-edit/filepond-plugin-image-edit.min.css">

    <link rel="stylesheet" href="../assets/libs/dragula/dragula.min.css">

    <link rel="stylesheet" href="../assets/css/custom.css">

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

                <!-- Start::row-2 -->
                <div class="UDON-kanban-board pt-3">
                    <div class="kanban-tasks-type new">
                        <div class="pe-3 mb-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="d-block fw-medium fs-15">NEW - 04</span>
                                <div>
                                    <a href="javascript:void(0)"
                                        class="btn btn-sm bg-secondary text-default border btn-wave"
                                        id="btn_newNote"
                                    >
                                        <i class="ri-add-line align-middle me-1 fw-medium"></i>New Note
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="kanban-tasks" id="new-tasks">
                            <div id="new-tasks-draggable" class="row" data-view-btn="new-tasks">
                                <?php
                                include "notes/notes_list.php";
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End::row-2 -->

                <!-- Start::add board modal -->
                <div class="modal fade" id="add-board" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h6 class="modal-title">Add Board</h6>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body px-4">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <label for="board-title" class="form-label">Task Board Title</label>
                                        <input type="text" class="form-control" id="board-title"
                                            placeholder="Board Title">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-primary">Add Board</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End::add board modal -->

                <!-- Start::add task modal -->
                <div class="modal fade" id="add-task" tabindex="-1" aria-hidden="true">
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
                                        <input type="text" class="form-control" id="task-name" placeholder="Task Name">
                                    </div>
                                    <div class="col-xl-6">
                                        <label for="task-id" class="form-label">Task ID</label>
                                        <input type="text" class="form-control" id="task-id" placeholder="Task ID">
                                    </div>
                                    <div class="col-xl-12">
                                        <label for="text-area" class="form-label">Task Description</label>
                                        <textarea class="form-control" id="text-area" rows="2"
                                            placeholder="Write Description"></textarea>
                                    </div>
                                    <div class="col-xl-12">
                                        <label for="text-area" class="form-label">Task Images</label>
                                        <input type="file" class="multiple-filepond" name="filepond" multiple
                                            data-allow-reorder="true" data-max-file-size="3MB" data-max-files="6">
                                    </div>
                                    <div class="col-xl-12">
                                        <label class="form-label">Assigned To</label>
                                        <select class="form-control" name="choices-multiple-remove-button1"
                                            id="choices-multiple-remove-button1" multiple>
                                            <option value="Choice 1">Angelina May</option>
                                            <option value="Choice 2">Kiara advain</option>
                                            <option value="Choice 3">Hercules Jhon</option>
                                            <option value="Choice 4">Mayor Kim</option>
                                        </select>
                                    </div>
                                    <div class="col-xl-6">
                                        <label class="form-label">Target Date</label>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-text text-muted"> <i
                                                        class="ri-calendar-line"></i> </div>
                                                <input type="text" class="form-control" id="targetDate"
                                                    placeholder="Choose date and time">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <label class="form-label">Tags</label>
                                        <select class="form-control" name="choices-multiple-remove-button2"
                                            id="choices-multiple-remove-button2" multiple>
                                            <option value="">Select Tag</option>
                                            <option value="UI/UX">UI/UX</option>
                                            <option value="Marketing">Marketing</option>
                                            <option value="Finance">Finance</option>
                                            <option value="Designing">Designing</option>
                                            <option value="Admin">Admin</option>
                                            <option value="Authentication">Authentication</option>
                                            <option value="Product">Product</option>
                                            <option value="Development">Development</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-primary">Add Task</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End::add task modal -->

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

    <!-- Filepond JS -->
    <script src="../assets/libs/filepond/filepond.min.js"></script>
    <script src="../assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js"></script>
    <script
        src="../assets/libs/filepond-plugin-image-exif-orientation/filepond-plugin-image-exif-orientation.min.js"></script>
    <script src="../assets/libs/filepond-plugin-file-validate-size/filepond-plugin-file-validate-size.min.js"></script>
    <script src="../assets/libs/filepond-plugin-file-encode/filepond-plugin-file-encode.min.js"></script>
    <script src="../assets/libs/filepond-plugin-image-edit/filepond-plugin-image-edit.min.js"></script>
    <script src="../assets/libs/filepond-plugin-file-validate-type/filepond-plugin-file-validate-type.min.js"></script>
    <script src="../assets/libs/filepond-plugin-file-validate-type/filepond-plugin-file-validate-type.min.js"></script>
    <script src="../assets/libs/filepond-plugin-image-crop/filepond-plugin-image-crop.min.js"></script>
    <script src="../assets/libs/filepond-plugin-image-resize/filepond-plugin-image-resize.min.js"></script>
    <script src="../assets/libs/filepond-plugin-image-transform/filepond-plugin-image-transform.min.js"></script>

    <!-- Flat Picker JS -->
    <script src="../assets/libs/flatpickr/flatpickr.min.js"></script>

    <!-- Dragula JS -->
    <script src="../assets/libs/dragula/dragula.min.js"></script>

    <!-- Internal Task  JS -->
    <script src="../assets/js/task-kanban-board.js"></script>

    <!-- Custom JS -->
    <script src="../assets/js/custom.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            setupEventListeners();
        });

        function setupEventListeners() {
            var deleteButtons = document.querySelectorAll('.delete-note');
            deleteButtons.forEach(function (button) {
                button.addEventListener('click', function () {
                    var noteId = this.getAttribute('data-id');
                    deleteNote(noteId);
                });
            });

            var newButton = document.getElementById('btn_newNote');
            newButton.addEventListener('click', function () {
                createNote();
            });

            var noteContents = document.querySelectorAll('.note-content');
            noteContents.forEach(function (noteContent) {
                noteContent.addEventListener('input', function(event) {
                    var noteId = this.getAttribute('data-id');
                    var pinned = this.getAttribute('data-pin');
                    updateNote(noteId, noteContent);
                });
            });

            var notePins = document.querySelectorAll('.pin-note');
            notePins.forEach(function (notePin) {
                notePin.addEventListener('click', function () {
                    var noteId = this.getAttribute('data-id');
                    updateNotePin(noteId, notePin);
                });
            });
        }

        function deleteNote(noteId) {
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function () {
                if(xhr.readyState === XMLHttpRequest.DONE) {
                    if(xhr.status === 200) {
                        console.log(xhr.responseText);
                        window.location.href = window.location.href;
                    } else {
                        console.error('Error deleting note.');
                    }
                }
            };
            xhr.open('POST', 'notes/delete_note.php');
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.send('note_id=' + noteId);
        }

        function updateNote(noteId, noteContent) {
            var content = noteContent.value;
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function () {
                if(xhr.readyState === XMLHttpRequest.DONE) {
                    if(xhr.status === 200) {
                        content = xhr.responseText;
                        noteContent.innerHTML = content;
                    } else {
                        console.error('Error Update note.');
                    }
                }
            }
            xhr.open('POST', 'notes/update_note.php');
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.send('note_id=' + noteId + '&' + 'content=' + content);
        }

        function updateNotePin(noteId, notePin) {
            var pinned = notePin.getAttribute('data-pin');
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function () {
                if(xhr.readyState === XMLHttpRequest.DONE) {
                    if(xhr.status === 200) {
                        window.location.href = window.location.href;
                    } else {
                        console.error('Error Update note.');
                    }
                }
            }
            xhr.open('POST', 'notes/update_note.php');
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            if(pinned === 'false') pinned = 'true';
            else pinned = 'false';
            console.log('note_id=' + noteId + '&' + 'pinned=' + pinned)
            xhr.send('note_id=' + noteId + '&' + 'pinned=' + pinned);
        }

        function createNote() {
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if(xhr.readyState === XMLHttpRequest.DONE) {
                    if(xhr.status === 200) {
                        console.log(xhr.responseText);
                        window.location.href = window.location.href;
                    } else {
                        console.error('Error new note.');
                    }
                }
            };

            xhr.open('POST', 'notes/create_note.php');
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.send();
        }

    </script>

</body>

</html>