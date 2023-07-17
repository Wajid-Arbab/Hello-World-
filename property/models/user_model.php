<?php
class User_model extends Common_model{
	public function insertion($inputField){
		$insertion = $this->db->insert('user', $inputField);
		if(!$insertion){
			echo "message";
		}else{
			DoRedirect("/login");
		}			
	}
	
	public function PropertiesUpdation($inputField){
		$PropertyID = $inputField['PropertyID'];
		$updation = $this->db->update('property', $inputField, array("PropertyID"=>$PropertyID));
		return $updation;		
	}
	
	public function setLastLogintime($UserID){
		$this->db->update('user', array('LastLogin' => date("Y-m-d H:i:s")), array("UserID"=>$UserID));
	}

	public function ccheckNameEmail($UserEmail){
		$RS = $this->db->get('user');
		return $this->CustomRS($RS);
	}
	
	public function checkNameEmail($UserEmail){		
		$SQL = "select * from `user` where `UserEmail` = '".$UserEmail."'";
		return $this->CustomRS($SQL);
	}
	
	public function getUserByEmail($Email){
			$SQL = "select * from `user` where `UserEmail` = '".$Email."'";
			return $this->CustomRS($SQL);
	}
	
	public function setStatus($UserID){
		$this->db->update('user', array('status' => 1), array("UserID" => $UserID));
	}
	
	public function updateStatus(){
		$ci = &get_instance();
		$UserID = $ci->session->userdata('UserID');
		if($UserID > 0){
			$this->db->update('user', array('status' => 0), array("UserID" => $UserID));
		}
	}
	
	public function ShowAInfo(){
		$SQL = "select * from `about`";
		return $this->CustomRS($SQL);
	}
	
	public function InsertMessage($inputField){
		$alert = $this->db->insert('contact', $inputField);
		return $alert;
	}
	
	public function properyInsertion($inputField){
		$alert = $this->db->insert('property', $inputField);
		return $alert;
	}
	
	public function showAgent(){
		$SQL = "select * from `user` where `UserType` = 'agent'";
		return $this->CustomRS($SQL);
	}
	
	public function detailProfile(){
		$ci = &get_instance();
		$UserID = $ci->session->userdata('UserID');
		
		$SQL = "select * from `user` where `UserID` = '".$UserID."'";
		return $this->CustomRS($SQL);
	}
	
	public function FeedBackInsertion($inputField){
		$alert = $this->db->insert('feedback', $inputField);
		return $alert;
	}
	
	public function DAProperty(){
		//SELECT * from `user` INNER JOIN property  WHERE property.UserID = user.UserID ** also working this query
		//$SQL = "SELECT property.*,  user.UserName,user.UserType,user.UserImage FROM `property`,`user` WHERE property.UserID=user.UserID AND (property.SType = 'sale' || property.SType = 'rent')";
		$SQL = "SELECT property.*, user.UserName,user.UserType,user.UserImage FROM `property`,`user` WHERE property.UserID = user.UserID and property.Status = 'available'";
		return $this->CustomRS($SQL);
	}
	
	public function getUserLoginID(){
		$ci = &get_instance();
		$UserID = $ci->session->userdata('UserID');
		return $UserID;
	}
	
	public function IsFeatured(){
		$SQL = "SELECT * FROM `property` WHERE isFeatured = 1 ORDER BY date DESC LIMIT 3";
		return $this->CustomRS($SQL);
	}
	
	public function RecentlyAdd(){
		$SQL = "SELECT * FROM `property` ORDER BY date DESC LIMIT 6";			// a little bit change query if shown username and useremail
		return $this->CustomRS($SQL);
	}
	
	public function SelectLoginUserProperty(){
		$UserID = $this->getUserLoginID();
		$SQL = "select * from `property` where `UserID` = '".$UserID."' and property.Status = 'available'";					// ..............
		return $this->CustomRS($SQL);
	}
	
	public function getUserByID($PropertyID){
		$SQL = "select * from `property` where `propertyID` = '".$PropertyID."'";
		return $this->CustomRS($SQL);
	}
	
	public function deletePropertyByID($PropertyID){
		$SQL = "Delete from `property` where `PropertyID` = '".$PropertyID."'";
		$this->ExecuteSQL($SQL);
	}
	
	public function fetchProperty($PropertyID){
		$SQL = "SELECT * FROM `property`, `user` WHERE property.UserID = user.UserID AND PropertyID = '".$PropertyID."'";
		return $this->CustomRS($SQL);
	}
	
	public function DRecentlyAdd(){
		$SQL = "SELECT property.*, user.UserName,user.UserType,user.UserImage FROM `property`,`user` WHERE property.UserID=user.UserID ORDER BY date DESC LIMIT 6";
		return $this->CustomRS($SQL);
	}
	
	public function sProperty($City){
		$SQL = "SELECT property.*, user.UserName,user.UserType,user.UserImage FROM `property`,`user` WHERE property.UserID=user.UserID and `City` = '".$City."'";
		return $this->CustomRS($SQL);
	}
	
	public function totalPropertyAvailable(){
		$this->db->select('*');
		$this->db->from('property');
		$this->db->like('PropertyID');
		
		$tPropertyAvailable =  $this->db->count_all_results();
		return $tPropertyAvailable;
	}
	
	public function salePropertyAvailable(){
		$this->db->select('*');
		$this->db->from('property');
		$this->db->where('SType', 'sale');
		$this->db->like('PropertyID');
		
		$sPropertyAvailable =  $this->db->count_all_results();
		return $sPropertyAvailable;
	}
	
	public function rentPropertyAvailable(){
		$this->db->select('*');
		$this->db->from('property');
		$this->db->where('SType', 'rent');
		$this->db->like('PropertyID');
		
		$rPropertyAvailable =  $this->db->count_all_results();
		return $rPropertyAvailable;
	}
	
	public function totalRegisteredUser(){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->like('UserID');
		
		$totalRegisteredUser =  $this->db->count_all_results();
		return $totalRegisteredUser;
	}
	
	public function showFeedback(){
		//$SQL = "SELECT * from user, feedback WHERE feedback.UserID = user.UserID and feedback.Status = '1'";
		$SQL = "select feedback.*, user.* from feedback,user where feedback.UserID = user.UserID and feedback.Status = '1'";
		return $this->CustomRS($SQL);
	}
	
	public function popularPlacesPlot(){
		//$SQL = "select * from `property` where `city` = 'Mansehra'";		// distinct query apply here
		$SQL = "select DISTINCT(City) FROM `property` where `city` = 'Mansehra'";	
		return $this->CustomRS($SQL);
	}
	
	public function popularPlacesPlot1(){
		$SQL = "select DISTINCT(City) FROM `property` where `city` = 'Islamabad'";	
		return $this->CustomRS($SQL);
	}
	
	public function popularPlacesPlot2(){
		$SQL = "select DISTINCT(City) FROM `property` where `city` = 'shinkiyari'";	
		return $this->CustomRS($SQL);
	}
	
	public function popularPlacesPlot3(){
		$SQL = "select DISTINCT(City) FROM `property` where `city` = 'abbottabad'";	
		return $this->CustomRS($SQL);
	}
	
	public function tPlotPP(){
		$this->db->select('*');
		$this->db->from('property');
		$this->db->where('city', 'Mansehra');
		$this->db->like('PropertyID');
		$propertyListed =  $this->db->count_all_results();
		return $propertyListed;
	}
	
	public function tPlotPP1(){
		$this->db->select('*');
		$this->db->from('property');
		$this->db->where('city', 'islamabad');
		$this->db->like('PropertyID');
		$propertyListed =  $this->db->count_all_results();
		return $propertyListed;
	}
	
	public function tPlotPP2(){
		$this->db->select('*');
		$this->db->from('property');
		$this->db->where('city', 'shinkiyari');
		$this->db->like('PropertyID');
		$propertyListed =  $this->db->count_all_results();
		return $propertyListed;
	}
	
	public function tPlotPP3(){
		$this->db->select('*');
		$this->db->from('property');
		$this->db->where('city', 'abbottabad');
		$this->db->like('PropertyID');
		$propertyListed =  $this->db->count_all_results();
		return $propertyListed;
	}
	
	public function insertlistingQuery($Data){
		$sType =  $Data['selectType'];
		$sStatus =  $Data['selectStatus'];
		$city =  $Data['city'];
		$SQL = "select property.*, user.UserName from property, user where property.UserID = user.UserID and PType = '".$sType."' and SType = '".$sStatus."' and City = '".$city."'";
		return $this->CustomRS($SQL);
	}
	
	public function fetchthroughPropertyID($PropertyID){
		$SQL = "select * from `property` where `PropertyID` = '".$PropertyID."'";
		return $this->CustomRS($SQL);
	}
	
	public function totalagent(){
		$SQL = "select * from `user` where `UserType` = 'agent'";
		return $this->CustomRS($SQL);
	}
	
	public function totaluser(){
		$SQL = "select * from `user` where `UserType` = 'user'";
		return $this->CustomRS($SQL);
	}
	
	public function totalBuilder(){
		$SQL = "select * from `user` where `UserType` = 'builder'";
		return $this->CustomRS($SQL);
	}
	
	public function totalProperty(){
		$SQL = "select * from `property`";
		return $this->CustomRS($SQL);
	}
	
	public function totalApartment(){
		$SQL = "select * from `property` where `PType` = 'Apartment'";
		return $this->CustomRS($SQL);
	}
	
	public function totalHouse(){
		$SQL = "select * from `property` where `PType` = 'House'";
		return $this->CustomRS($SQL);
	}
	
	public function totalBuilding(){
		$SQL = "select * from `property` where `PType` = 'Building'";
		return $this->CustomRS($SQL);
	}
	
	public function totalFlat(){
		$SQL = "select * from `property` where `PType` = 'Flat'";
		return $this->CustomRS($SQL);
	}
	
	public function onSale(){
		$SQL = "select * from `property` where `SType` = 'sale'";
		return $this->CustomRS($SQL);
	}
	
	public function onRent(){
		$SQL = "select * from `property` where `SType` = 'rent'";
		return $this->CustomRS($SQL);
	}
	
	public function tNumberofAdmin(){
		$SQL = "select * from `user` where `Role` = 'Administrator'";
		return $this->CustomRS($SQL);
	}
	
	public function tNumberofUser(){
		$SQL = "select * from `user` where `UserType` = 'user'";
		return $this->CustomRS($SQL);
	}
	
	public function tNumberofAgent(){
		$SQL = "select * from `user` where `UserType` = 'agent'";
		return $this->CustomRS($SQL);
	}
	
	public function tNumberofBuilder(){
		$SQL = "select * from `user` where `UserType` = 'builder'";
		return $this->CustomRS($SQL);
	}
	
	public function deleteUserByID($UserID){
		$SQL = "Delete from `user` where `UserID` = '".$UserID."'";
		$this->ExecuteSQL($SQL);
	}
	
	public function deleteUserByCityID($CityID){
		$SQL = "Delete from `city` where `CityID` = '".$CityID."'";
		$this->ExecuteSQL($SQL);
	}
	
	public function deleteContact($ContactID){
		$SQL = "Delete from `contact` where `ContactID` = '".$ContactID."'";
		$this->ExecuteSQL($SQL);
	}

	public function selectState(){
		$SQL = "select * from `state`";
		return $this->CustomRS($SQL);
	}
	
	public function tryInsertion($inputField){
		$this->db->insert('city', $inputField);
	}
	
	public function stateData(){
		$SQL = "select city.*, state.StateName from city, state where city.StateID = state.StateID ";
		return $this->CustomRS($SQL);
	}
	
	public function editData(){
		$SQL = "select * from `state`";
		return $this->CustomRS($SQL);
	}
	
	public function editCData($CityID){
		$SQL = "select * from `city` where `CityID` = '".$CityID."'";
		return $this->CustomRS($SQL);
	}
	
	public function tryUpdation($inputField){
		$CityID = $inputField['CityID'];
		$SQL = $this->db->update('city', $inputField, array("CityID" => $CityID));
	}
	
	public function propertyViewByAdmin(){
		//$SQL = "select * from `property`";
		//$SQL = "SELECT property.*,  user.UserName,user.UserType,user.UserImage FROM `property`,`user` WHERE property.UserID=user.UserID AND (property.SType = 'sale' || property.SType = 'rent')";
		$SQL = "SELECT property.*,  user.UserName,user.UserType,user.UserImage FROM `property`,`user` WHERE property.UserID = user.UserID AND property.Status = 'available'";
		return $this->CustomRS($SQL);
	}
	
	public function deleteProperyByAdmin($PropertyID){
		$SQL = "Delete from `property` where `PropertyID` = '".$PropertyID."'";
		$this->ExecuteSQL($SQL);
	}
	
	public function viewContatInfo(){
		$SQL = "select * from contact";
		return $this->CustomRS($SQL);
	}
	
	public function feedBackList(){
		$SQL = "select feedback.*, user.* from user, feedback where user.UserID = feedback.UserID";
		return $this->CustomRS($SQL);
	}
	
	public function deleteFeedback($FID){
		$SQL = "Delete from `feedback` where `FID` = '".$FID."'";
		$this->ExecuteSQL($SQL);
	}
	
	public function editFeedback($FID){
		$SQL = "select * from `feedback` where `FID` = '".$FID."'";
		return $this->CustomRS($SQL);
	}
	
	public function tryUpdationFID($inputField){
		$FID = $inputField['FID'];
		$SQL = $this->db->update('feedback', $inputField, array("FID" => $FID));
	}
	
	public function tryInsertionAbout($inputField){
		$SQL = $this->db->insert('about', $inputField);
	}
	
	public function viewAboutData(){
		$SQL = "select * from `about`";
		return $this->CustomRS($SQL);
	}
	
	public function deleteAbout($ID){
		$SQL = "Delete from `about` where `ID` = '".$ID."'";
		$this->ExecuteSQL($SQL);
	}
	
	public function editAboutInfo($ID){
		$SQL = "select *  from `about` where `ID` = '".$ID."'";
		return $this->CustomRS($SQL);
	}
	
	public function tryUpdationAboutInfo($inputField){
		$ID = $inputField['ID'];
		$SQL = $this->db->update('about', $inputField, array("ID" => $ID));
	}
	
	public function adminInfo(){
		$ID = $this->getUserLoginID();
		$SQL = "select * from`user` where `UserID` = '".$ID."'";
		return $this->CustomRS($SQL);
	}
}

?>