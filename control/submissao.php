<?php 

require_once('../model/Banco.php');
require_once('../model/Submissao.php');
require_once('../model/SubmissaoDAO.php');
require_once('../model/AlternativaDAO.php');
session_start();
$banco = new Banco();
$banco->conectar();
$correta = AlternativaDAO::retornarAlternativaCorreta($banco,$_POST["idquestao"]);
if($_POST["alternativa"] == $correta['id']){
	$veredito = 1;
}
else{
	$veredito = 0;
}

$Submissao = new Submissao();
$Submissao->__set('submissaoData',date('Y-m-d H:i:s'));
$Submissao->__set('TbVeredito_vereditoId',$veredito);
$Submissao->__set('TbAlternativa_alternativaId',$_POST["alternativa"]);
$Submissao->__set('TbUsuario_usuarioId',$_SESSION["id"]);
$Submissao->__set('TbQuestao_questaoId',$_POST["idquestao"]);


$SubmissaoDAO = new SubmissaoDAO();

try{
	$SubmissaoDAO->inserir($banco,$Submissao);
	header("Location: ../perfil");
}
catch(Exception $e){
	echo $e->getMessage();
}
