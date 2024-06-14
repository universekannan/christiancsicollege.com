<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fitness_and_yoga extends CI_Controller {

	public function index()
	{
		$this->load->view('fitness');
	}
}
