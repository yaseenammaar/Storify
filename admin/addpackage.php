<?php
ob_start();
session_start();
$adminId=$_SESSION['aid'];
include_once("../configuration/connect.php");
include_once("../configuration/functions.php");
 header('Content-Type:application:json');
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
		$fet=$_POST['fet'];
	$yearly=$_POST['yearly'];
	$monthly=$_POST['monthly'];
	$qry="INSERT INTO `package`(`feature`,`user_limit`,`workspace_limit`, `feed_limit`, `chapter_limit`, `audio_limit`, `name`, `type`,`yearly`,`monthly`, `description`, `status`, `is_deleted`, `created_date`)
	VALUES ('$fet','$user','$work','$feed','$chapter','$audio','$name','$type','$yearly','$monthly','$desp','$status','0','$date')";
	$exec=mysqli_query($con,$qry);
	if ($exec) {
		header('location:package.php?msg=ins');
	}else{
			header('location:package.php?msg=err');
	}
}
if (isset($_POST['featuresubmit']))
   {
        $pid = base64_encode($_POST['hidId']);
        $name = $_POST['feature'];

        $sql=mysqli_query($con,"INSERT INTO `otofeature`( `name`, `status`)
         VALUES ('$name','1')");
				 if ($sql) {
	 				header("location:addpackage.php?msg=ins&pid=$pid");
	 			}else{
	 					header("location:addpackage.php?msg=err&pid=$pid");
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
		$fet=json_encode($_POST['fet']);
	$yearly=$_POST['yearly'];
	$monthly=$_POST['monthly'];
	$qry="UPDATE `package` SET `feature`='$fet', `user_limit`='$user',`workspace_limit`='$work',`feed_limit`='$feed',`chapter_limit`='$chapter',`audio_limit`='$audio',`name`='$name',
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
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card">

					 <?php if(isset($_GET['pid'])) {
						 	$pid=base64_decode($_GET['pid']);
							$fetch=mysqli_fetch_array(mysqli_query($con,"select * from  package where id='$pid'"));
						 ?>
						 <div class="card-body px-0 pb-0">
								 <form class="" action="" enctype="multipart/form-data" method="post">
										 <div class="row p-3">
											 <div class="col-md-8 ">
												 <div class="row mg-b-10">
													 <div class="col-12 col-md-6 col-sm-6 mg-b-10">
														 <label for="packagename">Packege Name</label>
														 <input type="text" name="packagename" required class="form-control" value="<?=$fetch['name']?>">
													 </div>
													 <div class="col-12 col-md-6 col-sm-6 mg-b-10">
													 <label for="amount">Package Type</label>
													 <select class="form-control" name="type">
													 		<option value="1">Yearly</option>
															<option value="2">Monthly</option>
															<option value="3">Both</option>
													 </select>
												 </div>
													 <div class="col-12 col-md-6 col-sm-6 mg-b-10">
														<label for="amount">Monthly Amount</label>
														<input type="number" name="monthly" class="form-control" value="<?=$fetch['monthly']?>">
													</div>
													<div class="col-12 col-md-6 col-sm-6 mg-b-10">
													 <label for="amount">Yearly Amount</label>
													 <input type="number" name="yearly" class="form-control" value="<?=$fetch['yearly']?>">
												 </div>
												 </div>
												 <div class="row mt-1 mg-b-10">
													 <!-- <div class="col-12 col-md-2 col-sm-2">
														<label for="userlimit">Workspace Limit</label>
														<input type="number" name="workspacelimit"  class="form-control" value="<?=$fetch['workspace_limit']?>">
													</div> -->
													 <!-- <div class="col-12 col-md-2 col-sm-2">
														<label for="userlimit">User Limit</label>
														<input type="number" name="userlimit"  class="form-control" value="<?=$fetch['user_limit']?>">
													</div> -->
													<div class="col-12 col-md-6 col-sm-6 mg-b-10">
														<label for="feedlimit">Feed Limit</label>
														<input type="number" name="feedlimit" class="form-control" value="<?=$fetch['feed_limit']?>">
													</div>
													<div class="col-12 col-md-6 col-sm-6 mg-b-10">
														<label for="chapterlimit">Chapter Limit</label>
														<input type="number" name="chapterlimit" class="form-control" value="<?=$fetch['chapter_limit']?>">
													</div>
													<div class="col-12 col-md-6 col-sm-6 mg-b-10">
														<label for="audiolimit">Audio Limit</label>
														<input type="number" name="audiolimit" class="form-control" value="<?=$fetch['audio_limit']?>" data-bs-toggle="tooltip" data-bs-placement="bottom" title="blank for unlimited">
													</div>
													<div class="col-12 col-md-6 col-sm-6 mg-b-10">
															<label for="status">Status</label>
														<select class="form-control" name="status">
															<option value="1" <?php if($fetch['status']=='1'){ ?>selected<?php } ?> >Active</option>
															<option value="0" <?php if($fetch['status']=='0'){ ?>selected<?php } ?>>Block</option>
														</select>
													</div>
												 </div>
												 <div class="row mt-1 mg-b-10">
													 <div class="col-md-12">
														 <label for="description">Description</label>
														 <textarea name="desp" class="form-control" rows="8" cols="80"><?=$fetch['description']?></textarea>
													 </div>
												 </div>
												 <div class="row mg-t-10 mg-b-10">
													 <div class="col-md-12 mg-t-10 " style="text-align:right;">
															<input type="hidden" name="hidId" value="<?=$fetch['id']?>">
															 <input type="submit" class="btn btn-primary mg-t-10" name="update" value="Save Changes">
													 </div>
												 </div>
											 </div>
											 <div class="col-md-4 col-sm-4 ">
											 	<h5>Feature List</h5>
												<?php $qry=mysqli_query($con,'select * from otofeature');
												$fetureList=json_decode($fetch['feature']);
												//print_r($fetureList);
												while ($fQry=mysqli_fetch_array($qry)) {?>
												<div class="custom-control custom-switch pd-t-10 pd-b-10" style="border-bottom:1px solid #eee">
											  <input type="checkbox" name="fet[]"
												<?php if (in_array($fQry['id'], $fetureList)){?>checked<?php } ?>
												 class="custom-control-input" id="customSwitch<?=$fQry['id']?>" value="<?=$fQry['id']?>">
											  <label class="custom-control-label" for="customSwitch<?=$fQry['id']?>"><?=$fQry['name']?></label>
												</div>
												<?php	}?>
											 </div>
										 </div>

								 </form>
						 </div>
					 <?php }?>
          </div>
        </div>
      </div>
    </div>
  </main>

<?php include 'include/script.php' ?>
<script src="../assets/js/parsley.min.js"></script>
<!-- <script>
$(document).ready(function(){
$("#featureForm").on('submit', function(e){
		e.preventDefault();
		$.ajax({
				type: 'POST',
				url: 'addfeature.php',
				data: new FormData(this),
				contentType: false,
				cache: false,
				processData:false,
				beforeSend: function(){
						$('#loader-icon').show();
				},
				error:function(){
						alert("Network error");
				},
				success: function(resp){
						window.location="addpackage.php?pid="+resp;
				}
		});
});
$("#featuresubmit").click(function(){
		$("#featureForm").submit();
});
});
</script> -->
<!-- <script src="../assets1/js/plugins/datatables.js"></script>
<script>
  if (document.getElementById('products-list')) {
    const dataTableSearch = new simpleDatatables.DataTable("#products-list", {
      searchable: true,
      fixedHeight: false,
      perPage: 7
    });
    document.querySelectorAll(".export").forEach(function(el) {
      el.addEventListener("click", function(e) {
        var type = el.dataset.type;
        var data = {
          type: type,
          filename: "soft-ui-" + type,
        };
        if (type === "csv") {
          data.columnDelimiter = "|";
        }
        dataTableSearch.export(data);
      });
    });
  };
  $(document).ready(function() {
  $(".alert").fadeTo(2000, 500).slideUp(500, function() {
    $(".alert").slideUp(500);
  });
});
$(document).ready(function() {

$(".close").click(function() {
  $(".alert").fadeTo(2000, 500).slideUp(500, function() {
    $(".alert").slideUp(500);
  });
});
});
</script> -->
</body>
<div class="modal fade effect-scale" id="modalPassword" tabindex="-1" role="dialog" aria-hidden="true" data-keyboard="false" data-backdrop="static">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<form id="featureForm"name="featureForm" action="" method="post" enctype="multipart/form-data"  data-parsley-validate>
			<div class="modal-body pd-20 pd-sm-30">
				<button type="button" class="close pos-absolute t-15 r-20" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h5 class="tx-18 tx-sm-20 mg-b-20">Add Feature list </h5>
				<p class="tx-13 tx-color-03 mg-b-30">You can you add new feature for oto's by clicking <span class="tx-color-02">Save Changes </span> button below to bring up more options.</p>
					<div class="row">
						<div class="col-md-12">
								<label for="">Feature</label>
								<input type="hidden" name="hidId" id="hidId" value="<?=$pid?>">
								<textarea required class="form-control" rows="2" name="feature" id="feature" placeholder="Add Feature"></textarea>
						</div>

					</div>
				</div>
			<div class="modal-footer">
				<div class="wd-100p d-flex flex-column flex-sm-row justify-content-end">
					<button type="submit" name="featuresubmit" id="featuresubmit" class="btn btn-primary mg-b-5 mg-sm-b-0">Save Changes</button>
					<button type="button" class="btn btn-secondary mg-sm-l-5" data-dismiss="modal">Cancel</button>
			</div><!-- modal-footer -->
		</div><!-- modal-content -->
	</form>
		</div>
	</div><!-- modal-dialog -->
</div>
</html>
