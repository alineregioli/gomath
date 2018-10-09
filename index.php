<?php  include 'view/header.php';

if(!isset($_GET['rota'])) $_GET['rota'] = '';
switch ($_GET['rota']) {
	case 'sair':
		header('Location: control/sair.php');
		break;
	case 'entrar':
		include 'view/entrar.php';
		break;
	case 'cadastrar':
		include 'view/cadastrar.php';
		break;
	case 'cadastro-questao':
		include 'view/cadastro-questao.php';
		break;
	

	default:
		if(!isset($_SESSION['nome']) || empty($_SESSION['nome'])){
			include 'view/home.php';
		}
		else{
			include 'view/problemas.php'; 
		}
		break;
}
include 'view/footer.php'; ?>