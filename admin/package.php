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
if(isset($_GET['did'])&&$_GET['did']!=''){
$did=base64_decode($_GET['did']);
$delQry=mysqli_query($con,"update package set is_deleted='1' where `id`='$did'");
if($delQry){
header("location:package.php?msg=dls");
}else{
header("location:package.php?msg=err");
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
						 <h4 class="mg-b-0 tx-spacing--1">Package</h4>
					 </div>
					 <!-- <div class="d-none d-md-block">
					  <a href="addpackage.php"  class="btn bg-primary btn-sm mb-0" ><i class="fa-solid fa-crown"></i> Create New Package</a>
					 </div> -->
				 </div>
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
                      <a href="addpackage.php?pid=<?=base64_encode($oto1['id'])?>"><button class="btn btn-primary btn-block">Edit Plan</button></a>
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
                      <a href="adminpackage.php?pid=<?=base64_encode($oto2['id'])?>"><button class="btn btn-primary btn-block">Edit Plan</button><a/>
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
                      <a href="addpackage.php?pid=<?=base64_encode($oto3['id'])?>"><button class="btn btn-primary btn-block">Edit Plan</button></a>
                    </div><!-- col -->
                  </div><!-- row -->
                </div><!-- container -->
              </div><!-- content -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
<?php include 'include/script.php' ?>
<script src="../lib/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../lib/datatables.net-dt/js/dataTables.dataTables.min.js"></script>
<script src="../lib/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="../lib/datatables.net-responsive-dt/js/responsive.dataTables.min.js"></script>
<script>
$('#products-list').DataTable({
	language: {
		searchPlaceholder: 'Search...',
		sSearch: '',
		lengthMenu: '_MENU_ items/page',
	}
});

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
