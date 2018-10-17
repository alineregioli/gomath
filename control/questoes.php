<?php 

require_once('../model/Banco.php');
require_once('../model/Questao.php');
require_once('../model/QuestaoDAO.php');
require_once('../model/Alternativa.php');
require_once('../model/AlternativaDAO.php');

$banco = new Banco();
$banco->conectar();

echo '<pre>';
var_dump(QuestaoDAO::retornarQuestoes($banco));
