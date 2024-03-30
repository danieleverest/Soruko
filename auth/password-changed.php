<?php require_once "UserController.php"; ?>

<?php
$pageTitle = "Password Changed";
ob_start();
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
                        <?php
                        if (isset($_SESSION['info']) && !empty($_SESSION['info'])) {
                            ?>
                            <div class="alert alert-success text-center">
                                <?php echo $_SESSION['info']; ?>
                            </div>
                            <?php
                            // Clear the info message after displaying it
                            unset($_SESSION['info']);
                        } else {
                            // Redirect to login page or handle the case where $_SESSION['info'] is not set
                            header('Location: login.php');
                            exit();
                        }
                        ?>
                        <form action="login.php" method="POST">
                            <div class="d-grid mt-4">
                                <input class="form-control button btn btn-lg btn-primary" type="submit" name="login-now"
                                    value="Login Now">
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