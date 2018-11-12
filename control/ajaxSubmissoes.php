<?php 

require_once('../model/Banco.php');
require_once('../model/Submissao.php');
require_once('../model/SubmissaoDAO.php');
require_once('../model/AlternativaDAO.php');
$banco = new Banco();
$banco->conectar();
$SubmissaoDAO = new SubmissaoDAO();
$_POST['page']--;
$data = array();
$data[] = SubmissaoDAO::retornarSubmissoes($banco,$_POST['id']);
$data[0] = array_slice($data[0], $_POST['limit']*$_POST['page'],$_POST['limit']);
echo json_encode($data);