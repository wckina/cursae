<?php 
session_start();
require_once("../../inc/restrict.php");
require_once("newsletter.class.php");
$newsletter = new Newsletter();
//$newsletter->debug(true);

function success(){
	$_SESSION['acao'] = "sucesso";
	header("location:/admin/app/newsletter?acao=sucesso");
	exit();
}

function error(){
	$_SESSION['acao'] = "error"; 
	header("location:/admin/app/newsletter?acao=error");
	exit();
}



//INSERT
if($_GET['action'] == "add"){
	
	if($newsletter->add()){
		success();
	}
	else{
		error();
	}
}

//DELETE
if($_GET['action'] == "delete"){

	if($newsletter->delete($_GET['id'])){
		success();
	}
	else{
		error();
	}
}

//UPDATE
if($_GET['action'] == "update"){

	if($newsletter->update($_POST['id']))
		success();
	else
		error();
}