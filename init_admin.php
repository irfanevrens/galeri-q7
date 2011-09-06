<?php

// admin sayfalarının en başında çalışacak dosya

// init.php dosyasını alalım ve ilk ayarları yapmış olalım
require_once 'init.php';

require_once DIZIN_ROOT . '/fonk/adminler.php';

define('ADMIN_SAYFA_0', HOME_URL);
define('ADMIN_SAYFA_1', ADMIN_SAYFA_0 . '/admin_giris.php');
define('ADMIN_SAYFA_2', ADMIN_SAYFA_0 . '/admin.php');
define('ADMIN_SAYFA_3', ADMIN_SAYFA_0 . '/admin_cikis.php');