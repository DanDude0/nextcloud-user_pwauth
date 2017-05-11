<?php
/*
            DO WHAT THE FUCK YOU WANT TO PUBLIC LICENSE
                    Version 2, December 2004

 Copyright (C) 2004 Sam Hocevar <sam@hocevar.net>

 Everyone is permitted to copy and distribute verbatim or modified
 copies of this license document, and changing it is allowed as long
 as the name is changed.

            DO WHAT THE FUCK YOU WANT TO PUBLIC LICENSE
   TERMS AND CONDITIONS FOR COPYING, DISTRIBUTION AND MODIFICATION

  0. You just DO WHAT THE FUCK YOU WANT TO.

*/

/**
 * ownCloud - user_pwauth
 *
 * @author Clément Véret
 * @copyright 2012 Clément Véret veretcle+owncloud@mateu.be
 *
 */

OCP\User::checkAdminUser();

$params = array('uid_list', 'pwauth_path');

if ($_POST) {
	// CSRF check
	OCP\JSON::callCheck();
	
	foreach($params as $param){
		if(isset($_POST[$param])){
			\OCP\Config::setAppValue('user_pwauth', $param, $_POST[$param]);
		}
	}
}

// fill template
$tmpl = new \OCP\Template( 'user_pwauth', 'settings');
$tmpl->assign( 'uid_list', \OCP\Config::getAppValue('user_pwauth', 'uid_list', OC_USER_BACKEND_PWAUTH_UID_LIST));
$tmpl->assign( 'pwauth_path', \OCP\Config::getAppValue('user_pwauth', 'pwauth_path', OC_USER_BACKEND_PWAUTH_PATH));

return $tmpl->fetchPage();
?>
