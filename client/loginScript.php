<?php
 
session_start();

 include('httpful.phar');
 
 if($_POST["email_usuario"] != null && $_POST["psw_usuario"] != null)
 {
 	$login_array = array('email_usuario' => $_POST["email_usuario"], 'psw_usuario' =>$_POST["psw_usuario"]);
 
 	$url = "http://localhost/servidor/tb_usuario/login";
 
 	$body = json_encode($login_array);
 	//var_dump($body);

 
 	$response = \Httpful\Request::post($url)->sendsJson()->body($body)->send();
 	
 	$array = json_decode($response->body, true)[0];
 	
 	// if(!empty($array) && $array["email_usuario"] == $_POST["email_usuario"] && $array["psw_usuario"] == $array["psw_usuario"]) 
 	// 	header("Location: page.html");
 		if(!empty($array) && $array["email_usuario"] == $_POST["email_usuario"] && $array["psw_usuario"] == $array["psw_usuario"]){
  		$_SESSION["email_usuario"] = $array["email_usuario"];
 		$_SESSION["nme_usuario"] = $array["nme_usuario"];
		$_SESSION["idt_usuario"] = $array["idt_usuario"];
  		header("Location: perfil.php");
 
 	}
 
 	else
 		echo "Pode não mano veio!";
 		//chamar página de erro
 }
 
 ?>