<?php

header("Access-Control-Allow-Origin: *");

define('PASTAPROJETO', 'Teste_Alpha_Back');

/* Função criada para retornar o tipo de requisição */
function checkRequest() {
	$method = $_SERVER['REQUEST_METHOD'];
	switch ($method) {
	  case 'PUT':
	  	$answer = "update";
	    break;
	  case 'POST':	  
	  	$answer = "post";
	    break;
	  case 'GET':
	  	$answer = "get";
	    break;
	  case 'DELETE':
	  	$answer = "delete";
	    break;	
	  default:
	    handle_error($method);  
	    break;
	}
	return $answer;
}

$answer = checkRequest();

$request = $_SERVER['REQUEST_URI']; 

$args = explode('/', rtrim($request, '/'));

$endpoint = array_shift($args);
if (array_key_exists(0, $args) && !is_numeric($args[0])) {
    $verb = array_shift($args);
}

if ($args) {
	$request = '/'.PASTAPROJETO.'/'.$args[0];
}

switch ($request) {
	case '/'.PASTAPROJETO:	
      require __DIR__ . '/view/api.php';
        break;
	case '/'.PASTAPROJETO.'/' :		
        require __DIR__ . '/view/api.php';
        break;
    case '' :
        require __DIR__ . '/view/api.php';
        break;
	case '/'.PASTAPROJETO.'/contatos' :		
		require __DIR__ . '/view/'.$answer.'Contatos.php';
        break;
    default:
		break;		
}