<?php
include __DIR__.'/../control/contatosController.php';
 
$data = file_get_contents('php://input');
$obj =  json_decode($data);
//echo $obj->titulo;

$id = $obj->id;

if(!$id) {
	http_response_code(400);
	echo json_encode(array("mensagem" => "É necessário um ID para deletar"));
}
else {
	if(!empty($data)){	
	 $contatosControl = new ContatosControl();
	 $contatosControl->delete($obj,$id);
     header('Location:listar.php');
	}
}

?>