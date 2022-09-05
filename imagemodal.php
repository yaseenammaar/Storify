<div class="row">
<div class="col-3">
  <div>
<a><img class="img-fluid" alt=""style="height:34px;" src="images/logo4.png">
  <div class="navbar-brand">
    <a href="#" class="df-logo">Giide<span>App</span></a>
  </div>
</a>
</div>
  <div class="nav flex-column nav-pills mt-2" id="v-pills-tab" role="tablist" aria-orientation="vertical">
    <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Galary</a>
    <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Pixabay</a>
    <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Pexels</a>
    <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Premuim</a>
  </div>
</div>
<div class="col-9">
  <div class="tab-content" id="v-pills-tabContent">
  <div style="background-color:#fff !important;" class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
    <div class="video-block section-padding">
    <div class="row" >
    <div class="col-md-12 mb-2" style="position:sticky;background-color:#fff !important;">
    <div class="main-title">
    <div class="btn-group float-right right-action">
    <form name="uploadImage"  onsubmit="return false" enctype="multipart/form-data" method="post" action="" class="form-inline my-2 my-lg-0" id="uploadImage">
      <label for="file-upload" class="custom-file-upload">
        <i class="fas fa-fw fa-upload"></i> Upload Image
      </label>
      <input type="hidden" id="ModalId" name="ModalId" value="">
      <input name="file-upload" id="file-upload" type="file"/>
    </form>
    </div>
    <span style="color:#000;font-weight:bold;font-size:22px">Galary</span>
    </div>
    </div>
    <div class="col-md-12 mb-1" style="height:400px;overflow-y: scroll;">
      <div class="row" id="gallery_img" >
 <?php $qry=mysqli_query($con,"select image from gallery where user_id='$userId' order by id desc");
        $num=mysqli_num_rows($qry);
        if($num>0){
          while($fetch=mysqli_fetch_array($qry)){
          //  $url=__DIR__.'/gallery/'.$fetch['image'];
         $urlpk=$baseurl.'gallery/'.$fetch['image'];
         ?>
            <div class="col-md-3 col-sm-6 mb-3 ">
          			<div class="video-card">
          			<div class="video-card-image">
          			<a href="#"><img id="<?=$btnId?>" onclick="showImgUrl(this.src)" class="img-fluid" style="height:100px" src="<?=$urlpk?>" alt=""></a>
          			</div>
          		</div>
          			</div>
        <?php   }
        }else{?>
       <?php }?>
    </div>
    </div>
    </div>
    </div>
  </div>
  <div class="tab-pane fade " style="background-color:#fff !important;" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
    <div class="video-block section-padding">
    <div class="row" >
    <div class="col-md-12 mb-2" style="position:sticky">
    <div class="main-title">
    <div class="btn-group float-right right-action">
    <form style="display: flex;" method="post" enctype="multipart/form-data" action="" class="form-inline my-2 my-lg-0">
    <input type="hidden" id="PixabayModalId" name="PixabayModalId" value="">
    <input name="imgSearch" id="imgSearch" class="form-control form-control-sm mr-sm-1" type="search your image here.." placeholder="Search" aria-label="Search"><button class="btn btn-outline-success btn-sm my-2 my-sm-0" type="button" id="pixabay"name="pixabay"><i class="fas fa-search"></i></button>
    </form>
    </div>
      <span style="color:#000;font-weight:bold;font-size:22px">Pixabay Image</span>
    </div>
    </div>
    <div class="col-md-12 mb-1" style="height:400px;overflow-y: scroll;">
      <div class="row" id="pixabayImageDiv" >
        Search image..
    </div>
    </div>
    </div>
    </div>
  </div>
  <div class="tab-pane fade" style="background-color:#fff !important;" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
     <div class="video-block section-padding">
        <div class="row" >
        <div class="col-md-12 mb-2" style="position:sticky">
        <div class="main-title">
        <div class="btn-group float-right right-action">
        <form style="display: flex;" id="pexelsForm" method="post" enctype="multipart/form-data" class="form-inline my-2 my-lg-0">
            <input type="hidden" id="PexelsModalId" name="PexelsModalId" value="">
        <input name="pex_img"  id="pex_img" class="form-control form-control-sm mr-sm-1" type="search image here" placeholder="Search" aria-label="Search"><button id="pex_img_button" name="pex_img_button" class="btn btn-outline-success btn-sm my-2 my-sm-0" type="button"><i class="fas fa-search"></i></button>
        </form>
        </div>
          <span style="color:#000;font-weight:bold;font-size:22px">Pexels Image</span>
        </div>
        </div>
        <div class="col-md-12 mb-1" style="height:400px;overflow-y: scroll;">
          <div class="row"id="pex_img_disp" >

        </div>
        </div>
        </div>
        </div>
      </div>
  <div class="tab-pane fade" style="background-color:#fff !important;" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">Update soon....</div>
</div>
</div>
</div>
