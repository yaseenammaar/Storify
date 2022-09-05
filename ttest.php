<?php
ob_start();
session_start();
//$userId=$_SESSION['usrid'];
include_once("configuration/connect.php");
include_once("configuration/functions.php");
 header('Content-Type:application:json');
 header ("Cache-Control: no-cache, must-revalidate");
header ("Pragma: no-cache");
$date=date('d-m-Y h:i:sa');

//checkIntrusion($userId);
require_once 'vendor/autoload.php';
use Google\Cloud\Speech\V1\SpeechClient;
use Google\Cloud\Speech\V1\RecognitionAudio;
use Google\Cloud\Speech\V1\RecognitionConfig;
use Google\Cloud\Speech\V1\RecognitionConfig\AudioEncoding;
use Google\Protobuf\Internal\GPBUtil;
use Google\Cloud\Storage\StorageClient;
 ?>
<?php
  $audioFile='audio/1656912977.mp3';
  $audio1="gs://sanjeev-audiobucket/1656409004.mp3";
  $jsonFileUrl = 'apiproject-354106-4a95acdd68f0.json';
  putenv("GOOGLE_APPLICATION_CREDENTIALS=$jsonFileUrl");

  try {
  $audioFile='audio/audioClip.wav';

    // change these variables if necessary
    $encoding = AudioEncoding::LINEAR16;
    $languageCode = 'en-US';

    // get contents of a file into a string
    $content = file_get_contents($audioFile);

    // set string as audio content
    $audio = (new RecognitionAudio())
        ->setContent($content);

    // set config
    $config = (new RecognitionConfig())
        ->setEncoding($encoding)
        ->setLanguageCode($languageCode);

    // create the speech client
    $client = new SpeechClient();

    // create the asyncronous recognize operation
    $operation = $client->longRunningRecognize($config, $audio);
    $operation->pollUntilComplete();

    if ($operation->operationSucceeded()) {
        $response = $operation->getResult();

        // each result is for a consecutive portion of the audio. iterate
        // through them to get the transcripts for the entire audio file.
        $final_transcript = '';
        foreach ($response->getResults() as $result) {
            $alternatives = $result->getAlternatives();
            $mostLikely = $alternatives[0];
            $final_transcript .= $mostLikely->getTranscript();
        }

        // download a file
        $file = "transcript.txt";
        $txt = fopen($file, "w") or die("Unable to open file!");
        fwrite($txt, $final_transcript);
        fclose($txt);

        header('Content-Description: File Transfer');
        header('Content-Disposition: attachment; filename='.basename($file));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($file));
        header("Content-Type: text/plain");
        readfile($file);
        exit();
    } else {
        print_r($operation->getError());
    }

    $client->close();
} catch(Exception $e) {
    echo $e->getMessage();
}
