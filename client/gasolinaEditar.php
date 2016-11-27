<?php
 
 include('httpful.phar');
 //var_dump($_POST);
 if($_POST["valor"] != null)
 {
 	$login_array = array('var_valor' => $_POST["valor"], 'cod_combustivel' =>$_POST["gasolina"]
 		, 'cod_posto' =>$_POST["posto"], 'idt_valor' => $_POST["idValor"]);
 //var_dump($login_array);
 	$url = "http://localhost/servidor/ta_valor/";
 
 	$body = json_encode($login_array);
 	//var_dump($body);

 
 	$response = \Httpful\Request::put($url)->sendsJson()->body($body)->send();
 	
 	$resutado = $response->body;

var_dump($resutado);
 	if($resutado) 
 		header("Location: postos.php");
}
 ?>