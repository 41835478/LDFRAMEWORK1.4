<?php
class url {
	public  $url;
	public  $Host;
	public function setUrl($url) {
		
		
		$this->url = $url;
	
	}
	public function getHost() {
	
		return  $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].$_SERVER['QUERY_STRING'];
	
	}
}