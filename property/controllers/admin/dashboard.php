<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Dashboard extends CI_Controller{

		public function __construct(){
			parent::__construct();
			RequiredAdminLogin();
			$this->load->model('user_model');
		}
		
		public function index(){
			$totalagent = $this->user_model->totalagent();
			$totalUser = $this->user_model->totaluser();
			$totalBuilder = $this->user_model->totalBuilder();
			$totalProperty = $this->user_model->totalProperty();
			$totalApartment = $this->user_model->totalApartment();
			$totalHouse = $this->user_model->totalHouse();
			$totalBuilding = $this->user_model->totalBuilding();
			$totalFlat = $this->user_model->totalFlat();
			$onSale = $this->user_model->onSale();
			$onRent = $this->user_model->onRent();
			
			$Data = array(
				"RS" => $totalagent,
				"totalUser" => $totalUser,
				"totalBuilder" => $totalBuilder,
				"totalProperty" => $totalProperty,
				"totalApartment" => $totalApartment,
				"totalHouse" => $totalHouse,
				"totalBuilding" => $totalBuilding,
				"totalFlat" => $totalFlat,
				"onSale" => $onSale,
				"onRent" => $onRent,
			);
			
			$this->load->view('_template/header-a');
			$this->load->view('admin/dashboard', $Data);
			$this->load->view('_template/footer-a');
		}
		
		public function adminList(){
			$Data["RS"] = $this->user_model->tNumberofAdmin();
			$this->load->view('_template/header-a');
			$this->load->view('admin/User/adminList', $Data);
			$this->load->view('_template/footer-a');
		}
		
		public function userList(){
			$Data["RS"] = $this->user_model->tNumberofUser();
			$this->load->view('_template/header-a');
			$this->load->view('admin/User/userList', $Data);
			$this->load->view('_template/footer-a');
		}
		
		public function agentList(){
			$Data["RS"] = $this->user_model->tNumberofAgent();
			$this->load->view('_template/header-a');
			$this->load->view('admin/User/agentList', $Data);
			$this->load->view('_template/footer-a');
		}
		
		public function builderList(){
			$Data["RS"] = $this->user_model->tNumberofBuilder();
			$this->load->view('_template/header-a');
			$this->load->view('admin/User/builderList', $Data);
			$this->load->view('_template/footer-a');
		}
		
		public function deleteUser(){
			$UserID = $this->uri->segment(4);
			$this->user_model->deleteUserByID($UserID);
			$this->adminList();
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
		
		public function deleteUserfCity(){
			$CityID = $this->uri->segment(4);
			$this->user_model->deleteUserByCityID($CityID);
			$this->addCity();
		}
		
		public function deleteContact(){
			$ContactID = $this->uri->segment(4);
			$this->user_model->deleteContact($ContactID);
			$this->viewContact();
		}
		
		public function editCity(){
			$CityID = $this->uri->segment(4);
			$fetchStateData = $this->user_model->editData();
			$fetchCityData = $this->user_model->editCData($CityID);
			$Data = array(
				"fetchStateData" => $fetchStateData,
				"fetchCityData" => $fetchCityData,
				"CityID" => $CityID,
			);
			
			$this->load->view('_template/header-a');
			$this->load->view('admin/SCity/editCity', $Data);
			$this->load->view('_template/footer-a');
		}
		
		public function addProperty(){
			$this->load->view('_template/header-a');
			$this->load->view('/admin/Property/addProperty');
			$this->load->view('_template/footer-a');
		}
		
		public function viewProperty(){
			$Data["RS"] = $this->user_model->propertyViewByAdmin();
			$this->load->view('_template/header-a');
			$this->load->view('/admin/Property/viewProperty', $Data);
			$this->load->view('_template/footer-a');
		}
		
		public function deleteProperyThroughAdmin($PropertyID){
			$this->user_model->deleteProperyByAdmin($PropertyID);
			$this->viewProperty();
		}
		
		public function editProperty(){
			$PropertyID = $this->uri->segment(4);
			$this->load->model('user_model');
			$Data["RS"] = $this->user_model->getUserByID($PropertyID);
			$this->load->view('_template/header-a');
			$this->load->view('admin/property/editProperty', $Data);
			$this->load->view('_template/footer-a');
		}
		
		public function viewContact(){
			$Data["RS"] = $this->user_model->viewContatInfo();
			$this->load->view('_template/header-a');
			$this->load->view('admin/CFeedback/viewContact', $Data);
			$this->load->view('_template/footer-a');
		}
		
		public function viewFeedback(){
			$Data["RS"] = $this->user_model->feedBackList();
			$this->load->view('_template/header-a');
			$this->load->view('admin/CFeedback/viewFeedback', $Data);
			$this->load->view('_template/footer-a');
		}
		
		public function editFeedback(){
			$FID = $this->uri->segment(4);
			$Data["RS"] = $this->user_model->editFeedback($FID);
			$this->load->view('_template/header-a');
			$this->load->view('admin/CFeedback/editFeedback', $Data);
			$this->load->view('_template/footer-a');
		}

		public function deleteFeedback(){
			$FID = $this->uri->segment(4);
			$this->user_model->deleteFeedback($FID);
			$this->viewFeedback();
		}
		
		public function deleteAbout(){
			$ID = $this->uri->segment(4);
			$this->user_model->deleteAbout($ID);
			$this->viewAbout();
		}
		
		public function addAbout(){
			$this->load->view('_template/header-a');
			$this->load->view('admin/about/addAbout');
			$this->load->view('_template/footer-a');
		}
		
		public function viewAbout(){
			$Data["RS"] = $this->user_model->viewAboutData();
			$this->load->view('_template/header-a');
			$this->load->view('admin/about/viewAbout', $Data);
			$this->load->view('_template/footer-a');
		}
		
		public function editAboutInfo(){
			$ID = $this->uri->segment(4);
			$Data["RS"] = $this->user_model->editAboutInfo($ID);
			$this->load->view('_template/header-a');
			$this->load->view('admin/about/editAbout', $Data);
			$this->load->view('_template/footer-a');
		}
		
		public function profile(){
			$Data["RS"] = $this->user_model->adminInfo();
			$this->load->view('_template/header-a');
			$this->load->view('admin/profile/profile', $Data);
			$this->load->view('_template/footer-a');
		}
		
		public function totalApartment(){
			$Data["RS"] = $this->user_model->totalApartment();
			$this->load->view('_template/header-a');
			$this->load->view('admin/property/viewProperty', $Data);
			$this->load->view('_template/footer-a');
		}
		
		public function totalHouse(){
			$Data["RS"] = $this->user_model->totalHouse();
			$this->load->view('_template/header-a');
			$this->load->view('admin/property/viewProperty', $Data);
			$this->load->view('_template/footer-a');
		}
		
		public function totalBuilding(){
			$Data["RS"] = $this->user_model->totalBuilding();
			$this->load->view('_template/header-a');
			$this->load->view('admin/property/viewProperty', $Data);
			$this->load->view('_template/footer-a');
		}
		
		public function totalFlat(){
			$Data["RS"] = $this->user_model->totalFlat();
			$this->load->view('_template/header-a');
			$this->load->view('admin/property/viewProperty', $Data);
			$this->load->view('_template/footer-a');
		}
		
		public function onSale(){
			$Data["RS"] = $this->user_model->onSale();
			$this->load->view('_template/header-a');
			$this->load->view('admin/property/viewProperty', $Data);
			$this->load->view('_template/footer-a');
		}
		
		public function onRent(){
			$Data["RS"] = $this->user_model->onRent();
			$this->load->view('_template/header-a');
			$this->load->view('admin/property/viewProperty', $Data);
			$this->load->view('_template/footer-a');
		}
		
	}
?>
