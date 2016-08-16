<?php
namespace  ld\controller;
use ld\controller\view\View;
class Controller extends \HttpServer{
	public $view;
	public function __construct() {
		$this->view = new View();
		parent::__construct();
	}
	public function assign($key = '', $values = '') {
	
		$this->view->assign($key, $values);
	
	}
	public function fetch($filename = '') {

		return  $this->view->fetch($filename);
	
	}
	public function display($file = '') {
		
		$this->view->display($file);
	
	}

}