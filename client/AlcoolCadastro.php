<?php
 
 include('httpful.phar');
 //var_dump($_POST);
 if($_POST["valorAlcool"] != null)
 {
 	$login_array = array('var_valor' => $_POST["valorAlcool"], 'cod_combustivel' =>$_POST["alcool"]
 		, 'cod_posto' =>$_POST["postoAlcool"]);
 //var_dump($login_array);
 	$url = "http://localhost/servidor/ta_valor/";
 
 	$body = json_encode($login_array);
 	//var_dump($body);

 
 	$response = \Httpful\Request::post($url)->sendsJson()->body($body)->send();
 	
 	$resutado = $response->body;

var_dump($resutado);
 	if($resutado) 
 		header("Location: postos.php");
}
 ?>