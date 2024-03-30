<?php require_once "UserController.php"; ?>
<?php
$pageTitle = "Login";
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

    <div class="container">
        <div class="row justify-content-center align-items-center authentication authentication-basic h-100">
            <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-6 col-sm-8 col-12">
                <div class="card custom-card my-4">
                    <div class="card-body p-5">
                        <form action="login.php" method="POST" autocomplete="">

                            <div class="mb-3 d-flex justify-content-center">
                                <a href="index.php">
                                    <img src="../assets/images/brand-logos/desktop-logo.png" alt="logo"
                                        class="desktop-logo">
                                    <img src="../assets/images/brand-logos/desktop-dark.png" alt="logo"
                                        class="desktop-dark">
                                </a>
                            </div>
                            <p class="h5 mb-2 text-center">Sign In</p>
                            <?php
                            if (count($errors) > 0) {
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
                                <div class="col-xl-12">
                                    <label for="signin-email" class="form-label text-default">Email</label>
                                    <input type="email" name="email" class="form-control form-control-lg"
                                        id="signin-email" placeholder="Email Address" value="<?php echo $email ?>"
                                        required>
                                </div>
                                <div class="col-xl-12 mb-2">
                                    <label for="signin-password" class="form-label text-default d-block">Password
                                        <a href="reset-password-basic.php" class="float-end text-danger">Forget
                                            password?</a>
                                    </label>
                                    <div class="position-relative">
                                        <input type="password" class="form-control form-control-lg" id="signin-password"
                                            placeholder="password" required name="password">
                                        <a href="javascript:void(0);" class="show-password-button text-muted"
                                            onclick="createpassword('signin-password',this)" id="button-addon2"><i
                                                class="ri-eye-off-line align-middle"></i></a>
                                    </div>
                                    <div class="mt-2">
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
                                <div class="d-grid mt-4">
                                    <button class="btn btn-lg btn-primary" type="submit" name="login">Sign In</button>
                                </div>
                            </div>
                            <div class="text-center">
                                <p class="text-muted mt-3 mb-0">Dont have an account? <a href="register.php"
                                        class="text-primary">Sign Up</a></p>
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