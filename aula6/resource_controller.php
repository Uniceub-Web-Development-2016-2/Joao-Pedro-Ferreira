<?php
include_once ('request.php');
include_once ('db_manager.php');
class ResourceController
{	
 	private $METHODMAP = ['GET' => 'search' , 'POST' => 'create' , 'PUT' => 'update', 'DELETE' => 'remove' ];
	
	public function treat_request($request) {
		return $this->{$this->METHODMAP[$request->getMethod()]}($request);
	
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
		
	private function queryParams($params) {
		$query = "";		
		
		foreach($params as $key => $value) {
			$query .= $key.' = '.'"'.$value.'"'.' AND ';	
		}
		$query = substr($query,0,-5);
		
		return $query;
	}

	private function create($request){
//EXEMPLO REQUEST USUARIO
//    http://localhost/aula6/tb_usuario?nme_usuario=NETO VIADO&cpf_usuario=123456&psw_usuario=0987&cod_perfil=1&email_usuario=email@neto.com

		if($request->getParameters()){
			
			$parametroQuery = "";
			$parametroQueryColum ="";
			foreach($request->getParameters() as $key => $value) {
			$parametroQuery .= '"'.$value.'"'.' , ';	
			$parametroQueryColum .= ''.$key.''.' , ';
			}

			
		$parametroQuery = substr($parametroQuery,0,-3);
		$parametroQueryColum = substr($parametroQueryColum,0,-3);

		$query = 'INSERT INTO bd_combustivel.'.$request->getResource().' ('.$parametroQueryColum.')VALUES ('.$parametroQuery.')';
			
			$result = (new DBConnector())->query($query);

			return $result;
		}
	}

	private function update ($request){
//EXEMPLO REQUEST USUARIO
//    http://localhost/aula6/tb_usuario?nme_usuario=NETO VIADO&cpf_usuario=123456&psw_usuario=0987&cod_perfil=1&email_usuario=email@neto.com&idt_usuario=1


		if($request->getParameters()){
			
			$parametroQuery = "";
			$ultimo ="";
			foreach($request->getParameters() as $key => $value) {
			$parametroQuery .= $key.' = '.'"'.$value.'"'.' , ';	
			$ultimo= $key.'='.$value;
		
			}

			
			
		 $parametroQuery = substr($parametroQuery,0,-3);
		$query = 'UPDATE bd_combustivel.'.$request->getResource().' SET '.$parametroQuery.' WHERE '.$ultimo;
		 	$result = (new DBConnector())->query($query);

		 	return $result;
		}
	}	

	private function remove($request){

		//EXEMPLO REQUEST USUARIO
//    http://localhost/aula6/tb_usuario?idt_usuario=1
			$parametro = "";
			if($request->getParameters()){
			foreach($request->getParameters() as $key => $value) {
			$parametro.= $key.' = '.'"'.$value.'"'.' , ';	
			}

			$parametro = substr($parametro,0,-3);
				$query = 'DELETE FROM bd_combustivel.'.$request->getResource().' WHERE '.$parametro;
				$result = (new DBConnector())->query($query);
				return $result;
			}
	}
}

