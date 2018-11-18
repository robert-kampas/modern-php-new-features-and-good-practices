<?php

$requestBody = json_encode(['username' => 'john']);
$context = stream_context_create([
    'http' => [
        'method' => 'POST',
        'header' => "Context-Type: application/json;charset=utf-8;\r\n" .
                    "Content-Lenght: " . mb_strlen($requestBody),
        'content' => $requestBody
    ]
]);
$response = file_get_contents('https://my-api.com/users', false, $context);

var_dump($response);