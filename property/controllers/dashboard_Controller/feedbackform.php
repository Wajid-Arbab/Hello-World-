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
			'Status'	=>  '0'
		);
	
		$this->load->model('user_model');
		$status = $this->user_model->FeedBackInsertion($inputField);
		if($status){
			$this->view();
		}
		
	}
	
	public function view(){
		$this->load->view('_template/header-1');	
		$this->load->view('dashboard/dashboard');
		$this->load->view('_template/footer-1');
	}
}

?>