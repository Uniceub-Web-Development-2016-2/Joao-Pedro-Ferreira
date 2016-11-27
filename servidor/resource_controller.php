<?php

include_once ('request.php');
include_once ('db_manager.php');

class ResourceController
{

	//private $connection;


	//public function __construct() 

	//{
	//	$this->connection = new DBConnector();	
	//}

		
 	private $METHODMAP = ['GET' => 'search' , 'POST' => 'create' , 'PUT' => 'update', 'DELETE' => 'remove' ];
	
	public function treat_request($request) {

		if($request->getMethod() == "POST" && $request->getOperation() == "login")
		{
			return $this->login($request);
		}
		if($request->getMethod() == "GET" && $request->getOperation() == "verificarCombustivel")
		{
			return $this->verificarCombustivel($request);
		}

		if($request->getMethod() == "GET" && $request->getOperation() == "verValor")
		{
			return $this->verValor($request);
		}
		return $this->{$this->METHODMAP[$request->getMethod()]}($request);
	
	}

	public function verificarCombustivel($request) {
		

		$query = 'SELECT valor.var_valor, valor.cod_combustivel, valor.cod_posto, valor.idt_valor FROM ta_valor valor 
				INNER JOIN tb_posto posto ON posto.idt_posto = valor.cod_posto
				INNER JOIN tb_usuario usuario ON usuario.idt_usuario = posto.cod_usuario 
				WHERE '.self::queryParams($request->getParameters());

				$result = (new DBConnector())->query($query); 
                return $result->fetchAll(PDO::FETCH_ASSOC);
	}	
	public function verValor($request) {

		$query = 'SELECT posto.nme_posto, posto.endereco_posto, posto.dta_modificacao_posto, valor.var_valor, combustivel.nme_tipo_combustivel, usuario.nme_usuario  FROM bd_combustivel.ta_valor valor 
			INNER JOIN tb_posto posto ON  valor.cod_posto = posto.idt_posto
			INNER JOIN tb_combustivel combustivel  ON valor.cod_combustivel = combustivel.idt_combustivel
			INNER JOIN tb_usuario usuario ON usuario.idt_usuario = posto.cod_usuario
			WHERE combustivel.'.self::queryParams($request->getParameters());
			
				$result = (new DBConnector())->query($query); 
                return $result->fetchAll(PDO::FETCH_ASSOC);
		

	}

	public function login($request) {
		$query = 'SELECT * FROM bd_combustivel.'.$request->getResource().' WHERE '.self::bodyParams($request->getBody());
		$result = (new DBConnector())->query($query); 
                return $result->fetchAll(PDO::FETCH_ASSOC);
		

	}	

	private function search($request) {

		if(empty($request->getParameters())){
				$query = 'SELECT * FROM bd_combustivel.'.$request->getResource();


		
		$result = (new DBConnector())->query($query);
		
		return $result->fetchAll(PDO::FETCH_ASSOC);
		}else{
			$query = 'SELECT * FROM bd_combustivel.'.$request->getResource().' WHERE '.self::queryParams($request->getParameters());
		
		$result = (new DBConnector())->query($query); 
		return $result->fetchAll(PDO::FETCH_ASSOC);
		}

		
	}
	
	private function create($request) {
		
		$body = $request->getBody();
		$resource = $request->getResource();
		$query = 'INSERT INTO bd_combustivel.'.$resource.' ('.$this->getColumns($body).') VALUES ('.$this->getValues($body).')';

		
		return (new DBConnector())->query($query);
		 
	}
	
	private function update($request) {


				if($request->getBody()){
			
			$parametroQuery = "";
			$ultimo ="";
			$colunas = json_decode($request->getBody());
			foreach($colunas as $key => $value) {

				if($key != 'idt_valor')
					$parametroQuery .= $key.' = '.'"'.$value.'"'.' , ';	
					$ultimo= $key.'='.$value;
		
			}

			
			
		 $parametroQuery = substr($parametroQuery,0,-3);

		$query = 'UPDATE bd_combustivel.'.$request->getResource().' SET '.$parametroQuery.' WHERE '.$ultimo;
		 	$result = (new DBConnector())->query($query);

		 	return $result;
		}


        }
	
	private function bodyParams($json) {
		$criteria = "";
                $array = json_decode($json, true);
                foreach($array as $key => $value) {
                                $criteria .= $key." = '".$value."' AND ";
                 
                }
                return substr($criteria, 0, -5);
	
		
	}

	
	private function getUpdateCriteria($json)
	{
		$criteria = "";
		$where = " WHERE ";
		$array = json_decode($json, true);
		
		foreach($array as $key => $value) {
			if($key != 'id')
				$criteria .= $key." = '".$value."',";
				$ultimo= $key.'='.$value;
		}
		return substr($criteria, 0, -1).$where.$ultimo;
	}	

private function getUpdateCriteria2($json)
	{
		$criteria = "";
		$where = " WHERE ";
		$array = json_decode($json, true);
		foreach($array as $key => $value) {
			if($key != 'id')
				$criteria .= $key." = '".$value."',";
			
		}
		return substr($criteria, 0, -3).$where." idt = ".$array['id'];
	}

	private function getColumns($json)
	{
		$array = json_decode($json, true);
		$keys = array_keys($array);
		return implode(",", $keys);
	
	}

	private function getValues($json) 
        {
                $array = json_decode($json, true);
                $keys = array_values($array);
                $string =  implode("','", $keys);
		return "'".$string."'";
        
        }

	
	private function queryParams($params) {
		$query = "";		
		foreach($params as $key => $value) {
			$query .= $key.' = '.$value.' AND ';	
		}
		$query = substr($query,0,-5);
		return $query;
	}
   
 
		
}




