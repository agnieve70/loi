<?php
defined('BASEPATH') OR exit('No direct script access allowed');

interface User_interface {
	public function setUser($user_arr);
	public function getUser($id);
	public function registerUser();
	public function loginUser();
}
