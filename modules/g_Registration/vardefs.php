<?php

/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */

$dictionary['g_Registration'] = array(
    'table' => 'g_registration',
    'audited' => true,
    'activity_enabled' => false,
    'duplicate_merge' => true,
    'fields' => array (
  'adate' => 
  array (
    'required' => false,
    'name' => 'adate',
    'vname' => 'LBL_ADATE',
    'type' => 'datetimecombo',
    'massupdate' => true,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => '1',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'pii' => false,
    'calculated' => false,
    'size' => '20',
    'enable_range_search' => false,
    'dbType' => 'datetime',
  ),
  'purchasedfrom' => 
  array (
    'required' => false,
    'name' => 'purchasedfrom',
    'vname' => 'LBL_PURCHASEDFROM',
    'type' => 'varchar',
    'massupdate' => false,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => '1',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'pii' => false,
    'default' => '',
    'full_text_search' => 
    array (
      'enabled' => '0',
      'boost' => '1',
      'searchable' => false,
    ),
    'calculated' => false,
    'len' => '255',
    'size' => '20',
  ),
  'recordtype' => 
  array (
    'required' => false,
    'name' => 'recordtype',
    'vname' => 'LBL_RECORDTYPE',
    'type' => 'enum',
    'massupdate' => true,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => '1',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'pii' => false,
    'default' => 'Registration',
    'calculated' => false,
    'len' => 100,
    'size' => '20',
    'options' => 'recordtype_4',
    'dependency' => false,
  ),
),
    'relationships' => array (
),
    'optimistic_locking' => true,
    'unified_search' => true,
    'full_text_search' => true,
);

if (!class_exists('VardefManager')){
}
VardefManager::createVardef('g_Registration','g_Registration', array('basic','team_security','assignable','taggable'));