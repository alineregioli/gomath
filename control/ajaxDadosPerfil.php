<?php 

require_once('../model/Banco.php');
require_once('../model/Submissao.php');
require_once('../model/SubmissaoDAO.php');
require_once('../model/AlternativaDAO.php');
$banco = new Banco();
$banco->conectar();
$SubmissaoDAO = new SubmissaoDAO();
$data = array();
$data[] = SubmissaoDAO::tentados($banco,$_POST['id']);
$data[] = SubmissaoDAO::resolvidos($banco,$_POST['id']);
echo json_encode($data);