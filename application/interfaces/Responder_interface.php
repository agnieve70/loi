<?php
defined('BASEPATH') OR exit('No direct script access allowed');

interface Responder_interface {

	public function getResponderInfo();
	public function getReport();
	public function getFeedback();
	public function getStatus();
	
}
