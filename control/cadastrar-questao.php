<?php 

require_once('../model/Banco.php');
require_once('../model/Questao.php');
require_once('../model/QuestaoDAO.php');

$banco = new Banco();
$banco->conectar();
echo '<pre>';
$Questao = new Questao();
$Questao->__set('questaoNome',$_POST['nomeQuestao']);
$Questao->__set('questaoDescricao',$_POST['enunciadoQuestao']);
$Questao->__set('questaoDataCriacao', date('Y-m-d H:i:s'));
$Questao->__set('questaoAssunto',$_POST['assuntoQuestao']);
$Questao->__set('questaoDificuldade',$_POST['dificuldadeQuestao']);//colocar no banco
$Questao->__set('TbAlternativa_alternativaId',$_POST['alternativa']);//colocar no banco
$Questao->__set('questaoDados',$_POST['paraSalvar']);//colocar no banco
var_dump($Questao);
var_dump($Questao->__attributes());
$QuestaoDAO = new QuestaoDAO();

try{
	$QuestaoDAO->inserir($banco,$Questao);
}
catch(Exception $e){
	echo $e->getMessage();
}
