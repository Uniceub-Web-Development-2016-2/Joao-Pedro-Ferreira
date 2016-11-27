<?php
 
 include('httpful.phar');

 if($_POST["valor"] != null && $_POST["gasolina"] != null && $_POST["posto"] != null && $_POST['idValor'])
 {
 	$login_array = array('var_valor' => $_POST["valor"], 'cod_combustivel' =>$_POST["gasolina"], 'cod_posto' =>$_POST["posto"], 'idt_valor' => $_POST['idValor']);
 
 	$url = "http://localhost/servidor/tb_usuario/";
 
 	$body = json_encode($login_array);
 	//var_dump($body);

 
 	$response = \Httpful\Request::put($url)->sendsJson()->body($body)->send();
 	var_dump($response->body);
 	$array = json_decode($response->body, true)[0];
 	
 
 	// if(!empty($array) && $array["email_usuario"] == $_POST["email_usuario"] && $array["psw_usuario"] == $array["psw_usuario"]) 
 	// 	header("Location: page.html");
 
 	// else
 	// 	echo "Pode não mano veio!";
 		//chamar página de erro
 }
 
 ?>