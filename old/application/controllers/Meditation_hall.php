<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Meditation_hall extends CI_Controller {

	public function index()
	{
		$this->load->view('meditation');
	}
}
