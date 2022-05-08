<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function index()
	{
		$this->load->view('nav');
		$this->load->view('home');
		$this->load->view('footer');
		
	}

	

	
}