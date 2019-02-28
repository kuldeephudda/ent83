<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/application/Ext/Utils/getUtilityFunction.php
 
function getLoanNumber(){
	global $db;
	$qry = "Select name FROM magi_loan WHERE deleted=0 AND name<>''  ORDER BY CAST(REPLACE(name,'LN-','') AS UNSIGNED) DESC limit 1 ";	
	$res = $db->Query($qry);					
	if(!$res){
		$GLOBALS['log']->info("Error");
	}
	if($res->num_rows > 0){
		$row = $res->fetch_assoc();
		list($type, $prev_inv_no) = @explode('-', $row['name']);
		$loan_number = (int) $prev_inv_no + 1;						
		$loan_number = "LN-".$loan_number;		
	}else{
		$loan_number = 'LN-30000';					
	}
	return $loan_number;
}
function getExchangeNumber(){
	global $db;
	$qry = "Select name FROM e_exchanges WHERE deleted=0 AND name<>'' ORDER BY CAST(REPLACE(name,'EX-','') AS UNSIGNED) DESC limit 1";
	$res = $db->Query($qry);					
	if(!$res){
		$GLOBALS['log']->info("Error");
	}
	if($res->num_rows <= 0){
		$exchange_number = 'EX-30000';
	}else{
		$row = $res->fetch_assoc();
		list($type, $prev_inv_no) = @explode('-', $row['name']);
		$exchange_number = (int) $prev_inv_no + 1;						
		$exchange_number = "EX-".$exchange_number;					
	}
	return $exchange_number;
}

function getRMANumber(){
	global $db;
	$qry = "Select name FROM r_rma WHERE deleted=0 AND name<>'' ORDER BY CAST(REPLACE(name,'RMA-','') AS UNSIGNED) DESC limit 1";
	$res = $db->Query($qry);					
	if(!$res){
		$GLOBALS['log']->info("Error");
	}
	if($res->num_rows <= 0){
		$exchange_number = 'RMA-30000';
	}else{
		$row = $res->fetch_assoc();
		list($type, $prev_inv_no) = @explode('-', $row['name']);
		$exchange_number = (int) $prev_inv_no + 1;						
		$exchange_number = "RMA-".$exchange_number;					
	}
	return $exchange_number;
}


?>
