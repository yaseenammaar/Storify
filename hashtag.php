<?php

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://voicerss-text-to-speech.p.rapidapi.com/?key=undefined",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "POST",
	CURLOPT_POSTFIELDS => "src=Hello%2C%20world!&hl=en-us&r=0&c=mp3&f=8khz_8bit_mono",
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: voicerss-text-to-speech.p.rapidapi.com",
		"X-RapidAPI-Key: ef98c660e1msh7a95d1775f22a3dp18aba8jsn7c1b0e1456a8",
		"content-type: application/x-www-form-urlencoded"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	echo $response;
}
