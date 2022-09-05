<?php
ob_start();
session_start();
$adminId=$_SESSION['aid'];
include_once("../configuration/connect.php");
include_once("../configuration/functions.php");
if(isset($_SESSION["usrid"])) {
if(isLoginSessionExpired()) {
header("Location:logout.php");
}
}
if (isset($_POST['submit'])) {
	$name=$_POST['packagename'];
	$work=$_POST['workspacelimit'];
	$user=$_POST['userlimit'];
	$feed=$_POST['feedlimit'];
	$chapter=$_POST['chapterlimit'];
	$audio=$_POST['audiolimit'];
	$desp=$_POST['desp'];
	$status=$_POST['status'];
	$type=$_POST['type'];
	$yearly=$_POST['yearly'];
	$monthly=$_POST['monthly'];
	$qry="INSERT INTO `package`(`user_limit`,`workspace_limit`, `feed_limit`, `chapter_limit`, `audio_limit`, `name`, `type`,`yearly`,`monthly`, `description`, `status`, `is_deleted`, `created_date`)
	VALUES ('$user','$work','$feed','$chapter','$audio','$name','$type','$yearly','$monthly','$desp','$status','0','$date')";
	$exec=mysqli_query($con,$qry);
	if ($exec) {
		header('location:package.php?msg=ins');
	}else{
			header('location:package.php?msg=err');
	}
}
if (isset($_POST['update'])) {
	$id=$_POST['hidId'];
	$name=$_POST['packagename'];
	$work=$_POST['workspacelimit'];
	$user=$_POST['userlimit'];
	$feed=$_POST['feedlimit'];
	$chapter=$_POST['chapterlimit'];
	$audio=$_POST['audiolimit'];
	$desp=$_POST['desp'];
	$status=$_POST['status'];
	$type=$_POST['type'];
	$yearly=$_POST['yearly'];
	$monthly=$_POST['monthly'];
	$qry="UPDATE `package` SET `user_limit`='$user',`workspace_limit`='$work',`feed_limit`='$feed',`chapter_limit`='$chapter',`audio_limit`='$audio',`name`='$name',
	`type`='$type',`yearly`='$yearly',`monthly`='$monthly',`description`='$desp',`status`='$status',`is_deleted`='0' WHERE `id`='$id'";
	$exec=mysqli_query($con,$qry);
	if ($exec) {
		header('location:package.php?msg=upd');
	}else{
			header('location:package.php?msg=err');
	}
}
if(isset($_GET['did'])&&$_GET['did']!=''){
$did=($_GET['did']);
$pid=base64_decode($did);
$delQry=mysqli_query($con,"delete from `feeds` where `id`='$pid'");
if($delQry){
header("location:my-feeds.php?msg=dls");
}else{
header("location:my-feeds.php?msg=err");
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
								 <li class="breadcrumb-item active" aria-current="page">Package</li>
							 </ol>
						 </nav>
						 <h4 class="mg-b-0 tx-spacing--1">Update Package</h4>
					 </div>
					 <div class="d-none d-md-block">
					 <a href="#modalPassword" data-toggle="modal" class="btn btn-xs btn-white flex-fill mg-l-10"><i data-feather="edit-2"></i><span class="d-none d-sm-inline mg-l-5"> Add New Feture</span></a>
					 </div>
				 </div>
		 </div>
	 </div>
 </div>
</div>
<?php include 'include/script.php' ?>
<div class="modal fade effect-scale" id="modalPassword" tabindex="-1" role="dialog" aria-hidden="true" data-keyboard="false" data-backdrop="static">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<form action="" method="post" enctype="multipart/form-data">
			<div class="modal-body pd-20 pd-sm-30">
				<button type="button" class="close pos-absolute t-15 r-20" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h5 class="tx-18 tx-sm-20 mg-b-20">Add Feature list </h5>
				<p class="tx-13 tx-color-03 mg-b-30">You can you add new feature for oto's by clicking <span class="tx-color-02">Save Changes </span> button below to bring up more options.</p>
					<div class="row">
						<div class="col-md-12">
								<label for="">Feature</label>
								<textarea class="form-control" rows="2" name="feature" id="feature" placeholder="Add notes"></textarea>
						</div>

					</div>
				</div>
			<div class="modal-footer">
				<div class="wd-100p d-flex flex-column flex-sm-row justify-content-end">
					<button type="submit" name="submit" id="submit" class="btn btn-primary mg-b-5 mg-sm-b-0">Save Changes</button>
					<button type="button" class="btn btn-secondary mg-sm-l-5" data-dismiss="modal">Cancel</button>
			</div><!-- modal-footer -->
		</div><!-- modal-content -->
	</form>
		</div>
	</div><!-- modal-dialog -->
</div>
</body>
</html>
