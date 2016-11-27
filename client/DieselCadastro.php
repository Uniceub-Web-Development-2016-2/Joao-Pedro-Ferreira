<?php
 
 include('httpful.phar');

 if($_POST["valorDiesel"] != null)
 {
 	$login_array = array('var_valor' => $_POST["valorDiesel"], 'cod_combustivel' =>$_POST["diesel"]
 		, 'cod_posto' =>$_POST["postoDiesel"]);
 //var_dump($login_array);
 	$url = "http://localhost/servidor/ta_valor/";
 
 	$body = json_encode($login_array);
 	//var_dump($body);

 
 	$response = \Httpful\Request::post($url)->sendsJson()->body($body)->send();
 	
 	$resutado = $response->body;


 	if($resutado) 
 		header("Location: postos.php");
}
 ?>