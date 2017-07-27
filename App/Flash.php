<?php

namespace App;

class Flash
{
	public static function addMessage($messages)
	{
		if (! isset($_SESSION['flash_notifications'])) {
			$_SESSION['flash_notifications'] = [];
		}
		$_SESSION['flash_notifications'][] = $messages;
	}
	public static function getMessages()
	{
		if(isset($_SESSION['flash_notifications'])) {
			$messages =  $_SESSION['flash_notifications'];
			unset($_SESSION['flash_notifications']);
			return $messages;
		}
	}
}
