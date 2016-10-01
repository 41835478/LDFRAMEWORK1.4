<?php
class Model extends sql{
	static $sql;
	static function table($table = '') {
		$mysql = new Mysql();   
		self::$sql = new sql();
		self::$sql->tableName = $table;
		self::$sql->pdo = $mysql;
		return self::$sql;
	}
}