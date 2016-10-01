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
 * Id: sql.class.php  2016年7月16日    Lisonglin
 */
class sql{
	
	protected  $tableName = '';
	
	protected  $pdo = '';
	
	private $colum;
	
	private $sqlexcute;
	
	private $stmt;
	
	private $limit;
	
	private $lefttable;
	
	private $in;
	
	public function __construct() {
	
		$this->limit = '';
		
		$this->colum = '';
		
		$this->sqlexcute = '';
	}
	
	
	public function tables($tableName = '') {
	
		$this->tableName = $tableName;
	}
	
	
	public function clearSql() {
	
		$this->limit = '';
		
		$this->colum = '';
		
		$this->sqlexcute = '';
		
		$this->lefttable = '';
		
		$this->in = '';
	}
	
	public function colum($colum = '') {
		
		if('' == $colum) {
		
			$colum = ' * ';
		
		}else {
		
			$this->colum = ' ' .$colum. ' ';
		}
		
		return $this;
	}
	public function limit($start = '' , $end = '') {
		if('' == $end) {
		
			$this->limit = ' LIMIT 0,'.$start.'  ';
		
		}else {
		
			$this->limit = ' LIMIT '.$start.','.$end.' ';
	
		}
		
		return $this;
	
	}
	public function left($lefttable = '') {
	
		$this->lefttable .= ' LEFT JOIN '. $lefttable;

		return $this;
	
	}
	public function in($in) {
		
		$this->in = $in;
		
		return $this;
	
	}
	public function select($sql = '') {
	
		$row = null;
		
		$this->colum = $this->colum ? $this->colum : ' * ';		
		
		if('' == $sql) {
		
			$this->sqlexcute ='SELECT ' .$this->colum . ' FROM '.$this->tableName.$this->limit;
		
		}else {
		
			$this->sqlexcute =$sql;
		
		}
		
		if($this->lefttable) {
		
			$this->sqlexcute ='SELECT ' .$this->colum . ' FROM '.$this->tableName.$this->lefttable.' IN '. $this->in.$this->limit;
		}
		$this->stmt = $this->pdo->connection()->prepare($this->sqlexcute);
		
		$this->stmt->execute();
		
		$this->clearSql();

		while($rs = $this->stmt->fetch()){
			
			$row[] = (Object)$rs;
		
		}
		return $row;
	}	
}