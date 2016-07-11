<?php
class ClassPathXmlApplicationContext extends \DOMDocument{	
	private $xmlfile;
	private $bean;
	public function __construct($file = '') {
		 $this->xmlfile = $file;
	}
	public function getBean($ClassName = '') {
		$this->load($this->xmlfile);
		$beans = $this->getElementsByTagName('bean');
		for($i=0; $i<$beans->length; $i++) {
			if($ClassName == $beans->item($i)->getAttribute('id')) {
				 $this->className = '\\'.$beans->item($i)->getAttribute('class');
				 $this->bean = new $this->className();
			}
		}
		foreach ($beans as $property) {
			$p = $property->getElementsByTagName('property');
			for($j = 0; $j<$p->length; $j++) {
				$fun = 'set'.$p->item($j)->getAttribute('name');
				$funValue = $p->item($j)->getAttribute('value');
				if(!method_exists($this->bean, $fun)) {
					echo $this->className .'类中没有找到'.$fun.'方法不存在';
					exit;
				}
				$this->bean->$fun($funValue);
			}
		}
		return $this->bean;
	}
}