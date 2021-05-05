<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include "./application/classes/User_class.php";

class User extends User_class {

	protected $user_class;
	protected $user;

	public function __construct()
	{
		parent::__construct();
		$this->user_class = new User_class();
	}

	public function index()
	{
		$this->load->view('register');
	}

	public function login()
	{
		$this->load->view('login');
	}

	public function registerUser()
	{
		$this->user['firstname'] = $this->input->post('firstname');
		$this->user['lastname'] = $this->input->post('lastname');
		$this->user['email'] = $this->input->post('email');
		$this->user['user_type'] = $this->input->post('user_type');

		$this->user_class->setUser($this->user);
		print_r($this->user_class->registerUser($this->user));
	}

	public function loginUser()
	{
		$this->user['email'] = $this->input->post('email');
		$this->user['password'] = $this->input->post('password');

		$this->user_class->setUser($this->user);
		$this->user_class->loginUser($this->user);
	}
}
