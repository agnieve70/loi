<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require './application/interfaces/Victim_interface.php';

class Victim_class extends User_class implements Victim_interface{

	public function __construct()
	{
		parent::__construct();
	}

	public function sendReport()
	{
		
	}

	public function getVictims()
	{
		
	}

	public function getVictim()
	{
		
	}

	public function getLocation()
	{
		
	}

}
