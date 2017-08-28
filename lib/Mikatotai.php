<?php

	namespace Mikatotai;

	if (file_exists(__DIR__ . '/../vendor/autoload.php')) {
		require __DIR__ . '/../vendor/autoload.php';
	} else {
		require __DIR__ . '/../../../autoload.php';
	}

	use Sinsituwoka\Sinsituwoka;
	use GuzzleHttp\Client;

	class Mikatotai
	{


		public function __construct()
		{
			$s = new Sinsituwoka();
			$this->bearer = $s->bearer();
			$this->client = new Client([
				'base_uri' => 'https://www.googleapis.com/calendar/v3/',
					'timeout'  => 2.0,
			]);
		}

		public function CalendarList_list(
			$maxResults = null,
			$minAccessRole = null,
			$pageToken = null,
			$showDeleted = null,
			$showHidden = null,
			$syncToken = null
		)
		{
			$response = $this->client->request('GET', 'users/me/calendarList', [
				'query' => [
				],
				'headers' => [
					'Authorization' => 'Bearer '.$this->bearer,
				],
			]);
			echo $response->getBody();
		}

			
	}




