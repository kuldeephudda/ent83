<?php
$module_name = 'RE_RepairsEvals';
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
                'acl_module' => 'RE_RepairsEvals',
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
            'panelDefault' => 'collapsed',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'recordtype',
                'label' => 'LBL_RECORDTYPE',
              ),
              1 => 
              array (
              ),
              2 => 'assigned_user_name',
              3 => 'team_name',
              4 => 
              array (
                'name' => 'tag',
                'span' => 12,
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
                'name' => 'status',
                'label' => 'LBL_STATUS',
              ),
              1 => 
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
                'name' => 'defecttype',
                'label' => 'LBL_DEFECTTYPE',
              ),
              1 => 
              array (
                'name' => 'problemsfound',
                'studio' => 'visible',
                'label' => 'LBL_PROBLEMSFOUND',
              ),
              2 => 
              array (
                'name' => 'faultmatchesreporteddefect',
                'label' => 'LBL_FAULTMATCHESREPORTEDDEFECT',
              ),
              3 => 
              array (
                'name' => 'actions',
                'studio' => 'visible',
                'label' => 'LBL_ACTIONS',
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
                'name' => 'imagestart',
                'label' => 'LBL_IMAGESTART',
              ),
              1 => 
              array (
                'name' => 'printheadserial',
                'label' => 'LBL_PRINTHEADSERIAL',
              ),
              2 => 
              array (
                'name' => 'imageend',
                'label' => 'LBL_IMAGEEND',
              ),
              3 => 
              array (
                'name' => 'printheaddensity',
                'label' => 'LBL_PRINTHEADDENSITY',
              ),
              4 => 
              array (
                'name' => 'printheadpostion',
                'label' => 'LBL_PRINTHEADPOSTION',
              ),
              5 => 
              array (
                'name' => 'printheadresistance',
                'label' => 'LBL_PRINTHEADRESISTANCE',
              ),
              6 => 
              array (
                'name' => 'firmwareversion',
                'label' => 'LBL_FIRMWAREVERSION',
              ),
              7 => 
              array (
                'name' => 'printheadassemblyserial',
                'label' => 'LBL_PRINTHEADASSEMBLYSERIAL',
              ),
              8 => 
              array (
              ),
              9 => 
              array (
              ),
              10 => 
              array (
                'name' => 'pcb',
                'label' => 'LBL_PCB',
              ),
              11 => 
              array (
                'name' => 'totalcardsprinted',
                'label' => 'LBL_TOTALCARDSPRINTED',
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
                'name' => 'helixfirmware',
                'label' => 'LBL_HELIXFIRMWARE',
              ),
              1 => 
              array (
                'name' => 'helixprintheadserialnumber',
                'label' => 'LBL_HELIXPRINTHEADSERIALNUMBER',
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
                'name' => 'repairfinishedon',
                'label' => 'LBL_REPAIRFINISHEDON',
              ),
              1 => 
              array (
              ),
            ),
          ),
          7 => 
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
        ),
        'templateMeta' => 
        array (
          'useTabs' => false,
        ),
      ),
    ),
  ),
);
