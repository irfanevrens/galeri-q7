<?php

// php sayfalarının en üstünde çalışır

session_start();

define('LOCAL', $_SERVER['SERVER_NAME'] == 'localhost' ? true : false);

define('DIZIN_ROOT', realpath(dirname(__FILE__)));

require_once DIZIN_ROOT . '/ayar/ayarlar.php';
require_once DIZIN_ROOT . '/ayar/sabitler.php';

require_once DIZIN_ROOT . '/fonk/genel.php';

// Local demiyiz?
if (LOCAL) {
	
	// Evet
	define('HOME_URL', SABIT_1);
	
	// Hata raporlamayı etkinleştir.
	error_reporting(E_ALL);
} else {
	
	// Hayır
	define('HOME_URL', SABIT_2);
	
	// Hata raporlamayı kapat
	error_reporting(E_ALL);
}

// smarty
require_once 'fw3/smarty308/Smarty.class.php';

$smarty = new Smarty();

$smarty->template_dir = DIZIN_ROOT . '/sayfalar';
$smarty->compile_dir = DIZIN_ROOT . '/sayfalar_c';

// smarty ilk ayarlar
$smarty->assign('hata', '');