<?php
ob_start();
session_start();
include_once("configuration/connect.php");
include_once("configuration/functions.php");
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
    <div class="content content-fixed">
      <div class="container pd-x-0 pd-lg-x-10 pd-xl-x-0">
        <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-30">
          <div>
            <h4>Plan Details</h4>

          </div>
        </div>
        <?php if (isset($_GET['msg'])&&$_GET['msg']!='') {?>
        <div class="alert alert-<?=$class?> alert-dismissible fade show" role="alert">
          <?=$msgText?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
      <?php  } ?>
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body px-0 pb-0">
              <div class="content">
                <div class="container ht-100p tx-center">
                  <div class="row justify-content-center">
                    <?php $oto1=getPackageDetailsById(11); ?>
                    <div class="col-10 col-sm-6 col-md-4 col-lg-3 d-flex flex-column">
                      <div class="tx-100 lh-1"><i class="icon ion-ios-bicycle"></i></div>
                      <h3 class="mg-b-25"><?=$oto1['name']?></h3>
                      <div class="tx-color-03 mg-b-25">
                        <?php $qry=mysqli_query($con,'select * from otofeature');
                        $fetureList=json_decode($oto1['feature']);
                        //print_r($fetureList);
                        while ($fQry=mysqli_fetch_array($qry)) {?>
                        <div class="tx-left pd-t-10 pd-b-10" style="border-bottom:1px solid #eee">
                        <?php if (in_array($fQry['id'], $fetureList)){?>
                          <i style="color:green"  class="far fa-check-circle mg-r-5"></i>
                        <?php }else { ?>
                          <i class="far fa-times-circle mg-r-5" style="color:red" ></i>
                        <?php } ?>
                        <?=$fQry['name']?>
                        </div>
                        <?php	}?>
                      </div>
                      <h1 class="tx-rubik tx-normal mg-b-30 mg-t-auto">$<?=$oto1['yearly']?></h1>
                      <a href="registration.php?pid=<?=base64_encode($oto1['id'])?>"><button class="btn btn-primary btn-block">Get Started</button></a>
                    </div><!-- col -->
                      <?php $oto2=getPackageDetailsById(12); ?>
                    <div class="col-10 col-sm-6 col-md-4 col-lg-3  d-flex flex-column">
                      <div class="tx-100 lh-1"><i class="icon ion-ios-car"></i></div>
                      <h3 class="mg-b-25"><?=$oto2['name']?></h3>
                      <div class="tx-color-03 mg-b-25">
                        <?php $qry=mysqli_query($con,'select * from otofeature');
                        $fetureList=json_decode($oto2['feature']);
                        //print_r($fetureList);
                        while ($fQry=mysqli_fetch_array($qry)) {?>
                        <div class="tx-left pd-t-10 pd-b-10" style="border-bottom:1px solid #eee">

                        <?php if (in_array($fQry['id'], $fetureList)){?><i style="color:green"  class="far fa-check-circle mg-r-5"></i><?php }else { ?><i class="far fa-times-circle mg-r-5" style="color:red" ></i><?php } ?>
                        <?=$fQry['name']?>
                        </div>
                        <?php	}?>
                      </div>
                      <h1 class="tx-rubik tx-normal mg-b-30 mg-t-auto">$99.00</h1>
                      <a href="registration.php?pid=<?=base64_encode($oto2['id'])?>"><button class="btn btn-primary btn-block">Get Started</button><a/>
                    </div><!-- col -->
                      <?php $oto3=getPackageDetailsById(13); ?>
                    <div class="col-10 col-sm-6 col-md-4 col-lg-3  mg-t-40 mg-md-t-0  d-flex flex-column">
                      <div class="tx-100 lh-1"><i class="icon ion-ios-train"></i></div>
                      <h3 class="mg-b-25"><?=$oto3['name']?></h3>
                      <div class="tx-color-03 mg-b-25">
                        <?php $qry=mysqli_query($con,'select * from otofeature');
                        $fetureList=json_decode($oto3['feature']);
                        //print_r($fetureList);
                        while ($fQry=mysqli_fetch_array($qry)) {?>
                        <div class="tx-left pd-t-10 pd-b-10" style="border-bottom:1px solid #eee">
                        <?php if (in_array($fQry['id'], $fetureList)){?><i style="color:green"  class="far fa-check-circle mg-r-5"></i><?php }else { ?><i class="far fa-times-circle mg-r-5" style="color:red" ></i><?php } ?>
                        <?=$fQry['name']?>
                        </div>
                        <?php	}?>
                      </div>
                      <h1 class="tx-rubik tx-normal mg-b-30 mg-t-auto">$<?=$oto3['yearly']?></h1>
                      <a href="registration.php?pid=<?=base64_encode($oto3['id'])?>"><button class="btn btn-primary btn-block">Get Started</button></a>
                    </div><!-- col -->
                  </div><!-- row -->
                </div><!-- container -->
              </div><!-- content -->
            </div>
          </div>
        </div>
      </div>
      </div><!-- container -->
    </div><!-- content -->
<?php include('include/footer.php'); ?>
<?php include('include/script.php'); ?>
<script src="assets/js/dashforge.filemgr.js"></script>
</body>
</html>
