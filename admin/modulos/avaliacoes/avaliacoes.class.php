<?php
require_once realpath(dirname(__FILE__)) . "/../../classes/action.class.php";

class avaliacoes extends Action{
	public function __construct(){
		parent::__construct('avaliacoes');
	}
	
	public function getByCurso($id_curso){
		return $this->query("SELECT * FROM $this->tabela WHERE id_curso ='$id_curso' ORDER BY data DESC")->FetchAll();
	}		

	public function getByCursoEstudante($id_curso,$id_estudante){
		return $this->query("SELECT * FROM $this->tabela WHERE id_curso ='$id_curso' AND id_estudante = '$id_estudante'")->Fetch();
	}			

}