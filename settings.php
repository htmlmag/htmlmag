<?php
/**
 * @author Bilal Cinarli
 * @link http://bcinarli.com
 **/

	define('APP_PATH', 'app/');
	define('POSTS_PATH', '_posts/');
    define('SITE_TITLE', "HTML Mag");

    define('Authentication', false);
    define('Realm', 'Misto');
    define('Authentication_User', 'misto-admin');
    define('Authentication_Pass', '742f719f7251f5fd97d02e1896196fc8e74c2df6'); // md5 hash of the password

	date_default_timezone_set('Europe/Istanbul');
    setlocale(LC_TIME, 'tr_TR');
    setlocale(LC_TIME, 'tr_TR.utf8');
