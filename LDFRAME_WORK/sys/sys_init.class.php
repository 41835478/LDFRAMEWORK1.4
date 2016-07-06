<?php
/**
 * LD库文件
 * ============================================================================
 * * 版权所有 2016-2018   零度网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.hbclnx.com
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * Author: lisonglin
 * Id:sys_init.class.php  2016年7月6日  Lisonglin
 */
class sys_init{
	public $param;
	public $request;
	public function sys_init(){
       $param = isset($_GET['r'])? $_GET['r']: '' ;
       if('' == $param) {
     	  	$param = str_replace($_SERVER['SCRIPT_NAME'], '', $_SERVER['REQUEST_URI']);    	
       		$param = substr($param, 1,strlen($param));
       }
       $ld = explode('/', $param);
       $this->setControllerParam($ld);
       $this->boot();
	}
	public function setControllerParam($param) {
		$this->param['namespace'] = isset($param[1])?$param[1]:'index';
		$this->param['ControllerName'] = isset($param[2])?$param[2]:'index';
		$this->param['fun'] = isset($param[3])?$param[3]:'index';
	}
	public function getControllerName() {
		return $this->param['ControllerName'];
	}
	//--启动控制器
	public function boot() {
		$Controller = '\\Ld\\'.$this->param['namespace'].'\\controller\\'.$this->param['ControllerName'];
		$a = new  $Controller();
		$fun = $this->param['fun'];
		$a->$fun();
	}
	public function get() {
		if(null == $this->request) {
			return $_GET;
		}else if(null == $this->request) {
			return '';
		}else {
			return $this->request;
		}
	}
	public function post() {
		if(null == $this->request) {
			return $_POST;
		}else if(null == $this->request) {
			return '';
		}else {
			return $this->request;
		}
	}
	public function requst() {
		if(null == $this->request) {
			return $_POST;
		}else if(null == $this->request) {
			return '';
		}else {
			return $this->request;
		}
	}

	public function Request($name='',$filter ='') {
		if (!get_magic_quotes_gpc()) {
			if(!empty($_GET)) {
				unset($_REQUEST['r']);
				$_REQUEST = $this->addslashes_deep($_REQUEST);
			}		
			$object = new ArrayObject($_REQUEST);
			$request = new sys_filter($object->getIterator(),$filter);
			if('' == $name) {
				return $request;
			}
			if($request->offsetGet($name)) {
				return $request->offsetGet($name);
			}
		}
	}
	public function param() {
		$this->Request();
	}
	public function addslashes_deep($value,$htmlspecialchars=false) {
		
		if(isset($_GET['r'])) {
			unset($_GET['r']);
		}
		if (empty($value)) {
			return $value;
		}else{
			if(is_array($value)){
				foreach($value as $key => $v){
					unset($value[$key]);
					if(true == $htmlspecialchars){
						$key = addslashes(htmlspecialchars($key));
					}
					else{
						$key = addslashes($key);
					}
	
					if(is_array($v)){
						$value[$key] = addslashes_deep($v);
					}else{
						if(true == $htmlspecialchars){
							$value[$key] = addslashes(htmlspecialchars($v));
						}
						else{
							$value[$key] = addslashes($v);
						}
					}
				}
			}else{
				if(true == $htmlspecialchars){
					$value = addslashes(htmlspecialchars($value));
				}else{
					$value = addslashes($value);
				}
			}
	
			return $value;
		}
	}
}