<?php 
session_start();
unset($_SESSION['estudante_id']);
unset($_SESSION['estudante_nome']);
unset($_SESSION['estudante_email']);
unset($_SESSION['acao']);
unset($_SESSION['play_course']);
header("location:/");