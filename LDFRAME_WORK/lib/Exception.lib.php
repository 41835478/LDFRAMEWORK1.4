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
 * Exception.lib.php} 2016年8月16日}  Lisonglin
 */
use ld\controller\view\View;
class ldException extends Exception
{
	public function __construct($message, $code = 0)
	{
		parent::__construct($message, $code);
	}
	public function __toString()
	{
		return __CLASS__.':['.$this->code.']:'.$this->message.'\n';
	}
	public function customFunction() {
		if(DEBUG >= 1 || $this->code > 5) {
			$view = new View();
			$view->assign('traceString', $this->getTraceAsString());
			$view->assign('trace',$this->getTrace());
			$view->assign('file',$this->file);
			$view->assign('line',$this->line);
			$view->assign('Message',$this->message);
			$view->assign('code',$this->code);
		    echo $view->fetch(FRAMEWORK_DIR.'view/tace.php');
		}
	}	
}