<?php
require_once('include/MVC/View/SugarView.php');
require_once('include/MVC/Controller/SugarController.php');
class CustomExchangeHooks{
	/* 
		After save function
		Function will save drip campaign nd prospect list relationships
	*/
	function createRMA(&$bean, $event, $argument) {
		#RMA should not be created for existing exchange
		
		if($bean->magi_rma_id_c==""){
			$rmabean=BeanFactory::getBean("magi_RMA");
			$rmabean->recordtype="RepairorEval";
			
			$rmabean->shipping_address_street=$_REQUEST['shippingstreet_c'];
			$rmabean->shipping_address_city=$_REQUEST['shippingcity_c'];
			$rmabean->shipping_address_state=$_REQUEST['shippingstate_c'];
			$rmabean->shipping_address_country=$_REQUEST['shippingcountry_c'];
			$rmabean->shipping_address_postalcode=$_REQUEST['shippingzipcode_c'];
				
			#contact data
			$contactbean = BeanFactory::getBean("Contacts",$_REQUEST['contacts_magi_exchanges_1contacts_ida']);
			$contactdata = $contactbean->fetched_row;
			
			$rmabean->primaryemail=$contactdata['email1'];	
			$rmabean->secondaryemail=$contactbean->email2;
			
			#case data
			$casebean = BeanFactory::getBean("Cases",$_REQUEST['cases_magi_exchanges_1cases_ida']);
			$casedata = $casebean->fetched_row;	
			
			#serial number
			
			$rmabean->warranty_status = $casedata['warrantystatus_c'];
			$rmabean->warranty_start = $casedata['warrantystart_c'];
			$rmabean->warranty_end = $casedata['warrantyend_c'];			
			
			$rmabean->magi_serialnumber_magi_rma_1_name=$_REQUEST['magi_serialnumber_magi_exchanges_1_name'];
			$rmabean->magi_serialnumber_magi_rma_1magi_serialnumber_ida=$_REQUEST['magi_serialnumber_magi_exchanges_1magi_serialnumber_ida'];
			
			$rmabean->cases_magi_rma_1cases_ida=$_REQUEST['cases_magi_exchanges_1cases_ida'];
			$rmabean->contact_id=$_REQUEST['contacts_magi_exchanges_1contacts_ida'];		
			$rmabean->account_id=$_REQUEST['account_id_c'];
			$rmabean->save();
			
			# UPDATE RMA in Exchange module
			$GLOBALS['db']->Query("UPDATE magi_exchanges_cstm SET magi_rma_id_c='{$rmabean->id}' WHERE id_c ='{$bean->id}'");
		}	
		
	}
	#before save logic hook
	function saveExchangeNumber(&$bean, $event, $argument) {
		if (!isset($bean->fetched_row['id'])) {
			$bean->name = getExchangeNumber();
		}
	}
}
