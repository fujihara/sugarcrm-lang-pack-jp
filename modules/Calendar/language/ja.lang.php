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
	'LBL_MODULE_NAME'                  => 'カレンダー',
	'LBL_MODULE_TITLE'                 => 'カレンダー',
	'LNK_NEW_CALL'                     => 'コール作成',
	'LNK_NEW_MEETING'                  => 'ミーティング作成',
	'LNK_NEW_APPOINTMENT'              => 'アポイント作成',
	'LNK_NEW_TASK'                     => 'タスク作成',
	'LNK_CALL_LIST'                    => 'コール',
	'LNK_MEETING_LIST'                 => 'ミーティング',
	'LNK_TASK_LIST'                    => 'タスク',
	'LNK_VIEW_CALENDAR'                => '今日',
	'LNK_IMPORT_CALLS'                 => 'コールをインポート',
	'LNK_IMPORT_MEETINGS'              => 'ミーティングをインポート',
	'LNK_IMPORT_TASKS'                 => 'タスクをインポート',
	'LBL_MONTH'                        => '月',
	'LBL_DAY'                          => '日',
	'LBL_YEAR'                         => '年',
	'LBL_WEEK'                         => '週',
	'LBL_PREVIOUS_MONTH'               => '前月',
	'LBL_PREVIOUS_DAY'                 => '前日',
	'LBL_PREVIOUS_YEAR'                => '前年',
	'LBL_PREVIOUS_WEEK'                => '前週',
	'LBL_NEXT_MONTH'                   => '翌月',
	'LBL_NEXT_DAY'                     => '翌日',
	'LBL_NEXT_YEAR'                    => '翌年',
	'LBL_NEXT_WEEK'                    => '翌週',
	'LBL_AM'                           => 'AM',
	'LBL_PM'                           => 'PM',
	'LBL_SCHEDULED'                    => 'スケジュール済み',
	'LBL_BUSY'                         => '予定あり',
	'LBL_CONFLICT'                     => '他のスケジュールと重複',
	'LBL_USER_CALENDARS'               => 'ユーザのカレンダー',
	'LBL_SHARED'                       => '共有',
	'LBL_PREVIOUS_SHARED'              => '前週',
	'LBL_NEXT_SHARED'                  => '翌週',
	'LBL_SHARED_CAL_TITLE'             => '共有カレンダー',
	'LBL_USERS'                        => '担当ユーザ',
	'LBL_REFRESH'                      => '更新',
	'LBL_EDIT'                         => '編集',
	'LBL_SELECT_USERS'                 => '表示するユーザを選択',
	'LBL_FILTER_BY_TEAM'               => '表示するチームを選択:',
	'LBL_ASSIGNED_TO_NAME'             => '担当ユーザ',
	'LBL_DATE'                         => '開始日時',
	'LBL_CREATE_MEETING'               => 'ミーティング作成',
	'LBL_CREATE_CALL'                  => 'コール作成',
	'LBL_HOURS_ABBREV'                 => '時',
	'LBL_MINS_ABBREV'                  => '分',

	'LBL_YES'                          => 'はい',
	'LBL_NO'                           => 'いいえ',
	'LBL_SETTINGS'                     => '設定',
	'LBL_CREATE_NEW_RECORD'            => '活動作成',
	'LBL_LOADING'                      => '読込中 ......',
	'LBL_SAVING'                       => '保存中 ......',
	'LBL_SENDING_INVITES'              => '保存中 & 招待リクエスト送信中 .....',
	'LBL_CONFIRM_REMOVE'               => 'レコードを削除しても宜しいですか？',
	'LBL_CONFIRM_REMOVE_ALL_RECURRING' => '全てのレコードを削除しても宜しいですか？',
	'LBL_EDIT_RECORD'                  => '活動を編集',
	'LBL_ERROR_SAVING'                 => '保存エラー',
	'LBL_ERROR_LOADING'                => '読込エラー',
	'LBL_GOTO_DATE'                    => '日付へ',
	'NOTICE_DURATION_TIME'             => '期間は0以上を設定してください。',
	'LBL_STYLE_BASIC'                  => '基本',
	'LBL_STYLE_ADVANCED'               => '詳細',

	'LBL_INFO_TITLE'                   => '詳細',
	'LBL_INFO_DESC'                    => '説明',
	'LBL_INFO_START_DT'                => '開始日',
	'LBL_INFO_DUE_DT'                  => '期限',
	'LBL_INFO_DURATION'                => '期間',
	'LBL_INFO_NAME'                    => '表題',
	'LBL_INFO_RELATED_TO'              => '関連',

	'LBL_NO_USER'                      => 'No match for field: Assigned to',
	'LBL_SUBJECT'                      => '表題',
	'LBL_DURATION'                     => '期間',
	'LBL_STATUS'                       => 'ステータス',
	'LBL_DATE_TIME'                    => '日時',

	'LBL_SETTINGS_TITLE'               => '設定',
	'LBL_SETTINGS_DISPLAY_TIMESLOTS'   => 'Display time slots in Day and Week views:',
	'LBL_SETTINGS_TIME_STARTS'         => '開始時間:',
	'LBL_SETTINGS_TIME_ENDS'           => '終了時間:',
	'LBL_SETTINGS_CALLS_SHOW'          => 'Show Calls:',
	'LBL_SETTINGS_TASKS_SHOW'          => 'Show Tasks:',
	'LBL_SETTINGS_COMPLETED_SHOW'      => 'Show Completed Meetings, Calls and Tasks:',

	'LBL_SAVE_BUTTON'                  => '保存',
	'LBL_DELETE_BUTTON'                => '削除',
	'LBL_APPLY_BUTTON'                 => '適用',
	'LBL_SEND_INVITES'                 => '保存 & 招待',
	'LBL_CANCEL_BUTTON'                => 'キャンセル',
	'LBL_CLOSE_BUTTON'                 => '閉じる',

	'LBL_GENERAL_TAB'                  => '詳細',
	'LBL_PARTICIPANTS_TAB'             => '招待者',
	'LBL_REPEAT_TAB'                   => 'リピート',

	'LBL_REPEAT_TYPE'                  => 'リピート',
	'LBL_REPEAT_INTERVAL'              => '毎',
	'LBL_REPEAT_END'                   => 'End',
	'LBL_REPEAT_END_AFTER'             => 'After',
	'LBL_REPEAT_OCCURRENCES'           => 'recurrences',
	'LBL_REPEAT_END_BY'                => 'By',
	'LBL_REPEAT_DOW'                   => 'On',
	'LBL_REPEAT_UNTIL'                 => 'Repeat Until',
	'LBL_REPEAT_COUNT'                 => '回数',
	'LBL_REPEAT_LIMIT_ERROR'           => ' $limit を超える数のミーティングを作成できません',

	'LBL_EDIT_ALL_RECURRENCES'         => 'Edit All Recurrences',
	'LBL_REMOVE_ALL_RECURRENCES'       => 'Delete All Recurrences',

	'LBL_DATE_END_ERROR'               => 'End date is before start date',
	'ERR_YEAR_BETWEEN'                 => 'Sorry, calendar cannot handle the year you requested<br>Year must be between 1970 and 2037',
	'ERR_NEIGHBOR_DATE'                => 'get_neighbor_date_str: not defined for this view',

);

$mod_list_strings                   = array (
	'dom_cal_weekdays'                 => array (
		"日",
		"月",
		"火",
		"水",
		"木",
		"金",
		"土",
	),
	'dom_cal_weekdays_long'            => array (
		"日",
		"月",
		"火",
		"水",
		"木",
		"金",
		"土",
	),
	'dom_cal_month'                    => array (
		"",
		"1月",
		"2月",
		"3月",
		"4月",
		"5月",
		"6月",
		"7月",
		"8月",
		"9月",
		"10月",
		"11月",
		"12月",
	),
	'dom_cal_month_long'               => array (
		"",
		"1月",
		"2月",
		"3月",
		"4月",
		"5月",
		"6月",
		"7月",
		"8月",
		"9月",
		"10月",
		"11月",
		"12月",
	),
);
?>