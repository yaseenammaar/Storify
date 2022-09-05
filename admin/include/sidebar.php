<?php $page=basename($_SERVER['PHP_SELF']); ?>
 <div class="aside-body">
 <div class="aside-loggedin">
   <div class="d-flex align-items-center justify-content-start">
       <?php if ($adminDetails['photo']==''){ ?>
     <a href="" class="avatar"><img src="../assets/img/user/user.png" class="rounded-circle" alt=""></a>
       <?php }else{ ?>
         <img alt="Admin" class="avatar" src="../assets/img/user/<?=$adminDetails['photo']?>">
        <?php } ?>
     <div class="aside-alert-link">
       <a href="" class="new" data-toggle="tooltip" title="You have 2 unread messages"><i data-feather="message-square"></i></a>
       <a href="" class="new" data-toggle="tooltip" title="You have 4 new notifications"><i data-feather="bell"></i></a>
       <a href="logout.php" data-toggle="tooltip" title="Sign out"><i data-feather="log-out"></i></a>
     </div>
   </div>
   <div class="aside-loggedin-user">
     <a href="#loggedinMenu" class="d-flex align-items-center justify-content-between mg-b-2" data-toggle="collapse">
       <h6 class="tx-semibold mg-b-0"><?=$adminDetails['name']?></h6>
       <i data-feather="chevron-down"></i>
     </a>
     <p class="tx-color-03 tx-12 mg-b-0">Administrator</p>
   </div>
   <div class="collapse" id="loggedinMenu">
     <ul class="nav nav-aside mg-b-0">
       <li class="nav-item"><a href="#" class="nav-link"><i data-feather="edit"></i> <span>Edit Profile</span></a></li>
       <li class="nav-item"><a href="#" class="nav-link"><i data-feather="user"></i> <span>View Profile</span></a></li>
       <li class="nav-item"><a href="setting.php" class="nav-link"><i data-feather="settings"></i> <span>Account Settings</span></a></li>
       <li class="nav-item"><a href="$" class="nav-link"><i data-feather="help-circle"></i> <span>Help Center</span></a></li>
       <li class="nav-item"><a href="logout.php" class="nav-link"><i data-feather="log-out"></i> <span>Sign Out</span></a></li>
     </ul>
   </div>
 </div><!-- aside-loggedin -->
 <ul class="nav nav-aside">
   <li class="nav-label">Dashboard</li>
    <li class="nav-item <?php if($page=='dashboard.php'){?>active <?php } ?>"><a href="dashboard.php" class="nav-link"><i data-feather="grid"></i> <span> Dashboard</span></a></li>
   <li class="nav-item <?php if($page=='package.php'||$page=='addpackage.php'){?>active <?php } ?>"><a href="package.php" class="nav-link "><i data-feather="gift"></i> <span> Package</span></a></li>
   <li class="nav-item <?php if($page=='users.php'||$page=='edituser.php'||$page=='viewuser.php'){?>active <?php } ?>"><a href="users.php" class="nav-link"><i data-feather="users"></i><span>Users</span></a></li>
   <li class="nav-item <?php if($page=='all-feeds.php'||$page=='viewfeed.php'){?>active <?php } ?>"><a href="all-feeds.php" class="nav-link"><i data-feather="mic"></i> <span>All Feeds </span></a></li>
   <li class="nav-item <?php if($page=='audios.php'){?>active <?php } ?>"><a href="audios.php" class="nav-link"><i data-feather="music"></i> <span>All Audio</span></a></li>

 </ul>
</div>
</aside>
