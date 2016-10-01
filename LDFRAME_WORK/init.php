<?php 
//--调试模式
defined('DEBUG') 		or define('DEBUG', 1);

@ini_set('display_errors', DEBUG);

define('tarce',false);

//--AppName
defined('APP_NAME')     or define('APP_NAME','application');

//--框架根目录
define('FRAMEWORK_DIR',str_replace('init.php', '', str_replace('\\', '/', __FILE__)));

//--分组目录
defined('GROUNP_DIR')    or  define('GROUNP_DIR','Home');

//--获取网站请求的文件URL
$HOST = $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].$_SERVER['QUERY_STRING'];

$HOST =  substr($HOST, 0, strpos($HOST, '.php')).'.php';

define('HOST', $HOST);

//--分组处理
$GROUNP = $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];

$param = isset($_GET['r'])? $_GET['r']: '' ;

if('' == $param) {
	$param = str_replace(HOST, '', $GROUNP);
	$param = substr($param, 1,strlen($param));
}

$ld = explode('/', $param);

$G = !empty($ld[0])? $ld[0] : GROUNP_DIR;

define('GROUNP_NAME',$G);

define('SERVLET','web.xml');

//--模板模块名
defined('View') or define('View','view'); 
//--模板缓存
defined('CACHE_NAME') or define('CACHE_NAME','RunTime');


require FRAMEWORK_DIR.'factory/factory.class.php';
use ld\lib\ldException;
try{
	factory::run();
}catch(ldException $e){
	if(tarce === true) {
		$e->customFunction();
	}else {
		
	}
}
?>