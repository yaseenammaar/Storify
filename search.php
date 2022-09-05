<?php
ob_start();
session_start();
$userId=$_SESSION['usrid'];
include_once("configuration/connect.php");
include_once("configuration/functions.php");
checkIntrusion($userId);
if(isset($_SESSION["usrid"])) {
if(isLoginSessionExpired()) {
header("Location:logout.php");
}
}
$type=getUserTypeById($userId);

if (isset($_GET['fid'])|| $_GET['cpid']!='') {
  $fid=base64_decode($_GET['fid']);
  $feed=mysqli_fetch_array(mysqli_query($con,"select * from feeds where id='$fid'"));
}

if(isset($_GET['did'])&&$_GET['did']!=''){
$did=($_GET['did']);
$pid=base64_decode($did);
$fid=($_GET['fid']);
$delQry=mysqli_query($con,"delete from `chapter` where `id`='$pid'");
if($delQry){
header("location:dashboard.php?msg=dls&fid=$fid");
}else{
header("location:dashboard.php?msg=err&fid=$fid");
}
}
if (isset($_POST['createfeed'])) {
$cname=$_POST['feedname'];
$date=date('Y-m-d ');
$time=date("h:i sa");
$id=$userId;
$qury=mysqli_query($con,"insert into feeds(name,date,time,user_id,status)values('$cname','$date','$time','$id','0')");
if ($qury) {
$id=mysqli_insert_id($con);
$fid=base64_encode($id);
header("location:create-feed.php?fid=$fid");
}
}
if(isset($_GET['msg'])&&$_GET['msg']!=''){
	$msg=$_GET['msg'];
	if($msg=='ins'){
    $class="success";
		$msgText='<strong>SUCCESS</strong> : Data has been saved successfull!!! ';
	}elseif($msg=='err'){
		$msgText='<strong> ERROR </strong>: Oopss something goes wrong!!! ';
    $class="danger";
	}elseif ($msg=='dls') {
    $class="success";
    $msgText='<strong> SUCCESS </strong>: Data deleted successfull!!! ';
  }
  elseif ($msg=='upd') {
    $class="success";
    $msgText='<strong> SUCCESS </strong>: Data updated successfull!!! ';
  }
	elseif($msg=='na'){
		$msgText="This IP address is not allowed";
	}else{
		$msgText='';
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
  </head>
  <body class="page-profile">
<!-- navbar -->
<?php include('include/header.php'); ?>
<?php $pkg=getPackageDetailsById($userDetails['package']);

?>
    <div class="content content-fixed">
      <div class="container pd-x-0 pd-lg-x-10 pd-xl-x-0">
        <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-30">
          <div>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb breadcrumb-style1 mg-b-10">
                <li class="breadcrumb-item"><a href="#">Search</a></li>
                <!-- <li class="breadcrumb-item active" aria-current="page">Helpdesk Management</li> -->
              </ol>
            </nav>
            <h4 class="mg-b-0 tx-spacing--1">Search result for <?=$_POST['search']?></h4>
          </div>
        </div>
        <?php if (isset($_GET['msg'])&&$_GET['msg']!='') {?>
        <div class="alert alert-<?=$class?> alert-dismissible fade show" role="alert">
          <?=$msgText?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
      <?php  } ?>
        <div class="row row-xs">
          <div class="col-lg-8">
              <div class="row">
<?php
$search=$_POST['search'];
$cqry=mysqli_query($con,"select * from chapter where name like '%".$search."%' and user_id='$userId'  order by id desc ");
  $num=mysqli_num_rows($cqry);
  if($num>0){
    while ($chapter=mysqli_fetch_array($cqry)) {
      $sl++;
      $cid=base64_encode($chapter['id']);
      if($chapter['image']==''){
        $image='assets/img/c1.png';
      }else{
        $image=$chapter['image'];
      }
      ?>
<div class="col-xl-4 col-md-6 mg-b-10">
  <div class="card h-100 card-blog card-plain border">
    <div class="position-relative">
      <div><a class="d-block shadow-xl border-radius-xl">

        <img src="<?= $image?>" alt="<?= $chapter['name']?>" class="img-fluid shadow border-radius-xl" style="height:230px;">
      </a></div>
    </div>
    <div class="card-body px-1 pb-0">
      <div class="media media-folder">
                  <div class="media-body">
                    <h6><a href="" class="link-02">  <span class="text-gradient text-dark mb-2 text-sm">#<?= $sl?> <?= $chapter['name']?></span></a></h6>
                    <?php if($chapter['author']!='') {?>
                    <span><?=$chapter['author']?></span>
                    <?php }else{ ?>
                     <span><?=$userDetails['name']?></span>
                    <?php } ?>
                  </div>
                  <div class="dropdown-file">
                    <a href="" class="dropdown-link" data-toggle="dropdown" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg></a>
                    <div class="dropdown-menu dropdown-menu-right" x-placement="top-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-142px, -224px, 0px);">
                        <?php if ($chapter['audio_id']!=''&& $chapter['audio_file']!==''&& $chapter['content']!='') {?>
                        <a target="_blank" href="linkcontent.php?cpid=<?= $cid?> " class="dropdown-item rename"><i data-feather="edit"></i>Edit</a>
                      <?php }else{ ?>
                        <a target="_blank" href="create-feed.php?cpid=<?= $cid?> " class="dropdown-item rename"><i data-feather="edit"></i>Edit</a>
                      <?php } ?>
                      <?php  if($chapter['status']=='1'){ ?>
                      <a target="_blank" href="feed.php?cpid=<?=base64_encode($chapter['id'])?>&fid=<?=$chapter['feed_id']?>"  class="dropdown-item share"><i data-feather="play-circle"></i>Play Giide</a>
                      <a href="finished.php?cpid=<?=base64_encode($chapter['id'])?>&fid=<?=$chapter['feed_id']?>" target="_blank" class="dropdown-item share"><i data-feather="share"></i>Share</a>
                      <?php } ?>
                     <a href="dashboard.php?did=<?=base64_encode($chapter['id'])?>&fid=<?=$chapter['feed_id']?>" class="dropdown-item delete" style="color:red"><i data-feather="trash" style="color:red"></i>Delete</a>
                    </div>
                  </div><!-- dropdown -->
                </div>
                <div class=" d-flex  justify-content-between ">
                  <div>
                    <?= getChapterStatus($chapter['status'])?>
                  </div>
                  <div class="avatar-group mt-2">
                    <span class="d-block tx-12 tx-color-03"><?= date('M d, Y', strtotime($chapter['date'])) ?></span>
                  </div>
                </div>
      </div>
    </div>
  </div>
<?php    }  }?>

</div>
      </div>
        </div><!-- row -->
      </div><!-- container -->
    </div><!-- content -->
<?php include('include/footer.php'); ?>
<?php include('include/script.php'); ?>
<script src="assets/js/dashforge.filemgr.js"></script>
</body>
</html>
