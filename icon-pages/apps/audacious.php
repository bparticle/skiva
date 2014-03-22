<?php

// put full path to Smarty.class.php
require('/usr/local/lib/php/Smarty/Smarty.class.php');
$smarty = new Smarty();

$smarty->setTemplateDir('/skiva/smarty/templates');
$smarty->setCompileDir('/skiva/smarty/templates_c');
$smarty->setCacheDir('/skiva/smarty/cache');
$smarty->setConfigDir('/skiva/smarty/configs');

// get php script filename
$file = pathinfo( __FILE__ );
$icon_name = basename( $_SERVER['PHP_SELF'], '.' . $file[ 'extension' ] );
// get folder name
$parent = basename(dirname($_SERVER['PHP_SELF']));

$smarty->assign('name', $icon_name);
$smarty->assign('folder', $parent);
$smarty->display('icon-page.tpl');
?>