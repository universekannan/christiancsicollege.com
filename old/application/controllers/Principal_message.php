<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal_message extends CI_Controller {

	public function index()
	{
		$this->load->view('principal');
	}
}
