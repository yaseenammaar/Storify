<?php
ob_start();
session_start();
include_once("configuration/connect.php");
include_once("configuration/functions.php");
if(isset($_GET['pid'])&&$_GET['pid']!=''){
	$pid=$_GET['pid'];
}
if (isset($_POST['submit'])) {
	$date=date('Y-m-d');
	$name=$_POST['name'];
	$package=base64_decode($_POST['package']);
	$pid=$_POST['package'];
	$email_id=$_POST['email'];
	$contact=$_POST['mobile'];
	$pwd=md5($_POST['password']);
	$status='1';
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
		$userid=mysqli_insert_id($con);
  	if ($exec) {
			$_SESSION['usrid']=$userid;
 			 header("location:dashboard.php");
  	}else{
  			header('location:registration.php?msg=err');
  	}
 }else{
	 //echo '<script Type="javascript">alert("Email is exits")</script>';
	// header("location:users.php?msg=err2&pid=$pid");
	 header("location:registration.php?msg=err2");
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
		$msgText='<strong> ERROR </strong>:Email already exits!!! ';
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
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>GiideApp</title>
  <?php include('include/css.php') ?>
  <link rel="stylesheet" href="assets/css/dashforge.filemgr.css">
  </head>
  <body class="page-profile">
<!-- navbar -->
<?php include('include/header.php'); ?>
<?php $pkg=getPackageDetailsById($userDetails['package']);

?>
<div class="content content-fixed content-auth">
	<div class="container">
		<div class="media align-items-stretch justify-content-center ht-100p">
			<div class="sign-wrapper mg-lg-r-50 mg-xl-r-60">
				<div class="pd-t-20 wd-100p">
					<h4 class="tx-color-01 mg-b-5">Create New Account</h4>
					<p class="tx-color-03 tx-16 mg-b-40">It's take only few a minute.</p>
					<?php if (isset($_GET['msg'])&&$_GET['msg']!='') {?>
					<div class="alert alert-<?=$class?> alert-dismissible fade show" role="alert">
						<?=$msgText?>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
				<?php  } ?>
<form class="" action="" method="post">
							<input type="hidden" name="package" value="<?=$pid?>">
							<div class="form-group">
								<label>Name</label>
								<input type="text" id="name" name="name" class="form-control" placeholder="Enter your name">
							</div>
							<div class="form-group">
								<label>Email address</label>
								<input type="email" id="email" name="email" class="form-control" placeholder="Enter your email address">
							</div>

							<div class="form-group">
								<label>Contact Number</label>
								<input type="mobile" id="mobile" name="mobile" class="form-control" placeholder="##########">
							</div>

							<div class="form-group">
								<label>Password</label>

								<div class="input-group">
  	<input type="password" id="password" name="password" class="form-control" placeholder="********">
  <div class="input-group-append">
    <span  class="input-group-text "><i toggle="#password" class="toggle-password far fa-eye "></i></span>
  </div>
</div>
							</div>

					<div class="form-group tx-12">
						By clicking <strong>Create an account</strong> below, you agree to our terms of service and privacy statement.
					</div><!-- form-group -->

					<button type="submit" name="submit" class="btn btn-brand-02 btn-block">Create Account</button>

				</form>
					<div class="divider-text">or</div>
					<div class="tx-13 mg-t-20 tx-center">Already have an account? <a href="index.php">Sign In</a></div>
				</div>
			</div><!-- sign-wrapper -->
			<div class="media-body pd-y-30 pd-lg-x-50 pd-xl-x-60 align-items-center d-none d-lg-flex pos-relative">
				<div class="mx-lg-wd-500 mx-xl-wd-550">
					<img src="assets/img/1.png" class="img-fluid" alt="">
				</div>
			</div><!-- media-body -->
		</div><!-- media -->
	</div><!-- container -->
</div><!-- content -->
<?php include('include/footer.php'); ?>
<?php include('include/script.php'); ?>
<script type="text/javascript">
$(".toggle-password").click(function() {

$(this).toggleClass("far fa-eye far fa-eye-slash");
var input = $($(this).attr("toggle"));
if (input.attr("type") == "password") {
	input.attr("type", "text");
} else {
	input.attr("type", "password");
}
});
</script>
</body>
</html>
