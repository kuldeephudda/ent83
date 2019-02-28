<?php
$module_name = 'S_SerialNumber';
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
                'acl_module' => 'S_SerialNumber',
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
              ),
              1 => 
              array (
                'name' => 'recordtype',
                'label' => 'LBL_RECORDTYPE',
              ),
              2 => 
              array (
                'name' => 'printernotes',
                'studio' => 'visible',
                'label' => 'LBL_PRINTERNOTES',
              ),
              3 => 
              array (
                'name' => 'enduro3eucppromotion',
                'label' => 'LBL_ENDURO3EUCPPROMOTION',
              ),
              4 => 
              array (
                'name' => 'loanordemoprinterlentto',
                'studio' => 'visible',
                'label' => 'LBL_LOANORDEMOPRINTERLENTTO',
              ),
              5 => 
              array (
                'name' => 'loanordemoprinterinfo',
                'studio' => 'visible',
                'label' => 'LBL_LOANORDEMOPRINTERINFO',
              ),
              6 => 
              array (
                'name' => 'loanshipped',
                'label' => 'LBL_LOANSHIPPED',
              ),
              7 => 
              array (
                'name' => 'dateshipped',
                'label' => 'LBL_DATESHIPPED',
              ),
              8 => 'assigned_user_name',
              9 => 'team_name',
              10 => 
              array (
                'name' => 'tag',
                'span' => 12,
              ),
            ),
          ),
          2 => 
          array (
            'name' => 'panel_hidden',
            'label' => 'LBL_SHOW_MORE',
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
                'name' => 'description',
                'span' => 12,
              ),
              1 => 
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
            ),
          ),
          3 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL9',
            'label' => 'LBL_RECORDVIEW_PANEL9',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'serialnumber',
                'label' => 'LBL_SERIALNUMBER',
              ),
              1 => 
              array (
                'name' => 'status',
                'label' => 'LBL_STATUS',
              ),
              2 => 
              array (
              ),
              3 => 
              array (
              ),
            ),
          ),
          4 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL8',
            'label' => 'LBL_RECORDVIEW_PANEL8',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
              ),
              1 => 
              array (
              ),
              2 => 
              array (
                'name' => 'uploadedtosalesforce',
                'label' => 'LBL_UPLOADEDTOSALESFORCE',
              ),
              3 => 
              array (
                'name' => 'doublesidedupgradeperformed',
                'label' => 'LBL_DOUBLESIDEDUPGRADEPERFORMED',
              ),
              4 => 
              array (
              ),
              5 => 
              array (
              ),
            ),
          ),
          5 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL7',
            'label' => 'LBL_RECORDVIEW_PANEL7',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
              ),
              1 => 
              array (
              ),
              2 => 
              array (
                'name' => 'extendedwarranty',
                'label' => 'LBL_EXTENDEDWARRANTY',
              ),
              3 => 
              array (
              ),
              4 => 
              array (
                'name' => 'voidwarranty',
                'label' => 'LBL_VOIDWARRANTY',
              ),
              5 => 
              array (
                'name' => 'warrantywarnings',
                'label' => 'LBL_WARRANTYWARNINGS',
              ),
              6 => 
              array (
                'name' => 'reportedstolen',
                'label' => 'LBL_REPORTEDSTOLEN',
              ),
              7 => 
              array (
              ),
              8 => 
              array (
                'name' => 'coveredinnorthamerica',
                'label' => 'LBL_COVEREDINNORTHAMERICA',
              ),
              9 => 
              array (
              ),
            ),
          ),
          6 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL6',
            'label' => 'LBL_RECORDVIEW_PANEL6',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'soldon',
                'label' => 'LBL_SOLDON',
              ),
              1 => 
              array (
                'name' => 'registeredon',
                'label' => 'LBL_REGISTEREDON',
              ),
              2 => 
              array (
                'name' => 'dealersoldto',
                'label' => 'LBL_DEALERSOLDTO',
              ),
              3 => 
              array (
              ),
            ),
          ),
          7 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL5',
            'label' => 'LBL_RECORDVIEW_PANEL5',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'currentprintheadserial',
                'label' => 'LBL_CURRENTPRINTHEADSERIAL',
              ),
              1 => 
              array (
                'name' => 'currentimagestart',
                'label' => 'LBL_CURRENTIMAGESTART',
              ),
              2 => 
              array (
                'name' => 'currentfirmware',
                'label' => 'LBL_CURRENTFIRMWARE',
              ),
              3 => 
              array (
                'name' => 'currentimageend',
                'label' => 'LBL_CURRENTIMAGEEND',
              ),
              4 => 
              array (
                'name' => 'currentprintheadresistance',
                'label' => 'LBL_CURRENTPRINTHEADRESISTANCE',
              ),
              5 => 
              array (
                'name' => 'currentprintheadposition',
                'label' => 'LBL_CURRENTPRINTHEADPOSITION',
              ),
              6 => 
              array (
                'name' => 'totalcardsprinted',
                'label' => 'LBL_TOTALCARDSPRINTED',
              ),
              7 => 
              array (
                'name' => 'currentprintheaddensity',
                'label' => 'LBL_CURRENTPRINTHEADDENSITY',
              ),
              8 => 
              array (
                'name' => 'currentprintheadangle',
                'label' => 'LBL_CURRENTPRINTHEADANGLE',
              ),
              9 => 
              array (
                'name' => 'currentprintheadassembly',
                'label' => 'LBL_CURRENTPRINTHEADASSEMBLY',
              ),
            ),
          ),
          8 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL4',
            'label' => 'LBL_RECORDVIEW_PANEL4',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'printheadserial',
                'label' => 'LBL_PRINTHEADSERIAL',
              ),
              1 => 
              array (
                'name' => 'imagestart',
                'label' => 'LBL_IMAGESTART',
              ),
              2 => 
              array (
                'name' => 'firmware',
                'label' => 'LBL_FIRMWARE',
              ),
              3 => 
              array (
                'name' => 'imageend',
                'label' => 'LBL_IMAGEEND',
              ),
              4 => 
              array (
                'name' => 'printheadresistance',
                'label' => 'LBL_PRINTHEADRESISTANCE',
              ),
              5 => 
              array (
                'name' => 'printheadpostion',
                'label' => 'LBL_PRINTHEADPOSTION',
              ),
              6 => 
              array (
                'name' => 'printheaddensity',
                'label' => 'LBL_PRINTHEADDENSITY',
              ),
              7 => 
              array (
                'name' => 'printheadangle',
                'label' => 'LBL_PRINTHEADANGLE',
              ),
              8 => 
              array (
              ),
              9 => 
              array (
                'name' => 'printheadassemblyserial',
                'label' => 'LBL_PRINTHEADASSEMBLYSERIAL',
              ),
              10 => 
              array (
              ),
              11 => 
              array (
              ),
            ),
          ),
          9 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL2',
            'label' => 'LBL_RECORDVIEW_PANEL2',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'helixcurrentfirmware',
                'label' => 'LBL_HELIXCURRENTFIRMWARE',
              ),
              1 => 
              array (
                'name' => 'helixcurrentprintheadserial',
                'label' => 'LBL_HELIXCURRENTPRINTHEADSERIAL',
              ),
              2 => 
              array (
                'name' => 'helixcurrenthorizontaloffset',
                'label' => 'LBL_HELIXCURRENTHORIZONTALOFFSET',
              ),
              3 => 
              array (
                'name' => 'helixcurrentprintheadpower',
                'label' => 'LBL_HELIXCURRENTPRINTHEADPOWER',
              ),
              4 => 
              array (
                'name' => 'helixcurrentverticaloffset',
                'label' => 'LBL_HELIXCURRENTVERTICALOFFSET',
              ),
              5 => 
              array (
                'name' => 'helixcurrentprintheadtemp',
                'label' => 'LBL_HELIXCURRENTPRINTHEADTEMP',
              ),
              6 => 
              array (
                'name' => 'helixcurrentrollertemp',
                'label' => 'LBL_HELIXCURRENTROLLERTEMP',
              ),
              7 => 
              array (
              ),
            ),
          ),
          10 => 
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
                'name' => 'helixfirmware',
                'label' => 'LBL_HELIXFIRMWARE',
              ),
              1 => 
              array (
                'name' => 'helixprintheadserial',
                'label' => 'LBL_HELIXPRINTHEADSERIAL',
              ),
              2 => 
              array (
                'name' => 'helixhorizontaloffset',
                'label' => 'LBL_HELIXHORIZONTALOFFSET',
              ),
              3 => 
              array (
                'name' => 'helixprintheadpower',
                'label' => 'LBL_HELIXPRINTHEADPOWER',
              ),
              4 => 
              array (
                'name' => 'helixverticaloffset',
                'label' => 'LBL_HELIXVERTICALOFFSET',
              ),
              5 => 
              array (
                'name' => 'helixprintheadtemp',
                'label' => 'LBL_HELIXPRINTHEADTEMP',
              ),
              6 => 
              array (
                'name' => 'helixrollertemp',
                'label' => 'LBL_HELIXROLLERTEMP',
              ),
              7 => 
              array (
              ),
            ),
          ),
          11 => 
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
                'name' => 'a360softwareversion',
                'label' => 'LBL_A360SOFTWAREVERSION',
              ),
              1 => 
              array (
                'name' => 'a360blueled',
                'label' => 'LBL_A360BLUELED',
              ),
              2 => 
              array (
                'name' => 'a360printheadserial',
                'label' => 'LBL_A360PRINTHEADSERIAL',
              ),
              3 => 
              array (
                'name' => 'a360greenled',
                'label' => 'LBL_A360GREENLED',
              ),
              4 => 
              array (
                'name' => 'a360moduleserial',
                'label' => 'LBL_A360MODULESERIAL',
              ),
              5 => 
              array (
                'name' => 'a360redled',
                'label' => 'LBL_A360REDLED',
              ),
              6 => 
              array (
                'name' => 'a360printheadpower',
                'label' => 'LBL_A360PRINTHEADPOWER',
              ),
              7 => 
              array (
                'name' => 'a360dyemotorcurrent',
                'label' => 'LBL_A360DYEMOTORCURRENT',
              ),
              8 => 
              array (
                'name' => 'a360horizontalimageposition',
                'label' => 'LBL_A360HORIZONTALIMAGEPOSITION',
              ),
              9 => 
              array (
                'name' => 'a360magstartsentinalposition',
                'label' => 'LBL_A360MAGSTARTSENTINALPOSITION',
              ),
              10 => 
              array (
                'name' => 'a360verticalimageposition',
                'label' => 'LBL_A360VERTICALIMAGEPOSITION',
              ),
              11 => 
              array (
                'name' => 'a360magzerolength',
                'label' => 'LBL_A360MAGZEROLENGTH',
              ),
              12 => 
              array (
                'name' => 'a360imagelength',
                'label' => 'LBL_A360IMAGELENGTH',
              ),
              13 => 
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
