<?php 
require_once('../model/Banco.php');
require_once('../model/Questao.php');
require_once('../model/QuestaoDAO.php');
$banco = new Banco();
$banco->conectar();
QuestaoDAO::excluir($banco,$_POST['id']);
header('Location: ../');
?>