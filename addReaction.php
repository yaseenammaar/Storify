<?php
ob_start();
session_start();

/**notify( "Reaction","2",$userId, $col,$cid,$fid);   */

include_once("configuration/connect.php");
include_once("configuration/functions.php");
header('Content-Type:application:json');
header("Cache-Control: no-cache, must-revalidate");
header("Pragma: no-cache");
$date = date('d-m-Y h:i:sa');
?>
<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $userId=$_SESSION['usrid'];
  $aid = $_POST['id'];
  $oid = $_POST['oid'];
  $cid = $_POST['cid'];
  $fid = $_POST['fid'];
  $rod = explode('_', $aid);
  if ($rod[0] == 'likes') {
    $col = 'likes';
  } else if ($rod[0] == 'love') {
    $col = 'love';
  } else if ($rod[0] == 'happy') {
    $col = 'happy';
  } else {
    $col = 'sad';
  }
  $total = 0;
  $qry = mysqli_fetch_array(mysqli_query($con, "select " . $col . " from chapter where id=$rod[1]"));
  $total = $qry[$col];
  $vtotal = $total + 1;
  mysqli_query($con, "update `chapter` set $col='$vtotal' where id='$cid'");
  mysqli_query($con, "update `feeds` set $col='$vtotal' where id='$fid'");
 

 $sql = "INSERT INTO `notifications` (`type`, `forUser`,`byuser`,`feed_id`,`chapter_id`,`entityID`) VALUES ('Reaction','$oid','$userId','$fid','$cid','$col')";

 if (mysqli_query($con, $sql)) {
     $msg= array("message" => 'success',);
 }
 else{
     $msg= array("message" => 'failed', "info"=> $cid,);
 }
} else {
     $msg= array("message" => 'failed', "info"=> 'Security alert,Unable to process your request.');
}

echo json_encode($msg);

?>
