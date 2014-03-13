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
	'LBL_USERS'                        => 'アサイン先',
	'LBL_REFRESH'                      => '更新',
	'LBL_EDIT'                         => '編集',
	'LBL_SELECT_USERS'                 => '表示するユーザを選択',
	'LBL_FILTER_BY_TEAM'               => '表示するチームを選択:',
	'LBL_ASSIGNED_TO_NAME'             => 'アサイン先',
	'LBL_DATE'                         => '開始日時',
	'LBL_CREATE_MEETING'               => 'Schedule Meeting',
	'LBL_CREATE_CALL'                  => 'Log Call',
	'LBL_HOURS_ABBREV'                 => 'h',
	'LBL_MINS_ABBREV'                  => 'm',

	'LBL_YES'                          => 'Yes',
	'LBL_NO'                           => 'No',
	'LBL_SETTINGS'                     => 'Settings',
	'LBL_CREATE_NEW_RECORD'            => 'Create Activity',
	'LBL_LOADING'                      => 'Loading ......',
	'LBL_SAVING'                       => 'Saving ......',
	'LBL_SENDING_INVITES'              => 'Saving & Sending Invites .....',
	'LBL_CONFIRM_REMOVE'               => 'Are you sure you want to remove the record?',
	'LBL_CONFIRM_REMOVE_ALL_RECURRING' => 'Are you sure you want to remove all recurring records?',
	'LBL_EDIT_RECORD'                  => 'Edit Activity',
	'LBL_ERROR_SAVING'                 => 'Error while saving',
	'LBL_ERROR_LOADING'                => 'Error while loading',
	'LBL_GOTO_DATE'                    => 'Goto Date',
	'NOTICE_DURATION_TIME'             => 'Duration time must be greater than 0',
	'LBL_STYLE_BASIC'                  => 'Basic',
	'LBL_STYLE_ADVANCED'               => 'Advanced',

	'LBL_INFO_TITLE'                   => 'Additional Details',
	'LBL_INFO_DESC'                    => 'Description',
	'LBL_INFO_START_DT'                => 'Start Date',
	'LBL_INFO_DUE_DT'                  => 'Due Date',
	'LBL_INFO_DURATION'                => 'Duration',
	'LBL_INFO_NAME'                    => 'Subject',
	'LBL_INFO_RELATED_TO'              => 'Related to',

	'LBL_NO_USER'                      => 'No match for field: Assigned to',
	'LBL_SUBJECT'                      => 'Subject',
	'LBL_DURATION'                     => 'Duration',
	'LBL_STATUS'                       => 'Status',
	'LBL_DATE_TIME'                    => 'Date and Time',

	'LBL_SETTINGS_TITLE'               => 'Settings',
	'LBL_SETTINGS_DISPLAY_TIMESLOTS'   => 'Display time slots in Day and Week views:',
	'LBL_SETTINGS_TIME_STARTS'         => 'Start time:',
	'LBL_SETTINGS_TIME_ENDS'           => 'End time:',
	'LBL_SETTINGS_CALLS_SHOW'          => 'Show Calls:',
	'LBL_SETTINGS_TASKS_SHOW'          => 'Show Tasks:',
	'LBL_SETTINGS_COMPLETED_SHOW'      => 'Show Completed Meetings, Calls and Tasks:',

	'LBL_SAVE_BUTTON'                  => 'Save',
	'LBL_DELETE_BUTTON'                => 'Delete',
	'LBL_APPLY_BUTTON'                 => 'Apply',
	'LBL_SEND_INVITES'                 => 'Save & Send Invites',
	'LBL_CANCEL_BUTTON'                => 'Cancel',
	'LBL_CLOSE_BUTTON'                 => 'Close',

	'LBL_GENERAL_TAB'                  => 'Details',
	'LBL_PARTICIPANTS_TAB'             => 'Invitees',
	'LBL_REPEAT_TAB'                   => 'Recurrence',

	'LBL_REPEAT_TYPE'                  => 'Repeat',
	'LBL_REPEAT_INTERVAL'              => 'Every',
	'LBL_REPEAT_END'                   => 'End',
	'LBL_REPEAT_END_AFTER'             => 'After',
	'LBL_REPEAT_OCCURRENCES'           => 'recurrences',
	'LBL_REPEAT_END_BY'                => 'By',
	'LBL_REPEAT_DOW'                   => 'On',
	'LBL_REPEAT_UNTIL'                 => 'Repeat Until',
	'LBL_REPEAT_COUNT'                 => 'Number of recurrences',
	'LBL_REPEAT_LIMIT_ERROR'           => 'Your request was going to create more than $limit meetings.',

	'LBL_EDIT_ALL_RECURRENCES'         => 'Edit All Recurrences',
	'LBL_REMOVE_ALL_RECURRENCES'       => 'Delete All Recurrences',

	'LBL_DATE_END_ERROR'               => 'End date is before start date',
	'ERR_YEAR_BETWEEN'                 => 'Sorry, calendar cannot handle the year you requested<br>Year must be between 1970 and 2037',
	'ERR_NEIGHBOR_DATE'                => 'get_neighbor_date_str: not defined for this view',

);

$mod_list_strings                   = array (
	'dom_cal_weekdays'                 => array (
		"Sun",
		"Mon",
		"Tue",
		"Wed",
		"Thu",
		"Fri",
		"Sat",
	),
	'dom_cal_weekdays_long'            => array (
		"Sunday",
		"Monday",
		"Tuesday",
		"Wednesday",
		"Thursday",
		"Friday",
		"Saturday",
	),
	'dom_cal_month'                    => array (
		"",
		"Jan",
		"Feb",
		"Mar",
		"Apr",
		"May",
		"Jun",
		"Jul",
		"Aug",
		"Sep",
		"Oct",
		"Nov",
		"Dec",
	),
	'dom_cal_month_long'               => array (
		"",
		"January",
		"February",
		"March",
		"April",
		"May",
		"June",
		"July",
		"August",
		"September",
		"October",
		"November",
		"December",
	),
);
?>
