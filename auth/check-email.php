<?php require_once "UserController.php"; ?>

<?php
$pageTitle = "Check Email";
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
                        <form action="check-email.php" method="POST" autocomplete="off">

                            <div class="mb-3 d-flex justify-content-center">
                                <a href="index.php">
                                    <img src="../assets/images/brand-logos/desktop-logo.png" alt="logo"
                                        class="desktop-logo">
                                    <img src="../assets/images/brand-logos/desktop-dark.png" alt="logo"
                                        class="desktop-dark">
                                </a>
                            </div>
                            <h2 class="text-center">Forgot Password</h2>
                            <p class="text-center">Enter your email address</p>
                            <?php
                            if (count($errors) > 0) {
                                ?>
                                <div class="alert alert-danger text-center">
                                    <?php
                                    foreach ($errors as $error) {
                                        echo $error;
                                    }
                                    ?>
                                </div>
                                <?php
                            }
                            ?>
                            <div class="row gy-3">
                                <div class="col-xl-12">
                                    <label for="check-email" class="form-label text-default">Email</label>
                                    <input type="email" name="email" class="form-control form-control-lg"
                                        id="check-email" placeholder="Email Address" required>
                                </div>
                            </div>
                            <div class="d-grid mt-4">
                                <input class="form-control button btn btn-lg btn-primary" type="submit"
                                    name="check-email" value="Change">
                            </div>
                            <div class="text-center">
                                <p class="text-muted mt-3"><a href="login.php"
                                        class="text-primary">Back</a>
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