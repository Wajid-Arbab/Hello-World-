<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class firstDashboard extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model('user_model');
			$this->load->library("pagination");
	}
	
	public function index(){
		$this->load->model('user_model');
		$Data = $this->user_model->DRecentlyAdd();
		$tPropertyAvailable = $this->user_model->totalPropertyAvailable();
		$salePropertyAvailable = $this->user_model->salePropertyAvailable();
		$rentPropertyAvailable = $this->user_model->rentPropertyAvailable();
		$totalRegisteredUser = $this->user_model->totalRegisteredUser();
		$showFeedback = $this->user_model->showFeedback();
		$popularPlaces = $this->user_model->popularPlacesPlot();
		$popularPlacesPlot1 = $this->user_model->popularPlacesPlot1();
		$popularPlacesPlot2 = $this->user_model->popularPlacesPlot2();
		$popularPlacesPlot3 = $this->user_model->popularPlacesPlot3();
		$tPlotPP = $this->user_model->tPlotPP();
		$tPlotPP1 = $this->user_model->tPlotPP1();
		$tPlotPP2 = $this->user_model->tPlotPP2();
		$tPlotPP3 = $this->user_model->tPlotPP3();
		
		$Data = array(
			"RS" => $Data,
			"tPropertyAvailable" => $tPropertyAvailable,
			"salePropertyAvailable" => $salePropertyAvailable,
			"rentPropertyAvailable" => $rentPropertyAvailable,
			"totalRegisteredUser" => $totalRegisteredUser,
			"showFeedback" => $showFeedback,
			"popularPlaces" => $popularPlaces,
			"popularPlacesPlot1" => $popularPlacesPlot1,
			"popularPlacesPlot2" => $popularPlacesPlot2,
			"popularPlacesPlot3" => $popularPlacesPlot3,
			"tPlotPP" => $tPlotPP,
			"tPlotPP1" => $tPlotPP1,
			"tPlotPP2" => $tPlotPP2,
			"tPlotPP3" => $tPlotPP3,
		);
		
		$this->load->view('_template/header');
		$this->load->view('dashboard/bLDash', $Data);
		$this->load->view('_template/footer');
	}
	
	public function about(){
		$Data["RS"] = $this->user_model->ShowAInfo();
		$this->load->view('_template/header');
		$this->load->view('dashboard/about', $Data);
		$this->load->view('_template/footer');
	}
	
	public function contact(){
		$this->load->view('_template/header');
		$this->load->view('dashboard/contact');
		$this->load->view('_template/footer');
	}
	
	public function agent(){
		$Data["RS"] = $this->user_model->showAgent();
		$this->load->view('_template/header');
		$this->load->view('dashboard/agent', $Data);
		$this->load->view('_template/footer');
	}
	
	public function submitproperty(){
		$this->load->view('_template/header');
		$this->load->view('dashboard/submitproperty');
		$this->load->view('_template/footer');
	}
	// dashboard/dashbord(copu) and then change
	
	public function applyFilter(){
		$propertyType = $this->input->get("type");
		$saleType = $this->input->get("stype");
		$city   = $this->input->get("city");
		$title   = $this->input->get("title");
		$bedRoom = $this->input->get("bedRoom");
		$status = $this->input->get("status");		// here we changed status with kitchen filed
		$bath   = $this->input->get("bath");
		$price  = $this->input->get("price");
		
		if($title === null) {$title = "";}
		if($bedRoom === null) {$bedRoom = "";}
		if($status === null) {$status = "";}
		if($bath === null) {$bath = "";}
		if($price === null) {$price = "";}
		
		
		$config = array();
		$config["base_url"] = base_url() . "firstDashboard/applyFilter";
		$config["total_rows"] = $this->user_model->totalPropertyAvailable();

		$config["per_page"] = 3;								
		$config["uri_segment"] = 3;
		
		
		$config['full_tag_open'] = "<ul class = 'pagination'>";
		$config['full_tag_close'] = "</ul>";
		$config["first_tag_open"]  = '<li class="page-item">';
        $config["first_tag_close"] = '</li>';
        $config["last_tag_open"]   = '<li class="page-item">';
        $config["last_tag_close"]  = '</li>';
		$config['first_link'] = 'First Page';
		$config['last_link'] = 'Last Page';
		$config['next_link'] = 'Next Page';
		$config['prev_link'] = 'Prev Page';
		$config['next_tag_open'] = "<li class = 'page-item disabled'>";
		$config['next_tag_close'] = "</li>";
		$config['prev_tag_open'] = "<li class = 'page-item'>";
		$config['prev_tag_close'] = "</li>";
		$config['num_tag_open'] = "<li class = 'page-item'>";
		$config['num_tag_close'] = "</li>";
		$config['cur_tag_open'] = "<li class = 'page-item active' class = 'page-link'>";
		$config['cur_tag_close'] = "<a><span class = 'sr-only'>(current)</span></a></li>";
		$config['attributes'] = array('class' => 'page-link');
		
		
		
		$this->pagination->initialize($config);
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
       if($propertyType == "" and $saleType == "" and $city == "" and $title == "" and $bedRoom == "" and $status == "" and $bath == "" and $price == ""){
			$RS = $this->user_model->fetch_property($config["per_page"], $page);
		}else{
			$RS = $this->user_model->applyFilter($config["per_page"], $page, $propertyType, $saleType, $city, $title, $bedRoom, $status, $bath, $price);
		}
       $Data_link = $this->pagination->create_links();		
		
		$AData = array(
			"RS" => $RS,
			"Data_link" => $Data_link,
		
			// 
			"city" => $city,
			"propertyType" => $propertyType,
			"saleType" => $saleType,
			"title" => $title,
			"bedRoom" => $bedRoom,
			"status" => $status,
			"bath" => $bath,
			"price" => $price,
			
		);
		$this->load->view('_template/header');
		$this->load->view('dashboard/property', $AData);
		$this->load->view('_template/footer');
			
	}
}	



?>