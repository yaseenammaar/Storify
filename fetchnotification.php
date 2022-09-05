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

if (isset($_POST['view'])) {
    $userId = $_SESSION['usrid'];
    $query = "SELECT * FROM notifications WHERE forUser='$userId' ORDER BY `id` DESC LIMIT 5";
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

            $output .= '<a href="feed.php?cpid=' . $cid . '&fid=' . $fid . '" class="dropdown-item">
  <div class="media">
    <div class="avatar avatar-sm avatar-online">' . $icon . '</div>
    <div class="media-body mg-l-15">
      <p>You have got<strong> ' . $row["entityID"] . '</strong> reaction for your giide</p>
      <span>Mar 15 12:32pm</span>
    </div><!-- media-body -->
  </div><!-- media -->
</a>
  ';
        }
    } else {
        $output .= '<li><a href="#" class="text-bold text-italic">No Notification Found</a></li>';
    }
    $status_query = "SELECT * FROM notifications WHERE forUser='$userId' ORDER BY `id` DESC";
    $result_query = mysqli_query($con, $status_query);
    $count = mysqli_num_rows($result_query);
    $data = array(
        'notification' => $output,
        'unseen_notification'  => $count
    );
    echo json_encode($data);
}

?>
