<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
        $this->load->library('encrypt');
		$this->load->model('Register_model'); 
        $this->load->model('Login_model'); 
	}

	public function index()
	{
		if (isset($_GET['Login'])) {
            return redirect('/Auth/login');
        } else {
            return redirect('/Auth/register');
        }
	}

	public function login()
	{
		$this->load->view('nav');
		$this->form_validation->set_rules('name', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run() == FALSE) {
            $this->load->view('login');
        } else {
            $id = $this->Login_model->get_query($this->input->post('name'), 'id');
            $salt= $this->Login_model->get_query($this->input->post('name'), 'salt');
            $password_hash = hash('sha256', $id . $this->input->post('password') . $salt);
            $data = array(
                'username' => $this->input->post('name'),
                'password_hash' => $password_hash
            );
            if($this->Login_model->can_login($data)) {
                $session_data = array(
                    'username' => $data['username']
                );
                $this->session->set_userdata($session_data);
                redirect(base_url());
            } else {
                $this->session->set_tempdata('login_error', 'Invalid Username or Password', 2);
                redirect(base_url().'Auth/login');
            }
        }
		$this->load->view('footer');
		
	}

	public function register()
	{
		$this->load->view('nav');
		$this->form_validation->set_rules('name', 'Username', 'trim|required|min_length[5]|max_length[12]|is_unique[account.username]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]');
        $this->form_validation->set_rules('password_con', 'Password Confirmation', 'required|matches[password]');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[account.email]');


		if ($this->form_validation->run() == FALSE) {
            $this->load->view('register');
        } else {
            $id = $this->Register_model->get_register_id();
            $salt= base64_encode(md5(mt_rand()));
            $password_hash = hash('sha256', $id . $this->input->post('password') . $salt);
            $data = array(
                'username' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'password_hash' => $password_hash,
                'salt' => $salt
            );
            
            $id = $this->Register_model->insert($data);
            if($id > 0) {

            }
            $success = array(
                'name' => 'Login page',
                'url' => base_url('Auth/login')
            );
			redirect("home");
            // $this->load->view('content/content-success', $success);
            // $this->load->view('js', array('script'=>'redirect'));
        }
		$this->load->view('footer');
	}

	
	function logout() {
        unset($_SESSION['username']);
        redirect(base_url());
    }
	
}