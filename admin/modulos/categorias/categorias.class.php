<?php
require_once realpath(dirname(__FILE__)) . "/../../classes/action.class.php";

class categorias extends Action{
	public function __construct(){
		parent::__construct('categorias');
	}

	public function getList(){
		return $this->query("SELECT * FROM $this->tabela ORDER BY ordem DESC");
	}		

	public function getSlug($slug){
		return $this->query("SELECT * FROM $this->tabela WHERE slug='$slug' LIMIT 1")->Fetch();
	}	
		
	public function getListPai(){
		return $this->query("SELECT * FROM $this->tabela WHERE id_categoria IS NULL ORDER BY ordem DESC");
	}	
	public function getListFilhas($id_categoria){
		return $this->query("SELECT * FROM $this->tabela WHERE id_categoria ='$id_categoria' ORDER BY ordem DESC")->FetchAll();
	}		

}