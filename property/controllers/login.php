<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Login extends CI_Controller{

		public function __construct(){
			parent::__construct();
			if(IsLoggedOn()){
				DoRedirect("/");
			}
		}

		public function index(){
			$this->load->view('_template/header');
			$this->load->view('login');
			$this->load->view('_template/footer');
		}

		public function process(){
			$Email = $this->input->post('email');		
			$Password = $this->input->post('password');		

			if($Email == "" || $Password == ""){
				$this->error("Please enter email and password");
			}else{
				$this->tryLoginAgent($Email, $Password);
			}
		}

		public function tryLoginAgent($Email, $Password){
			$this->load->model("user_model");
			$RS = $this->user_model->getUserByEmail($Email);
			if($RS->num_rows() <= 0){
				$this->error("No record found against that email");
			}else{
				$Row = $RS->row(0);
				$Passwordhash = $Row->Password;
				$bValidPassword = password_verify($Password, $Passwordhash);

				if(!$bValidPassword){
					$this->error("Invalid email and password");
				}else if($Row->bActive == 0){
					$this->error("you are not allowed to access these application");
				}else{
					$this->session->set_userdata('UserID', $Row->UserID);
					$this->session->set_userdata('UserName', $Row->UserName);
					$this->session->set_userdata('UserType', $Row->UserType);
					$this->session->set_userdata('Role', $Row->Role);
					$this->user_model->setLastLogintime($Row->UserID);
					$this->user_model->setStatus($Row->UserID);
					if($Row->Role == "Regulator"){
						$Data["UserID"] = $Row->UserID;
						DoRedirect("/dashboard", $Data);
					}else{
						DoRedirect("/login");
					}
					
					
					/*
					if($Row->UserID > 0){
						$Data["UserID"] = $Row->UserID;
						DoRedirect("/dashboard", $Data);
					}else{
						DoRedirect("/login");
					}
					*/
					
				}
			}

		}

		public function error($msg){
			$data["msg"] = $msg;
			$this->load->view('_template/header');
			$this->load->view('login', $data);
			$this->load->view('_template/footer');
			
		}
	}
?>
