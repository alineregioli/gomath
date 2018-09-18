<?php 

require_once('../model/Banco.php');
require_once('../model/Usuario.php');
require_once('../model/UsuarioDAO.php');

// as variáveis login e senha recebem os dados digitados na página anterior
$login = $_POST['email'];
$senha = $_POST['senha'];

$banco = new Banco();
$banco->conectar();
if($banco->logar($login,$senha)){
	header('Location: ../problemas.php');
}
else{
	header('Location: ../entar.php');
}
?>