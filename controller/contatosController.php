<?php
include __DIR__.'/../model/contatosAlpha.php';

class ContatosControl{
	function insert($obj){		
		$contatos = new Contatos();			
		return $contatos->insert($obj);		
	}

	function update($obj,$id){
		$contatos = new Contatos();
		return $contatos->update($obj,$id);
	}

	function delete($obj,$id){
		$contatos = new Contatos();
		return $contatos->delete($obj,$id);
	}

	function find($id = null){
		$contatos = new Contatos();
		return $contatos->find($id);
	}

	function findAll(){
		$contatos = new Contatos();
		return $contatos->findAll();
	}
}

?>