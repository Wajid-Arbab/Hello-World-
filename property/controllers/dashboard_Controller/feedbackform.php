<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Feedbackform extends CI_Controller{
	public function __construct(){
		parent::__construct();
	}
	
	public function process(){
		$Name = $this->input->post('name');
		$Phone = $this->input->post('phone');
		$Content = $this->input->post('content');
				
		$this->insertFeedBackinDb($Name, $Phone, $Content);
		
	}
	
	public function insertFeedBackinDb($Name, $Phone, $Content){
		$ci = &get_instance();
		$UserID = $ci->session->userdata('UserID');
		
		$inputField = array(
			'UserID'	=>  $UserID,
			'FDescription' => $Content, 
		);
	
		$this->load->model('user_model');
		$status = $this->user_model->FeedBackInsertion($inputField);
		if($status){
			$this->view();
		}
	}
	
	public function view(){
		$Data["RS"] = $this->user_model->getData();

		$this->load->view('_template/header-1');
		$this->load->view('dashboard/feedback', $Data);
		$this->load->view('_template/footer-1');
	}
	
	public function getFeedback(){
		$ci = &get_instance();
		$UserID = $ci->session->userdata('UserID');
		
		
		$this->load->model('user_model');
		$ActiveUser = $this->user_model->getData($UserID);
		if($ActiveUser){
			die("ok");
		}
	}
}

?>