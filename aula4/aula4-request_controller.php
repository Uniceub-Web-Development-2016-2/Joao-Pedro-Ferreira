<?php
 

 class RequestController

 


 const VALID_METHODS = array('GET', 'POST', 'PUT', 'DELETE');
 const VALID_PROTOCOLS = array('HTTP/1.1', 'HTTPS/1.1');

 	public function create_request($request_info)
 	{

 		if(!self::is_valid_method($request_info['REQUEST_METHOD']))
 		{
 			return array("code" => "405", "message" => "method not allowed");
 			
 	if(!self::is_valid_protocol($request_info['SERVER_PROTOCOL']))
 		{
 			return array("code" => "406", "message" => "Protocol not Accept");
 			
 		}
 		if(!self::is_valid_server_address($request_info['SERVER_ADDR']))
 		{
 		return array("code" => "401", "message" => "Not Authorized!");
 			
 		}
 
		if(!self::is_valid_client_address($request_info['REMOTE_ADDR']))
 	{
 		return array("code" => "401", "message" => " Not Authorized");
 		
}

		if(!self::is_valid_query_string($request_info['QUERY_STRING']))
		{
			return array("code" => "417", "message" => "The server can not meet the requirements of the Expect request header field.");
 		
 	}

 	if(!self::is_valid_path($request_info['PATH_INFO']))
 	{
 		return array("code" => "423", "message" => "The resource that is being accessed is locked.");
 		
 		}
 
 	//	$request_info['REMOTE_ADDR'];
 	//	$request_info['SERVER_ADDR'];
 	//	$request_info['SERVER_PROTOCOL'];
 	//	$request_info['REQUEST_URI'];
 	//	$request_info['QUERY_STRING'];
 	//	file_get_contents('php://input');
 		
 	//	return new Request();
 		
 	}
 	
 	public function is_valid_method($method)
 	{
 		if( is_null($method) || !in_array($method, self::VALID_METHODS))
			return false;
 		
 		return true;
 	}
 
 
	public function is_valid_method($protocol)
 	{
 		if( is_null($protocol) || !in_array($protocol, self::VALID_PROTOCOLS))
			return false;
 		
 		return true;
 	}
 	public function is_valid_server_address($server_address)
	{
		if (filter_var($server_address, FILTER_VALIDATE_IP) === false)
			return false;
		
		return true;
	}

	public function is_valid_client_address($client_address)
	{
		if (filter_var($client_address, FILTER_VALIDATE_IP) === false)
			return false;
		
		return true;
	}

	public function is_valid_query_string($query_string)
	{
		if (filter_var($query_string, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === false)
 			return false;
 		
		return true;
 	}
 
 	public function is_valid_path($path)
 	{
 		if (filter_var($path, FILTER_VALIDATE_URL, FILTER_FLAG_PATH_REQUIRED) === false)
 		return false;
 		
 		return true;
 	}
 
 
 }