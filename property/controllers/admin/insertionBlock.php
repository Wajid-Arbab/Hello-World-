<?php
class InsertionBlock extends CI_Controller{
	public function __COnstruct(){
		parent::__COnstruct();
	}

	public function process(){
		$City = $this->input->post('city');		
		$StateID = $this->input->post('state');		

		$this->tryInsertion($StateID, $City);
	}
	
	public function tryInsertion($StateID, $City){
		$inputField = array(
			'CityName' => $City,
			'StateID' => $StateID
		);
		
		$this->load->model("user_model");
		$alert = $this->user_model->tryInsertion($inputField);
		$this->addCity();
	}
	
	public function addCity(){
		$selectState = $this->user_model->selectState();
		$sRocord = $this->user_model->stateData();
		$Data = array(
			"selectState" => $selectState,
			"sRocord" => $sRocord,
		);
		$this->load->view('_template/header-a');
		$this->load->view('admin/SCity/addCity', $Data);
		$this->load->view('_template/footer-a');
	}
	
	public function process1(){
		$CityID = $this->uri->segment(4);
		$City = $this->input->post('ucity');		
		$StateID = $this->input->post('ustate');		
		if($StateID == ""){
			$StateID = '1';
		}

		$this->tryUpdation($CityID, $StateID, $City);
	}
	
	public function tryUpdation($CityID, $StateID, $City){
		$inputField = array(
			'CityID' => $CityID,
			'CityName' => $City,
			'StateID' => $StateID
		);
		
		$this->load->model("user_model");
		$alert = $this->user_model->tryUpdation($inputField);
		$this->addCity();
	}
	
	public function process2(){
		$FID = $this->uri->segment(4);
		$Status = $this->input->post('status');		
		
		$this->tryUpdationFID($FID, $Status);
	}
	
	public function tryUpdationFID($FID, $Status){
		$inputField = array(
			'FID' => $FID,
			'Status' => $Status
		);
		
		$this->load->model("user_model");
		$this->user_model->tryUpdationFID($inputField);
		$this->viewFeedback();
	}
	
	public function viewFeedback(){
		$Data["RS"] = $this->user_model->feedBackList();
		$this->load->view('_template/header-a');
		$this->load->view('admin/CFeedback/viewFeedback', $Data);
		$this->load->view('_template/footer-a');
	}
	
	public function process3(){
		$Title = $this->input->post('title');		
		
		$config['upload_path']    = './public/property/';
        $config['allowed_types']  = 'gif|jpg|png';
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		
		if($this->upload->do_upload('aimage')){
			$Image = ($this->upload->data('file_name'));
		}
		
		$Content = $this->input->post('content');		
		
		$this->tryInsertionAbout($Title, $Image, $Content);
	}
	
	public function tryInsertionAbout($Title, $Image, $Content){
		$inputField = array(
			'Title' => $Title,
			'Image' => $Image,
			'Content' => $Content
		);
		
		$this->load->model("user_model");
		$this->user_model->tryInsertionAbout($inputField);
		$this->viewAbout();
	}
	
	public function viewAbout(){
		$Data["RS"] = $this->user_model->viewAboutData();
		$this->load->view('_template/header-a');
		$this->load->view('admin/about/viewAbout', $Data);
		$this->load->view('_template/footer-a');
	}
	
		public function process4(){
		$ID = $this->uri->segment(4);	
		$Title = $this->input->post('utitle');		
		$Content = $this->input->post('ucontent');		
		
		$config['upload_path']    = './public/property/';
        $config['allowed_types']  = 'gif|jpg|png';
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		
		if($this->upload->do_upload('aimage')){
			$Image = ($this->upload->data('file_name'));
		}
		
		$this->tryUpdationAboutInfo($Title, $Image, $Content, $ID);
	}
	
	public function tryUpdationAboutInfo($Title, $Image, $Content, $ID){
		$inputField = array(
			'Title' => $Title,
			'Image' => $Image,
			'Content' => $Content,
			'ID' => $ID
		);
		
		$this->load->model("user_model");
		$this->user_model->tryUpdationAboutInfo($inputField);
		$this->viewAbout();
	}	
}
?>