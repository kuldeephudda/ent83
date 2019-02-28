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
/*********************************************************************************

 * Description:	Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$mod_strings = array (
	'LBL_ASSIGN_PRIVATE_TEAM'			=> '(保存時為私人小組)',
	'LBL_ASSIGN_TEAM'					=> '指派至小組',
	'LBL_DEFAULT_TEAM_TEXT'				=> '記錄中預設可顯示的小組，是您為其成員的小組。',
	'LBL_DEFAULT_TEAM'					=> '預設小組',
    'LBL_DEFAULT_PRIMARY_TEAM'          => '預設主要小組',
	'LBL_LIST_DESCRIPTION'				=> '描述',
	'LBL_MY_TEAMS'						=> '我的小組',
	'LBL_PRIVATE_TEAM_FOR'				=> '私人小組',
	'LNK_EDIT_TABS'						=> '編輯索引標籤',
	'NTC_REMOVE_TEAM_MEMBER_CONFIRMATION'	=> '確定要移除該使用者\\的成員資格嗎？',
	'LBL_TEAMS'							=> '小組',
	'LBL_TEAM_UPLINE'					=> '成員報表發送至',
	'LBL_TEAM_UPLINE_EXPLICIT'			=> '成員',
    'LBL_TEAM_MEMBERSHIP'               => '小組成員資格',
    'LBL_TEAM_SET'                      => '小組集',
    'LBL_DELETE_USER_CONFIRM'           => 'When the User record is deleted, the corresponding Employee record will also be deleted. After the user is deleted, any workflow definitions and reports involving the user might need to be updated.<br/><br/>'.
                                                'Deleting a User record cannot be undone.',
	'LBL_DELETE_GROUP_CONFIRM'          => '確定要刪除此「群組使用者」嗎？按一下「確定」以刪除「使用者」記錄。<br/>按一下「確定」后，您將能夠把指派至該「群組使用者」的記錄重新指派至另一個使用者。',
	'LBL_DELETE_PORTAL_CONFIRM'         => '確定要刪除此「入口網站 API 使用者」嗎？按一下「確定」以刪除「使用者」記錄。',

	'LNK_IMPORT_USERS'                 => '匯入使用者',
	'ERR_DELETE_RECORD'					=> '必須指定記錄編號才能刪除帳戶。',
	'ERR_EMAIL_INCORRECT'				=> '提供有效的電子郵件地址以建立和傳送密碼。',
	'ERR_EMAIL_NO_OPTS'					=> '無法找到「輸入電子郵件」的最佳化設定。',
	'ERR_ENTER_CONFIRMATION_PASSWORD'	=> '請輸入您的密碼確認。',
	'ERR_ENTER_NEW_PASSWORD'			=> '請輸入您的新密碼。',
	'ERR_ENTER_OLD_PASSWORD'			=> '請輸入您目前的密碼。',
	'ERR_IE_FAILURE1'					=> '[按一下此處以返回]',
	'ERR_IE_FAILURE2'					=> '連接「電子郵件帳戶」出現問題。請檢查設定並重試。',
	'ERR_IE_MISSING_REQUIRED'			=> "「輸入電子郵件」設定遺失所需資訊。\n  請檢查設定並重試。\n\n如果您未設定「輸入電子郵件」，請清除此區段的所有欄位。",
	'ERR_INVALID_PASSWORD'				=> '您必須指定有效的使用者名稱和密碼。',
	'ERR_NO_LOGIN_MOBILE'				=> '必須使用非行動瀏覽器或在正常模式下完成此應用程式的首次登入。請使用完整瀏覽器返回或按一下下方的正常模式連結。對此帶來的不便，我們深感抱歉。',
	'ERR_LAST_ADMIN_1'					=> '使用者名稱「',
	'ERR_LAST_ADMIN_2'					=> '" 是最後一個有管理員存取權限的使用者。必須至少有一名使用者是管理員。',
	'ERR_PASSWORD_CHANGE_FAILED_1'		=> '使用者密碼變更失敗，因為',
	'ERR_PASSWORD_CHANGE_FAILED_2'		=> ' 失敗。必須設定新密碼。',
	'ERR_PASSWORD_CHANGE_FAILED_3'		=> '。新密碼無效。',
	'ERR_PASSWORD_INCORRECT_OLD_1'		=> '使用者目前的密碼錯誤',
	'ERR_PASSWORD_INCORRECT_OLD_2'		=> '。重新輸入密碼資訊。',
	'ERR_PASSWORD_MISMATCH'				=> '密碼不一致。',
	'ERR_PASSWORD_USERNAME_MISSMATCH'   => '您必須指定有效的「使用者名稱」和「電子郵件地址」。',
	'ERR_PASSWORD_LINK_EXPIRED'         => '您的連結已過期，請產生新的連結',
	'ERR_REENTER_PASSWORDS'				=> '「新密碼」和「確認密碼」值不相符。',
	'ERR_REPORT_LOOP'					=> '系統偵測到報告重複。使用者無法向其自身報告，其管理人員亦無法向其報告。',
	'ERR_RULES_NOT_MET'                 => '您輸入的密碼不滿足密碼要求。請再試一次。',
	'ERR_USER_INFO_NOT_FOUND'			=> '未找到使用者資訊',
    'ERR_USER_NAME_EXISTS'              => '使用者名稱 {0} 已存在。使用者名稱不允許重複。變更使用者名稱，使其為唯一的名稱。',
	'ERR_USER_IS_LOCKED_OUT'			=> '此使用者已鎖定，無法存取 Sugar 應用程式，使用其現有密碼無法登入。',
    'LBL_EXTERNAL_USER_CANT_LOGIN'      => '僅允許使用者使用Sugar憑證登錄',

	'LBL_PASSWORD_SENT'                => '密碼已更新',
	'LBL_CANNOT_SEND_PASSWORD'         => '無法傳送密碼',
	'ERR_EMAIL_NOT_SENT_ADMIN'			=> '系統無法處理您的請求。請檢查：',
	'ERR_SMTP_URL_SMTP_PORT'			=> 'SMTP 伺服器 URL 和連接埠',
	'ERR_SMTP_USERNAME_SMTP_PASSWORD'	=> 'SMTP 使用者名稱和 SMTP 密碼',
	'ERR_RECIPIENT_EMAIL'				=> '收件者電子郵件地址',
	'ERR_SERVER_STATUS'					=> '您的伺服器狀態',
	'ERR_SERVER_SMTP_EMPTY'				=> '系統無法向使用者傳送電子郵件。請檢查<a href="index.php?module=EmailMan&action=config">「電子郵件設定」</a>中的「外寄郵件設定」。',
    'ERR_CREATE_USER_FOR_IDM_MODE'      => '必須在 "雲設置" 中創建新使用者。',

    'LBL_EMAIL_ADDRESS'                 => '電子郵件地址',

	'LBL_ADDRESS_CITY'					=> '地址城市',
	'LBL_ADDRESS_COUNTRY'				=> '地址國家',
	'LBL_ADDRESS_INFORMATION'			=> '地址資訊',
	'LBL_ADDRESS_POSTALCODE'			=> '地址郵遞區號',
	'LBL_ADDRESS_STATE'					=> '地址州',
	'LBL_ADDRESS_STREET'				=> '地址街道',
	'LBL_ADDRESS_STREET_2'				=> '地址街道 2',
	'LBL_ADDRESS_STREET_3'				=> '地址街道 3',
	'LBL_ADDRESS'						=> '地址',
	'LBL_ADMIN_USER'					=> '系統管理員使用者',

	'LBL_ADMIN_DESC'					=> '使用者可存取「管理」頁面的所有記錄，而無論小組安全性等級。',
	'LBL_REGULAR_DESC'					=> '使用者可依據小組安全性和角色存取模組和記錄。',
	'LBL_ADMIN'							=> '系統管理員',
	'LBL_ADVANCED'                     => '進階',
    'LBL_ANY_ADDRESS'                  => '任何地址：',
	'LBL_ANY_EMAIL'						=> '電子郵件',
	'LBL_ANY_PHONE'						=> '任何電話',
	'LBL_BUTTON_CREATE'					=> '建立',
	'LBL_BUTTON_EDIT'					=> '編輯',
	'LBL_CALENDAR_OPTIONS'				=> '行事曆選項',
	'LBL_CHANGE_PASSWORD'               => '變更所產生的密碼',
	'LBL_CHANGE_SYSTEM_PASSWORD'		=> '請提供新密碼。',
	'LBL_CHANGE_PASSWORD_TITLE'         => '密碼',
    'LBL_CHOOSE_A_KEY'					=> '選擇金鑰，防止未經授權發佈您的行事曆',
    'LBL_NO_KEY'                        => '沒有設定金鑰。請設定金鑰以啟用發佈。',
	'LBL_CHOOSE_WHICH'					=> '選取上方導覽列中可存取的模組。指定所需模組顯示順序。',
	'LBL_CITY'							=> '城市',

	'LBL_CLEAR_BUTTON_TITLE'			=> '清除',


	'LBL_CONFIRM_PASSWORD'				=> '確認密碼',
	'LBL_CONFIRM_REGULAR_USER'			=> '您已將使用者類型從「系統管理員使用者」變更為「常規使用者」。儲存此變更后，使用者將不再擁有系統管理員權限。\\n\\n按一下「確定」以繼續。\\n按一下「取消」以返回記錄。',
	'LBL_COUNTRY'						=> '國家',
	'LBL_CURRENCY_TEXT'					=> '若啟用「顯示偏好貨幣」，則此貨幣是清單和記錄檢視中使用的貨幣。此貨幣同樣是新記錄的預設貨幣。',
	'LBL_CURRENCY'						=> '偏好貨幣',
	'LBL_CURRENCY_EXAMPLE'				=> '貨幣顯示範例',
	'LBL_SYSTEM_SIG_DIGITS'				=> '系統有效數字',
	'LBL_SYSTEM_SIG_DIGITS_DESC' 		=> '整個系統的小數和浮點數顯示的小數位數，比如「報表」中的貨幣和平均值。',
    'LBL_CURRENCY_SHOW_PREFERRED'       => '顯示偏好貨幣',
    'LBL_CURRENCY_SHOW_PREFERRED_TEXT'  => '在清單和記錄檢視中將基準貨幣轉換為使用者偏好貨幣',
    'LBL_CURRENCY_CREATE_IN_PREFERRED' => '以設定貨幣單位創建收入項目',
    'LBL_CURRENCY_CREATE_IN_PREFERRED_TEXT' => '若產品目錄的貨幣設定與用戶設定的不同，從產品目錄添加到商機的收入項目將轉換為用戶設定的貨幣。',
	'LBL_NUMBER_GROUPING_SEP'			=> '千位分隔符',
	'LBL_NUMBER_GROUPING_SEP_TEXT'		=> '用於分隔千的字元',
	'LBL_DECIMAL_SEP'					=> '小數點符號',
	'LBL_DECIMAL_SEP_TEXT'				=> '用於分隔小數部分的字元',
	'LBL_FDOW'					=> '週的第一天',
	'LBL_FDOW_TEXT'				=> '週、月和年檢視中顯示的第一天',
	'LBL_DATE_FORMAT_TEXT'				=> '設定日期戳記的顯示格式',
	'LBL_DATE_FORMAT'					=> '日期格式',
	'LBL_DEFAULT_SUBPANEL_TITLE'		=> '使用者',
	'LBL_DEPARTMENT'					=> '部門',
	'LBL_DESCRIPTION'					=> '描述',
	'LBL_DISPLAY_TABS'					=> '顯示模組',
	'LBL_DOWNLOADS'                    => '下載',
	'LBL_DST_INSTRUCTIONS'				=> '(+DST) 表明遵循「日光節約時間」',
	'LBL_EDIT_TABS'						=> '選擇導覽列模組',
	'LBL_EDIT'							=> '編輯',
	'LBL_USER_HASH'						=> '密碼',
	'LBL_AUTHENTICATE_ID'				=> '驗證 ID',
	'LBL_ACCOUNT_NAME'					=> '帳戶名稱',
	'LBL_USER_PREFERENCES'				=> '使用者喜好設定',
	'LBL_EXT_AUTHENTICATE'				=> '外部驗證',
	'LBL_EMAIL_OTHER'					=> '電子郵件 2',
	'LBL_EMAIL'							=> '電子郵件地址',
	'LBL_EMAIL_CHARSET'					=> '輸出字元集',
	'LBL_EMAIL_EDITOR_OPTION'			=> '撰寫格式',
	'LBL_EMAIL_GMAIL_DEFAULTS'			=> '預填充 Gmail&#153; 預設值',
	'LBL_EMAIL_LINK_TYPE'				=> '電子郵件用戶端',

    'LBL_EMAIL_LINK_TYPE_HELP'			=> '<b>Sugar 郵件用戶端：</b> 使用 Sugar 應用程式中的電子郵件用戶端傳送電子郵件。<br>只有在「管理員」正確設定系統電子郵件設定時，此選項才可用。<br><b>外部郵件用戶端：</b> 使用 Sugar 應用程式以外的電子郵件用戶端傳送電子郵件，如 Microsoft Outlook。',

    'LBL_EMAIL_NOT_SENT'                => '系統無法處理您的請求。請連絡系統管理員。',
    'LBL_EMAIL_PROVIDER'               => '電子郵件提供者',
	'LBL_EMAIL_SHOW_COUNTS'				=> '顯示電子郵件計數？',
	'LBL_EMAIL_SIGNATURE_ERROR1'		=> '此簽名需要一個名稱。',
    'LBL_EMAIL_SMTP_SSL'				=> '透過 SSL 啟用 SMTP',
    'LBL_EMAIL_TEMPLATE_MISSING'            => '未為將傳送至使用者的包含密碼的電子郵件選擇電子郵件範本。請在「密碼管理」頁選擇電子郵件範本。',
    'LBL_EMPLOYEE_STATUS'				=> '員工狀態',
    'LBL_EMPLOYEE_INFORMATION'         => '員工資訊',
	'LBL_ERROR'							=> ' 錯誤',
	'LBL_EXPORT_CHARSET'				=> '匯入/匯出字元集',
	'LBL_EXPORT_CHARSET_DESC'			=> '選擇您所在地區所使用的字元集。此屬性將用於資料匯入、.csv 匯出以及 vCard 產生。',
	'LBL_EXPORT_DELIMITER'				=> '匯出分隔符號',
	'LBL_EXPORT_DELIMITER_DESC'			=> '指定用於分隔匯出資料的字元。',
	'LBL_FAX_PHONE'						=> '傳真',
	'LBL_FAX'							=> '傳真',
	'LBL_FIRST_NAME'					=> '名字',
    'LBL_GENERATE_PASSWORD_BUTTON_KEY'  => 'G',
    'LBL_SYSTEM_GENERATED_PASSWORD'     =>'系統產生密碼',
    'LBL_GENERATE_PASSWORD_BUTTON_LABEL'   => '重設密碼',
    'LBL_GENERATE_PASSWORD_BUTTON_TITLE'   => '重設密碼',
    'LBL_GENERATE_PASSWORD'             => '重設密碼',
	'LBL_GROUP_DESC'					=> '用於將項目指派至群組（比如：用於「輸入電子郵件」）。此類型無法透過 Sugar Web 介面登入。',
	'LBL_GROUP_USER_STATUS'				=> '群組使用者',
	'LBL_GROUP_USER'					=> '群組使用者',
	'LBL_HIDE_TABS'						=> '隱藏模組',
	'LBL_HOME_PHONE'					=> '家庭電話',
	'LBL_INBOUND_TITLE'					=> '帳戶資訊',
	'LBL_IS_ADMIN'						=> '是管理員',
	'LBL_LANGUAGE'						=> '語言',
	'LBL_LAST_NAME'						=> '姓氏',
    'LBL_LAST_NAME_SLASH_NAME'			=> '姓氏/名稱',
    'LBL_LAYOUT_OPTIONS'                => '配置選項',
	'LBL_LDAP'							=> 'LDAP',
	'LBL_LDAP_AUTHENTICATION'			=> 'LDAP 驗證',
	'LBL_LIST_ACCEPT_STATUS'			=> '接受狀態',
	'LBL_LIST_ADMIN'					=> '管理員',
	'LBL_LIST_DEPARTMENT'				=> '部門',
	'LBL_LIST_EMAIL'					=> '電子郵件',
	'LBL_LIST_FORM_TITLE'				=> '使用者',
	'LBL_LIST_GROUP'					=> '群組',
	'LBL_LIST_LAST_NAME'				=> '姓氏',
	'LBL_LIST_MEMBERSHIP'				=> '成員資格',
	'LBL_LIST_NAME'						=> '名稱',
	'LBL_LIST_PRIMARY_PHONE'			=> '主要電話',
	'LBL_LIST_PASSWORD'					=> '密碼',
	'LBL_LIST_STATUS'					=> '狀態',
	'LBL_LIST_TITLE'					=> '標題',
	'LBL_LIST_USER_NAME'				=> '使用者名稱',
	'LBL_LOCALE_DEFAULT_NAME_FORMAT'	=> '名稱顯示格式',
	'LBL_LOCALE_DESC_FIRST'				=> '[First]',
	'LBL_LOCALE_DESC_LAST'				=> '[Last]',
	'LBL_LOCALE_DESC_SALUTATION'		=> '[Salutation]',
	'LBL_LOCALE_DESC_TITLE'				=> '[Title]',
	'LBL_PICTURE_FILE'					=> '虛擬人偶',
	'LBL_LOCALE_EXAMPLE_NAME_FORMAT'	=> '範例',
	'LBL_LOCALE_NAME_FORMAT_DESC'		=> '設定名稱的顯示方式。',
	'LBL_LOCALE_NAME_FORMAT_DESC_2'	=> '<i>"s" 稱呼<br>"f" 名字<br>"l" 姓氏</i>',
    'LBL_SAVED_SEARCH'                  => '已儲存的搜尋與配置',
	// LOGIN PAGE STRINGS
	'LBL_LOGIN_BUTTON_KEY'				=> 'L',
	'LBL_LOGIN_BUTTON_LABEL'			=> '登入',
	'LBL_LOGIN_BUTTON_TITLE'			=> '登入',
	'LBL_LOGIN_WELCOME_TO'				=> '歡迎來到',
	'LBL_LOGIN_OPTIONS'					=> '選項',
    'LBL_LOGIN_FORGOT_PASSWORD'         => '忘記密碼？',
    'LBL_LOGIN_SUBMIT'      		    => '提交',
    'LBL_LOGIN_ATTEMPTS_OVERRUN'        => '太多次失敗登入嘗試。',
    'LBL_LOGIN_LOGIN_TIME_ALLOWED'      => '您可重新嘗試登入',
    'LBL_LOGIN_LOGIN_TIME_DAYS'     	=> '天。',
    'LBL_LOGIN_LOGIN_TIME_HOURS'    	=> '小時',
    'LBL_LOGIN_LOGIN_TIME_MINUTES'      => '分鐘',
   	'LBL_LOGIN_LOGIN_TIME_SECONDS'      => '秒',
    'LBL_LOGIN_ADMIN_CALL'              => '請連絡系統管理員。',
    'ERR_FOR_IDM_MODE_GMP_REQUIRED'     =>
        '要在 IDM 模式下使用 OpenID 連接 (OIDC) 進行身份驗證，請安裝 GMP PHP 擴展。',
	// END LOGIN PAGE STRINGS
    'LBL_LOGGED_OUT_1' => '您已登出。如需重新登入，請按一下',
    'LBL_LOGGED_OUT_2' => '此處',
    'LBL_LOGGED_OUT_3' => '。',
	'LBL_MAIL_FROMADDRESS'				=> '收件者地址',
	'LBL_MAIL_FROMNAME'					=> '收件者名稱',
	'LBL_MAIL_OPTIONS_TITLE'			=> '電子郵件設定',
	'LBL_MAIL_SENDTYPE'					=> '郵件傳輸代理程式',
	'LBL_MAILMERGE_TEXT'				=> '啟用電子郵件合併（「電子郵件合併」必須同樣由系統管理員在「設定設定」中啟用）',
	'LBL_MAILMERGE'						=> '合併列印',
	'LBL_MAX_TAB'						=> '最大模組數',
    'LBL_MAX_TAB_DESCRIPTION'           => '選擇導覽列中可顯示的最大模組數。顯示的模組數將取決於瀏覽器的寬度。未顯示的模組將顯示在「更多」功能表中。',
    'LBL_MAX_SUBTAB'                    => '子索引標籤數',
    'LBL_MAX_SUBTAB_DESCRIPTION'        => '溢位功能表顯示前，各索引標籤所顯示的子索引標籤數。',
	'LBL_MESSENGER_ID'					=> 'IM 名稱',
	'LBL_MESSENGER_TYPE'				=> 'IM 類型',
	'LBL_MOBILE_PHONE'					=> '行動',
	'LBL_MODIFIED_BY'                  =>'修改人',
	'LBL_CREATED_BY_NAME' => '建立人', //bug 48978
    'LBL_MODIFIED_BY_ID'               =>'按 ID 修改',
    'LBL_MODULE_NAME'					=> '使用者',
    'LBL_MODULE_NAME_SINGULAR'				=> '使用者',
	'LBL_MODULE_TITLE'					=> '使用者：首頁',
    'LBL_NAME'							=> '全名',
    'LBL_SIGNATURE_NAME'                                        =>  '名稱',
    'LBL_NAVIGATION_PARADIGM'           => '導覽',
    'LBL_USE_GROUP_TABS'                => '模組功能表篩選器',
	'LBL_NEW_FORM_TITLE'				=> '新使用者',
	'LBL_NEW_PASSWORD'					=> '新密碼',
	'LBL_NEW_PASSWORD1'					=> '密碼',
	'LBL_NEW_PASSWORD2'					=> '確認密碼',
    'LBL_NEW_USER_PASSWORD_1' => '已成功變更密碼。',
	'LBL_NEW_USER_PASSWORD_2'			=> '已向使用者傳送包含系統產生密碼的電子郵件。',
    'LBL_NEW_USER_PASSWORD_3' => '已成功建立密碼。',
	'LBL_NEW_USER_BUTTON_KEY'			=> 'N',
	'LBL_NEW_USER_BUTTON_LABEL'			=> '新使用者',
	'LBL_NEW_USER_BUTTON_TITLE'			=> '新使用者',
	'LBL_NORMAL_LOGIN'					=> '切換至「標準檢視」',
	'LBL_NOTES'							=> '附註',
	'LBL_OFFICE_PHONE'					=> '辦公室電話',
	'LBL_OLD_PASSWORD'					=> '目前密碼',
	'LBL_OTHER_EMAIL'					=> '其他電子郵件地址',
	'LBL_OTHER_PHONE'					=> '其他電話',
	'LBL_OTHER'							=> '其他',
	'LBL_PASSWORD'						=> '密碼',
    'LBL_PASSWORD_GENERATED'            => '產生的新密碼',
    'LBL_PASSWORD_EXPIRATION_LOGIN'     => '您的密碼已過期。請提供新密碼。',
    'LBL_PASSWORD_EXPIRATION_GENERATED' => '您的密碼是系統產生的',
    'LBL_PASSWORD_EXPIRATION_TIME'      => '您的密碼已過期。請提供新密碼。',

	'LBL_PSW_MODIFIED'                  => '上次變更密碼',
    'LBL_PHONE'							=> '電話',
	'LBL_PICK_TZ_WELCOME'				=> '歡迎使用 Sugar。',
	'LBL_PICK_TZ_DESCRIPTION'           => '繼續前，請確認時區。從以下清單中選取合適的時區，並按一下「儲存」以繼續。可隨時在使用者設定中變更時區。',
	'LBL_PORTAL_ONLY_DESC'				=> '用於入口網站 API。此類型無法透過 Sugar Web 介面登入。',
	'LBL_PORTAL_ONLY_USER'					=> '入口網站 API 使用者',
	'LBL_POSTAL_CODE'					=> '郵遞區號',
	'LBL_PRIMARY_ADDRESS'				=> '主要地址',
	'LBL_PROMPT_TIMEZONE_TEXT'			=> '選取以讓新使用者在首次登入后瀏覽「新使用者精靈」。',
	'LBL_PROMPT_TIMEZONE'				=> '使用者精靈提示',
	'LBL_PROVIDE_USERNAME_AND_EMAIL' 	=> '提供有效的「使用者名稱」和「電子郵件地址」。',
    'LBL_FORGOTPASSORD_NOT_ENABLED' 	=> '這目前未啟用。請連絡您的管理員。',
	'LBL_PUBLISH_KEY'					=> '發佈金鑰',

    'LBL_QUOTAS'                        => '配額',
    'LBL_FORECASTS'                     => '預測',
    'LBL_WORKSHEETS'                    => '工作表',
	'LBL_CALENDARS'                     => '行事曆',
	'LBL_RECAPTCHA_NEW_CAPTCHA'         => '獲取另一個 CAPTCHA',
	'LBL_RECAPTCHA_SOUND'				=> '切換至「聲音」',
	'LBL_RECAPTCHA_IMAGE'				=> '切換至「圖像」',
	'LBL_RECAPTCHA_INSTRUCTION'         => '在下方輸入兩個字組',
	'LBL_RECAPTCHA_INSTRUCTION_OPPOSITE'=> '在右側輸入兩個字組',
	'LBL_RECAPTCHA_FILL_FIELD'			=> '輸入圖像中顯示的文字。',
	'LBL_RECAPTCHA_INVALID_PRIVATE_KEY'	=> '無效的 Recaptcha 私密金鑰',
	'LBL_RECAPTCHA_INVALID_REQUEST_COOKIE'=> '驗證 Recaptcha 指令碼的挑戰參數不正確。',
	'LBL_RECAPTCHA_UNKNOWN'				=> '未知 Recaptcha 錯誤',

	'LBL_RECEIVE_NOTIFICATIONS_TEXT'	=> '向您指派記錄時，收到電子郵件通知。',
	'LBL_RECEIVE_NOTIFICATIONS'			=> '指派時通知',
	'LBL_REGISTER'                      => '新使用者？請註冊',
	'LBL_REGULAR_USER'                  => '常規使用者',
	'LBL_REMINDER_TEXT'					=> '設定通話和會議提醒預設。為所有使用 Sugar 的受邀者顯示快顯通知。向所有受邀者傳送電子郵件提醒。',
	'LBL_REMINDER'						=> '提醒',
	'LBL_REMINDER_POPUP' => '快顯',
	'LBL_REMINDER_EMAIL' => '電子郵件',
    'LBL_REMINDER_EMAIL_ALL_INVITEES'   => '向所有受邀者傳送電子郵件',
	'LBL_REMOVED_TABS'					=> '管理員移除索引標籤',
	'LBL_REPORTS_TO_NAME'				=> '報表發送對象',
	'LBL_REPORTS_TO'					=> '報表發送對象',
    'LBL_REPORTS_TO_ID'                => '報表發送對象 ID：',
	'LBL_REQUEST_SUBMIT'				=> '您的請求已提交。',
	'LBL_RESET_TO_DEFAULT'				=> '重設為預設',
	'LBL_RESET_PREFERENCES'				=> '重設使用者喜好設定',
    'LBL_RESET_PREFERENCES_WARNING'     => '確定要重設所有使用者喜好設定嗎？警告：此動作還會致使您登出該應用程式。',
    'LBL_RESET_PREFERENCES_WARNING_USER' => '確定要重設該使用者的所有喜好設定嗎？',
    'LBL_RESET_DASHBOARD'               => '重設儀表板',
	'LBL_SALUTATION'                    => '稱呼',
    'LBL_ROLES_SUBPANEL_TITLE'			=> '角色',
	'LBL_SEARCH_FORM_TITLE'				=> '使用者搜尋',
	'LBL_SEARCH_URL'					=> '搜尋位置',
	'LBL_SELECT_CHECKED_BUTTON_LABEL'	=> '選取已核取使用者',
	'LBL_SELECT_CHECKED_BUTTON_TITLE'	=> '選取已核取使用者',
	'LBL_SETTINGS_URL_DESC'				=> '建立 Microsoft&reg; Outlook&reg; 和 Microsoft&reg; Word&reg; 的 Sugar 外掛程式登入設定時，使用此 URL。',
	'LBL_SETTINGS_URL'					=> 'URL',
	'LBL_SIGNATURE'						=> '簽名',
	'LBL_SIGNATURE_HTML'				=> 'HTML 簽名',
	'LBL_SIGNATURE_DEFAULT'				=> '使用簽名？',
	'LBL_SIGNATURE_PREPEND'				=> '在回覆上簽名？',
	'LBL_SIGNATURES'					=> '簽名',
	'LBL_STATE'							=> '狀態',
	'LBL_STATUS'						=> '狀態',
    'LBL_SUBPANEL_LINKS'                => '子面板連結',
    'LBL_SUBPANEL_LINKS_DESCRIPTION'    => '在「詳細資料」檢視中，顯示「子面板」捷徑連結列。',
    'LBL_SUGAR_LOGIN'					=> '是 Sugar 使用者',
    'LBL_SUPPORTED_THEME_ONLY'          => '只會影響支援此選項的主題。',
    'LBL_SWAP_LAST_VIEWED_DESCRIPTION'  => '若核取，在側面顯示上次檢視的列。否則它會移到上方。',
    'LBL_SWAP_SHORTCUT_DESCRIPTION'     => '若核取，在上方顯示「捷徑」列。否則它會移到側面。',
    'LBL_SWAP_LAST_VIEWED_POSITION'     => '側面顯示上次檢視',
    'LBL_SWAP_SHORTCUT_POSITION'        => '上方的捷徑',
	'LBL_TAB_TITLE_EMAIL'				=> '電子郵件設定',
	'LBL_TAB_TITLE_USER'				=> '使用者設定',
	'LBL_THEME'							=> '主題',
	'LBL_THEME_COLOR'					=> '顏色',
	'LBL_THEME_FONT'					=> '字型',
	'LBL_TIME_FORMAT_TEXT'				=> '設定時間戳記的顯示格式',
	'LBL_TIME_FORMAT'					=> '時間格式',
	'LBL_TIMEZONE_DST_TEXT'				=> '遵循日光節約',
	'LBL_TIMEZONE_DST'					=> '日光節約',
	'LBL_TIMEZONE_TEXT'					=> '設定目前的時區。<br/><br/>請注意：此設定僅用於舊版模組以及匯入/匯出功能。Sugar 7 模組自動使用瀏覽器的時區。為避免時區衝突，請設定時區以匹配您的瀏覽器時區。',
	'LBL_TIMEZONE'						=> '時區',
	'LBL_TITLE'							=> '標題',
	'LBL_USE_REAL_NAMES'				=> '顯示全名',
	'LBL_USE_REAL_NAMES_DESC'			=> '在指派欄位中顯示使用者的全名而非「使用者名稱」。',
	'LBL_USER_INFORMATION'				=> '使用者設定檔',
	'LBL_USER_LOCALE'					=> '地區設定',
	'LBL_USER_NAME'						=> '使用者名稱',
	'LBL_USER_SETTINGS'					=> '使用者設定',
	'LBL_USER_TYPE'		   			    => '使用者類型',
	'LBL_USER_ACCESS'                  => '存取',
	'LBL_USER'							=> '使用者',
	'LBL_WORK_PHONE'					=> '工作電話',
	'LBL_YOUR_PUBLISH_URL'				=> '在我的位置發佈',
    'LBL_ICAL_PUB_URL'                  => 'iCal 整合 URL',
    'LBL_ICAL_PUB_URL_HELP'             => '使用此 URL 在 iCal 支援的應用程式內訂閱您的行事歷。' .
                                           'Sugar 行事歷事件將做為唯讀事件' .
                                           '在外部應用程式中查看，任何對於事件的編輯' .
                                           '（如會議、電話等）都只能在 Sugar 中建立。',
	'LBL_YOUR_QUERY_URL'				=> '您的查詢 URL',
	'LNK_NEW_USER'						=> '建立新使用者',
	'LNK_NEW_PORTAL_USER'				=> '建立入口網站 API 使用者',
	'LNK_NEW_GROUP_USER'				=> '建立群組使用者',
	'LNK_USER_LIST'						=> '檢視使用者',
	'LNK_REASSIGN_RECORDS'				=> '重新指派記錄',
    'LBL_PROSPECT_LIST'                 => '潛在客戶清單',
    'LBL_EMAILS'                        => '電子郵件',
    'LBL_PROCESSING'                    => '正在處理',
    'LBL_UPDATE_FINISH'                 => '更新已完成',
    'LBL_AFFECTED'                      => '受到影響',

    'LBL_USER_NAME_FOR_ROLE'            =>'使用者/團隊/角色',
    'LBL_SESSION_EXPIRED'               => '您已經登出，因為您的工作階段已過期。',

    'LBL_TOO_MANY_CONCURRENT'           => '此工作階段已結束，因為同一使用者名稱下已開始另一工作階段。',
// MASS REASSIGNMENT SCRIPT STRINGS
	'LBL_REASS_SCRIPT_TITLE'			=> '重新指派記錄',
	'LBL_REASS_DESC_PART1'				=> '選取包含從特定使用者重新指派至另一使用者的記錄之模組。<br/><br/>
                                                           按一下「下一步」以檢視各所選模組中將更新的記錄數。 
                                                           按一下「取消」以結束此頁面而不重新指派任何記錄。',
        'LBL_REASS_DESC_PART2'=>                    '選取執行工作流程、傳送指派通知以及在重新指派期間進行稽核追蹤的模組。按一下「下一步」以繼續並重新指派記錄。按一下「重新開始」以重新開始。',
	'LBL_REASS_STEP2_TITLE'				=> '小組重新指派',
	'LBL_REASS_STEP2_DESC'				=> '下列小組在「從使用者」小組中可用，但是在「至使用者」小組中不可用。除非小組值對應，否則「從使用者」小組中的所有記錄，在「至使用者」小組中將不可見。',
	'LBL_REASS_USER_FROM_TEAM'			=> '來自使用者小組：',
	'LBL_REASS_USER_TO_TEAM'			=> '至使用者小組：',
	'LBL_REASS_USER_FROM'				=> '來自使用者：',
	'LBL_REASS_USER_TO'					=> '至使用者：',
	'LBL_REASS_TEAM_TO'					=> '將小組設為：',
	'LBL_REASS_TEAMS_GOOD_MSG'			=> '「至使用者」擁有所有「從使用者」小組的存取權限。無需對應。在 5 秒內重新導向至下一頁。',
	'LBL_REASS_TEAM_NO_CHANGE'			=> '-- 無變更 --',
	'LBL_REASS_NOT_PROCESSED' 			=> '無法處理：',
	'LBL_REASS_MOD_REASSIGN' 			=> '「重新指派」中包括的模組：',
	'LBL_REASS_FILTERS'					=> '篩選器',
	'LBL_REASS_NOTES_TITLE'				=> '注意：',
	'LBL_REASS_NOTES_THREE'				=> '將記錄指派至您自己，不會觸發指派通知。',
	'LBL_REASS_NOTES_ONE'				=> '執行工作流程，會導致重新指派流程速度大幅下降。',
	'LBL_REASS_NOTES_TWO'				=> '即使您不選擇執行稽核追蹤，記錄中的「修改日期」和「修改者」欄位同樣會相應進行更新。',
	'LBL_REASS_VERBOSE_OUTPUT'			=> '詳細資訊輸出',
        'LBL_REASS_VERBOSE_HELP'                     =>  '選取此選項以檢視涉及工作流程之重新指派工作相關的詳細資訊。',
	'LBL_REASS_ASSESSING'				=> '正在評估',
	'LBL_REASS_RECORDS_FROM'			=> '記錄自',
	'LBL_REASS_WILL_BE_UPDATED'			=> '將更新。',
	'LBL_REASS_WORK_NOTIF_AUDIT' => '包括工作流程/通知/稽核（大幅變慢）',
	'LBL_REASS_SUCCESS_ASSIGN'			=> '指派成功',
	'LBL_REASS_FROM'					=> '發件者',
	'LBL_REASS_TO'						=> '收件者',
	'LBL_REASS_TEAM_SET_TO'				=> '以及小組設為',
	'LBL_REASS_FAILED_SAVE'				=> '為記錄儲存失敗',
	'LBL_REASS_THE_FOLLOWING'			=> '以下',
	'LBL_REASS_HAVE_BEEN_UPDATED'		=> '已更新：',
    'LBL_REASS_CANNOT_PROCESS'		    => '無法處理：',
	'LBL_REASS_NONE'					=> '無',
	'LBL_REASS_UPDATE_COMPLETE'			=> '更新已完成',
	'LBL_REASS_SUCCESSFUL'				=> '成功',
	'LBL_REASS_FAILED'					=> '失敗',
	'LBL_REASS_BUTTON_SUBMIT' 			=> '提交',
	'LBL_REASS_BUTTON_CLEAR' 			=> '清除',
	'LBL_REASS_BUTTON_CONTINUE'			=> '下一步 >',
    'LBL_REASS_BUTTON_REASSIGN'         => '重新指派',
	'LBL_REASS_BUTTON_GO_BACK' 			=> '< 返回',
	'LBL_REASS_BUTTON_RESTART' 			=> '重新開始',
	'LBL_REASS_BUTTON_RETURN' 			=> '返回',
	// js
	'LBL_REASS_CONFIRM_REASSIGN'		=> '您要重新指派此使用者的所有記錄嗎？',
  'LBL_REASS_CONFIRM_REASSIGN_YES' => '是',
  'LBL_REASS_CONFIRM_REASSIGN_NO'    => '否',
  'LBL_REASS_CONFIRM_REASSIGN_TITLE'    => '重新指派',
	// end js
	'ERR_REASS_SELECT_MODULE'			=> '請返回並選擇至少一個模組。',
	'ERR_REASS_DIFF_USERS'				=> '請選取不同於「來自使用者」的「至使用者」。',
// END MASS REASSIGNMENT SCRIPT STRINGS

// INBOUND EMAIL STRINGS
	'LBL_APPLY_OPTIMUMS'				=> '套用最佳效果',
	'LBL_ASSIGN_TO_USER'				=> '指派至使用者',
	'LBL_BASIC'							=> '輸入設定',
	'LBL_CERT_DESC'						=> '強制對郵件伺服器安全性憑證進行驗證－如果是自我簽署，則不要使用。',
	'LBL_CERT'							=> '驗證憑證',
	'LBL_FIND_OPTIMUM_KEY'				=> 'f',
	'LBL_FIND_OPTIMUM_MSG'				=> '<br>正在尋找最佳連接變數。',
	'LBL_FIND_OPTIMUM_TITLE'			=> '尋找最佳設定',
	'LBL_FORCE'							=> '強制負值',
	'LBL_FORCE_DESC'					=> '部分 IMAP/POP3 伺服器需使用特殊交換器。核取連接時推動負向交換器（即 /notls）',
	'LBL_FOUND_OPTIMUM_MSG'				=> '<br>找到最佳設定。按一下下方按鈕，以將其套用至您的「信箱」。',
	'LBL_EMAIL_INBOUND_TITLE'			=> '輸入電子郵件設定',
	'LBL_EMAIL_OUTBOUND_TITLE'			=> '輸出電子郵件設定',
	'LBL_LOGIN'							=> '使用者名稱',
	'LBL_MAILBOX_DEFAULT'				=> '收件匣',
	'LBL_MAILBOX_SSL_DESC'				=> '連接時使用 SSL。如果失敗，則檢查設定中是否包含 PHP 安裝「--with-imap-ssl」。',
	'LBL_MAILBOX'						=> '受監視的資料夾',
	'LBL_MAILBOX_TYPE'					=> '可能動作',
	'LBL_MARK_READ_NO'					=> '匯入后標記為刪除的電子郵件',
	'LBL_MARK_READ_YES'					=> '匯入后保留在伺服器上的電子郵件',
	'LBL_MARK_READ_DESC'				=> '匯入並標記在郵件伺服器上讀取的訊息；請不要刪除。',
	'LBL_MARK_READ'						=> '在伺服器上保留訊息',
	'LBL_ONLY_SINCE_NO'					=> '否。檢查郵件伺服器上的所有電子郵件。',
	'LBL_ONLY_SINCE_YES'				=> '是。',
	'LBL_ONLY_SINCE_DESC'				=> '使用 POP3 時，PHP 無法識別「未讀取」訊息中的「新」訊息。	核取此旗標，以掃描自上次郵件帳戶輪詢以來的訊息。如果您的郵件伺服器無法支援 IMAP，此操作將顯著改善效能。',
	'LBL_ONLY_SINCE'					=> '僅匯入上次檢查以來的項目',
	'LBL_PORT'							=> '郵件伺服器連接埠',
	'LBL_SERVER_OPTIONS'				=> '進階設定',
	'LBL_SERVER_TYPE'					=> '郵件伺服器協定',
	'LBL_SERVER_URL'					=> '郵件伺服器位址',
	'LBL_SSL'							=> '使用 SSL',
	'LBL_SSL_DESC'						=> '連接至郵件伺服器時使用「安全通訊端層」。',
	'LBL_TEST_BUTTON_KEY'				=> 't',
	'LBL_TEST_BUTTON_TITLE'				=> '測試',
	'LBL_TEST_SETTINGS'					=> '測試設定',
	'LBL_TEST_SUCCESSFUL'				=> '連接已成功完成。',
	'LBL_TLS_DESC'						=> '連接至郵件伺服器時使用「傳輸層安全性」－只有當您的郵件伺服器支援此通訊協定時才可使用。',
	'LBL_TLS'							=> '使用 TLS',
	'LBL_TOGGLE_ADV'					=> '顯示進階',
    'LBL_OWN_OPPS'                      => '無商機',
	'LBL_EXTERNAL_AUTH_ONLY'			=> '僅透過以下方式驗證此使用者',
	'LBL_ONLY'							=> '僅',
    'LBL_OWN_OPPS_DESC'                 => '若使用者不會被指派商機，則進行選擇。為未包括在銷售活動中的管理人員使用者使用此設定。此設定用於預測模組。',
// END INBOUND EMAIL STRINGS
	'LBL_LDAP_ERROR' => 'LDAP 錯誤：請連絡「管理員」',
	'LBL_LDAP_EXTENSION_ERROR' => 'LDAP 錯誤：未載入延伸模組',

// PROJECT RESOURCES STRINGS
	'LBL_USER_HOLIDAY_SUBPANEL_TITLE' => '使用者假日',
	'LBL_RESOURCE_NAME' => '名稱',
	'LBL_RESOURCE_TYPE' => '類型',

	'LBL_PDF_SETTINGS'  =>  'PDF 設定',
	'LBL_PDF_PAGE_FORMAT'  =>  '頁面格式',
	'LBL_PDF_PAGE_FORMAT_TEXT'  =>  '頁面使用的格式',
	'LBL_PDF_PAGE_ORIENTATION'  =>  '頁面方向',
	'LBL_PDF_PAGE_ORIENTATION_TEXT'  =>  '',
	'LBL_PDF_PAGE_ORIENTATION_P'  =>  '縱向',
	'LBL_PDF_PAGE_ORIENTATION_L'  =>  '橫向',
	'LBL_PDF_MARGIN_HEADER'  =>  '頁首邊界',
	'LBL_PDF_MARGIN_HEADER_TEXT'  =>  '',
	'LBL_PDF_MARGIN_FOOTER'  =>  '頁尾邊界',
	'LBL_PDF_MARGIN_FOOTER_TEXT'  =>  '',
	'LBL_PDF_MARGIN_TOP'  =>  '上邊界',
	'LBL_PDF_MARGIN_TOP_TEXT'  =>  '',
	'LBL_PDF_MARGIN_BOTTOM'  =>  '下邊界',
	'LBL_PDF_MARGIN_BOTTOM_TEXT'  =>  '',
	'LBL_PDF_MARGIN_LEFT'  =>  '左邊界',
	'LBL_PDF_MARGIN_LEFT_TEXT'  =>  '',
	'LBL_PDF_MARGIN_RIGHT'  =>  '右邊界',
	'LBL_PDF_MARGIN_RIGHT_TEXT'  =>  '',
	'LBL_PDF_FONT_NAME_MAIN'  =>  '標頭與內文字型',
	'LBL_PDF_FONT_NAME_MAIN_TEXT'  =>  '所選字型會套用至 PDF 文件的標頭與內文文字',
	'LBL_PDF_FONT_SIZE_MAIN'  =>  '主要字型大小',
	'LBL_PDF_FONT_SIZE_MAIN_TEXT'  =>  '',
	'LBL_PDF_FONT_NAME_DATA'  =>  '頁尾字型',
	'LBL_PDF_FONT_NAME_DATA_TEXT'  =>  '所選字型會套用至 PDF 文件的頁尾文字',
	'LBL_PDF_FONT_SIZE_DATA'  =>  '資料字型大小',
	'LBL_PDF_FONT_SIZE_DATA_TEXT'  =>  '',
	'LBL_LAST_ADMIN_NOTICE' => '您已選擇您自己。您無法變更自己的「使用者類型」或「狀態」。',
	'LBL_SMTP_SERVER_HELP' => '此 SMTP 郵件伺服器可用於外寄郵件。請提供電子郵件帳戶的使用者名稱和密碼，以使用郵件伺服器。',
    'LBL_MISSING_DEFAULT_OUTBOUND_SMTP_SETTINGS' => '管理員尚未設定預設輸出帳戶。無法傳送測試電子郵件。',
    'LBL_MAIL_SMTPAUTH_REQ'				=> '使用 SMTP 驗證？',
	'LBL_MAIL_SMTPPASS'					=> 'SMTP 密碼：',
	'LBL_MAIL_SMTPPORT'					=> 'SMTP 連接埠：',
	'LBL_MAIL_SMTPSERVER'				=> 'SMTP 伺服器：',
	'LBL_MAIL_SMTPUSER'					=> 'SMTP 使用者名稱：',
	'LBL_MAIL_SMTPTYPE'                => 'SMTP 伺服器類型：',
	'LBL_MAIL_SMTP_SETTINGS'           => 'SMTP 伺服器規格',
	'LBL_CHOOSE_EMAIL_PROVIDER'        => '選擇您的電子郵件提供者：',
	'LBL_YAHOOMAIL_SMTPPASS'					=> 'Yahoo！郵件密碼：',
	'LBL_YAHOOMAIL_SMTPUSER'					=> 'Yahoo！郵件 ID：',
	'LBL_GMAIL_SMTPPASS'					=> 'Gmail 密碼：',
	'LBL_GMAIL_SMTPUSER'					=> 'Gmail 電子郵件地址：',
	'LBL_EXCHANGE_SMTPPASS'					=> 'Exchange 密碼：',
	'LBL_EXCHANGE_SMTPUSER'					=> 'Exchange 使用者名稱：',
	'LBL_EXCHANGE_SMTPPORT'					=> 'Exchange 伺服器連接埠：',
	'LBL_EXCHANGE_SMTPSERVER'				=> 'Exchange 伺服器：',
        'LBL_OK'   =>'確定',
        'LBL_CANCEL'    => '取消',
        'LBL_DELETE_USER' => '刪除使用者',
	// Wizard
	'LBL_WIZARD_TITLE' => '使用者精靈',
    'LBL_WIZARD_WELCOME_TAB' => '歡迎',
    'LBL_WIZARD_WELCOME_TITLE' => '歡迎使用 Sugar！',
    'LBL_WIZARD_WELCOME' => '按一下<b>「下一步」</b>以設定一些使用 Sugar 的基本設定。',
    'LBL_WIZARD_WELCOME_NOSMTP' => '按一下<b>「下一步」</b>以設定一些使用 Sugar 的基本設定。',
    'LBL_WIZARD_NEXT_BUTTON' => '下一步 >',
    'LBL_WIZARD_BACK_BUTTON' => '< 返回',
    'LBL_WIZARD_SKIP_BUTTON' => '跳過',
    'LBL_WIZARD_FINISH_BUTTON' => '完成',
    'LBL_WIZARD_FINISH_TAB' => '完成',
    'LBL_WIZARD_FINISH_TITLE' => '您可以使用 Sugar 了！',

    'LBL_WIZARD_FINISH' => '按一下下方的<b>「完成」</b>以儲存設定並開始使用 Sugar。如需了解更多有關使用 Sugar 的資訊：<br /><br />
<table cellpadding=0 cellspacing=0>
<tr><td><!--not_in_theme!--><img src=include/images/university.png style="margin-right: 5px;"></td><td><a href="http://www.sugarcrm.com/university" target="_blank"><b>Sugar University（Sugar 大學）</b></a><br>使用者和系統管理員培訓和資源</td></tr>
<tr><td colspan=2><hr style="margin: 5px 0px;"></td></tr>
<tr><td><!--not_in_theme!--><img src=include/images/docs.png style="margin-right: 5px;"></td><td><a href="http://docs.sugarcrm.com/" target="_blank"><b>文件</b></a><br>產品指南和發行版本附註</td></tr>
<tr><td colspan=2><hr style="margin: 5px 0px;"></td></tr>
<tr><td><!--not_in_theme!--><img src=include/images/kb.png style="margin-right: 5px;"></td><td><a href="http://kb.sugarcrm.com/" target="_blank"><b>知識庫</b></a><br>SugarCRM 支援部提供的有關在 Sugar 中執行常見工作和流程的提示</td></tr>
<tr><td colspan=2><hr style="margin: 5px 0px;"></td></tr>
<tr><td><!--not_in_theme!--><img src=include/images/forums.png style="margin-right: 5px;"></td><td><a href="http://www.sugarcrm.com/forums" target="_blank"><b>論壇</b></a><br>Sugar 社群專用論壇，與成員和 SugarCRM 開發人員討論關注話題</td></tr>
</table>',

    'LBL_WIZARD_FINISH1' => '您下一步要執行什麼動作？',
    'LBL_WIZARD_FINISH2' => '開始使用 Sugar',
    'LBL_WIZARD_FINISH3' => '匯入資料',
    'LBL_WIZARD_FINISH4' => '將外部來源的資料匯入至應用程式。',
    'LBL_WIZARD_FINISH5' => '建立使用者',
    'LBL_WIZARD_FINISH6' => '為人員建立新使用者帳戶，供其用於存取應用程式。',
    'LBL_WIZARD_FINISH7' => '檢視和管理應用程式設定',
    'LBL_WIZARD_FINISH8' => '管理進階設定，包括預設應用程式設定。',
    'LBL_WIZARD_FINISH9' => '設定應用程式',
    'LBL_WIZARD_FINISH10' => '使用「工作室」建立和管理應用程式欄位和配置。',
    'LBL_WIZARD_FINISH11' => '造訪 Sugar 大學',
    'LBL_WIZARD_FINISH12' => '尋找培訓材料和課程，幫助您以應用程式的系統管理員或使用者身份開始使用。',
    'LBL_WIZARD_FINISH14' => '文件',
    'LBL_WIZARD_FINISH15' => '產品指南和發行版本附註',
    'LBL_WIZARD_FINISH16' => '知識庫',
    'LBL_WIZARD_FINISH17' => '
SugarCRM 支援部提供的有關在 Sugar 中執行常見工作和流程的提示',
    'LBL_WIZARD_FINISH18' => '論壇',
    'LBL_WIZARD_FINISH19' => 'Sugar 社群專用論壇，與成員和 SugarCRM 開發人員討論關注話題',
    'LBL_WIZARD_FINISH2DESC' => '直接前往應用程式「首頁」。',
    'LBL_WIZARD_PERSONALINFO' => '您的資訊',
    'LBL_WIZARD_LOCALE' => '您的地區',
    'LBL_WIZARD_SMTP' => '您的電子郵件帳戶',
    'LBL_WIZARD_PERSONALINFO_DESC' => '提供有關您自己的資訊。您提供的有關您自己的資訊，其他 Sugar 使用者將可見。<br />標有 <span class="required">*</span> 的欄位為必填欄位。',
    'LBL_WIZARD_LOCALE_DESC' => '指定您的時區以及您所需的日期、貨幣和名稱在 Sugar 中的顯示方式。',
    'LBL_WIZARD_SMTP_DESC' => '為預設輸出電子郵件伺服器提供電子郵件帳戶使用者名稱和密碼。',
	'LBL_EAPM_SUBPANEL_TITLE' => '外部帳戶',

	'LBL_EDITLAYOUT' => '編輯配置' /*for 508 compliance fix*/,
	'LBL_HELP' => '說明' /*for 508 compliance fix*/,
	'LBL_CHECKMARK' => '核取記號' /*for 508 compliance fix*/,
	'LBL_THEMEPREVIEW' => '預覽' /*for 508 compliance fix*/,

    'LBL_OAUTH_TOKENS' => 'OAuth 權杖',
    'LBL_OAUTH_TOKENS_SUBPANEL_TITLE' => "OAuth 存取權杖",

    //For export labels
    'LBL_MODIFIED_USER_ID' => '修改使用者 ID',
    'LBL_PHONE_HOME' => '家庭電話',
    'LBL_PHONE_MOBILE' => '行動電話',
    'LBL_PHONE_WORK' => '工作電話',
    'LBL_PHONE_OTHER' => '其他電話',
    'LBL_PHONE_FAX' => '電話傳真',
    'LBL_PORTAL_ONLY' => '僅限入口網站',
    'LBL_SHOW_ON_EMPLOYEES' => '顯示員工記錄',
    'LBL_IS_GROUP' => '是群組',
    'LBL_EXPORT_CREATED_BY' => '按 ID 建立',

    'LBL_DATE_MODIFIED' => '修改日期',
    'LBL_DATE_ENTERED' => '輸入日期',
    'LBL_DELETED' => '已刪除',
    'LBL_HIDEOPTIONS' => '隱藏選項',
    'LBL_SHOWOPTIONS' => '顯示選項',

    'LBL_FILTER_USERS_REPORTS' => '使用者報表',
    'LBL_CONTACTS_SYNC' => '連絡人',
    'LBL_DETAIL' => '使用者設定檔',

    'LBL_IDM_MODE_NON_EDITABLE_FIELDS_FOR_ADMIN_USER' =>
        '請訪問 "雲設置" 以對唯讀欄位進行更改。',
    'LBL_IDM_MODE_NON_EDITABLE_FIELDS_FOR_REGULAR_USER' =>
        '如果要更改唯讀欄位, 請與您的Sugar管理員聯繫。',
); // END STRINGS DEFS
