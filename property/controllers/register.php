<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller{
	public function __Construct(){
		parent::__Construct();
		$this->load->helper(array('form', 'url'));
		if(IsLoggedOn()){
			DoRedirect("/");
		}
	}
	
	public function index(){
		$this->load->view('_template/header');
		$this->load->view('register');
		$this->load->view('_template/footer');
	}
	
	public function process(){
		$UserName = $this->input->post("name");
		$UserEmail = $this->input->post("email");
		$Password = password_hash($this->input->post("pass"), PASSWORD_DEFAULT);
		$UserPhoneNumber = $this->input->post("phone");
		$UserType = $this->input->post("utype");
		
		if($this->input->post()){				// this method to get image
			$config['upload_path']    = './public/user/';
            $config['allowed_types']  = 'gif|jpg|png';
            
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			
			if($this->upload->do_upload('userimage')){
				//print_r($this->upload->data());		if run this give all detail about image
				$UserImage = ($this->upload->data('file_name'));
			}else{
				print_r($this->upload->display_errors());	
			}			
		}
		
			$this->trySignupAgent($UserName, $UserEmail, $Password, $UserPhoneNumber, $UserType, $UserImage);
			$this->index();
	}
	
	
	public function trySignupAgent($UserName, $UserEmail, $Password, $UserPhoneNumber, $UserType, $UserImage){
		$inputField = array(
		'UserName' => $UserName,
		'UserEmail' => $UserEmail,
		'Password' => $Password, 
		'PhoneNumber' => $UserPhoneNumber,
		'UserType' =>	$UserType,
		'UserImage' =>	$UserImage
		);
	
		$this->CUserNameEmail($inputField);
		$this->load->model('user_model');
		$insertion = $this->user_model->insertion($inputField);
		if($insertion){
			$this->success("Registered Successfully");
		}

	}

	public function CUserNameEmail($inputField){
		$UserEmail = $inputField['UserEmail'];
			
		$this->load->model('user_model');
		$RS = $this->user_model->checkNameEmail($UserEmail);
		$Row = $RS->row(0);
		$UserEmailFromDb = $Row->UserEmail;
		if($UserEmail == $UserEmailFromDb){
			$this->error("UserEmail already exist in database");
			DoRedirect("/register");
		}
		
	}

	
	public function success($msg){
		$data["msg"] = $msg;
		$this->load->view('login', $data);
	}
	
	public function error($msg){
		$data["msg"] = $msg;
		$this->load->view('_template/header');
		$this->load->view('register', $data);
		$this->load->view('_template/footer');
	}
}

?>
