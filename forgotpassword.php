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
if(isset($_POST['forgot']))
	{
		$email=$_POST['email'];
	//	$apwd=md5($_POST['password']);
			$admres=mysqli_query($con,"select * from `user` where `email_id`='$email' and is_active='1' ");
      $numrows=mysqli_num_rows($admres);
			if($numrows>0)
			{     $adm=mysqli_fetch_row($admres);
				    $aid=$adm[0];
						$token=base64_encode($email);
						$tokencode=mt_rand(100000,999999);
						$_SESSION['tokencode']=$tokencode;
		      			$_SESSION['emailid']=$email;
						$to=$email;
						$from="rsrsanjeev1991@gmail.com";
						$fromname="Giide";
						$subject="Password Reset link";
						$urllink=$baseurl."resetpassword.php?token=".$token;
						$msg='<!doctype html>
						<html lang="en-US">
						<head>
						    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
						    <title>Reset Password || Giide App</title>
						    <meta name="description" content="Reset Password Giide APP">
						    <style type="text/css">
						        a:hover {text-decoration: underline !important;}
						    </style>
						</head>
						<body marginheight="0" topmargin="0" marginwidth="0" style="margin: 0px; background-color: #f2f3f8;" leftmargin="0">
						    <!--100% body table-->
						    <table cellspacing="0" border="0" cellpadding="0" width="100%" bgcolor="#f2f3f8"
						        style="@import url(https://fonts.googleapis.com/css?family=Rubik:300,400,500,700|Open+Sans:300,400,600,700); font-family:  sans-serif;">
						        <tr>
						            <td>
						                <table style="background-color: #f2f3f8; max-width:670px;  margin:0 auto;" width="100%" border="0"
						                    align="center" cellpadding="0" cellspacing="0">
						                    <tr>
						                        <td style="height:80px;">&nbsp;</td>
						                    </tr>
						                    <tr>
						                        <td style="text-align:center;">
						                          <!-- <a href="https://rakeshmandal.com" title="logo" target="_blank">
						                            <img width="60" src="https://i.ibb.co/hL4XZp2/android-chrome-192x192.png" title="logo" alt="logo">
						                          </a> -->
						                          <h1>Giide App</h1>
						                        </td>
						                    </tr>
						                    <tr>
						                        <td style="height:20px;">&nbsp;</td>
						                    </tr>
						                    <tr>
						                        <td>
						                            <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0"
						                                style="max-width:670px;background:#fff; border-radius:3px; text-align:center;-webkit-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);-moz-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);box-shadow:0 6px 18px 0 rgba(0,0,0,.06);">
						                                <tr>
						                                    <td style="height:40px;">&nbsp;</td>
						                                </tr>
						                                <tr>
						                                    <td style="padding:0 35px;">
						                                        <h1 style="color:#1e1e2d; font-weight:500; margin:0;font-size:32px;font-family:sans-serif;">You have
						                                            requested to reset your password</h1>
						                                        <span
						                                            style="display:inline-block; vertical-align:middle; margin:29px 0 26px; border-bottom:1px solid #cecece; width:100px;"></span>
						                                        <p style="color:#455056; font-size:15px;line-height:24px; margin:0;">
						                                            We cannot simply send you your old password. A unique link to reset your
						                                            password has been generated for you. To reset your password, click the
						                                            following link and follow the instructions.
						                                        </p>
						                                        <h1>'.$tokencode.'</h1>
						                                        <a href='.$urllink.'
						                                            style="background:#20e277;text-decoration:none !important; font-weight:500; margin-top:35px; color:#fff;text-transform:uppercase; font-size:14px;padding:10px 24px;display:inline-block;border-radius:50px;">Reset
						                                            Password</a>
						                                    </td>
						                                </tr>
						                                <tr>
						                                    <td style="height:40px;">&nbsp;</td>
						                                </tr>
						                            </table>
						                        </td>
						                    <tr>
						                        <td style="height:20px;">&nbsp;</td>
						                    </tr>
						                    <!-- <tr>
						                        <td style="text-align:center;">
						                            <p style="font-size:14px; color:rgba(69, 80, 86, 0.7411764705882353); line-height:18px; margin:0 0 0;">&copy; <strong>www.rakeshmandal.com</strong></p>
						                        </td>
						                    </tr> -->
						                    <tr>
						                        <td style="height:80px;">&nbsp;</td>
						                    </tr>
						                </table>
						            </td>
						        </tr>
						    </table>
						    <!--/100% body table-->
						</body>
						</html>
';
						$res=sendForgotpasswordMail($to,$from,$fromname,$subject,$msg);
					header("location:forgotpassword.php?msg=snd");
				
			}
			else
			{
				header("location:forgot-password.php?msg=inf");
			}


		}
if(isset($_GET['msg'])&&$_GET['msg']!=''){
	$msg=$_GET['msg'];
	if($msg=='inf'){
		$msgText="Invalid email or it is not associated with any user";
	}elseif($msg=='cpt'){
		$msgText="Wrong captcha";
	}elseif($msg=='exp'){
		$msgText="Your Session is expired login again";
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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>GiideApp</title>
    <link href="lib/fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
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
			<div class="wd-80p wd-sm-300 mg-b-15">  <img src="assets/img/forgot.png" class="img-fluid" alt=""></div>
			<h4 class="tx-20 tx-sm-24">Reset your password</h4>
			<p class="tx-color-03 mg-b-30 tx-center">Enter your username or email address and we will send you a link to reset your password.</p>
			<?php if(isset($_GET['msg'])&& $_GET['msg']=='inf') {?>
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<?=$msgText?></span>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>
				<?php }?>
					<?php if($_GET['msg']=='snd') {?>
						<div class="alert alert-success fade show" role="alert">
							Password reset link sent.
						</div>
					<?php }else{ ?>
				<form action="" role="form" method="post" data-parsley-validate>
					<div class="d-flex flex-column flex-sm-row">
						<div class="wd-100p  mg-b-40">
							<input type="email" name="email" id="email"  required class="form-control wd-sm-250 flex-fill" placeholder="Enter email address">
						</div>
						<div class="wd-100p  mg-b-40">
							<button type="submit" name="forgot" id="forgot"  class="btn btn-brand-02 mg-sm-l-10 mg-t-10 mg-sm-t-0">Reset Password</button>
						</div>
					</div>
 			</form>
		<?php } ?>
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
  </body>
</html>
