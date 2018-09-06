<?php 

require_once('../model/Banco.php');
require_once('../model/Usuario.php');
require_once('../model/UsuarioDAO.php');

$banco = new Banco();
$banco->conectar();
echo '<pre>';
$Usuario = new Usuario();
$Usuario->Init($_POST['nome-completo'],$_POST['email'],$_POST['senha'], date('Y-m-d H:i:s'),$_POST['sexo'],2);
var_dump($Usuario);
/*var_dump($_POST);
$UsuarioDAO = new UsuarioDAO();
$UsuarioDAO->inserir($banco,$Usuario); */
