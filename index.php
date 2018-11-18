<?php  include 'view/header.php';
//sserror_reporting(0);
if(!isset($_GET['rota'])) $_GET['rota'] = '';
switch ($_GET['rota']) {
	case 'sair':
		header('Location: control/sair.php');
		break;
	case 'entrar':
		if(isset($_SERVER['HTTP_REFERER'])){
			$old = parse_url($_SERVER['HTTP_REFERER']);
			$old = explode('/', $old['path']);
			$old = end($old);
			if($old == 'entrar') $aux = true;
		}
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
	case 'conteudo':
		include 'view/conteudo.php';
		break;
	case 'perfil':
		include 'view/perfil.php';
		break;
	case 'ranking':
		include 'view/ranking.php';
		break;
	case 'accepted':
		include 'view/accepted.php';
		break;
	case 'wa':
		include 'view/wa.php';
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