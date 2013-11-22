<?php
//
// PHASE: BOOTSTRAP
//
define('DALEK_INSTALL_PATH', dirname(__FILE__));
define('DALEK_SITE_PATH', DALEK_INSTALL_PATH . '/site');

require(DALEK_INSTALL_PATH.'/src/CDalek/bootstrap.php');

$da = CDalek::Instance();

//
// PHASE: FRONTCONTROLLER ROUTE
//
$da->FrontControllerRoute();


//
// PHASE: THEME ENGINE RENDER
//
$da->ThemeEngineRender();
