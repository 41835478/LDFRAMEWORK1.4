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
 * Id: User.php  2016年7月10日    Lisonglin
 */
namespace Home\test;
class User {
	public $Name;
	public $Age;
	public function setName($name = ''){
    	$this->Name = $name;
    }
    public function getName() {
    	return $this->Name;
    }
    public function setAge($Age = '') {
    	$this->Age = $Age;
    }
    public function getAge() {
    	return $this->Age;
    }    
}