<?php
ob_start();
session_start();
//$userId=$_SESSION['usrid'];
include_once("../configuration/connect.php");
include_once("../configuration/functions.php");
$date=date('d-m-Y h:i:sa');
checkIntrusion($userId);
function mbmGetFLVDuration($file){
  //$time = 00:00:00.000 format
  $time =  exec("ffmpeg -i ".$file." 2>&1 | grep 'Duration' | cut -d ' ' -f 4 | sed s/,//");
  $duration = explode(":",$time);
  $duration_in_seconds = $duration[0]*3600 + $duration[1]*60+ round($duration[2]);
  return $duration_in_seconds;
}
if ($_SERVER["REQUEST_METHOD"] == "POST")
   {
        $pid = $_POST['hidId'];
        $name = $_POST['feature'];

        $sql=mysqli_query($con,"INSERT INTO `otofeature`( `name`, `status`)
         VALUES ('$name','1')");
        $id=mysqli_insert_id($con);
        echo base64_encode($pid);
      }
?>
