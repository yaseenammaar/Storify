<?php
ob_start();
session_start();
$userId = $_SESSION['usrid'];
include_once("configuration/connect.php");
include_once("configuration/functions.php");
if (isset($_SESSION["usrid"])) {
  if (isLoginSessionExpired()) {
    header("Location:logout.php");
  }
}
$userDetail = mysqli_fetch_array(mysqli_query($con, "select * from user where id='$userId'"));
if (isset($_POST['basic'])) {
  $hidId = $_POST['hidId'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $bio = $_POST['bio'];
  $address = $_POST['address'];
  $phone = $_POST['mobile'];
  $twitter = $_POST['twitter'];
  $linkedin = $_POST['linkedin'];
  $website = $_POST['web'];
  $instagram = $_POST['instagram'];
  $facebook = $_POST['facebook'];
  $image = $_FILES['image']['tmp_name'];
  $imageName = $_FILES['image']['name'];
  if ($imageName == '') {
    $filename = $_POST['imgId'];
  } else {
    $filename = $imageName;
    $location = "assets/img/user/" . $imageName;
    move_uploaded_file($image, $location);
  }
  $qry = "update user set `name`='$name',`email_id`='$email',`contact_no`='$phone',`bio`='$bio',`photo`='$filename',`address`='$address',`twitter`='$twitter',`linkedin`='$linkedin',`website`='$website',`instagram`='$instagram',`facebook`='$facebook' where id='$hidId'";
  $exec = mysqli_query($con, $qry);
  if ($exec) {
    header('location:profile.php?msg=upd');
  } else {
    header("location:profile.php?msg=err");
  }
}
if (isset($_GET['msg']) && $_GET['msg'] != '') {
  $msg = $_GET['msg'];
  if ($msg == 'ins') {
    $class = "success";
    $msgText = '<strong>SUCCESS</strong> : Data has been saved successfull!!! ';
  } elseif ($msg == 'err') {
    $msgText = '<strong> ERROR </strong>: Oopss something goes wrong!!! ';
    $class = "danger";
  } elseif ($msg == 'dls') {
    $class = "success";
    $msgText = '<strong> SUCCESS </strong>: Data deleted successfull!!! ';
  } elseif ($msg == 'upd') {
    $class = "success";
    $msgText = '<strong> SUCCESS </strong>: Data updated successfull!!! ';
  } elseif ($msg == 'na') {
    $msgText = "This IP address is not allowed";
  } else {
    $msgText = '';
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>GiideApp</title>
<?php include('include/css.php') ?>
<link rel="stylesheet" href="assets/css/dashforge.profile.css">
<link rel="stylesheet" href="assets/css/dashforge.filemgr.css">
<link rel="stylesheet" href="assets/css/dashforge.contacts.css">
<script>
  var loadFile = function(event) {
    var image = document.getElementById('profileImg');
    image.src = URL.createObjectURL(event.target.files[0]);
  };
</script>
</head>

<body class="page-profile">
  <?php include('include/header.php'); ?>
  <div class="content content-fixed content-profile">
    <div class="container pd-x-0 pd-lg-x-10 pd-xl-x-0">
      <div class="media d-block d-lg-flex">
        <div class="profile-sidebar pd-lg-r-25">
          <div class="row">
            <div class="col-sm-3 col-md-2 col-lg ">
              <div class="avatar avatar-xxl avatar-online">
                <?php if ($userDetails['photo'] == '') { ?>
                  <img src="assets/img/user/1.png" class="rounded-circle" alt="">
                <?php } else { ?>
                  <img src="assets/img/user/<?= $userDetails['photo'] ?>" class="rounded-circle" alt="<?= $userDetails['name'] ?>">
                <?php } ?>
              </div>
            </div><!-- col -->

            <div class="col-sm-8 col-md-7 col-lg mg-t-20 mg-sm-t-0 mg-lg-t-25">
              <h5 class="mg-b-2 tx-spacing--1 "><?= $userDetail['name'] ?></h5>
              <!-- <div class="d-flex mg-b-25 mg-lg-t-25">
            <a href="#modalEditContact" data-toggle="modal" class="btn btn-sm btn-white d-flex align-items-center mg-r-5"><i data-feather="edit-2"></i><span class="d-none d-sm-inline mg-l-5"> Edit Profile</span></a>
              <button class="btn btn-xs btn-primary flex-fill mg-l-10">Invoice</button>
            </div> -->
              <p class="tx-13 tx-color-02 mg-b-25"><?= $userDetail['bio'] ?></p>

              <div class="d-flex">
                <div class="profile-skillset flex-fill">
                  <h4><a href="" class="link-01">1.4k</a></h4>
                  <label>Audio</label>
                </div>
                <div class="profile-skillset flex-fill">
                  <h4><a href="" class="link-01">2.8k</a></h4>
                  <label>Draft</label>
                </div>
                <div class="profile-skillset flex-fill">
                  <h4><a href="" class="link-01">437</a></h4>
                  <label>Publish</label>
                </div>
              </div>
            </div><!-- col -->
            <div class="col-sm-6 col-md-5 col-lg mg-t-40">
              <label class="tx-sans tx-10 tx-semibold tx-uppercase tx-color-01 tx-spacing-1 mg-b-15">Package Details</label>
              <ul class="list-unstyled profile-info-list">
                <li>Package Name:</a></li>
                <li>Date </li>
                <li>Expiry</li>
              </ul>
            </div>
            <div class="col-sm-6 col-md-5 col-lg mg-t-40">
              <label class="tx-sans tx-10 tx-semibold tx-uppercase tx-color-01 tx-spacing-1 mg-b-15">Websites &amp; Social Channel</label>
              <ul class="list-unstyled profile-info-list">
                <li><i data-feather="globe"></i> <a href=""><?= $userDetail['website'] ?></a></li>
                <li><i data-feather="linkedin"></i> <a href=""><?= $userDetail['linkedin'] ?></a></li>
                <li><i data-feather="twitter"></i> <a href=""><?= $userDetail['twitter'] ?></a></li>
                <li><i data-feather="instagram"></i> <a href=""><?= $userDetail['instagram'] ?></a></li>
                <li><i data-feather="facebook"></i> <a href=""><?= $userDetail['facebook'] ?></a></li>
              </ul>
            </div>
            <div class="col-sm-6 col-md-5 col-lg mg-t-40">
              <label class="tx-sans tx-10 tx-semibold tx-uppercase tx-color-01 tx-spacing-1 mg-b-15">Contact Information</label>
              <ul class="list-unstyled profile-info-list">
                <li><i data-feather="home"></i> <span class="tx-color-03"><?= $userDetail['address'] ?></span></li>
                <li><i data-feather="smartphone"></i> <a href=""><?= $userDetail['contact_no'] ?></a></li>
                <li><i data-feather="phone"></i> <a href=""><?= $userDetail['contact_no'] ?></a></li>
                <li><i data-feather="mail"></i> <a href=""><?= $userDetail['email_id'] ?></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="media-body mg-t-40 mg-lg-t-0 pd-lg-x-10">
          <?php if (isset($_GET['msg']) && $_GET['msg'] != '') { ?>
            <div class="alert alert-<?= $class ?> alert-dismissible fade show" role="alert">
              <?= $msgText ?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
          <?php  } ?>
          <div class="row">
            <div class="col-md-12">
              <h4>Account Setting </h4>
            </div>
          </div>
          <div class="row">


          </div>
        </div>
      </div>
    </div>
    <div class="modal fade effect-scale" id="modalEditContact" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <form action="" method="post" enctype="multipart/form-data">
            <div class="modal-body pd-20 pd-sm-30">
              <button type="button" class="close pos-absolute t-15 r-20" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>

              <h5 class="tx-18 tx-sm-20 mg-b-20">Edit Profile</h5>
              <p class="tx-13 tx-color-03 mg-b-30">You can you profile information than what you see here, such as name,contact details, address and socail media by clicking <span class="tx-color-02">Save Changes </span> button below to bring up more options.</p>

              <div class="d-sm-flex">
                <div class="mg-sm-r-30">
                  <div class="pos-relative d-inline-block mg-b-20">
                    <div class="avatar avatar-xxl">
                      <?php if ($userDetails['photo'] == '') { ?>
                        <img id="profileImg" src="assets/img/user/1.png" class="rounded-circle" alt="">
                      <?php } else { ?>
                        <img id="profileImg" src="assets/img/user/<?= $userDetails['photo'] ?>" class="rounded-circle" alt="<?= $userDetails['name'] ?>">
                      <?php } ?>
                    </div>
                    <label class="contact-edit-photo" style="cursor:pointer"><i data-feather="edit-2"></i>
                      <input type="file" name="image" onchange="loadFile(event)" id="image" value="" style="display:none">
                    </label>
                    <input type="hidden" name="hidId" value="<?= $userDetails['id'] ?>">
                    <input type="hidden" name="imgId" value="<?= $userDetails['photo'] ?>">
                  </div>
                </div><!-- col -->
                <div class="flex-fill">
                  <div class="row">
                    <div class="col-md-12">
                      <label for="">Name</label>
                      <input type="text" class="form-control" placeholder="Name" id="name" name="name" value="<?= $userDetail['name'] ?>">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                      <label for="">Contact</label>
                      <input type="text" name="mobile" id="mobile" value="<?= $userDetail['contact_no'] ?>" class="form-control">
                    </div>
                    <div class="col-md-4">
                      <label for="">Email</label>
                      <input type="email" name="email" id="email" value="<?= $userDetail['email_id'] ?>" class="form-control">
                    </div>
                    <div class="col-md-4">
                      <label for="">Website</label>
                      <input type="text" name="web" id="web" value="<?= $userDetail['website'] ?>" class="form-control">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <label for="">Address</label>
                      <textarea class="form-control" rows="2" name="address" id="address" placeholder="Add notes"><?= $userDetail['address'] ?></textarea>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <label for="">Facebook</label>
                      <input type="text" class="form-control" name="facebook" id="facebook" value="<?= $userDetail['facebook'] ?>">
                    </div>
                    <div class="col-md-6">
                      <label for="">Instagram</label>
                      <input type="text" class="form-control" name="instagram" id="instagram" value="<?= $userDetail['instagram'] ?>">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <label for="">Twitter</label>
                      <input type="text" class="form-control" name="twitter" id="twitter" value="<?= $userDetail['twitter'] ?>">
                    </div>
                    <div class="col-md-6">
                      <label for="">LinkedIn</label>
                      <input type="text" class="form-control" name="linkedin" id="linkedin" value="<?= $userDetail['linkedin'] ?>">
                    </div>
                  </div>
                </div><!-- col -->
              </div>
            </div>
            <div class="modal-footer">
              <div class="wd-100p d-flex flex-column flex-sm-row justify-content-end">
                <button type="submit" name="basic" id="basic" class="btn btn-primary mg-b-5 mg-sm-b-0">Save Changes</button>
                <button type="button" class="btn btn-secondary mg-sm-l-5" data-dismiss="modal">Cancel</button>

              </div><!-- modal-footer -->
            </div><!-- modal-content -->
          </form>
        </div><!-- modal-dialog -->
      </div><!-- modal -->
      <?php include('include/footer.php'); ?>
      <?php include('include/script.php'); ?>
</body>

</html>