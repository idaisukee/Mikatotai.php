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
	echo $m->Events_list();
