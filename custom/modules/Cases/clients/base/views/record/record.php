<?php
$viewdefs['Cases'] = 
array (
  'base' => 
  array (
    'view' => 
    array (
      'record' => 
      array (
        'buttons' => 
        array (
          0 => 
          array (
            'type' => 'button',
            'name' => 'cancel_button',
            'label' => 'LBL_CANCEL_BUTTON_LABEL',
            'css_class' => 'btn-invisible btn-link',
            'showOn' => 'edit',
            'events' => 
            array (
              'click' => 'button:cancel_button:click',
            ),
          ),
          1 => 
          array (
            'type' => 'rowaction',
            'event' => 'button:save_button:click',
            'name' => 'save_button',
            'label' => 'LBL_SAVE_BUTTON_LABEL',
            'css_class' => 'btn btn-primary',
            'showOn' => 'edit',
            'acl_action' => 'edit',
          ),
          2 => 
          array (
            'type' => 'actiondropdown',
            'name' => 'main_dropdown',
            'primary' => true,
            'showOn' => 'view',
            'buttons' => 
            array (
              0 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:edit_button:click',
                'name' => 'edit_button',
                'label' => 'LBL_EDIT_BUTTON_LABEL',
                'primary' => true,
                'acl_action' => 'edit',
              ),
              1 => 
              array (
                'type' => 'shareaction',
                'name' => 'share',
                'label' => 'LBL_RECORD_SHARE_BUTTON',
                'acl_action' => 'view',
              ),
              2 => 
              array (
                'type' => 'pdfaction',
                'name' => 'download-pdf',
                'label' => 'LBL_PDF_VIEW',
                'action' => 'download',
                'acl_action' => 'view',
              ),
              3 => 
              array (
                'type' => 'pdfaction',
                'name' => 'email-pdf',
                'label' => 'LBL_PDF_EMAIL',
                'action' => 'email',
                'acl_action' => 'view',
              ),
              4 => 
              array (
                'type' => 'divider',
              ),
              5 => 
              array (
                'name' => 'create_button',
                'type' => 'rowaction',
                'event' => 'button:create_article_button:click',
                'label' => 'LBL_CREATE_KB_DOCUMENT',
                'acl_module' => 'KBContents',
                'acl_action' => 'create',
              ),
              6 => 
              array (
                'type' => 'divider',
              ),
              7 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:find_duplicates_button:click',
                'name' => 'find_duplicates_button',
                'label' => 'LBL_DUP_MERGE',
                'acl_action' => 'edit',
              ),
              8 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:duplicate_button:click',
                'name' => 'duplicate_button',
                'label' => 'LBL_DUPLICATE_BUTTON_LABEL',
                'acl_module' => 'Cases',
                'acl_action' => 'create',
              ),
              9 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:historical_summary_button:click',
                'name' => 'historical_summary_button',
                'label' => 'LBL_HISTORICAL_SUMMARY',
                'acl_action' => 'view',
              ),
              10 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:audit_button:click',
                'name' => 'audit_button',
                'label' => 'LNK_VIEW_CHANGE_LOG',
                'acl_action' => 'view',
              ),
              11 => 
              array (
                'type' => 'divider',
              ),
              12 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:delete_button:click',
                'name' => 'delete_button',
                'label' => 'LBL_DELETE_BUTTON_LABEL',
                'acl_action' => 'delete',
              ),
              12 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:status_open:click',
                'name' => 'status_open',
                'label' => 'Open',
                'acl_action' => 'edit',
              ),
              13 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:status_working:click',
                'name' => 'status_working',
                'label' => 'Working',
                'acl_action' => 'edit',
              ),
              14 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:status_close:click',
                'name' => 'status_close',
                'label' => 'Close',
                'acl_action' => 'edit',
              ),
            ),
          ),
          3 => 
          array (
            'name' => 'sidebar_toggle',
            'type' => 'sidebartoggle',
          ),
        ),
        'panels' => 
        array (
          0 => 
          array (
            'name' => 'panel_header',
            'header' => true,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'picture',
                'type' => 'avatar',
                'size' => 'large',
                'dismiss_label' => true,
                'readonly' => true,
              ),
              1 => 'name',
              2 => 
              array (
                'name' => 'favorite',
                'label' => 'LBL_FAVORITE',
                'type' => 'favorite',
                'dismiss_label' => true,
              ),
              3 => 
              array (
                'name' => 'follow',
                'label' => 'LBL_FOLLOW',
                'type' => 'follow',
                'readonly' => true,
                'dismiss_label' => true,
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'panel_body',
            'label' => 'LBL_RECORD_BODY',
            'columns' => 2,
            'labelsOnTop' => true,
            'placeholders' => true,
            'newTab' => false,
            'panelDefault' => 'expanded',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'case_number',
                'readonly' => true,
              ),
              1 => 'status',
              2 => 
              array (
                'name' => 'customersstatedissue_c',
                'label' => 'LBL_CUSTOMERSSTATEDISSUE',
              ),
              3 => 
              array (
                'name' => 'callorigin_c',
                'label' => 'LBL_CALLORIGIN',
              ),
              4 => 
              array (
                'name' => 'description',
                'nl2br' => true,
                'span' => 6,
              ),
              5 => 
              array (
                'name' => 'account_name',
                'span' => 6,
              ),
              6 => 
              array (
                'name' => 'datetimeopened_c',
                'label' => 'LBL_DATETIMEOPENED',
              ),
              7 => 
              array (
                'name' => 'datetimeclosed_c',
                'label' => 'LBL_DATETIMECLOSED',
              ),
              8 => 
              array (
                'name' => 'errorcode_c',
                'label' => 'LBL_ERRORCODE',
              ),
              9 => 
              array (
              ),
            ),
          ),
          2 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL1',
            'label' => 'LBL_RECORDVIEW_PANEL1',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'contactname_c',
                'studio' => 'visible',
                'label' => 'LBL_CONTACTNAME',
              ),
              1 => 
              array (
                'name' => 'secondarycontactname_c',
                'studio' => 'visible',
                'label' => 'LBL_SECONDARYCONTACTNAME',
              ),
              2 => 
              array (
                'name' => 'contactemail_c',
                'label' => 'LBL_CONTACTEMAIL',
              ),
              3 => 
              array (
                'name' => 'secondaryaccountname_c',
                'studio' => 'visible',
                'label' => 'LBL_SECONDARYACCOUNTNAME',
              ),
              4 => 
              array (
                'name' => 'contactphone_c',
                'label' => 'LBL_CONTACTPHONE',
              ),
              5 => 
              array (
                'name' => 'secondaryemail_c',
                'label' => 'LBL_SECONDARYEMAIL',
              ),
              6 => 
              array (
                'name' => 'region_c',
                'label' => 'LBL_REGION',
              ),
              7 => 
              array (
                'name' => 'secondaryphone_c',
                'label' => 'LBL_SECONDARYPHONE',
              ),
            ),
          ),
          3 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL3',
            'label' => 'LBL_RECORDVIEW_PANEL3',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'shipping_state_c',
                'label' => 'LBL_SHIPPING_STATE',
              ),
              1 => 
              array (
                'name' => 'shippingaddress_city_c',
                'label' => 'LBL_SHIPPINGADDRESS_CITY',
              ),
              2 => 
              array (
                'name' => 'shipping_street_c',
                'label' => 'LBL_SHIPPING_STREET',
              ),
              3 => 
              array (
                'name' => 'shipping_zip_code_c',
                'label' => 'LBL_SHIPPING_ZIP_CODE',
              ),
              4 => 
              array (
                'name' => 'shippingaddress_country_c',
                'label' => 'LBL_SHIPPINGADDRESS_COUNTRY',
              ),
              5 => 
              array (
              ),
            ),
          ),
          4 => 
          array (
            'newTab' => false,
            'panelDefault' => 'collapsed',
            'name' => 'LBL_RECORDVIEW_PANEL2',
            'label' => 'LBL_RECORDVIEW_PANEL2',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 's_serialnumber_cases_1_name',
              ),
              1 => 
              array (
              ),
              2 => 
              array (
                'name' => 'warrantystart_c',
                'label' => 'LBL_WARRANTYSTART',
              ),
              3 => 
              array (
                'name' => 'warrantyend_c',
                'label' => 'LBL_WARRANTYEND',
              ),
              4 => 
              array (
                'name' => 'warrantywarning_c',
                'label' => 'LBL_WARRANTYWARNING',
              ),
              5 => 
              array (
                'name' => 'warrantystatus_c',
                'label' => 'LBL_WARRANTYSTATUS',
              ),
              6 => 
              array (
              ),
              7 => 
              array (
              ),
              8 => 
              array (
              ),
              9 => 
              array (
              ),
            ),
          ),
          5 => 
          array (
            'name' => 'panel_hidden',
            'label' => 'LBL_RECORD_SHOWMORE',
            'hide' => true,
            'columns' => 2,
            'labelsOnTop' => true,
            'placeholders' => true,
            'newTab' => false,
            'panelDefault' => 'expanded',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'resolution',
                'nl2br' => true,
                'span' => 6,
              ),
              1 => 
              array (
                'span' => 6,
              ),
              2 => 
              array (
                'name' => 'date_entered_by',
                'readonly' => true,
                'inline' => true,
                'type' => 'fieldset',
                'label' => 'LBL_DATE_ENTERED',
                'fields' => 
                array (
                  0 => 
                  array (
                    'name' => 'date_entered',
                  ),
                  1 => 
                  array (
                    'type' => 'label',
                    'default_value' => 'LBL_BY',
                  ),
                  2 => 
                  array (
                    'name' => 'created_by_name',
                  ),
                ),
              ),
              3 => 'team_name',
              4 => 
              array (
                'name' => 'date_modified_by',
                'readonly' => true,
                'inline' => true,
                'type' => 'fieldset',
                'label' => 'LBL_DATE_MODIFIED',
                'fields' => 
                array (
                  0 => 
                  array (
                    'name' => 'date_modified',
                  ),
                  1 => 
                  array (
                    'type' => 'label',
                    'default_value' => 'LBL_BY',
                  ),
                  2 => 
                  array (
                    'name' => 'modified_by_name',
                  ),
                ),
              ),
              5 => 
              array (
              ),
            ),
          ),
        ),
        'templateMeta' => 
        array (
          'useTabs' => false,
        ),
      ),
    ),
  ),
);
