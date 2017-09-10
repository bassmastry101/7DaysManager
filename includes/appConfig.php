<?php
date_default_timezone_set("EST");

//App Directory (Absolute Location!)
$appDir = '/usr/local/etc/7daysManager/';
//Log Directory (Absolute Location!)
$appLog = '/usr/local/etc/7daysManager/log/7daysManager.log';
$debugLogging = '1';
//DB Config File (Absolute Location!)
require '/usr/local/etc/7daysManager/includes/dbConfig.php';

//Server API Information
$serverHost = 'localhost';
$apiPort = '8083';
$apiUser = '7dm';
$apiPass = '1234';

//Command Schedule (Seconds)
//Only modify this if you want to adjust when commands execute
$syncGameTime = '5';
$syncOnlinePlayers = '10';


//************************
//** NOT FUNCTIONAL YET **
//************************
//Maximum Login Attempts
//$max_attempts = 5;

//Timeout (in seconds) after max attempts are reached
//$login_timeout = 300;

//ONLY set this if you want a moderator to verify users and not the users themselves, otherwise leave blank or comment out
//$admin_email = '';

//EMAIL SETTINGS
//SEND TEST EMAILS THROUGH FORM TO https://www.mail-tester.com GENERATED ADDRESS FOR SPAM SCORE
//$from_email = 'youremail@domain.com'; //Webmaster email
//$from_name = 'Test Email'; //"From name" displayed on email

//Find specific server settings at https://www.arclab.com/en/kb/email/list-of-smtp-and-pop3-servers-mailserver-list.html
//$mailServerType = 'smtp';
//IF $mailServerType = 'smtp'
//$smtp_server = 'smtp.mail.domain.com';
//$smtp_user = 'youremail@domain.com';
//$smtp_pw = 'yourEmailPassword';
//$smtp_port = 465; //465 for ssl, 587 for tls, 25 for other
//$smtp_security = 'ssl';//ssl, tls or ''

//HTML Messages shown before URL in emails (the more
//$verifymsg = 'Click this link to verify your new account!'; //Verify email message
//$active_email = 'Your new account is now active! Click this link to log in!';//Active email message

//LOGIN FORM RESPONSE MESSAGES/ERRORS
//$signupthanks = 'Thank you for signing up! You will receive an email shortly confirming the verification of your account.';
//$activemsg = 'Your account has been verified! You may now login at <br><a href="'.$signin_url.'">'.$signin_url.'</a>';

//DO NOT TOUCH BELOW THIS LINE
//Unsets $admin_email based on various conditions (left blank, not valid email, etc)
//if (trim($admin_email, ' ') == '') {
//    unset($admin_email);
//} elseif (!filter_var($admin_email, FILTER_VALIDATE_EMAIL) == true) {
//    unset($admin_email);
//    echo $invalid_mod;
//};
//$invalid_mod = '$adminemail is not a valid email address';

//Makes readable version of timeout (in minutes). Do not change.
//$timeout_minutes = round(($login_timeout / 60), 1);
?>
