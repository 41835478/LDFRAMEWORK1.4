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
 * Id: Utill.class.php  2016年7月10日    Lisonglin
 */
namespace ld\controller\utill;
class Utill{
	static $__ControllerName;
	static $__GROUNP; 
	static $__SERVER_URL;
	static function RequestCommand() {
		$GROUNP = $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
		$param = isset($_GET['r'])? $_GET['r']: '' ;
		if('' == $param) {
			$param = str_replace(HOST, '', $GROUNP);
			$param = substr($param, 1,strlen($param));
		}
		$array = explode('/', $param);
		return $array;
	}
	static function getNameSpace() {
		$ld = self::RequestCommand();
		return !empty($ld[1]) ? $ld[1] : 'index';
	}
	static function getControllerName() {
		$ld = self::RequestCommand();
		return !empty($ld[2]) ? $ld[2] : 'index';
	}
 	
	static function getMethod() {
		$ld = self::RequestCommand();
		return !empty($ld[3]) ? $ld[3] : 'index';
	}
	static function getGrounpName() {
		return GROUNP_NAME;
	}

	static function getModelName() {
		
	}
	static function getIp() {
		
	}
	static function getRequestServerUrl() {
		$REQUEST_FILE = $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].$_SERVER['QUERY_STRING'];
		$FILE_URL =  substr($REQUEST_FILE, 0, strpos($REQUEST_FILE, '.php')).'.php';
		return $FILE_URL;
	}
	static function getRequestUrlParam() {
		$REQUEST_FILE = $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].$_SERVER['QUERY_STRING'];
		$FILE_URL =  substr($REQUEST_FILE, 0, strpos($REQUEST_FILE, '.php')).'.php';
		return str_replace($FILE_URL, '', $REQUEST_FILE);
	}
}