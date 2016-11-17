<?php
include('httpful.phar');
$get_request = 'http://localhost/aula6/tb_usuario/create';
$teste = json_encode($_POST);
$response = \Httpful\Request::post($get_request)->sendsJson()->body($teste)->send();

echo  $response->body;

