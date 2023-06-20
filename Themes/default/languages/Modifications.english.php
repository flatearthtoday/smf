<?php
// Version: 2.0; Modifications

//	MOD Stop Spammer - START
$txt['stopspammer_error'] = 'Error with Anti SPAM DB. Connection Failed.<br />
Please try again later, or Contact with the WebMaster';
$txt['stopspammer_count'] = 'Spammers blocked up until today';
$txt['stopspammer_title'] = 'Search more info in `Stop Forum Spam`';

$txt['stopspammer_enable'] = 'Enable/Disable MOD Stop Spammer';
$txt['stopspammer_show01'] = 'Show Link "More Info" for All Members';
$txt['stopspammer_show01_sub'] = 'You can check any member at any time with one simple click';

$txt['stopspammer_faildb'] = 'If the Connection Fail with Anti SPAM DB...';
$txt['stopspammer_fail01'] = 'Show Error and Stop Registration';
$txt['stopspammer_fail02'] = 'Allow Immediate Registration';
$txt['stopspammer_fail03'] = 'Member Approval and show yellow icon to check later';
$txt['stopspammer_faildb1_sub'] = 'Your host can make remote connection with the DB';
$txt['stopspammer_faildb2_sub'] = 'Your host couldn\'t make connection with the DB. Try again later.<br />
If this error continues see Support Topic and search ';
$txt['stopspammer_not_translate'] = '<a href="http://www.simplemachines.org/community/index.php?topic=283309.msg1920848#post_issues"><span class="error"><b>Known Issues</b></span></a>';

$txt['stopspammer_leyd01'] = 'Not Spammer: This data wasn\'t in a DB. But you can check';
$txt['stopspammer_leyd02'] = 'Suspect: This member couldn\'t be checked. Check now';
$txt['stopspammer_leyd03'] = 'Spammer: See more info of activity of this spammer';

$txt['stopspammer_profilecheck'] = 'Check this member';
$txt['stopspammer_limitexceded'] = 'You have exceded the check limit (5000 API queries per day).<br />You should wait until tomorrow to check again.';

$txt['in_stop_forum_spam'] = 'In Stop Forum Spam Web:';
$txt['spammers_checks'] = 'Check Selected Members';
$txt['spammers_report'] = 'Report Selected Members';
$txt['confirm_spammers_checks'] = 'Are you sure you want to check the selected members?';
$txt['confirm_spammers_report'] = 'Are you sure you want to report the selected members?\n\nThink that when you report a member to SFS they are marked as spammer all over the world\nand they won\\\'t be able to use any of the forums connected to SFS around the world.\n\nDo it only if you are completely sure they are spammers and if by any chance you make a mistake\ntell as soon as possible the mod\\\'s creator to correct the mistake inside the SFS database.';

$txt['stopspammer_api_key'] = 'Your API key';

$txt['stopspammer_check_name'] = 'Check their username';
$txt['stopspammer_check_mail'] = 'Check their email';
$txt['stopspammer_check_ip'] = 'Check their IP';
$txt['stopspammer_check_sub2'] = 'By default, every time you check a member with MOD Stop Spammer it will check their username, email and IP. If you are getting too many false positives because of their usernames you can turn that option off. We wouldn\'t recomend you to turn off the another 2 options (to check their email and IP) unless you know what you are doing.';

// Changed from 2.3.8 to 2.3.9
$txt['stopspammer_check_sub1'] = 'If MOD Stop Spammer is enabled, every time we check a member:';
$txt['stopspammer_api_key_sub'] = 'If you want to use your own API key you must go first to <a href="http://www.stopforumspam.com/signup" target="_blank">www.stopforumspam.com</a> to sign up for one and write it here. If you haven\'t got one you cannot report spammers with this mod.<br /><br />If you need help with this configuration or with anything else about Mod Stop Spammer, apart from the support forums, you can also ask for online help. If you have already installed Mod httpBL you can see how to ask for online help going to Admin => MOD httpBL => Help. If you haven\'t got it you can <a href="http://www.snoopyvirtualstudio.com/contact.php?language=english" target="_blank">see more info here</a>.';

// New in version 2.3.9
$txt['stopspammer_settings'] = 'MOD Stop Spammer settings';
$txt['stopspammer_enable_sub'] = 'With this check-box checked the mod is ON. With the check-box unchecked the mod is OFF.';
$txt['stopspammer_error_no_api_key'] = 'You cannot report a spammer without an API key from www.stopforumspam.com<br /><br />You need to register on their site first, ask them for an API key and then navigate inside your forum to:<br />Admin => Members => Registration => Settings<br />Scroll down to Stop Spammer settings, write your API key there and save your settings.';
$txt['stopspammer_no_connect_1'] = 'Mod Stop Spammer is ON but there is no connection just now with Stop Forum Spam. Please try later.';
$txt['stopspammer_no_connect_2'] = 'If the problem persists ask for help in the <a href="http://www.snoopyvirtualstudio.com/foro/index.php?board=31.0" target="_blank">official support forum</a>.';
$txt['stopspammer_new_version_1'] = 'Mod Stop Spammer is ON but it is not up-to-date.';
$txt['stopspammer_new_version_2'] = 'There is a new version of this mod. The version you have is: ';
$txt['stopspammer_new_version_3'] = '<a href="http://www.snoopyvirtualstudio.com/foro/index.php?board=31.0" target="_blank">Please update it here whenever you can</a> to the new version: ';
$txt['stopspammer_all_ok'] = 'Mod Stop Spammer is ON, it is up-to-date and the connection with Stop Forum Spam is perfect.';
$txt['stopspammer_is_off'] = 'Mod Stop Spammer is OFF.';
//	MOD Stop Spammer - END

// CleanTalk messages begin
$txt['cleantalk_name'] = 'Antispam by CleanTalk';
$txt['cleantalk_settings'] = 'Antispam by CleanTalk Mod settings';
$txt['cleantalk_api_key'] = 'Access key';
$txt['cleantalk_check_registrations'] = 'Enable spam test on registration';
$txt['cleantalk_get_access_manually'] = 'Get access key manually';
$txt['cleantalk_get_access_key_or'] = 'or';
$txt['cleantalk_get_access_automatically'] = 'Get access key automatically';
$txt['cleantalk_license_agreement'] = 'License agreement';
$txt['cleantalk_key_valid'] = 'Access key is valid';
$txt['cleantalk_account_name_ob'] = 'Account at cleantalk.org';
$txt['cleantalk_moderate_ip'] = 'The anti-spam service is paid by your hosting provider. License #';
$txt['cleantalk_key_not_valid'] = 'Access key is not valid!';
$txt['cleantalk_get_statistics'] = 'Click here to get anti-spam statistics';
$txt['cleantalk_admin_email_will_be_used'] = 'Admin e-mail (%s) will be used for registration';
$txt['cleantalk_first_post_checking'] = 'Enable antispam test for Newly registered members';
$txt['cleantalk_first_post_checking_postinput'] = 'All messages from newly registered members (<a href="index.php?action=moderate;area=viewgroups;sa=members;group=4">%GROUP% group</a> only) will be checked for spam';
$txt['cleantalk_automod'] = 'Enable automoderation for messages';
$txt['cleantalk_automod_postinput'] = 'Automatically put suspicious comments which may not be 100% spam to manual approvement and block obvious spam comments. Make sure that <b>Post moderation</b> feature is enabled under Adminsitration Center -> Core features';
$txt['cleantalk_api_key_description'] = 'Extension home page: <a target="_blank" href="https://cleantalk.org/">http://cleantalk.org</a>';
$txt['cleantalk_logging'] = 'Enable logging';
$txt['cleantalk_logging_postinput'] = 'All plugin\'s actions will be added to the forum\'s log. (<a target="_blank" href="%s/index.php?action=admin;area=logs;sa=errorlog;desc">Admin -> Error log</a>)';
$txt['cleantalk_check_search_form'] = 'Test search form for spam';
$txt['cleantalk_check_search_form_postinput'] = 'Spam protection for Search form. Read more about <a href="https://blog.cleantalk.org/how-to-protect-website-search-from-spambots/" target="_blank">spam protection for Search form</a> on our blog. ?noindex? tag will be placed in meta derictive on search page.';
$txt['cleantalk_tell_others'] = 'Tell others about CleanTalk';
$txt['cleantalk_email_notifications'] = 'Enable admin email notifications';
$txt['cleantalk_email_notifications_postinput'] = 'Send admin email notifications for allow/blocked checking results';
$txt['cleantalk_check_personal_messages'] = 'Enable antispam test for personal message';
$txt['cleantalk_check_personal_messages_postinput'] = 'Check all personal messages for spam';
$txt['cleantalk_ccf_checking'] = 'Check custom forms';
$txt['cleantalk_ccf_checking_postinput'] = 'May cause conflicts!';
$txt['cleantalk_tell_others_postinput'] = 'Checking this box places a small link in the footer that lets others know what anti-spam tool protects your site.';
$txt['cleantalk_tell_others_footer_message'] = '<a href="https://cleantalk.org/smf-anti-spam-mod">SMF spam</a> blocked by CleanTalk';
$txt['cleantalk_sfw'] = 'Enable SpamFireWall';
$txt['cleantalk_sfw_postinput'] = 'This option allows to filter spam bots before they access website. Also reduces CPU usage on hosting server and accelerates pages load time.';
$txt['cleantalk_check_users'] = '%CLEANTALK_CHECK_USERS%';
$txt['cleantalk_check_users_button'] = 'Check users for spam';
$txt['cleantalk_check_users_button_after'] = 'Anti-spam by CleanTalk will check all users against blacklists database and show you senders that have spam activity on other websites.';
$txt['cleantalk_check_users_key_is_bad'] = 'Can not access cloud database. Access key is bad.';
$txt['cleantalk_check_users_nofound'] = 'No spam users found';
$txt['cleantalk_check_users_tbl_select'] = 'Select';
$txt['cleantalk_check_users_tbl_username'] = 'Username';
$txt['cleantalk_check_users_tbl_username_details'] = 'Details';
$txt['cleantalk_check_users_tbl_joined'] = 'Registered';
$txt['cleantalk_check_users_tbl_lastvisit'] = 'Last visit';
$txt['cleantalk_check_users_tbl_posts'] = 'Posts';
$txt['cleantalk_check_users_tbl_posts_show'] = 'Show';
$txt['cleantalk_check_users_pages'] = 'Pages';
$txt['cleantalk_check_users_done'] = 'Done. All users checked via blacklists database, see result below.';
$txt['cleantalk_check_users_tbl_delselect'] = 'Delete selected';
$txt['cleantalk_check_users_tbl_delall'] = 'Delete all';
$txt['cleantalk_check_users_tbl_delnotice'] = 'All topics and posts of selected users will be deleted, too.';
$txt['cleantalk_check_users_confirm'] = 'Delete account(s) with their posts and topics?';
$txt['cleantalk_sfw_die_notice_ip'] = 'SpamFireWall is activated for your IP ';
$txt['cleantalk_sfw_die_make_sure_js_enabled'] = 'To continue working with web site, please make sure that you have enabled JavaScript.';
$txt['cleantalk_sfw_die_click_to_pass'] = 'Please click bellow to pass protection,';
$txt['cleantalk_sfw_die_you_will_be_redirected'] = 'Or you will be automatically redirected to the requested page after 3 seconds.';
$txt['cleantalk_sfw_die_no_file'] = 'Your IP looks like spammer\'s IP';
$txt['cleantalk_banner_renew_1'] = 'Please, renew your anti-spam license for %s.';
$txt['cleantalk_banner_renew_2'] = 'next year';
$txt['cleantalk_banner_trial_1'] = 'Cleantalk\'s cloud service trial period ends, please upgrade to %s!';
$txt['cleantalk_banner_trial_2'] = 'Premium version';
$txt['cleantalk_banner_bad_key_1'] = 'Enter the Access Key in %s settings to enable anti-spam protection!';
$txt['cleantalk_banner_bad_key_2'] = 'CleanTalk\'s mod';
// CleanTalk messages end

?>