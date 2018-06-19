<?php
require_once realpath(dirname(__FILE__)) . "/../../classes/action.class.php";

class Emails extends Action{
	public function __construct(){
		parent::__construct('emails');
	}

	public function getList(){
		return $this->query("SELECT * FROM $this->tabela ORDER BY id DESC");
	}	

	public function getByIdProduto($id_produto){
		return $this->query("SELECT * FROM $this->tabela WHERE id_produto='$id_produto'")->Fetch();
	}	

}