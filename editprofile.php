<?php
ob_start();
session_start();
$userId=$_SESSION['usrid'];
include_once("configuration/connect.php");
include_once("configuration/functions.php");
if(isset($_SESSION["usrid"])) {
if(isLoginSessionExpired()) {
header("Location:logout.php");
}
}
$userDetail=mysqli_fetch_array(mysqli_query($con,"select * from user where id='$userId'"));
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>GiideApp</title>
<?php include('include/css.php') ?>
<link rel="stylesheet" href="assets/css/dashforge.profile.css">
<link rel="stylesheet" href="assets/css/dashforge.filemgr.css">
</head>
<body class="page-profile">
<?php include('include/header.php'); ?>
<div class="content content-fixed content-profile">
  <div class="container pd-x-0 pd-lg-x-10 pd-xl-x-0">
    <div class="media d-block d-lg-flex">
      <div class="profile-sidebar pd-lg-r-25">
        <div class="row">
          <div class="col-sm-3 col-md-2 col-lg">
            <div class="avatar avatar-xxl avatar-online"><img src="https://via.placeholder.com/500" class="rounded-circle" alt=""></div>
          </div><!-- col -->
          <div class="col-sm-8 col-md-7 col-lg mg-t-20 mg-sm-t-0 mg-lg-t-25">
            <h5 class="mg-b-2 tx-spacing--1"><?=$userDetail['name']?></h5>
              <p class="tx-13 tx-color-02 mg-b-25"><?=$userDetail['bio']?></p>
            <div class="d-flex">
              <div class="profile-skillset flex-fill">
                <h4><a href="" class="link-01">1.4k</a></h4>
                <label>Stars</label>
              </div>
              <div class="profile-skillset flex-fill">
                <h4><a href="" class="link-01">2.8k</a></h4>
                <label>Followers</label>
              </div>
              <div class="profile-skillset flex-fill">
                <h4><a href="" class="link-01">437</a></h4>
                <label>Following</label>
              </div>
            </div>
          </div><!-- col -->
          <div class="col-sm-6 col-md-5 col-lg mg-t-40">
            <label class="tx-sans tx-10 tx-semibold tx-uppercase tx-color-01 tx-spacing-1 mg-b-15">Websites &amp; Social Channel</label>
            <ul class="list-unstyled profile-info-list">
              <li><i data-feather="globe"></i> <a href=""><?=$userDetail['website']?></a></li>
              <li><i data-feather="linkedin"></i> <a href=""><?=$userDetail['linkedin']?></a></li>
              <li><i data-feather="twitter"></i> <a href=""><?=$userDetail['twitter']?></a></li>
              <li><i data-feather="instagram"></i> <a href=""><?=$userDetail['instagram']?></a></li>
              <li><i data-feather="facebook"></i> <a href=""><?=$userDetail['facebook']?></a></li>
            </ul>
          </div>
          <div class="col-sm-6 col-md-5 col-lg mg-t-40">
            <label class="tx-sans tx-10 tx-semibold tx-uppercase tx-color-01 tx-spacing-1 mg-b-15">Contact Information</label>
            <ul class="list-unstyled profile-info-list">
              <li><i data-feather="home"></i> <span class="tx-color-03"><?=$userDetail['address']?></span></li>
              <li><i data-feather="smartphone"></i> <a href=""><?=$userDetail['contact_no']?></a></li>
              <li><i data-feather="phone"></i> <a href=""><?=$userDetail['contact_no']?></a></li>
              <li><i data-feather="mail"></i> <a href=""><?=$userDetail['email_id']?></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="media-body mg-t-40 mg-lg-t-0 pd-lg-x-10">
        <div class="row">
          <div class="col-md-12">
              <h4>Edit Your Profile </h4>
          </div>
        </div>
        <div class="row">

        </div>
      </div>
    </div>
  </div>
</div>
<?php include('include/footer.php'); ?>
<?php include('include/script.php'); ?>
</body>
</html>
