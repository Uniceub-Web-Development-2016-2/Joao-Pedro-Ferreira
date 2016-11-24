<?php
 
 include('httpful.phar');

 if($_POST["valor"] != null && $_POST["alcool"] != null && $_POST["posto"] != null)
 {
 	$login_array = array('var_valor' => $_POST["valor"], 'cod_combustivel' =>$_POST["alcool"], 'cod_posto' =>$_POST["posto"]);
 
 	$url = "http://localhost/servidor/tb_usuario/alcool";
 
 	$body = json_encode($login_array);
 	//var_dump($body);

 
 	$response = \Httpful\Request::post($url)->sendsJson()->body($body)->send();
 	var_dump($response->body);
 	$array = json_decode($response->body, true)[0];
 	
 
 	// if(!empty($array) && $array["email_usuario"] == $_POST["email_usuario"] && $array["psw_usuario"] == $array["psw_usuario"]) 
 	// 	header("Location: page.html");
 
 	// else
 	// 	echo "Pode não mano veio!";
 		//chamar página de erro
 }
 
 ?>