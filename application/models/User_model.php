<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model{

	public function __construct()
	{
		// parent::__construct();
	}

	public function registerUser($data)
	{
		// save to database
		return false;
	}

	public function loginUser($data)
	{
		// login from database
		return true;
	}
}
