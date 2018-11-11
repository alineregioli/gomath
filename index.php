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
	case 'ver-questao':
		include 'view/ver-questao.php';
		break;
	case 'perfil':
		include 'view/perfil.php';
		break;
	

	default:
		if(!isset($_SESSION['nome']) || empty($_SESSION['nome'])){
			include 'view/home.php';
		}
		else{
			//header('Location: control/questoes.php');
			//$_POST['page']

			
			include 'view/questoes.php'; 
		}
		break;
}
include 'view/footer.php'; ?>