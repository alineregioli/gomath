<?php 

require_once('../model/Banco.php');
require_once('../model/Questao.php');
require_once('../model/QuestaoDAO.php');
require_once('../model/Alternativa.php');
require_once('../model/AlternativaDAO.php');

$paginacao = 10;
$atual = intval($_POST['page']);
$banco = new Banco();
$banco->conectar();
$questoes = QuestaoDAO::retornarQuestoes($banco);
$total = intval(count($questoes)/$paginacao);
$questoes = array_slice($questoes, $paginacao*$atual,$paginacao);
$questoes[] = $total;
echo json_encode($questoes);
