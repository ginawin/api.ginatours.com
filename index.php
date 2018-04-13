<?php
/**
 * Index file.
 * @author TTT [truongtanthanh.info] <truongtanthanh2012@gmail.com>
 * @copyright 2018 TTT Group.
 * @since 1.0
 */
// Define DIRECTORY_SEPARATOR constant
define('DS', DIRECTORY_SEPARATOR);

//for Website
define('DOCROOT', dirname(__FILE__) . DS);
define('CONFIG_PATH', DOCROOT . 'config' . DS);

//for SBCore
define('CORE_DOCROOT', dirname(DOCROOT). DS."SBCore" . DS);
define('CORE_CONFIG_PATH', CORE_DOCROOT . 'config' . DS);

require_once CONFIG_PATH . 'Constants.php';
require_once CORE_DOCROOT.'autoload.php';

session_start();

// Load library var dump
/*if (true === DEBUG)
{
    require_once VENDOR_PATH . 'kint' . DS . 'Kint.class' . PHP_EXT;
    // Enable VSDebug (tracy)
	Debug::enable();
}
$version = SBVersion::create(PHP_VERSION);
$versionCompare = SBVersion::create(5.6);
if ($versionCompare >= $version) {
	echo ('Your php version '.SBVersion::curentVersion().' is old.<br>');
	echo ('We need PHP version >=' . $versionCompare->major().'.'.$versionCompare->minor());
	exit();
}*/
if(!CACHE_FLG){
    //php cache
    opcache_reset();
    apcu_clear_cache();
}
App::autoload();


?>