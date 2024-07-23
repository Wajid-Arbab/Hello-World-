<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		RequiredLogin();
		$this->load->library("pagination");
		$this->load->model('user_model');
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
		
		$this->load->view('_template/header-1');
		$this->load->view('dashboard/dashboard', $Data);
		$this->load->view('_template/footer-1');
	}
	
	public function about(){
		$this->load->model('user_model');
		$Data["RS"] = $this->user_model->ShowAInfo();
		$this->load->view('_template/header-1');
		$this->load->view('dashboard/about', $Data);
		$this->load->view('_template/footer-1');
	}
	
	public function contact(){
		$this->load->view('_template/header-1');
		$this->load->view('dashboard/contact');
		$this->load->view('_template/footer-1');
	}
	
	public function property(){
		$this->load->model('user_model');
		$DataAP = $this->user_model->DAProperty();
		$DataIF = $this->user_model->IsFeatured();
		$DataRA = $this->user_model->RecentlyAdd();
		if($search = $this->input->post("search")){
			$searchResult = $this->user_model->likeQuery($search);
			if($searchResult){
				$AData = array(
					"DataAP" => $searchResult,
					"DataIF" => $DataIF,
					"DataRA" => $DataRA,
				);
		$this->load->view('_template/header-1');
		$this->load->view('dashboard/property', $AData);
		$this->load->view('_template/footer-1');
			}
		}else{			
			$AData = array(
				"DataAP" => $DataAP,
				"DataIF" => $DataIF,
				"DataRA" => $DataRA,
			);
		$this->load->view('_template/header-1');
		$this->load->view('dashboard/property', $AData);
		$this->load->view('_template/footer-1');
		}
		
	}
	
	
	public function property1(){
		$this->load->model('user_model');
		
		$tRecordOnonePage = $this->input->post("number");
	   
	   $config = array();
       $config["base_url"] = base_url() . "dashboard/property1";
       $config["total_rows"] = $this->user_model->totalPropertyAvailable();

		if($tRecordOnonePage){
		   $config["per_page"] = $tRecordOnonePage;			
		   $config["uri_segment"] = 3;
		}else{
		   $config["per_page"] = 4;								
		   $config["uri_segment"] = 3;
		}
       $this->pagination->initialize($config);
       $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
       
	   $Data_result = $this->user_model->fetch_property($config["per_page"], $page);
       $Data_link = $this->pagination->create_links();
	
		
		
		$DataAP = $this->user_model->DAProperty();
		$DataIF = $this->user_model->IsFeatured();
		$DataRA = $this->user_model->RecentlyAdd();
		if($search = $this->input->post("search")){
			$searchResult = $this->user_model->likeQuery($search);
			if($searchResult){
				$AData = array(
					"Data_result" => $Data_result,
					"data_link" => $Data_link,

				
					"DataAP" => $searchResult,
					"DataIF" => $DataIF,
					"DataRA" => $DataRA,
				);
		$this->load->view('_template/header-1');
		$this->load->view('dashboard/propertyl', $AData);
		$this->load->view('_template/footer-1');
			}
		}else{			
			$AData = array(
				"Data_result" => $Data_result,
				"data_link" => $Data_link,

			
				"DataAP" => $DataAP,
				"DataIF" => $DataIF,
				"DataRA" => $DataRA,
			);
		$this->load->view('_template/header-1');
		$this->load->view('dashboard/propertyl', $AData);
		$this->load->view('_template/footer-1');
		}
		
	}
	
	public function propertydetail(){
		$PropertyID = $this->uri->segment(3);
		$this->load->model('user_model');
		$DataIF = $this->user_model->IsFeatured();
		$DataRA = $this->user_model->RecentlyAdd();
		$RS = $this->user_model->fetchProperty($PropertyID);
		$Data = array(
			"RS" => $RS,
			"DataIF" => $DataIF,
			"DataRA" => $DataRA,
		);
		$this->load->view('_template/header-1');
		$this->load->view('dashboard/propertydetail', $Data);
		$this->load->view('_template/footer-1');
	}
	
	public function agent(){
		$this->load->model('user_model');
		$Data["RS"] = $this->user_model->showAgent();
		$this->load->view('_template/header-1');
		$this->load->view('dashboard/agent', $Data);
		$this->load->view('_template/footer-1');
	}
	
	public function submitproperty(){
		$this->load->view('_template/header-1');
		$this->load->view('dashboard/submitproperty');
		$this->load->view('_template/footer-1');
	}
	
	public function propertygrid(){
		$Data["selectType"] = $this->input->post('type');
		$Data["selectStatus"] = $this->input->post('stype');
		$Data["city"] = $this->input->post('city');

		$this->load->model('user_model');
		$RS= $this->user_model->insertlistingQuery($Data);
		$RAdd= $this->user_model->RecentlyAdd();
		$RS = array(
			"RS" => $RS,
			"RAdd" => $RAdd,
		
		);
		$this->load->view('_template/header-1');
		$this->load->view('dashboard/propertygrid', $RS);
		$this->load->view('_template/footer-1');
	}
	
	public function profile(){
		$this->load->model('user_model');
		$Data["RS"] = $this->user_model->detailProfile();
		$this->load->view('_template/header-1');
		$this->load->view('dashboard/profile', $Data);
		$this->load->view('_template/footer-1');
	}	
	
	public function feature(){
	   $this->load->model('user_model');
	   
	   $config = array();
       $config["base_url"] = base_url() . "dashboard/feature";
       $config["total_rows"] = $this->user_model->totalPropertyAvailable();
       $config["per_page"] = 2;
       $config["uri_segment"] = 3;
       $this->pagination->initialize($config);
       $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
       
	   $Data_result = $this->user_model->fetch_property($config["per_page"], $page);
       $Data_link = $this->pagination->create_links();
	   $userEnter_property = $this->user_model->SelectLoginUserProperty();
       $Data = array(
			"data_result" => $Data_result,
			"data_link" => $Data_link,
			"userEnter_property" => $userEnter_property,
	   );
		
		
		$this->load->view('_template/header-1');
		$this->load->view('dashboard/feature', $Data);
		$this->load->view('_template/footer-1');
	}
	
	public function stateproperty(){
		$City = $this->uri->segment(3);
		$this->load->model('user_model');
		$RS = $this->user_model->sProperty($City);
		$RAdd = $this->user_model->RecentlyAdd();
		$Data = array(
			'RS' => $RS,
			'RAdd' => $RAdd,
		);
		$this->load->view('_template/header-1');
		$this->load->view('dashboard/stateproperty', $Data);
		$this->load->view('_template/footer-1');
	}
	
	public function submitpropertyupdate(){
		$PropertyID = $this->uri->segment(3);
		$this->load->model('user_model');
		$Data["RS"] = $this->user_model->getUserByID($PropertyID);
		$this->load->view('_template/header-1');
		$this->load->view('dashboard/submitpropertyupdate', $Data);
		$this->load->view('_template/footer-1');
	}
	
	public function submitpropertydelete(){
		$PropertyID = $this->uri->segment(3);
		$this->load->model('user_model');
		$this->user_model->deletePropertyByID($PropertyID);	
		$this->feature();
	}
	
	public function applyFilter(){
		//https://youtu.be/zc1F50TeyIY
		//https://youtu.be/ygzfmRjVaV0
		
		$propertyType = $this->input->get("type");
		$saleType = $this->input->get("stype");
		$city   = $this->input->get("city");
		$title   = $this->input->get("title");
		$bedRoom = $this->input->get("bedRoom");
		$status = $this->input->get("status");
		$bath   = $this->input->get("bath");
		$price  = $this->input->get("price");
		
		if($title === null) {$title = "";}
		if($bedRoom === null) {$bedRoom = "";}
		if($status === null) {$status = "";}
		if($bath === null) {$bath = "";}
		if($price === null) {$price = "";}
		
		
		$config = array();
		$config["base_url"] = base_url() . "dashboard/applyFilter";
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
		
		
		
//		$RS = $this->user_model->applyFilter($propertyType, $saleType, $city, $title, $bedRoom, $status, $bath, $price);
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
		$this->load->view('_template/header-1');
		$this->load->view('dashboard/propertyl', $AData);
		$this->load->view('_template/footer-1');
			
	}
	
	public function feedback(){
		$Data["RS"] = $this->user_model->getData();
	
		$this->load->view('_template/header-1');
		$this->load->view('dashboard/feedback', $Data);
		$this->load->view('_template/footer-1');
	}
}	
?>	