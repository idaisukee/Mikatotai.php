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

		public function generic(
			$method,
			$url,
			$query
		)
		{
			$response = $this->client->request($method, $url, [
				'query' => $query,
				'headers' => [
					'Authorization' => 'Bearer '.$this->bearer,
				],
			]);
			return $response->getBody();
		}

		public function Events_insert(
			$calendar_id,
			$body
		)
		{
			$url = 'calendars/' . $calendar_id . '/events';
			$response = $this->client->request('POST', $url, [
				'headers' => [
					'Accept' => 'application/json',
					'Content-type' => 'application/json',
					'Authorization' => 'Bearer '.$this->bearer,
				],
				'body' => $body
			]);
			return $response->getBody();
		}


	}

