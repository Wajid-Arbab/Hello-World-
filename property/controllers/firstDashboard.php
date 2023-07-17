<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class firstDashboard extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
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
		$this->load->model('user_model');
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
	
	public function property(){
		$this->load->model('user_model');
		$DataAP = $this->user_model->DAProperty();
		$DataIF = $this->user_model->IsFeatured();
		$DataRA = $this->user_model->RecentlyAdd();
		$AData = array(
			"DataAP" => $DataAP,
			"DataIF" => $DataIF,
			"DataRA" => $DataRA,
		);
		
		$this->load->view('_template/header');
		$this->load->view('dashboard/property', $AData);
		$this->load->view('_template/footer');
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
	
	public function agent(){
		$this->load->model('user_model');
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
}	
?>