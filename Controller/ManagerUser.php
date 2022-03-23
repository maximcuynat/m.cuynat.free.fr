<?php

require_once 'Manager.php';

class ManagerUser extends Manager
{
	public function addUser($Username, $Password, $Mail, $notif)
	{
		$this->getBdd();
		return $this->addUser($Username, $Password, $Mail, $notif);
	}
}
