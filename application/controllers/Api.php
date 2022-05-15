<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

	public function index()
	{
		$this->load->model('Api_model');

	}

	public function api2select()
	{
		$this->load->model('Api_model');

        $res["result"] = $this->Api_model->api2select();
		
		$this->load->view('api-2select', $res);

		$this->Api_model->api2_update();
	
	}

	public function api1showid()
	{

		$this->load->model('Api_model');
		$result['data']=$this->Api_model->api1showid();
		$this->load->view('api-1showid',$result);

		
		// $this->load->model('Api_model');
        // $data["fetch_data"]=$this->Api_model->api1select();
		// $this->load->view("api-1select", $data);
	}

	public function api1insert()
	{
		
		$this->load->model('Api_model');
		$this->load->view('product');
	}

	public function api2insert(){
			
		$this->load->model('Api_model');
		$this->load->view('api-2insert');

	}


	public function savedata(){
			
		if($this->input->post('save'))
		{
		
			$data['user_id']=0;
			$data['owner']=0;
			$data['pd1']=$this->input->post('pd1');
			$data['pd2']=$this->input->post('pd2');
			$data['pd3']=$this->input->post('pd3');
			$data['pd4'].=$this->input->post('pd4');
			$data['status']=0;
			$data['status_out']=0;
			$response=$this->Api->api1insert($data);
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