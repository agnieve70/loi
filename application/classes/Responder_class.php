<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require './application/interfaces/Responder_interface.php';

class Responder_class extends User_class implements Responder_interface{

	public function __construct()
	{
		parent::__construct();
	}

	public function getResponderInfo()
	{
		
	}

	public function getFeedback()
	{
		
	}

	public function getReport()
	{
		
	}

	public function getStatus()
	{
		
	}

	
}
