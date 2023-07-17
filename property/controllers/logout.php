<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		RequiredLogin();
	}
	public function UpdateStatus(){
		$this->load->model('user_model');
		$this->user_model->updateStatus();
	}
	
	public function index(){
		$this->UpdateStatus();
		$this->session->sess_destroy();
		DoRedirect("/login");
	}
}