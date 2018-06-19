<?php
require_once realpath(dirname(__FILE__)) . "/../../classes/action.class.php";

class Planos extends Action{
	public function __construct(){
		parent::__construct('planos');
	}

	public function getList(){
		return $this->query("SELECT * FROM $this->tabela");
	}	

}