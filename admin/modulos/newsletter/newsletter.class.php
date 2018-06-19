<?php
require_once realpath(dirname(__FILE__)) . "/../../classes/action.class.php";

class Newsletter extends Action{
	public function __construct(){
		parent::__construct('newsletter');
	}

	public function getList(){
		return $this->query("SELECT * FROM $this->tabela");
	}	

	public function getByEmail($email){
		return $this->query("SELECT * FROM $this->tabela WHERE email='$email'")->Fetch();
	}	

}