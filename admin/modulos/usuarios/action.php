<?php 
session_start();
require_once("../../inc/restrict.php");
require_once("usuarios.class.php");
$usuarios = new Usuarios();
//$usuarios->debug(true);

function success(){
	$_SESSION['acao'] = "sucesso";
	header("location:/admin/app/usuarios?acao=sucesso");
	exit();
}

function error(){
	$_SESSION['acao'] = "error"; 
	header("location:/admin/app/usuarios?acao=error");
	exit();
}

function passwordError(){
	header("location:/admin/app/usuarios/edit/?acao=password_not_equal");
	exit();
}

if($_POST['senha'] != $_POST['r_senha']){
	passwordError();
}


//switchs validator
if($_POST['notificar']){
	$_POST['notificar'] = 1;
}else{
	$_POST['notificar'] = 0;
}    

//INSERT
if($_GET['action'] == "add"){
	$_POST['senha'] = md5($_POST['senha']."SALT#_%$");
	if($usuarios->add())
		success();
	else
		error();
}

//DELETE
if($_GET['action'] == "delete"){
	if($usuarios->delete($_GET['id']))
		success();	
	else
		error();
}

//UPDATE
if($_GET['action'] == "update"){
	if($_POST['senha']){
		$_POST['senha'] = md5($_POST['senha']."SALT#_%$");
	}else{
		unset($_POST['senha']);
		unset($_POST['r_senha']);
	}

	if($usuarios->update($_POST['id']))
		success();
	else
		error();
}