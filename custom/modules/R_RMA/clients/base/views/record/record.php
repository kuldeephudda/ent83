<?php
$module_name = 'R_RMA';
$viewdefs[$module_name] = 
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
                'type' => 'rowaction',
                'event' => 'button:find_duplicates_button:click',
                'name' => 'find_duplicates_button',
                'label' => 'LBL_DUP_MERGE',
                'acl_action' => 'edit',
              ),
              6 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:duplicate_button:click',
                'name' => 'duplicate_button',
                'label' => 'LBL_DUPLICATE_BUTTON_LABEL',
                'acl_module' => 'R_RMA',
                'acl_action' => 'create',
              ),
              7 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:audit_button:click',
                'name' => 'audit_button',
                'label' => 'LNK_VIEW_CHANGE_LOG',
                'acl_action' => 'view',
              ),
              8 => 
              array (
                'type' => 'divider',
              ),
              9 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:delete_button:click',
                'name' => 'delete_button',
                'label' => 'LBL_DELETE_BUTTON_LABEL',
                'acl_action' => 'delete',
              ),
              10 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:print_tag:click',
                'name' => 'print_tag',
                'label' => 'Print Tag',
                'acl_action' => 'edit',
              ),
              11 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:shipping_info_sheet:click',
                'name' => 'shipping_info_sheet',
                'label' => 'Shipping Info Sheet',
                'acl_action' => 'edit',
              ),
              12 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:rma_reprint:click',
                'name' => 'rma_reprint',
                'label' => 'RMA Reprint',
                'acl_action' => 'edit',
              ),
              13 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:start_repair:click',
                'name' => 'start_repair',
                'label' => 'Start Repair',
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
            'label' => 'LBL_RECORD_HEADER',
            'header' => true,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'picture',
                'type' => 'avatar',
                'width' => 42,
                'height' => 42,
                'dismiss_label' => true,
                'readonly' => true,
              ),
              1 => 'name',
              2 => 
              array (
                'name' => 'favorite',
                'label' => 'LBL_FAVORITE',
                'type' => 'favorite',
                'readonly' => true,
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
                'name' => 'recordtype',
                'label' => 'LBL_RECORDTYPE',
              ),
              1 => 
              array (
                'name' => 'rmanumber_c',
                'label' => 'LBL_RMANUMBER',
              ),
              2 => 
              array (
                'name' => 'status',
                'label' => 'LBL_STATUS',
              ),
              3 => 
              array (
                'name' => 'type_c',
                'label' => 'LBL_TYPE',
              ),
              4 => 
              array (
                'name' => 'cases_r_rma_1_name',
              ),
              5 => 
              array (
              ),
              6 => 
              array (
                'name' => 'collectionsent',
                'label' => 'LBL_COLLECTIONSENT',
              ),
              7 => 
              array (
                'name' => 'dhlcollectioncost',
                'label' => 'LBL_DHLCOLLECTIONCOST',
              ),
              8 => 
              array (
                'name' => 'exchangeshipped',
                'label' => 'LBL_EXCHANGESHIPPED',
              ),
              9 => 
              array (
              ),
              10 => 'assigned_user_name',
              11 => 'team_name',
              12 => 
              array (
                'name' => 'tag',
                'span' => 6,
              ),
              13 => 
              array (
                'span' => 6,
              ),
            ),
          ),
          2 => 
          array (
            'newTab' => false,
            'panelDefault' => 'collapsed',
            'name' => 'LBL_RECORDVIEW_PANEL1',
            'label' => 'LBL_RECORDVIEW_PANEL1',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'additionalrepairsnotes',
                'studio' => 'visible',
                'label' => 'LBL_ADDITIONALREPAIRSNOTES',
              ),
              1 => 
              array (
                'name' => 'itemsbeingreturned',
                'label' => 'LBL_ITEMSBEINGRETURNED',
              ),
              2 => 
              array (
                'name' => 'numberofitems',
                'studio' => 'visible',
                'label' => 'LBL_NUMBEROFITEMS',
              ),
              3 => 
              array (
              ),
            ),
          ),
          3 => 
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
                'name' => 'serialnumberid_c',
                'label' => 'LBL_SERIALNUMBERID',
              ),
              1 => 
              array (
                'name' => 'warranty_status1_c',
                'label' => 'LBL_WARRANTY_STATUS1',
              ),
              2 => 
              array (
                'name' => 'warranty_start__c',
                'label' => 'LBL_WARRANTY_START__C',
              ),
              3 => 
              array (
                'name' => 'warranty_end__c',
                'label' => 'LBL_WARRANTY_END__C',
              ),
            ),
          ),
          4 => 
          array (
            'newTab' => false,
            'panelDefault' => 'collapsed',
            'name' => 'LBL_RECORDVIEW_PANEL3',
            'label' => 'LBL_RECORDVIEW_PANEL3',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'primaryemail',
                'label' => 'LBL_PRIMARYEMAIL',
              ),
              1 => 
              array (
                'name' => 'secondaryemail',
                'label' => 'LBL_SECONDARYEMAIL',
              ),
              2 => 
              array (
              ),
              3 => 
              array (
              ),
            ),
          ),
          5 => 
          array (
            'newTab' => false,
            'panelDefault' => 'collapsed',
            'name' => 'LBL_RECORDVIEW_PANEL4',
            'label' => 'LBL_RECORDVIEW_PANEL4',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'datereceived',
                'label' => 'LBL_DATERECEIVED',
              ),
              1 => 
              array (
                'name' => 'dateshipped',
                'label' => 'LBL_DATESHIPPED',
              ),
              2 => 
              array (
                'name' => 'receivedvia',
                'label' => 'LBL_RECEIVEDVIA',
              ),
              3 => 
              array (
                'name' => 'shippedvia',
                'label' => 'LBL_SHIPPEDVIA',
              ),
              4 => 
              array (
                'name' => 'despatchref',
                'label' => 'LBL_DESPATCHREF',
              ),
              5 => 
              array (
                'name' => 'shippingcost',
                'label' => 'LBL_SHIPPINGCOST',
              ),
              6 => 
              array (
              ),
              7 => 
              array (
                'name' => 'trackingnumber',
                'label' => 'LBL_TRACKINGNUMBER',
              ),
            ),
          ),
          6 => 
          array (
            'newTab' => false,
            'panelDefault' => 'collapsed',
            'name' => 'LBL_RECORDVIEW_PANEL5',
            'label' => 'LBL_RECORDVIEW_PANEL5',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'originalpackaging',
                'label' => 'LBL_ORIGINALPACKAGING',
              ),
              1 => 
              array (
                'name' => 'dyefilm',
                'label' => 'LBL_DYEFILM',
              ),
              2 => 
              array (
                'name' => 'transitdamage',
                'label' => 'LBL_TRANSITDAMAGE',
              ),
              3 => 
              array (
                'name' => 'retransferfilm',
                'label' => 'LBL_RETRANSFERFILM',
              ),
              4 => 
              array (
                'name' => 'usbcable',
                'label' => 'LBL_USBCABLE',
              ),
              5 => 
              array (
                'name' => 'holokotekey',
                'label' => 'LBL_HOLOKOTEKEY',
              ),
              6 => 
              array (
                'name' => 'powersupply',
                'label' => 'LBL_POWERSUPPLY',
              ),
              7 => 
              array (
                'name' => 'holokotekeynumber',
                'label' => 'LBL_HOLOKOTEKEYNUMBER',
              ),
              8 => 
              array (
                'name' => 'powercable',
                'label' => 'LBL_POWERCABLE',
              ),
              9 => 
              array (
                'name' => 'filmcassette',
                'label' => 'LBL_FILMCASSETTE',
              ),
              10 => 
              array (
                'name' => 'cardhopper',
                'label' => 'LBL_CARDHOPPER',
              ),
              11 => 
              array (
                'name' => 'retransfercassette',
                'label' => 'LBL_RETRANSFERCASSETTE',
              ),
              12 => 
              array (
                'name' => 'cardstacker',
                'label' => 'LBL_CARDSTACKER',
              ),
              13 => 
              array (
                'name' => 'cleaningroller',
                'label' => 'LBL_CLEANINGROLLER',
              ),
              14 => 
              array (
                'name' => 'samplecards',
                'label' => 'LBL_SAMPLECARDS',
              ),
              15 => 
              array (
                'name' => 'prima4hopperlockinglid',
                'label' => 'LBL_PRIMA4HOPPERLOCKINGLID',
              ),
              16 => 
              array (
                'name' => 'prima4hopperbase',
                'label' => 'LBL_PRIMA4HOPPERBASE',
              ),
              17 => 
              array (
                'name' => 'laminatefilm',
                'label' => 'LBL_LAMINATEFILM',
              ),
              18 => 
              array (
                'name' => 'bookedinby',
                'label' => 'LBL_BOOKEDINBY',
              ),
              19 => 
              array (
                'name' => 'bookinginnotes',
                'label' => 'LBL_BOOKINGINNOTES',
              ),
            ),
          ),
          7 => 
          array (
            'newTab' => false,
            'panelDefault' => 'collapsed',
            'name' => 'LBL_RECORDVIEW_PANEL6',
            'label' => 'LBL_RECORDVIEW_PANEL6',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'typeofpart',
                'label' => 'LBL_TYPEOFPART',
              ),
              1 => 
              array (
                'name' => 'serialpartnumber',
                'label' => 'LBL_SERIALPARTNUMBER',
              ),
              2 => 
              array (
                'name' => 'quantity',
                'label' => 'LBL_QUANTITY',
              ),
              3 => 
              array (
              ),
            ),
          ),
          8 => 
          array (
            'name' => 'panel_hidden',
            'label' => 'LBL_SHOW_MORE',
            'hide' => true,
            'columns' => 2,
            'labelsOnTop' => true,
            'placeholders' => true,
            'newTab' => false,
            'panelDefault' => 'collapsed',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'description',
                'span' => 6,
              ),
              1 => 
              array (
                'span' => 6,
              ),
              2 => 
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
              3 => 
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
