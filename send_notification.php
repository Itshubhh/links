<?php

$url = "https://fcm.googleapis.com/v1/projects/project-dashboard-ee104/messages:send";

$accessToken = "BHxU6wPSAJy1GjtgwERuZRrMHU3AFlaZxaWRgkTsJkYiHZ7QeNAjsXmLrwx8KG-527JacIAtBpSu_-CQrJ4lgBk";

$data = json_decode(file_get_contents("php://input"), true);

$token = $data['token'];

$title = $data['title'];

$body = $data['body'];

$message = [

"message" => [

"token" => $token,

"notification" => [

"title" => $title,

"body" => $body

]

]

]

];

$headers = [

"Authorization: Bearer ".$accessToken,

"Content-Type: application/json"

];

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);

curl_setopt($ch, CURLOPT_POST, true);

curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($message));

$response = curl_exec($ch);

curl_close($ch);

echo $response;

?>
