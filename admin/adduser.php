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
	$date=date('Y-m-d');
	$name=$_POST['name'];
	$package=$_POST['package'];
	$email_id=$_POST['email_id'];
	$contact=$_POST['contact'];
	$pwd=md5($_POST['pwd']);
	$rpwd=$_POST['rpwd'];
	$status=$_POST['status'];
	$type=$_POST['type'];
	if ($type=='1') {
	 $exp=Date('Y-m-d', strtotime('+365 days'));
 }else{
	 $exp=Date('Y-m-d', strtotime('+30 days'));
 }
 $checkEmail=checkEmailofUser($email_id);
 if ($checkEmail=='0') {
	 $qry="INSERT INTO `user`( `name`, `email_id`, `password`, `contact_no`, `user_type`, `package`, `package_type`, `expiry`, `created_by`, `is_active`, `is_deleted`, `created_date`)
   VALUES ('$name','$email_id','$pwd','$contact','1','$package','$type','$exp','','$status','0','$date')";

  	$exec=mysqli_query($con,$qry);
  	if ($exec) {
  		header('location:users.php?msg=ins');
  	}else{
  			header('location:users.php?msg=err');
  	}
 }else{
	 //echo '<script Type="javascript">alert("Email is exits")</script>';
	 header('location:users.php?msg=err2');
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
	}
	elseif($msg=='err2'){
		$msgText='<strong> ERROR </strong>:Email is exits!!! ';
		$class="danger";
	}
	elseif ($msg=='dls') {
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
								 <li class="breadcrumb-item active" aria-current="page">Users</li>
							 </ol>
						 </nav>
						 <h4 class="mg-b-0 tx-spacing--1">All User</h4>
					 </div>
					 <div class="d-none d-md-block">
					  <a href="users.php"  class="btn btn-primary btn-sm mb-0" ><i class="fas fa-user"></i> View User</a>
					 </div>
				 </div>
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <?php if(isset($_GET['msg'])) {?>
             <div class="alert alert-<?= $class?> alert-dismissible fade show" role="alert"><?=$msgText?></span>
               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
               </button>
             </div>
           <?php }?>
            <div class="card-header pb-0">
              <div class="d-lg-flex">
                <div>
                  <h5 class="mb-0">Add New User</h5>

                </div>
                <div class="ms-auto my-auto mt-lg-0 mt-4">

                </div>
              </div>
            </div>
            <div class="card-body px-0 pb-0">
								<form class="" action="" enctype="multipart/form-data" method="post" data-parsley-validate>
										<div class="row p-3">
											<div class="col-md-12 col-sm-12 col-xl-12">
												<div class="row">
													<div class="col-12 col-md-3 col-sm-6">
														<label for="amount">Select Package</label>
														<select class="form-control" name="package" required>
															 <option value="">Select package</option>
																<?php $qry=mysqli_query($con,"select * from package where status='1' and is_deleted='0' order by id asc");
																while($pack=mysqli_fetch_array($qry)){?>
																 <option value="<?=$pack['id']?>"><?=$pack['name']?></option>
															 <?php } ?>
														</select>
													</div>
													<div class="col-12 col-md-3 col-sm-6">
													<label for="amount">Package Type</label>
													<select class="form-control" name="type" required>
														 <option value="1">Yearly</option>
														 <option value="2">Monthly</option>
													</select>
												</div>
												<div class="col-12 col-md-3 col-sm-6">
												 <label for="userlimit">User Name</label>
												 <input type="text" name="name" required  class="form-control" value="">
											 </div>
											 <div class="col-12 col-md-3 col-sm-6">
												<label for="userlimit">Email</label>
												<input type="text" name="email_id"  required class="form-control" value="">
											</div>
												</div>

												<div class="row mt-4">
													<div class="col-12 col-md-3 col-sm-6">
														<label for="feedlimit">Contact</label>
														<input type="number" name="contact" required maxlength="10" class="form-control" value="">
													</div>
													<div class="col-12 col-md-3 col-sm-6">
 													 <label for="chapterlimit">Password</label>
 													 <input type="password" required name="pwd" class="form-control" value="">
 												 </div>
 												 <div class="col-12 col-md-3 col-sm-6">
 													 <label for="audiolimit">Confirm Password</label>
 													 <input type="password" required name="rpwd" class="form-control" value="" >
 												 </div>
 												 <div class="col-12 col-md-3 col-sm-6">
 														 <label for="status">Status</label>
 													 <select class="form-control" name="status">
 														 <option value="1" <?php if($fetch['status']=='1'){ ?>selected<?php } ?> >Active</option>
 														 <option value="0" <?php if($fetch['status']=='0'){ ?>selected<?php } ?>>Block</option>
 													 </select>
 												 </div>
												</div>
												<div class="row mt-1">

													<div class="col-md-12 " style="text-align:right;">

															<input type="submit" class="btn btn-primary btn-sm mt-4" name="submit" value="Save">
													</div>
												</div>
											</div>
										</div>
								</form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
<?php include 'include/script.php' ?>
<script src="../assets1/js/plugins/datatables.js"></script>
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
</script>
</body>
</html>
