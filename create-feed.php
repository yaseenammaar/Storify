<?php
ob_start();
session_start();
$userId=$_SESSION['usrid'];
include_once("configuration/connect.php");
include_once("configuration/functions.php");
if(isset($_SESSION["usrid"])) {
if(isLoginSessionExpired()) {
header("Location:logout.php");
}
}
$type=getUserTypeById($userId);
if(isset($_GET['fid'])&&$_GET['fid']!=''){
	$fid=base64_decode($_GET['fid']);
	$feedData=mysqli_fetch_array(mysqli_query($con,"select * from feeds where id=$fid"));
}
if (isset($_GET['cpid'])&&$_GET['cpid']!='') {
  $cid=base64_decode($_GET['cpid']);
  $qry=mysqli_query($con,"SELECT chapter.name,feeds.name,chapter.id,feeds.id FROM chapter  INNER JOIN feeds  on feeds.id=chapter.feed_id where chapter.id=$cid");
	$num=mysqli_num_rows($qry);
	$fetchRow=mysqli_fetch_row($qry);
}
if(isset($_GET['did'])&&$_GET['did']!=''){
$did=($_GET['did']);
$pid=base64_decode($did);
$fid=($_GET['fid']);
$delQry=mysqli_query($con,"delete from `audio` where `id`='$pid'");
if($delQry){
header("location:create-feed.php?msg=dls&cpid=$did");
}else{
header("location:create-feed.php?msg=err&cpid=$did");
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
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Giide App</title>
  <?php include('include/css.php') ?>
	<script src="https://www.webrtc-experiment.com/RecordRTC.js"></script>
		<script src="https://www.webrtc-experiment.com/gif-recorder.js"></script>
		<script src="https://www.webrtc-experiment.com/getScreenId.js"></script>
		<script src="https://www.webrtc-experiment.com/DetectRTC.js"> </script>
		<!-- for Edige/FF/Chrome/Opera/etc. getUserMedia support -->
		<script src="https://webrtc.github.io/adapter/adapter-latest.js"></script>
  </head>
  <body class="page-profile">
<!-- navbar -->
<?php include('include/header.php'); ?>
<?php $totalAudio=getTotalAudio($userId);
$alimt=$pkg['audio_limit'];
if($totalAudio <=$alimt){
	$t1='#BrowserApp';
	$t2='#RecordApp';
	$t3='#UploadAudio';
}else{

	$t1='#AlertApp';
	$t2='#AlertApp';
	$t3='#AlertApp';
} ?>
    <div class="content content-fixed">
      <div class="container pd-x-0 pd-lg-x-10 pd-xl-x-0 vh-100">
        <div class="row row-xs">
          <div class="col-lg-9">
            <div class="row row-xs">
              <div class="col-md-12 ">
                <ul class="steps">
                  <li class="step-item active">
                    <a href="#" class="step-link">
                      <span class="step-number">1</span>
                      <span class="step-title">Record & Upload</span>
                    </a>
                  </li>
                  <li class="step-item disabled">
                    <a href="#" class="step-link">
                      <span class="step-number">2</span>
                      <span class="step-title">Link Content</span>
                    </a>
                  </li>
                  <li class="step-item disabled">
                    <a href="#" class="step-link">
                      <span class="step-number">3</span>
                      <span class="step-title">Publish & Share</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="row row-xs">
              <div class="col-md-12 mg-t-20">
                <div class="alert alert-primary tx-13 text-center" >
                    Upload audio via one of the options below, then head on to the next step to link content.
                    <input type="hidden" id="hidFeedId" name="hidFeedId" value="<?=$fetchRow[3]?>">
					          <input type="hidden" id="hidChapId" name="hidChapId" value="<?=$_GET['cpid']?>">
                </div>
              </div>
            </div>
            <div class="row row-xs">
                <div style="cursor:pointer" class="col-md-4" data-toggle="modal" href="<?=$t1?>" data-animation="effect-rotate-bottom">
                  <div class="card shadow">
                    <img src="assets/img/desktop.png" class="card-img-top" alt="" style="width: 50%;align-self: center;">
                    <div class="card-body text-center"><p class="card-text">Record audio from browser</p>
                      <p class="card-text"><small class="text-muted">(Best for convenient audio)</small></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4" style="cursor:pointer"  data-toggle="modal" href="<?=$t2?>" data-animation="effect-rotate-bottom">
                  <div class="card shadow">
                    <img src="assets/img/mobile.png" class="card-img-top" alt="" style="width: 50%;align-self: center;">
                    <div class="card-body text-center"><p class="card-text">Record On Mobile</p>
                      <p class="card-text"><small class="text-muted">(Best for high quality audio on-the-go)</small></p>
                    </div>
                  </div>
                </div>
                <div style="cursor:pointer" class="col-md-4" data-toggle="modal" href="<?=$t3?>" data-animation="effect-rotate-bottom">
                  <div class="card shadow">
                    <img src="assets/img/upload.png" class="card-img-top" alt="" style="width: 50%;align-self: center;">
                    <div class="card-body text-center"><p class="card-text">Upolad your own audio</p>
                      <p class="card-text"><small class="text-muted">(Well are'nt you prepared)</small></p>
                    </div>
                  </div>
                </div>
            </div>
            <div class="row row-xs mg-t-10">
              <div class="col-md-12">
                <div class="card">
       <div class="card-body p-3 ">
         <div class="table-responsive p-0">
          <table class="table align-items-center mb-0">
            <tbody>
              <?php $qry=mysqli_query($con,"select * from audio where user_id='$userId' order by id desc");
                $sl=0;
                $num_rows=mysqli_num_rows($qry);
                if($num_rows>0) {
                while ($fetch=mysqli_fetch_array($qry)) {
                $sl++;
               ?>
              <tr>
                <td class="align-middle text-center text-sm" ><?= $sl?></td>
                <td class="align-middle text-center text-sm">
                  <div class="d-flex px-2 py-1 pl-6">
                      <div class="iconDiv">
                      <span id="aplay<?= $fetch['id']?>" onclick="audio_hit('<?= $fetch['id']?>')" style="cursor:pointer"><i data-feather="play-circle"></i></span>
                      <span id="apause<?= $fetch['id']?>" onclick="audio_hit2('<?= $fetch['id']?>')" style="display:none;cursor:pointer" ><i data-feather="pause-circle"></i></span>
                      <audio id="amp<?= $fetch['id']?>" style="display:none;" preload="auto" loop="false" class="w-100" controls><source src="audio/<?= $fetch['file']?>" type="audio/mp3"></audio>
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                      <h6 class="mb-0 ml-2 text-sm">    <?= $fetch['name']?></h6>
                      </div>
                  </div>
                </td>
                <td class="align-middle text-center text-sm">
                  <?= getAudioType($fetch['type'])?>
                </td>

                <td class="align-middle text-center text-sm">
                  <span class="text-secondary text-xs font-weight-bold"><?= date('M d, Y', strtotime($fetch['date'])) ?></span>
                </td>
                <td class="align-middle text-center text-sm">
                <span id="<?=$fetch['id']?>" onclick="linkcontent(this.id);" data-toggle="modal" data-target="#linkPop" class="collection-item"><span class="badge badge-pill badge-secondary shadow" style="cursor:pointer">Link Content</span></span>
                <a href="create-feed.php?did=<?=base64_encode($fetch['id'])?>&cid=<?=$_GET['cpid']?>" onClick="return confirm(' Are you sure you want to delete !!')"><span class="shadow badge badge-danger" >Del</span></a>
                </td>
              </tr>
            <?php }}else{  ?>
            <tr><td colspan="5" align="center">--No audio found--</td></tr>
            <?php } ?>
            </tbody>
          </table>
        </div>
    </div>
  </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="row row-xs bg-gray-900">
            </div><!-- row -->
          </div><!-- col -->
        </div><!-- row -->
      </div><!-- container -->
    </div><!-- content -->
<?php include('include/footer.php'); ?>
<?php include('include/script.php'); ?>
<div id="BrowserApp" class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
<div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
		<div class="modal-content">
				<div class="modal-header">
						<h6 class="modal-title" id="modal-title-default">Record Audio From Browser</h6>
						<!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
						</button> -->
				</div>
				<div class="modal-body text-center">
					<h5>Get ready to record up to 5 minutes of audio!</h5>
		<p>Recording in your browser is simple, just allow access your system microphone when prompted. If you’re feeling tongue-tied!</p>
				<section class="experiment recordrtc">
			<h2 class="header">
				<input class="recording-media" type="hidden" name="" value="record-audio">
				<input class="media-container-format" type="hidden" name="" value="WebM">
					<!-- <select class="recording-media">
							<option value="record-video">Video</option>
							<option value="record-audio">Audio</option>
							<option value="record-screen">Screen</option>
					</select>
					into
					<select class="media-container-format">
							<option>WebM</option>
							<option disabled>Mp4</option>
							<option disabled>WAV</option>
							<option disabled>Ogg</option>
							<option>Gif</option>
					</select> -->
					<button class="btn btn-primary">Start Recording</button>
			</h2>
			<div style="text-align: center; display: none;">
					<button class="btn btn-sm bg-gradient-warning" id="save-to-disk">Save To Disk</button>
					<button class="btn btn-sm bg-gradient-info" id="open-new-tab">Open New Tab</button>
					<button class="btn btn-sm bg-gradient-success" id="upload-to-server">Upload To Server</button>
			</div>
			<br>
			<video controls playsinline autoplay muted=false volume=1></video>
	</section>
				</div>
		</div>
</div>
</div>
<div id="linkPop" class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
<div class="modal-dialog modal- modal-dialog-centered modal-lg" role="document">

		<div class="modal-content">
        <div class="modal-body text-center">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
      </button>
      <div class="row ">
        <div class="col-md-6">
          <img src="assets/img/trans.png"class="card-img-top" alt="">
        </div>
        <div class="col-md-6" style="align-self:center">
				<h5>  Audio Transcribing</h5>
				<p>Hold tight! Your audio is now transcribing. This should
                        take about few minute.</p>
				<div class="loderDiv">
						<div id="loader-icon" style="text-align:center;" ><img src="assets/img/loder.gif" Height="100" /></div>
				</div>
				</div>
		</div>
  </div>
</div>
</div>
</div>
<div id="RecordApp" class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
     <div class="modal-dialog modal- modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body text-center">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
              </button>
              <div class="row ">
                <div class="col-md-6">
                  <img src="assets/img/mobile3.png"class="card-img-top" alt="">
                </div>
                <div class="col-md-6">
                  <div class="">
                    <h5>  Get the Giide Android  app</h5>

                  </div>
                  <p>We've made it easy for you to record, edit, and seamlessly upload high quality audio right from your phone.</p>
                  <p>Simply point your camera at the QR code to download feedplay app.</p>
                  <img class="avatar avatar-xxl shadow" src="assets/img/app/feedplay.png" alt="">
                </div>
              </div>
            </div>
        </div>
    </div>
  </div>
	<div id="AlertApp" class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
	     <div class="modal-dialog modal- modal-dialog-centered" role="document">
	        <div class="modal-content">
	            <div class="modal-body text-center">
	              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                  <span aria-hidden="true">×</span>
	              </button>
	              <div class="row ">
	                <div class="col-md-12" style="text-align:center">
										<div style=" height: 200px;
    width: 200px;
    display: flex;
    justify-content: center;
    align-items: center;
		margin-left: 100px;">
											 <img src="assets/img/alert.png"class="card-img-top" alt="" style=" max-width: 200px;
    max-height: 200px;">

										</div>

	<p>You have crossed your audio limit.</p>

	                </div>

	              </div>
	            </div>
	        </div>
	    </div>
	  </div>
  <div id="UploadAudio" class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
       <div class="modal-dialog modal- modal-dialog-centered modal-lg" role="document">
          <div class="modal-content">
              <div class="modal-body text-center">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <div class="row ">
                  <div class="col-md-6">
                    <img src="assets/img/mobile3.png"class="card-img-top" alt="">
                  </div>
                  <div class="col-md-6" style="align-self:center">
                    <form class="formValidate"  method="post" enctype="multipart/form-data" name="audioForm" id="audioForm">
                        <input type="hidden" id="cpid" name="cpid" value="<?=$_GET['cpid']?>">
                    <div class="general-action-btn">
                                        <label id="select-files" class="btn btn-lg btn-primary">
                                          <span>Upload new audio</span>
                                          <input id="upfile" name="upfile" type="file" style="display:none" accept="audio/*" />
                                        </label>
                                      </div>
                                      <small>Allowed mp3 file only. Max size of 5MB and 5min audio only</small>

                                      <div  id="progress-div" class="progress ht-10"><div id="progress-bar"  class="progress-bar" role="progressbar" ></div></div>
                                      <div id="targetLayer"></div>
																				<div id="duration" class="">

																				</div>
																				<div id="type" class="">
																				</div>
                                      <div id="loader-icon" style="text-align:center;display:none" ><img  src="assets/img/loder.gif" Height="100" /></div>
                      </from>
                  </div>
                </div>
              </div>
          </div>
      </div>
    </div>
    <script>
		const uploadApiCall = (upfile, data = {}) => {
			// ----- YOUR API CALL CODE HERE -----
			document.querySelector("#duration").innerHTML = `${data.duration}s`;
			document.querySelector("#type").innerHTML = data.type;
		};
$(document).ready(function(){
    $("#audioForm").on('submit', function(e){
        $("#progress-bar").show();
        e.preventDefault();
        $.ajax({
            xhr: function() {
                var xhr = new window.XMLHttpRequest();
                xhr.upload.addEventListener("progress", function(evt) {
                    if (evt.lengthComputable) {
                        var percentComplete = parseInt(((evt.loaded / evt.total) * 100));
                        $("#progress-bar").width(percentComplete + '%');
                         $("#progress-bar").html('<div id="progress-status">' + percentComplete +' %</div>');
                         if(percentComplete==100){
                          //  $("#trans").html("Your video uploded now transcribing please wait a while..");
                            $("#progress-bar").hide();
                            }
                    }
                }, false);
                return xhr;
            },
            type: 'POST',
            url: 'addaudio.php',
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            beforeSend: function(){
                $("#progress-bar").width('0%');
                $('#loader-icon').show();
            },
            error:function(){
                $('#uploadStatus').html('<p style="color:#EA4335;">File upload failed, please try again.</p>');
            },
            success: function(resp){
                $('#loader-icon').hide();
                //console.log(resp);
                window.location="create-feed.php?cpid="+resp;
            }
        });
    });
    $("#upfile").change(function(){

        $("#audioForm").submit();
    });
  });
    </script>
<script type="text/javascript">
function audio_hit(x) {
$('#apause' + x).show();
$('#aplay' + x).hide();
document.getElementById('amp'+ x).play();
}
function audio_hit2(x) {
$('#apause' + x).hide();----
$('#aplay' + x).show();
document.getElementById('amp' + x).pause();
}
</script>
<script type="text/javascript">
function linkcontent(id){
  //alert('sdfsd');
	var cid= document.getElementById('hidChapId').value;
    var fid= document.getElementById('hidFeedId').value;
	$.ajax({
			type: 'POST',
			dataType:'text',
			url: 'getAudioTranscribe.php',
			data:{id:id,cid:cid,fid:fid},
			error: function(XMLHttpRequest, textStatus, errorThrown) {
			console.error(errorThrown);
         alert(textStatus+" Status: Audio formtate not supported kindly"+ errorThrown );
				window.location="create-feed.php?cpid="+cid;
     },
			success: function(resp){
					$('#loader-icon').hide();
					//var x=resp.subtitle['cid'];
				  //console.log(x);
					window.location="linkcontent.php?cpid="+resp;
			}
	});
// $.ajax({
// 		url:"getAudioTranscribe.php",type:"post",data:{id:id,cid:cid,fid:fid},
// 		success:function(data){
// 						$('#loader-icon').hide();
// 							console.log(data);
// 						window.location="linkcontent.php?cid="+data;
// 				},
// 				error: function(data){
// 						console.log("error");
// 						console.log(data);
// 				}
// 		});
}
</script>
<script>
            (function() {
                var params = {},
                    r = /([^&=]+)=?([^&]*)/g;
                function d(s) {
                    return decodeURIComponent(s.replace(/\+/g, ' '));
                }
                var match, search = window.location.search;
                while (match = r.exec(search.substring(1))) {
                    params[d(match[1])] = d(match[2]);
                    if(d(match[2]) === 'true' || d(match[2]) === 'false') {
                        params[d(match[1])] = d(match[2]) === 'true' ? true : false;
                    }
                }
                window.params = params;
            })();
        </script>
        <script>
            var recordingDIV = document.querySelector('.recordrtc');
            var recordingMedia = recordingDIV.querySelector('.recording-media');
            var recordingPlayer = recordingDIV.querySelector('video');
            var mediaContainerFormat = recordingDIV.querySelector('.media-container-format');
            recordingDIV.querySelector('button').onclick = function() {
							alert('sdfgdf')
                var button = this;
                if(button.innerHTML === 'Stop Recording') {
                    button.disabled = true;
                    button.disableStateWaiting = true;
                    setTimeout(function() {
                        button.disabled = false;
                        button.disableStateWaiting = false;
                    }, 2 * 1000);

                    button.innerHTML = 'Start Recording';

                    function stopStream() {
                        if(button.stream && button.stream.stop) {
                            button.stream.stop();
                            button.stream = null;
                        }
                    }

                    if(button.recordRTC) {
                        if(button.recordRTC.length) {
                            button.recordRTC[0].stopRecording(function(url) {
                                if(!button.recordRTC[1]) {
                                    button.recordingEndedCallback(url);
                                    stopStream();

                                    saveToDiskOrOpenNewTab(button.recordRTC[0]);
                                    return;
                                }

                                button.recordRTC[1].stopRecording(function(url) {
                                    button.recordingEndedCallback(url);
                                    stopStream();
                                });
                            });
                        }
                        else {
                            button.recordRTC.stopRecording(function(url) {
                                button.recordingEndedCallback(url);
                                stopStream();

                                saveToDiskOrOpenNewTab(button.recordRTC);
                            });
                        }
                    }

                    return;
                }

                button.disabled = true;

                var commonConfig = {
                    onMediaCaptured: function(stream) {
                        button.stream = stream;
                        if(button.mediaCapturedCallback) {
                            button.mediaCapturedCallback();
                        }

                        button.innerHTML = 'Stop Recording';
                        button.disabled = false;
                    },
                    onMediaStopped: function() {
                        button.innerHTML = 'Start Recording';

                        if(!button.disableStateWaiting) {
                            button.disabled = false;
                        }
                    },
                    onMediaCapturingFailed: function(error) {
                        if(error.name === 'PermissionDeniedError' && !!navigator.mozGetUserMedia) {
                            InstallTrigger.install({
                                'Foo': {
                                    // https://addons.mozilla.org/firefox/downloads/latest/655146/addon-655146-latest.xpi?src=dp-btn-primary
                                    URL: 'https://addons.mozilla.org/en-US/firefox/addon/enable-screen-capturing/',
                                    toString: function () {
                                        return this.URL;
                                    }
                                }
                            });
                        }

                        commonConfig.onMediaStopped();
                    }
                };

                if(recordingMedia.value === 'record-video') {
                    captureVideo(commonConfig);

                    button.mediaCapturedCallback = function() {
                        button.recordRTC = RecordRTC(button.stream, {
                            type: mediaContainerFormat.value === 'Gif' ? 'gif' : 'video',
                            disableLogs: params.disableLogs || false,
                            canvas: {
                                width: params.canvas_width || 320,
                                height: params.canvas_height || 240
                            },
                            frameInterval: typeof params.frameInterval !== 'undefined' ? parseInt(params.frameInterval) : 20 // minimum time between pushing frames to Whammy (in milliseconds)
                        });

                        button.recordingEndedCallback = function(url) {
                            recordingPlayer.src = null;
                            recordingPlayer.srcObject = null;

                            if(mediaContainerFormat.value === 'Gif') {
                                recordingPlayer.pause();
                                recordingPlayer.poster = url;

                                recordingPlayer.onended = function() {
                                    recordingPlayer.pause();
                                    recordingPlayer.poster = URL.createObjectURL(button.recordRTC.blob);
                                };
                                return;
                            }

                            recordingPlayer.src = url;

                            recordingPlayer.onended = function() {
                                recordingPlayer.pause();
                                recordingPlayer.src = URL.createObjectURL(button.recordRTC.blob);
                            };
                        };

                        button.recordRTC.startRecording();
                    };
                }

                if(recordingMedia.value === 'record-audio') {
                    captureAudio(commonConfig);

                    button.mediaCapturedCallback = function() {
                        button.recordRTC = RecordRTC(button.stream, {
                            type: 'audio',
                            bufferSize: typeof params.bufferSize == 'undefined' ? 0 : parseInt(params.bufferSize),
                            sampleRate: typeof params.sampleRate == 'undefined' ? 44100 : parseInt(params.sampleRate),
                            leftChannel: params.leftChannel || false,
                            disableLogs: params.disableLogs || false,
                            recorderType: DetectRTC.browser.name === 'Edge' ? StereoAudioRecorder : null
                        });

                        button.recordingEndedCallback = function(url) {
                            var audio = new Audio();
                            audio.src = url;
                            audio.controls = true;
                            recordingPlayer.parentNode.appendChild(document.createElement('hr'));
                            recordingPlayer.parentNode.appendChild(audio);

                            if(audio.paused) audio.play();

                            audio.onended = function() {
                                audio.pause();
                                audio.src = URL.createObjectURL(button.recordRTC.blob);
                            };
                        };

                        button.recordRTC.startRecording();
                    };
                }

                if(recordingMedia.value === 'record-audio-plus-video') {
                    captureAudioPlusVideo(commonConfig);

                    button.mediaCapturedCallback = function() {

                        if(DetectRTC.browser.name !== 'Firefox') { // opera or chrome etc.
                            button.recordRTC = [];

                            if(!params.bufferSize) {
                                // it fixes audio issues whilst recording 720p
                                params.bufferSize = 16384;
                            }

                            var audioRecorder = RecordRTC(button.stream, {
                                type: 'audio',
                                bufferSize: typeof params.bufferSize == 'undefined' ? 0 : parseInt(params.bufferSize),
                                sampleRate: typeof params.sampleRate == 'undefined' ? 44100 : parseInt(params.sampleRate),
                                leftChannel: params.leftChannel || false,
                                disableLogs: params.disableLogs || false,
                                recorderType: DetectRTC.browser.name === 'Edge' ? StereoAudioRecorder : null
                            });

                            var videoRecorder = RecordRTC(button.stream, {
                                type: 'video',
                                disableLogs: params.disableLogs || false,
                                canvas: {
                                    width: params.canvas_width || 320,
                                    height: params.canvas_height || 240
                                },
                                frameInterval: typeof params.frameInterval !== 'undefined' ? parseInt(params.frameInterval) : 20 // minimum time between pushing frames to Whammy (in milliseconds)
                            });

                            // to sync audio/video playbacks in browser!
                            videoRecorder.initRecorder(function() {
                                audioRecorder.initRecorder(function() {
                                    audioRecorder.startRecording();
                                    videoRecorder.startRecording();
                                });
                            });

                            button.recordRTC.push(audioRecorder, videoRecorder);

                            button.recordingEndedCallback = function() {
                                var audio = new Audio();
                                audio.src = audioRecorder.toURL();
                                audio.controls = true;
                                audio.autoplay = true;

                                audio.onloadedmetadata = function() {
                                    recordingPlayer.src = videoRecorder.toURL();
                                };

                                recordingPlayer.parentNode.appendChild(document.createElement('hr'));
                                recordingPlayer.parentNode.appendChild(audio);

                                if(audio.paused) audio.play();
                            };
                            return;
                        }

                        button.recordRTC = RecordRTC(button.stream, {
                            type: 'video',
                            disableLogs: params.disableLogs || false,
                            // we can't pass bitrates or framerates here
                            // Firefox MediaRecorder API lakes these features
                        });

                        button.recordingEndedCallback = function(url) {
                            recordingPlayer.srcObject = null;
                            recordingPlayer.muted = false;
                            recordingPlayer.src = url;

                            recordingPlayer.onended = function() {
                                recordingPlayer.pause();
                                recordingPlayer.src = URL.createObjectURL(button.recordRTC.blob);
                            };
                        };

                        button.recordRTC.startRecording();
                    };
                }

                if(recordingMedia.value === 'record-screen') {
                    captureScreen(commonConfig);

                    button.mediaCapturedCallback = function() {
                        button.recordRTC = RecordRTC(button.stream, {
                            type: mediaContainerFormat.value === 'Gif' ? 'gif' : 'video',
                            disableLogs: params.disableLogs || false,
                            canvas: {
                                width: params.canvas_width || 320,
                                height: params.canvas_height || 240
                            }
                        });

                        button.recordingEndedCallback = function(url) {
                            recordingPlayer.src = null;
                            recordingPlayer.srcObject = null;

                            if(mediaContainerFormat.value === 'Gif') {
                                recordingPlayer.pause();
                                recordingPlayer.poster = url;
                                recordingPlayer.onended = function() {
                                    recordingPlayer.pause();
                                    recordingPlayer.poster = URL.createObjectURL(button.recordRTC.blob);
                                };
                                return;
                            }

                            recordingPlayer.src = url;
                        };

                        button.recordRTC.startRecording();
                    };
                }

                if(recordingMedia.value === 'record-audio-plus-screen') {
                    captureAudioPlusScreen(commonConfig);

                    button.mediaCapturedCallback = function() {
                        button.recordRTC = RecordRTC(button.stream, {
                            type: 'video',
                            disableLogs: params.disableLogs || false,
                            // we can't pass bitrates or framerates here
                            // Firefox MediaRecorder API lakes these features
                        });

                        button.recordingEndedCallback = function(url) {
                            recordingPlayer.srcObject = null;
                            recordingPlayer.muted = false;
                            recordingPlayer.src = url;

                            recordingPlayer.onended = function() {
                                recordingPlayer.pause();
                                recordingPlayer.src = URL.createObjectURL(button.recordRTC.blob);
                            };
                        };

                        button.recordRTC.startRecording();
                    };
                }
            };

            function captureVideo(config) {
                captureUserMedia({video: true}, function(videoStream) {
                    recordingPlayer.srcObject = videoStream;

                    config.onMediaCaptured(videoStream);

                    videoStream.onended = function() {
                        config.onMediaStopped();
                    };
                }, function(error) {
                    config.onMediaCapturingFailed(error);
                });
            }

            function captureAudio(config) {
                captureUserMedia({audio: true}, function(audioStream) {
                    recordingPlayer.srcObject = audioStream;

                    config.onMediaCaptured(audioStream);

                    audioStream.onended = function() {
                        config.onMediaStopped();
                    };
                }, function(error) {
                    config.onMediaCapturingFailed(error);
                });
            }

            function captureAudioPlusVideo(config) {
                captureUserMedia({video: true, audio: true}, function(audioVideoStream) {
                    recordingPlayer.srcObject = audioVideoStream;

                    config.onMediaCaptured(audioVideoStream);

                    audioVideoStream.onended = function() {
                        config.onMediaStopped();
                    };
                }, function(error) {
                    config.onMediaCapturingFailed(error);
                });
            }

            function captureScreen(config) {
                getScreenId(function(error, sourceId, screenConstraints) {
                    if (error === 'not-installed') {
                        document.write('<h1><a target="_blank" href="https://chrome.google.com/webstore/detail/screen-capturing/ajhifddimkapgcifgcodmmfdlknahffk">Please install this chrome extension then reload the page.</a></h1>');
                    }

                    if (error === 'permission-denied') {
                        alert('Screen capturing permission is denied.');
                    }

                    if (error === 'installed-disabled') {
                        alert('Please enable chrome screen capturing extension.');
                    }

                    if(error) {
                        config.onMediaCapturingFailed(error);
                        return;
                    }

                    captureUserMedia(screenConstraints, function(screenStream) {
                        recordingPlayer.srcObject = screenStream;

                        config.onMediaCaptured(screenStream);

                        screenStream.onended = function() {
                            config.onMediaStopped();
                        };
                    }, function(error) {
                        config.onMediaCapturingFailed(error);
                    });
                });
            }

            function captureAudioPlusScreen(config) {
                getScreenId(function(error, sourceId, screenConstraints) {
                    if (error === 'not-installed') {
                        document.write('<h1><a target="_blank" href="https://chrome.google.com/webstore/detail/screen-capturing/ajhifddimkapgcifgcodmmfdlknahffk">Please install this chrome extension then reload the page.</a></h1>');
                    }

                    if (error === 'permission-denied') {
                        alert('Screen capturing permission is denied.');
                    }

                    if (error === 'installed-disabled') {
                        alert('Please enable chrome screen capturing extension.');
                    }

                    if(error) {
                        config.onMediaCapturingFailed(error);
                        return;
                    }

                    screenConstraints.audio = true;

                    captureUserMedia(screenConstraints, function(screenStream) {
                        recordingPlayer.srcObject = screenStream;

                        config.onMediaCaptured(screenStream);

                        screenStream.onended = function() {
                            config.onMediaStopped();
                        };
                    }, function(error) {
                        config.onMediaCapturingFailed(error);
                    });
                });
            }

            function captureUserMedia(mediaConstraints, successCallback, errorCallback) {
                navigator.mediaDevices.getUserMedia(mediaConstraints).then(successCallback).catch(errorCallback);
            }

            function setMediaContainerFormat(arrayOfOptionsSupported) {
                var options = Array.prototype.slice.call(
                    mediaContainerFormat.querySelectorAll('option')
                );

                var selectedItem;
                options.forEach(function(option) {
                    option.disabled = true;

                    if(arrayOfOptionsSupported.indexOf(option.value) !== -1) {
                        option.disabled = false;

                        if(!selectedItem) {
                            option.selected = true;
                            selectedItem = option;
                        }
                    }
                });
            }

            recordingMedia.onchange = function() {
                if(this.value === 'record-audio') {
                    setMediaContainerFormat(['WAV', 'Ogg']);
                    return;
                }
                setMediaContainerFormat(['WebM', /*'Mp4',*/ 'Gif']);
            };

            if(DetectRTC.browser.name === 'Edge') {
                // webp isn't supported in Microsoft Edge
                // neither MediaRecorder API
                // so lets disable both video/screen recording options

                console.warn('Neither MediaRecorder API nor webp is supported in Microsoft Edge. You cam merely record audio.');

                recordingMedia.innerHTML = '<option value="record-audio">Audio</option>';
                setMediaContainerFormat(['WAV']);
            }

            if(DetectRTC.browser.name === 'Firefox') {
                // Firefox implemented both MediaRecorder API as well as WebAudio API
                // Their MediaRecorder implementation supports both audio/video recording in single container format
                // Remember, we can't currently pass bit-rates or frame-rates values over MediaRecorder API (their implementation lakes these features)

                recordingMedia.innerHTML = '<option value="record-audio-plus-video">Audio+Video</option>'
                                            + '<option value="record-audio-plus-screen">Audio+Screen</option>'
                                            + recordingMedia.innerHTML;
            }

            // disabling this option because currently this demo
            // doesn't supports publishing two blobs.
            // todo: add support of uploading both WAV/WebM to server.
            if(false && DetectRTC.browser.name === 'Chrome') {
                recordingMedia.innerHTML = '<option value="record-audio-plus-video">Audio+Video</option>'
                                            + recordingMedia.innerHTML;
                console.info('This RecordRTC demo merely tries to playback recorded audio/video sync inside the browser. It still generates two separate files (WAV/WebM).');
            }

            var MY_DOMAIN = 'http://maxg.shop';

            function isMyOwnDomain() {
                // replace "webrtc-experiment.com" with your own domain name
                return document.domain.indexOf(MY_DOMAIN) !== -1;
            }

            function saveToDiskOrOpenNewTab(recordRTC) {
                recordingDIV.querySelector('#save-to-disk').parentNode.style.display = 'block';
                recordingDIV.querySelector('#save-to-disk').onclick = function() {
                    if(!recordRTC) return alert('No recording found.');

                    recordRTC.save();
                };

                recordingDIV.querySelector('#open-new-tab').onclick = function() {
                    if(!recordRTC) return alert('No recording found.');

                    window.open(recordRTC.toURL());
                };

                if(isMyOwnDomain()) {
                    recordingDIV.querySelector('#upload-to-server').disabled = true;
                    recordingDIV.querySelector('#upload-to-server').style.display = 'none';
                }
                else {
                    recordingDIV.querySelector('#upload-to-server').disabled = false;
                }

                recordingDIV.querySelector('#upload-to-server').onclick = function() {
                    if(isMyOwnDomain()) {
                        alert('PHP Upload is not available on this domain.');
                        return;
                    }

                    if(!recordRTC) return alert('No recording found.');
                    this.disabled = true;

                    var button = this;
                    uploadToServer(recordRTC, function(progress, fileURL) {
                        if(progress === 'ended') {
                            button.disabled = false;
                            button.innerHTML = 'Click to download from server';
                            button.onclick = function() {
                                window.open(fileURL);
                            };
                            return;
                        }
                        button.innerHTML = progress;
                    });
                };
            }

            var listOfFilesUploaded = [];

            function uploadToServer(recordRTC, callback) {
                var blob = recordRTC instanceof Blob ? recordRTC : recordRTC.blob;
                var fileType = blob.type.split('/')[0] || 'audio';
                var fileName = (Math.random() * 1000).toString().replace('.', '');

                if (fileType === 'audio') {
                    fileName += '.' + (!!navigator.mozGetUserMedia ? 'ogg' : 'wav');
                } else {
                    fileName += '.webm';
                }

                // create FormData
                var formData = new FormData();
                formData.append(fileType + '-filename', fileName);
                formData.append(fileType + '-blob', blob);

                callback('Uploading ' + fileType + ' recording to server.');

                // var upload_url = 'https://your-domain.com/files-uploader/';
                var upload_url = 'save.php';

                // var upload_directory = upload_url;
                var upload_directory = 'audio/';

                makeXMLHttpRequest(upload_url, formData, function(progress) {
                    if (progress !== 'upload-ended') {
                        callback(progress);
                        return;
                    }

                    callback('ended', upload_directory + fileName);

                    // to make sure we can delete as soon as visitor leaves
                    listOfFilesUploaded.push(upload_directory + fileName);
                });
            }

            function makeXMLHttpRequest(url, data, callback) {
                var request = new XMLHttpRequest();
                request.onreadystatechange = function() {
                    if (request.readyState == 4 && request.status == 200) {
                        callback('upload-ended');
                    }
                };

                request.upload.onloadstart = function() {
                    callback('Upload started...');
                };

                request.upload.onprogress = function(event) {
                    callback('Upload Progress ' + Math.round(event.loaded / event.total * 100) + "%");
                };

                request.upload.onload = function() {
                    callback('progress-about-to-end');
                };

                request.upload.onload = function() {
                    callback('progress-ended');
                };

                request.upload.onerror = function(error) {
                    callback('Failed to upload to server');
                    console.error('XMLHttpRequest failed', error);
                };

                request.upload.onabort = function(error) {
                    callback('Upload aborted.');
                    console.error('XMLHttpRequest aborted', error);
                };

                request.open('POST', url);
                request.send(data);
            }

            window.onbeforeunload = function() {
                recordingDIV.querySelector('button').disabled = false;
                recordingMedia.disabled = false;
                mediaContainerFormat.disabled = false;

                if(!listOfFilesUploaded.length) return;

                var delete_url = 'https://webrtcweb.com/f/delete.php';
                // var delete_url = 'RecordRTC-to-PHP/delete.php';

                listOfFilesUploaded.forEach(function(fileURL) {
                    var request = new XMLHttpRequest();
                    request.onreadystatechange = function() {
                        if (request.readyState == 4 && request.status == 200) {
                            if(this.responseText === ' problem deleting files.') {
                                alert('Failed to delete ' + fileURL + ' from the server.');
                                return;
                            }

                            listOfFilesUploaded = [];
                            alert('You can leave now. Your files are removed from the server.');
                        }
                    };
                    request.open('POST', delete_url);

                    var formData = new FormData();
                    formData.append('delete-file', fileURL.split('/').pop());
                    request.send(formData);
                });

                return 'Please wait few seconds before your recordings are deleted from the server.';
            };
        </script>
</body>
</html>
