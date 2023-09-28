<?php

class Contatos extends Conexao {
    private $id; 
	private $nome;
    private $data_nascimento;    
    private $email;
    private $profissao;
    private $telefone;
    private $celular;
    private $whatsapp;
    private $notificacoes_email;
    private $notificacoes_sms;

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getNome() {
        return $this->nome;
    }
    public function setNome($nome) {
        $this->nome = $nome;
        return $this;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }
    
    public function getProfissao() {
        return $this->profissao;
    }

    public function setProfissao($profissao) {
        $this->profissao = $profissao;
        return $this;
    }
    
    public function getTelefone()  {
        return $this->telefone;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
        return $this;
    }
    
    public function getDataNascimento()   {
        return $this->data_nascimento;
    }

    public function setDataNascimento($data_nascimento) {
        $this->data_nascimento = $data_nascimento;
        return $this;
    }

    public function getCelular()   {
        return $this->celular;
    }

    public function setCelular($celular) {
        $this->celular = $celular;
        return $this;
    }

    public function getWhatsapp()   {
        return $this->whatsapp;
    }

    public function setWhatsapp($whatsapp) {
        $this->whatsapp = $whatsapp;
        return $this;
    }

    public function getNotificacoesEmail()   {
        return $this->notificacoes_email;
    }

    public function setNotificacoesEmail($notificacoes_email) {
        $this->notificacoes_email = $notificacoes_email;
        return $this;
    }

    public function getNotificacoesSMS()   {
        return $this->notificacoes_sms;
    }

    public function setNotificacoesSMS($notificacoes_sms) {
        $this->notificacoes_sms = $notificacoes_sms;
        return $this;
    }
    
    public function insert($obj){    
    	$sql = "INSERT INTO tbl_contatos_alpha(nome,data_nascimento,profissao,email, telefone, celular, whatsapp, notificacoes_email, notificacoes_sms) VALUES (:nome,:data_nascimento,:email,:profissao,:telefone,:celular,:whatsapp,:notificacoes_email,:notificacoes_sms)";
    	$consulta = Conexao::prepare($sql);
        $consulta->bindValue('nome',  $obj->nome);
        $consulta->bindValue('data_nascimento' , $obj->data_nascimento);
        $consulta->bindValue('profissao' , $obj->profissao);
        $consulta->bindValue('email', $obj->email);
        $consulta->bindValue('telefone' , $obj->telefone);
        $consulta->bindValue('celular' , $obj->celular);
        $consulta->bindValue('whatsapp' , $obj->whatsapp);
        $consulta->bindValue('notificacoes_email' , $obj->notificacoes_email);
        $consulta->bindValue('notificacoes_sms' , $obj->notificacoes_sms);
    	$consulta->execute();
        return Conexao::lastId();
	}

	public function update($obj,$id = null){
		$sql = "UPDATE tbl_contatos_alpha
            SET nome = :nome, data_nascimento = :dataNascimento, email = :email, profissao = :profissao, telefone = :telefone, celular = :celular, whatsapp = :whatsapp, notificacoes_email = :notificacoes_email, notificacoes_sms = :notificacoes_sms
        WHERE id = :id ";
		$consulta = Conexao::prepare($sql);
		$consulta->bindValue('nome',  $obj->nome);
        $consulta->bindValue('data_nascimento' , $obj->data_nascimento);
        $consulta->bindValue('profissao' , $obj->profissao);
        $consulta->bindValue('email', $obj->email);
        $consulta->bindValue('telefone' , $obj->telefone);
        $consulta->bindValue('celular' , $obj->celular);
        $consulta->bindValue('whatsapp' , $obj->whatsapp);
        $consulta->bindValue('notificacoes_email' , $obj->notificacoes_email);
        $consulta->bindValue('notificacoes_sms' , $obj->notificacoes_sms);
		$consulta->bindValue('id', $id);
		return $consulta->execute();
	}

	public function delete($obj,$id = null){
		$sql =  "DELETE FROM tbl_contatos_alpha WHERE id = :id";
		$consulta = Conexao::prepare($sql);
		$consulta->bindValue('id',$id);
		$consulta->execute();
        return $consulta->execute();
	}

	public function find($id = null){
        $sql =  "SELECT * FROM tbl_contatos_alpha WHERE id = :id";
        $consulta = Conexao::prepare($sql);
        $consulta->bindValue('id',$id);
        $consulta->execute();
        return $consulta->fetch();
	}

	public function findAll(){
		$sql = "SELECT * FROM tbl_contatos_alpha";
		$consulta = Conexao::prepare($sql);
		$consulta->execute();
		return $consulta->fetchAll();
	}
}
?>