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
	'LBL_ASSIGN_PRIVATE_TEAM'			=> '(保存时的私有团队)',
	'LBL_ASSIGN_TEAM'					=> '分配给团队',
	'LBL_DEFAULT_TEAM_TEXT'				=> '可用于记录在默认情况下显示的团队都属于您的成员。',
	'LBL_DEFAULT_TEAM'					=> '默认团队',
    'LBL_DEFAULT_PRIMARY_TEAM'          => '默认主团队',
	'LBL_LIST_DESCRIPTION'				=> '说明',
	'LBL_MY_TEAMS'						=> '我的团队',
	'LBL_PRIVATE_TEAM_FOR'				=> '私有团队属于',
	'LNK_EDIT_TABS'						=> '编辑标签',
	'NTC_REMOVE_TEAM_MEMBER_CONFIRMATION'	=> '您是否确定要删除这个用户的成员关系？',
	'LBL_TEAMS'							=> '团队',
	'LBL_TEAM_UPLINE'					=> '成员汇报对象',
	'LBL_TEAM_UPLINE_EXPLICIT'			=> '成员',
    'LBL_TEAM_MEMBERSHIP'               => '团队成员资格',
    'LBL_TEAM_SET'                      => '团队设置',
    'LBL_DELETE_USER_CONFIRM'           => 'When the User record is deleted, the corresponding Employee record will also be deleted. After the user is deleted, any workflow definitions and reports involving the user might need to be updated.<br/><br/>'.
                                                'Deleting a User record cannot be undone.',
	'LBL_DELETE_GROUP_CONFIRM'          => '您是否确定删除此组用户？单击确定即可删除用户纪录。<br/>单击确定后，您将有权限将指派给组用户的纪录另指派给另一用户。',
	'LBL_DELETE_PORTAL_CONFIRM'         => '您是否确定删除此平台 API 用户？单击确定即可删除用户纪录。',

	'LNK_IMPORT_USERS'                 => '导入用户',
	'ERR_DELETE_RECORD'					=> '必须指定记录编号才能删除帐户。',
	'ERR_EMAIL_INCORRECT'				=> '请提供有效的电子邮件地址以便生成密码并发送给您。',
	'ERR_EMAIL_NO_OPTS'					=> '找不到收入电子邮件的最佳设置。',
	'ERR_ENTER_CONFIRMATION_PASSWORD'	=> '请输入您的密码确认。',
	'ERR_ENTER_NEW_PASSWORD'			=> '请输入您的新密码。',
	'ERR_ENTER_OLD_PASSWORD'			=> '请输入您的当前密码。',
	'ERR_IE_FAILURE1'					=> '[单击此处返回]',
	'ERR_IE_FAILURE2'					=> '连接到电子邮件帐户时出错。 请检查您的设置，然后重试。',
	'ERR_IE_MISSING_REQUIRED'			=> "收件邮箱的设置缺少必需信息。\n 请查看您的设置后重试。\n\n如果您不要设置收件邮箱，请清除这部分的所有字段。",
	'ERR_INVALID_PASSWORD'				=> '您必须指定一个有效的用户名和密码。',
	'ERR_NO_LOGIN_MOBILE'				=> '您第一次登录本应用程序必须使用非移动浏览器或在常规模式下完成。请使用全能浏览器或者单击下面的常规链接。为此造成不便，我们深表歉意。',
	'ERR_LAST_ADMIN_1'					=> '用户名“',
	'ERR_LAST_ADMIN_2'					=> '”是最后一个具有管理员权限的用户。至少有一个用户必须是管理员。',
	'ERR_PASSWORD_CHANGE_FAILED_1'		=> '用户密码更改失败为',
	'ERR_PASSWORD_CHANGE_FAILED_2'		=> '失败。必须设置新密码。',
	'ERR_PASSWORD_CHANGE_FAILED_3'		=> '。新密码无效。',
	'ERR_PASSWORD_INCORRECT_OLD_1'		=> '用户的现有密码不正确',
	'ERR_PASSWORD_INCORRECT_OLD_2'		=> '。重新输入密码信息。',
	'ERR_PASSWORD_MISMATCH'				=> '密码不匹配。',
	'ERR_PASSWORD_USERNAME_MISSMATCH'   => '您必须指定一个有效的用户名和电子邮件地址。',
	'ERR_PASSWORD_LINK_EXPIRED'         => '您的链接已过期，请生成一个新链接',
	'ERR_REENTER_PASSWORDS'				=> '“新密码”和“确认密码”不匹配。',
	'ERR_REPORT_LOOP'					=> '系统检测到一个汇报循环。用户不可以向自己汇报，用户的经理也不可以向他们汇报。',
	'ERR_RULES_NOT_MET'                 => '您输入的密码不符合密码要求，请再试一遍。',
	'ERR_USER_INFO_NOT_FOUND'			=> '未找到用户信息',
    'ERR_USER_NAME_EXISTS'              => '用户名 {0} 已存在。不允许使用重复的用户名。请将其更改为唯一的用户名。',
	'ERR_USER_IS_LOCKED_OUT'			=> '当前用户已被锁在 Sugar 应用程序外，无法使用现有密码登录。',
    'LBL_EXTERNAL_USER_CANT_LOGIN'      => '仅通过外部验证的用户不能使用 Sugar 凭据登录',

	'LBL_PASSWORD_SENT'                => '密码已经更新',
	'LBL_CANNOT_SEND_PASSWORD'         => '不能发送密码',
	'ERR_EMAIL_NOT_SENT_ADMIN'			=> '系统无法处理您的请求。请检查：',
	'ERR_SMTP_URL_SMTP_PORT'			=> 'SMTP 服务器 URL 和端口',
	'ERR_SMTP_USERNAME_SMTP_PASSWORD'	=> 'SMTP 用户名和密码',
	'ERR_RECIPIENT_EMAIL'				=> '收件人电子邮件地址',
	'ERR_SERVER_STATUS'					=> '您的服务器状态',
	'ERR_SERVER_SMTP_EMPTY'				=> '系统无法发送邮件给用户。请到 <a href="index.php?module=EmailMan&action=config">电子邮件设置</a>检查系统发信配置。',
    'ERR_CREATE_USER_FOR_IDM_MODE'      => '必须在“云设置”中创建新用户。',

    'LBL_EMAIL_ADDRESS'                 => '电子邮件地址',

	'LBL_ADDRESS_CITY'					=> '地址城市',
	'LBL_ADDRESS_COUNTRY'				=> '地址国家/地区',
	'LBL_ADDRESS_INFORMATION'			=> '地址信息',
	'LBL_ADDRESS_POSTALCODE'			=> '地址邮政编码',
	'LBL_ADDRESS_STATE'					=> '地址省份',
	'LBL_ADDRESS_STREET'				=> '地址街道',
	'LBL_ADDRESS_STREET_2'				=> '地址街道 2',
	'LBL_ADDRESS_STREET_3'				=> '地址街道 3',
	'LBL_ADDRESS'						=> '地址',
	'LBL_ADMIN_USER'					=> '系统管理员用户',

	'LBL_ADMIN_DESC'					=> '用户可以跳过团队安全访问管理页面的所有记录。',
	'LBL_REGULAR_DESC'					=> '用户根据团队安全和角色权限访问模块和记录。',
	'LBL_ADMIN'							=> '系统管理员',
	'LBL_ADVANCED'                     => '高级',
    'LBL_ANY_ADDRESS'                  => '任何地址：',
	'LBL_ANY_EMAIL'						=> '电子邮件',
	'LBL_ANY_PHONE'						=> '任何电话',
	'LBL_BUTTON_CREATE'					=> '创建',
	'LBL_BUTTON_EDIT'					=> '编辑',
	'LBL_CALENDAR_OPTIONS'				=> '日程安排选项',
	'LBL_CHANGE_PASSWORD'               => '更改生成的密码',
	'LBL_CHANGE_SYSTEM_PASSWORD'		=> '请提供一个新密码。',
	'LBL_CHANGE_PASSWORD_TITLE'         => '密码',
    'LBL_CHOOSE_A_KEY'					=> '选择一个密钥来阻止未授权的人发布您的日程安排',
    'LBL_NO_KEY'                        => '没有设置关键字。请设置关键字使其能发布。',
	'LBL_CHOOSE_WHICH'					=> '选择在顶部导航栏可访问的模块。指定要显示的模块顺序。',
	'LBL_CITY'							=> '城市',

	'LBL_CLEAR_BUTTON_TITLE'			=> '清除',


	'LBL_CONFIRM_PASSWORD'				=> '确认密码',
	'LBL_CONFIRM_REGULAR_USER'			=> '您已将该用户类型从系统管理员转换为普通用户。保存更改之后，该用户将没有系统管理权限。\\n\\n单击 “确定”继续操作 。\\n单击 “取消”以返回至该记录。',
	'LBL_COUNTRY'						=> '国家',
	'LBL_CURRENCY_TEXT'					=> '如果已启用显示首选货币，则在列表和记录视图中使用货币。这也是新记录的默认货币。',
	'LBL_CURRENCY'						=> '首选货币',
	'LBL_CURRENCY_EXAMPLE'				=> '货币显示实例',
	'LBL_SYSTEM_SIG_DIGITS'				=> '系统重要数字',
	'LBL_SYSTEM_SIG_DIGITS_DESC' 		=> '小数位数显示为小数的地方和整个系统，如货币和报告中的平均值。',
    'LBL_CURRENCY_SHOW_PREFERRED'       => '显示首选货币',
    'LBL_CURRENCY_SHOW_PREFERRED_TEXT'  => '转换基准货币为列表和记录视图中的用户首选项',
    'LBL_CURRENCY_CREATE_IN_PREFERRED' => '创建首选货币的营收单项',
    'LBL_CURRENCY_CREATE_IN_PREFERRED_TEXT' => '如果从产品目录添加至机会的营收单项与产品目录项中使用的货币不同，那么，该营收单项将被转换成用户的首选货币。',
	'LBL_NUMBER_GROUPING_SEP'			=> '千位分隔符',
	'LBL_NUMBER_GROUPING_SEP_TEXT'		=> '分隔千位的字符',
	'LBL_DECIMAL_SEP'					=> '小数符号',
	'LBL_DECIMAL_SEP_TEXT'				=> '分隔小数部分的字符',
	'LBL_FDOW'					=> '一周首日',
	'LBL_FDOW_TEXT'				=> '显示在每周，每月和每年的首日',
	'LBL_DATE_FORMAT_TEXT'				=> '设置日期戳的显示格式',
	'LBL_DATE_FORMAT'					=> '日期格式',
	'LBL_DEFAULT_SUBPANEL_TITLE'		=> '用户',
	'LBL_DEPARTMENT'					=> '部门',
	'LBL_DESCRIPTION'					=> '说明',
	'LBL_DISPLAY_TABS'					=> '显示模块',
	'LBL_DOWNLOADS'                    => '下载',
	'LBL_DST_INSTRUCTIONS'				=> '(+DST) 指示遵循夏令时',
	'LBL_EDIT_TABS'						=> '选择导航栏的模块',
	'LBL_EDIT'							=> '编辑',
	'LBL_USER_HASH'						=> '密码',
	'LBL_AUTHENTICATE_ID'				=> '认证 ID',
	'LBL_ACCOUNT_NAME'					=> '账户名称',
	'LBL_USER_PREFERENCES'				=> '用户首选项',
	'LBL_EXT_AUTHENTICATE'				=> '外部认证',
	'LBL_EMAIL_OTHER'					=> '电子邮件 2',
	'LBL_EMAIL'							=> '电子邮件地址',
	'LBL_EMAIL_CHARSET'					=> '发件箱字符集',
	'LBL_EMAIL_EDITOR_OPTION'			=> '撰写格式',
	'LBL_EMAIL_GMAIL_DEFAULTS'			=> '预先填入 Gmail&#153; 默认值',
	'LBL_EMAIL_LINK_TYPE'				=> '电子邮件客户端',

    'LBL_EMAIL_LINK_TYPE_HELP'			=> '<b>Sugar 邮件客户端：</b>在 Sugar 应用中使用电子邮件客户端发送电子邮件。<br>如果系统电子邮件设置已由管理员正确设置了，该选项才可用。<br><b>外部邮件客户端：</b> 使用 Sugar 应用程序的外部电子邮件客户端发送邮件，如 Microsoft Outlook。',

    'LBL_EMAIL_NOT_SENT'                => '系统无法处理您的请求。请联系系统管理员。',
    'LBL_EMAIL_PROVIDER'               => '邮件提供商',
	'LBL_EMAIL_SHOW_COUNTS'				=> '显示电子邮件总数？',
	'LBL_EMAIL_SIGNATURE_ERROR1'		=> '这个签名需要一个名字。',
    'LBL_EMAIL_SMTP_SSL'				=> '在 SMTP 启用 SSL',
    'LBL_EMAIL_TEMPLATE_MISSING'            => '尚未选择电子邮件模板来发送包含密码的邮件给用户。请在密码管理页面中选择一个电子邮件模板。',
    'LBL_EMPLOYEE_STATUS'				=> '员工状态',
    'LBL_EMPLOYEE_INFORMATION'         => '员工信息',
	'LBL_ERROR'							=> '错误',
	'LBL_EXPORT_CHARSET'				=> '导入/导出字符集',
	'LBL_EXPORT_CHARSET_DESC'			=> '选择您所在地区使用的字符集。这个属性用于导入数据，发送电子邮件，导出 .csv 文件，生成 PDF 文件，和 生成 vCard 文件。',
	'LBL_EXPORT_DELIMITER'				=> '导出分隔符',
	'LBL_EXPORT_DELIMITER_DESC'			=> '指定用于分隔导出数据的字符。',
	'LBL_FAX_PHONE'						=> '传真',
	'LBL_FAX'							=> '传真',
	'LBL_FIRST_NAME'					=> '名',
    'LBL_GENERATE_PASSWORD_BUTTON_KEY'  => 'G',
    'LBL_SYSTEM_GENERATED_PASSWORD'     =>'系统生成的密码',
    'LBL_GENERATE_PASSWORD_BUTTON_LABEL'   => '重设密码',
    'LBL_GENERATE_PASSWORD_BUTTON_TITLE'   => '重设密码',
    'LBL_GENERATE_PASSWORD'             => '重设密码',
	'LBL_GROUP_DESC'					=> '用于将项目分配给组（示例: 收件箱）。 这种类型不能通过 Sugar web 界面登录。',
	'LBL_GROUP_USER_STATUS'				=> '组用户',
	'LBL_GROUP_USER'					=> '组用户',
	'LBL_HIDE_TABS'						=> '隐藏模块',
	'LBL_HOME_PHONE'					=> '家庭电话',
	'LBL_INBOUND_TITLE'					=> '帐户信息',
	'LBL_IS_ADMIN'						=> '是管理员',
	'LBL_LANGUAGE'						=> '语言',
	'LBL_LAST_NAME'						=> '姓',
    'LBL_LAST_NAME_SLASH_NAME'			=> '姓/名',
    'LBL_LAYOUT_OPTIONS'                => '布局选项',
	'LBL_LDAP'							=> 'LDAP',
	'LBL_LDAP_AUTHENTICATION'			=> 'LDAP 认证',
	'LBL_LIST_ACCEPT_STATUS'			=> '接收状态',
	'LBL_LIST_ADMIN'					=> '管理员',
	'LBL_LIST_DEPARTMENT'				=> '部门',
	'LBL_LIST_EMAIL'					=> '电子邮件',
	'LBL_LIST_FORM_TITLE'				=> '用户',
	'LBL_LIST_GROUP'					=> '组',
	'LBL_LIST_LAST_NAME'				=> '姓',
	'LBL_LIST_MEMBERSHIP'				=> '成员关系',
	'LBL_LIST_NAME'						=> '姓名',
	'LBL_LIST_PRIMARY_PHONE'			=> '常用电话',
	'LBL_LIST_PASSWORD'					=> '密码',
	'LBL_LIST_STATUS'					=> '状态',
	'LBL_LIST_TITLE'					=> '职称',
	'LBL_LIST_USER_NAME'				=> '用户名',
	'LBL_LOCALE_DEFAULT_NAME_FORMAT'	=> '名字显示格式',
	'LBL_LOCALE_DESC_FIRST'				=> '[名]',
	'LBL_LOCALE_DESC_LAST'				=> '[姓]',
	'LBL_LOCALE_DESC_SALUTATION'		=> '[称谓]',
	'LBL_LOCALE_DESC_TITLE'				=> '[标题]',
	'LBL_PICTURE_FILE'					=> '阿凡达',
	'LBL_LOCALE_EXAMPLE_NAME_FORMAT'	=> '实例',
	'LBL_LOCALE_NAME_FORMAT_DESC'		=> '设置如何显示名字。',
	'LBL_LOCALE_NAME_FORMAT_DESC_2'	=> '<i>“s”称谓<br>“f”名<br>“l”姓</i>',
    'LBL_SAVED_SEARCH'                  => '保存搜索与布局',
	// LOGIN PAGE STRINGS
	'LBL_LOGIN_BUTTON_KEY'				=> 'L',
	'LBL_LOGIN_BUTTON_LABEL'			=> '登录',
	'LBL_LOGIN_BUTTON_TITLE'			=> '登录[Alt+L]',
	'LBL_LOGIN_WELCOME_TO'				=> '欢迎来到',
	'LBL_LOGIN_OPTIONS'					=> '选项',
    'LBL_LOGIN_FORGOT_PASSWORD'         => '忘记密码？',
    'LBL_LOGIN_SUBMIT'      		    => '提交',
    'LBL_LOGIN_ATTEMPTS_OVERRUN'        => '登录失败次数过多。',
    'LBL_LOGIN_LOGIN_TIME_ALLOWED'      => '请尝试重新登录',
    'LBL_LOGIN_LOGIN_TIME_DAYS'     	=> '天。',
    'LBL_LOGIN_LOGIN_TIME_HOURS'    	=> '小时。',
    'LBL_LOGIN_LOGIN_TIME_MINUTES'      => '分钟。',
   	'LBL_LOGIN_LOGIN_TIME_SECONDS'      => '秒。',
    'LBL_LOGIN_ADMIN_CALL'              => '请联系系统管理员。',
    'ERR_FOR_IDM_MODE_GMP_REQUIRED'     =>
        '要在 IDM 模式下使用 OpenID Connect (OIDC) 验证，请安装 GMP PHP 扩展。',
	// END LOGIN PAGE STRINGS
    'LBL_LOGGED_OUT_1' => '您已被注销。再次登录请点击',
    'LBL_LOGGED_OUT_2' => '这里',
    'LBL_LOGGED_OUT_3' => '。',
	'LBL_MAIL_FROMADDRESS'				=> '收件人地址',
	'LBL_MAIL_FROMNAME'					=> '收件人姓名',
	'LBL_MAIL_OPTIONS_TITLE'			=> '电子邮件设置',
	'LBL_MAIL_SENDTYPE'					=> '邮件传送代理',
	'LBL_MAILMERGE_TEXT'				=> '启用邮件合并 (邮件合并必须由系统管理员在配置设置中启用)',
	'LBL_MAILMERGE'						=> '邮件合并',
	'LBL_MAX_TAB'						=> '模块的最大数量',
    'LBL_MAX_TAB_DESCRIPTION'           => '选择可以在导航栏中显示模块的最大数目。将显示的模块的数量取决于浏览器的宽度。不显示模块将显示在更多菜单中。',
    'LBL_MAX_SUBTAB'                    => '子标签的数量',
    'LBL_MAX_SUBTAB_DESCRIPTION'        => '溢出菜单出现前每个选项卡显示的子标签数量。',
	'LBL_MESSENGER_ID'					=> 'IM 名称',
	'LBL_MESSENGER_TYPE'				=> 'IM 类型',
	'LBL_MOBILE_PHONE'					=> '手机',
	'LBL_MODIFIED_BY'                  =>'修改人',
	'LBL_CREATED_BY_NAME' => '创建人', //bug 48978
    'LBL_MODIFIED_BY_ID'               =>'修改人 ID',
    'LBL_MODULE_NAME'					=> '用户',
    'LBL_MODULE_NAME_SINGULAR'				=> '用户',
	'LBL_MODULE_TITLE'					=> '用户：首页',
    'LBL_NAME'							=> '全名',
    'LBL_SIGNATURE_NAME'                                        =>  '姓名',
    'LBL_NAVIGATION_PARADIGM'           => '导航',
    'LBL_USE_GROUP_TABS'                => '模块菜单筛选器',
	'LBL_NEW_FORM_TITLE'				=> '新用户',
	'LBL_NEW_PASSWORD'					=> '新密码',
	'LBL_NEW_PASSWORD1'					=> '密码',
	'LBL_NEW_PASSWORD2'					=> '确认密码',
    'LBL_NEW_USER_PASSWORD_1' => '已成功更改密码。',
	'LBL_NEW_USER_PASSWORD_2'			=> '包含有系统生成密码的电子邮件已发送到该用户。',
    'LBL_NEW_USER_PASSWORD_3' => '密码成功创建。',
	'LBL_NEW_USER_BUTTON_KEY'			=> 'N',
	'LBL_NEW_USER_BUTTON_LABEL'			=> '新用户',
	'LBL_NEW_USER_BUTTON_TITLE'			=> '新用户',
	'LBL_NORMAL_LOGIN'					=> '切换到常规视图',
	'LBL_NOTES'							=> '笔记',
	'LBL_OFFICE_PHONE'					=> '办公电话',
	'LBL_OLD_PASSWORD'					=> '当前密码',
	'LBL_OTHER_EMAIL'					=> '其他电子邮件地址',
	'LBL_OTHER_PHONE'					=> '其他电话',
	'LBL_OTHER'							=> '其他',
	'LBL_PASSWORD'						=> '密码',
    'LBL_PASSWORD_GENERATED'            => '已生成新密码',
    'LBL_PASSWORD_EXPIRATION_LOGIN'     => '您的密码已过期。请提供一个新的密码。',
    'LBL_PASSWORD_EXPIRATION_GENERATED' => '您的密码由系统生成',
    'LBL_PASSWORD_EXPIRATION_TIME'      => '您的密码已过期。请提供一个新的密码。',

	'LBL_PSW_MODIFIED'                  => '密码最后更改时间',
    'LBL_PHONE'							=> '电话',
	'LBL_PICK_TZ_WELCOME'				=> '欢迎来到 Sugar。',
	'LBL_PICK_TZ_DESCRIPTION'           => '在继续之前，请确认您的时区。 从下面列表中选择相应的时区，单击保存以继续。可以随时在您的用户设置更改时区。',
	'LBL_PORTAL_ONLY_DESC'				=> '门户服务专用。此类型不能通过 Sugar 的 web 界面登录。',
	'LBL_PORTAL_ONLY_USER'					=> '门户 API 用户',
	'LBL_POSTAL_CODE'					=> '邮政编码',
	'LBL_PRIMARY_ADDRESS'				=> '主要地址',
	'LBL_PROMPT_TIMEZONE_TEXT'			=> '选择新用户通过新的用户向导在首次登录。',
	'LBL_PROMPT_TIMEZONE'				=> '用户向导提示',
	'LBL_PROVIDE_USERNAME_AND_EMAIL' 	=> '提供有效的用户名和电子邮件地址。',
    'LBL_FORGOTPASSORD_NOT_ENABLED' 	=> '目前未启用。请联系您的系统管理员',
	'LBL_PUBLISH_KEY'					=> '发布密钥',

    'LBL_QUOTAS'                        => '定额',
    'LBL_FORECASTS'                     => '预测',
    'LBL_WORKSHEETS'                    => '工作表',
	'LBL_CALENDARS'                     => '日历',
	'LBL_RECAPTCHA_NEW_CAPTCHA'         => '获取另一个 CAPTCHA',
	'LBL_RECAPTCHA_SOUND'				=> '切换到声音',
	'LBL_RECAPTCHA_IMAGE'				=> '切换到图像',
	'LBL_RECAPTCHA_INSTRUCTION'         => '输入下面的两个字',
	'LBL_RECAPTCHA_INSTRUCTION_OPPOSITE'=> '在右边输入两个字',
	'LBL_RECAPTCHA_FILL_FIELD'			=> '输入图像中显示的文本。',
	'LBL_RECAPTCHA_INVALID_PRIVATE_KEY'	=> '无效的 Recaptcha 密钥',
	'LBL_RECAPTCHA_INVALID_REQUEST_COOKIE'=> '验证 Recaptcha 脚本的挑战参数不正确。',
	'LBL_RECAPTCHA_UNKNOWN'				=> '未知的 Recaptcha 错误',

	'LBL_RECEIVE_NOTIFICATIONS_TEXT'	=> '当有记录指派给您的时候，接收电子邮件通知。',
	'LBL_RECEIVE_NOTIFICATIONS'			=> '在指派的时候通知',
	'LBL_REGISTER'                      => '新用户？请注册',
	'LBL_REGULAR_USER'                  => '普通用户',
	'LBL_REMINDER_TEXT'					=> '为电话和会议的提醒设置默认值。使用 Sugar 为所有受邀者显示弹出式通知。电子邮件提醒发送给所有受邀者。',
	'LBL_REMINDER'						=> '提醒',
	'LBL_REMINDER_POPUP' => '弹出',
	'LBL_REMINDER_EMAIL' => '电子邮件',
    'LBL_REMINDER_EMAIL_ALL_INVITEES'   => '所有受邀者的电子邮件',
	'LBL_REMOVED_TABS'					=> '管理员删除选项卡',
	'LBL_REPORTS_TO_NAME'				=> '汇报对象',
	'LBL_REPORTS_TO'					=> '汇报对象',
    'LBL_REPORTS_TO_ID'                => '汇报对象 ID：',
	'LBL_REQUEST_SUBMIT'				=> '您的请求已提交。',
	'LBL_RESET_TO_DEFAULT'				=> '重设为默认值',
	'LBL_RESET_PREFERENCES'				=> '重置用户首选项',
    'LBL_RESET_PREFERENCES_WARNING'     => '您确定要重置所有您的用户首选项？警告：这会也注销您的应用程序。',
    'LBL_RESET_PREFERENCES_WARNING_USER' => '您确定要重置此用户的所有首选项？',
    'LBL_RESET_DASHBOARD'               => '重置仪表板',
	'LBL_SALUTATION'                    => '称谓',
    'LBL_ROLES_SUBPANEL_TITLE'			=> '角色',
	'LBL_SEARCH_FORM_TITLE'				=> '用户搜索',
	'LBL_SEARCH_URL'					=> '搜索位置',
	'LBL_SELECT_CHECKED_BUTTON_LABEL'	=> '选择选中的用户',
	'LBL_SELECT_CHECKED_BUTTON_TITLE'	=> '选择选中的用户',
	'LBL_SETTINGS_URL_DESC'				=> '当为 Microsoft&reg;Outlook&reg; 和Microsoft&reg;Word&reg; 的 Sugar 插件建立登录设置时，使用这个网址。',
	'LBL_SETTINGS_URL'					=> '网址',
	'LBL_SIGNATURE'						=> '签名',
	'LBL_SIGNATURE_HTML'				=> 'HTML 签名',
	'LBL_SIGNATURE_DEFAULT'				=> '使用签名?',
	'LBL_SIGNATURE_PREPEND'				=> '使用上面签名回复?',
	'LBL_SIGNATURES'					=> '签名',
	'LBL_STATE'							=> '省份',
	'LBL_STATUS'						=> '状态',
    'LBL_SUBPANEL_LINKS'                => '子面板链接',
    'LBL_SUBPANEL_LINKS_DESCRIPTION'    => '在详细视图中，显示子面板快捷方式链接的行。',
    'LBL_SUGAR_LOGIN'					=> '是 Sugar 用户',
    'LBL_SUPPORTED_THEME_ONLY'          => '只会影响支持此选项的主题。',
    'LBL_SWAP_LAST_VIEWED_DESCRIPTION'  => '如果选中，在边上显示最近查看栏。否则的话，它会在顶部显示。',
    'LBL_SWAP_SHORTCUT_DESCRIPTION'     => '如果选中，在顶部显示快捷方式栏。否则的话，它会在边上显示。',
    'LBL_SWAP_LAST_VIEWED_POSITION'     => '边上显示最近查看',
    'LBL_SWAP_SHORTCUT_POSITION'        => '顶部显示的快捷方式',
	'LBL_TAB_TITLE_EMAIL'				=> '电子邮件设置',
	'LBL_TAB_TITLE_USER'				=> '用户设置',
	'LBL_THEME'							=> '主题',
	'LBL_THEME_COLOR'					=> '颜色',
	'LBL_THEME_FONT'					=> '字体',
	'LBL_TIME_FORMAT_TEXT'				=> '设置时间戳的显示格式',
	'LBL_TIME_FORMAT'					=> '时间格式',
	'LBL_TIMEZONE_DST_TEXT'				=> '遵循夏令时',
	'LBL_TIMEZONE_DST'					=> '夏令时',
	'LBL_TIMEZONE_TEXT'					=> '设置当前时区。<br/> <br/>请注意：此设置仅供传统模块和导入/导出功能使用。Sugar 7 模块自动使用浏览器的时区。为了避免时区的时间冲突，请设置时区，以匹配您的浏览器的时区。',
	'LBL_TIMEZONE'						=> '时区',
	'LBL_TITLE'							=> '职称',
	'LBL_USE_REAL_NAMES'				=> '显示全名',
	'LBL_USE_REAL_NAMES_DESC'			=> '在工作分配字段中显示用户的全名而不是他们的用户名称。',
	'LBL_USER_INFORMATION'				=> '用户配置文件',
	'LBL_USER_LOCALE'					=> '区域设置',
	'LBL_USER_NAME'						=> '用户名',
	'LBL_USER_SETTINGS'					=> '用户设置',
	'LBL_USER_TYPE'		   			    => '用户类型',
	'LBL_USER_ACCESS'                  => '访问',
	'LBL_USER'							=> '用户',
	'LBL_WORK_PHONE'					=> '办公电话',
	'LBL_YOUR_PUBLISH_URL'				=> '在我的位置发布',
    'LBL_ICAL_PUB_URL'                  => 'iCal 集成 URL',
    'LBL_ICAL_PUB_URL_HELP'             => '使用此 URL 在 iCal 支持的 ' .
                                           '应用程序中订阅您的日历。Sugar 日历事件可以作为只读事件在 ' .
                                           '外部日历应用程序中查看，任何对于事件的编辑 ' .
                                           '（例如，会议、电话等等），只能在 Sugar 中创建。',
	'LBL_YOUR_QUERY_URL'				=> '您的查询 URL',
	'LNK_NEW_USER'						=> '创建新用户',
	'LNK_NEW_PORTAL_USER'				=> '创建门户网站 API 用户',
	'LNK_NEW_GROUP_USER'				=> '创建组用户',
	'LNK_USER_LIST'						=> '查看用户',
	'LNK_REASSIGN_RECORDS'				=> '重新分配记录',
    'LBL_PROSPECT_LIST'                 => '潜在客户列表',
    'LBL_EMAILS'                        => '电子邮件',
    'LBL_PROCESSING'                    => '正在处理',
    'LBL_UPDATE_FINISH'                 => '更新完成',
    'LBL_AFFECTED'                      => '受影响',

    'LBL_USER_NAME_FOR_ROLE'            =>'用户/团队/角色',
    'LBL_SESSION_EXPIRED'               => '因为您的会话已过期，您已被注销。',

    'LBL_TOO_MANY_CONCURRENT'           => '此会话已结束，因为另一个会话在相同的用户名下已启动。',
// MASS REASSIGNMENT SCRIPT STRINGS
	'LBL_REASS_SCRIPT_TITLE'			=> '记录重新分配',
	'LBL_REASS_DESC_PART1'				=> '选择包含要从特定用户重新分配给另一个用户的记录的模块。<br/> <br/>                                                            单击下一步，在每个选定的模块中查看的将更新的记录数。                                                            单击取消退出该页面不重新分配的任何记录。',
        'LBL_REASS_DESC_PART2'=>                    '选择哪些模块，用以调动期间运行工作流、 发送分配通知和做审计跟踪。单击下一步继续，并将记录重新分派。单击重新启动以重新开始。',
	'LBL_REASS_STEP2_TITLE'				=> '团队重新分配',
	'LBL_REASS_STEP2_DESC'				=> '下面列出的团队在用户团队中可用，但是并不在用户团队。在从用户团队中的所有的纪录将不会显示到用户团队，除非映射团队价值。',
	'LBL_REASS_USER_FROM_TEAM'			=> '从用户团队：',
	'LBL_REASS_USER_TO_TEAM'			=> '到用户团队：',
	'LBL_REASS_USER_FROM'				=> '从用户：',
	'LBL_REASS_USER_TO'					=> '到用户：',
	'LBL_REASS_TEAM_TO'					=> '设置团队为：',
	'LBL_REASS_TEAMS_GOOD_MSG'			=> '到用户具有访问所有从用户的团队。没有映射的必要。在 5 秒内将重定向到下一个页面。',
	'LBL_REASS_TEAM_NO_CHANGE'			=> '-- 无改变 --',
	'LBL_REASS_NOT_PROCESSED' 			=> '无法处理：',
	'LBL_REASS_MOD_REASSIGN' 			=> '模块包括在调动中：',
	'LBL_REASS_FILTERS'					=> '过滤器',
	'LBL_REASS_NOTES_TITLE'				=> '备注：',
	'LBL_REASS_NOTES_THREE'				=> '将记录分配给自己不会触发分配通知。',
	'LBL_REASS_NOTES_ONE'				=> '运行的工作流将导致重新分配进程速度慢得多。',
	'LBL_REASS_NOTES_TWO'				=> '即使您不选择做审核跟踪、 修改日期和修改者记录的字段内将仍然相应更新。',
	'LBL_REASS_VERBOSE_OUTPUT'			=> '冗长的输出',
        'LBL_REASS_VERBOSE_HELP'                     =>  '选择此选项可以查看有关涉及工作流的重新分配任务的详细信息。',
	'LBL_REASS_ASSESSING'				=> '正在评估',
	'LBL_REASS_RECORDS_FROM'			=> '条记录来源于',
	'LBL_REASS_WILL_BE_UPDATED'			=> '将被更新。',
	'LBL_REASS_WORK_NOTIF_AUDIT' => '包括工作流/通知/审计 (显著放慢)',
	'LBL_REASS_SUCCESS_ASSIGN'			=> '成功分配',
	'LBL_REASS_FROM'					=> '从',
	'LBL_REASS_TO'						=> '到',
	'LBL_REASS_TEAM_SET_TO'				=> '并且团队被设置为',
	'LBL_REASS_FAILED_SAVE'				=> '未能保存记录',
	'LBL_REASS_THE_FOLLOWING'			=> '下面',
	'LBL_REASS_HAVE_BEEN_UPDATED'		=> '已经被更新：',
    'LBL_REASS_CANNOT_PROCESS'		    => '无法处理：',
	'LBL_REASS_NONE'					=> '无',
	'LBL_REASS_UPDATE_COMPLETE'			=> '完全更新',
	'LBL_REASS_SUCCESSFUL'				=> '成功',
	'LBL_REASS_FAILED'					=> '失败',
	'LBL_REASS_BUTTON_SUBMIT' 			=> '提交',
	'LBL_REASS_BUTTON_CLEAR' 			=> '清除',
	'LBL_REASS_BUTTON_CONTINUE'			=> '下一步 >',
    'LBL_REASS_BUTTON_REASSIGN'         => '重新指定',
	'LBL_REASS_BUTTON_GO_BACK' 			=> '< 返回',
	'LBL_REASS_BUTTON_RESTART' 			=> '重新开始',
	'LBL_REASS_BUTTON_RETURN' 			=> '返回',
	// js
	'LBL_REASS_CONFIRM_REASSIGN'		=> '您真要重新分配这个用户的所有记录吗?',
  'LBL_REASS_CONFIRM_REASSIGN_YES' => '是',
  'LBL_REASS_CONFIRM_REASSIGN_NO'    => '否',
  'LBL_REASS_CONFIRM_REASSIGN_TITLE'    => '重新分配',
	// end js
	'ERR_REASS_SELECT_MODULE'			=> '请返回并选择至少一个模块。',
	'ERR_REASS_DIFF_USERS'				=> '请选择不同于从用户的到用户。',
// END MASS REASSIGNMENT SCRIPT STRINGS

// INBOUND EMAIL STRINGS
	'LBL_APPLY_OPTIMUMS'				=> '应用最优设置',
	'LBL_ASSIGN_TO_USER'				=> '分配给用户',
	'LBL_BASIC'							=> '收件箱设置',
	'LBL_CERT_DESC'						=> '强制验证邮件服务器的安全证书–如果是自我签署，请不要使用',
	'LBL_CERT'							=> '证书验证',
	'LBL_FIND_OPTIMUM_KEY'				=> 'f',
	'LBL_FIND_OPTIMUM_MSG'				=> '<br>查找最佳连接变量。',
	'LBL_FIND_OPTIMUM_TITLE'			=> '查找最佳配置',
	'LBL_FORCE'							=> '强制否定',
	'LBL_FORCE_DESC'					=> '一些 IMAP/POP3 服务器需要特殊的交换机。当连接时请检查负交换机（比如 /notls）',
	'LBL_FOUND_OPTIMUM_MSG'				=> '<br>发现最优设置。点击下面的按钮将其应用至您的邮箱。',
	'LBL_EMAIL_INBOUND_TITLE'			=> '收件箱设置',
	'LBL_EMAIL_OUTBOUND_TITLE'			=> '发件箱设置',
	'LBL_LOGIN'							=> '用户名',
	'LBL_MAILBOX_DEFAULT'				=> '收件箱',
	'LBL_MAILBOX_SSL_DESC'				=> '连接时使用 SSL。如果不能连接，请检查您在安装 PHP 的时候，配置项中是否包含了“--with-imap-ssl”。',
	'LBL_MAILBOX'						=> '受监视的文件夹',
	'LBL_MAILBOX_TYPE'					=> '可能采取的行动',
	'LBL_MARK_READ_NO'					=> '导入后删除标记过的电子邮件',
	'LBL_MARK_READ_YES'					=> '导入后在服务器上保留的电子邮件',
	'LBL_MARK_READ_DESC'				=> '导入并标记邮件服务器上已读的消息；不要删除它们。',
	'LBL_MARK_READ'						=> '在服务器上保留邮件',
	'LBL_ONLY_SINCE_NO'					=> '不。检查此邮件服务器上的所有邮件。',
	'LBL_ONLY_SINCE_YES'				=> '是。',
	'LBL_ONLY_SINCE_DESC'				=> '当使用 POP3 时，PHP 将不能过滤新信息或未读信息。此标签可以核对上次收件箱里的信息。如果您的邮件服务器不支持IMAP，它将对此有很大改进。',
	'LBL_ONLY_SINCE'					=> '仅自上次检查后导入',
	'LBL_PORT'							=> '邮件服务器端口',
	'LBL_SERVER_OPTIONS'				=> '高级设置',
	'LBL_SERVER_TYPE'					=> '邮件服务器协议',
	'LBL_SERVER_URL'					=> '邮件服务器地址',
	'LBL_SSL'							=> '使用 SSL',
	'LBL_SSL_DESC'						=> '连接到您的邮件服务器时，使用安全端口层。',
	'LBL_TEST_BUTTON_KEY'				=> 't',
	'LBL_TEST_BUTTON_TITLE'				=> '测试',
	'LBL_TEST_SETTINGS'					=> '测试设置',
	'LBL_TEST_SUCCESSFUL'				=> '连接成功完成。',
	'LBL_TLS_DESC'						=> '连接邮件服务器时使用传输层安全协议–如果您的邮件服务器支持这此协议，请只使用这一个。',
	'LBL_TLS'							=> '使用 TLS',
	'LBL_TOGGLE_ADV'					=> '显示高级选项',
    'LBL_OWN_OPPS'                      => '无商业机会',
	'LBL_EXTERNAL_AUTH_ONLY'			=> '仅使该用户通过认证',
	'LBL_ONLY'							=> '仅',
    'LBL_OWN_OPPS_DESC'                 => '如果用户未给指派商业机会，请选择此项。对于不包含在销售活动中的管理人员的用户使用此设置。可用于预测模块的设置。',
// END INBOUND EMAIL STRINGS
	'LBL_LDAP_ERROR' => 'LDAP 错误：请联系管理员',
	'LBL_LDAP_EXTENSION_ERROR' => 'LDAP 错误：未加载扩展名',

// PROJECT RESOURCES STRINGS
	'LBL_USER_HOLIDAY_SUBPANEL_TITLE' => '用户假期',
	'LBL_RESOURCE_NAME' => '名称',
	'LBL_RESOURCE_TYPE' => '类型',

	'LBL_PDF_SETTINGS'  =>  'PDF 设置',
	'LBL_PDF_PAGE_FORMAT'  =>  '页面格式',
	'LBL_PDF_PAGE_FORMAT_TEXT'  =>  '页面使用的格式',
	'LBL_PDF_PAGE_ORIENTATION'  =>  '页面方向',
	'LBL_PDF_PAGE_ORIENTATION_TEXT'  =>  '',
	'LBL_PDF_PAGE_ORIENTATION_P'  =>  '纵向',
	'LBL_PDF_PAGE_ORIENTATION_L'  =>  '横向',
	'LBL_PDF_MARGIN_HEADER'  =>  '页眉边距',
	'LBL_PDF_MARGIN_HEADER_TEXT'  =>  '',
	'LBL_PDF_MARGIN_FOOTER'  =>  '页脚边距',
	'LBL_PDF_MARGIN_FOOTER_TEXT'  =>  '',
	'LBL_PDF_MARGIN_TOP'  =>  '上边距',
	'LBL_PDF_MARGIN_TOP_TEXT'  =>  '',
	'LBL_PDF_MARGIN_BOTTOM'  =>  '下边距',
	'LBL_PDF_MARGIN_BOTTOM_TEXT'  =>  '',
	'LBL_PDF_MARGIN_LEFT'  =>  '左边距',
	'LBL_PDF_MARGIN_LEFT_TEXT'  =>  '',
	'LBL_PDF_MARGIN_RIGHT'  =>  '右边距',
	'LBL_PDF_MARGIN_RIGHT_TEXT'  =>  '',
	'LBL_PDF_FONT_NAME_MAIN'  =>  '标题和正文字体',
	'LBL_PDF_FONT_NAME_MAIN_TEXT'  =>  '选定的字体将应用于标题和 PDF 文档正文中的文本',
	'LBL_PDF_FONT_SIZE_MAIN'  =>  '主字体大小',
	'LBL_PDF_FONT_SIZE_MAIN_TEXT'  =>  '',
	'LBL_PDF_FONT_NAME_DATA'  =>  '页脚字体',
	'LBL_PDF_FONT_NAME_DATA_TEXT'  =>  '选定的字体将应用于 PDF 文档的页脚中的文本',
	'LBL_PDF_FONT_SIZE_DATA'  =>  '数据的字体大小',
	'LBL_PDF_FONT_SIZE_DATA_TEXT'  =>  '',
	'LBL_LAST_ADMIN_NOTICE' => '您选择了自己。您不能更改用户类型或自己的地位。',
	'LBL_SMTP_SERVER_HELP' => '该 SMTP 邮件服务器用来发送电子邮件。请提供您帐户的用户名和密码以便使用此邮件服务器。',
    'LBL_MISSING_DEFAULT_OUTBOUND_SMTP_SETTINGS' => '管理员尚未配置默认出站帐户。 无法发送测试电子邮件。',
    'LBL_MAIL_SMTPAUTH_REQ'				=> '使用 SMTP 认证？',
	'LBL_MAIL_SMTPPASS'					=> 'SMTP 密码：',
	'LBL_MAIL_SMTPPORT'					=> 'SMTP 端口：',
	'LBL_MAIL_SMTPSERVER'				=> 'SMTP 服务器：',
	'LBL_MAIL_SMTPUSER'					=> 'SMTP 用户名：',
	'LBL_MAIL_SMTPTYPE'                => 'SMTP 服务器类型：',
	'LBL_MAIL_SMTP_SETTINGS'           => 'SMTP 服务器规格',
	'LBL_CHOOSE_EMAIL_PROVIDER'        => '选择您的电子邮件提供商：',
	'LBL_YAHOOMAIL_SMTPPASS'					=> 'Yahoo！邮件密码：',
	'LBL_YAHOOMAIL_SMTPUSER'					=> 'Yahoo! 邮件 ID：',
	'LBL_GMAIL_SMTPPASS'					=> 'Gmail 密码：',
	'LBL_GMAIL_SMTPUSER'					=> 'Gmail 邮箱地址：',
	'LBL_EXCHANGE_SMTPPASS'					=> 'Exchange 密码：',
	'LBL_EXCHANGE_SMTPUSER'					=> 'Exchange 用户名：',
	'LBL_EXCHANGE_SMTPPORT'					=> 'Exchange 服务器端口：',
	'LBL_EXCHANGE_SMTPSERVER'				=> 'Exchange 服务器：',
        'LBL_OK'   =>'确定',
        'LBL_CANCEL'    => '取消',
        'LBL_DELETE_USER' => '删除用户',
	// Wizard
	'LBL_WIZARD_TITLE' => '用户向导',
    'LBL_WIZARD_WELCOME_TAB' => '欢迎',
    'LBL_WIZARD_WELCOME_TITLE' => '欢迎来到 Sugar!',
    'LBL_WIZARD_WELCOME' => '单击 <b>下一步</b> 配置使用 Sugar 的几个基本设置。',
    'LBL_WIZARD_WELCOME_NOSMTP' => '单击 <b>下一步</b> 配置使用 Sugar 的几个基本设置。',
    'LBL_WIZARD_NEXT_BUTTON' => '下一步 >',
    'LBL_WIZARD_BACK_BUTTON' => '< 返回',
    'LBL_WIZARD_SKIP_BUTTON' => '跳过',
    'LBL_WIZARD_FINISH_BUTTON' => '完成',
    'LBL_WIZARD_FINISH_TAB' => '完成',
    'LBL_WIZARD_FINISH_TITLE' => '你准备使用 Sugar!',

    'LBL_WIZARD_FINISH' => '点击下面的 <b>结束</b> 保存您的设置并且开始使用Sugar。更多关于使用Sugar的信息:<br /><br /><table cellpadding=0 cellspacing=0><tr><td><!--not_in_theme!--><img src=include/images/university.png style="margin-right: 5px;"></td><td><a href="http://www.sugarcrm.com/university" target="_blank"><b>Sugar University</b></a><br>End-user and System Administrator Training and Resources</td></tr><br /><tr><td colspan=2><hr style="margin: 5px 0px;"></td></tr><tr><td><!--not_in_theme!--><img src=include/images/docs.png style="margin-right: 5px;"></td><td><a href="http://docs.sugarcrm.com/" target="_blank"><b>Documentation</b></a><br>Product Guides and Release Notes</td></tr><br /><tr><td colspan=2><hr style="margin: 5px 0px;"></td></tr><tr><td><!--not_in_theme!--><img src=include/images/kb.png style="margin-right: 5px;"></td><td><a href="http://kb.sugarcrm.com/" target="_blank"><b>Knowledge Base</b></a><br>Tips from SugarCRM Support for performing common tasks and processes in Sugar</td></tr><br /><tr><td colspan=2><hr style="margin: 5px 0px;"></td></tr><tr><td><!--not_in_theme!--><img src=include/images/forums.png style="margin-right: 5px;"></td><td><a href="http://www.sugarcrm.com/forums" target="_blank"><b>Forums</b></a><br>Forums dedicated to the Sugar Community to discuss topics of interest with each other and with SugarCRM Developers</td></tr></table>',

    'LBL_WIZARD_FINISH1' => '接下来您要做什么?',
    'LBL_WIZARD_FINISH2' => '开始使用 Sugar',
    'LBL_WIZARD_FINISH3' => '导入数据',
    'LBL_WIZARD_FINISH4' => '将数据从外部源导入应用程序。',
    'LBL_WIZARD_FINISH5' => '创建用户',
    'LBL_WIZARD_FINISH6' => '创建新的用户帐户，供人们使用以访问应用程序。',
    'LBL_WIZARD_FINISH7' => '查看和管理应用程序设置',
    'LBL_WIZARD_FINISH8' => '管理高级的设置，包括默认应用程序设置。',
    'LBL_WIZARD_FINISH9' => '配置应用程序',
    'LBL_WIZARD_FINISH10' => '使用工作室来创建和管理应用字段和布局。',
    'LBL_WIZARD_FINISH11' => '参观 Sugar 大学',
    'LBL_WIZARD_FINISH12' => '查找培训材料和将帮助您开始作为一个系统管理员或最终用户的应用程序的类。',
    'LBL_WIZARD_FINISH14' => '文件',
    'LBL_WIZARD_FINISH15' => '产品指南和发行说明',
    'LBL_WIZARD_FINISH16' => '知识库',
    'LBL_WIZARD_FINISH17' => '在 Sugar 中执行常见任务和流程的 SugarCRM 支持提示',
    'LBL_WIZARD_FINISH18' => '论坛',
    'LBL_WIZARD_FINISH19' => '论坛致力于 Sugar 社区讨论与 SugarCRM 开发人员感兴趣的话题',
    'LBL_WIZARD_FINISH2DESC' => '直接转到应用程序的主页。',
    'LBL_WIZARD_PERSONALINFO' => '您的信息',
    'LBL_WIZARD_LOCALE' => '您的本地设置',
    'LBL_WIZARD_SMTP' => '您的电子邮件帐户',
    'LBL_WIZARD_PERSONALINFO_DESC' => '提供有关自己的信息。您提供的关于自己的信息将对其他 Sugar 用户可见。<br /> 用 <span class="required">*</span> 标记的字段是必需字段。',
    'LBL_WIZARD_LOCALE_DESC' => '指定您在 Sugar 中显示的时区和日期，以及货币和姓名。',
    'LBL_WIZARD_SMTP_DESC' => '为默认的发送电子邮件服务器提供您的帐户用户名和密码。',
	'LBL_EAPM_SUBPANEL_TITLE' => '外部帐户',

	'LBL_EDITLAYOUT' => '编辑布局' /*for 508 compliance fix*/,
	'LBL_HELP' => '帮助' /*for 508 compliance fix*/,
	'LBL_CHECKMARK' => '检查标识' /*for 508 compliance fix*/,
	'LBL_THEMEPREVIEW' => '预览' /*for 508 compliance fix*/,

    'LBL_OAUTH_TOKENS' => 'OAuth 令牌',
    'LBL_OAUTH_TOKENS_SUBPANEL_TITLE' => "OAuth 的访问令牌",

    //For export labels
    'LBL_MODIFIED_USER_ID' => '已修改的用户 ID',
    'LBL_PHONE_HOME' => '电话首页',
    'LBL_PHONE_MOBILE' => '移动电话',
    'LBL_PHONE_WORK' => '工作电话',
    'LBL_PHONE_OTHER' => '其他电话',
    'LBL_PHONE_FAX' => '电话传真',
    'LBL_PORTAL_ONLY' => '仅门户站点',
    'LBL_SHOW_ON_EMPLOYEES' => '显示员工记录',
    'LBL_IS_GROUP' => '小组',
    'LBL_EXPORT_CREATED_BY' => '创建人 ID',

    'LBL_DATE_MODIFIED' => '修改的日期',
    'LBL_DATE_ENTERED' => '输入的日期',
    'LBL_DELETED' => '已删除',
    'LBL_HIDEOPTIONS' => '隐藏选项',
    'LBL_SHOWOPTIONS' => '显示选项',

    'LBL_FILTER_USERS_REPORTS' => '用户报告',
    'LBL_CONTACTS_SYNC' => '联系人',
    'LBL_DETAIL' => '用户配置文件',

    'LBL_IDM_MODE_NON_EDITABLE_FIELDS_FOR_ADMIN_USER' =>
        '请访问“云设置”，更改只读字段。',
    'LBL_IDM_MODE_NON_EDITABLE_FIELDS_FOR_REGULAR_USER' =>
        '如果需要更改只读字段，请联系您的 Sugar 管理员。',
); // END STRINGS DEFS
