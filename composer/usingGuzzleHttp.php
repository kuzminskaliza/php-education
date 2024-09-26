<?php

require 'vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client();


try {
    $response = $client->request('GET', 'https://jsonplaceholder.typicode.com/posts/1');

    $body = $response->getBody();
    $content = $body->getContents();

    echo 'Response from API: ' . $content;
} catch (Exception $exception) {
    echo 'Error: ' . $exception->getMessage();
}