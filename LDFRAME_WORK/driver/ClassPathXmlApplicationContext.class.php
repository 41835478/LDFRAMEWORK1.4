<?php

class ClassPathXmlApplicationContext extends \DOMDocument{	
	private $xmlfile;
	private $bean;
	private $class;
	public function __construct($file = '') {
	
		$this->xmlfile = $file;
	}
	//--类路径转换
	public function toPath($classPath = '',$className = '') {
		$class = $classPath.'.'.$className;
		return '\\'.$this->class = str_replace('.', '\\', $class);	
	}
	public function toclassPath($classPath)
	{
		$this->xmlfile = '';
		if($classPath === false)
		{
			return $classPath;
		}
		return str_replace('.', '\\', $classPath);
	}	
	public function getServlet($classPath)
	{
		$servlet_name = '';
		$servlet_class = '';
		$this->load('/'.$this->xmlfile);
		
		$servlet = $this->getElementsByTagName('servlet');
		
		$servlet_mapping = $this->getElementsByTagName('servlet-mapping');
		$i = 0;
	 	while($i < $servlet_mapping->length) {
			$servlet_mapping_name = $servlet_mapping->item($i)->getElementsByTagName('servlet-name');
			$servlet_pattern = $servlet_mapping->item($i)->getElementsByTagName('servlet-pattern');			
			for($j = 0; $j< $servlet_mapping_name->length; $j++) {				
				if ($classPath  ==  $servlet_pattern->item($j)->nodeValue)
				{					
					$servlet_name = $servlet_mapping_name->item($j)->nodeValue;					
					for($k = 0; $k < $servlet->length; $k++) {
						$servletNode_class = $servlet->item($i)->getElementsByTagName('servlet-class');
						$servletNode_name  = $servlet->item($i)->getElementsByTagName('servlet-name');
						for($s = 0; $s < $servletNode_name->length; $s++) {
							if($servlet_name == $servletNode_name->item($s)->nodeValue)
							{
								$this->xmlfile = '';
								return $servletNode_class->item($s)->nodeValue;
							}
						}
					
					}
				}
			
			}
			$i = -~$i;
		} 
		$this->xmlfile = '';
		return false;
	}	
	public function getBean($ClassName = '') {		
		$this->load($this->xmlfile);		
		
		$beans = $this->getElementsByTagName('bean');		
		for($i=0; $i<$beans->length; $i++) {		
			if($ClassName == $beans->item($i)->getAttribute('id')) {	
    			$this->className = '\\'.$beans->item($i)->getAttribute('class');		
    			$this->toPath($beans->item($i)->getAttribute('classPath'),$beans->item($i)->getAttribute('class'));				
				//--如果类不存在
 				
    			if(!class_exists($this->class)) {
    				throw new \ldException('出现了一个错误',1);
    				new $this->class();
    				exit;
    			}   			
		        $this->bean = new $this->class();				 		        
			}
		}
	 	foreach ($beans as $property) {			
			$p = $property->getElementsByTagName('property');
			for($j = 0; $j<$p->length; $j++) {			
				$fun = 'set'.$p->item($j)->getAttribute('name');				
				$funValue = $p->item($j)->getAttribute('value');	
				if(!method_exists($this->bean, $fun)) {
					throw new \ldException('类中没有找到'.$fun.'方法不存在',1000);				
					exit;				
				}				
				$this->bean->$fun($funValue);
			}			
		}		
		return $this->bean;
	}
}