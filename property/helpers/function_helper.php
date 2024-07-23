<?php
function IsLoggedOn(){
	$ci = &get_instance();
	$UserID = $ci->session->userdata('UserID');
	if(isset($UserID)){
		if($UserID > 0){
				$Role = $ci->session->userdata('Role');
				if(isset($Role)){
					if($Role == "Administrator" || $Role == "Regulator"){
						return true;
					}else{
						return false;
					}
				}else{
					return false;
				}
		}else{
			return false;
		}
	}else{
		return false;
	}
}

function IsLoggedOnAdmin(){
	if(!IsLoggedOn()){
		//DoRedirect(base_url()."admin/dashboard");
		return false;
	}else{
		$ci = &get_instance();
		$Role = $ci->session->userdata('Role');
		if(isset($Role)){
			if($Role == "Administrator"){
				return true;
			}else{
				return false;
			}
		}else{
			return false;
		}
	}
}

function DoRedirect($URL){
	if($URL == ""){return false;}
	header("Location: {$URL}");
	//redirect($URL, 'refresh');
	die();
}

function RequiredLogin(){
	if(!IsLoggedOn()){
		DoRedirect(base_url()."firstDashboard");
	}
}

function RequiredAdminLogin(){
	if(!IsLoggedOnAdmin()){
		DoRedirect(base_url()."admin/login");
	}
}

function CustomRS($SQL){
	if($SQL == ""){exit;}
	$RS = mysql_query($SQL);
	if(!$RS){
		die(mysql_error());
	}
	return $RS;
}

function CCustomRS($SQL){
	if($SQL == ""){exit;}
	$RS = mysqli_fetch_array($SQL);
	if(!RS){
		die(mysql_error());
	}
	return $RS;
}

function ExecuteSQL($SQL){
	if($SQL == ""){exit;}
	$RS = mysql_query($SQL);
	if(!$RS){
		die(mysql_error());
	}
}


function CUserNameEmail($tableName, $Array){
	$SQL = "";  
	$FilterArr = "";
		foreach($Array as $key=>$value){
			if($SQL == ""){$SQL .= "WHERE";}
		}
		$FilterArr .= $SQL;
		$FilterClause = "";
		foreach($Array as $key=>$value){
			if($FilterClause != ""){$FilterClause .= " OR ";}
			$FilterClause .= "`".$key."` = '".$value."'";
		}
		$SQL .= $FilterClause;
		
	$Query = "SELECT * FROM `".$tableName."` ".$SQL;
	return $Query;
}

function createServer(){
	http.createServer(function(req, res){
		fs.readfile('begin.js', function(data, err){			
			res.writeHead(200, {'content-type' : 'text/html'});
			res.write(data);
			return res.end(data);
		}): return res.write(err);
	})
}

?>