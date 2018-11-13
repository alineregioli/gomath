<?php 

require_once('../model/Banco.php');
require_once('../model/Submissao.php');
require_once('../model/SubmissaoDAO.php');
require_once('../model/AlternativaDAO.php');
$banco = new Banco();
$banco->conectar();
$SubmissaoDAO = new SubmissaoDAO();
$data = array();
$_POST['page']--;
$data[] = SubmissaoDAO::tentados($banco,$_POST['id']);
$data[] = SubmissaoDAO::resolvidos($banco,$_POST['id']);
$data[] = SubmissaoDAO::retornarSubmissoes($banco,$_POST['id']);
$ranking = SubmissaoDAO::retornarRanking($banco);
$pos = count($ranking)+1;
foreach ($ranking as $key => $value) {
	if($value['id'] == $_POST['id']){
		$pos = $key+1;
		$pontos = $value['pontos'];
		break;
	}
}
$data[] = intval(count($data[2]));
$data[] = intval($pos);
$data[] = intval($pontos);
$data[2] = array_slice($data[2], $_POST['limit']*$_POST['page'],$_POST['limit']);
echo json_encode($data);