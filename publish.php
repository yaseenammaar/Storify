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
if(isset($_POST['publishBtn'])){
  $cname=$_POST['chaptername'];
  $authorname=$_POST['authorname'];
    $desp=$_POST['desp'];
      $cover=$_POST['cover'];
      $brand=$_POST['brand'];
        $color=$_POST['color'];
      $uname=$_POST['username'];
      $password=$_POST['password'];
      $cta=$_POST['cta'];
      $cid=$_POST['hidChapId'];
      $fid=$_POST['hidFeedId'];
      $qry="UPDATE `chapter` SET `name`='$cname',`image`='$cover',`color`='$color',`brand`='$brand',`desp`='$desp',`author`='$authorname',`status`='1',`username`='$uname',`password`='$password',`cta`='$cta' WHERE id='$cid'";
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
//$ctime=$cId[1];
$_ttime=explode('.',$cId[1]);
$var = ltrim($_ttime[1], '0');
$ctime=$_ttime[0].'.'.$var;
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
$_ttime=explode('.',$cId[1]);
$var = ltrim($_ttime[1], '0');
$ctime=$_ttime[0].'.'.$var;
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
$_ttime=explode('.',$cId[1]);
$var = ltrim($_ttime[1], '0');
$ctime=$_ttime[0].'.'.$var;
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
$_ttime=explode('.',$cId[1]);
$var = ltrim($_ttime[1], '0');
$ctime=$_ttime[0].'.'.$var;
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
$_ttime=explode('.',$cId[1]);
$var = ltrim($_ttime[1], '0');
$ctime=$_ttime[0].'.'.$var;
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
$_ttime=explode('.',$cId[1]);
$var = ltrim($_ttime[1], '0');
$ctime=$_ttime[0].'.'.$var;
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
  <?php include('include/css.php') ?>
  <link rel="stylesheet" href="assets/css/coloris.min.css">
  <style media="screen">
  input[type="file"] {
    display: none;
  }
  .custom-file-upload {
      border: 1px solid #ccc;
      display: inline-block;
      padding: 6px 12px;
      cursor: pointer;
  }.example {
    flex-shrink: 0;
    width: 300px;
    margin-bottom: 30px;
  }

  .square .clr-field button,
  .circle .clr-field button {
    width: 22px;
    height: 22px;
    left: 5px;
    right: auto;
    border-radius: 5px;
  }

  .square .clr-field input,
  .circle .clr-field input {
    padding-left: 36px;
  }

  .circle .clr-field button {
    border-radius: 50%;
  }

  .full .clr-field button {
    width: 100%;
    height: 100%;
    border-radius: 5px;
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
                  <li class="step-item complete">
                    <a href="#" class="step-link">
                      <span class="step-number">2</span>
                      <span class="step-title">Link Content</span>
                    </a>
                  </li>
                  <li class="step-item active">
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
                  Customize your giide and publish then preview.
                    <!-- <input type="text" id="hidFeedId" name="hidFeedId" value="7">
                    <input type="text" id="hidChapId" name="hidChapId" value="10"> -->
                </div>
              </div>
            </div>
            <div class="row row-xs">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-body">
                <form class="" action="" method="post">
                  <input type="hidden" name="hidFeedId" value="<?=$fetch['feed_id']?>">
                  <input type="hidden" name="hidChapId" value="<?=$fetch['id']?>"/>
                  <div class="row">
                    <div class="col-md-6">
                      <div data-label="Giide Details" class="df-example demo-forms">
                      <label>Chapter Name</label>
                      <input class=" form-control mb-3" name="chaptername" type="text" placeholder="" value="<?=$fetch['name'] ?>" required />
                      <label>Author</label>
                      <input class="form-control mb-3" type="text" name="authorname" placeholder="Eg. Tomson" />
                      <label>Summary</label>
                      <textarea name="desp" rows="3" cols="80" class="form-control mb-3"></textarea>
                      <?php if ($userDetails['package']=='11'){ ?>
                        <label for="">CTA Button Link</label>
                        <input type="text" disabled name="cta2" id="cta2" title="Upgrade to Pro*" readonly class="form-control mb-3" value="">
                      <?php }else{ ?>
                        <label for="">CTA Button Link</label>
                        <input type="text" name="cta" id="cta" class="form-control mb-3" value="">
                      <?php } ?>
                    </div>
                    </div>
                    <div class="col-md-6">
                      <div data-label="Giide Customize" class="df-example demo-forms">
                        <div class="row">
                          <div class="col-md-12">
                            <label for="">Cover Image</label>
                            <figure class="pos-relative mg-b-0">
                              <img src="https://via.placeholder.com/640x426" id="coverImg" name="coverImg" class="img-fit-cover" alt="Responsive image">
                              <figcaption class="pos-absolute b-0 l-0 wd-100p pd-20 d-flex justify-content-center">
                                <div class="btn-group">
                                  <a id="dwnImg" download target="_blank" href="https://via.placeholder.com/640x426" class="btn btn-dark btn-icon"><i data-feather="download"></i></a>
                                  <a  href="#modal1" data-toggle="modal" class="btn btn-dark btn-icon"><i data-feather="edit-2"></i></a>
                                  <a id="maxImg" target="_blank" href="https://via.placeholder.com/640x426" class="btn btn-dark btn-icon"><i data-feather="maximize-2"></i></a>
                                  <a id="delImg" onclick="delImgUrl()" href="#" class="btn btn-dark btn-icon"><i data-feather="trash-2"></i></a>
                                </div>
                              </figcaption>
                            </figure>
                            <input type="hidden" name="cover" id="cover" value="">
                          </div>
                          <div class="col-md-12 mt-3">
                            <div class="example square">
                            <label for="">Background Color</label>
                              <input type="text" name="color" id="color" class="form-control coloris" value="#ff3600">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                        <div class="row mg-t-20" >
                          <div class="col-md-12" style="text-align:right">
                            <button type="submit" name="publishBtn" class="btn btn-primary btn-sm">Publish</button>
                          </div>
                        </div>

                    </div>
                  </div>
                </form>
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
              <div class="border p-2 d-flex mb-2 bg-white">
              <div class="flex-shrink-0">
                <img  alt="Image placeholder" class="avatar rounded-circle" src="assets/img/feed_url/<?= $urlFetch['image']?>">
              </div>
              <div class="flex-grow-1 ms-3">
                <h6  class="h5 mt-0"><?= $urlFetch['title']?></h6>
                <p  class="text-sm"><?= $urlFetch['source']?></p>
                <div class="d-flex">

                </div>
              </div>
            </div>
            <?php } ?>
                <?php while($quoteFetch=mysqli_fetch_array($quoteQry)){ ?>
              <div class="border p-2 quote mb-2">
                  <p><?= $quoteFetch['quote']?></p>
                  <p style="text-align:right"><?= $quoteFetch['author']?></p>
              </div>
            <?php } ?>
                <?php while($highFetch=mysqli_fetch_array($highlightQry)){ ?>
              <div class="border p-2 highlight mb-2">
                  <span><?= $highFetch['highlight']?></span>
              </div>
            <?php } ?>
              <?php while($defFetch=mysqli_fetch_array($definationQry)){ ?>
              <div class="border p-2 defination mb-2">
                  <p><?=$defFetch['defination']?></p>
              </div>
              <?php } ?>
              <?php while($imgFetch=mysqli_fetch_array($imageQry)){ ?>
                <div class="image mb-2">
                      <img  alt="Image placeholder" class="img-fluid shadow" src="assets/img/feed_image/<?=$imgFetch['image']?>">
                      <p id=""><?=$imgFetch['caption']?></p>
                </div>
              <?php } ?>
                <?php while($profileFetch=mysqli_fetch_array($profielQry)){ ?>
                  <div class="border p-2 d-flex mb-2 bg-white">
                      <div class="flex-shrink-0">
                        <img alt="Image placeholder" class="avatar rounded-circle" src="assets/img/feed_profile/<?=$profileFetch['image']?>">
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
                                <a href="<?=$profileFetch['linkedin']?>"><i  class="fab fa-linkedin cursor-pointer opacity-6"></i></a>
                              </div>
                              <?php   } ?>
                        </div>
                      </div>
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
                    imgtag='<div class="col-md-3 col-sm-6 mb-2 pt-1"><a href="#"><img id='+mid+' src='+src+' style="height:100px" class="img-fluid" onclick="showImgUrl(this.src)"/><a/></div>';
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
    $('#coverImg').attr('src',s);
      $('#dwnImg').attr('href',s);
      //  $('#delImg').attr('href',s);
          $('#maxImg').attr('href',s);
    $('#cover').val(s);
     $('#modal1').modal('hide');
//var a= $('#imageId').prop('src');
//var b= $('#imageId').attr('src'));
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
<script type="text/javascript" src="assets/js/coloris.min.js"></script>
<script type="text/javascript">

Coloris({
  el: '.coloris',
  swatches: [
    '#264653',
    '#2a9d8f',
    '#e9c46a',
    '#f4a261',
    '#e76f51',
    '#d62828',
    '#023e8a',
    '#0077b6',
    '#0096c7',
    '#00b4d8',
    '#48cae4'
  ]
});

</script>
</body>
</html>
