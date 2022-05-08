<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public function index()
	{
		
		$this->load->view('nav');
		// $this->load->view('home');
		$this->load->view('product');
		$this->load->view('footer');
		
	}

	public function product()
	{
		$this->load->model('Api_model');
		// $this->load->view('nav');
		// $this->load->view('product');
		// $this->load->view('footer');
		if($this->input->post('save'))
		{
		
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
		$this->index();
		}
	}

	
}
