<?php
ob_start();
session_start();
$adminId=$_SESSION['aid'];
include_once("../configuration/connect.php");
include_once("../configuration/functions.php");
if(isset($_SESSION["aid"])) {
if(isLoginSessionExpired()) {
header("Location:logout.php");
}
}
if (isset($_GET['fid'])&& $_GET['fid']!='') {
  $fid=base64_decode($_GET['fid']);
  $feed=mysqli_fetch_array(mysqli_query($con,"select * from feeds where id='$fid'"));
}
if(isset($_GET['did'])&&$_GET['did']!=''){
$did=($_GET['did']);
$pid=base64_decode($did);
$fid=($_GET['fid']);
$delQry=mysqli_query($con,"delete from `chapter` where `id`='$pid'");
if($delQry){
header("location:viewfeed.php?msg=dls&fid=$fid");
}else{
header("location:viewfeed.php?msg=err&fid=$fid");
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
<html><head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Giide | Admin Package </title>
<?php include('include/css.php') ?>
<script>
var loadFile = function(event) {
var image = document.getElementById('profileImg');
image.src = URL.createObjectURL(event.target.files[0]);
};
</script>
</head>
<body >
	<?php include('include/header.php') ?>
	<div class="content ht-100v pd-0">
		<div class="content-header">
			<div class="content-search">
				<i data-feather="search"></i>
				<input type="search" class="form-control" placeholder="Search...">
			</div>
			<nav class="nav">
				<a href="" class="nav-link"><i data-feather="help-circle"></i></a>
				<a href="" class="nav-link"><i data-feather="grid"></i></a>
				<a href="" class="nav-link"><i data-feather="align-left"></i></a>
			</nav>
		</div><!-- content-header -->
    <div class="container-fluid py-4">
			<?php if(isset($_GET['msg'])) {?>
			 <div class="alert alert-<?= $class?> alert-dismissible fade show" role="alert"><?=$msgText?></span>
				 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					 <span aria-hidden="true">&times;</span>
				 </button>
			 </div>
		 <?php }?>
		 <div class="content-body">
			 <div class="container pd-x-0">
				 <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
					 <div>
						 <nav aria-label="breadcrumb">
							 <ol class="breadcrumb breadcrumb-style1 mg-b-10">
								 <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
								 <li class="breadcrumb-item active" aria-current="page"> Giides</li>
							 </ol>
						 </nav>
						 <h4 class="mg-b-0 tx-spacing--1">View Giides</h4>
					 </div>
					 <div class="d-none d-md-block">
					  <!-- <a href="users.php"  class="btn btn-primary btn-sm mb-0" ><i class="fas fa-user"></i> View User</a> -->
					 </div>
				 </div>
    <div class="container-fluid py-4">
      <div class="row mt-4">
              <div class="col-12">
                <div class="card mb-4">

                  <div class="card-header pb-0 p-3">
                    <div class="d-lg-flex">
                    <div>
                      <h5 class="mb-0"><?= $feed['name']?></h5>
                      <p class="text-sm mb-0">
                        All chapter created by user form <?= $feed['name']?> feed.
                      </p>
                    </div>
                    <div class="ms-auto my-auto mt-lg-0 mt-4">
                      <div class="ms-auto my-auto">
                        <!-- <a  href="#" data-bs-toggle="modal" data-bs-target="#createChapterModal" class="btn bg-gradient-danger btn-sm mb-0" >Create New Chapter</a> -->
                    </div>
                    </div>
                    </div>
                  </div>
                  <div class="card-body p-3">
                    <div class="row">
                      <?php $fid=$feed['id'];$sl=0;
                      $cqry=mysqli_query($con,"select * from chapter where feed_id='$fid' order by id desc ");
                        $num=mysqli_num_rows($cqry);
                        if($num>0){
                          while ($chapter=mysqli_fetch_array($cqry)) {
                            $sl++;
                            $cid=base64_encode($chapter['id']);
                            if($chapter['image']==''){
                              $image='c1.png';
                            }else{
                              $image=$chapter['image'];
                            }
                            ?>
                      <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                        <div class="card h-100 card-blog card-plain border">
                          <div class="position-relative">
                            <div><a class="d-block shadow-xl border-radius-xl">

                              <img src="../assets/img/<?= $image?>" alt="<?= $chapter['name']?>" class="img-fluid shadow border-radius-xl">
                            </a></div>
                            <div>
                            </div>
                          </div>
                          <div class="card-body px-1 pb-0">
                            <div class="d-flex align-items-center justify-content-between">
                              <div class="">
                                <p class="text-gradient text-dark mb-2 text-sm">#<?= $sl?> <?= $chapter['name']?></p>
                              </div>
                              <div class="avatar-group mt-2 pr-2">
                                <div class="dropdown" style="padding-right:10px;cursor:pointer">
                                  <i class="fa-solid fa-ellipsis-vertical" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                                    <?php  if($chapter['status']=='1'){ ?>
                                      <li><a href="../feed.php?cid=<?=$cid?>&fid=<?=base64_encode($fid)?>" class="dropdown-item" >Listen</a></li>
                                      <?php } ?>
                                    <li><a href="viewfeed.php?did=<?=$cid?>&fid=<?=base64_encode($fid)?>" class="dropdown-item" >Delete</a></li>
                                  </ul>
                                  </div>
                              </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between p-1">
                              <div>
                                <!-- <p class="text-xs mb-0 text-secondary font-weight-bold">Sanjeev Hazari</p> -->
                                <?= getChapterStatus($chapter['status'])?>
                              </div>
                              <div class="avatar-group mt-2">
                                <span class="text-dark text-xs"><?= date('M d, Y', strtotime($chapter['date'])) ?></span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    <?php    }  }?>

                    </div>
                  </div>
                </div>
              </div>
            </div>
    </div>
  </main>
<?php include 'include/script.php' ?>
</body>
</html>
