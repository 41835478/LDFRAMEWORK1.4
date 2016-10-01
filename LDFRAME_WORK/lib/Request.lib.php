<?php
/**
 * LD库文件
 * ============================================================================
 * * 版权所有 2016-2018   科技有限公司，并保留所有权利。
 * 网站地址: php.com
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * Author: lisonglin
 * Request.lib.php} 2016年8月16日}  Lisonglin
 */

namespace ld\lib;
class Request
{
	private $requst;
	private $server;
	public $ip;
	private $get;
	private $post;
	private $file;
	public function __construct(){
		if(isset($_REQUEST['r'])) {
			unset($_REQUEST['r']);
		}

		$this->param();
	
	}
	public function getIP() { 
		if (getenv('HTTP_CLIENT_IP')) { 
			$ip = getenv('HTTP_CLIENT_IP'); 
		} 
		elseif (getenv('HTTP_X_FORWARDED_FOR')) { 
			$ip = getenv('HTTP_X_FORWARDED_FOR'); 
		} 
		elseif (getenv('HTTP_X_FORWARDED')) { 
			$ip = getenv('HTTP_X_FORWARDED'); 
		} 
		elseif (getenv('HTTP_FORWARDED_FOR')) { 
			$ip = getenv('HTTP_FORWARDED_FOR'); 
		
		} 
		elseif (getenv('HTTP_FORWARDED')) { 
			$ip = getenv('HTTP_FORWARDED'); 
		} 
		else { 
			$ip = $_SERVER['REMOTE_ADDR']; 
		} 
		return $ip; 
	} 
	public function get($v = '')
	{
		if('' != $v)
		{
			return isset($this->get[$v])? $this->get[$v]: '';
		}
		$get = new \stdClass();
		foreach($this->get as $key => $val)
		{
			$get->$key = $val;
		}
		return $get;
	}
	public function post($v = '')
	{
		$post = new \stdClass();
		
		if('' != $v)
		{
			return isset($this->post[$v])? $this->post[$v] :'';
		}
		foreach($this->post as $key => $val)
		{
			$post->$key = $val;
		}
		return $post;
	}
	public function getServer()
	{
		
	}
	public function getfile()
	{
		
	}
	private function param()
	{
		
		$this->requst = $this->addslashes_deep($_REQUEST);	
		$this->get = $this->addslashes_deep($_GET);
		$this->post = $this->addslashes_deep($_POST);
		$this->file = $this->addslashes_deep($_FILES);
		$this->ip = $this->getIP();
		foreach($this->requst as $key =>$val)
		{
			$this->set($key,$val);
		}
	}
	public function set($key,$value)
	{
		$this->$key = $value;
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
						throw new \ldException('参数不能为数组',1);
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