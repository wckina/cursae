<?php
require_once realpath(dirname(__FILE__)) . "/../../classes/action.class.php";

class Instrutores extends Action{
	public function __construct(){
		parent::__construct('instrutores');
	}

	public function getDados($email,$senha){
		return $this->query("SELECT * FROM $this->tabela WHERE email='$email' AND senha='$senha'")->Fetch();
	}
	
}