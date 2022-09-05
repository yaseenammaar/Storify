<?php
ob_start();
session_start();
$userId=$_SESSION['usrid'];
include_once("configuration/connect.php");
include_once("configuration/functions.php");
$date=date('d-m-Y h:i:sa');
$mid=$_GET['mid'];
        $qry=mysqli_query($con,"select image from gallery where user_id='$userId' order by id desc");
        $num=mysqli_num_rows($qry);
        if($num>0){
          while($fetch=mysqli_fetch_array($qry)){
          //  $url=__DIR__.'/gallery/'.$fetch['image'];
         $urlpk='gallery/'.$fetch['image'];
            $htm.='<div class="col-md-3 col-sm-6 mb-3 ">
          			<div class="video-card">
          			<div class="video-card-image">
                <a href="#"><img id="'.$mid.'" onclick="showImgUrl(this.src,this.id)" class="img-fluid" style="height:100px" src="'.$urlpk.'" alt=""></a>
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
?>
