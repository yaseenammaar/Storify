<?php
ob_start();
session_start();
//$adminId=$_SESSION['aid'];
include_once("configuration/connect.php");
include_once("configuration/functions.php");
if(isset($_SESSION["usrid"])) {
if(isLoginSessionExpired()) {
header("Location:logout.php");
}
}
if(isset($_GET['token']))
{
$token=$_GET['token'];
}
if(isset($_POST['submit']))
	{
		$tokencode=$_SESSION['tokencode'];
		$email=$_SESSION['emailid'];
		$usertoken=$_POST['token'];
		$pwd=$_POST['password'];
		if($usertoken==$tokencode) {
			$admres=mysqli_query($con,"select * from `user` where `email_id`='$email' and `password`='$apwd' and is_active='1' ");
				$numrows=mysqli_num_rows($admres);
				if($numrows>0)
				{   $adm=mysqli_fetch_row($admres);$aid=$adm[0];
						mysqli_query($con,"update user set password='$pwd' where id='$aid'");
						header("location:index.php?msg=chng");
				}
				else
				{
						header("location:index.php?msg=err");
				}

		}else{
				header("location:resetpassword.php?msg=err");
		}


		}
if(isset($_GET['msg'])&&$_GET['msg']!=''){
	$msg=$_GET['msg'];
	if($msg=='inf'){
		$msgText="Wrong Username Or Password";
	}elseif($msg=='cpt'){
		$msgText="Wrong captcha";
	}elseif($msg=='exp'){
		$msgText="Your Session is expired login again";
	}
	elseif($msg=='err'){
		$msgText="Wrong token";
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
  <link href="lib/@fortawesome/fontawesome-free/css/all.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/dashforge.css">
    <link rel="stylesheet" href="assets/css/dashforge.auth.css">
  </head>
  <body>

    <header class="navbar navbar-header navbar-header-fixed">
      <a href="#" id="mainMenuOpen" class="burger-menu"><i data-feather="menu"></i></a>
      <div class="navbar-brand">
        <a href="#" class="df-logo">Giide<span>app</span></a>
      </div>
      <div class="navbar-right">
        <a href="#" class="btn btn-social"><i data-feather="facebook"></i></a>
        <a href="#" class="btn btn-social"><i data-feather="twitter"></i></a>
        <a href="#" class="btn btn-social"><i data-feather="instagram"></i></a>
      </div><!-- navbar-right -->
    </header><!-- navbar -->
		<div class="content content-fixed content-auth-alt">
	<div class="container d-flex justify-content-center ht-100p">
		<div class="mx-wd-300 wd-sm-450 ht-100p d-flex flex-column align-items-center justify-content-center">
			<div class="wd-80p wd-sm-300 mg-b-15">  <img src="assets/img/1.png" class="img-fluid" alt=""></div>
			<h4 class="tx-20 tx-sm-24">Reset your password</h4>
			<?php if(isset($_GET['msg'])) {?>
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<?=$msgText?></span>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>
				<?php }?>
				<form action="" role="form" method="post" data-parsley-validate>
					<input type="hidden" name="token" readonly value="<?=$token?>">
					<input type="hidden" name="email" readonly value="<?=$_SESSION['emailid']?>">
						<div class="row d-100p  ">
							<div class="col-md-12 mg-b-10">
								<label for="token">Enter Token *</label>
								<input type="text" class="form-control" name="token" id="token" required value="">
							</div>
							<div class="col-md-12 mg-b-10">
								<label for="pwd">New Password *</label>
								<div class="input-group">
								<input type="password" id="password" name="password" class="form-control" placeholder="********">
									<div class="input-group-append">
										<span  class="input-group-text "><i toggle="#password" class="far fa-eye toggle-password"></i></span>
									</div>
								</div>
							</div>

							<div class="col-md-12 ">
									<button type="submit" name="submit" id="submit" class="btn btn-brand-02 btn-block ">Reset Password</button>
							</div>
						</div>
						<!-- <div class="wd-100p  mg-b-40">
							<input type="email" required class="form-control wd-sm-250 flex-fill" placeholder="Enter email address">
						</div>
						<div class="wd-100p  mg-b-40">
							<button type="submit"  class="btn btn-brand-02 mg-sm-l-10 mg-t-10 mg-sm-t-0">Reset Password</button>
						</div> -->

 			</form>
		</div>
	</div><!-- container -->
</div>
    <footer class="footer">
      <div>
        <span>&copy; 2022 Giide App. </span>
      </div>
      <div>
        <nav class="nav">
          <a href="#" class="nav-link">Terms & Condition</a>
          <a href="#" class="nav-link">Privacy Policy</a>
          <a href="#" class="nav-link">Get Help</a>
        </nav>
      </div>
    </footer>

		<script src="lib/jquery/jquery.min.js"></script>
		<script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
		<script src="lib/feather-icons/feather.min.js"></script>
		<script src="lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="assets/js/dashforge.js"></script>
		<script src="assets/js/dashforge.sampledata.js"></script>
		<!-- append theme customizer -->
		<script src="lib/js-cookie/js.cookie.js"></script>
		<script src="assets/js/dashforge.settings.js"></script>
		<script src="assets/js/parsley.min.js"></script>
    <script>
      $(function(){
        'use script'

        window.darkMode = function(){
          $('.btn-white').addClass('btn-dark').removeClass('btn-white');
        }

        window.lightMode = function() {
          $('.btn-dark').addClass('btn-white').removeClass('btn-dark');
        }

        var hasMode = Cookies.get('df-mode');
        if(hasMode === 'dark') {
          darkMode();
        } else {
          lightMode();
        }
      })
    </script>
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
