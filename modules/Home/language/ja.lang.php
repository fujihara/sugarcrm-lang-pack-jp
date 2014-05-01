<?php
if (!defined('sugarEntry') || !sugarEntry)
	die('Not A Valid Entry Point');
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
	'LBL_MODULE_NAME'                      => 'Home',
	'LBL_MODULES_TO_SEARCH'                => 'モジュール検索',
	'LBL_NEW_FORM_TITLE'                   => '取引先担当者作成',
	'LBL_FIRST_NAME'                       => '名:',
	'LBL_LAST_NAME'                        => '姓:',
	'LBL_LIST_LAST_NAME'                   => '姓',
	'LBL_PHONE'                            => '電話:',
	'LBL_EMAIL_ADDRESS'                    => 'Eメール:',
	'LBL_MY_PIPELINE_FORM_TITLE'           => 'パイプライン',
	'LBL_PIPELINE_FORM_TITLE'              => '商談ステージ別パイプライン',
	'LBL_CAMPAIGN_ROI_FORM_TITLE'          => 'キャンペーンROI',
	'LBL_MY_CLOSED_OPPORTUNITIES_GAUGE'    => '受注済み商談',
	'LNK_NEW_CONTACT'                      => '取引先担当者作成',
	'LNK_NEW_ACCOUNT'                      => '取引先作成',
	'LNK_NEW_OPPORTUNITY'                  => '商談作成',
	'LNK_NEW_LEAD'                         => 'リード作成',
	'LNK_NEW_CASE'                         => 'ケース作成',
	'LNK_NEW_NOTE'                         => 'ノート作成',
	'LNK_NEW_CALL'                         => 'コール作成',
	'LNK_NEW_EMAIL'                        => 'Eメール作成・保存',
	'LNK_COMPOSE_EMAIL'                    => 'Eメール作成',
	'LNK_NEW_MEETING'                      => 'ミーティング作成',
	'LNK_NEW_TASK'                         => 'タスク作成',
	'LNK_NEW_BUG'                          => '不具合作成',
	'LBL_ADD_BUSINESSCARD'                 => '名刺から作成',
	'ERR_ONE_CHAR'                         => '最低一文字は入力してください。',
	'LBL_OPEN_TASKS'                       => 'タスク',
	'LBL_SEARCH_RESULTS'                   => '検索結果',
	'LBL_SEARCH_RESULTS_IN'                => 'in',
	'LNK_NEW_SEND_EMAIL'                   => 'Eメール作成',
	'LBL_NO_ACCESS'                        => ‘アクセス権がありません。システム管理者に確認してください。’,
	'LBL_NO_RESULTS_IN_MODULE'             => '-- 検索結果なし --',
	'LBL_NO_RESULTS'                       => '<h2>検索結果が見つかりませんでした。検索条件を変えてください。</h2><br>',
	'LBL_NO_RESULTS_TIPS'                  => '<h3>検索のコツ：</h3><ul><li>検索すべきカテゴリが正しく選択されていることを確認してください。</li><li>検索条件を緩やかにしてください。</li><li>それでも検索結果が1件も見つからない場合、詳細検索を試してみてください。</li></ul>',

	'LBL_RELOAD_PAGE'                      => 'このダッシュレットを使用するには<a href=\"javascript: window.location.reload()\">画面をリロード</a>してください。',
	'LBL_ADD_DASHLETS'                     => 'ダッシュレットの追加',
	'LBL_ADD_PAGE'                         => 'ページを追加',
	'LBL_DEL_PAGE'                         => ‘ページを削除’,
	'LBL_WEBSITE_TITLE'                    => ‘ウェブサイト’,
	'LBL_RSS_TITLE'                        => ‘ニュースフィード’,
	'LBL_DELETE_PAGE'                      => 'ページを削除',
	'LBL_CHANGE_LAYOUT'                    => 'レイアウトを変更',
	'LBL_RENAME_PAGE'                      => 'ページをリネーム',
	'LBL_CLOSE_DASHLETS'                   => '完了',
	'LBL_CLOSE_SITEMAP'                    => '閉じる',
	'LBL_OPTIONS'                          => 'オプション',
	// dashlet search fields
	'LBL_TODAY'                            => '今日',
	'LBL_YESTERDAY'                        => '昨日',
	'LBL_TOMORROW'                         => '明日',
	'LBL_LAST_WEEK'                        => '先週',
	'LBL_NEXT_WEEK'                        => '翌週',
	'LBL_LAST_7_DAYS'                      => '過去7日間',
	'LBL_NEXT_7_DAYS'                      => '次の7日間',
	'LBL_LAST_MONTH'                       => '先月',
	'LBL_NEXT_MONTH'                       => '翌月',
	'LBL_LAST_QUARTER'                     => '先四半期',
	'LBL_THIS_QUARTER'                     => '今四半期',
	'LBL_LAST_YEAR'                        => '昨年',
	'LBL_NEXT_YEAR'                        => '翌年',
	'LBL_LAST_30_DAYS'                     => '過去30日',
	'LBL_NEXT_30_DAYS'                     => '次の30日',
	'LBL_THIS_MONTH'                       => '今月',
	'LBL_THIS_YEAR'                        => '今年',
	'LBL_MODULES'                          => 'モジュール',
	'LBL_CHARTS'                           => 'チャート一覧',
	'LBL_TOOLS'                            => 'ツール',
	'LBL_WEB'                              => ‘ウェブ’,
	'LBL_SEARCH_RESULTS'                   => ‘検索結果’,

	// Dashlet Categories
	'dashlet_categories_dom'               => array(
		'Module Views'                        => 'モジュールビュー',
		'Portal'                              => 'ポータル',
		'Charts'                              => 'チャート一覧',
		'Tools'                               => 'ツール',
		'Miscellaneous'                       => 'その他'
	),
	'LBL_MAX_DASHLETS_REACHED'             => '管理者が設定したダッシュレットの最大作成数に達しました。不要なダッシュレットを削除してから新規に作成してください。',
	'LBL_ADDING_DASHLET'                   => 'ダッシュレットの追加中....',
	'LBL_ADDED_DASHLET'                    => 'ダッシュレットが追加されました。',
	'LBL_REMOVE_DASHLET_CONFIRM'           => 'ダッシュレットを削除しても良いですか？',
	'LBL_REMOVING_DASHLET'                 => 'ダッシュレットの削除中....',
	'LBL_REMOVED_DASHLET'                  => 'ダッシュレットが削除されました。',
	'LBL_DASHLET_CONFIGURE_GENERAL'        => '一般',
	'LBL_DASHLET_CONFIGURE_FILTERS'        => 'フィルタ',
	'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY'  => '私のアイテムのみ',
	'LBL_DASHLET_CONFIGURE_TITLE'          => 'タイトル',
	'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS'   => '行の表示',

	'LBL_DASHLET_DELETE'                   => 'ダッシュレットの削除',
	'LBL_DASHLET_REFRESH'                  => 'ダッシュレットの更新',
	'LBL_DASHLET_EDIT'                     => 'ダッシュレットの編集',

	'LBL_TRAINING_TITLE'                   => 'トレーニング',

	'LBL_CREATING_NEW_PAGE'                => '新しいページを作成中...',
	'LBL_NEW_PAGE_FEEDBACK'                => '新しいページを作成しました。ダッシュレットを選択することで新たなコンテンツを追加することができます。',
	'LBL_DELETE_PAGE_CONFIRM'              => 'このページを本当に削除しますか?',
	'LBL_SAVING_PAGE_TITLE'                => 'ページタイトルを保存中...',
	'LBL_RETRIEVING_PAGE'                  => 'ページを取得中...',

	// Default out-of-box names for tabs
	'LBL_HOME_PAGE_1_NAME'                 => 'Ameyo-J x SugarCRM',
	'LBL_HOME_PAGE_2_NAME'                 => 'セールス',
	'LBL_HOME_PAGE_3_NAME'                 => 'サポート',
	'LBL_HOME_PAGE_6_NAME'                 => 'マーケティング',
	'LBL_HOME_PAGE_4_NAME'                 => 'トラッカー',
	'LBL_CLOSE_SITEMAP'                    => ‘閉じる’,

	'LBL_SEARCH'                           => '検索',
	'LBL_CLEAR'                            => 'クリア',

	'LBL_BASIC_CHARTS'                     => '基本チャート',
	'LBL_REPORT_CHARTS'                    => 'レポートチャート',

	'LBL_MY_FAVORITE_REPORT_CHARTS'        => 'お気に入りレポート',
	'LBL_GLOBAL_REPORT_CHARTS'             => 'グローバルチームレポート',
	'LBL_MY_TEAM_REPORT_CHARTS'            => 'チームレポート',
	'LBL_MY_SAVED_REPORT_CHARTS'           => '保存済みレポートチャート',

	'LBL_DASHLET_SEARCH'                   => 'ダッシュレット検索',

	//ABOUT page
	'LBL_VERSION'                          => 'バージョン',
	'LBL_BUILD'                            => 'ビルド',


	'LBL_VIEWLICENSE_COM'                  => '<P>このプログラムはフリーソフトウェアです; the Free Software Foundationにて公開されている<a href=\"LICENSE.txt\" target=\"_blank\" class=\"body\"> GNU General Public License version 3</a>の元、ソースコードヘッダーに追加許諾条項を含めることにより、再配布か/と変更できます。</P>',
	'LBL_ADD_TERM_COM'                     => '<P>The interactive user interfaces in modified source and object code versions of this program must display Appropriate Legal Notices, as required under Section 5 of the GNU General Public License version 3. In accordance with Section 7(b) of the GNU General Public License version 3, these Appropriate Legal Notices must retain the display of the &quot;Powered by SugarCRM&quot; logo. If the display of the logo is not reasonably feasible for technical reasons, the Appropriate Legal Notices must display the words &quot;Powered by SugarCRM&quot;.</P>',

	'LBL_SUGAR_COMMUNITY_EDITION'          => 'Sugar コミュニティエディション',
	'LBL_SUGAR_PROFESSIONAL'               => 'Sugar プロフェッショナル',
	'LBL_SUGAR_ENTERPRISE'                 => 'Sugar エンタープライズ',
	'LBL_AND'                              => 'と',
	'LBL_ARE'                              => 'は',
	'LBL_TRADEMARKS'                       => '商標',
	'LBL_OF'                               => 'の',
	'LBL_FOUNDERS'                         => '創設者',
	'LBL_JOIN_SUGAR_COMMUNITY'             => 'Sugarコミュニティへ参加',
	'LBL_DETAILS_SUGARFORGE'               => 'Sugar拡張機能への協力と開発',
	'LBL_DETAILS_SUGAREXCHANGE'            => '認定済みモジュールの購入と販売',
	'LBL_TRAINING'                         => 'トレーニング',
	'LBL_DETAILS_TRAINING'                 => 'オンラインおよび対話式の教材を使ってSugarの学習',
	'LBL_FORUMS'                           => 'フォーラム',
	'LBL_DETAILS_FORUMS'                   => '経験豊かなコミュニティユーザや開発者と討論',
	'LBL_WIKI'                             => 'Wiki',
	'LBL_DETAILS_WIKI'                     => 'ユーザおよび開発者トピックのナレッジベース検索',
	'LBL_DEVSITE'                          => '開発者向けサイト',
	'LBL_DETAILS_DEVSITE'                  => 'Sugarの開発を加速するリソース、チュートリアル、便利なリンクの発見',
	'LBL_GET_SUGARCRM_RSS'                 => 'SugarCRM RSSを取得',
	'LBL_SUGARCRM_NEWS'                    => 'SugarCRM ニュース',
	'LBL_SUGARCRM_TRAINING_NEWS'           => 'SugarCRM トレーニングニュース',
	'LBL_SUGARCRM_FORUMS'                  => 'SugarCRM フォーラム',
	'LBL_SUGARFORGE_NEWS'                  => 'SugarForge ニュース',
	'LBL_ALL_NEWS'                         => '全てのニュース',
	'LBL_LINK_CURRENT_CONTRIBUTORS'        => '最新のSugarCRMコントリビュータのリストへ!',
	'LBL_SOURCE_CODE'                      => 'ソースコード',
	'LBL_SOURCE_SUGAR'                     => 'Sugar - The world\'s most popular sales force automation application created by SugarCRM Inc.',
	'LBL_SOURCE_XTEMPLATE'                 => 'XTemplate - A template engine for PHP created by Barnabás Debreceni',
	'LBL_SOURCE_NUSOAP'                    => 'NuSOAP - A set of PHP classes that allow developers to create and consume web services created by NuSphere Corporation and Dietrich Ayala',
	'LBL_SOURCE_JSCALENDAR'                => 'JS Calendar - A calendar for entering dates created by Mihai Bazon',
	'LBL_SOURCE_PHPPDF'                    => 'PHP PDF - A library for creating PDF documents created by Wayne Munro',
	'LBL_SOURCE_HTTP_WEBDAV_SERVER'        => 'HTTP_WebDAV_Server - A WebDAV Server Implementation in PHP.',
	'LBL_SOURCE_PCLZIP'                    => 'PclZip - library offers compression and extraction functions for Zip formatted archives by Vincent Blavet',
	'LBL_SOURCE_SMARTY'                    => 'Smarty - A template engine for PHP.',
	'LBL_SOURCE_YAHOO_UI_LIB'              => 'Yahoo! User Interface Library - The UI Library Utilities facilitate the implementation of rich client-side features.',
	'LBL_SOURCE_PHPMAILER'                 => 'PHPMailer - A full featured email transfer class for PHP',
	'LBL_SOURCE_JSHRINK'                   => 'JShrink - A Javascript minifier written in PHP',
	'LBL_SOURCE_CRYPT_BLOWFISH'            => 'Crypt_Blowfish - Allows for quick two-way blowfish encryption without requiring the MCrypt PHP extension.',
	'LBL_SOURCE_XML_HTMLSAX3'              => 'XML_HTMLSax3 - A SAX parser for HTML and other badly formed XML documents',
	'LBL_SOURCE_YAHOO_UI_LIB_EXT'          => 'Yahoo! UI Extensions Library - Extensions to the Yahoo! User Interface Library by Jack Slocum',
	'LBL_SOURCE_SWFOBJECT'                 => 'SWFObject - Javascript Flash Player detection and embed script.',
	'LBL_SOURCE_TINYMCE'                   => 'TinyMCE - A WYSIWYG editor control for web browsers that enables the user to edit HTML contents',
	'LBL_SOURCE_EXT'                       => 'Ext - A client-side JavaScript framework for building web applications.',
	'LBL_SOURCE_RECAPTCHA'                 => 'reCAPTCHA helps prevent automated abuse of your site (such as comment spam or bogus registrations) by using a CAPTCHA to ensure that only humans perform certain actions.',
	'LBL_SOURCE_TCPDF'                     => 'TCPDF - A PHP class for generating PDF documents.',
	'LBL_SOURCE_CSSMIN'                    => 'CssMin - A css parser and minifier.',
	'LBL_SOURCE_PHPSAML'                   => 'PHP-SAML - A simple SAML toolkit for PHP.',
	'LBL_SOURCE_ISCROLL'                   => 'iScroll - The overflow:scroll for mobile webkit.  Native scrolling inside a fixed width/height element.',
	'LBL_SOURCE_FLASHCANVAS'               => 'FlashCanvas - FlashCanvas is a JavaScript library which adds the HTML5 Canvas support to Internet Explorer. It renders shapes and images via Flash drawing API. It supports almost all Canvas APIs and, in many cases, runs faster than other similar libraries which use VML or Silverlight.',
	'LBL_SOURCE_JIT'                       => 'JavaScript InfoVis Toolkit - The JavaScript InfoVis Toolkit provides tools for creating Interactive Data Visualizations for the Web.',
	'LBL_SOURCE_ZEND'                      => 'Zend Framework - An open source, object oriented web application framework for PHP5.',
	'LBL_SOURCE_PARSECSV'                  => 'parseCSV - CSV data parser for PHP',
	'LBL_SOURCE_PHPJS'                     => 'php.js - Use PHP functions in JavaScript',
	'LBL_SOURCE_PHPSQL'                    => 'PHP SQL Parser',
	'LBL_SOURCE_HTMLPURIFIER'              => 'HTML Purifier - A standards-compliant HTML filtering library.',
	'LBL_SOURCE_XHPROF'                    => 'XHProf - A function-level hierarchical profiler for PHP.',
	'LBL_SOURCE_ELASTICA'                  => 'Elastica - PHP client for the distributed search engine elasticsearch ',
	'LBL_SOURCE_FACEBOOKSDK'               => 'Facebook PHP SDK',
	'LBL_SOURCE_JQUERY'                    => 'jQuery - jQuery is a fast, small, and feature-rich JavaScript library.',
	'LBL_SOURCE_JQUERY_UI'                 => 'jQuery UI - jQuery UI is a curated set of user interface interactions, effects, widgets, and themes built on top of the jQuery JavaScript Library.',
	'LBL_SOURCE_OVERLIB'                   => 'OverlibMWS - The overlibmws library uses javascript for DHTML popups that serve as informational and navigational aids for websites.',

	'LBL_DASHLET_TITLE'                    => ‘サイト’,
	'LBL_DASHLET_OPT_TITLE'                => ‘タイトル’,
	'LBL_DASHLET_INCORRECT_URL'            => ‘ウェブサイトのロケーションに誤りがあるようです。’,
	'LBL_DASHLET_OPT_URL'                  => ‘ウェブサイトのロケーション,
	'LBL_DASHLET_OPT_HEIGHT'               => 'ダッシュレット 高さ (ピクセル)',
	'LBL_DASHLET_SUGAR_NEWS'               => 'Sugar News',
	'LBL_DASHLET_DISCOVER_SUGAR_PRO'       => 'Discover Sugar',
	'LBL_POWERED_BY_SUGAR'                 => 'Powered By SugarCRM' /*for 508 compliance fix*/ ,
	'LBL_MORE_DETAIL'                      => '詳細' /*for 508 compliance fix*/ ,
	'LBL_BASIC_SEARCH'                     => '検索' /*for 508 compliance fix*/ ,
	'LBL_ADVANCED_SEARCH'                  => 'オプション検索' /*for 508 compliance fix*/ ,
	'LBL_TOUR_HOME'                        => 'ホームアイコン',
	'LBL_TOUR_HOME_DESCRIPTION'            => 'ホーム画面へ戻る',
	'LBL_TOUR_MODULES'                     => '主要モジュール',
	'LBL_TOUR_MODULES_DESCRIPTION'         => '全ての主要モジュール',
	'LBL_TOUR_MORE'                        => 'その他のモジュール',
	'LBL_TOUR_MORE_DESCRIPTION'            => 'その他のモジュール',
	'LBL_TOUR_SEARCH'                      => 'フルテキスト検索',
	'LBL_TOUR_SEARCH_DESCRIPTION'          => '便利な検索機能です。',
	'LBL_TOUR_NOTIFICATIONS'               => '通知',
	'LBL_TOUR_NOTIFICATIONS_DESCRIPTION'   => 'Sugar アプリケーションの通知はここで参照できます。',
	'LBL_TOUR_PROFILE'                     => 'プロファイル',
	'LBL_TOUR_PROFILE_DESCRIPTION'         => 'プロファイルへのアクセス、設定やログアウト',
	'LBL_TOUR_QUICKCREATE'                 => 'クイック作成',
	'LBL_TOUR_QUICKCREATE_DESCRIPTION'     => 'レコードの簡単作成',
	'LBL_TOUR_FOOTER'                      => '折りたたみ式フッター',
	'LBL_TOUR_FOOTER_DESCRIPTION'          => 'このフッターは簡単に展開・閉じることができます。',
	'LBL_TOUR_CUSTOM'                      => 'カスタムアプリケーション',
	'LBL_TOUR_CUSTOM_DESCRIPTION'          => 'カスタムインテグレーション',
	'LBL_TOUR_BRAND'                       => 'ブランド',
	'LBL_TOUR_BRAND_DESCRIPTION'           => 'あなたのロゴはここに配置されます。',
	'LBL_TOUR_WELCOME'                     => 'Ameyo-J x SugarCRMへようこそ',
	'LBL_TOUR_WATCH'                       => 'Sugarの最新情報を見る',
	'LBL_TOUR_FEATURES'                    => '<ul style=""><li class="icon-ok">新しくシンプルになったナビゲーションバー</li><li class="icon-ok">新しい折りたたみ式フッター</li><li class="icon-ok">Improved Search</li><li class="icon-ok">Updated actions menu</li></ul><p>その他多数</p>',
	'LBL_TOUR_VISIT'                       => 'For more information please visit our application',
	'LBL_TOUR_DONE'                        => '完了！',
	'LBL_TOUR_REFERENCE_1'                 => 'プロファイルタブ内、"サポート"より',
	'LBL_TOUR_REFERENCE_2'                 => 'いつでも参照可能です。',
	'LNK_TOUR_DOCUMENTATION'               => 'ドキュメント',
	'LBL_TOUR_CALENDAR_URL_1'              => 'SugarCRMカレンダーとサードパーティアプリケーション（Microsoft Outlookまたは Exchange）を共有しますか? もしそうなら、私の追加の新しいURL(パーソナルキーを含むセキュアなURL)が必要です。',
	'LBL_TOUR_CALENDAR_URL_2'              => '新しい共有カレンダーURLの取り込み'
);
?>
