<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PropertiesUpdation extends CI_Controller{
	public function __Construct(){
		parent::__Construct();
	}
	
	public function process(){
		$this->load->model("user_model");
		$UserID = $this->user_model->getUserLoginID();
		$title = $this->input->post('title');
		$content = $this->input->post('content');
		$propertytype = $this->input->post('ptype');
		$sellingtype = $this->input->post('stype');
		$bathroom = $this->input->post('bath');
		$bhk = $this->input->post('bhk');
		$bedroom = $this->input->post('bed');
		$balcony = $this->input->post('balc');
		$kitchen = $this->input->post('kitc');
		$hall = $this->input->post('hall');
		
		$floor = $this->input->post('floor');
		$price = $this->input->post('price');
		$city = $this->input->post('city');
		$state = $this->input->post('state');
		
		$totalfloor = $this->input->post('totalfl');
		$areasize = $this->input->post('asize');
		$adress = $this->input->post('loc');
		
		$feature = $this->input->post('feature');
		// old and new image updation
		$PropertyID = $this->uri->segment(4);
		$Data = $this->user_model->fetchthroughPropertyID($PropertyID);
		if($Data->num_rows() > 0){
			foreach($Data->result_object() as $Row){
				
		$config['upload_path']    = './public/property/';
        $config['allowed_types']  = 'gif|jpg|png';
        
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		
				if($this->upload->do_upload('aimage')){
					$image = ($this->upload->data('file_name'));
				}else{
					$image = $Row->Image;
				}
				
				if($this->upload->do_upload('aimage2')){
					$image2 = ($this->upload->data('file_name'));
				}else{
					$image2 = $Row->Image2;
				}
				
				if($this->upload->do_upload('aimage4')){
					$image4 = ($this->upload->data('file_name'));
				}else{
					$image4 = $Row->Image4;
				}
				
				$status = $this->input->post('status');
				
				if($this->upload->do_upload('aimage1')){
					$image1 = ($this->upload->data('file_name'));
				}else{
					$image1 = $Row->Image1;
				}
				
				if($this->upload->do_upload('aimage3')){
					$image3 = ($this->upload->data('file_name'));
				}else{
					$image3 = $Row->Image3;
				}
				
				if($this->upload->do_upload('fimage1')){
					$bfloorimage = ($this->upload->data('file_name'));
				}else{
					$bfloorimage = $Row->FloorPlanImage;
				}
				
				if($this->upload->do_upload('fimage2')){
					$gfloorplanimage = ($this->upload->data('file_name'));
				}else{
					$gfloorplanimage = $Row->GoundFImage;
				}
				
				if($this->upload->do_upload('fimage')){
					$fplanimage = ($this->upload->data('file_name'));
				}else{
					$fplanimage = $Row->FloorPlanImage;
				}
				$PropertyID = $Row->PropertyID;
		
			}
		}
		
		
		$isfeatured = $this->input->post('isFeatured');
		
		$this->trypropertyinsertion($UserID, $PropertyID, $title, $content, $propertytype, $sellingtype, $kitchen, $bathroom, $bhk, $bedroom, $balcony, $hall, $floor, $price, $city, $state, $totalfloor, $areasize, $adress, $feature, $image, $image2, $image4, $status, $bfloorimage, $image1, $image3, $fplanimage, $gfloorplanimage, $isfeatured);
	}
	
	public function trypropertyinsertion($UserID, $PropertyID, $title, $content, $propertytype, $sellingtype, $bathroom, $bhk, $bedroom, $kitchen, $balcony, $hall, $floor, $price, $city, $state, $totalfloor, $areasize, $adress, $feature, $image, $image2, $image4, $status, $bfloorimage, $image1, $image3, $fplanimage, $gfloorplanimage, $isfeatured){
			$inputField = array(
				'UserID' => $UserID,
				'PropertyID' => $PropertyID,
				'PTitle' => $title,
				'PContent' => $content,
				'PType' => $propertytype,
				'BHK' => $bhk,
				'SType' => $sellingtype,
				'BedRoom' => $bedroom,
				'BathRoom' => $bathroom,
				'Balcony' => $balcony,
				'Kitchen' => $kitchen,
				'Hall' => $hall,
				'Floor' => $floor,
				'Price' => $price,
				'TFloor' => $totalfloor,
				'AreaSize' => $areasize,
				'City' => $city,
				'Adress' => $adress,
				'State' => $state,
				'Feature' => $feature,
				'Image' => $image,
				'Image1' => $image1,
				'Image2' => $image2,
				'Image3' => $image3,
				'Image4' => $image4,
				'FloorPlanImage' => $fplanimage,
				'Status' => $status,
				'GoundFImage' => $gfloorplanimage,
				'BasementFImage' => $bfloorimage,
				'IsFeatured' => $isfeatured
			);
			
			$this->load->model('user_model');
			$alert = $this->user_model->PropertiesUpdation($inputField);
			if($alert){
				$this->alert("Property Detail Registered Successfully");
			}else{
				$this->alert("Property Detail not Registered Successfully");
			}
	}
	
	public function alert($msg){
		$data["msg"] = $msg;
		$this->load->view('_template/header-1');
		$this->load->view('dashboard/submitproperty', $data);
		$this->load->view('_template/footer-1');
		
	}
} 

?>