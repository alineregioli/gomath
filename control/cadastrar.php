<?php 

require_once('../model/Banco.php');
require_once('../model/Usuario.php');
require_once('../model/UsuarioDAO.php');

$banco = new Banco();
$banco->conectar();
echo '<pre>';
$Usuario = new Usuario();
$Usuario->__set('usuarioNomeCompleto',$_POST['nome-completo']);
$Usuario->__set('usuarioEmail',$_POST['email']);
$Usuario->__set('usuarioSenha',$_POST['senha']);
$Usuario->__set('usuarioDataCadastro', date('Y-m-d H:i:s'));
$Usuario->__set('usuarioSexo',$_POST['sexo']);
$Usuario->__set('TbEspecie_especieId',2);
var_dump($Usuario);
var_dump($Usuario->__attributes());
$UsuarioDAO = new UsuarioDAO();

try{
	$UsuarioDAO->inserir($banco,$Usuario);
}
catch(Exception $e){
	echo $e->getMessage();
}
