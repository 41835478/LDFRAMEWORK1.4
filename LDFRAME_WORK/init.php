<?php 
@ini_set('display_errors', 1);
//--调试模式
defined('DEBUG') 		or define('DEBUG', false);
//--AppName
defined('APP_NAME')     or define('APP_NAME','application');
//--框架根目录
define('FRAMEWORK_DIR',str_replace('init.php', '', str_replace('\\', '/', __FILE__)));
//--分组目录
defined('GROUNP_DIR')    or  define('GROUNP_DIR','HOME');
//--SERVER
define('SERVER',$_SERVER);
require FRAMEWORK_DIR.'factory/factory.class.php';
factory::run();

?>