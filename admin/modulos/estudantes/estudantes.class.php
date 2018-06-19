<?php
require_once realpath(dirname(__FILE__)) . "/../../classes/action.class.php";

class Estudantes extends Action{
	public function __construct(){
		parent::__construct('estudantes');
	}

	public function getList(){
		return $this->query("SELECT * FROM $this->tabela ORDER BY ordem DESC");
	}

	public function getInfo($id){
		return $this->query("SELECT * FROM $this->tabela WHERE id='$id'")->Fetch();
	}	

	public function getByEmail($email){
		return $this->query("SELECT * FROM $this->tabela WHERE email ='$email'")->fetch();
	}	

	public function getDados($email,$password){
		return $this->query("SELECT * FROM $this->tabela WHERE email='$email' AND password='$password'")->fetch();
	}	

	public function getMaxOrdem(){
		return $this->query("SELECT MAX(ordem) as max_ordem FROM $this->tabela")->Fetch();
	}

	public function verifyStudent($email){
		return $this->query("SELECT * FROM $this->tabela WHERE email='$email'")->Fetch();
	}	

}