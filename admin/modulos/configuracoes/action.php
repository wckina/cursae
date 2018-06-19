<?php 
session_start();
require_once("../../inc/restrict.php");
require_once("configuracoes.class.php");
$configuracoes = new Configuracoes();
//$configuracoes->debug(true);

function success(){
	$_SESSION['acao'] = "sucesso";
	header("location:/admin/app/configuracoes/edit/1?acao=sucesso");
	exit();
}

function error(){
	$_SESSION['acao'] = "error"; 
	header("location:/admin/app/configuracoes/edit/1?acao=error");
	exit();
}


//UPDATE
if($_GET['action'] == "update"){
	if($configuracoes->update($_POST['id'])){
		success();
	}
	else {
		error();
	}
}