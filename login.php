<?php
ob_start();
session_start();
//$adminId=$_SESSION['aid'];
$userId = $_SESSION['usrid'];
include_once("configuration/connect.php");
include_once("configuration/functions.php");
//checkIntrusion($userId);
if (isset($_SESSION["usrid"])) {
    if (isLoginSessionExpired()) {
        header("Location:logout.php");
    } else{
        header("Location:dashboard.php");
    }
}
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $apwd = md5($_POST['password']);
    $admres = mysqli_query($con, "select * from `user` where `email_id`='$email' and `password`='$apwd' and is_active='1' ");
    $numrows = mysqli_num_rows($admres);
    if ($numrows > 0) {
        $adm = mysqli_fetch_row($admres);
        $aid = $adm[0];
        $_SESSION['usrid'] = $aid;
        header("location:dashboard.php");
    } else {
        header("location:login.php?msg=inf");
    }
}
if (isset($_GET['msg']) && $_GET['msg'] != '') {
    $msg = $_GET['msg'];
    if ($msg == 'inf') {
        $class = "danger";
        $msgText = "Wrong Username Or Password";
    } elseif ($msg == 'cpt') {
        $class = "danger";
        $msgText = "Wrong captcha";
    } elseif ($msg == 'exp') {
        $class = "danger";
        $msgText = "Your Session is expired login again";
    } elseif ($msg == 'na') {
        $class = "danger";
        $msgText = "This IP address is not allowed";
    } elseif ($msg == 'chng') {
        $class = "success";
        $msgText = "Your password has been changed";
    } else {
        $msgText = '';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>GiideApp</title>
    <link href="lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/dashforge.css">
    <link rel="stylesheet" href="assets/css/dashforge.auth.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
</head>

<body>

    <header class="navbar navbar-header navbar-header-fixed">
        <a href="#" id="mainMenuOpen" class="burger-menu"><i data-feather="menu"></i></a>
        <div class="navbar-brand">
            <a href="/" class="df-logo">Giide<span>app</span></a>
        </div>
        <div class="navbar-right">

        <a href="login.php">Sign In</a>
           

        </div><!-- navbar-right -->
       
    </header><!-- navbar -->

   
    <div class=" content content-fixed content-auth">
        <div class="container">
            <div class="media align-items-stretch justify-content-center ht-100p pos-relative">
                <div class="media-body align-items-center d-none d-lg-flex">
                    <div class="mx-wd-600">
                        <img src="assets/img/1.png" class="img-fluid" alt="">
                    </div>

                </div><!-- media-body -->
                <div class="sign-wrapper mg-lg-l-50 mg-xl-l-60">
                    <div class="wd-100p">
                        <h3 class="tx-color-01 mg-b-5">Sign In</h3>
                        <p class="tx-color-03 tx-16 mg-b-40">Welcome back! Please signin to continue.</p>
                        <?php if (isset($_GET['msg'])) { ?>
                            <div class="alert alert-<?= $class ?> alert-dismissible fade show" role="alert">
                                <?= $msgText ?></div>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    </div>
                <?php } ?>
                <form action="" role="form" method="post" data-parsley-validate>
                    <div class="form-group">
                        <label>Email address</label>
                        <label>
                            <input type="email" name="email" class="form-control" placeholder="yourname@yourmail.com" required>
                        </label>
                    </div>
                    <div class="form-group">
                        <div class="d-flex justify-content-between mg-b-5">
                            <label class="mg-b-0-f">Password</label>
                            <a href="forgotpassword.php" class="tx-13">Forgot password?</a>
                        </div>
                        <label>
                            <input required type="password" name="password" class="form-control" placeholder="Enter your password">
                        </label>
                    </div>
                    <button type="submit" name="submit" class="btn btn-brand-02 btn-block">Sign
                        In</button>
                </form>
                <div class="divider-text">or</div>
                <div class="tx-13 mg-t-20 tx-center">Don't have an account? <a href="price.php">Create an
                        Account</a></div>
                </div>
            </div><!-- sign-wrapper -->
        </div><!-- media -->
    </div><!-- container -->
    <!--                <footer class="footer">-->
    <!--                    <div class="container-fluid">-->
    <!--                        <div class="row">-->
    <!--                            <div class="col-md-4">-->
    <!--                                <div>-->
    <!--                                    <span>&copy; 2022 Giide App. </span>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div>-->
    <!--                        <span>&copy; 2022 Giide App. </span>-->
    <!---->
    <!--                    </div>-->
    <!--                    <div>-->
    <!--                        <nav class="nav">-->
    <!--                            <a href="#" class="nav-link">Terms & Condition</a>-->
    <!--                            <a href="#" class="nav-link">Privacy Policy</a>-->
    <!--                            <a href="#" class="nav-link">Get Help</a>-->
    <!--                        </nav>-->
    <!--                    </div>-->
    <!--                </footer>-->


    <?php include("/include/footer.php");?>


        <script src="lib/jquery/jquery.min.js"></script>
        <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="lib/feather-icons/feather.min.js"></script>
        <script src="lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>
        <script src="assets/js/dashforge.js"></script>
        <script src="assets/js/dashforge.sampledata.js"></script>

        <!-- append theme customizer -->
        <script src="lib/js-cookie/js.cookie.js"></script>
        <script src="assets/js/dashforge.settings.js"></script>
        <script src="assets/js/parsley.min.js"></script>
        <script>
            $(function() {
                'use script'

                window.darkMode = function() {
                    $('.btn-white').addClass('btn-dark').removeClass('btn-white');
                }

                window.lightMode = function() {
                    $('.btn-dark').addClass('btn-white').removeClass('btn-dark');
                }

                let hasMode = Cookies.get('df-mode');
                if (hasMode === 'dark') {
                    darkMode();
                } else {
                    lightMode();
                }
            })
        </script>
</body>

</html>