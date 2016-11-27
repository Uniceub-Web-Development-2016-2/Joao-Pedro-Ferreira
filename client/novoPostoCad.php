<?php
 
 include('httpful.phar');
 //var_dump($_POST);
 if($_POST["nomePosto"] != null && $_POST["endereco"] =! null)
 {
 	$login_array = array('nme_posto' => $_POST["nomePosto"], 'lat_posto' =>$_POST["latitude"]
 		, 'lon_posto' =>$_POST["longitude"], 'cod_usuario' =>$_POST["usuario"], 'endereco_posto' =>$_POST["endereco"]
 		, 'desativo_posto' =>$_POST["inativo"], 'ativo_posto' =>$_POST["ativo"], 'dta_cricao_posto' =>$_POST["data"]);
 //var_dump($login_array);
 	$url = "http://localhost/servidor/tb_posto/";
 
 	$body = json_encode($login_array);
 	//var_dump($body);

 
 	$response = \Httpful\Request::post($url)->sendsJson()->body($body)->send();
 	
 	$resutado = $response->body;

 	if($resutado) 
 		header("Location: postos.php");
 
 	else
 		header("Location: novoPosto.php");
 }
 ?>