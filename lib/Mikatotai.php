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

		public function Events_list(
			$alwaysIncludeEmail = null,
			$iCalUID = null,
			$maxAttendees = null,
			$maxResults = null,
			$orderBy = null,
			$pageToken = null,
			$privateExtendedProperty = null,
			$q = 'かみ',
			$sharedExtendedProperty = null,
			$showDeleted = null,
			$showHiddenInvitations = null,
			$singleEvents = null,
			$syncToken = null,
			$timeMax = '2017-06-03T10:00:00+09:00',
			$timeMin = '2016-12-03T10:00:00+09:00',
			$timeZone = null,
			$updatedMin = null
		)
		{
			$response = $this->client->request('GET', 'calendars/primary/events', [
				'query' => [
					'q' => $q,
					'timeMax' => $timeMax,
					'timeMin' => $timeMin,
				],
				'headers' => [
					'Authorization' => 'Bearer '.$this->bearer,
				],
			]);
			return $response->getBody();
		}
	}




