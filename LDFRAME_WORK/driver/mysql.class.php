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
 * Id: db.class.php  2016年7月11日    Lisonglin
 */
class Mysql {
	
	
	private $pdo;
	
	private $host;
	
	private $database;
	
	private $username;
	
	private $password;
	
	private $constr;
	
	public $con;
	
	public function __construct() {
		
		$this->connection();
	
	}
	public function loadConfig($Config = '') {
		
		$this->host =  sys_config::get("DBHOST");
		$this->database = sys_config::get("DBNAME");
		
		$this->username = sys_config::get("DBUSER");
		
		$this->password =  sys_config::get("DBPASSWORD");
	
		$this->constr = 'mysql:host='.$this->host.';dbname='.$this->database;		
	
	}
	
	public function connection($constr = '') {
	
		$this->loadConfig();		
	
		$this->con = new \PDO($this->constr,$this->username,$this->password);
    
		return $this->con;
	}
}