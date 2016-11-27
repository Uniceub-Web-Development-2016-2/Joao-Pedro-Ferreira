<?php

  //  http://localhost/aula6/tb_usuario?nme_usuario=$_&cpf_usuario=123456&psw_usuario=0987&cod_perfil=1&email_usuario=email@neto.com


include('httpful.phar');

if($_POST["email_usuario"] != null && $_POST["psw_usuario"] != null)
 {
 	$cadastrar_array = array('email_usuario' => $_POST["email_usuario"], 'psw_usuario' =>$_POST["psw_usuario"],'cod_perfil' =>$_POST["cod_perfil"],'nme_usuario' =>$_POST["nme_usuario"],'cpf_usuario' =>$_POST["cpf_usuario"]);
 
 	$url = "http://localhost/servidor/tb_usuario/";

 	$body = json_encode($cadastrar_array);
 
 	$response = \Httpful\Request::post($url)->sendsJson()->body($body)->send();
 	
 	$resutado = $response->body;
 	echo $resutado ;


 	if($resutado == 'false') 
 		header("Location: cadastro.php");
 
 	else
 		header("Location: login.php");
 		//chamar página de erro
 }