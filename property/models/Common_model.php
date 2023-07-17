<?php
class Common_model extends CI_Model{
		public function GetTotalRecords($SQL){
		if($SQL == ""){exit;}
		$RS = $this->db->query($SQL);
		$Total = $RS->row_object()->Total;
		return $Total;
	}
	
	public function InsertAndGetID($SQL){
		if($this->db->query($SQL)){
			return $this->db->insert_id();
		}else{
			die(mysql_error());
		}
	}
	
	public function insertByArr($tableName, $Arr){
		$this->db->insert($tableName, $Arr);
		$InsertID = $this->db->insert_id();
		return $InsertID;
	}
	
	public function CustomRS($SQL){
		if($SQL == ""){exit;}
		$RS = $this->db->query($SQL);
		if(!$RS){
			die(mysql_error());
		}
		//mysql_close();
		return $RS;
	}
	
	
	public function ExecuteSQL($SQL){
		if($SQL == ""){exit;}
		if(!$this->db->query($SQL)){
			die(mysql_error());
		}
	}
	
	public function GetLoggedOnuserRS($UserID = 0){
		if($UserID == 0){
			$UserID = GetLoggedOnUserID();
		}
		$query = $this->db->get_where('user', array('UserID' => $UserID), 1, 0);
		if($query->num_rows() == 0){
			return false;
		}else{
			$Row = $query->row_object();
			return $Row;
		}
	}
	
	
	public function setLastUpdateTime(){
		$SQL = "Update preferences SET `prefvalue` = '".time()."' Where `prefname` = 'LastUpdateTime'";
		$this->ExecuteSQL($SQL);
	}
	
}
?>