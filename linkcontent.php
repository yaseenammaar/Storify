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
if (isset($_GET['cpid'])&&$_GET['cpid']!='') {
  $cid=base64_decode($_GET['cpid']);
  $qry=mysqli_query($con,"SELECT * FROM `chapter` where id=$cid");
  $fetch=mysqli_fetch_array($qry);
}
if (isset($_GET['did'])&&$_GET['did']!='') {
  $cpid=($_GET['cpid']);
  $did=base64_decode($_GET['did']);
  $table=base64_decode($_GET['table']);
  $qry=mysqli_query($con,"delete  FROM $table where id=$did");
  header("Location:linkcontent.php?cpid=$cpid");
}
if(isset($_POST['publishBtn'])){
  $cname=$_POST['chaptername'];
  $authorname=$_POST['authorname'];
    $desp=$_POST['desp'];
      $cover=$_POST['cover'];
      $brand=$_POST['brand'];
      $uname=$_POST['username'];
      $password=$_POST['password'];
  $cid=$_POST['hidChapId'];
  $fid=$_POST['hidFeedId'];
  $qry="UPDATE `chapter` SET `name`='$cname',`image`='$cover',`color`='',`brand`='$brand',`desp`='$desp',`author`='$authorname',`status`='1',`username`='$uname',`password`='$password' WHERE id='$cid'";
  $qry1="update feeds set status='1' where id='$fid'";
  $exec=mysqli_query($con,$qry);
  $exec1=mysqli_query($con,$qry1);
  $chapid=base64_encode($cid);
  header("location:finished.php?cpid=$chapid");

}
if (isset($_POST['highlight_Btn'])) {
$txt=$_POST['highlight_txt'];
$chapterId=$_POST['hidChapId'];
$cId=explode('#',$_POST['hidContentId']);
$contentId=$cId[0];
$_ttime=explode('.',$cId[1]);
$var = ltrim($_ttime[1], '0');
$time=$_ttime[0].'.'.$var;
$feedId=$_POST['hidFeedId'];
$qry="INSERT INTO `feed_highlight`(`ctime`, `content_id`, `chapter_id`, `feed_id`, `highlight`, `user_id`)
VALUES ('$time','$contentId','$chapterId','$feedId','$txt','$userId')";
mysqli_query($con,$qry);
$cid=base64_encode($chapterId);
header("location:linkcontent.php?cpid=$cid");
}

if (isset($_POST['quote_Btn'])) {
$quote=$_POST['quote'];
$author=$_POST['author'];
$chapterId=$_POST['hidChapId'];
$cId=explode('#',$_POST['hidContentId']);
$contentId=$cId[0];
$_ttime=explode('.',$cId[1]);
$var = ltrim($_ttime[1], '0');
$time=$_ttime[0].'.'.$var;
$feedId=$_POST['hidFeedId'];
$qry="INSERT INTO `feed_quote`(`ctime`,`content_id`, `chapter_id`, `feed_id`, `quote`,`author`, `user_id`)
VALUES ('$time','$contentId','$chapterId','$feedId','$quote','$author','$userId')";
mysqli_query($con,$qry);
$cid=base64_encode($chapterId);
header("location:linkcontent.php?cpid=$cid");
}
if (isset($_POST['defination_Btn'])) {
$defination=$_POST['defination_txt'];
$chapterId=$_POST['hidChapId'];
$cId=explode('#',$_POST['hidContentId']);
$contentId=$cId[0];
$_ttime=explode('.',$cId[1]);
$var = ltrim($_ttime[1], '0');
$time=$_ttime[0].'.'.$var;
$feedId=$_POST['hidFeedId'];
$qry="INSERT INTO `feed_defination`(`ctime`,`content_id`, `chapter_id`, `feed_id`, `defination`, `user_id`)
VALUES ('$time','$contentId','$chapterId','$feedId','$defination','$userId')";
mysqli_query($con,$qry);
$cid=base64_encode($chapterId);
header("location:linkcontent.php?cpid=$cid");
}
if (isset($_POST['image_Btn'])) {
$caption=$_POST['caption'];
$chapterId=$_POST['hidChapId'];
$imageName=$_POST['cover'];
$cId=explode('#',$_POST['hidContentId']);
$contentId=$cId[0];
$_ttime=explode('.',$cId[1]);
$var = ltrim($_ttime[1], '0');
$time=$_ttime[0].'.'.$var;
$feedId=$_POST['hidFeedId'];
if($imageName==''){
  $filename=$baseurl.'assets/img/user.png';
}else{
  $filename=$imageName;
}
$qry="INSERT INTO `feed_image`(`ctime`,`content_id`, `chapter_id`, `feed_id`, `image`,`caption`, `user_id`)
VALUES ('$time','$contentId','$chapterId','$feedId','$filename','$caption','$userId')";
mysqli_query($con,$qry);
$cid=base64_encode($chapterId);
header("location:linkcontent.php?cpid=$cid");
}
if (isset($_POST['profileBtn'])) {
$name=$_POST['name'];
$title=$_POST['title'];
$twitter=$_POST['twitter'];
$linkedIn=$_POST['linkedIn'];
$chapterId=$_POST['hidChapId'];
$cId=explode('#',$_POST['hidContentId']);
$contentId=$cId[0];
$_ttime=explode('.',$cId[1]);
$var = ltrim($_ttime[1], '0');
$time=$_ttime[0].'.'.$var;
$feedId=$_POST['hidFeedId'];
$imageName=$_POST['cover'];
if($imageName==''){
  $filename=$baseurl.'assets/img/user.png';
}else{
  $filename=$imageName;
}
$qry="INSERT INTO `feed_profile`(`ctime`, `content_id`, `chapter_id`, `feed_id`, `name`,`title`,`twitter`,`linkedin`,`image`, `user_id`)
VALUES ('$time','$contentId','$chapterId','$feedId','$name','$title','$twitter','$linkedIn','$filename','$userId')";
mysqli_query($con,$qry);
$cid=base64_encode($chapterId);
header("location:linkcontent.php?cpid=$cid");
}
if (isset($_POST['urlBtn'])) {
$source=$_POST['source'];
$urltitle=$_POST['urltitle'];
$url=$_POST['url'];
$chapterId=$_POST['hidChapId'];
$cId=explode('#',$_POST['hidContentId']);
$contentId=$cId[0];
$_ttime=explode('.',$cId[1]);
$var = ltrim($_ttime[1], '0');
$time=$_ttime[0].'.'.$var;
$feedId=$_POST['hidFeedId'];
$imageName=$_POST['cover'];
if($imageName==''){
  $filename=$baseurl.'assets\img\user.png';
}else{
  $filename=$imageName;
  $location="assets/img/feed_url/".$imageName;
  move_uploaded_file($image,$location);
}
$qry="INSERT INTO `feed_url`(`ctime`, `content_id`, `chapter_id`, `feed_id`, `url`,`title`,`source`,`image`, `user_id`)
VALUES ('$time','$contentId','$chapterId','$feedId','$url','$urltitle','$source','$filename','$userId')";
mysqli_query($con,$qry);
$cid=base64_encode($chapterId);
header("location:linkcontent.php?cpid=$cid");
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
<style media="screen">

.img-wrap {
  position: relative;

}
.img-wrap .close {
  position: absolute;
  top: 2px;
  right: 2px;
  z-index: 100;

}
.feedBox {
  position: relative;


}
.feedBox img{
  max-width: 100%;
  height: auto;
}

.remove-feed {
display: none;
position: absolute;
top: -10px;
right: -10px;
border-radius: 10em;
padding: 2px 6px 3px;
text-decoration: none;
font: 700 21px/20px sans-serif;
background: #555;
border: 3px solid #fff;
color: #FFF;
box-shadow: 0 2px 6px rgba(0,0,0,0.5), inset 0 2px 4px rgba(0,0,0,0.3);
  text-shadow: 0 1px 2px rgba(0,0,0,0.5);
  -webkit-transition: background 0.5s;
  transition: background 0.5s;
}
.remove-feed:hover {
 background: #E54E4E;
  padding: 3px 7px 5px;
  top: -11px;
right: -11px;
}
.remove-feed:active {
 background: #E54E4E;
  top: -10px;
right: -11px;
}
</style>
  </head>
  <body class="page-profile">
<!-- navbar -->
<?php include('include/header.php'); ?>
    <div class="content content-fixed">
      <div class="container pd-x-0 pd-lg-x-10 pd-xl-x-0">
        <div class="row row-xs">
          <div class="col-lg-9">
            <div class="row row-xs">
              <div class="col-md-12 ">
                <ul class="steps">
                  <li class="step-item complete">
                    <a href="#" class="step-link">
                      <span class="step-number">1</span>
                      <span class="step-title">Record & Upload</span>
                    </a>
                  </li>
                  <li class="step-item active">
                    <a href="#" class="step-link">
                      <span class="step-number">2</span>
                      <span class="step-title">Link Content</span>
                    </a>
                  </li>
                  <li class="step-item disabled">
                    <a href="#" class="step-link">
                      <span class="step-number">3</span>
                      <span class="step-title">Publish & Share</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="row row-xs">
              <div class="col-md-12 mg-t-20">
                <div class="alert alert-primary tx-13 text-center" >
                    Click on a word below to link feedcard content to your audio.
                    <!-- <input type="text" id="hidFeedId" name="hidFeedId" value="7">
                    <input type="text" id="hidChapId" name="hidChapId" value="10"> -->
                </div>
              </div>
            </div>
            <div class="row row-xs">
              <div class="col-md-12">
                <div class="card">
          <div class="card-header ">
            <div class="d-lg-flex">
              <div>
                <h5 class="mb-0"><?=$fetch['name'] ?></h5>
                <p class="text-sm mb-0">
                  Audio content after transcribing.
                </p>
              </div>
                  <div class="">
                    <div class="">
                       <span id="aplay" onclick="audio_hit()" class="btn btn-primary btn-icon pulse" style="cursor:pointer"><i data-feather="play-circle"></i></span>
                       <span id="apause" onclick="audio_hit2()" class="btn btn-secondary btn-icon" style="display:none;cursor:pointer" ><i data-feather="pause-circle"></i></span>
                       <audio id="amp" style="display:none;" preload="auto" loop="false" class="w-100" controls><source src="audio/<?= $fetch['audio_file']?>" type="audio/mp3"></audio>
                  </div>
                  </div>
                </div>
              </div>
          <div class="card-body">
            <div class="text-area">
              <div class="text-area-select">
                <?php
                    $data=json_decode($fetch['content'], true);
                    foreach ($data  as  $value) {
                      $url=checkUrl($value['i'],$fetch['id']);
                      $quote=checkQuote($value['i'],$fetch['id']);
                      $high=checkHighlightTxt($value['i'],$fetch['id']);
                      $def=checkDefination($value['i'],$fetch['id']);
                      $image=checkImage($value['i'],$fetch['id']);
                      $profile=checkProfile($value['i'],$fetch['id']);
                      $id=$value['i'].'#'.$value['s'];
                      ?>
                    <?php if ($url==0&&$quote==0&&$high==0&&$def==0&&$image==0&&$profile==0){ ?>
                      <span id="<?=$id?>" onclick="feedPopup(this.id)" class="inner-text " data-backdrop="static" data-keyboard="false"  style="width:auto;" draggable="false"><?=$value['t']?></span>
                      <div style="display:inline;"></div>
                    <?php }else{ ?>
                   <span id="<?=$id?>"  class="inner-text activeText" data-backdrop="static" data-keyboard="false"  style="cursor:pointers;width:auto;" draggable="false"><?=$value['t']?></span>
                   <div style="display:inline;"></div>
                 <?php }} ?>

              </div>
            </div>
              <div class="row">
                <div class="d-lg-flex  col-12">
                  <button class="btn btn-light mb-0 js-btn-prev" type="button" title="Prev">Prev</button>
                  <a href="publish.php?cpid=<?=base64_encode($cid)?>"><button class="btn btn-dark ms-auto mb-0 js-btn-next"  type="button" title="Next">Next</button></a>
                </div>
              </div>
          </div>
        </div>
              </div>
            </div>
            </div>
          <div class="col-lg-3">
            <div class="row row-xs">
              <div class="col-md-12 bg-gray-200">
            <p  id="pa1"></p>
            <?php $chapterId=$fetch['id']; ?>
            <?php $urlQry=mysqli_query($con,"select * from feed_url where chapter_id='$chapterId'") ;
            $quoteQry=mysqli_query($con,"select * from feed_quote where chapter_id='$chapterId'");
            $highlightQry=mysqli_query($con,"select * from feed_highlight where chapter_id='$chapterId'");
            $definationQry=mysqli_query($con,"select * from feed_defination where chapter_id='$chapterId'");
            $imageQry=mysqli_query($con,"select * from feed_image where chapter_id='$chapterId'");
            $profielQry=mysqli_query($con,"select * from feed_profile where chapter_id='$chapterId'");
            ?>
            <?php while($urlFetch=mysqli_fetch_array($urlQry)){ ?>
              <div class="border p-2 d-flex mb-2 bg-white feedBox">
              <div class="flex-shrink-0">
                <img  alt="Image placeholder" class="avatar rounded-circle" src="<?= $urlFetch['image']?>">
              </div>
              <div class="flex-grow-1 ms-3">
                <h6  class="h5 mt-0"><?= $urlFetch['title']?></h6>
                <p  class="text-sm"><?= $urlFetch['source']?></p>
                <div class="d-flex">

                </div>
              </div>
              <a class="remove-feed" href="linkcontent.php?did=<?=base64_encode($urlFetch['id'])?>  &cpid=<?=base64_encode($fetch['id'])?>&table=<?=base64_encode('feed_url')?>" style="display: inline;">&#215;</a>
            </div>
            <?php } ?>
                <?php while($quoteFetch=mysqli_fetch_array($quoteQry)){ ?>
              <div class="border p-2 quote mb-2 feedBox">
                  <p><?= $quoteFetch['quote']?></p>
                  <p style="text-align:right"><?= $quoteFetch['author']?></p>
                  <a class="remove-feed" href="linkcontent.php?did=<?=base64_encode($quoteFetch['id'])?>  &cpid=<?=base64_encode($fetch['id'])?>&table=<?=base64_encode('feed_quote')?>" style="display: inline;">&#215;</a>
              </div>
            <?php } ?>
                <?php while($highFetch=mysqli_fetch_array($highlightQry)){ ?>
              <div class="border p-2 highlight mb-2 feedBox">
                  <span><?= $highFetch['highlight']?></span>
                      <a class="remove-feed" href="linkcontent.php?did=<?=base64_encode($highFetch['id'])?>  &cpid=<?=base64_encode($fetch['id'])?>&table=<?=base64_encode('feed_highlight')?>" style="display: inline;">&#215;</a>
              </div>
            <?php } ?>
              <?php while($defFetch=mysqli_fetch_array($definationQry)){ ?>
              <div class="border p-2 defination mb-2 feedBox">
                  <p><?=$defFetch['defination']?></p>
                  <a class="remove-feed" href="linkcontent.php?did=<?=base64_encode($defFetch['id'])?>  &cpid=<?=base64_encode($fetch['id'])?>&table=<?=base64_encode('feed_defination')?>" style="display: inline;">&#215;</a>
              </div>
              <?php } ?>
              <?php while($imgFetch=mysqli_fetch_array($imageQry)){ ?>
                <div class="image mb-2 feedBox">
                      <img  alt="Image placeholder" class="img-fluid shadow" src="<?=$imgFetch['image']?>">
                      <p id=""><?=$imgFetch['caption']?></p>
                      <a class="remove-feed" href="linkcontent.php?did=<?=base64_encode($imgFetch['id'])?>  &cpid=<?=base64_encode($fetch['id'])?>&table=<?=base64_encode('feed_image')?>" style="display: inline;">&#215;</a>
                </div>
              <?php } ?>
                <?php while($profileFetch=mysqli_fetch_array($profielQry)){ ?>
                  <div class="border p-2 d-flex mb-2 bg-white feedBox">
                      <div class="avatar avatar-xxl">
                        <img alt="Image placeholder" class=" rounded-circle" src="<?=$profileFetch['image']?>">
                      </div>
                      <div class="flex-grow-1 ms-3">
                        <h6 class="h5 mt-0"><?=$profileFetch['name']?></h6>
                        <p  class="text-sm"><?=$profileFetch['title']?></p>
                        <div class="d-flex">
                          <?php if ($profileFetch['twitter']!=='') {?>
                            <div>
                              <a href="<?=$profileFetch['twitter']?>"><i  class="fab fa-twitter cursor-pointer opacity-6"></i></a>
                            </div>
                            <?php   } ?>
                            <?php if ($profileFetch['linkedin']!=='') {?>
                              <div  class="ml-2">
                                <a href="<?=$profileFetch['linkedin']?>"><i  class="fab  fa-linkedin cursor-pointer opacity-6"></i></a>
                              </div>
                              <?php   } ?>
                        </div>
                      </div>
<a class="remove-feed" href="linkcontent.php?did=<?=base64_encode($profileFetch['id'])?>  &cpid=<?=base64_encode($fetch['id'])?>&table=<?=base64_encode('feed_profile')?>" style="display: inline;">&#215;</a>
                    </div>
              <?php } ?>
            </div>
            </div><!-- row -->
          </div><!-- col -->
        </div><!-- row -->
      </div><!-- container -->
    </div><!-- content -->
<?php include('include/footer.php'); ?>
<?php include('include/script.php'); ?>

<div id="RecordApp" class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
<div class="modal-dialog modal- modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h6 class="modal-title" id="modal-title-default">Add Feed Card</h6>
            <button type="button" class="close" data-dismiss="modal">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-12">
              <div class="media align-items-stretch">
            <ul class="nav nav-pills mb-3 justify-content-center align-items-center"  id="myTab4" role="tablist">
              <li class="nav-item active pt-2">
                  <a class="nav-link text-body " data-toggle="tab" role="tab" aria-controls="preview" aria-selected="true" href="#defination">

                  <span class="text-sm">Text</span>
                </a>
              </li>
              <li class="nav-item pt-2">
                <a class="nav-link text-body " data-toggle="tab" role="tab" aria-controls="preview" aria-selected="true" href="#highlight">
                  <span class="text-sm">Highlight</span>
                </a>
              </li>
              <?php if ($userDetails['package']!=='11'){ ?>


              <li class="nav-item pt-2">
                <a class="nav-link " data-toggle="tab" role="tab" aria-controls="preview" aria-selected="true" href="#url">
                  URL
                </a>
              </li>
              <li class="nav-item pt-2">
                <a class="nav-link text-body " data-toggle="tab" role="tab" aria-controls="preview" aria-selected="true" href="#quote">
                  <span class="text-sm"> Quote</span>
                </a>
              </li>
              <li class="nav-item pt-2">
                <a class="nav-link text-body " data-toggle="tab" role="tab" aria-controls="preview" aria-selected="true" href="#imagecard">
                  <span class="text-sm">Image</span>
                </a>
              </li>
              <li class="nav-item pt-2">
                <a class="nav-link text-body " data-toggle="tab" href="#profile" role="tab" aria-controls="preview" aria-selected="true">
                  <span class="text-sm">Profile</span>
                </a>
              </li>
            <?php } ?>
            </ul>

          </div>  <!-- media-body -->

          <div class="media-body">
              <div class="tab-content bd bd-gray-300 bd-l-0 pd-20" id="myTabContent4">
                <div class="tab-pane fade active" role="tabpanel" aria-labelledby="defination-tab"  id="defination">
                    <form class="" id="defForm" name="defForm" method="post">
                      <input id="hidChapId" type="hidden" name="hidChapId" value="<?=$fetch['id']?>">
                      <input id="hidFeedId" type="hidden" name="hidFeedId" value="<?=$fetch['feed_id']?>">
                      <input id="hidContentId" type="hidden" name="hidContentId" class="hidContentId"  value="">
                  <div class="row ">
                    <div class="col-12">
                      <label class="form-label">Defination Text</label>
                      <div class="input-group">
                        <textarea name="defination_txt" id="defination_txt" class="form-control" rows="4" cols="80"></textarea>
                      </div>
                    </div>
                    <div class="col-12 p-3 ">
                      <div class="border p-2 defination mb-5">
                          <span id="def">hidden</span>
                      </div class="my-5">
                        <button id="defination_Btn" name="defination_Btn" class="btn btn-dark right-bottom " type="submit" title="Next">Next</button>
                    </div>
                  </div>
                  </form>
                </div>
                <div class="tab-pane fade " role="tabpanel" aria-labelledby="highlight-tab"  id="highlight">
                    <form class="" id="highlightForm" name="highlightForm" method="post">
                      <input id="hidChapId" type="hidden" name="hidChapId" value="<?=$fetch['id']?>">
                      <input id="hidFeedId" type="hidden" name="hidFeedId" value="<?=$fetch['feed_id']?>">
                      <input id="hidContentId" type="hidden" name="hidContentId" class="hidContentId"  value="">
                  <div class="row  ">
                    <div class="col-6 ">
                      <label class="form-label">Highlight Text</label>
                      <div class="input-group">
                        <textarea name="highlight_txt" id="highlight_txt" class="form-control" rows="4" cols="80"></textarea>
                      </div>
                    </div>
                    <div class="col-6 p-3 ">
                      <div class="border p-2 highlight mb-2">
                          <span id="high"></span>
                      </div>
                        <button name="highlight_Btn" id="highlight_Btn" class="btn btn-dark right-bottom" type="submit" title="Next">Next</button>
                    </div>
                  </div>
                </form>
                </div>
                  <div class="  tab-pane fade " role="tabpanel" aria-labelledby="url-tab"   id="url">
                      <form class="" id="urlForm" name="urlForm"  method="post" enctype="multipart/form-data">
                        <input id="hidChapId" type="hidden" name="hidChapId" value="<?=$fetch['id']?>">
                        <input id="hidFeedId" type="hidden" name="hidFeedId" value="<?=$fetch['feed_id']?>">
                        <input id="hidContentId" type="hidden" name="hidContentId" class="hidContentId" value="">
                          <input type="hidden" id="cover1" name="cover" value="">
                        <div class="row  ">
                          <div class="col-6 ">
                            <label class="form-label">Url</label>
                            <div class="input-group">
                              <input id="url" name="url" class="form-control" value="" type="text" placeholder="http://google.com" required="required" onfocus="focused(this)" onfocusout="defocused(this)">
                            </div>
                            <label class="form-label">Title</label>
                            <div class="input-group">
                              <input id="urltitle" name="urltitle" class="form-control" value="" type="text" placeholder="Google" required="required" onfocus="focused(this)" onfocusout="defocused(this)">
                            </div>
                            <label class="form-label">Source</label>
                            <div class="input-group">
                              <input id="source" name="source" class="form-control" value="" type="text" placeholder="Alec" required="required" onfocus="focused(this)" onfocusout="defocused(this)">
                            </div>
                            <label class="form-label">Custom Image</label>
                            <div class="input-group">
                                <a  href="#modal1" data-toggle="modal" class="btn btn-dark btn-icon">Select Image</a>

                            </div>
                          </div>
                          <div class="col-6 ">
                            <div class="border p-2 d-flex mb-2 bg-white">
                                <div class="flex-shrink-0">
                                  <img id="imgUrlHolder" alt="Image placeholder" class="avatar rounded-circle" src="assets/img/image.png">
                                </div>
                                <div class="flex-grow-1 ms-3">
                                  <h6 id="uTitle" class="h5 mt-0"></h6>
                                  <p id="uSource" class="text-sm"></p>
                                  <div class="d-flex">
                                  </div>
                                </div>
                              </div>
                              <button id="urlBtn" name="urlBtn" class="btn btn-dark right-bottom" type="submit" title="Next">Next</button>
                          </div>
                        </div>
                    </form>
                  </div>
                  <div class="tab-pane fade " role="tabpanel" aria-labelledby="quote-tab"  id="quote">
                      <form class="" name="quoteForm" id="quoteForm" method="post">
                        <input id="hidChapId" type="hidden" name="hidChapId" value="<?=$fetch['id']?>">
                        <input id="hidFeedId" type="hidden" name="hidFeedId" value="<?=$fetch['feed_id']?>">
                        <input id="hidContentId" type="hidden" name="hidContentId" class="hidContentId"  value="">
                        <div class="row  ">
                          <div class="col-6 ">
                        <label class="form-label">Quote</label>
                        <div class="input-group">
                          <textarea name="quote" id="quote"  class="form-control" rows="4" cols="80"></textarea>
                        </div>
                        <label class="form-label">Author(Optional)</label>
                        <div class="input-group">
                          <input id="author" name="author" class="form-control" value="" type="text" placeholder="Alex" required="required" onfocus="focused(this)" onfocusout="defocused(this)">
                        </div>
                      </div>
                      <div class="col-6 p-3 ">
                        <div class="border p-2 quote mb-2">
                            <p id="qot"></p>
                            <p id="aut" style="text-align:right"></p>
                        </div>
                          <button name="quote_Btn" id="quote_Btn" class="btn btn-dark right-bottom" type="submit" title="Next">Next</button>
                      </div>
                    </div>
                    </form>
                  </div>
                  <div class="tab-pane fade " role="tabpanel" aria-labelledby="image-tab"  id="imagecard">
                      <h6>Add Image Card</h6>
                        <form class="" name="imageForm" id="imageForm"  method="post" enctype="multipart/form-data">
                          <input id="hidChapId" type="hidden" name="hidChapId" value="<?=$fetch['id']?>">
                          <input id="hidFeedId" type="hidden" name="hidFeedId" value="<?=$fetch['feed_id']?>">
                          <input id="hidContentId" type="hidden" name="hidContentId" class="hidContentId"  value="">
                            <input type="hidden"  id="cover2" name="cover" value="">
                            <div class="row  ">
                              <div class="col-6 ">
                              <label class="form-label">Custom Image</label>
                              <div class="input-group">
                                <a  href="#modal1" data-toggle="modal" class="btn btn-dark btn-icon">Select Image</a>

                              </div>
                              <label class="form-label">Caption(Optional)</label>
                              <div class="input-group">
                                <input id="caption" name="caption" class="form-control" value="" type="text" placeholder="Alex" required="required" onfocus="focused(this)" onfocusout="defocused(this)">
                                      </div>
                              </div>
                              <div class="col-6 p-3 ">
                                <div class="border p-2 image mg-b-30">
                                      <img id="imgHolder" alt="Image placeholder" class="img-thumbnail shadow" src="assets/img/user.png">
                                      <p class="mg-t-10" style="text-align:center" id="imgCaption"></p>
                                </div>
                                  <button id="image_Btn" name="image_Btn" class="btn btn-dark right-bottom" type="submit" title="Next">Next</button>

                                </div>
                        </form>
                    </div>
                  </div>
                  <div class="tab-pane fade " role="tabpanel" aria-labelledby="profile-tab"  id="profile">
                      <h6>Add Profile Card</h6>
                      <form name="profileForm" id="profileForm" enctype="multipart/form-data" method="post">
                        <input id="hidChapId" type="hidden" name="hidChapId" value="<?=$fetch['id']?>">
                        <input id="hidFeedId" type="hidden" name="hidFeedId" value="<?=$fetch['feed_id']?>">
                        <input id="hidContentId" type="hidden" name="hidContentId" class="hidContentId" value="">
                        <input type="hidden" id="cover3" name="cover" value="">

                    <div class="row  ">
                      <div class="col-6 ">
                        <label class="form-label">Custom Image</label>
                        <div class="input-group">
                          <a  href="#modal1" data-toggle="modal" class="btn btn-dark btn-icon">Select Image</a>

                        </div>
                        <label class="form-label">Name</label>
                        <div class="input-group">
                          <input id="name" name="name" class="form-control" value="" type="text" placeholder="Alex" required="required" onfocus="focused(this)" onfocusout="defocused(this)">
                        </div>
                        <label class="form-label">Expertise Or Title</label>
                        <div class="input-group">
                          <input id="title" name="title" class="form-control" value="" type="text" placeholder="Google" required="required" onfocus="focused(this)" onfocusout="defocused(this)">
                        </div>
                        <label class="form-label">Twitter</label>
                        <div class="input-group">
                          <input id="twitter" name="twitter" class="form-control" value="" type="text" placeholder="Alec" required="required" onfocus="focused(this)" onfocusout="defocused(this)">
                        </div><label class="form-label">LinkedIn</label>
                        <div class="input-group">
                          <input id="linkedIn" name="linkedIn" class="form-control" value="" type="text" placeholder="Alec" required="required" onfocus="focused(this)" onfocusout="defocused(this)">
                        </div>
                      </div>
                      <div class="col-6 ">

                        <div class="border p-2 d-flex mb-2 bg-white">
                            <div class="flex-shrink-0">
                              <img id="imgProfileHolder" alt="Image placeholder" class="avatar rounded-circle" src="assets/img/feed_profile/team-1.jpg">
                            </div>
                            <div class="flex-grow-1 ms-3">
                              <h6 id="pName" class="h5 mt-0"></h6>
                              <p id="pTitle" class="text-sm"></p>
                              <div class="d-flex">
                                <div>

                                  <i id="tid" style="display:none" class="fab fa-twitter cursor-pointer opacity-6"></i>
                                </div>

                                <div class="ml-2">
                                  <i id="lid" style="display:none" class="fab fa-linkedin  cursor-pointer opacity-6"></i>
                                </div>

                              </div>
                            </div>
                          </div>
                          <button id="profileBtn" name="profileBtn" class="btn btn-dark right-bottom" type="submit" title="Next">Next</button>

                      </div>
                      </div>
                    </form>
                  </div>
              </div>
            </div>


          </div>
        </div>
    </div>
</div>
</div>
<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
<div class="modal-content" style="background-color:#fff">
<div class="modal-body">
<?php include("imagemodal.php") ?>
<div class="modal-footer">
<button class="btn btn-secondary btn-sm" type="button" data-dismiss="modal">Cancel</button>
</div>
</div>
</div>
</div>
</div>
<script type="text/javascript">
var pDiv = document.getElementById('pa1');
// $(document).ready(function(){
//   var a=33;
//   $.ajax({url:"getTranscriptFile.php",type:"GET",data: { id: a},success:function(b){
//   console.log(b);
//    console.log(b.subtitle[0]['s']);
//   $("#amp").on(
//     "timeupdate",
//     function(event){
//       var ct=this.currentTime.toString().split('.')[0];
//       var ctime=this.currentTime.toFixed(1);
//       //console.log(this.currentTime.toFixed(1)+" "+b.subtitle['s']);
//       //  pDiv.innerHTML =this.currentTime;
//       onTrackedVideoFrame(ctime, this.currentTime,b);
//   });
// }});
// });
// function onTrackedVideoFrame(currentTime, duration,b){
//   for (var i = 0; i < b.subtitle.length; i++) {
//     var sid="#"+i;
//      //$(sid).addClass("activeText");
//     var ttime=b.subtitle[i]['s'];
//     var x=parseFloat(ttime);
//   //   console.log(x+" "+currentTime);
//    if (x==currentTime) {
//      $(sid).addClass("activeText");
//   }else{
//     $('.inner-text').removeClass("activeText");
//   }
// }
// }
// function GetSubtitle(rtime,txtary){
//   var res;
//     pDiv.innerHTML =txtary.subtitle[i]['s'];
//     res=txtary.subtitle[i]['t'];
//   if (txtary.subtitle[i]['s']==rtime) {
//
//     //   $('.inner-text').removeClass("activeSub");
//     // var sid="#"+txtary.subtitle[i]['id']+"_"+txtary.subtitle[i]['st']
//      res=txtary.subtitle[i]['t'];
//     //   $(sid).addClass("activeSub");
//     // break;
//   }else{
//        res=txtary.subtitle[i]['t'];
//   }
// }
// return res;
// }
function audio_hit() {
$('#apause').show();
$('#aplay').hide();
document.getElementById('amp').play();
}
function audio_hit2() {
$('#apause').hide();
$('#aplay').show();
document.getElementById('amp').pause();
}
</script>
<script>
var loadFile = function(event) {
var image = document.getElementById('imgHolder');
image.src = URL.createObjectURL(event.target.files[0]);
};
var loadProFile = function(event) {
var image = document.getElementById('imgProfileHolder');
image.src = URL.createObjectURL(event.target.files[0]);
};
var loadUrlFile = function(event) {
var image = document.getElementById('imgUrlHolder');
image.src = URL.createObjectURL(event.target.files[0]);
};
</script>
<script type="text/javascript">
$(document).ready(function(){
// $('.modal').modal({
// backdrop: 'static',
// keyboard: false
// });
$("#urltitle").keyup(function(){
  var v=$('#urltitle').val();
  $("#uTitle").html(v);
});
$("#source").keyup(function(){
  var v=$('#source').val();
  $("#uSource").html(v);
});
$("textarea#quote").keyup(function(){
var v=$('textarea#quote').val();
$("#qot").html(v);
});
$("#author").keyup(function(){
var v=$('#author').val();
$("#aut").html(v);
});
$("#highlight_txt").keyup(function(){
var v=$('#highlight_txt').val();
$("#high").html(v);
});
$("#defination_txt").keyup(function(){
var v=$('#defination_txt').val();
$("#def").html(v);
});
$("#caption").keyup(function(){
var v=$('#caption').val();
$("#imgCaption").html(v);
});
$("#name").keyup(function(){
var v=$('#name').val();
$("#pName").html(v);
});
$("#title").keyup(function(){
var v=$('#title').val();
$("#pTitle").html(v);
});
$("#twitter").keyup(function(){
var v=$('#twitter').val();
if (v!='') {
  $('#tid').show();
}else{
      $('#tid').hide();
}
});
$("#linkedIn").keyup(function(){
var v=$('#linkedIn').val();
if (v!='') {
  $('#lid').show();
}else{
      $('#lid').hide();
}
});
});
function feedPopup(id){
$('.hidContentId').val(id);
$("#RecordApp").modal({
backdrop: 'static',
keyboard: false
});
}
function PopupClose(){
  $("#RecordApp").modal('hide');
}
</script>
<script type="text/javascript">
$( document ).ready(function() {
      getShowImage(1);
});
$(document).on("click","#pixabay",function(){
var a= $("#imgSearch").val();
var b= $("#ModalId").val();
//$("#imgSearch").val(a);
//$(".loadermodal").show();
//alert(a);
$.ajax({url:"apitest.php",type:"post",data: {vid: a, mid: b},success:function(b){
  //$(".loadermodal").hide();
  //var data=b.split('|');
  $("#pixabayImageDiv").html(b);
  //$("#myModalLabel").html('Movie Details');
  //alert("done");
  }})});

  $(document).ready(function(){
    var api_key="563492ad6f91700001000001f6261981c82c43daa0f0098107766e66";
    var imgtag='';
    $('#pex_img_button').click(function(){
      //event.preventDefalut();
      //alert('gh');
      $('#pex_img_disp').empty();
      var search=$('#pex_img').val();
      var mid=$('#PexelsModalId').val();
      getAllSearchImage(search,mid);
    })
    function getAllSearchImage(search,mid){
        //alert('ghgg');
        $.ajax({
          type:"GET",
          beforeSend: function (xhr) {
        xhr.setRequestHeader ("Authorization",api_key);
      },
      url:'https://api.pexels.com/v1/search?query='+search,
      success: function(data){
        console.log(data);
        data.photos.forEach((photo) => {
          var src=photo.src.small;
                    imgtag='<div class="col-md-3 col-sm-6 mb-2 pt-1"><a href="#"><img id="'+mid+'" src="'+src+'" style="height:100px" class="img-fluid" onclick="showImgUrl(this.src)"/><a/></div>';
          $('#pex_img_disp').append(imgtag);
        });
      },
      error: function(error){
        console.log(error);
      }
    })
    };
  });
  function showImgUrl(s,b){
     $('#imgHolder').attr('src',s);
     $('#imgProfileHolder').attr('src',s);
      $('#imgUrlHolder').attr('src',s);
      $('#cover1').val(s);
      $('#cover2').val(s);
      $('#cover3').val(s);
     $('#modal1').modal('hide');

}
function  delImgUrl(){
  var s='https://via.placeholder.com/640x426';
  $('#coverImg').attr('src',s);
    $('#dwnImg').attr('href',s);
      //$('#delImg').attr('href',s);
        $('#maxImg').attr('href',s);
  $('#cover').val(s);
}
  function showModal(a){

   $('#imageModal').modal('show');
   $('#ModalId').val(a);
   $('#PixabayModalId').val(a);
   $('#PexelsModalId').val(a);

   $("#gallery_img").empty();
   $("#pixabayImageDiv").empty();
   $("#pex_img_disp").empty();
      getShowImage(a);
}
function getShowImage(a){
    //alert('ghgg');
    $.ajax({url:"showgalleryimage.php",type:"GET",data: { mid: a},success:function(b){
      $("#gallery_img").html(b);
      }})};

$(document).ready(function (e) {
$('#uploadImage').on('submit',(function(e) {
  var imgVal=$('#file-upload').val();
    if($('#file-upload').val()) {
      $.ajax({
      url: "uploadImage.php",
      type: "POST",
      data:  new FormData(this),
      contentType: false,
      cache: false,
      processData:false,
      success: function(data){
        $('#gallery_img').html(data);
      },
      error: function(){}
      });
    }
}));

$("#file-upload").on("change", function() {
 alert("change");
$("#uploadImage").submit();
});

});

function remove_img(id){
  var divid="#DivBtn"+id;
  var imgId="#imgBtn"+id;
    var txtId="txtBtn"+id;
//  alert("delete "+imgId +" "+txtId);
  $(imgId).attr('src', '');
   $(divid).hide();
   //document.getElementById(imgId).remove();
   document.getElementById(txtId).value="";
}

</script>
</body>
</html>
