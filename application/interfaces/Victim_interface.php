<?php
defined('BASEPATH') OR exit('No direct script access allowed');

interface Victim_interface {

	public function sendReport();
	public function getVictims();
	public function getVictim();
	public function getLocation();

}
