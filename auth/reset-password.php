<?php require_once "UserController.php"; ?>

<?php
$pageTitle = "Reset Password";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-vertical-style="overlay" data-theme-mode="light"
    data-header-styles="light" data-menu-styles="light" data-toggled="close">

<head>

    <?php include '../components/externalcss.php'; ?>
    <title>
        <?php echo $pageTitle; ?>
    </title>
    <!-- Favicon -->
    <link rel="icon" href="../assets/images/brand-logos/favicon.ico" type="image/x-icon">

    <!-- Main Theme Js -->
    <script src="../assets/js/authentication-main.js"></script>

    <!-- Bootstrap Css -->
    <link id="style" href="../assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Style Css -->
    <link href="../assets/css/styles.css" rel="stylesheet">

    <!-- Icons Css -->
    <link href="../assets/css/icons.css" rel="stylesheet">


</head>

<body class="authentication-background">

    <!-- Start Switcher -->
    <?php include '../components/switcher.php'; ?>

    <!-- End Switcher -->

    <div class="container-lg">
        <div class="row justify-content-center align-items-center authentication authentication-basic h-100">
            <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-6 col-sm-8 col-12">
                <div class="card custom-card my-4">
                    <div class="card-body p-5">
                        <form action="reset-password.php" method="POST" autocomplete="off">

                            <div class="mb-3 d-flex justify-content-center">
                                <a href="index.php">
                                    <img src="../assets/images/brand-logos/desktop-logo.png" alt="logo"
                                        class="desktop-logo">
                                    <img src="../assets/images/brand-logos/desktop-dark.png" alt="logo"
                                        class="desktop-dark">
                                </a>
                            </div>
                            <p class="h5 mb-2 text-center">Reset Password</p>
                            <?php
                            if (isset($_SESSION['info']) && !empty($_SESSION['info'])) {
                                ?>
                                <div class="alert alert-success text-center">
                                    <?php echo $_SESSION['info']; ?>
                                </div>
                                <?php
                                unset($_SESSION['info']); // Clear info message after displaying
                            }
                            ?>
                            <?php
                            if (isset($_SESSION['errors']) && count($_SESSION['errors']) > 0) {
                                $errors = $_SESSION['errors'];
                                unset($_SESSION['errors']); // Clear errors after displaying
                                ?>
                                <div class="alert alert-danger text-center">
                                    <?php
                                    foreach ($errors as $showerror) {
                                        echo $showerror;
                                    }
                                    ?>
                                </div>
                                <?php
                            }
                            ?>
                            <div class="row gy-3">
                                <!-- <div class="col-xl-12">
                                    <label for="reset-password" class="form-label text-default">Current Password</label>
                                    <div class="position-relative">
                                        <input type="password" class="form-control form-control-lg" id="reset-password"
                                            placeholder="current password">
                                        <a href="javascript:void(0);" class="show-password-button text-muted"
                                            onclick="createpassword('reset-password',this)" id="button-addon2"><i
                                                class="ri-eye-off-line align-middle"></i></a>
                                    </div>
                                </div> -->
                                <div class="col-xl-12">
                                    <label for="reset-newpassword" name="password" class="form-label text-default">New
                                        Password</label>
                                    <div class="position-relative">
                                        <input type="password" class="form-control form-control-lg"
                                            id="reset-newpassword" name="password" placeholder="new password" required>
                                        <a href="javascript:void(0);" class="show-password-button text-muted"
                                            onclick="createpassword('reset-newpassword',this)" id="button-addon21"><i
                                                class="ri-eye-off-line align-middle"></i></a>
                                    </div>
                                </div>
                                <div class="col-xl-12 mb-2">
                                    <label for="reset-confirmpassword" class="form-label text-default">Confirm
                                        Password</label>
                                    <div class="position-relative">
                                        <input type="password" class="form-control form-control-lg"
                                            id="reset-confirmpassword" name="cpassword" placeholder="confirm password"
                                            required>
                                        <a href="javascript:void(0);" class="show-password-button text-muted"
                                            onclick="createpassword('reset-confirmpassword',this)"
                                            id="button-addon22"><i class="ri-eye-off-line align-middle"></i></a>
                                    </div>
                                    <div class="mt-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                            <label class="form-check-label text-muted fw-normal" for="defaultCheck1">
                                                Remember password ?
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-grid mt-4">
                                <input class="form-control button btn btn-lg btn-primary" type="submit"
                                    name="reset-password" value="Change">
                            </div>
                            <div class="text-center">
                                <p class="text-muted mt-3">Already have an account? <a href="login.php"
                                        class="text-primary">Sign In</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="../assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Show Password JS -->
    <script src="../assets/js/show-password.js"></script>

</body>

</html>