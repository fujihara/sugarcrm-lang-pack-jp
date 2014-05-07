<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarCRM".
 ********************************************************************************/

$mod_strings                            = array (
	'ERR_DELETE_RECORD'                    => '取引先を削除するためにはレコード番号を指定する必要があります。',

	'LBL_ACCOUNT_ID'                       => '取引先ID',
	'LBL_ACCOUNT_NAME'                     => '取引先:',
	'LBL_ACCOUNTS_SUBPANEL_TITLE'          => '取引先',
	'LBL_ACTIVITIES_SUBPANEL_TITLE'        => '活動',
	'LBL_ATTACH_NOTE'                      => 'ノートの添付',
	'LBL_BUGS_SUBPANEL_TITLE'              => 'バグトラッカー',
	'LBL_CASE_NUMBER'                      => 'チケット番号:',
	'LBL_CASE_SUBJECT'                     => 'チケット件名:',
	'LBL_CASE'                             => 'チケット:',
	'LBL_CONTACT_CASE_TITLE'               => 'チケット担当者:',
	'LBL_CONTACT_NAME'                     => '取引先担当者:',
	'LBL_CONTACT_ROLE'                     => '役割:',
	'LBL_CONTACTS_SUBPANEL_TITLE'          => '取引先担当者',
	'LBL_DEFAULT_SUBPANEL_TITLE'           => 'チケット',
	'LBL_DESCRIPTION'                      => '詳細:',
	'LBL_FILENANE_ATTACHMENT'              => '添付ファイル',
	'LBL_HISTORY_SUBPANEL_TITLE'           => '履歴',
	'LBL_INVITEE'                          => '取引先担当者',
	'LBL_MEMBER_OF'                        => '取引先',
	'LBL_MODULE_NAME'                      => 'チケット',
	'LBL_MODULE_TITLE'                     => 'チケット: ホーム',
	'LBL_NEW_FORM_TITLE'                   => 'チケット作成',
	'LBL_NUMBER'                           => '番号:',
	'LBL_PRIORITY'                         => '優先度:',
	'LBL_PROJECTS_SUBPANEL_TITLE'          => 'プロジェクト',
	'LBL_DOCUMENTS_SUBPANEL_TITLE'         => '文書',
	'LBL_RESOLUTION'                       => '解決:',
	'LBL_SEARCH_FORM_TITLE'                => 'チケット検索',
	'LBL_STATUS'                           => 'ステータス:',
	'LBL_SUBJECT'                          => '件名:',
	'LBL_SYSTEM_ID'                        => 'システムID',
	'LBL_LIST_ASSIGNED_TO_NAME'            => '担当ユーザ名',
	'LBL_LIST_ACCOUNT_NAME'                => '取引先',
	'LBL_LIST_ASSIGNED'                    => '担当ユーザ',
	'LBL_LIST_CLOSE'                       => '完了',
	'LBL_LIST_FORM_TITLE'                  => 'チケット一覧',
	'LBL_LIST_LAST_MODIFIED'               => '最終更新日',
	'LBL_LIST_MY_CASES'                    => '私のチケット',
	'LBL_LIST_NUMBER'                      => 'No.',
	'LBL_LIST_PRIORITY'                    => '優先度',
	'LBL_LIST_STATUS'                      => 'ステータス',
	'LBL_LIST_SUBJECT'                     => '件名',
	'LBL_LIST_ASSIGNED_TO_NAME'            => '担当ユーザ',
	'LBL_KBDOCUMENTS_SUBPANEL_TITLE'       => 'ナレッジベース',

	'LNK_CASE_LIST'                        => 'チケット',
	'LNK_NEW_CASE'                         => 'チケット作成',
	'NTC_REMOVE_FROM_BUG_CONFIRMATION'     => 'このチケットをバグから削除しても良いですか？',
	'NTC_REMOVE_INVITEE'                   => '本当にこの取引先担当者をチケットから削除して良いですか？',
	'LBL_LIST_DATE_CREATED'                => '入力日',
	'LBL_ASSIGNED_TO_NAME'                 => '担当ユーザ',
	'LBL_TYPE'                             => 'タイプ',
	'LBL_WORK_LOG'                         => '作業記録',
	'LNK_IMPORT_CASES'                     => 'データインポート',

	'LBL_CREATED_USER'                     => '作成者',
	'LBL_MODIFIED_USER'                    => '更新者',
	'LBL_PROJECT_SUBPANEL_TITLE'           => 'プロジェクト',
	'LBL_CASE_INFORMATION'                 => 'チケット概要',

	//For export labels
	'LBL_MODIFIED_BY_NAME_OWNER'           => '編集ユーザ名(オーナー)',
	'LBL_MODIFIED_BY_NAME_MOD'             => '編集ユーザ名(Mod)',
	'LBL_CREATED_BY_NAME_OWNER'            => '作成ユーザ名(オーナー)',
	'LBL_CREATED_BY_NAME_MOD'              => '作成ユーザ名(Mod)',
	'LBL_ASSIGNED_USER_NAME_OWNER'         => '担当ユーザ名(オーナー)',
	'LBL_ASSIGNED_USER_NAME_MOD'           => '担当ユーザ名(Mod)',
	'LBL_TEAM_COUNT_OWNER'                 => 'チーム数(オーナー)',
	'LBL_TEAM_COUNT_MOD'                   => 'チーム数(Mod)',
	'LBL_TEAM_NAME_OWNER'                  => 'チーム名(オーナー)',
	'LBL_TEAM_NAME_MOD'                    => 'チーム名(Mod)',
	'LBL_ACCOUNT_NAME_OWNER'               => '取引先名(オーナー)',
	'LBL_ACCOUNT_NAME_MOD'                 => '取引先名(Mod)',
	'LBL_MODIFIED_USER_NAME'               => '編集ユーザ名',
	'LBL_MODIFIED_USER_NAME_OWNER'         => '編集ユーザ名(オーナー)',
	'LBL_MODIFIED_USER_NAME_MOD'           => '編集ユーザ名(Mod)',
	'LBL_PORTAL_VIEWABLE'                  => 'ポータル閲覧可能',
	'LBL_EXPORT_ASSIGNED_USER_ID'          => '担当ユーザID',
	'LBL_EXPORT_MODIFIED_USER_ID'          => '更新ユーザID',
	'LBL_EXPORT_CREATED_BY'                => '作成ユーザID',
	'LBL_EXPORT_CREATED_BY_NAME'           => '作成ユーザ名',
	'LBL_EXPORT_ASSIGNED_USER_NAME'        => '担当ユーザ名',
	'LBL_EXPORT_TEAM_COUNT'                => 'チーム数',

	// SNIP
	'LBL_CONTACT_HISTORY_SUBPANEL_TITLE'   => '関係連絡先\' Eメール',
);
?>
