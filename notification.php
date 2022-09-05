<?php

/***fetching notification for the logged in user */
ob_start();
session_start();

include_once("configuration/connect.php");
include_once("configuration/functions.php");
header('Content-Type:application:json');
header("Cache-Control: no-cache, must-revalidate");
header("Pragma: no-cache");
$date = date('d-m-Y h:i:sa');
?>
<?php
$userId = $_SESSION['usrid'];
$query = "SELECT * FROM notifications WHERE forUser='$userId' ORDER BY `id` DESC";
$result = mysqli_query($con, $query);
$output = '';
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {

        $fid = $row["feed_id"];
        $cid = base64_encode($row["chapter_id"]);

        $entity = $row["entityID"];

        if ($entity == 'likes') {
            $icon = '<i class="fa fa-thumbs-up" style="color:green"></i>';
        } else if ($entity == 'love') {
            $icon = ' <i class="fa fa-heart" style="color:red"></i>';
        } else if ($entity == 'sad') {
            $icon = '<i class="fa fa-face-frown"></i> ';
        } else {
            $icon = '<i class="fa fa-face-laugh-beam" style="color:orange"></i>';
        }

        $output .= ' <div class="col-12">
  <div class="card notification-card notification-invitation">
    <div class="card-body">
      <table>
        <tr>
          <td style="width:70%"><div class="card-title"> <p>You have got<strong> ' . $row["entityID"] . '</strong> reaction for your giide</p></div></td>
          <td style="width:10%">
            <a href="feed.php?cpid=' . $cid . '&fid=' . $fid . '"  class="btn btn-primary">View</a>
            <a href="#" class="btn btn-danger dismiss-notification">Mark as seen</a>
          </td>
        </tr>
      </table>
    </div>
  </div>
  </div>
  ';
    }
} else {
    $output .= '<li><a href="#" class="text-bold text-italic">No Notification Found</a></li>';
}
/*** $status_query = "SELECT * FROM notifications WHERE forUser='$userId' ORDER BY `id` DESC";
    $result_query = mysqli_query($con, $status_query);
    $count = mysqli_num_rows($result_query);
    $data = array(
        'notification' => $output,
        'unseen_notification'  => $count
    );
 **/


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>GiideAp- Notifications</title>
<?php include('include/css.php') ?>
<link rel="stylesheet" href="assets/css/dashforge.profile.css">
<link rel="stylesheet" href="assets/css/dashforge.filemgr.css">
<link rel="stylesheet" href="assets/css/dashforge.contacts.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+One&family=Montserrat&family=Poppins:ital,wght@1,500&display=swap" rel="stylesheet">

<body>
    <?php include('include/header.php'); ?>
    <div class="col-sm-8 col-md-7 col-lg mg-t-20 mg-sm-t-0 mg-lg-t-25">
        <div class="container ">
            <div class="row notification-container">
                <div class="container">
                    <h2 class="text-center mt-2">My Notifications</h2>

                    <?php echo $output; ?>
                </div>
            </div>
        </div>
    </div>
    <?php include('include/footer.php'); ?>
  <?php include('include/script.php'); ?>
</body>

</html>