<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Brochure extends CI_Controller {

	public function index()
	{
		$this->load->view('brochure');
	}
}
