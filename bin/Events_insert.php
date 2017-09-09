<?php

if (file_exists(__DIR__ . '/../vendor/autoload.php')) {
	require __DIR__ . '/../vendor/autoload.php';
} else {
	require __DIR__ . '/../../../autoload.php';
}
	
use Mikatotai\Mikatotai;

$m = new Mikatotai();

$json = fgets(STDIN);

$array = json_decode($json, true);

$calendar_id = $array['calendar_id'];

$body_array = $array['body'];

$body = json_encode($body_array);

echo $m->Events_insert($calendar_id, $body);
