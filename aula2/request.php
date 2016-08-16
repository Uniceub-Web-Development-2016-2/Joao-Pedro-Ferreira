<?php

class Request{
	private $metodo;
	private $protocol;
	private $ip;
	private $resource;
	private $parameters;
	public function __construct($metodo, $protocol, $ip, $resource, $parameters){
		$this->metodo = $metodo;
		$this->protocol = $protocol;
		$this->ip = $ip;
		$this->resource = $resource;
		$this->parameters = $parameters;
	}
	public function setMetodo($metodo){
		$this->metodo= $metodo;
	}
	public function getMetodo(){
		return $this->metodo;
	}
	public function setProtocol($protocol){
		$this->protocol= $protocol;
	}
	public function getProtocol(){
		return $this->protocol;
	}
	public function setIp($ip){
		$this->ip= $ip;
	}
	public function getIp(){
		return $this->ip;
	}
	public function setResource($resource){
		$this->resource= $resource;
	}
	public function getResource(){
		return $this->resource;
	}
	public function setParameters($parameters){
		$this->parameters= $parameters;
	}
	public function getParameters(){
		return $this->parameters;
	}
	public function toString(){
		$url = Request::getProtocol()."://".Request::getIp()."/".Request::getResource()."?";
		foreach (Request::getParameters() as $parameter){
			$url.=$parameter."&";
			$result = substr($url,0,-1);
		}
		return utf8_encode($result);
	}
}
$test = new Request("post", "http", "teste.com", "testanto", array("param1"=>123,"param2"=>456, "param3"=>555));
echo $test->toString();
