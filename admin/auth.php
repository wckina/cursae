<?php 
ini_set('display_errors', 'off');
require_once("modulos/usuarios/usuarios.class.php");
$usuarios = new Usuarios();

$_POST['senha'] = md5($_POST['senha']."SALT#_%$");
$usuario = addslashes($_POST['usuario']);
$senha = addslashes($_POST['senha']);

$get = $usuarios->getDados($usuario,$senha);

if($get->id AND $get->nome){
    session_start();
    $_SESSION['admin_id'] = $get->id;
    $_SESSION['admin_nome'] = $get->nome;
    $_SESSION['admin_email'] = $get->email;

    header("location:/admin/");
    die();
    exit();
}else{
    header("location:/admin/login?acao=error");
    die();
    exit();    
}