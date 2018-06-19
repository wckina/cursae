<?php 
session_start();
require_once("../../inc/restrict.php");
require_once("categorias.class.php");
$categorias = new Categorias();
//$categorias->debug(true);

function success(){
	$_SESSION['acao'] = "sucesso";
	header("location:/admin/app/categorias?acao=sucesso");
	exit();
}

function error(){
	$_SESSION['acao'] = "error"; 
	header("location:/admin/app/categorias?acao=error");
	exit();
}

//INSERT
if($_GET['action'] == "add"){
	if($categorias->add()){
		success();
	}
	else{
		error();
	}
}

//DELETE
if($_GET['action'] == "delete"){
	if($categorias->delete($_GET['id'])){
		success();
	}
	else{
		error();
	}
}

//UPDATE
if($_GET['action'] == "update"){
	if($categorias->update($_POST['id']))
		success();
	else
		error();
}