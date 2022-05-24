<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
		
	public function __construct()
	{
		parent::__construct();
// 		if (!isset($_SESSION['username'])){

// 			redirect(base_url().'Auth/login');


// 		}

		
		
		$this->load->model('Api_model');
		// $this->load->view('nav');
		// $this->load->view('product');
		// $this->load->view('footer');

		if($this->input->post('save'))
		{
			$this->load->model('Api_model');
			$result['data']=$this->Api_model->api1showid();
			$this->load->view('api-1showid',$result);

			$data['user_id']=0;
			$data['owner']="ESC_13";
			$data['pd1']=$this->input->post('pd1');
			$data['pd2']=$this->input->post('pd2');
			$data['pd3']=$this->input->post('pd3');
			$data['pd4']=$this->input->post('pd4');
			$data['status_out']="waiting";
			$data['status']="pending";
			$response=$this->Api_model->api1insert($data);
			if($response==true){
					echo "Records Saved Successfully";
			}
			else{
					echo "Insert error !";
			}
	
		}
		
	}

	public function index()
	{

		$result['data']=$this->Api_model->api1select();
		// $this->load->view('product',$result);
		
		$this->load->view('nav');
		// $this->load->view('home');
		$this->load->view('product',$result);
		$this->load->view('footer');
		
		
	}

	
	
	

	
}
