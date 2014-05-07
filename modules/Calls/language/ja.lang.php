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

$mod_strings                        = array (
	'LBL_BLANK'                        => ' ',
	'LBL_MODULE_NAME'                  => 'コール情報',
	'LBL_MODULE_TITLE'                 => 'コール情報: ホーム',
	'LBL_SEARCH_FORM_TITLE'            => 'コール検索',
	'LBL_LIST_FORM_TITLE'              => 'コール一覧',
	'LBL_NEW_FORM_TITLE'               => 'アポイント作成',
	'LBL_LIST_CLOSE'                   => '完了',
	'LBL_LIST_SUBJECT'                 => '件名',
	'LBL_LIST_CONTACT'                 => '取引先担当者',
	'LBL_LIST_RELATED_TO'              => '関連先',
	'LBL_LIST_RELATED_TO_ID'           => '関連先ID',
	'LBL_LIST_DATE'                    => '実施日',
	'LBL_LIST_TIME'                    => '開始時間',
	'LBL_LIST_DURATION'                => '時間',
	'LBL_LIST_DIRECTION'               => '方向',
	'LBL_SUBJECT'                      => '件名:',
	'LBL_REMINDER'                     => '通知:',
	'LBL_CONTACT_NAME'                 => '取引先担当者:',
	'LBL_DESCRIPTION_INFORMATION'      => '詳細情報',
	'LBL_DESCRIPTION'                  => '詳細:',
	'LBL_STATUS'                       => 'ステータス:',
	'LBL_DIRECTION'                    => '方向:',
	'LBL_DATE'                         => '開始日:',
	'LBL_DURATION'                     => '時間:',
	'LBL_DURATION_HOURS'               => '時間:',
	'LBL_DURATION_MINUTES'             => '分:',
	'LBL_HOURS_MINUTES'                => '(時/分)',
	'LBL_CALL'                         => 'コール:',
	'LBL_DATE_TIME'                    => '開始日時:',
	'LBL_TIME'                         => '開始時間:',
	'LBL_HOURS_ABBREV'                 => '時',
	'LBL_MINSS_ABBREV'                 => '分',
	'LBL_COLON'                        => ':',
	'LBL_DEFAULT_STATUS'               => '計画済み',
	'LNK_NEW_CALL'                     => 'コール作成',
	'LNK_NEW_MEETING'                  => 'ミーティング作成',
	'LNK_CALL_LIST'                    => 'コール',
	'LNK_IMPORT_CALLS'                 => 'データインポート',
	'ERR_DELETE_RECORD'                => '取引先を削除するにはレコード番号を指定する必要があります。',
	'LBL_INVITEE'                      => '参加者一覧',
	'LBL_RELATED_TO'                   => '関係先:',
	'LNK_NEW_APPOINTMENT'              => 'アポイント作成',
	'LBL_SCHEDULING_FORM_TITLE'        => 'スケジューリング',
	'LBL_ADD_INVITEE'                  => 'スケジュールにユーザを追加',
	'LBL_NAME'                         => '名前',
	'LBL_FIRST_NAME'                   => '名',
	'LBL_LAST_NAME'                    => '姓',
	'LBL_EMAIL'                        => '電子メール',
	'LBL_PHONE'                        => '電話',
	'LBL_REMINDER'                     => '通知:',
	'LBL_REMINDER_POPUP'               => 'ポップアップ',
	'LBL_REMINDER_EMAIL'               => 'Eメール通知',
	'LBL_REMINDER_EMAIL_ALL_INVITEES'  => 'Eメール通知',
	'LBL_EMAIL_REMINDER'               => 'Eメール通知',
	'LBL_EMAIL_REMINDER_TIME'          => 'Eメール通知時間',
	'LBL_SEND_BUTTON_TITLE'            => '招待送信 [Alt+I]',
	'LBL_SEND_BUTTON_KEY'              => 'I',
	'LBL_SEND_BUTTON_LABEL'            => '保存＆送信',
	'LBL_DATE_END'                     => '終了日',
	'LBL_TIME_END'                     => '終了時間',
	'LBL_REMINDER_TIME'                => '通知',
	'LBL_EMAIL_REMINDER_SENT'          => 'Eメール通知送信',
	'LBL_SEARCH_BUTTON'                => '検索',
	'LBL_ACTIVITIES_REPORTS'           => '活動レポート',
	'LBL_ADD_BUTTON'                   => '追加',
	'LBL_DEFAULT_SUBPANEL_TITLE'       => 'コール',
	'LBL_LOG_CALL'                     => 'コールをログ',
	'LNK_SELECT_ACCOUNT'               => '取引先選択',
	'LNK_NEW_ACCOUNT'                  => '取引先作成',
	'LNK_NEW_OPPORTUNITY'              => '商談作成',
	'LBL_DEL'                          => '削除',
	'LBL_LEADS_SUBPANEL_TITLE'         => 'リード',
	'LBL_CONTACTS_SUBPANEL_TITLE'      => '取引先担当者',
	'LBL_USERS_SUBPANEL_TITLE'         => 'ユーザ',
	'LBL_OUTLOOK_ID'                   => 'Outlook ID',
	'LBL_MEMBER_OF'                    => '以下のメンバー: ',
	'LBL_HISTORY_SUBPANEL_TITLE'       => 'ノート',
	'LBL_LIST_ASSIGNED_TO_NAME'        => '担当ユーザ',
	'LBL_LIST_MY_CALLS'                => 'コール情報',
	'LBL_SELECT_FROM_DROPDOWN'         => '関連先ドロップダウンリストから選択してください。',
	'LBL_ASSIGNED_TO_NAME'             => '担当ユーザ名',
	'LBL_ASSIGNED_TO_ID'               => '担当ユーザID',
	'NOTICE_DURATION_TIME'             => '時間は0以上である必要があります。',
	'LBL_CALL_INFORMATION'             => 'コール情報',
	'LBL_REMOVE'                       => '削除',
	'LBL_ACCEPT_STATUS'                => 'ステータス承認',
	'LBL_ACCEPT_LINK'                  => 'リンク承認',
	//For export labels
	'LBL_PARENT_ID'                    => '親会社ID',
	'LBL_EXPORT_MODIFIED_USER_ID'      => '更新ユーザID',
	'LBL_EXPORT_CREATED_BY'            => '作成ユーザID',
	'LBL_EXPORT_ASSIGNED_USER_ID'      => '担当ユーザID',
	'LBL_EXPORT_DATE_START'            => '開始日時',
	'LBL_EXPORT_PARENT_TYPE'           => '関連モジュール',
	'LBL_EXPORT_REMINDER_TIME'         => '通知 (～分前)',

	// create invitee functionallity
	'LBL_CREATE_INVITEE'               => '参加者情報',
	'LBL_CREATE_CONTACT'               => '取引先担当者として',
	'LBL_CREATE_LEAD'                  => 'リードとして',
	'LBL_CREATE_AND_ADD'               => '作成 & 追加',
	'LBL_CANCEL_CREATE_INVITEE'        => 'キャンセル',
	'LBL_EMPTY_SEARCH_RESULT'          => '結果が見つかりません。通知先を作成してください。',
	'LBL_NO_ACCESS'                    => 'モジュール $module へのアクセス権がありません。',

	'LBL_REPEAT_TYPE'                  => 'リピートタイプ',
	'LBL_REPEAT_INTERVAL'              => 'リピートインターバル',
	'LBL_REPEAT_DOW'                   => 'リピートDOW',
	'LBL_REPEAT_UNTIL'                 => 'リピート～まで',
	'LBL_REPEAT_COUNT'                 => 'リピート回数',
	'LBL_REPEAT_PARENT_ID'             => 'リピート親会社ID',
	'LBL_RECURRING_SOURCE'             => 'リピートソース',

	'LBL_SYNCED_RECURRING_MSG'         => 'このコールは元々他のシステムよりSugarへ同期されました。変更する為には、他のシステムのオリジナルデータを変更後、再度同期を行ってください。',
	'LBL_RELATED_TO'                   => '関連先:',
);
?>