<?php 
session_start();
require_once("../../inc/restrict.php");
require_once("emails.class.php");
$emails = new Emails();
//$emails->debug(true);

function success(){
	$_SESSION['acao'] = "sucesso";
	header("location:/admin/app/emails?acao=sucesso");
	exit();
}

function error(){
	$_SESSION['acao'] = "error"; 
	header("location:/admin/app/emails?acao=error");
	exit();
}

//INSERT
if($_GET['action'] == "add"){
	if($emails->add()){
		success();
	}
	else{
		error();
	}
}

//DELETE
if($_GET['action'] == "delete"){
	if($emails->delete($_GET['id'])){
		success();
	}
	else{
		error();
	}
}

//UPDATE
if($_GET['action'] == "update"){
	if($emails->update($_POST['id']))
		success();
	else
		error();
}