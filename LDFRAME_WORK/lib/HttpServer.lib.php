<?php
class HttpServer extends sys_filter
{
	
	public $response;
	public $requst;
	public function __construct()
	{
		$this->response = new Request();
	}
	
	
}