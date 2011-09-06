<?php

function adminler_cikis_yaptir() {
	
	$_SESSION['admin'] = false;
	
	genel_redirect(ADMIN_SAYFA_1);
}

function adminler_admin_girebilir() {
	
	if (!adminler_is_admin())
		genel_redirect(ADMIN_SAYFA_1);	
}

function adminler_is_admin() {
	
	if (isset($_SESSION['admin'])) {
	
		if ($_SESSION['admin'] == true) {
			
			return true;
		}
	}
	
	return false;
}