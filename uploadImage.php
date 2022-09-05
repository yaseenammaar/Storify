<?php
ob_start();
session_start();
$userId=$_SESSION['usrid'];
include_once("configuration/connect.php");
include_once("configuration/functions.php");
$date=date('d-m-Y h:i:sa');
if($_SERVER["REQUEST_METHOD"] == "POST"){
        $video = $_FILES["file-upload"]["tmp_name"];
        $fname = $_FILES['file-upload']['name'];
        $btnId=$_POST['mid'];
        $date=date("d-m-Y h:i sa");
        $tm=time();
        $extension = pathinfo($fname, PATHINFO_EXTENSION);
        $filename=$tm.".".$extension;
          $location = "gallery/".$filename;
        $sql=mysqli_query($con,"INSERT INTO `gallery`(`id`,`user_id`, `image`, `date`) VALUES ('NULL','$userId','$filename','$date')");
        $file_extension = pathinfo($location, PATHINFO_EXTENSION);
        $file_extension = strtolower($file_extension);
        move_uploaded_file($video,$location);
        $qry=mysqli_query($con,"select image from gallery where user_id='$userId' order by id desc");
        $num=mysqli_num_rows($qry);
        if($num>0){
          while($fetch=mysqli_fetch_array($qry)){
          //  $url=__DIR__.'/gallery/'.$fetch['image'];
         $urlpk=$baseurl.'gallery/'.$fetch['image'];
            $htm.='<div class="col-md-3 col-sm-6 mb-3 ">
          			<div class="video-card">
          			<div class="video-card-image">
          			<a href="#"><img id="'.$btnId.'" onclick="showImgUrl(this.src)" class="img-fluid" style="height:100px" src="'.$urlpk.'" alt=""></a>
          			</div>
          		</div>
          			</div>';
          }
        }else{
          $htm.='<div class="col-md-3 col-sm-6 mb-3 ">
              <div class="video-card">
              <div class="video-card-image">
            NO image found ..
            </div>
              </div>';
        }
      echo $htm;
  }
?>
