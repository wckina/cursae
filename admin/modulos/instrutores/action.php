<?php 
session_start();
require_once("../../inc/restrict.php");
require_once("instrutores.class.php");
$instrutores = new Instrutores();
//$instrutores->debug(true);

function success(){
	$_SESSION['acao'] = "sucesso";
	header("location:/admin/app/instrutores?acao=sucesso");
	exit();
}

function error(){
	$_SESSION['acao'] = "error"; 
	header("location:/admin/app/instrutores?acao=error");
	exit();
}

function passwordError(){
	header("location:/admin/app/instrutores/edit/?acao=password_not_equal");
	exit();
}

if($_FILES['foto']['name']){
	$ext = strrchr($_FILES['foto']['name'], ".");
	$name = uniqid().$ext;
	if(move_uploaded_file ( $_FILES['foto']['tmp_name'] , "../../uploads/".$name)){
		$_POST['foto'] = $name;
	}
}

if($_POST['senha'] != $_POST['r_senha']){
	passwordError();
}

//INSERT
if($_GET['action'] == "add"){
	$_POST['senha'] = md5($_POST['senha']."SALT#_%$");
	if($instrutores->add())
		success();
	else
		error();
}

//DELETE
if($_GET['action'] == "delete"){
	if($instrutores->delete($_GET['id']))
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

	if($instrutores->update($_POST['id']))
		success();
	else
		error();
}