<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function index()
	{
		$this->load->view('nav');
		$this->load->view('home');
		$this->load->view('footer');
		
	}

	public function aboutus()
	{
		$this->load->view('nav');
		$this->load->view('about_us');
		$this->load->view('footer');
		
	}

	
}
