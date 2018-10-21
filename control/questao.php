<?php 

require_once('../model/Banco.php');
require_once('../model/Questao.php');
require_once('../model/QuestaoDAO.php');
require_once('../model/Alternativa.php');
require_once('../model/AlternativaDAO.php');
$banco = new Banco();
$banco->conectar();
$questao = QuestaoDAO::retornarQuestao($banco,$_POST['id']);
$x = $questao['dados'];
eval($x);
$str = $questao['descricao'];
eval("\$str = \"$str\";");
$questao['descricao'] = $str;
$alternativas = AlternativaDAO::retornarAlternativasQuestao($banco,$_POST['id']);
foreach ($alternativas as $key => $value) {
	$str = $alternativas[$key]['texto'];
	eval("\$str = \"$str\";");
	$alternativas[$key]['texto'] = $str;
}
shuffle($alternativas);
$result = array('questao' => $questao, 'alternativas' => $alternativas);
echo json_encode($result);
