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
if(isset($_GET['did'])&&$_GET['did']!=''){
$did=($_GET['did']);
$pid=base64_decode($did);
$delQry=mysqli_query($con,"delete from `feeds` where `id`='$pid'");
if($delQry){
header("location:all-feeds.php?msg=dls");
}else{
header("location:all-feeds.php?msg=err");
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
								 <li class="breadcrumb-item active" aria-current="page">All Giides</li>
							 </ol>
						 </nav>
						 <h4 class="mg-b-0 tx-spacing--1">All Giides</h4>
					 </div>
					 <div class="d-none d-md-block">
					  <!-- <a href="users.php"  class="btn btn-primary btn-sm mb-0" ><i class="fas fa-user"></i> View User</a> -->
					 </div>
				 </div>
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header pb-0">
              <div class="d-lg-flex">
                <div>
                  <h5 class="mb-0">All Feeds</h5>
                  <p class="text-sm mb-0">
                    All feeds created by user.
                  </p>
                </div>
                <div class="ms-auto my-auto mt-lg-0 mt-4">
                  <div class="ms-auto my-auto">
                    <!-- <a href="#" data-bs-toggle="modal" data-bs-target="#createFeedModal" class="btn bg-gradient-danger btn-sm mb-0" target="_blank">Create New Feed</a> -->
                </div>
                </div>
              </div>
            </div>
            <div class="card-body px-0 pb-0">
              <div class="table-responsive">
                <table class="table table-flush" id="products-list">
                  <thead class="thead-light">
                    <tr>
                      <th class="text-center">Sl</th>
                      <th class="text-center">Feed</th>
                      <th class="text-center">Chapter</th>
                      <th class="text-center">Status</th>
											<th class="text-center">Created By</th>
                      <th class="text-center">Date</th>
                      <th class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $qry=mysqli_query($con,"select * from feeds  order by id desc");
                      $sl=0;
                      $num_rows=mysqli_num_rows($qry);
                      if($num_rows>0) {
                      while ($fetch=mysqli_fetch_array($qry)) {
                      $sl++;
                     ?>
                    <tr>
                      <td class="text-sm text-center"><?= $sl?></td>
                      <td class="text-sm text-center"><?= $fetch['name']?></td>
                      <td class="text-sm text-center"><span class="badge badge-pill badge-info"><?= getAllChapterOfFeedByUser($fetch['user_id'],$fetch['id'])?></span></td>
                      <td class="text-sm text-center"><?= getFeedstatus($fetch['status'])?></td>
												<td class="text-sm text-center"><?= getUserName($fetch['user_id'])?></td>
                      <td class="text-sm text-center"><?= date('M d, Y', strtotime($fetch['date'])) ?></td>
                      <td class="text-sm text-center">
                        <a href="viewfeed.php?fid=<?php echo base64_encode($fetch['id']) ?>" class="collection-item"><span class="badge badge-sm badge-success"><i class="fas fa-desktop"></i> </span></a>
                        <a href="all-feeds.php?did=<?php echo base64_encode($fetch['id']) ?>" onclick="return confirm('Are you sure want to delete??')" class="collection-item"><span class="badge badge-sm badge-danger" ><i class="fas fa-trash"></i></span></a>
                      </td>
                    </tr>
                  <?php }}else{  ?>
                  <tr><td colspan="7" align="center">--No Feed found--</td></tr>
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
