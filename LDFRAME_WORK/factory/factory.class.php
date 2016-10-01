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
					
					}else if ($array[$i] == 'model'){
						
						$className = str_replace('\\', '/', $className);
						$className = $array[0].'/'.$array[1].'/'.$array[count($array)-1];
					}
				
				}
		    
		 	}

		 	$filename = self::$path.$className.".class.php";
			
			$sys_controller = FRAMEWORK_DIR.'controller/'.$className.'.class.php';
			
			$sys_view = FRAMEWORK_DIR.'view/'.$className.'.class.php';

			$sys_driver = FRAMEWORK_DIR.'driver/'.$className.'.class.php';
			
			$sys_model =  FRAMEWORK_DIR.'model/'.$className.'.php';
			
			$use_model = FRAMEWORK_DIR.'../HOME/model/'.$className.'.php';
			
			$sp = str_replace('\\', '/', FRAMEWORK_DIR.'../'.$className.'.php');
		
			$sys_lib = str_replace('/ld', '', str_replace("\\", "/", FRAMEWORK_DIR. $className. '.lib.php'));

 			//$sys_lib = str_replace("\\", "/", FRAMEWORK_DIR. 'lib/' .$className. '.lib.php');
			
    		$sys_lib = str_replace('bException', 'b/Exception', $sys_lib); 
	
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
			
			}else if (is_file($sp)) {				
				require_once $sp;
			
			}else if(is_file($sys_model)){
				
				require_once $sys_model;
		
			} else if(is_file($sys_lib)){
			
				require_once $sys_lib;
			
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