<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require('./application/interfaces/User_interface.php');
require('./application/models/User_model.php');

class User_class extends CI_Controller implements User_interface{

	private $user = array(
		"user_id" => "",
		"firstname" => "",
		"lastname" => "",
		"email" => "",
		"user_type" => ""
	);
	protected $user_mdl;

	public function __construct()
	{
		parent::__construct();
		$this->user_mdl = new User_model();
	}

	public function setUser($user_arr)
	{
		$this->user = $user_arr;
	}

	public function getUser($id)
	{
		return $this->user;
	}

	public function registerUser()
	{
		if($this->user_mdl->registerUser($this->user))
		{
			return true;
		}
		return false;
	}

	public function loginUser()
	{
		if($this->user_mdl->loginUser($this->user))
		{
			return true;
		}
		return "false";
	}

	public function changePassword()
	{

	}
}
