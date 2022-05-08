<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('nav');
		$this->load->view('home');
		$this->load->view('footer');
		
	}

	public function login()
	{
		$this->load->view('nav');
		$this->load->view('login');
		$this->load->view('footer');
		
	}

	
}