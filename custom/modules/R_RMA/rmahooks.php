<?php
require_once('include/MVC/View/SugarView.php');
require_once('include/MVC/Controller/SugarController.php');
class rmahooks{
	function updateRMA(&$bean, $event, $argument) {
		
		if (!isset($bean->fetched_row['id'])) {
			// // $rmaObj = $GLOBALS['db']->q("SELECT MAX(rmanumber_c)+1 as rma_number FROM `r_rma_cstm` WHERE 1");
			// $rma = $GLOBALS['db']->fetchByAssoc($rmaObj);
			// print_r($rma);die;
			$rma_number = getRMANumber();
			$bean->rmanumber_c=$rma_number;			
			$bean->name=$rma_number;

			// die("ddddddd");
		}		
	}
}
