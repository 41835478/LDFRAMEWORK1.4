<?php
namespace Ld\index\controller;
class test {
	public function en() {
	  $r =  simplexml_load_file(FRAMEWORK_DIR.'../Home/conf/web.xml');
	  var_dump($r);
	  echo $r->class;
	}  
	public function ds() {
		echo 'c';
	}
}