<?php 

require_once('../model/Banco.php');
require_once('../model/Submissao.php');
require_once('../model/SubmissaoDAO.php');
require_once('../model/AlternativaDAO.php');
$banco = new Banco();
$banco->conectar();
$SubmissaoDAO = new SubmissaoDAO();
$_POST['page']--;
$ranking = SubmissaoDAO::retornarRanking($banco);
$total = count($ranking);
$ranking = array_slice($ranking, $_POST['limit']*$_POST['page'],$_POST['limit']);
$ranking[] = $total;

echo json_encode($ranking);