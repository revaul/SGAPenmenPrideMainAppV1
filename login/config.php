<?php
//Pull '$base_url' and '$signin_url' from this file
include 'globalcon.php';
//Pull database configuration from this file
include 'dbconf.php';

require '../mysqlkeys.php';
//Set this for global site use
$site_name = 'Penmen Pride System';
//Maximum Login Attempts
$max_attempts = 5;
//Timeout (in seconds) after max attempts are reached
$login_timeout = 600;
//ONLY set this if you want a moderator to verify users and not the users themselves, otherwise leave blank or comment out
$admin_email = $mailusername;
//EMAIL SETTINGS
//SEND TEST EMAILS THROUGH FORM TO https://www.mail-tester.com GENERATED ADDRESS FOR SPAM SCORE
$from_email = $mailusername; //Webmaster email
$from_name = $mailnamefrom; //"From name" displayed on email
//Find specific server settings at https://www.arclab.com/en/kb/email/list-of-smtp-and-pop3-servers-mailserver-list.html
$mailServerType = 'smtp';
//IF $mailServerType = 'smtp'
$smtp_server = $mailhost;
$smtp_user = $mailusername;
$smtp_pw = $mailpassword;
$smtp_port = $mailport; //465 for ssl, 587 for tls, 25 for other
$smtp_security = $mailsecurity;//ssl, tls or ''
//HTML Messages shown before URL in emails (the more
$verifymsg = 'Click this link to verify your new account!'; //Verify email message
$active_email = 'Your new account is now active! Click this link to log in!';//Active email message
//LOGIN FORM RESPONSE MESSAGES/ERRORS
$signupthanks = 'Your account has been requested. In order to continue, the executive officer will have to approve your account.';
$activemsg = 'Your account has been verified! You may now login at <br><a href="'.$signin_url.'">'.$signin_url.'</a>';
//DO NOT TOUCH BELOW THIS LINE
//Unsets $admin_email based on various conditions (left blank, not valid email, etc)
if (trim($admin_email, ' ') == '') {
    unset($admin_email);
} elseif (!filter_var($admin_email, FILTER_VALIDATE_EMAIL) == true) {
    unset($admin_email);
    echo $invalid_mod;
};
$invalid_mod = '$adminemail is not a valid email address';
//Makes readable version of timeout (in minutes). Do not change.
$timeout_minutes = round(($login_timeout / 60), 1);
