<?php
ob_start();
session_start();
//$adminId=$_SESSION['aid'];
include_once("configuration/connect.php");
include_once("configuration/functions.php");
if (isset($_SESSION["usrid"])) {
    if (isLoginSessionExpired()) {
        header("Location:logout.php");
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
        header("location:index.php?msg=inf");
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
            <a href="#" class="df-logo">Giide<span>app</span></a>
        </div>
       

        <div class="navbar-right">

            <a href="login.php">Sign In</a>


        </div><!-- navbar-right -->

    </header><!-- navbar -->

    <div class="container-fluid bg-warning bg-opacity-25">
        <div class="container-md">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-md-6 col-sm-12 mt-5  ">
                    <div class="p-4 md-5 mb-4">
                        <h1 class="g_heading">Content-making for content marketers.</h1>
                        <p class="g_p">Combine your voice with an interactive feed. Create and share in minutes. Easily measure audience
                            engagement.</p>
                        <button type="button" class="btn btn-primary">Create glides for free</button>
                    </div>

                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="text-center mt-5 mb-5 ">
                        <img class="img-fluid rounded mt-5" src="gallery/Screenshot%202022-08-12%20at%205.53.07%20PM.png" style="height: 400px">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="container-md  mt-5 mb-5">
            <div class="row justify-content-center text-center">
                <div class="col-md-6 col-sm-12  mt-5 mb-5">
                    <h1 class="display-5 fw-light">As informative as a newsletter.</h1>
                    <h1 class="display-4">All in one .</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-5 mb-5">
        <div class="container-md">
            <div class="row">
                <div class="col-md-6">
                    <img src="./gallery/./feed.ddcb0868.png" class="img-fluid rounded-top" alt="">
                </div>
                <div class="col-md my-auto pl-5 pr-5">
                    <h1>Produce high quality content with limited budget.
                    </h1>
                    <h6 class="g_p">No need for special skills or production teams anymore. Giide's interactive format combines the warmth of the human voice with the added depth of a visual feed of links, pictures, videos, and more. Anyone can make one!</h6>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-5 mb-5">
        <div class="container-md">
            <div class="row">
                <div class="col-md-6 my-auto">
                    <h1>Generate content consistently.</h1>
                    <p class="g_p">Giide's simple platform allows you to create effective content in minutes, and make quick updates as needed. You bring the idea, and we'll ensure it looks good so you can finish up everything else on your plate</p>
                </div>
                <div class="col-md-6">
                    <img src="./gallery/./generate-content.d7fa6cd0.png" class="img-fluid rounded" alt="">
                </div>
            </div>
        </div>
    </div>




    <div class="container-fluid mt-5 mb-5">
        <div class="container-md">
            <div class="row">
                <div class="col-md-6">
                    <img src="./gallery/analytics.e340c660.png" class="img-fluid rounded-top" alt="">
                </div>
                <div class="col-md my-auto">
                    <h1>Measure audience interaction.
                    </h1>
                    <p class="g_p">See how users interact with your content with highly-detailed, realtime performance analytics.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-5 mb-5">
        <div class="container-md">
            <div class="row">
                <div class="col-md-6 my-auto">
                    <h1>Make everything interesting.</h1>
                    <p class="g_p">Giide's audio-visual format brings complex subjects to life and helps simplify the things it once took a long article, instructional video, or case study to explain.</p>
                </div>
                <div class="col-md-6">
                    <img src="./gallery/./make-everything-interesting.fb2a2c08.png" class="img-fluid rounded" alt="">
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid" style="background: #f06a00">
        <div id="magicCarousel" class="carousel slide my-5" data-ride="carousel">

            <!--    Carousel Indicators    -->
            <ol class="carousel-indicators">
                <li data-target="#magicCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#magicCarousel" data-slide-to="1"></li>
                <li data-target="#magicCarousel" data-slide-to="2"></li>
            </ol>

            <!--    Carousel Slider    -->
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <div class="container-md mt-5 mb-5">
                        <div class="row">
                            <div class="col-m3 mx-auto">
                                <img src="./gallery/1656938579.jpg" class="rounded-circle" alt="" width="200" height="200">
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-6 mt-5 mb-5">
                                <p class="h4 text-white">"I was really impressed with how easy it was to create a high-quality takeaway from our roundtable event. It enabled us to summarize key takeaways for attendees and reach a broader audience to raise awareness of our events."</p>
                                <hr class="w-50 p-2" style="background-color: white">
                                <p class=" text-white text-center">Andy Nathan</p>
                                <p class=" text-white text-center">Co-President at The One Club, Denver & Founder/CEO of Fortnight Collective</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="container-md mt-5 mb-5">
                        <div class="row">
                            <div class="col-m3 mx-auto">
                                <img src="./gallery/1656938579.jpg" class="rounded-circle" alt="" width="200" height="200">
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-6 mt-5 mb-5">
                                <p class="h4 text-white">"Thousands of customers use Verblio’s content creation marketplace and platform. Giide gives us a way to bring content briefs to life and rapidly build and deliver enablement content to writers, all while learning which content is most consumed and effective."</p>
                                <hr class="w-50 p-2" style="background-color: white">
                                <p class=" text-white text-center">Laura Smous</p>
                                <p class=" text-white text-center">VP of Product Marketing, Verblio</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="carousel-item">
                    <div class="container-md mt-5 mb-5">
                        <div class="row">
                            <div class="col-m3 mx-auto">
                                <img src="./gallery/1656938579.jpg" class="rounded-circle" alt="" width="200" height="200">
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-6 mt-5 mb-5">
                                <p class="h4 text-white">"We use several content platforms at Sweater, but our team has found that Giide is ideal, providing a superior format to share information to our scout network, and also to our thousands of members. Giide is faster, more economical, and delivers measurable results."</p>
                                <hr class="w-50 p-2" style="background-color: white">
                                <p class=" text-white text-center">Chad Lewkowski</p>
                                <p class=" text-white text-center">Co-Founder, President & CIO, Sweater Inc.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>



    <!-- container -->
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


    <?php include("include/footer.php"); ?>

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