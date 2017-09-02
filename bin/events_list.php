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
$url = 'calendars/primary/events';

	$query = [
		'q' => 'かみ',
		'timeMax' => '2017-06-03T10:00:00+09:00',
		'timeMin' => '2016-12-03T10:00:00+09:00',
	];
		

echo $m->generic('GET', $url, $query);
