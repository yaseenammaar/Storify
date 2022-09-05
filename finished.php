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
  $cid=($_GET['cpid']);
  //$qry=mysqli_query($con,"SELECT * FROM `chapter` where id=$cid");
  //$fetch=mysqli_fetch_array($qry);
  $link=$baseurl."feed.php?cpid=$cid";
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
  header("location:finished.php?cid=$chapid");

}
if (isset($_POST['highlight_Btn'])) {
$txt=$_POST['highlight_txt'];
$chapterId=$_POST['hidChapId'];
$cId=explode('#',$_POST['hidContentId']);
$contentId=$cId[0];
$ctime=$cId[1];
$feedId=$_POST['hidFeedId'];
$qry="INSERT INTO `feed_highlight`(`ctime`, `content_id`, `chapter_id`, `feed_id`, `highlight`, `user_id`)
VALUES ('$ctime','$contentId','$chapterId','$feedId','$txt','$userId')";
mysqli_query($con,$qry);
$cid=base64_encode($chapterId);
header("location:linkcontent.php?cid=$cid");
}

if (isset($_POST['quote_Btn'])) {
$quote=$_POST['quote'];
$author=$_POST['author'];
$chapterId=$_POST['hidChapId'];
$cId=explode('#',$_POST['hidContentId']);
$contentId=$cId[0];
$ctime=$cId[1];
$feedId=$_POST['hidFeedId'];
$qry="INSERT INTO `feed_quote`(`ctime`,`content_id`, `chapter_id`, `feed_id`, `quote`,`author`, `user_id`)
VALUES ('$ctime','$contentId','$chapterId','$feedId','$quote','$author','$userId')";
mysqli_query($con,$qry);
$cid=base64_encode($chapterId);
header("location:linkcontent.php?cid=$cid");
}
if (isset($_POST['defination_Btn'])) {
$defination=$_POST['defination_txt'];
$chapterId=$_POST['hidChapId'];
$cId=explode('#',$_POST['hidContentId']);
$contentId=$cId[0];
$ctime=$cId[1];
$feedId=$_POST['hidFeedId'];
$qry="INSERT INTO `feed_defination`(`ctime`,`content_id`, `chapter_id`, `feed_id`, `defination`, `user_id`)
VALUES ('$ctime','$contentId','$chapterId','$feedId','$defination','$userId')";
mysqli_query($con,$qry);
$cid=base64_encode($chapterId);
header("location:linkcontent.php?cid=$cid");
}
if (isset($_POST['image_Btn'])) {
$caption=$_POST['caption'];
$chapterId=$_POST['hidChapId'];
$cId=explode('#',$_POST['hidContentId']);
$contentId=$cId[0];
$ctime=$cId[1];
$feedId=$_POST['hidFeedId'];
$image=$_FILES['image']['tmp_name'];
  $imageName=$_FILES['image']['name'];
if($imageName==''){
  $filename='worksapce.png';
}else{
  $filename=$imageName;
  $location="assets/img/feed_image/".$imageName;
  move_uploaded_file($image,$location);
}
$qry="INSERT INTO `feed_image`(`ctime`,`content_id`, `chapter_id`, `feed_id`, `image`,`caption`, `user_id`)
VALUES ('$citme','$contentId','$chapterId','$feedId','$filename','$caption','$userId')";
mysqli_query($con,$qry);
$cid=base64_encode($chapterId);
header("location:linkcontent.php?cid=$cid");
}
if (isset($_POST['profileBtn'])) {
$name=$_POST['name'];
$title=$_POST['title'];
$twitter=$_POST['twitter'];
$linkedIn=$_POST['linkedIn'];
$chapterId=$_POST['hidChapId'];
$cId=explode('#',$_POST['hidContentId']);
$contentId=$cId[0];
$ctime=$cId[1];
$feedId=$_POST['hidFeedId'];
$image=$_FILES['proimage']['tmp_name'];
  $imageName=$_FILES['proimage']['name'];
if($imageName==''){
  $filename='worksapce.png';
}else{
  $filename=$imageName;
  $location="assets/img/feed_profile/".$imageName;
  move_uploaded_file($image,$location);
}
$qry="INSERT INTO `feed_profile`(`ctime`, `content_id`, `chapter_id`, `feed_id`, `name`,`title`,`twitter`,`linkedin`,`image`, `user_id`)
VALUES ('$ctime','$contentId','$chapterId','$feedId','$name','$title','$twitter','$linkedIn','$filename','$userId')";
mysqli_query($con,$qry);
$cid=base64_encode($chapterId);
header("location:linkcontent.php?cid=$cid");
}
if (isset($_POST['urlBtn'])) {
$source=$_POST['source'];
$urltitle=$_POST['urltitle'];
$url=$_POST['url'];
$chapterId=$_POST['hidChapId'];
$cId=explode('#',$_POST['hidContentId']);
$contentId=$cId[0];
$ctime=$cId[1];
$feedId=$_POST['hidFeedId'];
$image=$_FILES['image']['tmp_name'];
  $imageName=$_FILES['image']['name'];
if($imageName==''){
  $filename='worksapce.png';
}else{
  $filename=$imageName;
  $location="assets/img/feed_url/".$imageName;
  move_uploaded_file($image,$location);
}
$qry="INSERT INTO `feed_url`(`ctime`, `content_id`, `chapter_id`, `feed_id`, `url`,`title`,`source`,`image`, `user_id`)
VALUES ('$ctime','$contentId','$chapterId','$feedId','$url','$urltitle','$source','$filename','$userId')";
mysqli_query($con,$qry);
$cid=base64_encode($chapterId);
header("location:linkcontent.php?cid=$cid");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>GiideApp</title>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Twitter -->
<meta name="twitter:site" content="@themepixels">
<meta name="twitter:creator" content="@themepixels">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="DashForge">
<meta name="twitter:description" content="Responsive Bootstrap 4 Dashboard Template">
<meta name="twitter:image" content="http://themepixels.me/dashforge/img/dashforge-social.png">
<!-- Facebook -->
<meta property="og:url" content="http://themepixels.me/dashforge">
<meta property="og:title" content="DashForge">
<meta property="og:description" content="Responsive Bootstrap 4 Dashboard Template">
<meta property="og:image" content="http://themepixels.me/dashforge/img/dashforge-social.png">
<meta property="og:image:secure_url" content="http://themepixels.me/dashforge/img/dashforge-social.png">
<meta property="og:image:type" content="image/png">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="600">
  <?php include('include/css.php') ?>
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
                  <li class="step-item complete">
                    <a href="#" class="step-link">
                      <span class="step-number">2</span>
                      <span class="step-title">Link Content</span>
                    </a>
                  </li>
                  <li class="step-item complete">
                    <a href="#" class="step-link">
                      <span class="step-number">3</span>
                      <span class="step-title">Publish & Share</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>

            <div class="row row-xs mg-t-10">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-body text-center">
                    <h5>  Success! Your Giide is now published</h5>
<p>Get it out into the world by sharing the link below via email,
text, or any of your favorite social channels.</p>
<div class="">
<img src="assets/img/social2.png" alt="" class="img-fluid" style="width:50%">
</div>
<div class=" text-center">
<a href="#" >
  <button type="button" class="btn btn-outline-light btn-icon rounded-circle"><i style="font-size:25px" class="fab fa-linkedin-in"></i>
  </button>
</a>
<a href="#" >
  <button type="button" class="btn btn-outline-light btn-icon rounded-circle">
  <i style="font-size:25px"  class="fab fa-twitter"></i>
    </button>
</a>
<a href="https://www.facebook.com/sharer/sharer.php?u=<?=$link?>">
  <button type="button" class="btn btn-outline-light btn-icon rounded-circle">
  <i style="font-size:25px"  class="fab fa-facebook"></i>
  </button>
  </a>
<a href="#">
    <button type="button" class="btn btn-outline-light btn-icon rounded-circle">
      <i style="font-size:25px" class="fas fa-envelope"></i>
    </button>
</a>
<a href="#">
    <button type="button" class="btn btn-outline-light btn-icon rounded-circle">
      <i style="font-size:25px" class="fas fa-qrcode"></i>
    </button>
</a>
</div>
        <div class="mg-t-10 ">
          <div class="input-group " style="    justify-content: center;">
            <input id="linktext" name="linktext" class="form-control"  value="<?=$link?>" type="text" placeholder="Copy giide link" aria-label="Copy giide link" aria-describedby="basic-addon2">
            <div class="input-group-append">
              <button class="btn btn-outline-light" type="button" id="copybtn">Copy</button>
            </div>
          </div>
          <small style="color:green;font-weight:bold" id="cpytxt"></small>
        </div>


                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="col-lg-3">
            <div class="row row-xs">

            </div><!-- row -->
          </div><!-- col -->
        </div><!-- row -->
      </div><!-- container -->
    </div><!-- content -->
<?php include('include/footer.php'); ?>
<?php include('include/script.php'); ?>
<script type="text/javascript">
var cpt=document.getElementById("cpytxt");
var text = document.getElementById("linktext");
var btn = document.getElementById("copybtn");
btn.onclick = function() {
text.select();
document.execCommand("copy");
cpt.innerHTML="Link copied";
btn.style.color = "green";
btn.innerHTML="Copied";
}
</script>
</body>
</html>
