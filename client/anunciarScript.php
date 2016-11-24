<?php

  //  http://localhost/aula6/tb_usuario?nme_usuario=$_&cpf_usuario=123456&psw_usuario=0987&cod_perfil=1&email_usuario=email@neto.com


include('httpful.phar');

if( $_POST["var_valor"] != null)
 {
 	$cadastrar_array = array('cod_posto' =>$_POST["codPosto"],'var_valor' =>$_POST["var_valor"],'cod_combustivel' => $_POST['comboCombustivel']);
 
 	$url = "http://localhost/servidor/ta_valor/";

 	$body = json_encode($cadastrar_array);
 
 	$response = \Httpful\Request::post($url)->sendsJson()->body($body)->send();
 	
 	$resutado = $response->body;
 	echo $resutado ;


 	// if($resutado == 'false') 
 	// 	header("Location: anunciar.html");
 
 	// else
 	// 	header("Location: anuncios.html");
 	// 	//chamar página de erro
 }