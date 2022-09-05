<?php $userDetails=getUserDetails($userId);
$pkg=getPackageDetailsById($userDetails['package']);
?>
<header class="navbar navbar-header navbar-header-fixed">
  <a href="#" id="mainMenuOpen" class="burger-menu"><i data-feather="menu"></i></a>
  <div class="navbar-brand">
    <a href="#" class="df-logo">Giide<span>App</span></a>
  </div><!-- navbar-brand -->
  <div id="navbarMenu" class="navbar-menu-wrapper">
    <div class="navbar-menu-header">
      <a href="#" class="df-logo">Giide<span>App</span></a>
      <a id="mainMenuClose" href="#"><i data-feather="x"></i></a>
    </div><!-- navbar-menu-header -->
    <ul class="nav navbar-menu">
      <li class="nav-label pd-l-20 pd-lg-l-25 d-lg-none">Main Navigation</li>
      <li class="nav-item active">
        <a href="dashboard.php" class="nav-link"><i data-feather="pie-chart"></i> Dashboard</a>
      </li>
        <?php if (isset($_GET['cpid'])&& $_GET['cpid']!='') { ?>
      <li class="nav-item with-sub">
        <a href="#" class="nav-link"><i data-feather="package"></i><?=$fetchRow[0]?></a>
        <ul class="navbar-menu-sub">
          <li class="nav-sub-item" disabled><a style="pointer-events: none" href="javascript:void(0)" class="nav-sub-link">Preview</a></li>
          <li class="nav-sub-item" disabled><a href="javascript:void(0)" style="pointer-events: none" class="nav-sub-link">Publish</a></li>
          <li class="nav-sub-item"><a href="#" disabled class="nav-sub-link">Get Share Link</a></li>
          <li class="nav-sub-item"><a href="#" class="nav-sub-link">Delete</a></li>
          <li class="nav-sub-item"><a href="#" disabled class="nav-sub-link">Unpublish</a></li>
        </ul>
      </li>
      <?php } ?>
    </ul>
  </div><!-- navbar-menu-wrapper -->
  <div class="navbar-right">
    <a id="navbarSearch" href="#" class="search-link"><i data-feather="search"></i></a>
<!-- dropdown -->
    <div class="dropdown dropdown-notification">
      <a href="#" class="dropdown-link new-indicator" data-toggle="dropdown">
        <i data-feather="bell"></i>
        <span class="count">0</span>
      </a>
      <div class="dropdown-menu dropdown-menu-right">
        <div class="dropdown-header">Notifications</div>
        <div class="dropdown-item notification-item">
  
        <!-- media -->
        </div>
        <div class="dropdown-footer"><a href="notification.php">View all Notifications</a></div>
      </div><!-- dropdown-menu -->
    </div><!-- dropdown -->
    <div class="dropdown dropdown-profile">
      <a href="#" class="dropdown-link" data-toggle="dropdown" data-display="static">
        <div class="avatar avatar-sm">
            <?php if ($userDetails['photo']==''){ ?>
          <img alt="Image placeholder" src="assets/img/user.png" class="rounded-circle">
    <?php }else{ ?>
  <img alt="Image placeholder" src="assets/img/user/<?=$userDetails['photo']?>" class="rounded-circle">
<?php } ?>
        </div>
      </a><!-- dropdown-link -->
      <div class="dropdown-menu dropdown-menu-right tx-13">
        <div class="avatar avatar-lg mg-b-15">  <?php if ($userDetails['photo']==''){ ?>
          <img alt="Image placeholder" src="assets/img/user.png" class="rounded-circle">
  <?php }else{ ?>
<img alt="Image placeholder" src="assets/img/user/<?=$userDetails['photo']?>" class="rounded-circle">
<?php } ?></div>
        <h6 class="tx-semibold mg-b-5"><?=$userDetails['name']?></h6>
        <a href="profile.php" class="dropdown-item"><i data-feather="user"></i> View Profile</a>
            <a href="#" class="dropdown-item"><i data-feather="help-circle"></i> Help Center</a>
        <div class="dropdown-divider"></div>


        <a href="logout.php" class="dropdown-item"><i data-feather="log-out"></i>Sign Out</a>
      </div><!-- dropdown-menu -->
    </div><!-- dropdown -->
  </div><!-- navbar-right -->
    <form class="" action="search.php" method="post">
  <div class="navbar-search">
    <div class="navbar-search-header">
        <input type="search" name="search" id="search"  class="form-control" placeholder="Search your giide ">
        <button class="btn" type="submit"><i data-feather="search"></i></button>
          <a id="navbarSearchClose" href="#" class="link-03 mg-l-5 mg-lg-l-10"><i data-feather="x"></i></a>
    </div><!-- navbar-search-header -->
  </div><!-- navbar-search -->
  </form>
</header>


