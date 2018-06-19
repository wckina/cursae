<?php
require_once realpath(dirname(__FILE__)) . "/../../classes/action.class.php";

class MateriaisAulas extends Action{
	public function __construct(){
		parent::__construct('materiais_aulas');
	}

	public function getList(){
		return $this->query("SELECT * FROM $this->tabela");
	}

	public function getListIdAula($id_aula){
		return $this->query("SELECT * FROM $this->tabela WHERE id_aula = '$id_aula'")->FetchAll();
	}

	public function verifyMaterial($id_aula){
		return $this->query("SELECT * FROM $this->tabela WHERE id_aula = '$id_aula'")->rowCount();
	}

}