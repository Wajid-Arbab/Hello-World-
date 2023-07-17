<?php
class Contact extends CI_Controller{
	public function __COnstruct(){
		parent::__COnstruct();
	}

	public function process(){
		$Name = $this->input->post('name');		
		$Email = $this->input->post('email');		
		$Mnumber = $this->input->post('phone');		
		$Subject = $this->input->post('subject');		
		$Message = $this->input->post('message');		
		
		if($Name == "" || $Email == "" || $Mnumber == "" || $Subject == "" || $Message == ""){
			$this->alert("Please fill all fields");
		}else{
			$this->trySendMessage($Name, $Email, $Mnumber, $Subject, $Message);
		}
	}
	
	public function trySendMessage($Name, $Email, $Mnumber, $Subject, $Message){
		$inputField = array(
			'Name' => $Name,
			'Email' => $Email,
			'Phone' => $Mnumber,
			'Subject' => $Subject,
			'Message' => $Message
		);
		
		$this->load->model("user_model");
		$alert = $this->user_model->InsertMessage($inputField);
		
		if($alert){
			$this->alert("Your Request Proceed");
		}
	}
	
	public function alert($msg){
		$data["msg"] = $msg;
		$this->load->view('_template/header-1');
		$this->load->view('dashboard/contact', $data);
		$this->load->view('_template/footer-1');
	}
}


?>