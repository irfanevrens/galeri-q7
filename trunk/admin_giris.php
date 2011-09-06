<?php

require_once 'init_admin.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	
	$sifre = trim(@$_POST['sifre']);
	
	try {
		
		if (trim(AYAR_1) == '') throw new Exception('Admin şifresi ayarlanmamış.');
		
		if ($sifre != AYAR_1) throw new Exception('Şifre hatalı, lütfen yeniden deneyiniz.');
		
		// giriş yaptırabiliriz
		$_SESSION['admin'] = true;
		
		genel_redirect(ADMIN_SAYFA_2);
		
	} catch (Exception $ex) {
		
		$smarty->assign('hata', $ex->getMessage());
	}
}

$smarty->display('sablon_admin_giris.tpl');