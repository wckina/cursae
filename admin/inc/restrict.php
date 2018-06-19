<?php 
ini_set('display_errors', 0);
ob_start();
session_start();
if(!$_SESSION['admin_id']){
header("location:/admin/login");
die();
exit();
}