<?php 

require_once('../model/Banco.php');
require_once('../model/Questao.php');
require_once('../model/QuestaoDAO.php');
require_once('../model/Alternativa.php');
require_once('../model/AlternativaDAO.php');

$banco = new Banco();
$banco->conectar();
echo '<pre>';
$Questao = new Questao();
$Questao->__set('questaoNome',$_POST['nomeQuestao']);
$Questao->__set('questaoDescricao',$_POST['enunciadoQuestao']);
$Questao->__set('questaoDataCriacao', date('Y-m-d H:i:s'));
$Questao->__set('questaoAssunto',$_POST['assuntoQuestao']);
$Questao->__set('questaoDificuldade',$_POST['dificuldadeQuestao']);//colocar no banco
$Questao->__set('questaoDados',$_POST['paraSalvar']);//colocar no banco
var_dump($Questao);
var_dump($Questao->__attributes());
$QuestaoDAO = new QuestaoDAO();

try{
	$QuestaoDAO->inserir($banco,$Questao);
	//inserir alternativas
	// criar 4 alternativas. e colocar 1 na correta

	//pegar id da ultima questão criada
	//select max(questaoId) from tbQuestao;

	 $volta = $QuestaoDAO->maiorid($banco);
	 echo $volta;

	 //alternativa1 :  depois fazer outras
	$alternativa1 =  new Alternativa();
	$alternativa1->set('alternativaTexto', $_POST['campoAlternativa1']);
    $alternativa1->set('alternativaCorreta', ($_POST['alternativa'] == 1) ? 1: 0);
    $alternativa1->set('TbQuestao_questaoId', $QuestaoDAO->maiorid($banco));
}
catch(Exception $e){
	echo $e->getMessage();
}
