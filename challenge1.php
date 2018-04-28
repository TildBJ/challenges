<?php

require_once('vendor/autoload.php');

$client = new GuzzleHttp\Client();

$response = $client->request('GET', 'http://84.200.109.239:5000/challenges/1/');

$token = $response->getBody()->__toString();

$json = json_encode(['token' => $token]);

$postResponse = $client->request('POST', 'http://84.200.109.239:5000/solutions/1/', ['body' => $json]);

dump($postResponse->getBody()->__toString());
