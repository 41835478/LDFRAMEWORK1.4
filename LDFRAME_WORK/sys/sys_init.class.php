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

class sys_init extends \HttpServer{
	public $param;
	public $request;
	public $url;
	public function sys_init(){
	   $this->url = $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];	
	   $param = isset($_GET['r'])? $_GET['r']: '' ;
       if('' == $param) {
     	  	$param = str_replace(HOST, '', $this->url);
     	  	$param = substr($param, 1,strlen($param));
       }
       $ld = explode('/', $param);
       $this->setControllerParam($ld);
       $this->boot();
	}
	public function param(){
		
		
	}
	public function setControllerParam($param) {
		$this->param['grounp'] =  !empty($param[0])?$param[0]:'index';
		$this->param['namespace'] = !empty($param[1])?$param[1]:'index';
		$this->param['ControllerName'] = !empty($param[2])?$param[2]:'index';
		$this->param['fun'] = !empty($param[3])?$param[3]:'index';
	}
	public function getControllerName() {
		$this->url = $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
		$param = isset($_GET['r'])? $_GET['r']: '' ;
		if('' == $param) {
			$param = str_replace(HOST, '', $this->url);
			$param = substr($param, 1,strlen($param));
		}
		$ld = explode('/', $param);
		$this->setControllerParam($ld);
		return $this->param['ControllerName'];
	}
	//--启动控制器
	public function boot() {	
		
		$servlet_conf_file = $this->param['grounp'].'/Conf/'.SERVLET;
		
		$Controller = '\\'.$this->param['grounp'].'\\'.$this->param['namespace'].'\\controller\\'.$this->param['ControllerName'];
		if(is_file($servlet_conf_file))
		{
			$param = str_replace(HOST, '', $this->url);
			$servlet_class = new ClassPathXmlApplicationContext($servlet_conf_file);
			$servlet = $servlet_class->toclassPath($servlet_class->getServlet($param));
			$Controller = $servlet ? $servlet : $Controller;
		}
		
		
	 	 //--判断控制器是否存在
 		if(!class_exists($Controller)) {
			throw new ldException("<br/>".$Controller."没有找到该类",11);
 			new $Controller();
 			exit;
		}
		
			//--创建一个控制器实例
		$Command = new  $Controller();
			
		$fun = $this->param['fun'];
		if(!method_exists($Command,$fun)){
			throw new ldException("<br/>定义".$fun."方法",11);
			exit;
		}
		$HTML = $Command->$fun();
		if($HTML) {
			echo $HTML;
			exit;
		}
	}
}