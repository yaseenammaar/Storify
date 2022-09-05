<?php
//header('Content-type: application/json');
ob_start();
session_start();
include_once("configuration/connect.php");
include_once("configuration/functions.php");
$vid = $_POST['vid'];
$btnId=$_POST['mid'];
$url="https://pixabay.com/api/?key=23798358-eeef75fc6d1d58fc5a39ff2e2&image_type=photo&q=".$vid;
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => $url,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_POSTFIELDS => "[\n {\n        \"Attribute\": \"FirstName\",\n        \"Value\": \"testsBret\"\n    },\n    {\n        \"Attribute\": \"LastName\",\n        \"Value\": \"\"\n    },\n    {\n        \"Attribute\": \"EmailAddress\",\n        \"Value\": \"testsbrelovelo@ameteia.com\"\n    },\n    {\n        \"Attribute\": \"Phone\",\n        \"Value\": \"9716002569\"\n    },\n    {\n        \"Attribute\": \"ProspectID\",\n        \"Value\": \"323232-o1212p-hkhhjh\"\n    },\n    {\n        \"Attribute\": \"Source\",\n        \"Value\": \"Phone\"\n    }\n]",
  CURLOPT_HTTPHEADER => array(
    "cache-control: no-cache",
    "content-type: application/json",
    "postman-token: 5f643f4c-8ffa-a102-b6a0-dc323f9fbc23"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  //echo "cURL Error #:" . $err;
} else {
  //echo $response;
}
$response_data = json_decode($response);
$user_data = $response_data->hits;
$htm='';
$val='1';
 foreach ($user_data as $user) {
	$htm.='<div class="col-md-3 col-sm-6 mb-3 ">
			<div class="video-card">
			<div class="video-card-image">
			<a href="#"><img id="'.$btnId.'" onclick="showImgUrl(this.src,this.id)" class="img-fluid" style="height:100px" src="'.$user->previewURL.'" alt=""></a>
			</div>
		</div>
			</div>';
		}
		echo $htm;
 ?>
