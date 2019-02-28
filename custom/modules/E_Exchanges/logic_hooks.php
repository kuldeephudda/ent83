<?php
// Do not store anything in this file that is not part of the array or the hook version.  This file will	
// be automatically rebuilt in the future. 
 $hook_version = 1; 
$hook_array = Array(); 
// position, file, function 
$hook_array['after_save'] = Array(); 
$hook_array['before_save'] = Array(); 
 // $hook_array['after_save'][] = Array(1, 'Create RMA after Exchange', 'custom/modules/E_Exchanges/exchangehooks.php','CustomExchangeHooks', 'createRMA'); 
$hook_array['before_save'][] = Array(1, 'Auto generate Exchange Number', 'custom/modules/E_Exchanges/exchangehooks.php','CustomExchangeHooks', 'saveExchangeNumber'); 


?>