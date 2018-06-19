<?php
require_once realpath(dirname(__FILE__)) . "/../../classes/action.class.php";

class usuarios extends Action{
	public function __construct(){
		parent::__construct('usuarios');
	}


	public function getDados($usuario,$senha){
		return $this->query("SELECT * FROM $this->tabela WHERE usuario='$usuario' AND senha='$senha'")->Fetch();
	}

	public function selectNotificados(){
		return $this->query("SELECT * FROM $this->tabela WHERE notificar='1'")->FetchAll();
	}
	
}