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
	$idQuestao = $QuestaoDAO->inserir($banco,$Questao);
	//inserir alternativas
	// criar 4 alternativas. e colocar 1 na correta

	//pegar id da ultima questão criada
	//select max(questaoId) from tbQuestao;

	//alternativa1 :  depois fazer outras
	$alternativa1 =  new Alternativa();
	$alternativa1->__set('alternativaTexto', $_POST['campoAlternativa1']);
    $alternativa1->__set('TbQuestao_questaoId', $idQuestao);    
    $alternativa1->__set('alternativaCorreta', 1);
    $AlternativaDAO->inserir($banco,$alternativa1);

    $alternativa2 =  new Alternativa();
	$alternativa2->__set('alternativaTexto', $_POST['campoAlternativa2']);
    $alternativa2->__set('TbQuestao_questaoId', $idQuestao);
    $alternativa2->__set('alternativaCorreta', 0);
    $AlternativaDAO->inserir($banco,$alternativa2);

    $alternativa3 =  new Alternativa();
	$alternativa3->__set('alternativaTexto', $_POST['campoAlternativa3']);
    $alternativa3->__set('TbQuestao_questaoId', $idQuestao);
    $alternativa3->__set('alternativaCorreta', 0);
    $AlternativaDAO->inserir($banco,$alternativa3);

    $alternativa4 =  new Alternativa();
	$alternativa4->__set('alternativaTexto', $_POST['campoAlternativa4']);
    $alternativa4->__set('TbQuestao_questaoId', $idQuestao);
    $alternativa4->__set('alternativaCorreta', 0);
    $AlternativaDAO->inserir($banco,$alternativa4);




}
catch(Exception $e){
	echo $e->getMessage();
}
