<?php
ob_start();
session_start();
$userId = $_SESSION['usrid'];
include_once("configuration/connect.php");
include_once("configuration/functions.php");
checkIntrusion($userId);
if (isset($_SESSION["usrid"])) {
  if (isLoginSessionExpired()) {
    header("Location:logout.php");
  }
}
$type = getUserTypeById($userId);

if (isset($_GET['fid']) || $_GET['cpid'] != '') {
  $fid = base64_decode($_GET['fid']);
  $feed = mysqli_fetch_array(mysqli_query($con, "select * from feeds where id='$fid'"));
}

if (isset($_GET['did']) && $_GET['did'] != '') {
  $did = ($_GET['did']);
  $pid = base64_decode($did);
  $fid = ($_GET['fid']);
  $delQry = mysqli_query($con, "delete from `chapter` where `id`='$pid'");
  $delQry1 = mysqli_query($con, "delete from `feeds` where `id`='$fid'");
  if ($delQry) {
    header("location:dashboard.php?msg=dls&fid=$fid");
  } else {
    header("location:dashboard.php?msg=err&fid=$fid");
  }
}
if (isset($_POST['createfeed'])) {
  $cname = $_POST['feedname'];
  $date = date('Y-m-d ');
  $time = date("h:i sa");
  $id = $userId;
  $pkg = $_POST['pkg'];
  $feed = $_POST['fed'];
  if ($feed < $pkg) {
    $qury = mysqli_query($con, "insert into feeds(name,date,time,user_id,status)values('$cname','$date','$time','$id','0')");
    if ($qury) {
      $id = mysqli_insert_id($con);
      $fid = base64_encode($id);
      $_SESSION['cpid'] = $fid;
      header("location:create-feed.php?fid=$fid");
    }
  } else {
    header("location:dasboard.php?msg=lmt");
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
  } elseif ($msg == 'lmt') {
    $class = "danger";
    $msgText = '<strong> Error </strong>: You have cross you limit ';
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
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>GiideApp</title>
  <?php include('include/css.php') ?>
  <link rel="stylesheet" href="assets/css/dashforge.filemgr.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
</head>

<body class="page-profile">
  <!-- navbar -->
  <?php include('include/header.php'); ?>
  <?php
  $feed = getFeedOfUser($userId);
  ?>
  <div class="spinner-wrapper">
<div class="spinner"><h1>Welcome to <span class="spinnerg1">Giide</span></h1></div>
</div>

<style>
  .spinner-wrapper {
position: fixed;
top: 0;
left: 0;
right: 0;
bottom: 0;
background-color: #ff6347;
z-index: 999999;
}
.spinner{
  position: absolute;
top: 48%;
left: 48%;
}
.spinnerg1{
  font-size:45px;
}
</style>
  <div class="content content-fixed ">
    <div class="container pd-x-0 pd-lg-x-10 pd-xl-x-0">
      <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-30">
        <div>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-style1 mg-b-10">
              
              <!-- <li class="breadcrumb-item active" aria-current="page">Helpdesk Management</li> -->
            </ol>
          </nav>
          <h4 class="mg-b-0 tx-spacing--1">Welcome to Dashboard</h4>
        </div>
        <div class="d-none d-md-block">
          <a class="btn btn-sm pd-x-15 btn-primary btn-uppercase mg-l-5" href="#createChapterModal" class="btn btn-dark" data-toggle="modal" data-animation="effect-rotate-bottom"><i data-feather="plus" class="wd-10 mg-r-5"></i> Create New Giide</a>
        </div>
      </div>
      <?php if (isset($_GET['msg']) && $_GET['msg'] != '') { ?>
        <div class="alert alert-<?= $class ?> alert-dismissible fade show" role="alert">
          <?= $msgText ?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
      <?php  } ?>
      <div class="row row-xs">
        <div class="col-lg-8">
          <div class="row">
            <div class="col-xl-4 col-md-6 my-3">
              <div class="card h-100 card-plain border shadow-sm p-3 mb-5 bg-white rounded">
                <div class="card-body d-flex flex-column justify-content-center text-center">
                  <a data-toggle="modal" href="#createChapterModal" data-animation="effect-rotate-bottom">
                    <i data-feather="plus" class="text-secondary mb-3"></i>
                    <h5 class=" text-secondary"> Create New Giide </h5>
                  </a>
                </div>
              </div>
            </div>
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
                <div class="col-xl-4 col-md-6 mg-b-10 p-3">
                  <div class="card h-100 card-blog card-plain border shadow  rounded ">
                    <a class="d-block shadow-xl border-radius-xl">

                      <img class="card-img-top" src="<?= $image ?>" alt="<?= $chapter['name'] ?>" class="img-fluid shadow border-radius-xl" style="height:230px;">
                    </a>
                    <div class="card-body px-1 pb-0">
                      <div class="media media-folder">
                        <div class="media-body">
                          <h6 class="g_p1 font-weight-bold text-gradient text-dark mb-2"><a href="feed.php?cpid=<?= base64_encode($chapter['id']) ?>&fid=<?= $chapter['feed_id'] ?>" class="link-02">#<?= $sl ?> <?= $chapter['name'] ?></a></h6>
                          <?php if ($chapter['author'] != '') { ?>
                            <span><?= $chapter['author'] ?></span>
                          <?php } else { ?>
                            <span><?= $userDetails['name'] ?></span>
                          <?php } ?>
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
                      <div class=" d-flex  justify-content-between p-2">
                        <div>
                          <?= getChapterStatus($chapter['status']) ?>
                        </div>
                        <div class="avatar-group mt-2">
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
        <div class="col-lg-4 mg-t-10 mg-lg-t-0">
          <div class="row row-xs">
            <div class="col-md-6 col-lg-6 col-sm-12 mg-b-10">
              <div class="card card-body align-items-center">
                <div class="media d-block d-sm-flex align-items-center">
                  <div class="d-inline-block pos-relative">
                    <span class="peity-donut" data-peity='{ "fill": ["#ff6b00","#001c4f"], "height": 110, "width": 110, "innerRadius": 46 }'><?= $feed[0] ?>,<?= $pkg['feed_limit'] - $feed[0] ?></span>
                    <div class="pos-absolute a-0 d-flex flex-column align-items-center justify-content-center">
                      <h3 class="tx-rubik tx-spacing--1 mg-b-0"><?= $feed[0] ?><span class="tx-9 tx-semibold tx-sans tx-color-03 tx-uppercase">/<?= $pkg['feed_limit'] ?></span></h3>
                      <span class="tx-9 tx-semibold tx-sans tx-color-03 tx-uppercase">Total Feed</span>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- col -->
            <div class="col-md-6 col-lg-6 col-sm-12 mg-b-10">
              <div class="card card-body align-items-center">
                <div class="media d-block d-sm-flex align-items-center">
                  <div class="d-inline-block pos-relative">
                    <span class="peity-donut" data-peity='{ "fill": ["#ff6b00","#001c4f"], "height": 110, "width": 110, "innerRadius": 46 }'><?= getCompleteChapterOfUser($userId) ?>,<?= $pkg['chapter_limit'] - getCompleteChapterOfUser($userId) ?></span>
                    <div class="pos-absolute a-0 d-flex flex-column align-items-center justify-content-center">
                      <h3 class="tx-rubik tx-spacing--1 mg-b-0"><?= getCompleteChapterOfUser($userId) ?><span class="tx-9 tx-semibold tx-sans tx-color-03 tx-uppercase">/<?= $pkg['chapter_limit'] ?></span></h3>
                      <span class="tx-9 tx-semibold tx-sans tx-color-03 tx-uppercase">Chapter</span>
                    </div>
                  </div>
                </div><!-- media -->
              </div>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-12 mg-b-10 ">
              <div class="card card-body align-items-center">
                <div class="media d-block d-sm-flex align-items-center">
                  <div class="d-inline-block pos-relative">
                    <span class="peity-donut" data-peity='{ "fill": ["#69b2f8","#e5e9f2"], "height": 110, "width": 110, "innerRadius": 46 }'><?= getDraftChapter($userId) ?>,<?= $pkg['chapter_limit'] - getDraftChapter($userId) ?></span>
                    <div class="pos-absolute a-0 d-flex flex-column align-items-center justify-content-center">
                      <h3 class="tx-rubik tx-spacing--1 mg-b-0"><?= getDraftChapter($userId) ?><span class="tx-9 tx-semibold tx-sans tx-color-03 tx-uppercase">/<?= $pkg['chapter_limit'] ?></span></h3>
                      <span class="tx-9 tx-semibold tx-sans tx-color-03 tx-uppercase">Draft Chapter</span>
                    </div>
                  </div>
                </div><!-- media -->
              </div>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-12 mg-b-10">
              <div class="card card-body align-items-center">
                <div class="media d-block d-sm-flex align-items-center">
                  <div class="d-inline-block pos-relative">
                    <span class="peity-donut" data-peity='{ "fill": ["#69b2f8","#e5e9f2"], "height": 110, "width": 110, "innerRadius": 46 }'><?= getTotalAudio($userId) ?>,<?= $pkg['audio_limit'] - getTotalAudio($userId) ?></span>
                    <div class="pos-absolute a-0 d-flex flex-column align-items-center justify-content-center">
                      <h3 class="tx-rubik tx-spacing--1 mg-b-0"><?= getTotalAudio($userId) ?><span class="tx-9 tx-semibold tx-sans tx-color-03 tx-uppercase">/<?= $pkg['audio_limit'] ?></span></h3>
                      <span class="tx-9 tx-semibold tx-sans tx-color-03 tx-uppercase">Total Audio</span>
                    </div>
                  </div>
                </div><!-- media -->
              </div>
            </div>
          </div><!-- row -->
        </div><!-- col -->
      </div><!-- row -->
    </div><!-- container -->
  </div><!-- content -->
  <?php include('include/footer.php'); ?>
  <?php include('include/script.php'); ?>

  <script>
$(document).ready(function() {
//Preloader
preloaderFadeOutTime = 1000;
function hidePreloader() {
var preloader = $('.spinner-wrapper');
preloader.fadeOut(preloaderFadeOutTime);
}
hidePreloader();
});
</script>
  <script src="assets/js/dashforge.filemgr.js"></script>
  <div class="modal fade" id="createChapterModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content tx-14">
        <div class="modal-header">
          <h6 class="modal-title" id="exampleModalLabel">Create New Feed</h6>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form id="dfs" name="form" action="cfeed.php" method="post">
          <div class="modal-body">
            <div class="form-group">
              <label for="formGroupExampleInput" class="d-block">Giide Name</label>
              <input type="hidden" name="fed" value="<?= $feed[0] ?>">
              <input type="hidden" name="pkg" value="<?= $pkg['feed_limit'] ?>">
              <input type="text" id="feedname" name="feedname" class="form-control" placeholder="Enter your giide name">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary tx-13" data-dismiss="modal">Close</button>
            <button type="submit" name="createfeed" class="btn btn-primary tx-13">Save</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>