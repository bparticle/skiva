<?php

// put full path to Smarty.class.php
require('/usr/local/lib/php/Smarty/Smarty.class.php');
$smarty = new Smarty();

$smarty->setTemplateDir('/var/www/smarty/templates');
$smarty->setCompileDir('/var/www/smarty/templates_c');
$smarty->setCacheDir('/var/www/smarty/cache');
$smarty->setConfigDir('/var/www/smarty/configs');

// get php script filename
$file = pathinfo( __FILE__ );
$icon_name = basename( $_SERVER['PHP_SELF'], '.' . $file[ 'extension' ] );
// get folder name
$parent = basename(dirname($_SERVER['PHP_SELF']));

$smarty->assign('name', $icon_name);
$smarty->assign('folder', $parent);
$smarty->display('skiva/icon-page.tpl');

?>