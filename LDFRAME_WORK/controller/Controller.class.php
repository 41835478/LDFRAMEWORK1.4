<?php
namespace  ld\controller;
use ld\controller\view\View;
class Controller {
	public $view;
	public function __construct(){
		$this->view = new View();
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