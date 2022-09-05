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
					 <div class="d-none d-md-block">
					  <a href="addpackage.php"  class="btn bg-primary btn-sm mb-0" ><i class="fa-solid fa-crown"></i> Create New Package</a>
					 </div>
				 </div>
      <div class="row row-xs">
        <div class="col-12">
          <div class="card">

            <div class="card-header pb-0">
              <div class="d-lg-flex">
                <div>
                  <h5 class="mb-0">All Packege</h5>
                </div>
                <div class="ms-auto my-auto mt-lg-0 mt-4">
                  <div class="ms-auto my-auto">

                </div>
                </div>
              </div>
            </div>
            <div class="card-body px-0 pb-0">
              <div class="table-responsive">
                <table class="table table-flush" id="products-list">
                  <thead class="thead-light">
                    <tr>
                      <th>Sl</th>
                      <th>Package</th>
											<th>Monthly($)</th>
											<th>Yearly($)</th>
                      <th>User Limit</th>
											<th>Feed Limit</th>
											<th>Chapter Limit</th>
											<th>Audio Limit</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $qry=mysqli_query($con,"select * from package where is_deleted='0'  order by id asc");
                      $sl=0;
                      $num_rows=mysqli_num_rows($qry);
                      if($num_rows>0) {
                      while ($fetch=mysqli_fetch_array($qry)) {
                      $sl++;
										if ($fetch['audio_limit']!='') {
										 	$audio=$fetch['audio_limit'];
										}else{
											$audio='<i class="fa-solid fa-infinity"></i>';
										}
										if ($fetch['user_limit']!='') {
											$user_limit=$fetch['user_limit'];
										}else{
											$user_limit='<i class="fa-solid fa-infinity"></i>';
										}
										if ($fetch['feed_limit']!='') {
											$feed_limit=$fetch['feed_limit'];
										}else{
											$feed_limit='<i class="fa-solid fa-infinity"></i>';
										}
										if ($fetch['chapter_limit']!='') {
											$chapter_limit=$fetch['chapter_limit'];
										}else{
											$chapter_limit='<i class="fa-solid fa-infinity"></i>';
										}
                     ?>
                    <tr>
                      <td class="text-sm"><?= $sl?></td>
                      <td class="text-sm"><?= $fetch['name']?></td>
											 <td class="text-sm text-center"><?= $fetch['monthly']?></td>
											  <td class="text-sm text-center"><?= $fetch['yearly']?></td>
                      <td class="text-sm text-center"><?= $user_limit?></td>
											  <td class="text-sm text-center"><?= $feed_limit?></td>
												  <td class="text-sm text-center"><?= $chapter_limit?></td>
													  <td class="text-sm text-center"><?=$audio  ?> </td>

                      <td class="text-sm"><?= getPackageStatus($fetch['status'])?></td>
                      <td class="text-sm">
                        <a href="addpackage.php?pid=<?php echo base64_encode($fetch['id']) ?>" class="collection-item"><span class="badge badge-primary"><i class="fas fa-desktop"></i> </span></a>
                        <a href="package.php?did=<?php echo base64_encode($fetch['id']) ?>" onclick="return confirm('Are you sure want to delete??')" class="collection-item"><span class="badge badge-danger" ><i class="fas fa-trash"></i></span></a>
                      </td>
                    </tr>
                  <?php }}else{  ?>
                  <tr><td colspan="5" align="center">--No package found--</td></tr>
                  <?php } ?>
                  </tbody>
                </table>
              </div>
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
