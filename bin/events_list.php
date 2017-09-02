<?php

if (file_exists(__DIR__ . '/../vendor/autoload.php')) {
	require __DIR__ . '/../vendor/autoload.php';
} else {
	require __DIR__ . '/../../../autoload.php';
}
	
use Sinsituwoka\Sinsituwoka;
use Mikatotai\Mikatotai;
use GuzzleHttp\Client;

$m = new Mikatotai();

$json = fgets(STDIN);
$array = json_decode($json, true);

$method = $array['method'];
$url = $array['url'];

$query = $array['query'];


echo $m->generic($method, $url, $query);
