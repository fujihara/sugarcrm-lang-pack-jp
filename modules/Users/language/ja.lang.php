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

$mod_strings                                    = array(
	'LBL_DELETE_USER_CONFIRM'                      => 'When the User record is deleted, the corresponding Employee record will also be deleted. After the user is deleted, any workflow definitions and reports involving the user might need to be updated.<br/><br/>' . 'Deleting a User record cannot be undone.',
	'LBL_DELETE_GROUP_CONFIRM'                     => 'Are you sure you want to delete this Group User? Click OK to delete the User record.<br/>After clicking OK, you will be given the ability to reassign records assigned to the Group User to another user.',
	'LBL_DELETE_PORTAL_CONFIRM'                    => 'Are you sure you want to delete this Portal API User? Click OK to delete the User record.',
	'LBL_DELETE_USER_CONFIRM'                      => 'When the User record is deleted, the corresponding Employee record will also be deleted.<br/><br/>' . 'Click OK to delete the User record.',

	'LNK_IMPORT_USERS'                             => 'データインポート',
	'ERR_DELETE_RECORD'                            => '取引先を削除するにはレコード番号を指定する必要があります。',
	'ERR_EMAIL_INCORRECT'                          => 'Provide a valid email address in order to create and send the password.',
	'ERR_EMAIL_NO_OPTS'                            => 'インバウンドメール用の最適設定が見つかりませんでした。',
	'ERR_ENTER_CONFIRMATION_PASSWORD'              => '確認のため再度パスワードを入力してください。',
	'ERR_ENTER_NEW_PASSWORD'                       => '新しいパスワードを入力してください。',
	'ERR_ENTER_OLD_PASSWORD'                       => '古いパスワードを入力してください。',
	'ERR_IE_FAILURE1'                              => '[クリックで戻る]',
	'ERR_IE_FAILURE2'                              => '電子メールアカウントでの接続に問題がありました。設定を確認して再度試行してください。',
	'ERR_IE_MISSING_REQUIRED'                      => 'インバウンド電子メール設定の必要な情報が足りません。設定を確認して再実行してください。インバウンド電子メールを設定していない場合は、このセクションのすべてのフィールドをクリアして下さい。',
	'ERR_INVALID_PASSWORD'                         => '正しいユーザ名とパスワードを指定してください。',
	'ERR_NO_LOGIN_MOBILE'                          => 'このアプリケーションの最初のログインはモバイルではないブラウザかノーマルモードで完了しなければいけません。フルブラウザでアクセスしなおすか以下のノーマルリンクをクリックしてください。ご不便をおかけして申し訳ありません。',
	'ERR_LAST_ADMIN_1'                             => 'ユーザ名',
	'ERR_LAST_ADMIN_2'                             => 'は最後の管理者ユーザです。最低一人は管理者である必要があります。<br>',
	'ERR_PASSWORD_CHANGE_FAILED_1'                 => 'ユーザパスワードの変更ができませんでした: ',
	'ERR_PASSWORD_CHANGE_FAILED_2'                 => ' 失敗しました。新しいパスワードを設定してください。',
	'ERR_PASSWORD_CHANGE_FAILED_3'                 => '.	The new password is invalid.',
	'ERR_PASSWORD_INCORRECT_OLD_1'                 => '次のユーザの旧パスワードが不正です: ',
	'ERR_PASSWORD_INCORRECT_OLD_2'                 => ' パスワードを再入力して下さい。',
	'ERR_PASSWORD_MISMATCH'                        => 'パスワードがマッチしませんでした。',
	'ERR_PASSWORD_USERNAME_MISSMATCH'              => 'You must specify a valid User Name and Email Address.',
	'ERR_PASSWORD_LINK_EXPIRED'                    => 'Your link has expired, please generate a new one',
	'ERR_REENTER_PASSWORDS'                        => '新しいパスワードと確認パスワードが一致しません。再度パスワードを入力してください。',
	'ERR_REPORT_LOOP'                              => 'システムは報告ルートがループしていることを検出しました。ユーザは自身を上司にすることはできません。また、上司がユーザを報告先にすることも出来ません。',
	'ERR_RULES_NOT_MET'                            => 'The password you entered did not meet the password requirements.  Please try again.',
	'ERR_USER_INFO_NOT_FOUND'                      => 'User Information not found',
	'ERR_USER_NAME_EXISTS_1'                       => 'ユーザ名,',
	'ERR_USER_NAME_EXISTS_2'                       => 'は既に存在します。ユーザ名の重複はできません。<br>',
	'ERR_USER_IS_LOCKED_OUT'                       => 'This user is locked out of the Sugar application and cannot log in using his/her existing password.',

	'LBL_PASSWORD_SENT'                            => 'パスワードが更新されました。',
	'LBL_CANNOT_SEND_PASSWORD'                     => 'パスワードを送信できませんでした。',
	'ERR_EMAIL_NOT_SENT_ADMIN'                     => 'リクエストエラー:',
	'ERR_SMTP_URL_SMTP_PORT'                       => 'SMTPサーバURLとポートt',
	'ERR_SMTP_USERNAME_SMTP_PASSWORD'              => 'SMTPユーザ名とSMTPパスワード',
	'ERR_RECIPIENT_EMAIL'                          => 'エラー：Recipient Email',
	'ERR_SERVER_STATUS'                            => 'サーバステータスエラー',
	'ERR_SERVER_SMTP_EMPTY'                        => 'エラー： SMTPの設定を確認してください。 <a href="index.php?module=EmailMan&action=config">Eメール設定</a>.',

	'LBL_ADDRESS_CITY'                             => '住所 市区町村',
	'LBL_ADDRESS_COUNTRY'                          => '住所 国',
	'LBL_ADDRESS_INFORMATION'                      => '住所情報',
	'LBL_ADDRESS_POSTALCODE'                       => '住所 郵便番号',
	'LBL_ADDRESS_STATE'                            => '住所 都道府県',
	'LBL_ADDRESS_STREET'                           => '住所 番地',
	'LBL_ADDRESS'                                  => '住所',
	'LBL_ADMIN_USER'                               => 'システム管理者',

	'LBL_ADMIN_DESC'                               => 'ユーザはシステム管理ページと全てのレコードにアクセス可能',
	'LBL_REGULAR_DESC'                             => 'ユーザは役割に応じたモジュールとレコードにアクセス可能',

	'LBL_ADMIN'                                    => '管理者',
	'LBL_ADVANCED'                                 => '詳細設定',
	'LBL_ANY_ADDRESS'                              => '全てのアドレス:',
	'LBL_ANY_EMAIL'                                => 'Eメール',
	'LBL_ANY_PHONE'                                => '電話番号',
	'LBL_BUTTON_CREATE'                            => '作成',
	'LBL_BUTTON_EDIT'                              => '編集',
	'LBL_CALENDAR_OPTIONS'                         => 'カレンダーオプション',
	'LBL_CHANGE_PASSWORD'                          => 'パスワード変更',
	'LBL_CHANGE_SYSTEM_PASSWORD'                   => '新しいパスワードを入力してください。',
	'LBL_CHANGE_PASSWORD_TITLE'                    => 'パスワード',
	'LBL_CHOOSE_A_KEY'                             => '許可無いカレンダーのパブリッシュを防ぐキー',
	'LBL_NO_KEY'                                   => 'キーが設定されていません。キーを設定してください。',
	'LBL_CHOOSE_WHICH'                             => '表示するタブの選択',
	'LBL_CITY'                                     => '市区町村',

	'LBL_CLEAR_BUTTON_TITLE'                       => 'クリア',

	'LBL_CONFIRM_PASSWORD'                         => 'パスワードの確認',
	'LBL_CONFIRM_REGULAR_USER'                     => 'ユーザタイプをシステム管理者からレギュラーユーザへ変更しました。この変更を保存すると、このユーザはシステム管理者の権限を失います。 \\n\\nClick OK \\nClick キャンセル',
	'LBL_COUNTRY'                                  => '国',
	'LBL_CURRENCY_TEXT'                            => 'デフォルトの通貨を選択してください。',
	'LBL_CURRENCY'                                 => '通貨名',
	'LBL_CURRENCY_EXAMPLE'                         => '通貨表示のサンプル',
	'LBL_CURRENCY_SIG_DIGITS'                      => '通貨の精度',
	'LBL_CURRENCY_SIG_DIGITS_DESC'                 => '通貨表示において表示する小数点以下の桁数を指定します。',
	'LBL_NUMBER_GROUPING_SEP'                      => '1000位セパレータ',
	'LBL_NUMBER_GROUPING_SEP_TEXT'                 => '1000位の区切り文字を指定します。',
	'LBL_DECIMAL_SEP'                              => '小数点シンボル',
	'LBL_DECIMAL_SEP_TEXT'                         => '小数点を区切る文字を指定します。',
	'LBL_FDOW'                                     => '週の最初の曜日',
	'LBL_FDOW_TEXT'                                => '週の最初の曜日が表示されます。',
	'LBL_DATE_FORMAT_TEXT'                         => '日付スタンプ用のフォーマットを設定します。',
	'LBL_DATE_FORMAT'                              => '日付フォーマット',
	'LBL_DEFAULT_SUBPANEL_TITLE'                   => 'ユーザ',
	'LBL_DEPARTMENT'                               => '部署',
	'LBL_DESCRIPTION'                              => '詳細',
	'LBL_DISPLAY_TABS'                             => '表示タブ',
	'LBL_DOWNLOADS'                                => 'ダウンロード',
	'LBL_DST_INSTRUCTIONS'                         => '(+DST) は、サマータイムが設定されていることを示しています。',
	'LBL_EDIT_TABS'                                => 'タブ編集',
	'LBL_EDIT'                                     => '編集',
	'LBL_USER_HASH'                                => 'パスワード',
	'LBL_AUTHENTICATE_ID'                          => '認証ID',
	'LBL_ACCOUNT_NAME'                             => 'アカウント名',
	'LBL_USER_PREFERENCES'                         => 'ユーザプリファレンス',
	'LBL_EXT_AUTHENTICATE'                         => '外部認証',
	'LBL_EMAIL_OTHER'                              => 'その他Eメール',
	'LBL_EMAIL'                                    => 'Eメール',
	'LBL_EMAIL_CHARSET'                            => '送信メール',
	'LBL_EMAIL_EDITOR_OPTION'                      => '作成フォーマット',
	'LBL_EMAIL_GMAIL_DEFAULTS'                     => 'Gmailのデフォルト設定を埋め込む',
	'LBL_EMAIL_LINK_TYPE'                          => '電子メールクライアント',

	'LBL_EMAIL_LINK_TYPE_HELP'                     => '<b>Sugarメールクライアント:</b>メール送信の為にSugarアプリケーションのメールクライアントを使用します。<br><b>外部メールクライアント:</b>メール送信の為にSugarアプリケーション以外のメールクライアント（Microsoft Outlook等）を使用します。',

	'LBL_EMAIL_NOT_SENT'                           => 'リクエストを受けることができませんでした。システム管理者へお問い合わせください。',
	'LBL_EMAIL_PROVIDER'                           => 'Eメールプロバイダー',
	'LBL_EMAIL_SHOW_COUNTS'                        => 'メール件数を表示？',
	'LBL_EMAIL_SIGNATURE_ERROR1'                   => 'シグニチャには名前が必要です。',
	'LBL_EMAIL_SMTP_SSL'                           => 'SMTP over SSLを有効',
	'LBL_EMAIL_TEMPLATE_MISSING'                   => 'Eメールテンプレートが未選択です。パスワード管理ページにてEメールテンプレートを選択してください。',
	'LBL_EMPLOYEE_STATUS'                          => '従業員のステータス',
	'LBL_EMPLOYEE_INFORMATION'                     => '従業員情報',
	'LBL_ERROR'                                    => 'エラー',
	'LBL_EXPORT_CHARSET'                           => 'エクスポート時の文字コード',
	'LBL_EXPORT_CHARSET_DESC'                      => '適切な文字コードを選択してください（vCardもしくはcsvエクスポート）。',
	'LBL_EXPORT_DELIMITER'                         => 'エクスポート時の区切り文字',
	'LBL_EXPORT_DELIMITER_DESC'                    => 'エクスポートを区切る文字（列）を指定してください。',
	'LBL_FAX_PHONE'                                => 'FAX',
	'LBL_FAX'                                      => 'FAX',
	'LBL_FIRST_NAME'                               => '名',
	'LBL_GENERATE_PASSWORD_BUTTON_KEY'             => 'G',
	'LBL_SYSTEM_GENERATED_PASSWORD'                => 'システムパスワード生成',
	'LBL_GENERATE_PASSWORD_BUTTON_LABEL'           => 'リセットパスワード',
	'LBL_GENERATE_PASSWORD_BUTTON_TITLE'           => 'リセットパスワード [Alt+G]',
	'LBL_GENERATE_PASSWORD'                        => 'リセットパスワード',
	'LBL_GROUP_DESC'                               => 'グループユーザとして振る舞います。このユーザはSugarのWeb画面からログインすることができません。このユーザはインバウンドメールをグループにアサインするためだけに利用されます。',
	'LBL_GROUP_USER_STATUS'                        => 'グループユーザ',
	'LBL_GROUP_USER'                               => 'グループユーザ',
	'LBL_HIDE_TABS'                                => '非表示タブ',
	'LBL_HOME_PHONE'                               => '自宅の電話番号',
	'LBL_INBOUND_TITLE'                            => '取引先情報',
	'LBL_IS_ADMIN'                                 => '管理者',
	'LBL_LANGUAGE'                                 => '言語',
	'LBL_LAST_NAME'                                => '姓',
	'LBL_LAST_NAME_SLASH_NAME'                     => '姓/名',
	'LBL_LAYOUT_OPTIONS'                           => 'レイアウトオプション',
	'LBL_LDAP'                                     => 'LDAP',
	'LBL_LDAP_AUTHENTICATION'                      => 'LDAP認証',
	'LBL_LIST_ACCEPT_STATUS'                       => '承認ステータス',
	'LBL_LIST_ADMIN'                               => '管理',
	'LBL_LIST_DEPARTMENT'                          => '部署',
	'LBL_LIST_EMAIL'                               => 'Eメール',
	'LBL_LIST_FORM_TITLE'                          => 'ユーザ',
	'LBL_LIST_GROUP'                               => 'グループ',
	'LBL_LIST_LAST_NAME'                           => '姓',
	'LBL_LIST_MEMBERSHIP'                          => 'メンバーシップ',
	'LBL_LIST_NAME'                                => '名前',
	'LBL_LIST_PRIMARY_PHONE'                       => '電話',
	'LBL_LIST_PASSWORD'                            => 'パスワード',
	'LBL_LIST_STATUS'                              => 'ステータス',
	'LBL_LIST_TITLE'                               => '職位',
	'LBL_LIST_USER_NAME'                           => 'ユーザ名',
	'LBL_LOCALE_DEFAULT_NAME_FORMAT'               => '名前の表記フォーマット',
	'LBL_LOCALE_DESC_FIRST'                        => '[名]',
	'LBL_LOCALE_DESC_LAST'                         => '[姓]',
	'LBL_LOCALE_DESC_SALUTATION'                   => '[敬称]',
	'LBL_LOCALE_DESC_TITLE'                        => '[タイトル]',
	'LBL_LOCALE_EXAMPLE_NAME_FORMAT'               => '例',
	'LBL_LOCALE_NAME_FORMAT_DESC'                  => '氏名を表示する形式を指定してください。',
	'LBL_LOCALE_NAME_FORMAT_DESC_2'                => '<i>\"s\" 敬称<br>\"f\" 名<br>\"l\" 姓</i>',
	'LBL_SAVED_SEARCH'                             => '保存済みビュー',
	// LOGIN PAGE STRINGS
	'LBL_LOGIN_BUTTON_KEY'                         => 'L',
	'LBL_LOGIN_BUTTON_LABEL'                       => 'ログイン',
	'LBL_LOGIN_BUTTON_TITLE'                       => 'ログイン [Alt+L]',
	'LBL_LOGIN_WELCOME_TO'                         => 'ようこそ',
	'LBL_LOGIN_OPTIONS'                            => 'オプション',
	'LBL_LOGIN_FORGOT_PASSWORD'                    => 'パスワードをお忘れですか？',
	'LBL_LOGIN_SUBMIT'                             => '認証',
	'LBL_LOGIN_ATTEMPTS_OVERRUN'                   => 'ログイン施行回数制限の超過',
	'LBL_LOGIN_LOGIN_TIME_ALLOWED'                 => 'ログイン施行回数制限：',
	'LBL_LOGIN_LOGIN_TIME_DAYS'                    => '日',
	'LBL_LOGIN_LOGIN_TIME_HOURS'                   => '時',
	'LBL_LOGIN_LOGIN_TIME_MINUTES'                 => '分',
	'LBL_LOGIN_LOGIN_TIME_SECONDS'                 => '秒',
	'LBL_LOGIN_ADMIN_CALL'                         => 'システム管理者へお問い合わせください。',
	// END LOGIN PAGE STRINGS
	'LBL_LOGGED_OUT_1'                             => 'ログアウトされました。 ログインするには、 ',
	'LBL_LOGGED_OUT_2'                             => 'ココ',
	'LBL_LOGGED_OUT_3'                             => '.',
	'LBL_MAIL_FROMADDRESS'                         => 'Reply-toアドレス',
	'LBL_MAIL_FROMNAME'                            => 'Reply-to名前',
	'LBL_MAIL_OPTIONS_TITLE'                       => '電子メールオプション',
	'LBL_MAIL_SENDTYPE'                            => 'メール送信エージェント',
	'LBL_MAIL_SMTPAUTH_REQ'                        => 'SMTP認証を使用？',
	'LBL_MAIL_SMTPPORT'                            => 'SMTPポート',
	'LBL_MAILMERGE_TEXT'                           => 'メールマージを有効にします。メールマージを使用するには管理者がシステム設定で有効にする必要があります。',
	'LBL_MAILMERGE'                                => 'メールマージ',
	'LBL_MAX_TAB'                                  => 'タブの数',
	'LBL_MAX_TAB_DESCRIPTION'                      => 'オーバーフローメニュー直前まで上部に表示されるタブ数を指定します。',
	'LBL_MAX_SUBTAB'                               => 'サブタブの数',
	'LBL_MAX_SUBTAB_DESCRIPTION'                   => 'オーバーフローメニュー直前までに表示されるタブあたりのサブタブ数を指定します。',
	'LBL_MESSENGER_ID'                             => 'IM名',
	'LBL_MESSENGER_TYPE'                           => 'IMタイプ',
	'LBL_MOBILE_PHONE'                             => '携帯電話',
	'LBL_MODIFIED_BY'                              => '更新者',
	'LBL_CREATED_BY_NAME'                          => '作成者', //bug 48978
	'LBL_MODIFIED_BY_ID'                           => '更新者ID',
	'LBL_MODULE_NAME'                              => 'ユーザ',
	'LBL_MODULE_TITLE'                             => 'ユーザ: ホーム',
	'LBL_NAME'                                     => '名前',
	'LBL_SIGNATURE_NAME'                           => '名前',
	'LBL_NAVIGATION_PARADIGM'                      => 'ナビゲーション',
	'LBL_NAVIGATION_PARADIGM_DESCRIPTION'          => 'モジュールをグループ化して表示するか、個別にタブとして表示するかを指定します。',
	'LBL_USE_GROUP_TABS'                           => 'グループモジュール',
	'LBL_NEW_FORM_TITLE'                           => 'ユーザ作成',
	'LBL_NEW_PASSWORD'                             => '新パスワード',
	'LBL_NEW_PASSWORD1'                            => 'パスワード',
	'LBL_NEW_PASSWORD2'                            => 'パスワードの確認',
	'LBL_NEW_USER_PASSWORD_1'                      => 'パスワードは正常に変更されました。',
	'LBL_NEW_USER_PASSWORD_2'                      => '自動生成されたパスワードをEメールにて送信しました。',
	'LBL_NEW_USER_PASSWORD_3'                      => 'パスワードは正常に作成されました。',
	'LBL_NEW_USER_BUTTON_KEY'                      => 'N',
	'LBL_NEW_USER_BUTTON_LABEL'                    => 'ユーザ作成',
	'LBL_NEW_USER_BUTTON_TITLE'                    => 'ユーザ作成 [Alt+N]',
	'LBL_NORMAL_LOGIN'                             => 'ノーマルビューへ切り替え',
	'LBL_NOTES'                                    => 'ノート',
	'LBL_OFFICE_PHONE'                             => '電話',
	'LBL_OLD_PASSWORD'                             => '旧パスワード',
	'LBL_OTHER_EMAIL'                              => '他のメールアドレス',
	'LBL_OTHER_PHONE'                              => '他の電話番号',
	'LBL_OTHER'                                    => 'その他',
	'LBL_PASSWORD'                                 => 'パスワード',
	'LBL_PASSWORD_GENERATED'                       => '新しいパスワード生成',
	'LBL_PASSWORD_EXPIRATION_LOGIN'                => 'パスワードの期限が切れました。新しいパスワードを登録してください。',
	'LBL_PASSWORD_EXPIRATION_GENERATED'            => 'パスワードが自動生成されました。',
	'LBL_PASSWORD_EXPIRATION_TIME'                 => 'パスワードの期限が切れました。新しいパスワードを登録してください。',

	'LBL_PSW_MODIFIED'                             => 'パスワード発行日',
	'LBL_PHONE'                                    => '電話',
	'LBL_PICK_TZ_WELCOME'                          => 'Sugarにようこそ。',
	'LBL_PICK_TZ_DESCRIPTION'                      => '継続する前に、タイムゾーンを確認してください。以下から適切なタイムゾーンを選択して保存を押下してください。タイムゾーンは後でユーザ設定から変更できます。',
	'LBL_PORTAL_ONLY_DESC'                         => ' ',
	'LBL_PORTAL_ONLY_USER'                         => 'ポータルAPIユーザ',
	'LBL_POSTAL_CODE'                              => '郵便番号',
	'LBL_PRIMARY_ADDRESS'                          => '主となる住所',
	'LBL_PROMPT_TIMEZONE_TEXT'                     => 'ログイン時にタイムゾーン設定をユーザにプロンプトします。',
	'LBL_PROMPT_TIMEZONE'                          => 'タイムゾーンの入力',
	'LBL_PROVIDE_USERNAME_AND_EMAIL'               => 'ユーザ名とEメールを入力してください。',
	'LBL_PUBLISH_KEY'                              => 'パブリッシュキー',
	
	'LBL_RECAPTCHA_NEW_CAPTCHA'                    => 'その他のキャプチャを取得',
	'LBL_RECAPTCHA_SOUND'                          => '音声切替',
	'LBL_RECAPTCHA_IMAGE'                          => '画像切替',
	'LBL_RECAPTCHA_INSTRUCTION'                    => '２つの単語を入力してください。',
	'LBL_RECAPTCHA_INSTRUCTION_OPPOSITE'           => '２つの単語を入力してください。',
	'LBL_RECAPTCHA_FILL_FIELD'                     => '表示された画像の文字を入力してください。',
	'LBL_RECAPTCHA_INVALID_PRIVATE_KEY'            => '無効なキャプチャプライベートキー',
	'LBL_RECAPTCHA_INVALID_REQUEST_COOKIE'         => 'キャプチャ認証失敗',
	'LBL_RECAPTCHA_UNKNOWN'                        => 'キャプチャ認証失敗r',

	'LBL_RECEIVE_NOTIFICATIONS_TEXT'               => 'レコードがアサインされた場合にメールで通知されます。',
	'LBL_RECEIVE_NOTIFICATIONS'                    => 'アサインの通知',
	'LBL_REGISTER'                                 => '新規ユーザですか？登録してください。',
	'LBL_REGULAR_USER'                             => 'レギュラーユーザ',
	'LBL_REMINDER_TEXT'                            => 'コール・ミーティングのリマインドを設定します。',
	'LBL_REMINDER'                                 => '通知する',
	'LBL_REMINDER_POPUP'                           => 'ポップアップ',
	'LBL_REMINDER_EMAIL'                           => 'Eメール',
	'LBL_REMINDER_EMAIL_ALL_INVITEES'              => '全ての招待客へメール',
	'LBL_REMOVED_TABS'                             => '管理者が削除したタブ',
	'LBL_REPORTS_TO_NAME'                          => '上司',
	'LBL_REPORTS_TO'                               => '上司',
	'LBL_REPORTS_TO_ID'                            => '報告先上司:',
	'LBL_REQUEST_SUBMIT'                           => '貴方の報告は提出されました。',
	'LBL_RESET_TO_DEFAULT'                         => 'デフォルトに戻す',
	'LBL_RESET_PREFERENCES'                        => 'デフォルト値に設定',
	'LBL_RESET_PREFERENCES_WARNING'                => 'プリファレンスをリセットして良いですか？',
	'LBL_RESET_PREFERENCES_WARNING_USER'           => 'このユーザの為、プリファレンスをリセットして良いですか？',
	'LBL_RESET_HOMEPAGE'                           => 'デフォルトのホームにリセット',
	'LBL_RESET_DASHBOARD'                          => 'ダッシュボード',
	'LBL_RESET_HOMEPAGE_WARNING'                   => 'ホームをリセットしても良いですか？',
	'LBL_RESET_HOMEPAGE_WARNING_USER'              => 'このユーザの為、ホームページをリセットしても良いですか？',
	'LBL_SALUTATION'                               => '敬称',
	'LBL_ROLES_SUBPANEL_TITLE'                     => '役割',
	'LBL_SEARCH_FORM_TITLE'                        => 'ユーザ検索',
	'LBL_SEARCH_URL'                               => '検索場所',
	'LBL_SELECT_CHECKED_BUTTON_LABEL'              => 'チェックしたユーザを選択',
	'LBL_SELECT_CHECKED_BUTTON_TITLE'              => 'チェックしたユーザを選択',
	'LBL_SETTINGS_URL_DESC'                        => 'Microsoft&reg; Outlook&reg;とMicrosoft&reg; Word&reg;用のSugarプラグインのログイン設定を行うにはこのURLを使用してください。',
	'LBL_SETTINGS_URL'                             => 'URL',
	'LBL_SIGNATURE'                                => 'シグニチャ',
	'LBL_SIGNATURE_HTML'                           => 'HTMLシグニチャ',
	'LBL_SIGNATURE_DEFAULT'                        => 'シグニチャを利用',
	'LBL_SIGNATURE_PREPEND'                        => '返信時に上記シグネチャを利用',
	'LBL_SIGNATURES'                               => 'シグニチャ',
	'LBL_STATE'                                    => '都道府県',
	'LBL_STATUS'                                   => 'ステータス',
	'LBL_SUBPANEL_LINKS'                           => 'サブパネルリンク',
	'LBL_SUBPANEL_LINKS_DESCRIPTION'               => '詳細画面において、サブパネルがグループタブに設定されていない場合、サブパネルへのショートカットリンクを下部に表示します。',
	'LBL_SUBPANEL_TABS'                            => 'サブパネルタブ',
	'LBL_SUBPANEL_TABS_DESCRIPTION'                => '詳細画面において、サブパネルをグループ化し、どれか一つだけタブを表示します。',
	'LBL_SUGAR_LOGIN'                              => 'Sugarユーザ',
	'LBL_SUPPORTED_THEME_ONLY'                     => 'このオプションをサポートするテーマのみに影響',
	'LBL_SWAP_LAST_VIEWED_DESCRIPTION'             => 'チェックすると参照履歴バーをサイドに表示します。チェックしない場合、上部に表示されます。',
	'LBL_SWAP_SHORTCUT_DESCRIPTION'                => 'チェックするとショートカットバーを上部に表示します。チェックしない場合、サイドに表示されます。',
	'LBL_SWAP_LAST_VIEWED_POSITION'                => '参照履歴をサイドに表示',
	'LBL_SWAP_SHORTCUT_POSITION'                   => 'ショートカットを上部に表示',
	'LBL_TAB_TITLE_EMAIL'                          => 'メール設定',
	'LBL_TAB_TITLE_USER'                           => 'ユーザ設定',
	'LBL_THEME'                                    => 'テーマ',
	'LBL_THEME_COLOR'                              => 'カラー',
	'LBL_THEME_FONT'                               => 'フォント',
	'LBL_TIME_FORMAT_TEXT'                         => 'タイムスタンプ用のフォーマットを設定します。',
	'LBL_TIME_FORMAT'                              => '時間フォーマット',
	'LBL_TIMEZONE_DST_TEXT'                        => 'サマータイムを設定します。',
	'LBL_TIMEZONE_DST'                             => 'サマータイム',
	'LBL_TIMEZONE_TEXT'                            => 'タイムゾーンを設定します。',
	'LBL_TIMEZONE'                                 => 'タイムゾーン',
	'LBL_TITLE'                                    => '職位',
	'LBL_USE_REAL_NAMES'                           => 'フルネームの表示',
	'LBL_USE_REAL_NAMES_DESC'                      => 'ユーザのログイン名ではなくフルネームを表示します。',
	'LBL_USER_INFORMATION'                         => 'ユーザ情報',
	'LBL_USER_LOCALE'                              => 'ロケール設定',
	'LBL_USER_NAME'                                => 'ユーザ名',
	'LBL_USER_SETTINGS'                            => 'ユーザ設定',
	'LBL_USER_TYPE'                                => 'ユーザタイプ',
	'LBL_USER_ACCESS'                              => 'アクセス',
	'LBL_USER'                                     => 'ユーザ',
	'LBL_WORK_PHONE'                               => '勤務先電話番号',
	'LBL_YOUR_PUBLISH_URL'                         => '私の場所に公開',
	'LBL_ICAL_PUB_URL'                             => 'iCalインテグレーションURL',
	'LBL_ICAL_PUB_URL_HELP'                        => 'このURLを使って、SugarカレンダーにiCalをインテグレーションできます。',
	'LBL_YOUR_QUERY_URL'                           => 'クエリURL',
	'LNK_NEW_USER'                                 => 'ユーザ作成',
	'LNK_NEW_PORTAL_USER'                          => 'ポータルAPIユーザ作成',
	'LNK_NEW_GROUP_USER'                           => 'グループユーザ作成',
	'LNK_USER_LIST'                                => 'ユーザ',
	'LNK_REASSIGN_RECORDS'                         => 'レコードを再アサイン',
	'LBL_PROSPECT_LIST'                            => 'ターゲットリスト',
	'LBL_EMAILS'                                   => 'Eメール',
	'LBL_PROCESSING'                               => '実行中',
	'LBL_UPDATE_FINISH'                            => '更新完了',
	'LBL_AFFECTED'                                 => '件更新',

	'LBL_USER_NAME_FOR_ROLE'                       => 'ユーザ/チーム/役割',
	'LBL_SESSION_EXPIRED'                          => 'セッションの期限が切れた為、ログアウトしました。',

	// INBOUND EMAIL STRINGS
	'LBL_APPLY_OPTIMUMS'                           => '最適設定を実行',
	'LBL_ASSIGN_TO_USER'                           => 'ユーザにアサイン',
	'LBL_BASIC'                                    => 'インバウンド設定',
	'LBL_CERT_DESC'                                => 'メールサーバのセキュリティ証明書の認証を強制します。自己署名の場合は使用しないでください。',
	'LBL_CERT'                                     => '認証',
	'LBL_FIND_OPTIMUM_KEY'                         => 'f',
	'LBL_FIND_OPTIMUM_MSG'                         => '最適な接続の設定を検出',
	'LBL_FIND_OPTIMUM_TITLE'                       => '最適な設定を検出',
	'LBL_FORCE'                                    => 'ネガティブを強制',
	'LBL_FORCE_DESC'                               => 'いくつかのIMAP/POP3サーバは特別なスイッチを必要とします。チェックを入れると接続時にネガティブスイッチを強制します。（例: /notls）',
	'LBL_FOUND_OPTIMUM_MSG'                        => '最適な設定を検出しました。ボタンをクリックすると適用されます。',
	'LBL_EMAIL_INBOUND_TITLE'                      => 'インバウンド電子メール設定',
	'LBL_EMAIL_OUTBOUND_TITLE'                     => 'アウトバウンドメール設定',
	'LBL_LOGIN'                                    => 'ユーザ名',
	'LBL_MAILBOX_DEFAULT'                          => '受信箱',
	'LBL_MAILBOX_SSL_DESC'                         => '接続時にSSLを利用します。これが機能しない場合、PHPが\"--with-imap-ssl\"オプションでコンパイルされているかどうか確認してください。',
	'LBL_MAILBOX'                                  => '監視フォルダ',
	'LBL_MAILBOX_TYPE'                             => '可能なアクション',
	'LBL_MARK_READ_NO'                             => '受信後に削除フラグを立てる',
	'LBL_MARK_READ_YES'                            => '受信後にサーバにメールを保存',
	'LBL_MARK_READ_DESC'                           => 'メールのインポート後に既読フラグをたて、削除はしない',
	'LBL_MARK_READ'                                => 'メッセージをサーバ上に残す',
	'LBL_ONLY_SINCE_NO'                            => 'いいえ　メールサーバのすべての電子メールをチェック',
	'LBL_ONLY_SINCE_YES'                           => 'はい',
	'LBL_ONLY_SINCE_DESC'                          => 'POP3を用いる場合、PHPは新規メールと未読メールを区分できません。IMAPをサポートしていない場合、このフラグを設定することにより、最後に受信箱をチェックした時間以降のメッセージのみをチェックできるため、性能を著しく向上させることが可能です。',
	'LBL_ONLY_SINCE'                               => '最後にチェックしたもの以降',
	'LBL_PORT'                                     => 'メールサーバポート',
	'LBL_SERVER_OPTIONS'                           => 'メールサーバオプション',
	'LBL_SERVER_TYPE'                              => 'メールサーバプロトコル',
	'LBL_SERVER_URL'                               => 'メールサーバアドレス',
	'LBL_SSL'                                      => 'SSL利用',
	'LBL_SSL_DESC'                                 => 'メールサーバに接続する際にSSLを利用',
	'LBL_TEST_BUTTON_KEY'                          => 't',
	'LBL_TEST_BUTTON_TITLE'                        => 'テスト[Alt+T]',
	'LBL_TEST_SETTINGS'                            => '設定のテスト',
	'LBL_TEST_SUCCESSFUL'                          => '接続に成功しました。',
	'LBL_TLS_DESC'                                 => 'メールサーバへの接続時にTLS（Transport Layer Security）を利用します。メールサーバがこのプロトコルをサポートしている時のみ利用してください。',
	'LBL_TLS'                                      => 'TLS利用',
	'LBL_TOGGLE_ADV'                               => '拡張機能を表示',
	'LBL_OWN_OPPS'                                 => '商談なし',
	'LBL_EXTERNAL_AUTH_ONLY'                       => 'このユーザのみ認証通過',
	'LBL_ONLY'                                     => 'Only',
	'LBL_OWN_OPPS_DESC'                            => 'このユーザが商談にアサインされない場合はチェックしてください。ユーザがマネージャでもなく営業活動にも関与しない場合は無視してください。予算モジュールで使用されます。',
	// END INBOUND EMAIL STRINGS
	'LBL_LDAP_ERROR'                               => 'LDAPエラー: システム管理者に連絡してください。',
	'LBL_LDAP_EXTENSION_ERROR'                     => 'LDAPエラー: Extensionsの読み込みに失敗しました。',

	// PROJECT RESOURCES STRINGS
	'LBL_USER_HOLIDAY_SUBPANEL_TITLE'              => 'ユーザの休日',
	'LBL_RESOURCE_NAME'                            => '名前',
	'LBL_RESOURCE_TYPE'                            => 'タイプ',

	'LBL_PDF_SETTINGS'                             => 'PDF設定',
	'LBL_PDF_PAGE_FORMAT'                          => 'ページフォーマット',
	'LBL_PDF_PAGE_FORMAT_TEXT'                     => ' ',
	'LBL_PDF_PAGE_ORIENTATION'                     => 'ページオリエンテーション',
	'LBL_PDF_PAGE_ORIENTATION_TEXT'                => '',
	'LBL_PDF_PAGE_ORIENTATION_P'                   => 'ポートレート',
	'LBL_PDF_PAGE_ORIENTATION_L'                   => 'ランドスケープ',
	'LBL_PDF_MARGIN_HEADER'                        => 'ヘッダ余白',
	'LBL_PDF_MARGIN_HEADER_TEXT'                   => '',
	'LBL_PDF_MARGIN_FOOTER'                        => 'フッタ余白',
	'LBL_PDF_MARGIN_FOOTER_TEXT'                   => '',
	'LBL_PDF_MARGIN_TOP'                           => '余白上部',
	'LBL_PDF_MARGIN_TOP_TEXT'                      => '',
	'LBL_PDF_MARGIN_BOTTOM'                        => '余白下部',
	'LBL_PDF_MARGIN_BOTTOM_TEXT'                   => '',
	'LBL_PDF_MARGIN_LEFT'                          => '余白左',
	'LBL_PDF_MARGIN_LEFT_TEXT'                     => '',
	'LBL_PDF_MARGIN_RIGHT'                         => '余白右',
	'LBL_PDF_MARGIN_RIGHT_TEXT'                    => '',
	'LBL_PDF_FONT_NAME_MAIN'                       => 'フォント設定',
	'LBL_PDF_FONT_NAME_MAIN_TEXT'                  => ' ',
	'LBL_PDF_FONT_SIZE_MAIN'                       => 'メインフォントサイズ',
	'LBL_PDF_FONT_SIZE_MAIN_TEXT'                  => '',
	'LBL_PDF_FONT_NAME_DATA'                       => 'フッタフォントサイズ',
 	'LBL_PDF_FONT_NAME_DATA_TEXT'                  => ' ',
	'LBL_PDF_FONT_SIZE_DATA'                       => 'データフォントサイズ',
	'LBL_PDF_FONT_SIZE_DATA_TEXT'                  => '',
	'LBL_LAST_ADMIN_NOTICE'                        => '自身のユーザタイプ及びステータスの変更はできません。',
	'LBL_MAIL_SMTPUSER'                            => 'SMTPユーザ名',
	'LBL_MAIL_SMTPPASS'                            => 'SMTPパスワード',
	'LBL_MAIL_SMTPSERVER'                          => 'SMTPサーバ',
	'LBL_SMTP_SERVER_HELP'                         => 'このSMTPメールサーバはメール送信に使用します。メールサーバを使用する為に、メールアカウントのユーザ名とパスワードを入力してください。',
	'LBL_MISSING_DEFAULT_OUTBOUND_SMTP_SETTINGS'   => 'テストメールの送信に失敗しました。設定を確認してください。',
	'LBL_MAIL_SMTPAUTH_REQ'                        => 'SMTP認証を使用',
	'LBL_MAIL_SMTPPASS'                            => 'SMTPパスワード:',
	'LBL_MAIL_SMTPPORT'                            => 'SMTPポート:',
	'LBL_MAIL_SMTPSERVER'                          => 'SMTPサーバ:',
	'LBL_MAIL_SMTPUSER'                            => 'SMTPユーザ名:',
	'LBL_MAIL_SMTPTYPE'                            => 'SMTPサーバタイプ:',
	'LBL_MAIL_SMTP_SETTINGS'                       => 'SMTPサーバスペック',
	'LBL_CHOOSE_EMAIL_PROVIDER'                    => 'Eメールプロバイダーの選択r:',
	'LBL_YAHOOMAIL_SMTPPASS'                       => 'Yahoo!メールパスワード:',
	'LBL_YAHOOMAIL_SMTPUSER'                       => 'Yahoo!メールID:',
	'LBL_GMAIL_SMTPPASS'                           => 'Gmailパスワード:',
	'LBL_GMAIL_SMTPUSER'                           => 'Gmailメールアドレス:',
	'LBL_EXCHANGE_SMTPPASS'                        => 'エクスチェンジ パスワード:',
	'LBL_EXCHANGE_SMTPUSER'                        => 'エクスチェンジ ユーザ名:',
	'LBL_EXCHANGE_SMTPPORT'                        => 'エクスチェンジ サーバポート:',
	'LBL_EXCHANGE_SMTPSERVER'                      => 'エクスチェンジ サーバ:',
	'LBL_OK'                                       => 'OK',
	'LBL_CANCEL'                                   => 'キャンセル',
	'LBL_DELETE_USER'                              => 'ユーザ削除',
	// Wizard
	'LBL_WIZARD_TITLE'                             => 'ユーザウィザード',
	'LBL_WIZARD_WELCOME_TAB'                       => 'ようこそ',
	'LBL_WIZARD_WELCOME_TITLE'                     => 'SugarCRMへようこそ!',
	'LBL_WIZARD_WELCOME'                           => '<b>次へ</b>',
	'LBL_WIZARD_WELCOME_NOSMTP'                    => '<b>次へ</b>',
	'LBL_WIZARD_NEXT_BUTTON'                       => '次へ >',
	'LBL_WIZARD_BACK_BUTTON'                       => '< 戻る',
	'LBL_WIZARD_SKIP_BUTTON'                       => 'スキップ',
	'LBL_WIZARD_FINISH_BUTTON'                     => '完了',
	'LBL_WIZARD_FINISH_TAB'                        => '完了',
	'LBL_WIZARD_FINISH_TITLE'                      => '準備完了！',
	'LBL_WIZARD_FINISH'                            => '<b>完了</b><br /><br />,
	

	'LBL_WIZARD_FINISH'                            => 'クリック <b>完了</b> below to save your settings and to begin using Sugar. For more information on using Sugar:<br /><br />
<table cellpadding                              = 0 cellspacing=0>
<tr><td><!--not_in_theme!--><img src            = include/images/university.png style="margin-right: 5px;"></td><td><a href="http://www.sugarcrm.com/university" target="_blank"><b>Sugar University</b></a><br>End-user and System Administrator Training and Resources</td></tr>
<tr><td colspan                                 = 2><hr style="margin: 5px 0px;"></td></tr>
<tr><td><!--not_in_theme!--><img src            = include/images/docs.png style="margin-right: 5px;"></td><td><a href="http://docs.sugarcrm.com/" target="_blank"><b>文書</b></a><br>Product Guides and Release Notes</td></tr>
<tr><td colspan                                 = 2><hr style="margin: 5px 0px;"></td></tr>
<tr><td><!--not_in_theme!--><img src            = include/images/kb.png style="margin-right: 5px;"></td><td><a href="http://kb.sugarcrm.com/" target="_blank"><b>ナレッジベース</b></a><br>Tips from SugarCRM Support for performing common tasks and processes in Sugar</td></tr>
<tr><td colspan                                 = 2><hr style="margin: 5px 0px;"></td></tr>
<tr><td><!--not_in_theme!--><img src            = include/images/forums.png style="margin-right: 5px;"></td><td><a href="http://www.sugarcrm.com/forums" target="_blank"><b>フォーラム</b></a><br>Forums dedicated to the Sugar Community to discuss topics of interest with each other and with SugarCRM Developers</td></tr>
</table>',

	'LBL_WIZARD_FINISH1'                           => '次は何をしますか?',
	'LBL_WIZARD_FINISH2'                           => 'Sugarをはじめる',
	'LBL_WIZARD_FINISH3'                           => 'データインポート',
	'LBL_WIZARD_FINISH4'                           => '外部データソースよりデータをインポート',
	'LBL_WIZARD_FINISH5'                           => 'ユーザ作成 ',
	'LBL_WIZARD_FINISH6'                           => 'アプリケーションにアクセス可能な新しいユーザアカウントを作成',
	'LBL_WIZARD_FINISH7'                           => 'アプリケーション設定の閲覧及び管理',
	'LBL_WIZARD_FINISH8'                           => '詳細設定の管理(アプリケーションの初期設定を含む)',
	'LBL_WIZARD_FINISH9'                           => 'アプリケーション設定',
	'LBL_WIZARD_FINISH10'                          => 'スタジオにてアプリケーションのフィールドやレイアウトを管理できます。、',
	'LBL_WIZARD_FINISH11'                          => 'Sugar Universityを訪問 ',
	'LBL_WIZARD_FINISH12'                          => 'トレーニング関連資料を探す',
	'LBL_WIZARD_FINISH14'                          => '文書 ',
	'LBL_WIZARD_FINISH15'                          => '製品ガイド及びリリースノート',
	'LBL_WIZARD_FINISH16'                          => 'ナレッジベース',
	'LBL_WIZARD_FINISH17'                          => 'SugarCRMサポートTips',
	'LBL_WIZARD_FINISH18'                          => 'フォーラム',
	'LBL_WIZARD_FINISH19'                          => 'Sugarコミュニティ(SugarCRM 開発チームとのコミュニケーション)',
	'LBL_WIZARD_FINISH2DESC'                       => 'アプリケーションのホームページ',
	'LBL_WIZARD_PERSONALINFO'                      => '個人情報',
	'LBL_WIZARD_LOCALE'                            => '言語設定',
	'LBL_WIZARD_SMTP'                              => 'メールアカウント',
	'LBL_WIZARD_PERSONALINFO_DESC'                 => '貴方の個人情報を入力してください(他のユーザによって閲覧可能)<br />フィールドの<span class="required">*</span> は入力必須項目となります。',
	'LBL_WIZARD_LOCALE_DESC'                       => 'タイムゾーンと日付フォーマット、通貨、名前を入力してください。',
	'LBL_WIZARD_SMTP_DESC'                         => 'SMTPメールアカウントを入力してください。',
	'LBL_EAPM_SUBPANEL_TITLE'                      => '外部アカウント',

	'LBL_EDITLAYOUT'                               => 'レイアウト編集' /*for 508 compliance fix*/ ,
	'LBL_HELP'                                     => 'ヘルプ' /*for 508 compliance fix*/ ,
	'LBL_CHECKMARK'                                => 'チェックマーク' /*for 508 compliance fix*/ ,
	'LBL_THEMEPREVIEW'                             => 'プレビュー' /*for 508 compliance fix*/ ,

	'LBL_OAUTH_TOKENS'                             => 'Oトークン認証',
	'LBL_OAUTH_TOKENS_SUBPANEL_TITLE'              => "Oトークン認証アクセス",

	//For export labels
	'LBL_MODIFIED_USER_ID'                         => '更新ユーザID',
	'LBL_PHONE_HOME'                               => '自宅電話番号',
	'LBL_PHONE_MOBILE'                             => '携帯電話番号',
	'LBL_PHONE_WORK'                               => '職場電話番号',
	'LBL_PHONE_OTHER'                              => 'その他電話番号',
	'LBL_PHONE_FAX'                                => 'Fax',
	'LBL_PORTAL_ONLY'                              => 'ポータルのみ',
	'LBL_SHOW_ON_EMPLOYEES'                        => '従業員レコードを表示',
	'LBL_IS_GROUP'                                 => 'グループ？',
	'LBL_EXPORT_CREATED_BY'                        => '作成者ID',

	'LBL_DATE_MODIFIED'                            => '更新日',
	'LBL_DATE_ENTERED'                             => '登録日',
	'LBL_DELETED'                                  => '削除済み',
	'LBL_HIDEOPTIONS'                              => 'オプションを隠す',
	'LBL_SHOWOPTIONS'                              => 'オプションを表示する'
); // END STRINGS DEFS
?>