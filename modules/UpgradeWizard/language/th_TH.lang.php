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
$mod_strings = array(
	'DESC_MODULES_INSTALLED'					=> 'ติดตั้งโมดูลต่อไปนี้แล้ว:',
	'DESC_MODULES_QUEUED'						=> 'โมดูลต่อไปนี้พร้อมสำหรับติดตั้งแล้ว:',

	'ERR_UW_CANNOT_DETERMINE_GROUP'				=> 'ไม่ทราบกลุ่ม',
	'ERR_UW_CANNOT_DETERMINE_USER'				=> 'ไม่ทราบเจ้าของ',
	'ERR_UW_CONFIG_WRITE'						=> 'เกิดข้อผิดพลาดในการอัปเดต config.php ด้วยข้อมูลเวอร์ชันใหม่',
	'ERR_UW_CONFIG'								=> 'โปรดกำหนดให้ไฟล์ config.php สามารถเขียนได้และโหลดเพจนี้อีกครั้ง',
	'ERR_UW_DIR_NOT_WRITABLE'					=> 'ไดเรกทอรีไม่สามารถเขียนได้',
	'ERR_UW_FILE_NOT_COPIED'					=> 'ไม่ได้คัดลอกไฟล์',
	'ERR_UW_FILE_NOT_DELETED'					=> 'เกิดปัญหาในการย้ายแพ็คเกจออก ',
	'ERR_UW_FILE_NOT_READABLE'					=> 'ไม่สามารถอ่านไฟล์',
	'ERR_UW_FILE_NOT_WRITABLE'					=> 'ไม่สามารถย้ายหรือเขียนในไฟล์',
	'ERR_UW_FLAVOR_2'							=> 'อัปเกรดรุ่น: ',
	'ERR_UW_FLAVOR'								=> 'รุ่นของระบบ SugarCRM: ',
	'ERR_UW_LOG_FILE_UNWRITABLE'				=> 'ไม่สามารถสร้าง/เขียนข้อมูลใน ./upgradeWizard.log โปรดแก้ไขสิทธิ์ใช้งานในไดเรกทอรี SugarCRM',
    'ERR_UW_MBSTRING_FUNC_OVERLOAD'				=> 'มีการตั้งค่า mbstring.func_overload เป็นค่าที่มากกว่า 1<br/>โปรดแก้ไขค่านี้ใน php.ini และเริ่มต้นเว็บเซิร์ฟเวอร์ใหม่',
	'ERR_UW_MYSQL_VERSION'						=> 'SugarCRM ต้องการ MySQL เวอร์ชัน 4.1.2 ขึ้นไป เวอร์ชันที่พบ: ',
	'ERR_UW_OCI8_VERSION'				        => 'เวอร์ชัน Oracle ของคุณไม่มีการสนับสนุนโดย Sugar คุณจะต้องติดตั้งเวอร์ชันที่เข้ากันได้กับแอปพลิเคชัน Sugar โปรดดูตารางความเข้ากันได้ในบันทึกประจำรุ่นสำหรับเวอร์ชัน Oracle ที่สนับสนุน เวอร์ชันของคุณคือ: ',
	'ERR_UW_NO_FILE_UPLOADED'					=> 'โปรดระบุไฟล์และลองอีกครั้ง',
	'ERR_UW_NO_FILES'							=> 'เกิดข้อผิดพลาด ไม่พบไฟล์ที่จะตรวจสอบ',
	'ERR_UW_NO_MANIFEST'						=> 'ไฟล์ซิปไม่มีไฟล์ manifest.php ไม่สามารถดำเนินการต่อได้',
	'ERR_UW_NO_VIEW'							=> 'มุมมองที่ระบุไม่ถูกต้อง',
	'ERR_UW_NO_VIEW2'							=> 'ไม่ได้กำหนดมุมมอง โปรดไปที่หน้าแรกของการดูแลระบบเพื่อไปยังเพจนี้',
	'ERR_UW_NOT_VALID_UPLOAD'					=> 'ไม่ใช่การอัปโหลดที่ถูกต้อง',
	'ERR_UW_NO_CREATE_TMP_DIR'					=> 'ไม่สามารถสร้างไดเรกทอรีชั่วคราว ตรวจสอบสิทธิ์ใช้งานไฟล์',
	'ERR_UW_ONLY_PATCHES'						=> 'คุณสามารถอัปโหลดแพทช์ในเพจนี้เท่านั้น',
    'ERR_UW_PREFLIGHT_ERRORS'					=> 'พบข้อผิดพลาดระหว่างการตรวจสอบก่อนดำเนินการ',
	'ERR_UW_UPLOAD_ERR'							=> 'มีข้อผิดพลาดในการอัปโหลดไฟล์ โปรดลองอีกครั้ง<br>\\n',
	'ERR_UW_VERSION'							=> 'เวอร์ชันของระบบ SugarCRM: ',
    'ERR_UW_WRONG_TYPE'							=> 'เพจนี้ไม่ได้ใช้สำหรับการเรียกใช้ ',
	'ERR_UW_PHP_FILE_ERRORS'					=> array(
													1 => 'ไฟล์ที่อัปโหลดเกินไดเรกทีฟ upload_max_filesize ใน php.ini',
													2 => 'ไฟล์ที่อัปโหลดเกินไดเรกทีฟ MAX_FILE_SIZE ที่ระบุในฟอร์ม HTML',
													3 => 'ไฟล์ที่อัปโหลดมีการอัปโหลดเพียงบางส่วน',
													4 => 'ไม่ได้อัปโหลดไฟล์',
													5 => 'เกิดข้อผิดพลาดที่ไม่ทราบสาเหตุ',
													6 => 'ไม่มีโฟลเดอร์ชั่วคราว',
													7 => 'ไม่สามารถเขียนไฟล์ในดิสก์',
													8 => 'การอัปโหลดไฟล์ถูกหยุดโดยส่วนขยาย',
),

    'ERROR_HT_NO_WRITE'                         => 'ไม่สามารถเขียนข้อมูลในไฟล์: %s',
    'ERROR_MANIFEST_TYPE'                       => 'ไฟล์แสดงรายการต้องระบุประเภทแพ็คเกจ',
    'ERROR_PACKAGE_TYPE'                        => 'ไฟล์แสดงรายการมีการระบุประเภทแพ็คเกจที่ไม่รู้จัก: %s',
    'ERROR_VERSION_INCOMPATIBLE'                => 'แพ็คเกจการอัปเกรดไม่สามารถใช้ร่วมกับ Sugar เวอร์ชันนี้: %s',
    'ERROR_FLAVOR_INCOMPATIBLE'                 => 'ไฟล์ที่อัปโหลดมาไม่สามารถใช้ได้กับรสชาติ (อาชีพ วิสาหกิจ หรือ การปรับแต่งล่าสุด) รสนี้ของ Sugar: %s:',

    'ERROR_UW_CONFIG_DB'                        => 'เกิดข้อผิดพลาดในการบันทึกตัวแปรการกำหนดค่า %s ไปยัง db (คีย์ %s, ค่า %s)',
    'ERR_NOT_ADMIN'                             => "ไม่มีสิทธิ์ในการเข้าถึงการดูแลระบบ",
    'ERR_NO_VIEW_ACCESS_REASON'                 => 'คุณไม่มีสิทธิ์เข้าถึงเพจนี้',

    'LBL_BUTTON_BACK'							=> '< ย้อนกลับ',
	'LBL_BUTTON_CANCEL'							=> 'ยกเลิก',
	'LBL_BUTTON_DELETE'							=> 'ลบแพ็คเกจ',
	'LBL_BUTTON_DONE'							=> 'เสร็จสิ้น',
	'LBL_BUTTON_EXIT'							=> 'ออก',
	'LBL_BUTTON_INSTALL'						=> 'การอัปเกรดก่อนดำเนินการ',
	'LBL_BUTTON_NEXT'							=> 'ถัดไป >',
	'LBL_BUTTON_RECHECK'						=> 'ตรวจสอบอีกครั้ง',
	'LBL_BUTTON_RESTART'						=> 'เริ่มต้นใหม่',

	'LBL_UPLOAD_UPGRADE'						=> 'อัปโหลดแพ็คเกจการอัปเกรด ',
	'LBL_UPLOAD_FILE_NOT_FOUND'					=> 'ไม่พบไฟล์การอัปโหลด',
	'LBL_UW_BACKUP_FILES_EXIST_TITLE'			=> 'การสำรองข้อมูลไฟล์',
	'LBL_UW_BACKUP_FILES_EXIST'					=> 'คุณสามารถดูไฟล์ที่สำรองข้อมูลจากการอัปเกรดนี้ได้ใน',
	'LBL_UW_BACKUP'								=> 'การสำรองข้อมูลไฟล์',
	'LBL_UW_CANCEL_DESC'						=> 'การอัปเกรดถูกยกเลิก ไฟล์ชั่วคราวที่คัดลอกไว้และและไฟล์การอัปเกรดซึ่งอัปโหลดไว้จะถูกลบทั้งหมด',
	'LBL_UW_CHARSET_SCHEMA_CHANGE'				=> 'การเปลี่ยนแปลงสคีมาของชุดอักขระ',
	'LBL_UW_CHECK_ALL'							=> 'เลือกทั้งหมด',
	'LBL_UW_CHECKLIST'							=> 'ขั้นตอนการอัปเกรด',
	'LBL_UW_COMMIT_ADD_TASK_DESC_1'				=> "สำรองข้อมูลไฟล์ที่เขียนทับในไดเรกทอรีต่อไปนี้: \n",
	'LBL_UW_COMMIT_ADD_TASK_DESC_2'				=> "ผสานไฟล์ต่อไปนี้ด้วยตนเอง:\n",
	'LBL_UW_COMMIT_ADD_TASK_NAME'				=> 'กระบวนการอัปเกรด: ผสานไฟล์ด้วยตนเอง',
	'LBL_UW_COMMIT_ADD_TASK_OVERVIEW'			=> 'โปรดใช้วิธีจำแนกส่วนต่างที่คุณคุ้นเคยที่สุดในการผสานไฟล์เหล่านี้ ก่อนที่จะดำเนินการนี้เสร็จสมบูรณ์ การติดตั้ง SugarCRM ของคุณจะอยู่ในสถานะที่ไม่แน่นอน และการอัปเกรดจะไม่สมบูรณ์',
	'LBL_UW_COMPLETE'							=> 'เสร็จสมบูรณ์',
	'LBL_UW_CONTINUE_CONFIRMATION'              => 'Sugar เวอร์ชันใหม่นี้มีข้อตกลงของใบอนุญาตใหม่ คุณต้องการดำเนินการต่อหรือไม่',
	'LBL_UW_COMPLIANCE_ALL_OK'					=> 'เงื่อนไขตรงตามข้อกำหนดการตั้งค่าระบบทั้งหมดแล้ว',
	'LBL_UW_COMPLIANCE_CALLTIME'				=> 'การตั้งค่า PHP: ส่งเวลาการโทรโดยใช้การอ้างอิง',
	'LBL_UW_COMPLIANCE_CURL'					=> 'โมดูล cURL',
	'LBL_UW_COMPLIANCE_IMAP'					=> 'โมดูล IMAP',
	'LBL_UW_COMPLIANCE_MBSTRING'				=> 'โมดูล MBStrings',
	'LBL_UW_COMPLIANCE_MBSTRING_FUNC_OVERLOAD'	=> 'พารามิเตอร์ MBStrings mbstring.func_overload',
	'LBL_UW_COMPLIANCE_MEMORY'					=> 'การตั้งค่า PHP: ขีดจำกัดของหน่วยความจำ',
    'LBL_UW_COMPLIANCE_STREAM'                  => 'การตั้งค่า PHP: สตรีม',
	'LBL_UW_COMPLIANCE_MSSQL_MAGIC_QUOTES'		=> 'MS SQL Server & PHP Magic Quotes GPC',
	'LBL_UW_COMPLIANCE_MYSQL'					=> 'เวอร์ชันต่ำสุดของ MySQL',
    'LBL_UW_COMPLIANCE_DB'                      => 'เวอร์ชันต่ำสุดของฐานข้อมูล',
	'LBL_UW_COMPLIANCE_PHP_INI'					=> 'ตำแหน่งของ php.ini',
    'LBL_UW_COMPLIANCE_PHP_VERSION'             => 'เวอร์ชัน PHP',
	'LBL_UW_COMPLIANCE_SAFEMODE'				=> 'การตั้งค่า PHP: เซฟโหมด',
	'LBL_UW_COMPLIANCE_TITLE'					=> 'ตรวจสอบการตั้งค่าเซิร์ฟเวอร์',
	'LBL_UW_COMPLIANCE_TITLE2'					=> 'การตั้งค่าที่ตรวจพบ',
	'LBL_UW_COMPLIANCE_XML'						=> 'การแยกวิเคราะห์ XML',
    'LBL_UW_COMPLIANCE_ZIPARCHIVE'				=> 'การสนับสนุน Zip',

	'LBL_UW_COPIED_FILES_TITLE'					=> 'คัดลอกไฟล์สำเร็จแล้ว',
	'LBL_UW_CUSTOM_TABLE_SCHEMA_CHANGE'			=> 'การเปลี่ยนแปลงสคีมาของตารางที่กำหนดเอง',

	'LBL_UW_DB_CHOICE1'							=> 'วิซาร์ดการอัปเกรดจะเรียกใช้ SQL',
	'LBL_UW_DB_CHOICE2'							=> 'การสืบค้น SQL ด้วยตนเอง',
	'LBL_UW_DB_INSERT_FAILED'					=> 'INSERT ทำงานล้มเหลว - ผลลัพธ์ที่เปรียบเทียบมีความแตกต่างกัน',
	'LBL_UW_DB_ISSUES_PERMS'					=> 'สิทธิ์ของฐานข้อมูล',
	'LBL_UW_DB_ISSUES'							=> 'ปัญหาเกี่ยวกับฐานข้อมูล',
	'LBL_UW_DB_METHOD'							=> 'วิธีอัปเดตฐานข้อมูล',
	'LBL_UW_DB_NO_ADD_COLUMN'					=> 'แก้ไขตาราง [table] เพิ่มคอลัมน์ [column]',
	'LBL_UW_DB_NO_CHANGE_COLUMN'				=> 'แก้ไขตาราง [table] แก้ไขคอลัมน์ [column]',
	'LBL_UW_DB_NO_CREATE'						=> 'สร้างตาราง [table]',
	'LBL_UW_DB_NO_DELETE'						=> 'ลบจาก [table]',
	'LBL_UW_DB_NO_DROP_COLUMN'					=> 'แก้ไขตาราง [table] ลบคอลัมน์ [column]',
	'LBL_UW_DB_NO_DROP_TABLE'					=> 'ลบตาราง [table]',
	'LBL_UW_DB_NO_ERRORS'						=> 'สามารถใช้สิทธิ์ได้ทั้งหมด',
	'LBL_UW_DB_NO_INSERT'						=> 'แทรกใน [table]',
	'LBL_UW_DB_NO_SELECT'						=> 'เลือก [x] จาก [table]',
	'LBL_UW_DB_NO_UPDATE'						=> 'อัปเดต [table]',
	'LBL_UW_DB_PERMS'							=> 'สิทธิ์ที่จำเป็น',

	'LBL_UW_DESC_MODULES_INSTALLED'				=> 'ติดตั้งแพ็คเกจการอัปเกรดต่อไปนี้แล้ว:',
	'LBL_UW_END_DESC'							=> 'อัปเกรดระบบแล้ว',
	'LBL_UW_END_DESC2'							=> 'ถ้าคุณเลือกที่จะเรียกใช้ขั้นตอนต่างๆ ด้วยตนเอง เช่น การผสานไฟล์ หรือการสืบค้น SQL โปรดดำเนินการทันที เนื่องจากระบบของคุณจะอยู่ในสภาวะที่ไม่เสถียรจนกว่าขั้นตอนเหล่านี้จะเสร็จสมบูรณ์',
	'LBL_UW_END_LOGOUT_PRE'						=> 'การอัปเกรดเสร็จสมบูรณ์',
	'LBL_UW_END_LOGOUT_PRE2'					=> 'คลิกที่ "เสร็จ" เพื่อออกจากวิซาร์ดการอัปเกรด',
	'LBL_UW_END_LOGOUT'							=> 'ถ้าคุณวางแผนที่จะใช้แพ็คเกจการอัปเกรดอื่นโดยใช้วิซาร์ดการอัปเกรด ให้ล็อกเอาต์และล็อกอินกลับมาอีกครั้งเพื่อดำเนินการนี้',
	'LBL_UW_END_LOGOUT2'						=> 'ล็อกเอาต์',
	'LBL_UW_REPAIR_INDEX'						=> 'เพื่อปรับปรุงประสิทธิภาพของฐานข้อมูล โปรดเรียกใช้สคริปต์ <a href="index.php?module=Administration&action=RepairIndex" target="_blank">ซ่อมแซมดัชนี</a>',

	'LBL_UW_FILE_DELETED'						=> " ถูกย้ายออกแล้ว<br>",
	'LBL_UW_FILE_GROUP'							=> 'กลุ่ม',
	'LBL_UW_FILE_ISSUES_PERMS'					=> 'สิทธิ์ใช้งานไฟล์',
	'LBL_UW_FILE_ISSUES'						=> 'ปัญหาเกี่ยวกับไฟล์',
	'LBL_UW_FILE_NEEDS_DIFF'					=> 'ไฟล์ต้องมีการจำแนกส่วนต่างด้วยตนเอง',
	'LBL_UW_FILE_NO_ERRORS'						=> '<b>สามารถเขียนไฟล์ทั้งหมดได้</b>',
	'LBL_UW_FILE_OWNER'							=> 'เจ้าของ',
	'LBL_UW_FILE_PERMS'							=> 'สิทธิ์ใช้งาน',
	'LBL_UW_FILE_UPLOADED'						=> ' ได้รับการอัปโหลดแล้ว',
	'LBL_UW_FILE'								=> 'ชื่อไฟล์',
	'LBL_UW_FILES_QUEUED'						=> 'แพ็คเกจการอัปเกรดต่อไปนี้พร้อมสำหรับติดตั้งแล้ว:',
	'LBL_UW_FILES_REMOVED'						=> "ไฟล์ต่อไปนี้จะถูกนำออกจากระบบ:<br>\n",
	'LBL_UW_NEXT_TO_UPLOAD'						=> "<b>คลิกที่ถัดไปเพื่ออัปโหลดแพ็คเกจการอัปเกรด</b>",
	'LBL_UW_FROZEN'								=> 'อัปโหลดแพ็คเกจก่อนดำเนินการต่อ',
	'LBL_UW_HIDE_DETAILS'						=> 'ซ่อนรายละเอียด',
	'LBL_UW_IN_PROGRESS'						=> 'อยู่ระหว่างดำเนินการ',
	'LBL_UW_INCLUDING'							=> 'รวมถึง',
	'LBL_UW_INCOMPLETE'							=> 'ไม่เสร็จสมบูรณ์',
	'LBL_UW_INSTALL'							=> 'ไฟล์ติดตั้ง',
	'LBL_UW_MANUAL_MERGE'						=> 'ผสานไฟล์',
	'LBL_UW_MODULE_READY_UNINSTALL'				=> "โมดูลพร้อมสำหรับถอนการติดตั้งแล้ว คลิกที่ \"คอมมิต\" เพื่อดำเนินการถอนการติดตั้ง<br>\n",
	'LBL_UW_MODULE_READY'						=> "โมดูลพร้อมสำหรับการติดตั้งแล้ว คลิกที่ \"คอมมิต\" เพื่อดำเนินการติดตั้ง",
	'LBL_UW_NO_INSTALLED_UPGRADES'				=> 'ไม่พบการอัปเกรดที่บันทึกไว้',
	'LBL_UW_NONE'								=> 'ไม่มี',
	'LBL_UW_NOT_AVAILABLE'						=> 'ไม่สามารถใช้ได้',
	'LBL_UW_OVERWRITE_DESC'						=> "ไฟล์ที่แก้ไขทั้งหมดจะถูกเขียนทับ รวมถึงการปรับแต่งรหัสและการแก้ไขเทมเพลทที่คุณทำไว้ คุณต้องการดำเนินการต่อหรือไม่",
	'LBL_UW_OVERWRITE_FILES_CHOICE1'			=> 'เขียนทับไฟล์ทั้งหมด',
	'LBL_UW_OVERWRITE_FILES_CHOICE2'			=> 'ผสานด้วยตนเอง - เก็บข้อมูลทั้งหมดไว้',
	'LBL_UW_OVERWRITE_FILES'					=> 'วิธีผสาน',
	'LBL_UW_PATCH_READY'						=> 'แพทช์นี้พร้อมสำหรับดำเนินการต่อแล้ว คลิกปุ่ม "คอมมิต" ที่ด้านล่างเพื่อให้กระบวนการอัปเกรดเสร็จสมบูรณ์',
	'LBL_UW_PATCH_READY2'						=> '<h2>โปรดทราบ: พบเลย์เอาต์ที่ปรับแต่ง</h2><br />ไฟล์ต่อไปนี้มีฟิลด์ใหม่หรือเลย์เอาต์หน้าจอที่ปรับเปลี่ยนแล้วใช้งานอยู่ผ่าน Studio แพทช์ที่คุณกำลังจะติดตั้งมีการเปลี่ยนแปลงในไฟล์ สำหรับ <u>แต่ละไฟล์</u> คุณสามารถ:<br><ul><li>[<b>Default</b>] เก็บเวอร์ชันของคุณไว้โดยไม่ทำเครื่องหมายในช่องทำเครื่องหมาย ระบบจะไม่ประมวลผลการปรับเปลี่ยนของแพทช์</li>or<li>ยอมรับไฟล์ที่อัปเดตโดยเลือกช่องทำเครื่องหมาย คุณจะต้องนำเลย์เอาต์ของคุณมาใช้อีกครั้งผ่าน</li></ul>',

	'LBL_UW_PREFLIGHT_ADD_TASK'					=> 'สร้างรายการงานสำหรับการผสานด้วยตนเอง',
	'LBL_UW_PREFLIGHT_COMPLETE'					=> 'การตรวจสอบก่อนดำเนินการ',
	'LBL_UW_PREFLIGHT_DIFF'						=> 'จำแนกส่วนต่างแล้ว ',
	'LBL_UW_PREFLIGHT_EMAIL_REMINDER'			=> 'ส่งอีเมลถึงตัวเองเพื่อเตือนให้ผสานด้วยตนเองหรือไม่',
	'LBL_UW_PREFLIGHT_FILES_DESC'				=> 'ไฟล์ที่แสดงด้านล่างนี้มีการปรับเปลี่ยน รายการที่ไม่ได้ทำเครื่องหมายจะต้องมีการผสานด้วยตนเอง <i>การเปลี่ยนแปลงเลย์เอาต์ที่ตรวจพบทั้งหมดจะไม่มีการทำเครื่องหมายโดยอัตโนมัติ โปรดทำเครื่องหมายรายการใดก็ตามที่ควรเขียนทับ',
	'LBL_UW_PREFLIGHT_NO_DIFFS'					=> 'ไม่จำเป็นต้องมีการผสานไฟล์ด้วยตนเอง',
	'LBL_UW_PREFLIGHT_NOT_NEEDED'				=> 'ไม่จำเป็น',
	'LBL_UW_PREFLIGHT_PRESERVE_FILES'			=> 'ไฟล์ที่เก็บรักษาอัตโนมัติ:',
	'LBL_UW_PREFLIGHT_TESTS_PASSED'				=> 'ผ่านการทดสอบก่อนดำเนินการทั้งหมดแล้ว',
	'LBL_UW_PREFLIGHT_TESTS_PASSED2'			=> 'คลิกที่ถัดไปเพื่อคัดลอกไฟล์ที่อัปเกรดไปยังระบบ',
	'LBL_UW_PREFLIGHT_TESTS_PASSED3'			=> '<b>หมายเหตุ: </b>กระบวนการอัปเกรดที่เหลือนี้เป็นขั้นตอนที่จำเป็น และเมื่อคลิก "ถัดไป" คุณจะต้องทำกระบวนการนี้ให้เสร็จสมบูรณ์ ถ้าคุณไม่ต้องการดำเนินการต่อ ให้คลิกที่ปุ่มยกเลิก',
	'LBL_UW_PREFLIGHT_TOGGLE_ALL'				=> 'สลับไฟล์ทั้งหมด',

	'LBL_UW_REBUILD_TITLE'						=> 'สร้างผลลัพธ์ใหม่',
	'LBL_UW_SCHEMA_CHANGE'						=> 'การเปลี่ยนแปลงสคีมา',

	'LBL_UW_SHOW_COMPLIANCE'					=> 'แสดงการตั้งค่าที่ตรวจพบ',
	'LBL_UW_SHOW_DB_PERMS'						=> 'แสดงสิทธิ์ใช้งานฐานข้อมูลที่หายไป',
	'LBL_UW_SHOW_DETAILS'						=> 'แสดงรายละเอียด',
	'LBL_UW_SHOW_DIFFS'							=> 'แสดงไฟล์ที่ต้องมีการผสานด้วยตนเอง',
	'LBL_UW_SHOW_NW_FILES'						=> 'แสดงไฟล์ที่มีสิทธิ์ไม่ถูกต้อง',
	'LBL_UW_SHOW_SCHEMA'						=> 'แสดงสคริปต์การเปลี่ยนแปลงสคีมา',
	'LBL_UW_SHOW_SQL_ERRORS'					=> 'แสดงการสืบค้นที่ไม่ถูกต้อง',
	'LBL_UW_SHOW'								=> 'แสดง',

	'LBL_UW_SKIPPED_FILES_TITLE'				=> 'ไฟล์ที่ข้าม',
	'LBL_UW_SKIPPING_FILE_OVERWRITE'			=> 'ข้ามการเขียนทับไฟล์ - เลือกการผสานด้วยตนเองไว้',
	'LBL_UW_SQL_RUN'							=> 'ตรวจสอบว่ามีการเรียกใช้ SQL ด้วยตนเองเมื่อใด',
	'LBL_UW_START_DESC'							=> 'วิซาร์ดนี้จะช่วยคุณในการอัปเกรดอินสแตนซ์ของ Sugar นี้',
	'LBL_UW_START_DESC2'						=> 'หมายเหตุ: ขอแนะนำให้คุณสำรองข้อมูลของฐานข้อมูล Sugar และไฟล์ของระบบ (ไฟล์ทั้งหมดในโฟลเดอร์ SugarCRM) ก่อนอัปเกรดระบบที่ใช้งานจริงของคุณ เราขอแนะนำให้คุณทดสอบการอัปเกรดในอินสแตนซ์ที่โคลนจากระบบที่ใช้งานจริงก่อน',
	'LBL_UW_START_DESC3'						=> 'คลิกถัดไปเพื่อดำเนินการตรวจสอบระบบให้แน่ใจว่าระบบพร้อมสำหรับการอัปเกรดแล้ว การตรวจสอบนี้รวมถึงสิทธิ์ใช้งานไฟล์ สิทธิ์ของฐานข้อมูล และการตั้งค่าเซิร์ฟเวอร์',
	'LBL_UW_START_UPGRADED_UW_DESC'				=> 'วิซาร์ดการอัปเกรดใหม่จะกลับสู่กระบวนการอัปเกรด โปรดดำเนินการอัปเกรดต่อ',
	'LBL_UW_START_UPGRADED_UW_TITLE'			=> 'ยินดีต้อนรับสู่วิซาร์ดการอัปเกรดใหม่',

	'LBL_UW_SYSTEM_CHECK_CHECKING'				=> 'กำลังตรวจสอบ โปรดรอสักครู่ การดำเนินการนี้อาจใช้เวลา 30 วินาที',
	'LBL_UW_SYSTEM_CHECK_FILE_CHECK_START'		=> 'กำลังค้นหาไฟล์ที่เกี่ยวข้องทั้งหมดเพื่อตรวจสอบ',
	'LBL_UW_SYSTEM_CHECK_FILES'					=> 'ไฟล์',
	'LBL_UW_SYSTEM_CHECK_FOUND'					=> 'พบ',

	'LBL_UW_TITLE_CANCEL'						=> 'ยกเลิก',
	'LBL_UW_TITLE_COMMIT'						=> 'คอมมิตการอัปเกรด',
	'LBL_UW_TITLE_END'							=> 'สรุปการดำเนินการ',
	'LBL_UW_TITLE_PREFLIGHT'					=> 'การตรวจสอบก่อนดำเนินการ',
	'LBL_UW_TITLE_START'						=> 'ยินดีต้อนรับ',
	'LBL_UW_TITLE_SYSTEM_CHECK'					=> 'การตรวจสอบระบบ',
	'LBL_UW_TITLE_UPLOAD'						=> 'อัปโหลดแพ็คเกจ',
	'LBL_UW_TITLE'								=> 'วิซาร์ดการอัปเกรด',
	'LBL_UW_UNINSTALL'							=> 'ถอนการติดตั้ง',
	//500 upgrade labels
	'LBL_UW_ACCEPT_THE_LICENSE' 				=> 'ยอมรับใบอนุญาต',
	'LBL_UW_CONVERT_THE_LICENSE' 				=> 'แปลงใบอนุญาต',
	'LBL_UW_CUSTOMIZED_OR_UPGRADED_MODULES'     => 'โมดูลที่อัปเกรด/ปรับแต่ง',
	'LBL_UW_FOLLOWING_MODULES_CUSTOMIZED'       => 'ตรวจพบโมดูลต่อไปนี้ว่ามีการปรับแต่งและเก็บรักษาไว้',
	'LBL_UW_FOLLOWING_MODULES_UPGRADED'         => 'ระบบตรวจพบโมดูลต่อไปนี้ว่ามีการปรับแต่งผ่าน Studio และมีการอัปเกรด',

	'LBL_START_UPGRADE_IN_PROGRESS'             => 'อยู่ระหว่างเริ่มต้น',
	'LBL_SYSTEM_CHECKS_IN_PROGRESS'             => 'อยู่ระหว่างการตรวจสอบระบบ',
	'LBL_LICENSE_CHECK_IN_PROGRESS'             => 'อยู่ระหว่างการตรวจสอบใบอนุญาต',
	'LBL_PREFLIGHT_CHECK_IN_PROGRESS'           => 'อยู่ระหว่างการตรวจสอบก่อนดำเนินการ',
    'LBL_PREFLIGHT_FILE_COPYING_PROGRESS'       => 'อยู่ระหว่างการคัดลอกไฟล์',
	'LBL_COMMIT_UPGRADE_IN_PROGRESS'            => 'อยู่ระหว่างการคอมมิตการอัปเกรด',
    'LBL_UW_COMMIT_DESC'						=> 'คลิกที่ถัดไปเพื่อเรียกใช้สคริปต์การอัปเกรดเพิ่มเติม',
	'LBL_UPGRADE_SCRIPTS_IN_PROGRESS'			=> 'อยู่ระหว่างการอัปเกรดสคริปต์',
	'LBL_UPGRADE_SUMMARY_IN_PROGRESS'			=> 'อยู่ระหว่างการอัปเกรดข้อมูลสรุป',
	'LBL_UPGRADE_IN_PROGRESS'                   => 'อยู่ระหว่างดำเนินการ     ',
	'LBL_UPGRADE_TIME_ELAPSED'                  => 'เวลาที่ผ่านไป',
	'LBL_UPGRADE_CANCEL_IN_PROGRESS'			=> 'กำลังยกเลิกการอัปเกรดและล้างข้อมูล',
    'LBL_UPGRADE_TAKES_TIME_HAVE_PATIENCE'      => 'การอัปเกรดอาจใช้เวลาสักครู่',
    'LBL_UPLOADE_UPGRADE_IN_PROGRESS'           => 'อยู่ระหว่างตรวจสอบการอัปโหลด',
	'LBL_UPLOADING_UPGRADE_PACKAGE'      		=> 'กำลังอัปโหลดแพ็คเกจการอัปเกรด ',
    'LBL_UW_DORP_THE_OLD_SCHMEA' 				=> 'คุณต้องการให้ Sugar เลิกใช้สคีมา 451 ที่มีการเลิกใช้แล้วหรือไม่',
	'LBL_UW_DROP_SCHEMA_UPGRADE_WIZARD'			=> 'วิซาร์ดการอัปเกรดเลิกใช้สคีมา 451 เก่า',
	'LBL_UW_DROP_SCHEMA_MANUAL'					=> 'เลิกใช้สคีมาด้วยตนเองหลังจากอัปเกรด',
	'LBL_UW_DROP_SCHEMA_METHOD'					=> 'วิธีลบสคีมาเดิม',
	'LBL_UW_SHOW_OLD_SCHEMA_TO_DROP'			=> 'แสดงสคีมาเดิมที่สามารถลบได้',
	'LBL_UW_SKIPPED_QUERIES_ALREADY_EXIST'      => 'การสืบค้นที่ข้าม',
	'ERR_CHECKSYS_PHP_INVALID_VER'      => 'เวอร์ชัน PHP ของคุณไม่มีการสนับสนุนโดย Sugar คุณจะต้องติดตั้งเวอร์ชันที่เข้ากันได้กับแอปพลิเคชัน Sugar โปรดดูตารางความเข้ากันได้ในบันทึกประจำรุ่นสำหรับเวอร์ชัน PHP ที่สนับสนุน เวอร์ชันของคุณคือ ',
	'LBL_BACKWARD_COMPATIBILITY_ON' 			=> 'โหมดความเข้ากันได้ย้อนหลังของ PHP เปิดอยู่ ให้ตั้งค่า zend.ze1_compatibility_mode เป็นปิดเพื่อดำเนินการต่อ',
	//including some strings from moduleinstall that are used in Upgrade
	'LBL_ML_ACTION' => 'การดำเนินการ',
    'LBL_ML_CANCEL'             => 'ยกเลิก',
    'LBL_ML_COMMIT'=>'คอมมิต',
    'LBL_ML_DESCRIPTION' => 'คำอธิบาย',
    'LBL_ML_INSTALLED' => 'วันที่ติดตั้ง',
    'LBL_ML_NAME' => 'ชื่อ',
    'LBL_ML_PUBLISHED' => 'วันที่เผยแพร่',
    'LBL_ML_TYPE' => 'ประเภท',
    'LBL_ML_UNINSTALLABLE' => 'ถอนการติดตั้งได้',
    'LBL_ML_VERSION' => 'เวอร์ชัน',
	'LBL_ML_INSTALL'=>'ติดตั้ง',
	//adding the string used in tracker. copying from homepage
	'LBL_HOME_PAGE_4_NAME' => 'เครื่องมือติดตาม',
	'LBL_MODULE_NAME' => 'UpgradeWizard',
	'LBL_MODULE_NAME_SINGULAR' => 'UpgradeWizard',
	'LBL_UPLOAD_SUCCESS' => 'อัปโหลดแพ็คเกจการอัปเกรดสำเร็จแล้ว ให้คลิกที่ถัดไปเพื่อดำเนินการตรวจสอบขั้นสุดท้าย',
	'LBL_UW_TITLE_LAYOUTS' => 'ยืนยันเลย์เอาต์',
	'LBL_LAYOUT_MODULE_TITLE' => 'เลย์เอาต์',
	'LBL_LAYOUT_MERGE_DESC' => 'มีฟิลด์ใหม่ที่ใช้ได้และมีการเพิ่มในการอัปเกรดนี้ และสามารถต่อท้ายโดยอัตดนมัติกับเลย์เอาต์ของโมดูลที่มีอยู่ ในการเรียนรู้เพิ่มเติมเกี่ยวกับฟิลด์ใหม่ โปรดดูบันทึกประจำรุ่นสำหรับเวอร์ชันที่คุณอัปเกรด<br><br>ถ้าคุณไม่ต้องการเพิ่มฟิลด์ใหม่ต่อท้าย โปรดยกเลิกการทำเครื่องหมายโมดูล และเลย์เอาต์ที่กำหนดเองจะคงเดิมโดยไม่เปลี่ยนแปลง ฟิลด์ต่างๆ จะใช้ได้ใน Studio หลังจากการอัปเกรด <br><br>',
	'LBL_LAYOUT_MERGE_TITLE' => 'คลิกที่ถัดไปเพื่อยืนยันการเปลี่ยนแปลง และสิ้นสุดการอัปเกรด',
	'LBL_LAYOUT_MERGE_TITLE2' => 'คลิกที่ถัดไปเพื่อสิ้นสุดการอัปเกรด',
	'LBL_UW_CONFIRM_LAYOUTS' => 'ยืนยันเลย์เอาต์',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS' => 'ยืนยันผลลัพธ์ของเลย์เอาต์',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS_DESC' => 'ผสานเลย์เอาต์ต่อไปนี้สำเร็จแล้ว:',
	'LBL_SELECT_FILE' => 'เลือกไฟล์:',
	'LBL_LANGPACKS' => 'แพ็คภาษา' /*for 508 compliance fix*/,
	'LBL_MODULELOADER' => 'เครื่องมือโหลดโมดูล' /*for 508 compliance fix*/,
	'LBL_PATCHUPGRADES' => 'การอัปเกรดแพทช์' /*for 508 compliance fix*/,
	'LBL_THEMES' => 'ธีม' /*for 508 compliance fix*/,
	'LBL_WORKFLOW' => 'เวิร์กโฟลว์' /*for 508 compliance fix*/,
	'LBL_UPGRADE' => 'อัปเกรด' /*for 508 compliance fix*/,
	'LBL_PROCESSING' => 'กำลังประมวลผล' /*for 508 compliance fix*/,
    'LBL_GLOBAL_TEAM_DESC'                      => 'ปรากฏทั้งหมด',
);
