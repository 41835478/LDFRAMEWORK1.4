<?php
namespace ld\controller\view;
use ld\controller\utill\Utill;
class View extends \sys_view{
	public function __construct() {
		$this->conf();
	}
	public function conf() {
		 $this->template_dir = FRAMEWORK_DIR.'../'.GROUNP_NAME.'/'.View.'/'.Utill::getControllerName();
		 $this->cache_dir = FRAMEWORK_DIR.'../'.GROUNP_NAME.'/'.View.'/'.CACHE_NAME;
		 $this->compile_dir = FRAMEWORK_DIR.'../'.GROUNP_NAME.'/'.View.'/'.CACHE_NAME;
		 $this->direct_output=true;
		 $this->force_compile  = true;		 
	}

}