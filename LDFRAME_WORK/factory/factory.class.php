<?php
class factory {
	public static $path = FRAMEWORK_DIR.'sys/';
	public static $obj;
	static function loadClass($className) {
		 	if(strpos($className, '\\')) {
				$array = explode('\\', $className);
				for($i=0; $i<count($array);$i++) {
					if($array[$i] == 'controller') {
						$className = $array[$i+1];
						break;
					}
				}
		    }			
			$filename = self::$path.$className.".class.php";
			$sys_controller = FRAMEWORK_DIR.'controller/'.$className.'.class.php';
			$sys_view = FRAMEWORK_DIR.'view/'.$className.'.class.php';
			$sys_driver = FRAMEWORK_DIR.'driver/'.$className.'.class.php';
			if (is_file($filename)) {
				require_once $filename;
			}else if(is_file(FRAMEWORK_DIR.'../'.GROUNP_NAME.'/controller/'.$className.'.php')){			
				require_once  FRAMEWORK_DIR.'../'.GROUNP_NAME.'/controller/'.$className.'.php';
			}else if(is_file($sys_controller)){
				require_once $sys_controller;
			}else if(is_file($sys_view)) {
				require_once $sys_view;
			}else if(is_file($sys_driver)) {
				require_once $sys_driver;			
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
		self::$obj= new sys_init();
		self::$obj->param();
	}
}