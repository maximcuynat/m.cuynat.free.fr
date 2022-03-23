<?php

require_once 'Manager.php';
require_once '../Model/User.php';

class ManagerUser extends Manager
{
	public function addUser($Username, $Password, $Mail, $notif)
	{
		$this->getBdd();
		return $this->addUser($Username, $Password, $Mail, $notif);
	}
}
