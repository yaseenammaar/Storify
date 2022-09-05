<?php
ob_start();
session_start();
$userId = $_SESSION['usrid'];
include_once("configuration/connect.php");
include_once("configuration/functions.php");
checkIntrusion($userId); /*fixing the profile login issue**/
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
if (isset($_POST['password_submit'])) {
  $hidId = $_POST['hidId'];
  $password = md5($_POST['newpwd']);
  $pwd = $_POST['newpwd'];
  $cnfpwd = $_POST['cnfpwd'];
  if ($pwd == $cnfpwd) {
    $qry = "update user set `password`='$password' where id='$hidId'";
    $exec = mysqli_query($con, $qry);
  }
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
<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
<script>
  var loadFile = function(event) {
    var image = document.getElementById('profileImg');
    image.src = URL.createObjectURL(event.target.files[0]);
  };
</script>
</head>

<body class="page-profile">
  <?php include('include/header.php');
  $feed = getFeedOfUser($userId);
  ?>
  <div class="content content-fixed content-profile">
    <div class="container pd-x-0 pd-lg-x-10 pd-xl-x-0">
      <div class="media d-block d-lg-flex">
        <div class="profile-sidebar pd-lg-r-25">
          <div class="row">
            <div class="col-sm-3 col-md-2 col-lg text-center">
              <div class="d-flex justify-content-center">
                <div class="avatar avatar-xxl avatar-online ">
                  <?php if ($userDetails['photo'] == '') { ?>
                    <img src="assets/img/user/1.png" class="rounded-circle" alt="">
                  <?php } else { ?>
                    <img src="assets/img/user/<?= $userDetails['photo'] ?>" class="rounded-circle" alt="<?= $userDetails['name'] ?>">
                  <?php } ?>
                  <h4 class="mg-b-2 tx-spacing--1 "><?= $userDetail['name'] ?></h4>
                  <p class="tx-13 tx-color-02 mg-b-25 mb-2"><?= $userDetail['bio'] ?></p>
                </div>
              </div>
            </div><!-- col -->

            <div class="col-sm-8 col-md-7 col-lg mg-t-20 mg-sm-t-0 mg-lg-t-25">
              <div class="d-flex my-4">
                <div class="profile-skillset flex-fill text-center">
                  <h4><a href="" class="link-01"><?= $feed[0]; ?></a></h4>
                  <label>Feed</label>
                </div>
                <div class="profile-skillset flex-fill text-center">
                  <h4><a href="" class="link-01"><?= getCompleteChapterOfUser($userId) ?></a></h4>
                  <label>Chapter</label>
                </div>
                <div class="profile-skillset flex-fill text-center">
                  <h4><a href="" class="link-01"><?= getTotalAudio($userId) ?></a></h4>
                  <label>Audio</label>
                </div>
              </div>

              <div class="d-flex mg-b-25 mg-lg-t-25 ">
                <a href="#modalEditContact" data-toggle="modal" class="btn btn-xs btn-white d-flex align-items-center mg-r-5"><i data-feather="edit-2"></i><span class="d-none d-sm-inline mg-l-5"> Edit Profile</span></a>
                <a href="#modalPassword" data-toggle="modal" class="btn btn-xs btn-white flex-fill mg-l-10"><i data-feather="edit-2"></i><span class="d-none d-sm-inline mg-l-5"> Password</span></a>

              </div>
            </div><!-- col -->

            <div class="col-sm-12 col-md-12 col-lg-12 mg-t-5">
              <div class="d-flex mb-2">
                <a class="flex-fill text-center" href="<?= $userDetail['facebook'] ?>"><i data-feather="facebook"></i> </a>
                <a class="flex-fill text-center" href="<?= $userDetail['website'] ?>"><i data-feather="globe"></i></a>
                <a class="flex-fill text-center" href="<?= $userDetail['linkedin'] ?>"><i data-feather="linkedin"></i> </a>
                <a class="flex-fill text-center" href="<?= $userDetail['twitter'] ?> "><i data-feather="twitter"></i> </a>
                <a class="flex-fill text-center" href="<?= $userDetail['instagram'] ?>"><i data-feather="instagram"></i> </a>
              </div>
            </div>
            <div class="col-md-12 col-lg mg-t-10 ">
              <label class="tx-sans tx-10 tx-semibold tx-uppercase tx-color-01 tx-spacing-1 mg-b-15">Package Details</label>
              <ul class="list-unstyled profile-info-list">
                <li>Package Name: <?= $pkg['name']; ?></li>
                <li>Date: <?= $userDetails['created_date']; ?></li>
                <li>Expiry <?= $userDetails['expiry']; ?></li>
              </ul>
            </div>

            <div class="col-md-5 col-lg mg-t-40 ">
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
          <div class="row row-xs">
            <div class="col-md-12">
              <h4>Your all giides </h4>
            </div>
          </div>
          <div class="row row-xs">
            <?php $fid = $feed['id'];
            $sl = 0;
            $cqry = mysqli_query($con, "select * from chapter where user_id='$userId'  order by id desc ");
            $num = mysqli_num_rows($cqry);
            if ($num > 0) {
              while ($chapter = mysqli_fetch_array($cqry)) {
                $sl++;
                $cid = base64_encode($chapter['id']);
                if ($chapter['image'] == '') {
                  $image = 'assets/img/c1.png';
                } else {
                  $image = $chapter['image'];
                }
            ?>
                <div class="col-xl-4 col-md-6 mg-b-20 p-3">
                  <div class="card h-100 card-blog card-plain border shadow  rounded ">
                    <a class="d-block shadow-xl border-radius-xl">
                      <img class="card-img-top" src="<?= $image ?>" alt="<?= $chapter['name'] ?>" class="img-fluid shadow border-radius-xl">
                    </a>
                    <div class="card-body px-1 pb-0 p-3">
                      <div class="media media-folder">
                        <div class="media-body">
                          <h4 class="g_p1 font-weight-bold text-gradient text-dark mb-2"><a href="feed.php?cpid=<?= base64_encode($chapter['id']) ?>&fid=<?= $chapter['feed_id'] ?>" class="link-02"> #<?= $sl ?> <?= $chapter['name'] ?></a></h4>
                          <span>Sanjeev Hazari</span>
                        </div>

                        <div class="dropdown-file">
                          <a href="" class="dropdown-link" data-toggle="dropdown" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                              <circle cx="12" cy="12" r="1"></circle>
                              <circle cx="12" cy="5" r="1"></circle>
                              <circle cx="12" cy="19" r="1"></circle>
                            </svg></a>
                          <div class="dropdown-menu dropdown-menu-right" x-placement="top-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-142px, -224px, 0px);">
                            <?php if ($chapter['audio_id'] != '' && $chapter['audio_file'] !== '' && $chapter['content'] != '') { ?>
                              <a target="_blank" href="linkcontent.php?cpid=<?= $cid ?> " class="dropdown-item rename"><i data-feather="edit"></i>Edit</a>
                            <?php } else { ?>
                              <a target="_blank" href="create-feed.php?cpid=<?= $cid ?> " class="dropdown-item rename"><i data-feather="edit"></i>Edit</a>
                            <?php } ?>
                            <?php if ($chapter['status'] == '1') { ?>
                              <a target="_blank" href="feed.php?cpid=<?= base64_encode($chapter['id']) ?>&fid=<?= $chapter['feed_id'] ?>" class="dropdown-item share"><i data-feather="play-circle"></i>Play Giide</a>
                              <a href="finished.php?cpid=<?= base64_encode($chapter['id']) ?>&fid=<?= $chapter['feed_id'] ?>" target="_blank" class="dropdown-item share"><i data-feather="share"></i>Share</a>
                            <?php } ?>
                            <a href="dashboard.php?did=<?= base64_encode($chapter['id']) ?>&fid=<?= $chapter['feed_id'] ?>" class="dropdown-item delete" style="color:red"><i data-feather="trash" style="color:red"></i>Delete</a>
                          </div>
                        </div><!-- dropdown -->
                      </div>
                      <div class="d-flex  justify-content-between mt-2">
                        <div>
                          <?= getChapterStatus($chapter['status']) ?>
                        </div>
                        <div class="avatar-group ">
                          <span class="d-block tx-12 tx-color-03"><?= date('M d, Y', strtotime($chapter['date'])) ?></span>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            <?php    }
            } ?>
          </div>

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
  </div>
  <div class="modal fade effect-scale" id="modalPassword" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <form action="" method="post" enctype="multipart/form-data">
          <div class="modal-body pd-20 pd-sm-30">
            <button type="button" class="close pos-absolute t-15 r-20" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>

            <h5 class="tx-18 tx-sm-20 mg-b-20">Change Password</h5>
            <p class="tx-13 tx-color-03 mg-b-30">You can you change your current password by clicking <span class="tx-color-02">Save Changes </span> button below to bring up more options.</p>

            <div class="row">
              <div class="col-md-12">
                <label class="">New password</label>
                <input id="newpwd" name="newpwd" class="form-control" type="password" placeholder="New password">
                <input type="hidden" name="hidId" value="<?= $userDetails['id'] ?>">
              </div>
              <div class="col-md-12">
                <label class="">Confirm password</label>
                <input id="cnfpwd" name="cnfpwd" class="form-control" type="password" placeholder="Confirm password" onfocus="focused(this)" onfocusout="defocused(this)">

              </div>
            </div>


            <h5 class="mt-2">Password requirements</h5>
            <p class="text-muted mb-2">
              Please follow this guide for a strong password:
            </p>
            <ul class="text-muted ps-4 mb-0 float-start">
              <li>
                <span class="tx-12 tx-color-03 mg-b-0">One special characters</span>
              </li>
              <li>
                <span class="tx-12 tx-color-03 mg-b-0">Min 6 characters</span>
              </li>
              <li>
                <span class="tx-12 tx-color-03 mg-b-0">One number (2 are recommended)</span>
              </li>
              <li>
                <span class="tx-12 tx-color-03 mg-b-0">Change it often</span>
              </li>
            </ul>




          </div>

          <div class="modal-footer">
            <div class="wd-100p d-flex flex-column flex-sm-row justify-content-end">
              <button type="submit" name="password_submit" id="password_submit" class="btn btn-primary mg-b-5 mg-sm-b-0">Save Changes</button>
              <button type="button" class="btn btn-secondary mg-sm-l-5" data-dismiss="modal">Cancel</button>

            </div><!-- modal-footer -->
          </div><!-- modal-content -->
        </form>
      </div>
    </div><!-- modal-dialog -->
  </div><!-- modal -->

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
  <?php include('include/footer.php'); ?>
  <?php include('include/script.php'); ?>
</body>

</html>