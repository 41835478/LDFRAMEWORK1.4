<?php
class factory {
	public static $path = FRAMEWORK_DIR.'sys/';
	
	static function loadClass($className) {
			$filename = self::$path.$className.".class.php";
			if (is_file($filename)) {
				 require_once $filename;
			}else{
				//echo FRAMEWORK_DIR.'../Home/controller/test.php';
				require_once  FRAMEWORK_DIR.'../Home/controller/test.php';
			}
	}
	static function addload($path = '') {	 	
		if('' == $path) {
			self::$path = FRAMEWORK_DIR.'sys/';
		}else {			
			self::$path =  FRAMEWORK_DIR.$path.'/';
		}
		spl_autoload_register(array('factory','loadClass'));
	}
	static function run() {
		factory::addload();
		$param = new sys_init();
		$param->param();
	}
}